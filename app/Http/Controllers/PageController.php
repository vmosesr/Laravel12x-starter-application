<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a specific page.
     *
     * @param string $page The name of the page (without the .blade extension).
     * @return View
     */
    public function show(string $page): View
    {
        $viewPath = 'myapp.pages.' . $page;

        if (view()->exists($viewPath)) {
            return view($viewPath);
        }

        abort(404); 
    }
}
