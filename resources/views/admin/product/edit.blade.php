@extends('layouts.admin')

@section('content')
    <div class= "card">
        <div class="card-header">
            <h2>Edit Product</h2>
        </div>

        <div class="card-body">
                <form action="{{url('update-product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <select class="form-select"  aria-label="Default select example">
                            <option value="">{{$product->category->name}}</option>

                          </select>
                          <br>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Name</label>
                            <input type="text" value={{ $product->name}} class="form-control" name= "name">
                            <br>
                        </div>
                        <div class="col-md-6">
                            <label for="">Slug</label>
                            <input type="text" value={{ $product->slug}} class="form-control" name= "slug">
                            <br>
                        </div>

                        <div class="col-md-12">
                            <label for="">Small Discription</label>
                            <textarea name="small_discription" id="" rows="2" class="form-control">{{ $product->small_discription}}</textarea>
                            <br>
                        </div>

                        <div class="col-md-12">
                            <label for="">Discription</label>
                            <textarea name="discription" id="" rows="4" class="form-control">{{ $product->discription}}</textarea>
                            <br>
                        </div>

                        <div class="col-md-6">
                            <label for="">Orignal Price</label>
                            <input type="number" class="form-control" value={{ $product->orignal_price}} name= "orignal_price">
                            <br>
                        </div>
                        <div class="col-md-6">
                            <label for="">Selling Price</label>
                            <input type="number" class="form-control" value={{ $product->selling_price}} name= "selling_price">
                            <br>
                        </div>

                        <div class="col-md-6">
                            <label for="">Tax</label>
                            <input type="number" class="form-control" value={{ $product->tax}} name= "tax">
                            <br>
                        </div>
                        <div class="col-md-6">
                            <label for="">Quantity</label>
                            <input type="number" class="form-control" value={{ $product->quantity}} name= "quantity">
                            <br>
                        </div>

                        <div class="col-md-6">
                            <label for="">Status</label>
                            <input type="checkbox" name= "status" {{ $product->status == "1" ?  'checked':''}}>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <label for="">Trending</label>
                            <input type="checkbox" name= "trending" {{ $product->trending == "1" ?  'checked':''}}>
                            <br>
                        </div>


                        <div class="col-md-12">
                            <label for="">Meta Title</label>
                            <input type="text" class="form-control" value={{ $product->meta_title}} name= "meta_title">
                            <br>
                        </div>

                        <div class="col-md-12">
                            <label for="">Meta Keywords</label>
                            <input type="text" class="form-control" value={{ $product->meta_keywords}} name= "meta_keywords">
                            <br>
                        </div>

                        <div class="col-md-12">
                            <label for="">Meta Discription</label>
                            <textarea name="meta_discription" id="" rows="4"  class="form-control">{{ $product->meta_discription}}</textarea>
                            <br>
                        </div>
                        @if ($product->image)
                        <img src="{{asset('assets/uploads/products/'.$product->image)}}" class="img-thumbnail" width="150px" height="150px" alt="Image here">
                        @endif
                        <div class="col-md-12">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name= "image">
                            <br>
                        </div>

                        <div class = "col-md-12">
                            <button type="submit" class ="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
@endsection
