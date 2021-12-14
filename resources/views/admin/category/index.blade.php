@extends('admin.layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- <a href="{{ route('admin.category.create') }}"><button class="btn btn-primary">Novo</button></a> --}}
            </div>

            <div class="col-12">

                <table class="table table-secondary table-striped">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">cat_name</th>
                            <th scope="col">parent</th>
                            <th scope="col">created_at</th>
                            <th scope="col">is_active</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->cat_name }}</td>
                                <td>{{ $category->parent }}</td>
                                <td>{{ date("d/m/Y", strtotime($category->created_at)); }}</td>
                                <td>{{ $category->is_active }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            
        </div>
    </div>
@endsection
