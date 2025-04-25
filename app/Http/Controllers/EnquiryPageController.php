<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnquiryPageController extends Controller
{
    /**
    * Display the enquiry page.
    *
    * @return View
    */
   public function show()
   {
       return view('myapp.pages.enquiry');
   }
}
