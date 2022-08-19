@extends('layouts.master')
@section('content')
     <div class="content-header">
                <div>
                    <h4 class="content-title card-title">Categories </h4>    

                </div>
                <div>
                    <a class="btn btn-primary" href="{{ route('categorices.create')}}"> Add Categories</a>
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
                                        @foreach ($cat as $key => $category)
                                        <tr>                                                                                
                                            <td>{{  ++$key }}</td>
                                            <td><b>{{  $category->name ?? '' }}</b></td>  

                                            <td><span class="badge rounded-pill alert-success">Active</span></td>

                                            <td style="display: inline-flex">  
                                                <a href="{{ route('categorices.edit', $category->id)}}" class="btn btn-info"
                                                     style="margin-right: 15px;">Edit<i class="material-icons md-edit"></i></a>    
                                                     
                                                     
                                                    <a data-form-id="category-delete-{{ $category->id }}"  href="javascript:;" 
                                                        class="btn btn-danger sa-delete">Delete
                                                        <i class="material-icons md-delete_forever"></i>
                                                    </a>                

                                                <form id="category-delete-{{ $category->id }}" action="{{ route('categorices.destroy',$category->id) }}" method="POST">
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