<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instagram = Contact::where('title',"Instagram")->first();
        $linkedin = Contact::where('title',"Linkedin")->first();
        $Facebook = Contact::where('title',"Facebook")->first();
        $Youtube = Contact::where('title',"Youtube")->first();
        $data= [
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('contact')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $message = Message::paginate(4);
        $instagram = Contact::where('title',"Instagram")->first();
        $linkedin = Contact::where('title',"Linkedin")->first();
        $Facebook = Contact::where('title',"Facebook")->first();
        $Youtube = Contact::where('title',"Youtube")->first();

        $data= [
            "message" => $message,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('admin.contact')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = Message::where('id', $id)->first();
        $instagram = Contact::where('title',"Instagram")->first();
        $linkedin = Contact::where('title',"Linkedin")->first();
        $Facebook = Contact::where('title',"Facebook")->first();
        $Youtube = Contact::where('title',"Youtube")->first();
        $data= [
            'message' => $message,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('admin.viewMessage')->with($data);
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
    public function updateInstagram(Request $request)
    {
        $request -> validate([
            'contact' => 'required',
            'link' => 'required',
        ],[
            'contact.required' => 'contact barang wajib di isi',
            'link.required' => 'link wajib di isi',
        ]);

        $data = [
            'contact' => $request->input('contact'),
            'link' => $request->input('link')
        ];
        // return 0;
        Contact::where('title','Instagram')->update($data);
        return redirect('/admin/contact');
    }

    public function updateLinkedin(Request $request)
    {
        $request -> validate([
            'contact' => 'required',
            'link' => 'required',
        ],[
            'contact.required' => 'contact barang wajib di isi',
            'link.required' => 'link wajib di isi',
        ]);

        $data = [
            'contact' => $request->input('contact'),
            'link' => $request->input('link')
        ];
        // return 0;
        Contact::where('title','Linkedin')->update($data);
        return redirect('/admin/contact');
    }

    public function updateFacebook(Request $request)
    {
        $request -> validate([
            'contact' => 'required',
            'link' => 'required',
        ],[
            'contact.required' => 'contact barang wajib di isi',
            'link.required' => 'link wajib di isi',
        ]);

        $data = [
            'contact' => $request->input('contact'),
            'link' => $request->input('link')
        ];
        // return 0;
        Contact::where('title','Facebook')->update($data);
        return redirect('/admin/contact');
    }

    public function updateYoutube(Request $request)
    {
        $request -> validate([
            'contact' => 'required',
            'link' => 'required',
        ],[
            'contact.required' => 'contact barang wajib di isi',
            'link.required' => 'link wajib di isi',
        ]);

        $data = [
            'contact' => $request->input('contact'),
            'link' => $request->input('link')
        ];
        // return 0;
        Contact::where('title','Youtube')->update($data);
        return redirect('/admin/contact');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
