<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Publisher;

class AppController extends Controller
{
    public function index(){
        return view ('index', [
            'title' => 'Book List',
            'books' => Book::all(),
            'categories' => Category::all(),
        ]);
    }

    public function detail(Book $book){
        return view ('detail', [
            'title' => 'Book Detail',
            'book' => $book,
            'categories' => Category::all(),
        ]);
    }

    public function category (Category $category){
        return view ('index', [
            'title' => $category->name,
            'books' => $category->books,
            'categories' => Category::all(),
        ]);
    }

    public function contact() {
        return view ('contact', [
            'title' => 'Contact',
            'categories' => Category::all(),
        ]);
    }

    public function publisher(){
        $categories = Category::all();
        $publisher = Publisher::all();
        return view('publisher',[
            'title' => 'Publisher',
            'publisher' => $publisher,
            'categories' => $categories
        ]);
    }

    public function publisherDetail(Publisher $publisher){
        $categories = Category::all();
        $books = Book::where('publisher_id', $publisher->id)->get();
        return view('index',[
            'title' => 'Publisher Detail',
            'publisher' => $publisher,
            'books' => $books,
            'categories' => $categories
        ]);
    }
}
