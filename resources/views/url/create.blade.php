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

  {{--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
--}}
    <div class="container">
            <h1>Create</h1>

            <form method="post" action="/url">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
              </div>
              <div class="form-group">
                <label for="url">URL</label>
                <input type="text" class="form-control" name="url" id="url" placeholder="www.example.com">
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Description">
              </div>
              <div class="form-group">
                <label for="description">Date</label>
                {{--<input type="text" class="form-control" name="dateadd" id="datepicker" placeholder="Date">--}}
                <input type="text" class="form-control" name="dateadd" id="dateInput" value="" placeholder="Date"/>
              </div>




              <center><button type="submit" class="btn btn-primary">Submit</button></center>
            </form>

    </div>
@endsection
