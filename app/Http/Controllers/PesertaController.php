<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Achievement - Karya Peserta';
        return view('admincomponent.pencapaian.peserta', [
            'pesertas' => Peserta::latest()->get(),
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
        $title = 'Achievement - Add Achievement Karya Peserta';
        return view('admincomponent.pencapaian.pesertaCreate', [
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
            'nama' => 'required',
            'pekerjaan' => 'required',
            'tempatBekerja' => 'required',
            'lulusan' => 'required',
            'pendapat' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('peserta-images');
        }

        Peserta::create($validatedData);
        return redirect('/dashboard/pesertas')->with('success', 'berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        $title = 'Achievement - Detail Achievement Karya Peserta';
        return view('admincomponent.pencapaian.pesertaShow', [
            'peserta' => $peserta,
            'title' => $title,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $peserta)
    {
        $title = 'Achievement - Edit Achievement Karya Peserta';
        return view('admincomponent.pencapaian.pesertaEdit', [
            'peserta' => $peserta,
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
    public function update(Request $request, Peserta $peserta)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'pekerjaan' => 'required',
            'tempatBekerja' => 'required',
            'lulusan' => 'required',
            'pendapat' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('peserta-images');
        }

        Peserta::where('id', $peserta->id)->update($validatedData);
        return redirect('/dashboard/pesertas')->with('success', 'berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $peserta)
    {
        Peserta::destroy($peserta->id);
        return redirect('dashboard/pesertas')->with('success', 'berhasil dihapus!');
    }
}
