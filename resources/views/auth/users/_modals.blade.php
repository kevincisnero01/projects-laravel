<div class="modal fade" id="modalEditForm{{  $user->id }}">
	<div class="modal-dialog">
        <div class="modal-content">
    
          <!-- cabecera del diálogo -->
          <div class="modal-header">
            <h4 class="modal-title display-5">Editar Registro</h4>
            <button type="button" class="close" data-dismiss="modal">X</button>
          </div>
    
          <!-- cuerpo del diálogo -->
          <div class="modal-body">
        
		    <form method="POST" id="editForm{{  $user->id }}" action="{{ route('users.update', $user) }}">
		        @csrf
		        @method('put')

		        <div class="form-group">
		            <label for="name">{{ __('Name') }}</label>
		            <input type="text" class="form-control bg-light shadow-sm  @error('name') is-invalid @enderror"
		            id="name{{  $user->id }}"
		            name="name"
		            value="{{ old('name', $user->name ) }}"
		            placeholder="Escriba aquí el nombre..."
		            autofocus>
		            @error('name')
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $message }}</strong>
		                </span>
		            @enderror
		        </div>

		        <div class="form-group">
		            <label for="email" >{{ __('E-Mail Address') }}</label>
		            <input type="email" class="form-control bg-light shadow-sm  @error('email') is-invalid @enderror"
		                id="email{{  $user->id }}"
		                name="email"
		                value="{{ old('email', $user->email ) }}"
		                placeholder="Escriba aquí el correo...">
		            @error('email')
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $message }}</strong>
		                </span>
		            @enderror
		        </div>
		    </form>

          </div><!--.modal-body-->
    
          <!-- pie del diálogo -->
          <div class="modal-footer">
          	<button type="submit" form="editForm{{  $user->id }}" class="btn btn-primary" >Editar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
    
        </div><!--.modal-content-->
    </div><!--.modal-dialog-->
</div><!--.modal-->

<script type="text/javascript">
	window.onload = function(){

	}
</script>