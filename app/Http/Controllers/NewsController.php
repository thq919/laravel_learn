<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function news(): View {
        $news = News::get();
        return view('tasks.news', compact('news'));
    }
}
