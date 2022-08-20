@extends('layouts.master')
@section('content')
     <div class="content-header">
                <div>
                    <h4 class="content-title card-title">Add Size </h4>                 
                </div>
                <div>
                    <a class="btn btn-primary" href="{{ route('sizes.index')}}"> All Size</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3"> </div>
                            <div class="col-md-6">
                            <form action="{{ route('sizes.store')}}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="size" class="form-label">Size Name</label>
                                    <input type="text" name="size" placeholder="Type here" class="form-control"  />
                                    
                                    @error('size')
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