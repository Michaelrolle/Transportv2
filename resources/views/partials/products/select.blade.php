<div class="col">
    {{ Form::label('product_id', 'Product')}}
    {{ Form::select('product_id', $products)}}
    @error('product_id')
    <span class="small text-danger">{{$errors->first('product_id')}}</span>
    @enderror
</div>