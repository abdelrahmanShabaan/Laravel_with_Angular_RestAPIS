<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    public function index()
    {
        return Book::select('id', 'name', 'price', 'description')->get();
        
    }

//    Here i will dis-play create because user will be have responsable by angular to add this
    // public function create()
    // {
    // }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        Book::create($request->post());
        return response()->json(['message'=> 'new item add successfully'] ,200);
        
    }

   
    public function show(Book $book)
    {
        return response()->json(['book' => $book]);
    }

    
    //Here i will dis-play edit because user will be have responsable by angular to add this
    // public function edit(Book $book)
    // {
    // }

    
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        $book->fill($request->post())->update();
        return response()->json([
            'message' => 'this item updated successfully'
        ]);

    }

   
    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json([
            'message' => 'this item deleted successfully'
        ]);

    }
}
