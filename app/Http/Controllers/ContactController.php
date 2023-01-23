<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $contacts = Contact::all();
        $title = 'Home - Contact';
        return view('admincomponent.home.contact', [
            'contacts' => Contact::where('id', 1)->get(),
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
    public function show(Contact $contact)
    {
        $title = 'Home - Detail Contact';
        return view('admincomponent.home.contactShow', [
            'contact' => $contact,
            'title' => $title,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $title = 'Home - Edit Contact ';
        return view('admincomponent.home.contactEdit', [
            'contact' => $contact,
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
    public function update(Request $request, Contact $contact)
    {
        // return $request->file('image')->store('hero-images');
        $rules = [
            'image' => 'image|file|max:1024',
            'tagline' => 'required|max:25',
            'judul' => 'required',
            'deskripsi' => 'required',
        ];

        // if ($request->tagline != $hero->tagline) {
        //     $rules['tagline'] = 'required|max:25';
        // } elseif ($request->judul != $hero->judul) {
        //     $rules['judul'] = 'required';
        // } elseif ($request->deskripsi != $hero->deskripsi) {
        //     $rules['deskripsi'] = 'required';
        // }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('contact-images');
        }

        Contact::where('id', $contact->id)->update($validatedData);
        return redirect('/dashboard/contacts')->with('success', 'berhasil diubah!');
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
