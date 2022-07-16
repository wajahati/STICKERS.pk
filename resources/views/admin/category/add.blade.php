@extends('layouts.admin')

@section('content')
    <div class= "card">
        <div class="card-header">
            <h2>Add Category</h2>
        </div>

        <div class="card-body">
                <form action="{{url('insert-category')}}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                            <label for="">Discription</label>
                            <textarea name="discription" id="" rows="4" class="form-control"></textarea>
                            <br>
                        </div>

                        <div class="col-md-6">
                            <label for="">Status</label>
                            <input type="checkbox" name= "status">
                            <br>
                        </div>
                        <div class="col-md-6">
                            <label for="">Popular</label>
                            <input type="checkbox" name= "popular">
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
