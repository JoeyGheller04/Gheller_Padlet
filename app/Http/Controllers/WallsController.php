<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Walls;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

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

        $posts = Posts::where('wall_id', $id)->get();

    	return view('wall', [
            'wall' => $id,
            'posts' => $posts
    	]);
    }

    public function createWall(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'description' => 'required|max:200'
        ]);

        $input = $request->only(['user_id', 'name', 'description']);

        DB::table('walls')->insert([
            'user_id' => 1,
            'name' => $input['name'],
            'description' => $input['description']
        ]);

        $wall = DB::table('walls')->orderBy('id', 'desc')->first();
        $id = $wall->id;

        return redirect()->route('wall', ['id' => $id]);
    }

    public function createPost(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'wall_id' => 'required', 
            'title' => 'required|max:40',
            'text' => 'required|max:200'
        ]);

        $input = $request->only(['user_id', 'wall_id', 'title', 'text']);
        
        $id = $input['wall_id'];

        DB::table('posts')->insert([
            'user_id' => 1,
            'wall_id' => $input['wall_id'],
            'title' => $input['title'],
            'text' => $input['text']]
        );

        return redirect()->route('wall', ['id' => $id]);
    }
}