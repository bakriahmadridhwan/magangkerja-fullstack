<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Mentor;
use App\Models\Recomended;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Event - Event';
        return view('admincomponent.event.event', [
            'events' => Event::latest()->get(),
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
        $title = 'Event - Add Event';
        return view('admincomponent.event.eventCreate', [
            'recomendeds' => Recomended::all(),
            'mentors' => Mentor::all(),
            'statuses' => Status::all(),
            'categories' => Category::all(),
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
            'image' => 'image|file|max:1024',
            'judul' => 'required|max:25',
            'by' => 'required',
            'tentang' => 'required',
            'materi' => 'required',
            'sk' => 'required',
            'tanggalMulai' => 'required',
            'waktuMulai' => 'required',
            'lokasi' => 'required',
            'peralatan' => 'required',
            'pendaftaran' => 'required',
            'recomended_id' => 'required',
            'mentor_id' => 'required',
            'status_id' => 'required',
            'category_id' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('event-images');
        }

        Event::create($validatedData);
        return redirect('/dashboard/events')->with('success', 'berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $title = 'Event - Detail Event';
        return view('admincomponent.event.eventShow', [
            'event' => $event,
            'title' => $title,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $title = 'Event - Edit Event';
        return view('admincomponent.event.eventEdit', [
            'event' => $event,
            'recomendeds' => Recomended::all(),
            'mentors' => Mentor::all(),
            'statuses' => Status::all(),
            'categories' => Category::all(),
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
    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:1024',
            'judul' => 'required|max:50',
            'by' => 'required',
            'tentang' => 'required',
            'materi' => 'required',
            'sk' => 'required',
            'tanggalMulai' => 'required',
            'waktuMulai' => 'required',
            'lokasi' => 'required',
            'peralatan' => 'required',
            'pendaftaran' => 'required',
            'recomended_id' => 'required',
            'mentor_id' => 'required',
            'status_id' => 'required',
            'category_id' => 'required',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('event-images');
        }

        Event::where('id', $event->id)->update($validatedData);
        return redirect('/dashboard/events')->with('success', 'berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        Event::destroy($event->id);
        return redirect('dashboard/events')->with('success', 'berhasil dihapus!');
    }
}
