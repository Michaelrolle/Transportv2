@extends('layout.index')
@section('content')

<div class="card-body">
    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
      <div class="row">
          <div class="col-sm-10 offset-sm1">
            test
          </div>
        </div>
        <div class="row">
          <div class="col-sm-10 offset-sm-1">

      <table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
      <thead>
      <tr role="row" class="text-center">
        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Last Name: activate to sort column descending">Last Name</th>
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="First Name: activate to sort column ascending">First Name</th>
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Driver Code</th>
        {{-- <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th>
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="display: none;">CSS grade</th> --}}
        <th></th>
      </tr>
      </thead>
      <tbody> 
        @foreach ($drivers as $driver)
        @if($loop->iteration % 2 == 0)
            <tr role="row" class="odd">
        @else
        <tr role="row" class="even">
       @endif
              <td tabindex="0" class="sorting_1">{{$driver->lastName}}</td>
              <td>{{$driver->firstName}}</td>
              <td >{{$driver->driverCode}}</td>
              <td><a name="" id="" class="btn btn-warning btn-block" href="drivers/{{$driver->id}}/edit" role="button"><i class="fas fa-edit" ></i></a><a name="" id="" class="btn btn-danger btn-block" href="drivers/{{$driver->id}}/delete" role="button"><i class="fas fa-trash-alt" ></i></a></td>
              
              
              {{-- <td></td>
              <td style="display: none;"></td> --}}
            </tr>
    @endforeach
    </tbody>
      <tfoot>
      <tr>
        <th rowspan="1" colspan="1">Last Name</th>
        <th rowspan="1" colspan="1">First Name</th>
        <th rowspan="1" colspan="1">Driver Code</th>
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




      
@endsection