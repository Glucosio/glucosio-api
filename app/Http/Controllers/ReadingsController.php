<?php

namespace GlucosioAPI\Http\Controllers;

use GlucosioAPI\Readingtype;
use Illuminate\Http\Request;

use GlucosioAPI\Http\Requests;
use GlucosioAPI\Http\Controllers\Controller;
use GlucosioAPI\Reading as Reading;

class ReadingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Reading::with('user','readingtype')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = \Input::json();
        $reading = new Reading();
        $reading->value = $input->get('value');
        $reading->readingtype_id = Readingtype::where('type',$input->get('readingtype'))->lists('id')->first();
        $reading->created_at = $input->get('created_at');
        $reading->user_id= $input->get('user_id');
        $reading->save();
        return response($reading,201);

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

}
