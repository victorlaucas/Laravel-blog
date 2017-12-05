@extends ('layouts.layout')

@section('content')
  <div class="container">
    <h1>Create a post</h1>

    <form method="POST" action="/posts">

      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Great Title" name="title">
      </div>

      <div class="form-group">
        <label for="body">Body</label>
        <textarea id="body" name="body" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>

      @include ('layouts.errors')

    </form>
  </div>




@endsection