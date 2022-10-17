<div style="width:400px;padding:15px;text-align:center;">
    <form method="POST" action="{{route('post.update', $post->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">titre</label><br />
            <input type="text" name="title" id="" value="{{$post->title}}">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">contenu</label><br />
            <textarea id="" name="body" rows="5" cols="33">{{$post->body}}</textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
</div>