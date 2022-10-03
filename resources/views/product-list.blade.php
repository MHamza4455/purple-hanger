@extends('layouts.dash')
@section('content')
<div class="container">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
  @endif
    <div class="card">
        <div class="card-body" >
            <a href="{{route('productAdd')}}" style="float: right;" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ADD</a>

            <table class="table">
                
                <thead>
                    <tr>
                        <th style="font-weight: bold;">Name</th>
                        <th style="font-weight: bold;">Description</th>
                        <th style="font-weight: bold;">Price</th>
                        <th style="font-weight: bold;">Quantity</th>
                        <th style="font-weight: bold;">Tags</th>
                        <th style="font-weight: bold;">FirstCat</th>
                        <th style="font-weight: bold;">SecondCat</th>
                        <th style="font-weight: bold;">ThirdCat</th>
                        <th style="font-weight: bold;">Status</th>
                        <th style="font-weight: bold;">Featured</th>
                        <th style="font-weight: bold;">Image</th>
                        <th style="font-weight: bold;">Change Status</th>
                        <th style="font-weight: bold;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->description}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->quantity}}</td>
                        <td>{{$data->tags}}</td>
                        <td>{{$data->firstcat->name}}</td>
                        <td>{{$data->secondcat->name}}</td>
                        <td>{{$data->thirdcat->name}}</td>
                        <td id="status-{{$data->id}}">
                            <span class="badge bg-danger">
                            @if ($data->status == 1)
                            Active
                            @elseif ($data->status==0)
                            InActive
                            @else
                            Other 
                            @endif
                        </span>
                        </td>
                        <td>
                            <span class="badge bg-danger">
                            @if ($data->is_featured == 1)
                            Featured
                            @elseif ($data->is_featured==0)
                            Not Featured
                            @else
                            Other 
                            @endif
                        </span>
                        </td>
                        <td>
                            <img src="{{$data->thumbnail}}" height="50" width="50">
                        </td>
                        <td>
                            <center>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter-{{$data->id}}">
                                 @if ($data->status == 1)
                                 Inactive
                                 @elseif ($data->status==0)
                                 Active
                                 @endif
                                </button>
                            </center>
                            <div class="modal fade" id="exampleModalCenter-{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter-{{$data->id}}Title" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Update Product Status</h5>
                                    <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    Are You Sure You Want To change the Status.
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    
                                    <a  id="yesbtn"><button data-id="{{$data->id}}" type="button" class="btn btn-primary confirmBtn">Yes</button></a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        
                        </td>
                        <td>
                            <a href="{{ route('productDelete',$data->id) }}" onclick="return confirm('Are you Sure')"><button class="btn btn-danger">Delete</button></a>
                            <a href="{{ route('productEdit',$data->id) }}"><button class="btn btn-secondary">Edit</button></a>
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
  $(document).ready(function(){
    
    $('.confirmBtn').click(function (event){
        var job =  event.target.dataset.id;
        $.ajax({
            url: '{{ route('changeStatus') }}',
            type: 'POST',
            dataType: 'json',
            data: {
            _token : '<?php echo csrf_token() ?>',
            id : job
           },
            success: function(data){ 
                let status = data.data == true ? 'Active' : 'InActive';
                $('#status-'+job).html(status);
                $('.close').trigger('click');
            }
            
        });
    
    });
  });
 </script>
@endsection