<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BooksRequest;
use App\Book;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BooksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->name;
        return view('books.create')->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BooksRequest $request)
    {

        $cover = $request->file('bookcover');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $book = new Book();
        $book->title = $request->title;
        $book->category = $request->category;
        $book->price = $request->price;
        $book->description = $request->description;
        $book->contact = $request->contact;
        $book->owner = $request->owner;
        $book->class = $request->class;
        $book->mime = $cover->getClientMimeType();
        $book->original_filename = $cover->getClientOriginalName();
        $book->filename = $cover->getFilename().'.'.$extension;
        $book->save();

        return redirect()->route('home')->with('status', 'Dodano nowe ogłoszenie!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $book = Book::Find($book);

        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BooksRequest $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('home');
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
