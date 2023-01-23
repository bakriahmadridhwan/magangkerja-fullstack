<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

use App\Notifications\sendEmail;
use Illuminate\Support\Facades\Mail;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'About - Question';
        return view('admincomponent.about.question', [
            // 'questions' => Question::where('id', 1)->get(),
            'questions' => Question::latest()->get(),
            'softDeleted' => Question::onlyTrashed()->get(),
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
        $title = 'About - Add Question';
        return view('admincomponent.about.questionCreate', [
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
            'email' => 'required',
            'pertanyaan' => 'required',
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

        return redirect('/dashboard/questions/create')->with('success', 'berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        $title = 'About - Detail Question';
        return view('admincomponent.about.questionShow', [
            'question' => $question,
            'title' => $title,
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        Question::destroy($question->id);
        return redirect('/dashboard/questions')->with('success', 'berhasil dihapus!');
    }

    public function restore($id)
    {
        Question::withTrashed()->where('id', $id)->restore();
        return redirect('/dashboard/softs')->with('softSuccess', 'berhasil dikembalikan!');
    }
}
