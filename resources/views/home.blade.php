@extends('layouts.app')

@section('content')

    {{-- {{session()->getid()}} --}}
    @include('layouts.banner')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 m-0 p-0">
                <a href="#">
                    <div style="background-size:cover; background-position:center; background-repeat:no-repeat; background-image: url(https://www.mundojs.com.br/wp-content/uploads/2020/09/Bootstrap5_news.png)"
                        class="bg-light home-post">
                        <div class="container-fluid text-left home-post-bg">
                            <label class="text-light">Notícias</label>
                            <h3 class="fw-bold text-light">Titulo da postagem</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 m-0 p-0">
                <a href="#">
                    <div style="background-size:cover; background-position:center; background-repeat:no-repeat; background-image: url(https://img.olhardigital.com.br/wp-content/uploads/2021/02/iStock-1169700094-1256x450.jpg)"
                        class="bg-light home-post">
                        <div class="container-fluid text-left home-post-bg">
                            <label class="text-light">Dicas</label>
                            <h3 class="fw-bold text-light">Titulo da postagem</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <div class="text-dark bg-light">
    <textarea name="" id="editor" cols="30" rows="30"></textarea>
    </div>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script> --}}

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {

            })
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
