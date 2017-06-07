@extends('layouts.app')

@section('content')
  <link href="{{ asset('jquery/jquery-ui.css') }}" rel="stylesheet">
  <link href="{{ asset('jquery/jquery-ui-timepicker-addon.css') }}" rel="stylesheet">


  <script src="{{ asset('jquery/jquery-1.10.2.min.js') }}"></script>
  <script src="{{ asset('jquery/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('jquery/jquery-ui-timepicker-addon.js') }}"></script>
  <script src="{{ asset('jquery/jquery-ui-sliderAccess.js') }}"></script>


  <script type="text/javascript">

   $(function(){
     $("#dateInput").datepicker({
       dateFormat: 'yy-mm-dd'
     });
   });

   </script>


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
                <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="{{ $url->description}}">
              </div>
              <div class="form-group">
                <label for="description">Date</label>
                <input type="text" class="form-control" name="dateadd" id="dateInput" placeholder="Date"  value="{{ $url->dateadd}}"/>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

    </div>
@endsection
