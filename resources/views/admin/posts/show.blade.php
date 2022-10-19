@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>{{$post->title}}</h1>
                <p>{{$post->slug}}</p>
                <ul class="d-flex">
                    <li class="p-3">{{$post->created_at}}</li>
                    <li class="p-3">{{$post->updated_at}}</li>
                </ul>
            </div>
            <div class="col-4 text-left d-flex justify-content-end align-items-center">
                <a href="{{route('admin.posts.edit', $post)}}"><button type="button" class="btn btn-primary btn-sm">modifica</button></a>
                <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>{{$post->content}}</p>
            </div>
        </div>
    </div>
@endsection