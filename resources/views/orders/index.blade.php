@extends('layout.index')
@section('content')
@include('sweetalert::alert')
<a href="{{route('orders.create')}}" class="btn btn-success btn-block">Create New Order</a>
<div class="card-body">
    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
            @if (session('succes'))
            <div class="alert alert-succes">
                {{session('succes')}}
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-sm-12">

                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid"
                    aria-describedby="example2_info">
                    <thead>
                        <tr role="row" class="text-center">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-sort="ascending" aria-label="Last Name: activate to sort column descending">
                                Reference Number</th>

                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="First Name: activate to sort column ascending">Quantity</th>

                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Product</th>

                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Loading Client</th>

                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending" style="display: none;">
                                Loading Date</th>

                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Delivery Client</th>

                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending" style="display: none;">
                                Delivery Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        @if($loop->iteration % 2 == 0)
                        <tr role="row" class="odd">
                            @else
                        <tr role="row" class="even">
                            @endif
                            <td tabindex="0" class="sorting_1">{{$order->refNumber}}</td>
                            <td>{{$order->quantity}} {{$order->metric->name}}</td>
                            <td>{{$order->product->name}}</td>
                            <td>{{$order->loadingClient->name}}</td>
                            <td>{{ date('d-M-y h:i', strtotime($order->loadingDateTime)) }}</td>
                            <td>{{$order->deliveryClient->name}}</td>
                            <td>{{ date('d-M-y h:i', strtotime($order->deliveryDateTime)) }}</td>
                            <td>
                                <a name="" id="" class="btn btn-primary btn-block"
                                    href="{{ route('downloadPDF', $order->id) }}" role="button"><i
                                        class="fas fa-file-pdf"></i></a>
                                <a name="" id="" class="btn btn-warning btn-block"
                                    href="{{ route('orders.edit', $order->id) }}" role="button"><i
                                        class="fas fa-edit"></i></a>
                                @can('delete')<a name="" id="" class="btn btn-danger btn-block"
                                    href="{{ route('orders.destroy', $order->id) }}" role="button"><i
                                        class="fas fa-trash-alt"></i></a>
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">Reference Number</th>
                            <th rowspan="1" colspan="1">Quantity</th>
                            <th rowspan="1" colspan="1">Product</th>
                            <th rowspan="1" colspan="1">Loading Client</th>
                            <th rowspan="1" colspan="1">Loading Date</th>
                            <th rowspan="1" colspan="1">Delivery Client</th>
                            <th rowspan="1" colspan="1">Delivery Date</th>
                            <th></th>
                            {{-- <th rowspan="1" colspan="1">Engine version</th>
              <th rowspan="1" colspan="1" style="display: none;">CSS grade</th> --}}
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                </div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                    <ul class="pagination">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection