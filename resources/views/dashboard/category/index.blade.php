@extends('dashboard.layout')

@section('content')
    <a href="{{ route('category.create') }}">Crear</a>

    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Slug</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c)
                <tr>
                    <td>{{ $c->title }}</td>
                    <td>
                        {{ $c->slug }}
                    </td>
                    <td>
                        <a href="{{ route('category.edit', $c->id) }}">Editar</a>
                        <a href="{{ route('category.show', $c->id) }}">Ver</a>
                        <form action="{{ route('category.destroy', $c->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}
@endsection
