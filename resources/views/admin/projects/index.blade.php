@extends('layouts.admin')

@section('content')
    <h2 class="text text-white">Elenco Progetti</h2>

    <table class="table table-success crud-table">
        <thead>
          <tr>
            <th scope="col">n°</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $item)
            <tr>
              <th scope="row">{{ $item->id }}</th>
              <td>{{ $item->title }}</td>
              <td>{{ $item->text }}</td>
              <td>
                <div class="d-flex">
                    <a href="{{ route('admin.projects.edit', $item->id) }}" class="btn btn-warning me-2"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="{{ route('admin.projects.edit', $item->id) }}" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                </div>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
