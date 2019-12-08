<?php

namespace App\Http\Controllers;

use App\Category;
use App\Test;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tests = Test::whereHas('questions', function($q){
            $q->whereHas('answers');
        })
            ->with('questions','questions.answers')
            ->orderByDesc('created_at')
            ->limit(3)
            ->get();
        $categories = Category::all();
        return view('index')->with(['tests' => $tests, 'categories' => $categories]);
    }
}
