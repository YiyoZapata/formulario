

<h1>Tus posts</h1>

@foreach ($posts as $post)
    <div>
        <p>{{$post->id}}</p>
        <p>{{$post->titulo}}</p>
        <p>{{$post->email}}</p>
        <p>{{$post->comment}}</p>
    </div>
    
@endforeach

