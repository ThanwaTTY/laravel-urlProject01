@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/switch.css">
<div class="container">
        <h1>URL</h1>
        <a href="url/create" type="Text" class="btn btn-primary">New URL</a>
        <table class="table table-hover">
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>URL</th>
            <th>Description</th>
            <th>Date</th>
            <th>Status</th>
            <th>Close/Open</th>
            <th width="200">Actions</th>
          </tr>
          @foreach ($urls as $url)
          <tr>
            <td>{{ $url->id }}</td>
            <td>{{ $url->title }}</td>
            <td>{{ $url->url }}</td>
            <td>{{ $url->description }} </td>
            <td>{{ $url->dateadd }} </td>
            <th>

              <label class="switch">
                <input type="checkbox" @if( $url->status == '0' )checked disabled @else disabled @endif>
                <div class="slider round"></div>
              </label>

            </th>
            <td>
              <form action="/url/{{ $url->id }}/switchupdate" method="post">
                {{ csrf_field() }}
              <input name="_method" type="hidden" value="DELETE">
         @if( $url->status == '0' )
                 <button type="submit" class="btn btn-xs btn-default btn-lg btn-block">CLOSE</button>
         @else <button type="submit" class="btn btn-xs btn-primary btn-lg btn-block">OPEN</button>
         @endif
              </form>

            </label>
            </td>
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
