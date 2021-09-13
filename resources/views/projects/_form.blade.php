@csrf

<label>Titulo</label><br>
<input type="text" name="title" value="{{ old('title', $project->title) }}"><br>

<label>URL</label><br>
<input type="text" name="url" value="{{ old('url', $project->url) }}"><br>

<label>Descripcion</label><br>
<textarea name="description">{{ old('description', $project->description) }}</textarea><br>

<button>{{ $btn_txt }}</button>