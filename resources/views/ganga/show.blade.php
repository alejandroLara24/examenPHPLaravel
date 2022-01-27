@extends('layouts.plantilla')
@section('content')
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Descripció</th>
            <th scope="col">URL</th>
            <th scope="col">Categoria</th>
            <th scope="col">Punts</th>
            <th scope="col">Preu Original</th>
            <th scope="col">Preu amb Descompte</th>
            <th scope="col">Disponible</th>
            <th scope="col">Funcions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{ $ganga->id }}</th>
            <td>{{ $ganga->title }}</td>
            <td>{{ $ganga->description }}</td>
            <td>{{ $ganga->url }}</td>
            <td>{{ obtenerNombreCategory($ganga->category_id) }}</td>
            <td>{{ $ganga->points }}</td>
            <td>{{ $ganga->price }}</td>
            <td>{{ $ganga->discount_price }}</td>
            <td>{{ obtenerDisponibilidad($ganga->available) }}</td>
            <td>
                <a href="{{ route("ganga.edit", $ganga->id) }}" class="btn-light btn-sm fa-2x"><i class="ti-pencil"></i></a>
                <form action="{{ route("ganga.destroy", $ganga->id) }}" class="d-inline" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn-light btn-sm fa-2x"><i class="ti-trash"></i></button>
                </form>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
