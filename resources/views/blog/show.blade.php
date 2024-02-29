<!-------------------------------
    Author : Sibin V M
    Title : Show Post View
    Created Date : 10-06-2022
--------------------------------->

@extends('layouts.app')
@section('content')
    <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center">
        <div class="toast-container position-absolute p-3" id="toastPlacement">
            <div class="toast">
                <div class="toast-body bg-warning text-light text-center">
                    {{ session('msg') }}
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row mb-4 mt-5">
                <div class="col-8">
                    <h4 class="text-warning">{{ $post['title'] }}</h4>
                    @inject('Helper', 'App\Http\Controllers\BlogController')
                    <small class="text-secondary">Last updated at : {{ $Helper->dateFormator($post['updated_at']) }}</small>
                </div>
                <div class="col-4">
                    <a href="{{ route('home') }}" class="float-end"><button class="btn btn-outline-warning btn-hover"><i class="fa-solid fa-angles-left"></i> Back</button></a>
                </div>
            </div>
            
            <div class="imgShowContainer">
                <img src="{{ $post->image != NULL ? asset('storage/images/'.$post->image) : asset('images/image_placeholder.png') }}" alt="" class="me-5 mb-3 w-100" style="float:left"> 
            </div>
            <p class="lh-lg text-secondary text-indent text-justify">{{ $post['content'] }}</p>

            <div class="d-flex float-end">
                <form action="{{ route('blog.destroy', [$post['id']]) }}" method="POST" class="me-3">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-outline-warning btn-hover"><i class="fa-solid fa-trash"></i> Delete</button>
                </form>
                <form action="{{ route('blog.edit', [$post['id']]) }}" method="GET">
                    <button class="btn btn-warning text-light"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                </form>
            </div> 
        </div>
    </div>

    <script>
        var msg =  '{{ session('msg') }}';
    </script>
@endsection