<div style="width:400px;padding:15px;text-align:center;">
    <div> {{$post->id}}
        <h2>{{$post->title}}</h2>
    </div>
    <div> {{$post->body}}</div>
    <a href="{{route('post')}}">RETOUR</a>
</div>