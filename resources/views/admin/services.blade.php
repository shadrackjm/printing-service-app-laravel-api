@extends('layout/admin-layout')
@section('main-part')
    <div class="card">
        <div class="card-header ">
             <h5 class="card-title">Services List</h5>
        </div>
        <div class="card-body">
            <table class="table datatable">
                    <tr>
                        <th>S/N</th>
                        <th>Service Name</th>
                        <th>Service description</th>
                        <th>Service Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                
                   @foreach ($service_data as $item)
                       <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->serviceName}}</td>
                            <td>{{$item->serviceDescription}}</td>
                            <td>{{$item->price}}</td>
                            <td><button class="btn btn-primary btn-sm"><i class="bi bi-pencil-fill"></i></button></td>
                            <td><button class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i></button></td>
                       </tr>
                   @endforeach
            </table>
        </div>
    </div>
@endsection