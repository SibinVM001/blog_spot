<!-------------------------------
    Author : Sibin V M
    Title : Edit Post View
    Created Date : 12-06-2022
--------------------------------->

@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-10 col-md-8">
            <div class="row mb-4 mt-5">
                <div class="col-8">
                    <h4 class="text-warning">Edit Post</h4>
                </div>
                <div class="col-4">
                    <a href="{{ route('blog.show', [$post->id]) }}" class="float-end"><button class="btn btn-outline-warning btn-hover"><i class="fa-solid fa-angles-left"></i> Back</button></a>
                </div>
            </div>

            <form action="{{ route('blog.update', [$post->id]) }}" method="POST" id="form" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="my-3">
                    <label for="title" class="form-label text-secondary">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label text-secondary">Cover Image</label>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ $post->image != NULL ? asset('storage/images/'.$post->image) : asset('images/image_placeholder.png') }}" id="showImg" alt="" width="100%">
                            <script>
                                const imgUrl = '{{ asset('images/image_placeholder.png') }}'
                            </script>
                        </div>
                        <div class="col-md-6 d-flex align-items-end mt-3">
                            <input type="file" class="form-control align-bottom" id="image" name="image">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label text-secondary">Content</label>
                    <textarea class="form-control" id="content" rows="10" name="content">{{ $post->content }}</textarea>
                </div>
                <span id="errorMsg" class="text-danger"></span>
                <div class="float-end mt-2">
                    <button class="btn btn-outline-warning me-2 btn-hover" id="resetBtn" type="button"><i class="fa-solid fa-delete-left"></i> Reset</button>
                    <button class="btn btn-warning text-light" id="submitBtn" type="button"><i class="fa-solid fa-upload"></i> Update</button>
                </div>
                
            </form>
        </div>
    </div>
@endsection