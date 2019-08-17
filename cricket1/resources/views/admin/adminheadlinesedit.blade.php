@extends('app')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Edit Headline</h3>
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

  <form method="post" action="{{action('HeadlineController@update',$id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="title" class="form-control" value="{{$headline->title}}" placeholder="Enter title" />
   </div>
   <label for="series">Choose series</label>
    <div class="form-group">
        <select name="series">
        <option value="Icc Men">Icc Men</option>
        <option value="Icc Women">Icc Women</option>
        <option value="PSL">PSL</option>
        </select>
   </div>
   <div class="form-group">
    <input type="text" name="auther" class="form-control" value="{{$headline->auther}}" placeholder="Enter auther name" />
   </div>
   <div class="form-group">
    <input type="text" name="timepublished" class="form-control" value="{{$headline->timepublished}}" placeholder="Enter time published" />
   </div>
   <div class="form-group">
    <input type="text" name="news" class="form-control" value="{{$headline->news}}" placeholder="Write news" />
   </div>
   <div class="form-group">
        <input type="file" name="imagepath"  class="form-control" value="{{$headline->imagepath}}"/>
    <br/>
   <div class="form-group">
    <input type="submit"  class="btn btn-primary" value="Edit"/>
   </div>
  </form>
 </div>
</div>
@endsection