@php
        if (is_null($post['img'])) {
            $img = null;
        } else {
            $img = $post['img'];
        }
@endphp
<div class="container">
    <div class="card m-2 p-3">
        <h2 class='fw-bold mb-2 text-center'>Edit Post</h2>
        <form class="mb-3 mt-md-4" method="POST" action="{{route('post_update',$post['id'] )}}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <input type="hidden" name="author" value="{{ $post['author'] }}">
            <div class="mb-3">
                <label class='form-label'>Title</label>
                <input type="text" class="form-control" name="title" required value="{{$post['title']}}">
            </div>
            <div class="mb-3">
                <label  class='form-label'>Description</label>
                <textarea id = "description" rows="15"  class="form-control" name="content"  required>{{ $post['content']}}</textarea>
            </div>
            <div class="mb-3">
                @if (!is_null($img))
                    <img src="{{asset('storage/'.$img)}}" class="card-img-top embed-responsive-item">
                @endif
                <label  class='form-label'>Plesase choose image file to upload</label>
                <input type="file" class='form-control' name="img" id="img" accept="image/*">
            </div>
            <div class="mb-3">
                <input type="submit" class='btn btn-success ms-3' name="submit" value="Edit">
            </div>
        </form>

    </div>
</div>
