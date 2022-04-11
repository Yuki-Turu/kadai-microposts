<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store($microposts_id)
    {
        
        \Auth::user()->favorite($microposts_id);
        
        return back();
    }
    
    public function destroy($microposts_id)
    {
        \Auth::user()->unfavorite($microposts_id);
        
        return back();
    }
}
