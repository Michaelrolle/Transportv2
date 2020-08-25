@extends('layout.index')
@section('content')
<div class="container">
    <form>
        <fieldset disabled="disabled">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Reference Number</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="{{$order->refNumber}}">
                </div>
            </div>
            <div class="form-group border mb-3">
                <h4 class="mb-3">Loading Details</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Company Name</label>
                        <input type="text" class="form-control" id="inputEmail4"
                            placeholder="{{$order->loadingClient->name}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Loading Date</label>
                        <input type="datetime" class="form-control" id="" placeholder="{{$order->loadingDateTime}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress"
                        placeholder="{{$order->loadingLocation->address}}">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity"
                            placeholder="{{$order->loadingLocation->city}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>{{$order->loadingLocation->country}}</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip"
                            placeholder="{{$order->loadingLocation->postCode}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Loading Notes</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="{{$order->loadingNotes}}"></textarea>
                </div>
            </div>

            <div class="form-group border mb-3">
                <h4 class="mb-3">Delivery Details</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Company Name</label>
                        <input type="email" class="form-control" id="inputEmail4"
                            placeholder="{{$order->deliveryClient->name}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Loading Date</label>
                        <input type="datetime" class="form-control" id="" placeholder="{{$order->deliveryDateTime}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress"
                        placeholder="{{$order->deliveryLocation->address}}">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity"
                            placeholder="{{$order->deliveryLocation->city}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>{{$order->deliveryLocation->country}}</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip"
                            placeholder="{{$order->deliveryLocation->postCode}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Loading Notes</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="{{$order->loadingNotes}}"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
        </fieldset>
    </form>
</div>
@endsection