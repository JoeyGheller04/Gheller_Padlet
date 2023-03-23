<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Walls;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;

class WallsController extends Controller
{
    public function index(): View
    {    	

    	$walls = Walls::orderBy('created_at', 'desc')->get();
        
        return view('wall_selection', [
            'walls' => $walls
        ]);
    }

    public function getWall($id)
    {
    	$posts = Posts::find($id);

    	return view('wall', [
            'posts' => $posts
    	]);
    }
}