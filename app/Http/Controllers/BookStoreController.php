<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 


class BookStoreController extends Controller
{

    public function store(Request $request)
    { 
        $request->validate([
            'isbn_no' => 'required',
            'title' => 'required',
            'author' => 'required',
            'published_year' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
            'review' => 'required',
            'price' => 'required',
        ]);

        $file = $request->file('image');
        $ImgName = date('ymds').'.'.$file->getClientOriginalExtension();
        $file->move(public_path('image/'), $ImgName);

        $book = Book::create([
        'isbn_no'=>$request['isbn_no'],
        'title'=>$request['title'],
        'author'=>$request['author'],
        'published_year'=>$request['published_year'],
        'image'=>$ImgName,
        'review'=>$request['review'],
        'price'=>$request['price']
        ]);

        return back()->with('add-success','Book added successfully');
    }

    public function show()
    {
        $data = Book::all();
        return view('show',compact('data'));
    }

    public function edit($id) 
    {
        $book = Book::find($id);
        return view('updateBook', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'isbn_no' => 'required',
            'title' => 'required',
            'author' => 'required',
            'published_year' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'review' => 'required',
            'price' => 'required',
        ]);

        $book = book::find($id);

        if($request->file('image')){
            $oldImagePath = public_path().'/image/'.$book->image;
            @unlink($oldImagePath);
            $file = $request->file('image');
            $ImgName = date('ymds').'.'.$file->getClientOriginalExtension();
            $file->move(public_path('image/'), $ImgName);
            $book->update([
                'image'=>$ImgName
            ]);

        }
        
        $book->update([
            'isbn_no'=>$request['isbn_no'],
            'title'=>$request['title'],
            'author'=>$request['author'],
            'published_year'=>$request['published_year'],
            'review'=>$request['review'],
            'price'=>$request['price']
        ]);

        return redirect('/viewBooks')->with('update-success','book updated successfully.');

    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        @unlink(public_path().'/image/'.$book->image);

        return back()->with('delete-success','book deleted successfully.');
    }
}
