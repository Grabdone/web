@extends('app')

@section('content')
     @include('header')
     
                <!-- Grid row -->
                <div class="row">
            @foreach($video as $vid)
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                        <!--Body-->
                        <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                            <iframe class="embed-responsive-item" src="{{$vid['videopath']}}"
                                allowfullscreen></iframe>
                            </div>

                        </div>

                        
                        </div>
                        <!--/.Content-->

                    </div>
                    </div>
                    <!--Modal: Name-->

                    <a><img class="img-fluid z-depth-1" src="{{$vid['tumbnailpath']}}" alt="video"
                        data-toggle="modal" data-target="#modal1"></a>

                </div>
                <!-- Grid column -->

                </div>
                <!-- Grid row -->
            @endforeach
    @include('footer')
    
@endsection