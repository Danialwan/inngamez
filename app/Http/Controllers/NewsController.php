<?php

namespace App\Http\Controllers;

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
        // $body =  Str::words(News::pluck('body'), 10, '...');
        // $data = [
        //     'news' => $news,
        //     'body' => $body
        // ];
        // return $data;
        return view('news')->with('news', $news);
    }
    public function admin()
    {
        $news = News::all();
        // $body =  Str::words(News::pluck('body'), 10, '...');
        // $data = [
        //     'news' => $news,
        //     'body' => $body
        // ];
        // return $data;
        return view('admin.news')->with('news', $news);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createNews');
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
        return view('newsDetail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::where('id',$id)->first();
        return view('admin.editNews')->with('news', $news);
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
