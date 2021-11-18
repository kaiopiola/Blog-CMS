@extends('layouts.app')

@section('content')

    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-md-6">
                <form action="">
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Descrição</label>
                        <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="content">Conteúdo da publicação</label>
                        <div class="text-dark bg-light">
                            <textarea name="content" id="editor" cols="30" rows="30"></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {})
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
