<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class Lara_Angu_Apis extends Controller
{
    //here i will make simple fun
    public function get_apis(){
        $book  = Book::get();
        return response()->json($book);
    }
}
