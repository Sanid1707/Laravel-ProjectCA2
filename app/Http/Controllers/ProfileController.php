<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ProfileController extends Controller {
    
        public function __construct() {
            $this->middleware('auth');
        }
    
        public function index() {
            return view('profile.index');
        }
    
        
}