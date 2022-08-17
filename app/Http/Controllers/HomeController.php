<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    // Fonction index
    public function index($usr = null){
        $posts = Post::latest()->paginate(6);
       
        return view('home')->with([
            'posts'=> $posts,
        
        ]);
    }

    // Fonction pour afficher les posts
    public function show($slug){
        $post = Post::where('slug', $slug)->first();
        return view('show')->with([
            'post'=>$post
        ]);
    }

     // Fonction pour créer un post
     public function create(){
        return view('create');
    }

    // fonction pour enregistrer les données
    public function store(PostRequest $request){
    // diedamp function pour stocker dans al base de données et afficher le token csrf
    // dd($request->all());

    // 1ère méthode pour enregistrer le formulaire dans la base de donées
        // $_post = new Post();
        // $post->title = $request->title;
        // $post->slug = Str::slug($request->title);
        // $post->body = $request->body;
        // $post->image = "https://via.placeholder.com/640x480.png/0055cc?text=minus";
        // $post->save();

                // // Tester si le formulaire a une image et l'envoyer au fichier publicupload
                // if($request->has('image')){
                //     $file = $request->image;
                //     $image_name = time().'_'.$file->getClientOriginalName();
                //     $file->move(public_path('uploads'),$image_name);
                // }   

        // 2ème méthode pour enregistrer le formulaire dans la base de donées
        Post::create([
        'title' => $request->title,
        'slug' => Str::slug($request->title),
        'body' => $request->body,
        'image' => "https://via.placeholder.com/640x480.png/0055cc?text=minus",
    ]);
    echo("Post ajouté");
    return redirect('/')->with(['success'=>'Le post est ajouté avec succès']);
    }


}