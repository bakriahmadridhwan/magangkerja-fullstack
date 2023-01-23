<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Menu - Header';
        return view('admincomponent.headfoo.header', [
            'headers' => Header::latest()->get(),
            'title' => $title,
        ]);
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
    public function edit(Header $header)
    {
        $title = 'Menu - Edit Header';
        return view('admincomponent.headfoo.headerEdit', [
            'header' => $header,
            'title' => $title,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
    {
        $validatedData = $request->validate([
            'menu1' => 'required',
            'menu2' => 'required',
            'menu3' => 'required',
            'menu4' => 'required',
            'menu5' => 'required',
            'dropdown1' => 'required',
            'dropdown2' => 'required',
        ]);

        Header::where('id', $header->id)->update($validatedData);
        return redirect('/dashboard/headers')->with('success', 'berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        Header::destroy($header->id);
        return redirect('dashboard/headers')->with('success', 'berhasil dihapus!');
    }
}
