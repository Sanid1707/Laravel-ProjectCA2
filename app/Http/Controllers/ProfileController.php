<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Post;

class ProfileController extends Controller {
    
        public function __construct() {
            $this->middleware('auth');
        }
    
        public function index() {
            return view('profile.index')
                ->with('posts', auth()->user()->post()->orderBy('created_at', 'DESC')->paginate(5));
        }
        
}