@extends('admin.layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">title</th>
                            <th scope="col">created_at</th>
                            <th scope="col">is_public</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td>{{ $post->title }}</td>
                                <td>{{ date("d/m/Y", strtotime($post->created_at)); }}</td>
                                <td>{{ $post->is_public }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="col-12">
                <a href="{{ route('admin.blog.create') }}"><button>Novo</button></a>
            </div>
        </div>
    </div>
@endsection
