@extends('layout.index')
@section('content')
<div class="container">
    {{-- <p>{{}}</p> --}}
    {{-- @foreach($order as $key=>$value)
    <p>{{$key}} : {{$value}}</p>
    @endforeach --}}

    {{Form::model($order, ['method' => 'PUT' , 'route' => ['orders.update', $order['id']]])}}
    <div class="form-group">
        {{ Form::label('refNumber', 'Reference Number')}}
        {{ Form::number('refNumber', null, ['class' => 'form-control'])}}
        <div class="form-group">
            {{ Form::label('loadingDateTime', 'Loading Date')}}
            {{ Form::date('loadingDateTime', \Carbon\Carbon::parse($order['loadingDateTime'])->format('Y-m-d'))}}
        </div>
        <div class="form-group">
            {{ Form::label('loadingNotes', 'Loading Notes')}}
            {{ Form::textarea('loadingNotes', null, ['class' => 'form-control', 'rows' => 2])}}
        </div>
        <div class="form-group">
            {{ Form::label('product_id', 'Product')}}
            {{ Form::select('product_id', $products , $order['product_id'])}}
        </div>
        <div class="form-group">
            {{ Form::label('quantity', 'quantity')}}
            {{ Form::number('quantity',null , ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label('metric_id', 'Metric')}}
            {{ Form::select('metric_id', $metrics , $order['metric_id'])}}
        </div>
        <div class="form-group">
            {{ Form::label('driver_id', 'Driver')}}
            {{ Form::select('driver_id', $drivers , $order['driver_id'])}}
        </div>
        <div class="form-group">
            {{ Form::label('loading_location_id', 'Loading Location')}}
            {{ Form::select('loading_location_id', $locations , $order['loading_location_id'])}}
        </div>
        <div class="form-group">
            {{ Form::label('loading_client_id', 'Loading Client')}}
            {{ Form::select('loading_client_id', $clients , $order['loading_client_id'])}}
        </div>
    </div>
    <div class="form-group">
        <div class="form-group">
            {{ Form::label('deliveryDateTime', 'Delivery Date')}}
            {{ Form::date('deliveryDateTime', \Carbon\Carbon::parse($order['deliveryDateTime'])->format('Y-m-d'))}}
        </div>
        <div class="form-group">
            {{ Form::label('delivery_location_id', 'Delivery Location')}}
            {{ Form::select('delivery_location_id', $locations , $order['delivery_location_id'])}}
        </div>
        <div class="form-group">
            {{ Form::label('delivery_client_id', 'Delivery Client')}}
            {{ Form::select('delivery_client_id', $clients , $order['delivery_client_id'])}}
        </div>
        <div class="form-group">
            {{ Form::label('deliveryNotes', 'Delivery Notes')}}
            {{ Form::textarea('deliveryNotes', null, ['class' => 'form-control', 'rows' => 2])}}
        </div>
    </div>
    {{ Form::button('Change <i class="fas fa-pen"></i>', ['type' => 'submit', 'class' => 'btn btn-warning'] )  }}
    {!! Form::close() !!}
</div>
@endsection