<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Hero;
use App\Models\Recomended;
use App\Models\Status;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

use App\Notifications\sendEmail;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $title = 'Home | Magang Kerja';
        return view('landing.home.index', [
            'headers' => Header::where('id', 1)->get(),
            'heroes' => Hero::where('id', 1)->get(),
            'counters1' => Counter::where('id', 1)->get(),
            'counters2' => Counter::where('id', 2)->get(),
            'counters3' => Counter::where('id', 3)->get(),
            'events' => Event::all(),
            'recomendeds' => Recomended::all(),
            'statuses' => Status::all(),
            'testimonis' => Testimoni::latest()->take(2)->get(),
            'contacts' => Contact::where('id', 1)->get(),
            'footers' => Footer::where('id', 1)->get(),
            'title' => $title,
        ]);

        // $user = 'bahridhwan@gmail.com';

        // $details = [
        //     'greeting' => 'Hai',
        //     'body' => 'Email',
        //     'actiontext' => 'ok',
        //     'actionurl' => '/',
        //     'lastline' => 'last',
        // ];

        // Notification::route('mail', $user)->notify(new sendEmail($details));
        // Mail::to($user)->send(new testMail());
        // dd('done');
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
