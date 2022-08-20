@extends('layouts.master')
@section('content')
     <div class="content-header">
                <div>
                    <h4 class="content-title card-title">Brand Edit </h4>                 
                </div>
                <div>
                    <a class="btn btn-primary" href="{{ route('brand.index')}}"> All Brand</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 "> </div>
                        <div class="col-md-6">

                            <form action="{{ route('brand.update', $edit_brand->id )}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-4">
                                    <label for="brand_name" class="form-label">Brand Name</label>
                                    <input type="text" name="brand_name" placeholder="Brand edit" class="form-control" value="{{ $edit_brand->brand_name }}" />
                                    
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    
                                </div>  
                                <div class="d-grid">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>
                        <div class="col-md-3">
                            <div class="table-responsive">
                                                                 
                                   
                            </div>
                        </div> <!-- .col// -->
                    </div> <!-- .row // -->
                </div> <!-- card body .// -->
            </div> <!-- card .// -->
@endsection