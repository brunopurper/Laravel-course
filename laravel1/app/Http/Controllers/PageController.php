<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index($slug) {
        $page = Page::where('slug', $slug)->first();

        if($page) {
            return view('page', [
                'font_color' => $page->op_font_color
            ]);
        }
        else {
            return view('notfound');
        }
    }
}
