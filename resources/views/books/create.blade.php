@extends('layouts.app')

@section('title', 'Add New Book')

@section('contents')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0 justify-content-between d-flex direction-row">
          <h6>Add New Book</h6>
          </div>
        <div class="card-body">
            <form action="{{route('books.store')}}" method="POST" class="row g-3" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <label for="inpuTitle" class="form-label">Book Title</label>
                    <input type="text" name="title" class="form-control" required placeholder="Malin Kundang" id="inpuTitle">
                </div>
                <div class="col-md-6">
                    <label for="inputAuthor" class="form-label">Author</label>
                    <input type="text" name="author" class="form-control" required placeholder="John Doe" id="inputAuthor">
                </div>
                
                <div class="col-md-6">
                    <label for="inputPublisher" class="form-label">Publisher</label>
                    <input type="text" name="publisher" class="form-control" required placeholder="CV. Nusantara" id="inputPublisher">
                </div>
                <div class="col-md-6">
                    <label for="inputGenre" class="form-label">Book Genre</label>
                    <input type="text" name="genre" class="form-control" required placeholder="Fiction" id="inputGenre">
                </div>
                <div class="col-md-6">
                    <label for="inputYear" class="form-label">Year</label>
                    <input type="number" name="year" class="form-control" required placeholder="2021" id="inputYear">
                </div>
                <div class="col-md-6">
                    <label for="inputStock" class="form-label">Stock</label>
                    <input type="number" name="stock" class="form-control" required placeholder="22" id="inputStock">
                </div>
                <div class="col-md-6">
                    <label for="inputPrice" class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" required placeholder="75000" id="inputPrice">
                </div>
                
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
      </div>
    </div>
</div>

@endsection