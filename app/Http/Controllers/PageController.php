<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = request();
        $img_path = request('img_path');
        foreach ($img_path as $da) {
            $img_path[] = $da->store('uplode', 'public');
        }
        // dd($img_path);
        Page::create([
            'name' => $data['name'],
            'code' => $data['code'],
            'description' => $data['description'],
            'img_path-1' => $img_path[0],
            'img_path-2' => $img_path[1],
            'img_path-3' => $img_path[2],
            'img_path-4' => $img_path[3],
            'img_path-5' => $img_path[4],
            'img_path-6' => $img_path[5],
            'img_path-7' => $img_path[6],
            'img_path-8' => $img_path[7],
            'img_path-9' => $img_path[8],
            'img_path-10' => $img_path[9],
            'img_path-11' => $img_path[10],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
