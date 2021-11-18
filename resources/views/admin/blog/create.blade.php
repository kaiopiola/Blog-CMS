@extends('admin.layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="description">seo description</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="form-group">
                        <label for="image">image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label for="content">content</label>
                        <div class="bg-light text-dark">
                            <textarea name="content" id="editor" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit">Criar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {

            })
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
