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
                        <th>Number of Copies</th>
                        <th>Payment</th>
                        <th>Order Status</th>
                    </tr>
                
                   @foreach ($order_data as $item)
                       <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->number_copies}}</td>
                            <td>{{$item->order_payment}}</td>
                            <td>{{$item->order_status}}</td>
                       </tr>
                   @endforeach
            </table>
        </div>
    </div>
@endsection