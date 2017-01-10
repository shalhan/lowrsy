@extends('welcome')

@section('dashboard')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
<!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>User ID</th>
          <th>Name</th>
          <th>Invitation Name</th>
          <th>Image Display</th>
          <th>Image Preview</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($viewInvitation as $view)
        <tr>
          <td>{{$view->id}}</td>
          <td>{{$view->user_id}}</td>
          <td>{{$view->display_name}}</td>
          <td>{{$view->invitation_name}}</td>
          <td></td>
          <td></td>
          <td>Update | <a href="{{ url('invitation/del=' . $view->id) }}">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection