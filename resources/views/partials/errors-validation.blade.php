@if($errors->any())
<div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
	<ul class="m-0">
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</ul>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
    	<span aria-hidden="true">&times</span>
    </button>
</div><!--.alert-->
@endif