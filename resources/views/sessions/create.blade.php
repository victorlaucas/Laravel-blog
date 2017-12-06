@extends ('layouts.layout')

@section ('content')
  <div class="container">
    <div class="col-sm-8">
      <h1>Sign In</h1>

      <form method="POST" action="/login">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="form-group">
          <button class="btn btn-primary" type="submit">Sign In</button>
        </div>

        @include('layouts.errors')
      </form>
    </div>
  </div>
@endsection