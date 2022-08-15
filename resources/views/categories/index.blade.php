@extends('layouts.master')
@section('content')
     <div class="content-header">
                <div>
                    <h4 class="content-title card-title">Categories </h4>
                    {{--  --}}
                 
                </div>
                <div>
                    <input type="text" placeholder="Search Categories" class="form-control bg-white">
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                      
                        <div class="col-md-9">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th>ID</th>
                                            <th>Name</th>                                       
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cat as $category)
                                        <tr>                                                                                
                                            <td>{{  $category->id }}</td>
                                            <td><b>{{  $category->name }}</b></td>  
                                            <td class="text-end">    
                                                <a href="#" class="btn btn-success">View detail</a>
                                                <a href="#" class="btn btn-info">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>                                              
                                            </td>
                                        </tr>
                                        @endforeach                                    
                                     
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- .col// -->
                    </div> <!-- .row // -->
                </div> <!-- card body .// -->
            </div> <!-- card .// -->
@endsection