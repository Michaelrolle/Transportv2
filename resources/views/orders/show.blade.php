@extends('layout.index')
@section('content')
<p>{{$order->loadingDateTime}}</p>
<div class="container">
    <form>
        <fieldset disabled="disabled">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Reference Number</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="{{$order->refNumber}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Loading Date</label>
                    <input type="datetime" class="form-control" id="" placeholder="{{$order->loadingDateTime}}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Loading Client</label>
                <input type="text" class="form-control" id="inputAddress2"
                    placeholder="{{$order->loadingClient->name}}">
            </div>
            <div class="form-group">
                <label for="inputAddress">Loading Address</label>
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
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </fieldset>
    </form>
</div>
@endsection