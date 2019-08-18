@extends('app')

@section('content')
     @include('user.userheader')

        <div class="navbar">
        <a href="{{route('usergallery.index')}}">Pakistan</a>
        <a href="{{route('usergallery.indexaus')}}">Australia</a>
        <a href={{route('usergallery.indexeng')}}>England</a>
        <a href={{route('usergallery.indexwind')}}>West Indies</a>
        </div>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($pic as $images)
                <div class="carousel-item @if($loop->first) active @endif">
            
                        <img class="d-block w-100" src="images\{{$images['imagepath']}}">
                </div>              
            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        

    @include('footer')
    
@endsection