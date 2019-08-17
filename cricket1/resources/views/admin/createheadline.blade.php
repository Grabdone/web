@extends('app')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add Headline</h3>
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

  <form method="post" action="{{url('headline')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="title" class="form-control" placeholder="Enter title" />
   </div>
   <div class="form-group">
    <input type="text" name="auther" class="form-control" placeholder="Enter auther name" />
   </div>
   <div class="form-group">
    <input type="text" name="timepublished" class="form-control" placeholder="Enter time published" />
   </div>
   <div class="form-group">
    <input type="text" name="news" class="form-control" placeholder="Write news" />
   </div>
   <div class="form-group">
        <input type="file" name="imagepath"  class="form-control" />
    <br/>
   <div class="form-group">
    <input type="submit" name="upload" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection