<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ContactService;
use App\ContactMessage;


class ContactServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // dd("index");
        $contact_service_list = DB::table('contact_service')->orderBy('sort')->get();
        // dd($contact_service_list);
        return view('BackeStage/Contact_service/index',compact("contact_service_list"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd("create contact_service");
        return view('BackeStage/Contact_service/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd("store");
        // dd($request->all());
        DB::table('contact_service')->insert([
            [ 'service_name' => $request->service_name,'sort' => $request->service_name]
        ]);
        return redirect('/admin/ContactService');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd('edit contact service');
        $contact_service = DB::table('contact_service')->where('id','=',$id)->first();
        // dd($contact_service);
        return view('BackeStage/Contact_service/edit',compact('contact_service'));
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
        // dd('update contact_service');
        // dd($request->all());
        // dd($id);
        DB::table('contact_service')->where('id','=',$id)->update(['service_name' => $request->service_name,'sort' => $request->sort]);
        // return 'success';
        $direct_url = "/admin/ContactService/";
        // dd($direct_url);
        return redirect($direct_url);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd("delete ".$id);
        $delte_item = DB::table("contact_service")->where('id','=',$id)->get();
        if($delte_item)
            DB::table("contact_service")->where('id','=',$id)->delete();
        $change_item = DB::table("contact_messages")->where('serverce_id','=',$id)->get();
        if($change_item){
            DB::table("contact_messages")->where('serverce_id','=',$id)->update(['serverce_id' => 0]);
        }
            $direct_url = "/admin/ContactService/";
        return redirect($direct_url);

    
    }

}
