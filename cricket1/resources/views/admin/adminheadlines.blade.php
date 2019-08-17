@extends('app')

@section('content')
     @include('header')
        <div aling="left">
        <a href="{{route('headline.create')}}" class="btn btn-primary">Add headline</a>
        <br />
        <br />
        </div>
        @if($message=Session::get('success'))
        <div class="alert alert-success">
          <p>{{$message}}</p>
        </div>
      @endif
        @foreach($headlines as $row)
            <div class="container"style="margin-top:10px;">
                <div class="panel-thumbnail"><img src="images\{{$row['imagepath']}}" class="img-responsive"></div>
                <div class="panel-body">
                    <p class="lead">{{$row['title']}}</p>
                    <p>{{$row['timepublished']}} by {{$row['auther']}}</p>
                    <div class="panel-body">
                        {{$row['news']}}
                    </div>
                </div>
                <div class="d-flex">
                    <div aling="mr-auto p-2"><a href="{{action('HeadlineController@edit', $row['id'])}}" class="btn btn-warning" >Edit</a></div>
                    <div aling="p-2">
                    <form method="post" class="delete_form" action="{{action('HeadlineController@destroy',$row['id'])}}"  >
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE"/>
                        <button type="submit" class="btn btn-danger" >Delete</button>
                    </form>
                    </div>
                </div>
            </div>
        @endforeach

        

    @include('footer')
    
@endsection