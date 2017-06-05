@extends('layouts.app')

@section('content')
<div class="container">
        <h1>URL</h1>
        <a href="url/create" type="Text" class="btn btn-primary">New URL</a>
        <table class="table table-hover">
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>URL</th>
            <th>Description</th>
            <th>Actions</th>
          </tr>
          @foreach ($urls as $url)
          <tr>
            <td>{{ $url->id }}</td>
            <td>{{ $url->title }}</td>
            <td>{{ $url->url }}</td>
            <td>{{ $url->description }} </td>
            <td>
            <form action="/url/{{ $url->id }}" method="post">
              {{ csrf_field() }}
            <input name="_method" type="hidden" value="DELETE">
            <a href="url/{{ $url->id }}/edit" type="Text" class="btn btn-xs btn-default">Edit</a>
            <button type="submit" class="btn btn-xs btn-danger">Delete</button>
          </form>
            </td>
          </tr>

        @endforeach

        </table>
        {{ $urls->links() }}
</div>
@endsection
