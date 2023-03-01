<div class="container">
    <div class="card m-2 p-3">
        <h2 class='fw-bold mb-2 text-center'>New Post</h2>
        <form class="mb-3 mt-md-4" method="POST" enctype="multipart/form-data" action="{{route('post_store')}}">
            @csrf
            <input type="hidden" name="author" value="{{ Auth::user()->name }}">
            <div class="mb-3">
                <label class='form-label'>Title</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="mb-3">
                <label  class='form-label'>Description</label>
                <textarea id = "description" rows="15"  class="form-control" name="content" required></textarea>
            </div>
            <div class="mb-3">
                <label  class='form-label'>Plesase choose image file to upload</label>
                <input type="file" class='form-control' name="img" id="img" accept="image/*">
            </div>
            <div class="mb-3">
                <input type="submit" class='btn btn-success ms-3' name="submit" value="Post">
            </div>
        </form>

    </div>
</div>
