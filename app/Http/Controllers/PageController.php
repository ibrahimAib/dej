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
        $ar = count($img_path);
        $i = 0;
        foreach ($img_path as $da) {
            $img_path[] = $da->store('uplode', 'public');
        }
        $revers = array_reverse($img_path, true);
        foreach ($revers as $da) {
            if ($ar > $i) {
                $re[] = $da;
            }
            $i++;
        }

        for ($x = 12;; $x--) {
            if ($x <= $ar) {
                break;
            }
            $re[] = null;
        }
        // dd($re);
        Page::create([
            'name' => $data['name'],
            'name_ar' => $data['name_ar'],
            'code' => $data['code'],
            'description' => $data['description'],
            'description_ar' => $data['description_ar'],
            'img_path_1' => $re[0],
            'img_path_2' => $re[1],
            'img_path_3' => $re[2],
            'img_path_4' => $re[3],
            'img_path_5' => $re[4],
            'img_path_6' => $re[5],
            'img_path_7' => $re[6],
            'img_path_8' => $re[7],
            'img_path_9' => $re[8],
            'img_path_10' => $re[9],
            'img_path_11' => $re[10],
        ]);
        return back();
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
