@php
        if (is_null($post['img'])) {
            $img = null;
        } else {
            $img = $post['img'];
        }
@endphp
<div class="container">
    <div class="card m-2">
        <h3 class='card-title text-center'>
            <a class='link-dark text-decoration-none' href='posts/{{ $post["id"] }}'>{{$post['title']}}</a>
        </h3>
        <h5 class='card-text ms-3'>{{$post["content"]}}</h5>
        @if (!is_null($img))
            <img src="{{asset('storage/'.$img)}}" class="card-img-top embed-responsive-item">
        @else
            <p class='card-text ms-3'>No img</p>
        @endif
        <div class="card-text ms-3 mb-3">
            <a href='posts/{{ $post["id"] }}'>Read more...</a>
        </div>
        <p class='card-text ms-3'>Posted by <strong>{{$post['author']}} </strong></p>
        <p class='card-text ms-3'>Created at {{$post['created_at']}} </p>
        <p class='card-text ms-3'>Updated at {{$post['updated_at']}} </p>
        @if (Auth::check())
            <div class="d-flex justify-content-center m-4">
                <a type='button' class='btn btn-success ms-3' href="{{route('post_edit',$post['id'])}}">Edit</a>
                <form action="{{route('post_delete',$post['id'])}}" method="POST">
                    @csrf
                    @method('delete')
                    <input class='btn btn-danger ms-3' type="submit" value="Delete">
                </form>
            </div>
        @endif
    </div>
</div>
