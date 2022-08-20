@extends('layouts.master')
@section('content')
     <div class="content-header">
                <div>
                    <h4 class="content-title card-title">Brand </h4>    

                </div>
                <div>
                    <a class="btn btn-primary" href="{{ route('brand.create')}}"> Add Brand</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">  
                        <div class="col-md-3"> </div>                   
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>                                            
                                            <th>ID</th>
                                            <th>Name</th>                                       
                                            <th>Status</th>                                       
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($brand as $key => $brands)
                                        <tr>                                                                                
                                            <td>{{  ++$key }}</td>
                                            <td><b>{{  $brands->brand_name ?? '' }}</b></td>  

                                            <td><span class="badge rounded-pill alert-success">Active</span></td>

                                            <td style="display: inline-flex">  
                                                <a href="{{ route('brand.edit', $brands->id)}}" class="btn btn-info"
                                                     style="margin-right: 15px;">Edit<i class="material-icons md-edit"></i></a>    
                                                     
                                                     
                                                    <a data-form-id="brand-delete-{{ $brands->id }}"  href="javascript:;" 
                                                        class="btn btn-danger sa-delete">Delete
                                                        <i class="material-icons md-delete_forever"></i>
                                                    </a>                

                                                <form id="brand-delete-{{ $brands->id }}" action="{{ route('brand.destroy',$brands->id) }}" method="POST">
                                                    @csrf            
                                                    @method('DELETE')     
                                                </form>   
                                                
                                            </td>
                                        </tr>
                                        @endforeach    
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- .col// -->
                        <div class="col-md-3"> </div>  
                    </div> <!-- .row // -->
                </div> <!-- card body .// -->
            </div> <!-- card .// -->
@endsection