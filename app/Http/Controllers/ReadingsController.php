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
        if (is_array($input->get('readings'))){
            foreach ($input->get('readings') as $readingItem) {
                $reading = new Reading();
                $reading->value = $readingItem['value'];
                if (isset($readingItem['readingtype_id'])) {
                    $reading->readingtype_id = $readingItem['readingtype_id'];
                } else {
                    $reading->readingtype_id = 0;
                }

                $reading->created_at = $readingItem['created_at'];
                $reading->user_id= $readingItem['user_id'];
                $reading->save();
            }
            return response('readings uploaded',201);
        } else {
            return response('readings must be an array');
        }
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
