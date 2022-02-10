<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;


class SitemapXmlController extends Controller
{
    public function index() {
        $categories = Category::all();

        return response()->view('sitemap', [
            'categories' => $categories,

        ])->header('Content-Type', 'text/xml');
      }
}
