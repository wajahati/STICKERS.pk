@extends('layouts.admin')

@section('content')
    <div class= "card">
        <div class="card-header">
            <h2>Update Category</h2>
        </div>

        <div class="card-body">
                <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Name</label>
                            <input type="text" value={{ $category->name}} class="form-control" name= "name">
                            <br>
                        </div>
                        <div class="col-md-6">
                            <label for="">Slug</label>
                            <input type="text" value={{ $category->slug}} class="form-control" name= "slug">
                            <br>
                        </div>

                        <div class="col-md-12">
                            <label for="">Discription</label>
                            <textarea name="discription"  id="" rows="4" class="form-control">{{ $category->discription}}</textarea>
                            <br>
                        </div>

                        <div class="col-md-6">
                            <label for="">Status</label>
                            <input type="checkbox" name= "status" {{ $category->status == "1" ?  'checked':''}}>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <label for="">Popular</label>
                            <input type="checkbox" name= "popular" {{ $category->popular == "1" ?  'checked':''}}>
                            <br>
                        </div>


                        <div class="col-md-12">
                            <label for="">Meta Title</label>
                            <input type="text" class="form-control" value={{ $category->meta_title}}  name= "meta_title">
                            <br>
                        </div>

                        <div class="col-md-12">
                            <label for="">Meta Keywords</label>
                            <input type="text" class="form-control" value={{ $category->meta_keywords}}  name= "meta_keywords">
                            <br>
                        </div>

                        <div class="col-md-12">
                            <label for="">Meta Discription</label>
                            <textarea name="meta_discription"  id="" rows="4" class="form-control"> {{ $category->meta_discription}}</textarea>
                            <br>
                        </div>
                    @if ($category->image)
                    <img src="{{asset('assets/uploads/category/'.$category->image)}}" class="img-thumbnail" width="150px" height="150px" alt="Image here">
                    @endif
                        <div class="col-md-12">
                            <label for="">Image</label>
                            <input type="file" class="form-control" value={{ $category->slug}}  name= "image">
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
