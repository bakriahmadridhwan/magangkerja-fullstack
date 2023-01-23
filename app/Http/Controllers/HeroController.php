<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $heroes = Hero::all();
        $title = 'Home - Hero';
        return view('admincomponent.home.hero', [
            'heroes' => Hero::where('id', 1)->get(),
            // 'heroes' => Hero::latest()->get(),
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
        return view('admincomponent.home.heroCreate');
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
            'image' => 'image|file|max:1024',
            'tagline' => 'required|max:25',
            'judul' => 'required',
            'tekswarna' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('hero-images');
        }

        Hero::create($validatedData);
        return redirect('/dashboard/heroes')->with('success', 'berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        $title = 'Home - Detail Hero';
        return view('admincomponent.home.heroShow', [
            'hero' => $hero,
            'title' => $title,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        $title = 'Home - Edit Hero';
        return view('admincomponent.home.heroEdit', [
            'hero' => $hero,
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
    public function update(Request $request, Hero $hero)
    {
        // return $request->file('image')->store('hero-images');
        $rules = [
            'image' => 'image|file|max:1024',
            'tagline' => 'required|max:25',
            'judul' => 'required',
            'tekswarna' => 'required',
            'deskripsi' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('hero-images');
        }

        Hero::where('id', $hero->id)->update($validatedData);
        return redirect('/dashboard/heroes')->with('success', 'berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        Hero::destroy($hero->id);
        return redirect('/dashboard/heroes')->with('success', 'berhasil dihapus!');
    }
}
