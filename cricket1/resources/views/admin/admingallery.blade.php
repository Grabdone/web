@extends('app')

@section('content')
     @include('header')
        <a href="{{route('pic.create')}}" class="d-flex justify-content-center btn btn-primary" style="color:white;" >Add Image</a>

        <main role="main">
        

        <div class="album py-5 bg-light">
            <div class="w-100 p-3 container">

            <div class="row">
                @foreach ($pic as $images)

                    <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img width="100%" height="225" class="d-block w-100" src="images\{{$images['imagepath']}}">
                        <div class="card-body">
                        <p class="card-text">{{$images['team']}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <form method="post" class="delete_form" action="{{action('GalleryController@destroy',$images['id'])}}"  >
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE"/>
                            <button type="submit" class="btn carousel-button btn btn-danger " >
                            <i class="fa fa-times-circle"></i> Delete Image
                            </button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>  

                @endforeach
                
            </div>
            </div>
        </div>

        </main>
        

    @include('footer')
    
@endsection