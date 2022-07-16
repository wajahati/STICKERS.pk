@extends('layouts.frontend')
@section('title')
    Category
@endsection

@section('content')

<h1 class="display-4">Trending Categories</h1>
<div class="container">

        <div id="owl-demo" class="owl-carousel owl-theme">

            @foreach ($trending_categories as $item)

                <div class="item">
                    <a href="{{url('view-category/'.$item->slug)}}">
                    <div class="card bg-dark">
                        <img src="{{asset('assets/uploads/category/'.$item->image)}}" alt="category">
                            <div class="card-body">
                                <h5 class="">{{$item->name}}</h5>
                                <p> {{$item->discription}}</p>
                            </div>

                    </div>
                </a>
                </div>
            @endforeach
        </div>

</div>

<h1 class="display-4">Categories</h1>
    <div class="py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="row">
                        @foreach ($category as $item)

                        <div class="col-xs-12 col-sm-6 col-md-4 ">
                            <a href="{{url('view-category/'.$item->slug)}}">
                            <div class="card bg-dark mb-2">

                                <img src="{{asset('assets/uploads/category/'.$item->image)}}" alt="category">
                                <div class="card-body">
                                    <h5 class="">{{$item->name}}</h5>
                                    <p> {{$item->discription}}</p>
                                </div>

                            </div>
                        </a>
                        </div>

                        @endforeach
                    </div>
                    </div>

            </div>
        </div>
    </div>


@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items : 5,
            itemsDesktop : [1199,5],
            itemsDesktopSmall : [979,4]

        });

    });
    </script>
@endsection
