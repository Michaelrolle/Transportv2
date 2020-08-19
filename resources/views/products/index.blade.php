@extends('layout.index')
@section('content')

<ul>
    @foreach ($products as $product)
    <li>{{ $product->name}}</li>
</ul>
@endforeach
{{Route::current()->getName()}}
@endsection