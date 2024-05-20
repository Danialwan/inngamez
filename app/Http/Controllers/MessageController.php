<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::all();
        return view('contact')->with('data',$contact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->message;
        Session::flash('message', $request->message);
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);

        $request -> validate([
            'message' => 'required',
            'name' => 'required',
            'email' => 'required'
        ],[
            'message.required' => 'pesan wajib di isi',
            'name.required' => 'nama wajib di isi',
            'email.required' => 'email wajib di isi',
        ]);

        $data = [
            'message' => $request->input('message'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];

        Message::Create($data);
        return redirect('/contact')->with('success','Berhasil memasukan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
