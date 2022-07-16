@extends('layouts.frontend')
@section('title')
    Welcome to STICKER.pk
@endsection

@section('content')
    @include('layouts.frontendTemplate.slider')
    <h1 class="display-4">Popular Products</h1>
    <div class="container">
        <div class="row">
            <div id="owl-demo" class="owl-carousel owl-theme">

                @foreach ($trending_products as $item)

                    <div class="item">
                        <div class="card bg-dark">
                            <img src="{{asset('assets/uploads/products/'.$item->image)}}" alt="product">
                            <div class="card-body">
                                <h5 class="">{{$item->name}}</h5>
                                <span class="float-end" style="text-decoration: line-through white;">{{$item->orignal_price}}</span><br>
                                <span class="float-end">Now :{{$item->selling_price}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>

        </div>

    </div>
    <p class="lead mb-0">Using Bootstrap 4 and Javascript, create a transparent navbar which changes its style on scroll.</p>
    <p class="lead mb-0">Snippet by
        <a href="#" class="text-white">
            <u>Bootstrapious</u></a>
    </p>

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
