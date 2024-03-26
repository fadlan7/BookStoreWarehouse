@extends('layouts.app')

@section('title', 'Book Store Warehouse')

@section('contents')
<div class="row">
    @if(Session::has('success'))
        <div class="alert alert-success auto-close" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0 justify-content-between d-flex direction-row">
          <h6>Books table</h6>
          <a href="{{ route('books.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">Add Book</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Publisher</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Genre</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Year</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stock</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection