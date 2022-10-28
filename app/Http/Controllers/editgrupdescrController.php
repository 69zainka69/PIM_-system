<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
class editgrupdescrController extends Controller
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
        $catalogs = catalog::where('id', $id)->first();

        $catalog[0]['description'] = $catalogs->description;
        $catalog[0]['description_en_us'] = $catalogs->description_en_us;
        //dd($productdes[0]);
        return view('ajax.catalogtiny', [
            'id' => $id,
            'catalog' => $catalog,
        ]);
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
        if (isset($request->description)) {
            $catalog = catalog::where('id', $id)->first();
            $catalog->description = $request->description;
            $catalog->save();
            return redirect()->back()->withSuccess('Опис групи товарів успішно змінено!');
        }
        if (isset($request->description_en_us)) {
            $catalog = catalog::where('id', $id)->first();
            $catalog->description_en_us = $request->description_en_us;
            $catalog->save();
            return redirect()->back()->withSuccess('Опис (ру) групи товарів успішно змінено!');
        }
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
