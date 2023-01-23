<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('formulario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
       /* request() ->validate([
            'titulo' => 'required',
            'user_mail' => 'required',
            'user_message' => 'required|min:10',

        ]);

        return $request->all(); */
        $validated = $request->validated();

        $validated = $request->safe()->only(['titulo', 'user_email','user_message','Accesos','comentable','caducable']);
        
        $comentable = request('comentable');
        if($comentable == null){
            $comentable = False;
        }

        $caducable = request('caducable');
        if($caducable == null){
            $caducable = False;
        }

        $post = new Post();
        $post->titulo  = request('titulo');
        $post->email  = request('user_mail');
        $post->comment  = request('user_message');
        $post->Acceso = request('Acceso');
        $post->caducable = $caducable;
        $post->comentable = $comentable;

        Log::info('PostController', [
            'request' => json_encode(request())
        ]);
       
        $post->save();

        return redirect(route('lista'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
