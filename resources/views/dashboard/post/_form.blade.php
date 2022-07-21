@csrf
    <label for="title">Título</label>
    <input type="text" name="title" id="" value="{{ old('title', $post->title) }}">

    <label for="slug">Slug</label>
    <input type="text" name="slug" id="" value="{{ old('slug', $post->slug) }}">

    <label for="">Categoría</label>
    <select name="category_id">
        <option value=""></option>
        @foreach ($categories as $title => $id)
            <option {{ old('category_id', $post->category_id) == $id ? "selected" : "" }} value="{{ $id }}">{{ $title }}</option>
        @endforeach
    </select>

    <label for="">Posteado</label>
    <select name="posted">
        <option value=""></option>
        <option {{ old('posted', $post->posted) == "not" ? "selected" : ""}} value="not">No</option>
        <option {{ old('posted', $post->posted) == "yes" ? "selected" : ""}} value="yes">Si</option>
    </select>

    <label for="contenido">Contenido</label>
    <textarea type="text" name="content" id="">{{ old('content', $post->content) }}</textarea>

    <label for="description">Descripción</label>
    <textarea type="text" name="description" id="">{{ old('description', $post->description) }}</textarea>

    @if(isset($task) && $task == 'edit')
        <input type="file" name="image">
    @endif

    <button type="submit">Enviar</button>