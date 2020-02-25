@csrf 

<label>

    Titulo del proyecto <br>
    <input type="text" name="title" value="{{ old('title', $project->title) }}">

</label>

<br>

<label>

    Descripción del proyecto <br>
    <textarea name="description">{{ old('description', $project->description) }}</textarea>

</label>

<br>

<label>

    URL del proyecto <br>
    <input type="text" name="url" value="{{ old('url', $project->url) }}">

</label>

<br>

<button>{{ $btnText }}</button>