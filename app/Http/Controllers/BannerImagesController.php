<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\BannerMessage;

class BannerImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd("index");
        $banner_images = DB::table('banner__images')->orderBy('sort')->get();
        // dd($banner_images);
        return view('BackeStage/Banner/index',compact("banner_images"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  dd("create banner_images");
         return view('BackeStage/Banner/create');
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
        $requestSort = $request->sort;

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $path = $this->fileUpload($file, 'Banner');
            $requestData['img'] = $path;
        }
        
        DB::table('banner__images')->insert([
            [ 'img' => $path,'sort' => $requestSort]
        ]);
     
        return redirect('/admin/BannerImages');
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
        // dd('edit banner_images');
        $banner_image = DB::table('banner__images')->where('id','=',$id)->first();
        // dd($contact_service);
        return view('BackeStage/Banner/edit',compact('banner_image'));
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
        $banner_image = BannerMessage::find($id);
        $requestData = $request->all();
        if ($request->hasFile('img')) {
            //刪除檔案
            $old_image = $banner_image->img;
            if(file_exists(public_path() .$old_image))
                File::delete(public_path() . $old_image);
            $file = $request->file('img');
            $path = $this->fileUpload($file, 'banner'); //硬碟存入新檔案
            $requestData['img'] = $path; //存入顯示路徑

        }
    
        $banner_image->update($requestData);

        return redirect('/admin/BannerImages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        // dd("delete images");
        $delte_item = BannerMessage::find($id);
        // dd($delte_item);
        if($delte_item){
            if(file_exists($delte_item->img))
                File::delete(public_path() . $delte_item->img);
            $delte_item->delete();
        }
        return redirect('/admin/BannerImages');
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
