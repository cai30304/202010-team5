<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ContactService;

class ContactMessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd("index");
        $messages = DB::table('contact_messages')->orderBy('created_at')->get();
        $contact_service_name_list = DB::table('contact_service')->select('service_name')->orderBy('sort')->get();

        // $contact_service_type = ContactService::with('contactMessage')->get();
        // dd($contact_service_name_list);
        return view('BackeStage/Constact_Messages/index',compact("messages","contact_service_name_list"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd("show ");
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd("destroy".$id);
        DB::table('contact_messages')->where("id","=",$id)->delete();
       
        return redirect('/admin/ContactMessages');

    }

    public function info($id)
    {
        // dd("show info");
        $message = DB::table("contact_messages")->where('id',"=",$id)->first();
        // dd($message);
        $service_type = DB::table('contact_service')->where('id','=',$message->serverce_id)->first();
        // dd($service_type);
        return view('BackeStage/Constact_Messages/info',compact('message','service_type'));
    }
}
