<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = array();
        return view('index', $data);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $res = DB::table('glc')
            ->where('type', 'glc1')
            ->get()
            ->toArray();
        foreach ($res as $id => $dbObject) {
            $arr['glc1']['massToChargeRatio'][] = $dbObject->massToChargeRatio;
            $arr['glc1']['absoluteIntensity'][] = $dbObject->absoluteIntensity;
        }

        $data = array(
            'massToChargeRatio' => json_encode($arr['glc1']['massToChargeRatio'], true),
            'absoluteIntensity' => json_encode($arr['glc1']['absoluteIntensity'], true),
            'count'             => count($arr['glc1']['massToChargeRatio']),
            'max'             => max($arr['glc1']['massToChargeRatio']),
        );
        return view('searchResult', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
