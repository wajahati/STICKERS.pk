@extends('layouts.admin')

@section('content')
    <div class= "card">
        <div class="card-header">
            <h2>Product Update/Delete</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Discription</th>
                    <th>Selling Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($product as $item)
                        <tr>
                            <td> {{$item->id}}</td>
                            <td> {{$item->category->name}}</td>
                            <td> {{$item->name}}</td>
                            <td> {{$item->small_discription}}</td>
                            <td> {{$item->selling_price}}</td>
                            <td><img src="{{asset('assets/uploads/products/'.$item->image)}}" class="img-thumbnail" width="200px" height="200px" alt="Image here"></td>
                            <td>
                                <ul class="list-unstyled CTAs">
                                    <li>
                                        <a class="dropdown-item logout" href="{{url('edit-product/'.$item->id)}}" style="background:grey; color:white;">
                                            Edit
                                            </a>
                                    </li>
                                    <li>
                                        <a href="{{url('delete-product/'.$item->id)}}" class="dropdown-item article">Delete</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>

    </div>
@endsection
