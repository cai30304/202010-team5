<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\BannerImage;
use App\ContactMessage;
use App\ContactService;
use App\News;
use App\ProductTypes;
use App\Products;
use App\Material;
use App\MaterialImages;
use App\Http\Functions;

class FrontController extends Controller
{
    public function index()
    {
        // dd("access front index");
        $banner_images = BannerImage::orderBy('sort','desc')->get();
        $news = News::orderBy('created_at','desc')->first();
        if($news == null){
            News::insert([
                [ 'id' => 1,
                'title' => "消息尚未建立",
                'subtitle' => "消息尚未建立",
                'inner_text' => "請前往建立消息頁面，建立消息後並將此提示訊息刪除",
                'info_img' =>'',
                'preview_img' =>'',
                'created_at' => now(),
                'updated_at' => now(),
                ]
            ]);
            $news = News::find(1);
            // dd($news);
            
        }
        // dd($news);
        // $productTypes = app('App\Http\Controllers\Functions')->getProductTypes();
        // // nav中材料分類本想在各個controller中呼叫，但後面之直接在nav中的php直接呼叫，在nav中呼叫只需一次，故目前在nav中呼叫。
        // dd($productTypes);
        
        return view('front/index',compact('banner_images','news'));
    }

    public function error_page()
    {
        return view('front/error_page');

    }

    public function GreenBuilding()
    {
        return view('front/GreenBuilding');
    }

    public function product_info($type){
        // dd($type);
        $product_types = ProductTypes::orderBy('id',"asc")->get();
        $products = Products::where("type_id",$type)->get();
        // dd($products);
        $product = $products[0];
        $material_images = MaterialImages::where('materail_id',$product->material_id)->get();
        // dd($material_images);
        $arrMaterialList = array();//Initiallize an empty array.

        if(count(DB::table('products')->where('type_id',$type)->get())==1)
            return view('front/BM_info',compact('product_types','product','material_images'));
        else{
            foreach($products as $product_single){
               array_push( $arrMaterialList, DB::table('material_images')->where('materail_id',$product_single->material_id)->get());
            }
            // dd($arrMaterialList);
            return view('front/BM_info_multi',compact('product_types','products','material_images','arrMaterialList'));
        }
    }



    public function BM_total()
    {
        return view('front/BM_total');
    }

    public function BM_info(){
        return view('front/BM_info');
    }
    public function BM_info_multi(){
        return view('front/BM_info_multi');
    }

    public function news_index()
    {
        $news_list = News::orderBy('created_at','desc')->paginate(3);
        // dd($news_list);
        return view('front/news_index',compact('news_list'));
    }
    public function news_info($id){
        $news = News::find($id);
        // dd($news);
        return view('front/news_content',compact('news'));
    }



    public function about_us()
    {
        return view('front/about_us');
    }
    // Show contact us page.
    public function contact_us()
    {
        $contact_service_list = ContactService::get();
        // dd($contact_service_list);
        return view('front/contact_us',compact('contact_service_list'));
    }

    public function delieverContactUsData(Request $request)
    {
        // dd("deliever_contacy_us");
        // dd($request->all());
        ContactMessage::create($request->all());
        return redirect("/contact_us");
    }

}
