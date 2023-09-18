@extends('layout.app')
@section('content')
<button type="button" class="btn btn-success mt-5">Create Post</button>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted by</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->posted_by }}</td>
                        <td>{{ $post->created_at->format('Y-M-D') }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('posts.show', $post->id) }}"
                                role="button">View</a>
                            <a class="btn btn-info" href="#" role="button">Edit</a>
                            <a class="btn btn-danger" href="#" role="button">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
@endsection