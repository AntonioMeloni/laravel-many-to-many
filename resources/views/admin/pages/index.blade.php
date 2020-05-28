@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                       <a class="nav-link active" href="{{route('home')}}">Torna alla dashboard</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="{{route('admin.pages.create')}}">Aggiungi Pagina</a>
                    </li>
                </ul>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titolo</th>
                            <th>Data Creazione</th>
                            <th>Data Update</th>
                            <th colspan="3">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $page)
                            <tr>
                                <td>{{$page->id}}</td>
                                <td>{{$page->title}}</td>
                                <td>{{$page->created_at}}</td>
                                <td>{{$page->updated_at}}</td>
                                <td> <a class="btn btn-primary" href="{{route('admin.pages.show', $page->id)}}">Visualizza</a></td>
                                <td> <a class="btn btn-secondary" href="{{route('admin.pages.edit', $page->id)}}">Modifica</a></td>
                                <td> <form class="" action="{{route('admin.pages.destroy', $page->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Elimina">
                                </form> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
