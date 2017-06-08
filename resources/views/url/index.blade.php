@extends('layouts.app')

@section('content')
  <script type="text/javascript">

   $(function(){
     $("#dateInput").datepicker({
       dateFormat: 'yy-mm-dd'
     });
   });

   </script>
<div class="container">
        <h1>URL</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">New URL</button>


        {{--<a href="url/create" type="Text" class="btn btn-primary">New URL</a>--}}
        <table class="table table-hover">
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>URL</th>
            <th>Description</th>
            <th>Date</th>
            <th>Status</th>
            <th>Close/Open</th>
            <th>By</th>
            <th width="200">Actions</th>
          </tr>
          @foreach ($urls as $url)
          <tr>
            <td>{{ $url->id }}</td>
            <td>{{ $url->title }}</td>
            <td>{{ $url->url }}</td>
            <td>{{ $url->description }} </td>
            <td>{{ $url->dateadd }} </td>
            <td>

              <label class="switch">
                <input type="checkbox" @if( $url->status == '1' )checked disabled @else disabled @endif>
                <div class="slider round"></div>
              </label>

            </td>
            <td>
              <form action="/url/{{ $url->id }}/switchupdate" method="post">
                {{ csrf_field() }}
              <input name="_method" type="hidden" value="DELETE">
         @if( $url->status == '1' )
                 <button type="submit" class="btn btn-xs btn-default btn-lg btn-block">CLOSE</button>
         @else <button type="submit" class="btn btn-xs btn-primary btn-lg btn-block">OPEN</button>
         @endif
              </form>

            </label>
            </td>

            <td>{{ $url->user->name }}</td>

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





        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">

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




                          <center></center>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
          </div>
        </div>
        </div>



        <center>{{ $urls->links() }}</center>
</div>
@endsection
