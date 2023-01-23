<?php

namespace App\Http\Controllers;

use App\Models\Alasan;
use App\Models\Footer;
use App\Models\Intro;
use App\Models\Question;
use App\Models\Team;
use App\Models\Visi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\sendEmail;

class AbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'About | Magang Kerja';
        return view('landing.about.index', [
            'footers' => Footer::where('id', 1)->get(),
            'intros' => Intro::where('id', 1)->get(),
            'visis' => Visi::latest()->get(),
            'alasans' => Alasan::latest()->get(),
            'teams' => Team::latest()->get(),
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
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'pertanyaan' => 'required',
        ], [
            'nama.required' => 'Nama wajib diisi!',
            'email.required' => 'Email wajib diisi!',
            'pertanyaan.required' => 'Pertanyaan wajib diisi!',
        ]);

        Question::create($validatedData);

        $details = [
            'subject' => 'Notifikasi data masuk (Form Question)',
            'greeting' => 'dari ' . $request->nama,
            'break' => 'pertanyaan : ',
            'body' => $request->pertanyaan,
            // 'actiontext' => 'ok',
            // 'actionurl' => '/',
            // 'lastline' => 'Kelompok 3',
        ];

        $user = 'bahridhwan@gmail.com';

        // Mail::to($user)->send(new testMail());
        // Notification::send($user, new sendEmail($details));
        Notification::route('mail', $user)->notify(new sendEmail($details));

        return redirect('/abouts')->with('success', 'berhasil dikirim!, Terimakasih.');
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
        //
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
