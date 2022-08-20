@extends('layouts.master')
@section('content')
     <div class="content-header">
                <div>
                    <h4 class="content-title card-title">Size </h4>    

                </div>
                <div>
                    <a class="btn btn-primary" href="{{ route('sizes.create')}}"> Add Size</a>
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
                                                                              
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sizes as $key => $size)
                                        <tr>                                                                                
                                            <td>{{  ++$key }}</td>
                                            <td><b>{{  $size->size ?? '' }}</b></td>                                             

                                            <td style="display: inline-flex">  
                                                <a href="{{ route('sizes.edit', $size->id)}}" class="btn btn-info"
                                                     style="margin-right: 15px;">Edit<i class="material-icons md-edit"></i></a>    
                                                     
                                                     
                                                    <a data-form-id="size-delete-{{ $size->id }}"  href="javascript:;" 
                                                        class="btn btn-danger sa-delete">Delete
                                                        <i class="material-icons md-delete_forever"></i>
                                                    </a>                

                                                <form id="size-delete-{{ $size->id }}" action="{{ route('sizes.destroy',$size->id) }}" method="POST">
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