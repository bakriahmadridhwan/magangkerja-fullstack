<?php

namespace App\Http\Controllers;

use App\Models\Alasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'About - Alasan';
        return view('admincomponent.about.alasan', [
            // 'alasans' => Alasan::where('id', 1)->get(),
            'alasans' => Alasan::latest()->get(),
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
    public function show(Alasan $alasan)
    {
        $title = 'About - Detail Alasan';
        return view('admincomponent.about.alasanShow', [
            'alasan' => $alasan,
            'title' => $title,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Alasan $alasan)
    {
        $title = 'About - Edit Alasan';
        return view('admincomponent.about.alasanEdit', [
            'alasan' => $alasan,
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
    public function update(Request $request, Alasan $alasan)
    {
        // return $request->file('image')->store('hero-images');
        $rules = [
            'image' => 'image|file|max:1024',
            'judul' => 'required',
            'deskripsi' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('alasan-images');
        }

        Alasan::where('id', $alasan->id)->update($validatedData);
        return redirect('/dashboard/alasans')->with('success', 'berhasil diubah!');
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
