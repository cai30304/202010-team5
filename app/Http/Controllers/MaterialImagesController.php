<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\MaterialImages;
class MaterialImagesController extends Controller
{
    public function destroy($product_id,$img_id){
        // dd('destroy image');    

        $item = MaterialImages::find($img_id);
        // dd(public_path() .$item->material_image);
        if(file_exists(public_path() . $item->material_image))
            File::delete(public_path() . $item->material_image);
        MaterialImages::find($img_id)->delete();

        $direct_url = '/admin/Products/' . $product_id . '/edit/';

        return redirect($direct_url);
    }
}
