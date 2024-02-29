<!-------------------------------
    Author : Sibin V M
    Title : Welcome View
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
                <div class="col-6">
                    <h4 class="text-warning">Explore Posts</h4>
                </div>
                <div class="col-6">
                    <a href="{{ route('blog.create') }}" class="float-end"><button class="btn btn-warning text-light"><i class="fa-solid fa-feather-pointed"></i> Add New</button></a>
                </div>
            </div>
            
            <div class="row row-cols-md-2 row-cols-lg-3 g-5">
                <!--  loop through posts and view individual post as cards --> 
                @foreach ($posts as $post)
                    <div class="col">
                        <a href="{{ route('blog.show', [$post->id]) }}" class="text-decoration-none">
                            <div class="card h-100 border-0 box-shadow card-hover">
                                <img src="{{ $post->image != NULL ? asset('storage/images/'.$post->image) : asset('images/image_placeholder.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-secondary lh-base truncate-text">{{ $post->title }}</h5>
                                    <p class="card-text text-secondary truncate-text lh-base">{{ $post->content }}</p>
                                    <p class="text-warning text-end m-0">Read More</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div> 

    <script>
        var msg = '{{ session('msg') }}';
    </script>
@endsection