@extends('layouts.admin')

@section('content')
    <div class= "card">
        <div class="card-header">
            <h2>Category Page</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Discription</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td> {{$item->id}}</td>
                            <td> {{$item->name}}</td>
                            <td> {{$item->discription}}</td>
                            <td><img src="{{asset('assets/uploads/category/'.$item->image)}}" class="img-thumbnail" width="250px" height="250px" alt="Image here"></td>
                            <td>
                                <ul class="list-unstyled CTAs">
                                    <li>
                                        <a class="dropdown-item logout" href="{{url('edit-category/'.$item->id)}}" style="background:grey; color:white;">
                                            Edit
                                            </a>
                                    </li>
                                    <li>
                                        <a href="{{url('delete-category/'.$item->id)}}" class="dropdown-item article">Delete</a>
                                    </li>
                                </ul>
                                {{-- <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">Delete</button> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>

    </div>
@endsection
