@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="" action="{{route('admin.pages.store')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input class="form-control" type="text" name="title">
                    </div>
                    <div class="form-group">
                        <label for="summary">Sommario</label>
                        <input class="form-control" type="text" name="summary">
                    </div>
                    <div class="form-group">
                        <label for="body">Testo</label>
                        <textarea class="form-control" name="body" rows="8" cols="80"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select class="" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <h3>Tags</h3>
                        @foreach ($tags as $tag)
                            <label for="tag-{{$tags->id}}">{{$tag->name}}</label>
                            <input type="checkbox" name="tags[]" id="tags-{{$tags->id}}" value="{{$tags->id}}">
                        @endforeach
                    </div>
                    <input class="btn btn-primary" type="submit" value="Salva">
                </form>
            </div>
        </div>
    </div>
@endsection
