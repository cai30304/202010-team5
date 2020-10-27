<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Products;
use App\ProductTypes;
use App\Material;
use App\MaterialImages;

class ProductController extends Controller
{
    public function index()
    {
        // dd("index news");
        $products = Products::get();
        // dd($news_list);
        return view('BackeStage/Product/index', compact('products'));
    }

    public function create()
    {
        $product_types = ProductTypes::orderBy('sort', 'desc')->get();
        return view('BackeStage/Product/create', compact('product_types'));
    }

    public function store(Request $request)
    {
        // dd($request->multiple_images);
        if ($request->sort == null) {
            $request->sort = (int)0;
        }

        // dd($request->all());
        //儲存資訊圖片
        if ($request->hasFile('info_img')) {
            $file = $request->file('info_img');
            $path = $this->fileUpload($file, 'ProductImages');
            $request->info_img = $path;
        }

         Material::insert([
            ['material_name' => $request->material_name,
             'sort' => $request->sort,
             'created_at'=>now(),
             'updated_at'=>now()]
        ]);
        $material = Material::orderBy('created_at','desc')->first();
        // dd($material);
        
        Products::insert([
            ['product_name'=> $request->product_name,
             'info'=>$request->info,
             'info_img'=>$request->info_img,
             'sort'=>$request->sort,
             'material_id'=>$material->id,
             'type_id'=>$request->type_id,
             'created_at'=>now(),
             'updated_at'=>now()]
        ]);
        $new_product = Products::orderBy('created_at','desc')->first();

       

        // 多個檔案
        if($request->hasFile('multiple_images'))
        {
            $files = $request->file('multiple_images');
            foreach ($files as $file) {
                //上傳圖片
                $path = $this->fileUpload($file,'MaterialImages');
                //新增資料進DB
                $material_img = new MaterialImages;
                $material_img->materail_id = $new_product->material_id;
                $material_img->material_image = $path;
                $material_img->save();
            }
            // dd($files);
        }

        return redirect('/admin/Products');
    }

    public function edit($id)
    {
        // dd("edit");
        $product = Products::find($id);
        $material_id = $product->material_id;
        $material_images = MaterialImages::where("materail_id",'=',$material_id)->get();
        $product_types = ProductTypes::orderBy('sort', 'desc')->get();
      
        return view('BackeStage/Product/edit',compact('product','material_images','product_types'));
    }

    public function update(Request $request, $id)
    {
    
        $product = Products::find($id);
        $requestData = $request->all();
        $requestData['info_img'] = $product->info_img;//先取得info_img，若未更改則依原資料
   
        if ($request->hasFile('info_img')) {
			//刪除檔案
			$old_image = $product->info_img;
			File::delete(public_path() . $old_image);
			$file = $request->file('info_img');
			$path = $this->fileUpload($file, 'ProductImages'); //硬碟存入新檔案
			$requestData['info_img'] = $path; //存入顯示路徑
        }
        //多個檔案
        if($request->hasFile('multiple_images'))
        {
            $files = $request->file('multiple_images');
            foreach ($files as $file) {
                //上傳圖片
                $path = $this->fileUpload($file,'product_imgs');
                //更改material Images資料庫資料

                $material_img = new MaterialImages;
                $material_img->materail_id = $product->material_id;
                $material_img->material_image = $path;
                $material_img->save();
            }
        }
        //更新product 資料庫
        DB::table('products')->where('id',$id)->update([
            'product_name'=> $request->product_name,
             'info'=>$request->info,
             'info_img'=>$requestData['info_img'],
             'sort'=>$request->sort,
             'type_id'=>$request->type_id,
             'updated_at'=>now()
        ]);

        
        //更改material資料
        $material_id = $product->material_id;
        DB::table('materials')->where('id',$material_id)->update([
            'material_name'=> $request->material_name,
            'updated_at' => now()
        ]);

        return redirect('/admin/Products');
    }

    public function destroy($id)
    {   
        $product = Products::find($id);
        $matetrial_id = $product->material_id;//要刪除的產品之顏色id
        $delete_images = DB::table('material_images')->where('materail_id',$matetrial_id)->get();
        // dd($delete_images);
        foreach( $delete_images as $delete_image){
            if(file_exists($delete_image->material_image)){
                File::delete(public_path() . $delete_image->material_image);
            }
        }
        DB::table('material_images')->where('materail_id',$matetrial_id)->delete();
        Material::find($matetrial_id)->delete();
        Products::find($id)->delete();
        return redirect('/admin/Products');
    }

    private function fileUpload($file, $dir)
    {
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/')) {
            mkdir('upload/');
        }
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/' . $dir)) {
            mkdir('upload/' . $dir);
        }
        //取得檔案的副檔名
        $extension = $file->getClientOriginalExtension();
        //檔案名稱會被重新命名
        $filename = strval(time() . md5(rand(100, 200))) . '.' . $extension;
        //移動到指定路徑
        move_uploaded_file($file, public_path() . '/upload/' . $dir . '/' . $filename);
        //回傳 資料庫儲存用的路徑格式
        return '/upload/' . $dir . '/' . $filename;
    }
}
