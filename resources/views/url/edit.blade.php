@extends('layouts.app')

@section('content')
    <div class="container">
            <h1>Edit</h1>

            <form method="post" action="/url/{{ $url->id }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $url->title }}">
              </div>
              <div class="form-group">
                <label for="url">URL</label>
                <input type="text" class="form-control" name="url" id="url" placeholder="www.example.com" value="{{ $url->url }}">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="{{ $url->description }}">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

    </div>
@endsection
