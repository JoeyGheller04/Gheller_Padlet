<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Walls;
use Illuminate\Support\Facades\DB;
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
    	$wall = Walls::find($id);

        $posts = Posts::where('wall_id', $id)->get();

    	return view('wall', [
            'posts' => $posts
    	]);
    }

    public function createWall(Request $request)
    {
        // $validated = $request->validate([ 
        //     'news_id' => 'required|max:50',
        //     'comment_id' => 'required|max:50',
        //     'like' => 'required',
        // ]);

        // $user = Session::get('user');
        // $validated['user_id'] = $user['user_id'];

        // $input = $request->only(['user_id', 'news_id', 'comment_id', 'like']);
        
        // Walls::create($input);
        $sas = Walls::insert([
            'user_id' => 1,
            'name' => 'test',
            'description' => 'test'
        ]);

        DB::table('walls')->insert(
            ['user_id' => 1,
            'name' => 'test',
            'description' => 'test']
        );

        $id = DB::table('walls')->orderBy('created_at', 'desc')->first();

        return view('wall/' . $id);
    }
}