@extends('layouts.admin')

@section('content')
    <div class= "card">
        <div class="card-header">
            <h2>Add Product</h2>
        </div>

        <div class="card-body">
                <form action="{{url('insert-product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <select class="form-select" name="categoryId" aria-label="Default select example">
                            <option value="">Select a Category</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{$item->name}}</option>
                            @endforeach
                          </select>
                          <br>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name= "name">
                            <br>
                        </div>
                        <div class="col-md-6">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" name= "slug">
                            <br>
                        </div>

                        <div class="col-md-12">
                            <label for="">Small Discription</label>
                            <textarea name="small_discription" id="" rows="2" class="form-control"></textarea>
                            <br>
                        </div>

                        <div class="col-md-12">
                            <label for="">Discription</label>
                            <textarea name="discription" id="" rows="4" class="form-control"></textarea>
                            <br>
                        </div>

                        <div class="col-md-6">
                            <label for="">Orignal Price</label>
                            <input type="number" class="form-control" name= "orignal_price">
                            <br>
                        </div>
                        <div class="col-md-6">
                            <label for="">Selling Price</label>
                            <input type="number" class="form-control" name= "selling_price">
                            <br>
                        </div>

                        <div class="col-md-6">
                            <label for="">Tax</label>
                            <input type="number" class="form-control" name= "tax">
                            <br>
                        </div>
                        <div class="col-md-6">
                            <label for="">Quantity</label>
                            <input type="number" class="form-control" name= "quantity">
                            <br>
                        </div>

                        <div class="col-md-6">
                            <label for="">Status</label>
                            <input type="checkbox" name= "status">
                            <br>
                        </div>
                        <div class="col-md-6">
                            <label for="">Trending</label>
                            <input type="checkbox" name= "trending">
                            <br>
                        </div>


                        <div class="col-md-12">
                            <label for="">Meta Title</label>
                            <input type="text" class="form-control" name= "meta_title">
                            <br>
                        </div>

                        <div class="col-md-12">
                            <label for="">Meta Keywords</label>
                            <input type="text" class="form-control" name= "meta_keywords">
                            <br>
                        </div>

                        <div class="col-md-12">
                            <label for="">Meta Discription</label>
                            <textarea name="meta_discription" id="" rows="4" class="form-control"></textarea>
                            <br>
                        </div>

                        <div class="col-md-12">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name= "image">
                            <br>
                        </div>

                        <div class = "col-md-12">
                            <button type="submit" class ="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
@endsection
