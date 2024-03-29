@extends('app')

@section('content')
     @include('user.userheader')
            <!-- Grid row -->
                            
                <div class="row">
              <?php $var=0?>
            @foreach($video as $vid)
            <?php $var++?>
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal{{$var}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

                        <div class="modal-footer justify-content-center">
                        
                        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>
                        
                        </div>
                        <!--/.Content-->

                    </div>
                    </div>
                    <!--Modal: Name-->

                    <a><img class="img-fluid z-depth-1" src="{{$vid['tumbnailpath']}}" alt="video"
                        data-toggle="modal" data-target="#modal{{$var}}"></a>
                    
                    <h3>{{$vid['videotitle']}}</h3>


                            
                </div>
                <!-- Grid column -->
             @endforeach
                </div>
                <!-- Grid row -->
    @include('footer')
    
@endsection