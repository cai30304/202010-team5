<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\News;
use App\NewsImage;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd("index news");
        $news_list = News::get();
        // dd($news_list);
        return view('BackeStage/News/index',compact('news_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd("create news");
        return view('BackeStage/News/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        // dd($requestData);

        if ($request->hasFile('info_img')) {
            $file = $request->file('info_img');
            $path = $this->fileUpload($file, 'NewsInfo');
            $requestData['info_img'] = $path;
        }

        if ($request->hasFile('preview_img')) {
            $file = $request->file('preview_img');
            $path = $this->fileUpload($file, 'NewsPreview');
            $requestData['preview_img'] = $path;
        }

        $new_news =  News::create($requestData);
        $new_news_id = $new_news->id;

        // 多個檔案
        if($request->hasFile('multiple_images'))
        {
            $files = $request->file('multiple_images');
            foreach ($files as $file) {
                //上傳圖片
                $path = $this->fileUpload($file,'NewsImgs');
                //新增資料進DB
                $news_img = new NewsImage;
                $news_img->news_id = $new_news_id;
                $news_img->news_image = $path;
                $news_img->save();
            }
        }

        return redirect('/admin/News');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd("edit");
        $news_list = News::find($id);
        $news_images = NewsImage::where("news_id",'=',$id)->get();
        // $product_imgs = DB::table('productimages')->where("product_id",$product->id)->whereNotNull('product_id')->orderBy("sort","asc")->get();

        // dd($news_images);
        // dd($products->info);
        return view('BackeStage/News/edit',compact('news_list','news_images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd('update');
        // $news = DB::table('news')->find($id);
        $news = News::find($id);
        $requestData = $request->all();

        if ($request->hasFile('info_img')) {
				//刪除檔案
				$old_image = $news->info_img;
				File::delete(public_path() . $old_image);

				$file = $request->file('info_img');
				$path = $this->fileUpload($file, 'NewsImgs'); //硬碟存入新檔案
				$requestData['info_img'] = $path; //存入顯示路徑

        }

        if ($request->hasFile('preview_img')) {
            //刪除檔案
            $old_image = $news->info_img;
            File::delete(public_path() . $old_image);

            $file = $request->file('preview_img');
            $path = $this->fileUpload($file, 'NewsImgs'); //硬碟存入新檔案
            $requestData['preview_img'] = $path; //存入顯示路徑

    }

        //多個檔案
        if($request->hasFile('multiple_images'))
        {
            $files = $request->file('multiple_images');
            foreach ($files as $file) {
                //上傳圖片
                $path = $this->fileUpload($file,'product_imgs');
                //新增資料進DB
                $news_img = new NewsImage;
                $news_img->news_id = $id;
                $news_img->news_image = $path;
                $news_img->save();
            }
        }
        // dd($requestData);
        // dd($product);
        $news->update($requestData);

        return redirect('/admin/News');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_images = NewsImage::where("news_id","=",$id)->get();
        // dd($delete_images);
        foreach( $delete_images as $delete_image){
            if(file_exists($delete_image->news_image)){
                File::delete(public_path() . $delete_image->img);
            }
        }
        NewsImage::where("news_id","=",$id)->delete();
        News::find($id)->delete();
        return redirect('/admin/News');
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
