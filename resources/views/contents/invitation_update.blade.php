@extends('master')

@section('dashboard')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Quick Example</h3>
    </div>
        <!-- /.box-header -->
        <!-- form start -->
    <form role="form" action="{{url('invitation/update=' . $id)}}" method="post">
    {{ csrf_field() }}
        <div class="box-body">
            <div class="form-group">
                <label for="userid">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="userid">Invitation Name</label>
                <input type="text" class="form-control" id="invitationName" name="invitationName">
            </div>
            <div class="form-group">
                <label for="userid">Image Display</label>
                <input type="text" class="form-control" id="imageDisplay" name="imageDisplay">
            </div>
            <div class="form-group">
                <label for="userid">Image Preview</label>
                <input type="text" class="form-control" id="imagePreview" name="imagePreview">
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
 </div>
@endsection