<?php

namespace App\Http\Controllers;

use App\Models\Recomended;
use Illuminate\Http\Request;

class RecomendedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Event - Recommendation';
        return view('admincomponent.event.recomended', [
            'recomendeds' => Recomended::latest()->get(),
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
        $title = 'Event - Add Recommendation';
        return view('admincomponent.event.recomendedCreate', [
            'title' => $title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'recomended' => 'required',
        ]);

        Recomended::create($validatedData);
        return redirect('/dashboard/recomendeds')->with('success', 'berhasil ditambahkan!');
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
    public function edit(Recomended $recomended)
    {
        $title = 'Event - Edit Recommendation';
        return view('admincomponent.event.recomendedEdit', [
            'recomended' => $recomended,
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
    public function update(Request $request, Recomended $recomended)
    {
        $validatedData = $request->validate([
            'recomended' => 'required',
        ]);

        Recomended::where('id', $recomended->id)->update($validatedData);
        return redirect('/dashboard/recomendeds')->with('success', 'berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recomended $recomended)
    {
        Recomended::destroy($recomended->id);
        return redirect('dashboard/recomendeds')->with('success', 'berhasil dihapus!');
    }
}
