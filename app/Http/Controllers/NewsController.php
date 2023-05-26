<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function news(): View {
        $news = News::latest('published_at')
        ->where('published', '1')
        ->get();
        return view('tasks.news', compact('news'));
    }
}
