<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function setLanguages(Request $request, $lang) {
        if (in_array($lang, ['fr', 'en'])) {
            session(['locale' => $lang]);
            app()->setLocale($lang); 
        }
        return redirect()->back();
    }
}
