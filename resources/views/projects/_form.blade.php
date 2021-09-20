@csrf

<div class="form-group">
	<label for="title">Titulo</label>
	<input type="text" class="form-control bg-light shadow-sm"
		id="title"
		name="title"
		value="{{ old('title', $project->title) }}"
		placeholder="Escriba aquí el titulo...">
</div><!--.form-group-->

<div class="form-group">
	<label for="url">URL</label>
	<input type="text" class="form-control bg-light shadow-sm"
	id="url"
	name="url"
	value="{{ old('url', $project->url) }}"
	placeholder="Escriba aquí la url...">
</div><!--.form-group-->

<div class="form-group">
	<label for="description">Descripcion</label>
	<textarea class="form-control bg-light shadow-sm"
	id="descripcion"
	name="description"
	placeholder="Escriba aquí la descripción..."
	>{{ old('description', $project->description) }}</textarea>
</div><!--.form-group-->

<button class="btn btn-primary btn-lg btn-block">{{ $btn_txt }}</button>