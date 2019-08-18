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

  <form method="post" action="{{url('pic')}}">
   {{csrf_field()}}
   <label for="team">Team:</label>
    <div class="form-group">
        <select name="team">
        <option value="Pakistan">Pakistan</option>
        <option value="Australia">Australia</option>
        <option value="England">England</option>
        <option value="West Indies">West Indies</option>
        </select>
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