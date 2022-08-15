@extends('layouts.master')
@section('content')
     <div class="content-header">
                <div>
                    <h4 class="content-title card-title">Categories </h4>
                 
                </div>
                <div>
                    <input type="text" placeholder="Search Categories" class="form-control bg-white">
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">

                            <form action="{{ route('categorices.store')}}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Categore Name</label>
                                    <input type="text" name="name" placeholder="Type here" class="form-control" id="product_name" />
                                    


                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    
    


                                </div>  
                                <div class="d-grid">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>
                        <div class="col-md-9">
                            <div class="table-responsive">
                                                                 
                                   
                            </div>
                        </div> <!-- .col// -->
                    </div> <!-- .row // -->
                </div> <!-- card body .// -->
            </div> <!-- card .// -->
@endsection