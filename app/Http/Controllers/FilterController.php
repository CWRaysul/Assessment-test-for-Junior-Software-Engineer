<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filtersData =  json_decode($this->data());

        $result =  $this->finalData($filtersData->flightOffer);

        return view('masterPrice', compact('result'));
    }

    public function filter(Request $request){
        $form = $request->from;
        $to = $request->to;
        $class = $request->class;

        $filtersData =  json_decode($this->data());
        $filterData =  $this->finalData($filtersData->flightOffer);

        $result = [];
        foreach($filterData as $item){
            if(isset($form) && isset($to)){
                $filter = $form.'-'.$to;
                if(in_array($filter, $item['route'])){
                    if (isset($class)) {
                        if (in_array($class, $item['class'])) {
                            array_push($result, $item);
                        }
                    }else{
                        array_push($result, $item);
                    }
                }
            }
        }

        return view('masterPrice', compact('result'));
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
        //
    }
}
