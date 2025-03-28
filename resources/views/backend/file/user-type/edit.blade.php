@extends('backend.layouts.app')
@section('content')
<div class="container">
	<div class="col-xl-8 single-filed">
		<div class="block">
	        <div class="block-header block-header-default">
	            <h3 class="block-title"><b>Update User Type</b></h3>
	            <div class="block-options">
	            	<a href="{{route('user-type.list')}}" class="btn btn-sm btn-alt-primary">
			            <i class="fa fa-list mr-5"></i>User Type List
			        </a>
	            </div>
	        </div>
	        <div class="block-content">
	            <div class="row items-push">
	                <!-- jQuery Auto Complete (Bootstrap forms) -->
	                <div class="col-xl-12">
	                    <form action="{{route('user-type.update',$type->id)}}" method="post" enctype="multipart/form-data">
	                    	@csrf
	                        <div class="form-group row">
	                            <label class="col-12" for="example-autocomplete1">User Type: <span class="text-danger">*</span></label>
	                            <div class="col-lg-12">
	                                <input type="text" class="js-autocomplete form-control" value="{{$type->user_type}}" name="user_type" id="example-autocomplete1" placeholder="User Type...">
	                                @error('user_type')
			                            <span class="text-danger">{{ $message }}</span>
			                        @enderror
	                            </div>
	                        </div>

	                        <div class="form-group text-right">
	                            <button type="submit" class="btn btn-square btn-primary min-width-125 mb-10 mt-20">Submit</button>
	                        </div>
	                    </form>
	                </div>
	                <!-- END jQuery Auto Complete (Bootstrap forms) -->
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection