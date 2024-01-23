@extends('layout.master')
@section('content')

<div class="bg-primary-subtle">
    <div class="text-center p-2 mt-3 shadow bg-body-tertiary rounded w-50 mx-auto align-item-center">
        <h1 class="text-success mb-2">This page is Edit page.</h1>
        <a href={{ route('post.index') }} class="btn border border-info"> Back </a>       
    </div>
    <div class="bg-light w-50 shadow p-5 rounded m-2 mx-auto">
        <div class="">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Post</h1>
        </div>
        <div class="">
            <form method="POST" action={{ route('post.update', $data->id) }}>
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">First Name:</label>
                    <input type="text" class="form-control" name="firstname" value="{{ $data->firstname }}"
                        id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Last Name:</label>
                    <input type="text" class="form-control" name="lastname" value="{{ $data->lastname }}"
                        id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address:</label>
                    <input type="email" class="form-control" name="email" value="{{ $data->email }}"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success px-4">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
