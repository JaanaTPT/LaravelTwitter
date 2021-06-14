<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){
        //erinevat moodi saab vaadata:
        //$result = DB::select("SELECT * FROM posts;"); see on puhta html-ga
        //$result = DB::table('posts')->select(['id','content'])->get(); leiab id ja contenti
        //$result = Post::all(); saab kõik kätte
        //$result = Post::find(4); //ainult neljas
        //$result = Post::where('id',3)->get(); kolmas
        //$result = Post::where('id','>',3)->orderby('id','desc')->get(); //suurem kui kolm, id järgi vastupidises järjekorras
        //$result = Post::where('id','>',3)->orderby('id','desc')->first(); //suurem kui kolm, id järgi vastupidises järjekorras, tagastab ainult esimese
        //$result = Post::where('id','>',3)->count(); //count, kus id > 3
        //dump($result); // counti puhul arraysse ei pane
        //dump($result->toArray()); seda dumpi kasutame kõikide teiste eelnevate
        $posts = Post::orderby('created_at', 'desc')->get();
        return view('home', compact('posts'));

    }

    public function post(Post $post){
        //http://localhost:1337/post/1 siis annab esimese postituse, aga siis funktsioon: public function post($post)
        //$value = Post::findOrFail($post);
        //dump($value);
        //dump($post->toArray()); //see leiab ise vastava numbriga postituse

        //$comment = Comment::find(15);
        //dd($comment->post->toArray());

        //$comment = Comment::where('id', 15)->with('post')->first();

        //dd($post->comments->toArray());

        return view('post', compact('post'));
    }
}
