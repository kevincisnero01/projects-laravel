@if(session('status'))
<div class="alert alert-success alert-dismissible fade show m-3" role="alert">
    {{ session('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
        <span aria-hidden="true">&times</span>
    </button>
</div><!--.alert-->
@endif