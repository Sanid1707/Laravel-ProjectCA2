<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Post;

class SettingsController extends Controller {
    
        public function __construct() {
            $this->middleware('auth');
        }
    
        public function index() {
            return view('settings.index');
        }
        
}