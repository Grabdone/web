@extends('app')

@section('content')
     @include('user.userheader')
        <div class="sidenav">
        <a href="{{route('userheadline.index')}}">Cricket</a>
        <a href="{{route('userheadline.indexmen')}}">ICC Men</a>
        <a href={{route('userheadline.indexbbl')}}>Big Bash</a>
        <a href={{route('userheadline.indexpsl')}}>PSL</a>
        </div>

        <!-- Page content -->
        <div class="main">
        
        <div aling="left">
        
        <br />
        <br />
        </div>
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
               <!-- <div class="d-flex">
                    <div aling="mr-auto p-2"><a href="{{action('HeadlineController@edit', $row['id'])}}" class="btn btn-warning" >Edit</a></div>
                    <div aling="p-2">
                    <form method="post" class="delete_form" action="{{action('HeadlineController@destroy',$row['id'])}}"  >
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE"/>
                        <button type="submit" class="btn btn-danger" >Delete</button>
                    </form>
                    </div>
                </div>-->
            </div>
        @endforeach
        </div>    

<style>
        /* The sidebar menu */
        .sidenav {
        position: fixed; /* Fixed Sidebar (stay in place on scroll) */
        left: 0;
        background-color: white; /* Black */
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 20px;
        }

        /* The navigation menu links */
        .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        }

        /* When you mouse over the navigation links, change their color */
        .sidenav a:hover {
        color: #f1f1f1;
        }


        /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
        }
</style>

        

        

    @include('footer')
    
@endsection