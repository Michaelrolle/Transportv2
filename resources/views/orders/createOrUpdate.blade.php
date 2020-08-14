@extends('layout.index')
@section('content')
<div class="container">
    @if (isset($order))
    {{Form::model($order, ['method' => 'PUT' , 'route' => ['orders.update', $order['id']]])}}
    @else
    {{Form::open(['method' => 'POST' ,'route' => 'orders.store'])}}
    @endif
    <div class="form-group">
        {{ Form::label('refNumber', 'Reference Number')}}
        {{ Form::number('refNumber', null, ['class' => 'form-control'])}}
        @error('refNumber')
        <span class="small text-danger">{{$errors->first('refNumber')}}</span>
        @enderror
        <div class="form-group">
            {{ Form::label('loadingDateTime', 'Loading Date')}}
            {{ Form::date('loadingDateTime', \Carbon\Carbon::parse($order['loadingDateTime'] ?? '')->format('Y-m-d'))}}
            @error('loadingDateTime')
            <span class="small text-danger">{{$errors->first('loadingDateTime')}}</span>
            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('loading_location_id', 'Loading Location')}}
            {{ Form::select('loading_location_id', $locations)}}
            @error('loading_location_id')
            <span class="small text-danger">{{$errors->first('loading_location_id')}}</span>
            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('loading_client_id', 'Loading Client')}}
            {{-- 3rd value is default value (e.g null) , 4th value are additional classes --}}
            {{ Form::select('loading_client_id', $clients)}}
            @error('loading_client_id')
            <span class="small text-danger">{{$errors->first('loading_client_id')}}</span>
            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('loadingNotes', 'Loading Notes')}}
            {{ Form::textarea('loadingNotes', null, ['class' => 'form-control', 'rows' => 2])}}
            @error('loadingNotes')
            <span class="small text-danger">{{$errors->first('loadingNotes')}}</span>
            @enderror
        </div>
        <div class="form-row">
            <div class="col">
                {{ Form::label('product_id', 'Product')}}
                {{ Form::select('product_id', $products)}}
                @error('product_id')
                <span class="small text-danger">{{$errors->first('product_id')}}</span>
                @enderror
            </div>
            <div class="col">
                {{ Form::label('quantity', 'quantity')}}
                {{ Form::number('quantity',null , ['class' => 'form-control'])}}
                @error('quantity')
                <span class="small text-danger">{{$errors->first('quantity')}}</span>
                @enderror
            </div>
            <div class="col">
                {{ Form::label('metric_id', 'Metric')}}
                {{ Form::select('metric_id', $metrics)}}
                @error('metric_id')
                <span class="small text-danger">{{$errors->first('metric_id')}}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('driver_id', 'Driver')}}
            {{ Form::select('driver_id', $drivers)}}
            @error('driver_id')
            <span class="small text-danger">{{$errors->first('driver_id')}}</span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <div class="form-group">
            {{ Form::label('deliveryDateTime', 'Delivery Date')}}
            {{ Form::date('deliveryDateTime', \Carbon\Carbon::parse($order['deliveryDateTime']?? '')->format('Y-m-d'))}}
            @error('deliveryDateTime')
            <span class="small text-danger">{{$errors->first('deliveryDateTime')}}</span>
            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('delivery_location_id', 'Delivery Location')}}
            {{ Form::select('delivery_location_id', $locations , $order['delivery_location_id'] ?? '')}}
            @error('delivery_location_id')
            <span class="small text-danger">{{$errors->first('delivery_location_id')}}</span>
            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('delivery_client_id', 'Delivery Client')}}
            {{ Form::select('delivery_client_id', $clients , $order['delivery_client_id']?? '')}}
            @error('delivery_client_id')
            <span class="small text-danger">{{$errors->first('delivery_client_id')}}</span>
            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('deliveryNotes', 'Delivery Notes')}}
            {{ Form::textarea('deliveryNotes', null, ['class' => 'form-control', 'rows' => 2])}}
            @error('deliveryNotes')
            <span class="small text-danger">{{$errors->first('deliveryNotes')}}</span>
            @enderror
        </div>
    </div>
    @if(isset($order))
    {{ Form::button('Change <i class="fas fa-pen"></i>', ['type' => 'submit', 'class' => 'btn btn-warning'] )  }}
    @else
    {{ Form::button('Create <i class="fas fa-pen"></i>', ['type' => 'submit', 'class' => 'btn btn-success'] )  }}
    @endif
    {!! Form::close() !!}
</div>
@endsection