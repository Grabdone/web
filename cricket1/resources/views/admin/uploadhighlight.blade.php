@extends('app')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add Highlights</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="post" action="{{url('video')}}">
   {{csrf_field()}}
    <div class="form-group">
        <label for="videotitle">Title:</label>
        <input type="text" name="videotitle"  class="form-control" />        
   </div> 
   <div class="form-group">
        <label for="tumbnailpath">paste thumbnail path:</label>
        <input type="text" name="tumbnailpath"  class="form-control" />
    <br/>
    <div class="form-group">
        <label for="videopath">paste video path:</label>
        <input type="text" name="videopath"  class="form-control" />
    <br/>
   <div class="form-group">
    <input type="submit" name="upload" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection