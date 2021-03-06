@extends('layouts.admin')


@section('content')


    <h1>Posts</h1>

    <table class="table">
        <thead>
          <tr>
              <th>ID</th>
              <th>Photo</th>
              <th>Owner</th>
              <th>Category</th>
              <th>Title</th>
              <th>Body</th>
              <th>Created at</th>
              <th>Updated at</th>
          </tr>
        </thead>
        <tbody>
        @if($posts)

            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="100" width="100" src="{{$post->photo ? $post->photo->file : 'http://via.placeholder.com/150x150'}}" alt=""></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <th>{{$post->created_at->diffForHumans()}}</th>
                    <th>{{$post->updated_at->diffForHumans()}}</th>
                </tr>
            @endforeach

        @endif

        </tbody>
    </table>




@stop