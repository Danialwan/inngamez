<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        $instagram = Contact::where('title',"Instagram")->first();
        $linkedin = Contact::where('title',"Linkedin")->first();
        $Facebook = Contact::where('title',"Facebook")->first();
        $Youtube = Contact::where('title',"Youtube")->first();
        $data= [
            'news' => $news,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('news')->with($data);
    }
    public function admin()
    {
        $news = News::all();
        $instagram = Contact::where('title',"Instagram")->first();
        $linkedin = Contact::where('title',"Linkedin")->first();
        $Facebook = Contact::where('title',"Facebook")->first();
        $Youtube = Contact::where('title',"Youtube")->first();
        $data= [
            'news' => $news,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('admin.news')->with($data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
        return view('admin.createNews')->with($data);
        // return Inertia::render('')
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
        $news = News::where('id',$id)->first();
        $recommendation = $news::paginate(4);
        $instagram = Contact::where('title',"Instagram")->first();
        $linkedin = Contact::where('title',"Linkedin")->first();
        $Facebook = Contact::where('title',"Facebook")->first();
        $Youtube = Contact::where('title',"Youtube")->first();
        $data= [
            'news' => $news,
            'recommendation' => $recommendation,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('newsDetail')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::where('id',$id)->first();
        $recommendation = $news::paginate(4);
        $instagram = Contact::where('title',"Instagram")->first();
        $linkedin = Contact::where('title',"Linkedin")->first();
        $Facebook = Contact::where('title',"Facebook")->first();
        $Youtube = Contact::where('title',"Youtube")->first();
        $data= [
            'news' => $news,
            'recommendation' => $recommendation,
            "instagram" => $instagram,
            "linkedin" => $linkedin,
            "facebook" => $Facebook,
            "youtube" => $Youtube
        ];
        return view('admin.editNews')->with($data);
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
