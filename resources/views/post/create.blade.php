@extends('layout.master')
@section('content')

<div class="bg-primary-subtle">
    <div class="text-center w-50 p-2 mt-3 shadow bg-body-tertiary rounded mx-auto align-item-center">
        <h2 class="text-success my-2"> This page is CREATE page.</h2>
        <a href={{ route('post.index') }} class="btn border border-info"> Back </a>
    </div>
    <div class="bg-light w-50 shadow p-5 rounded m-2 mx-auto">
        <div class="">
            <h1 class="modal-title fs-5" id="exampleModalLabel">New Post</h1>
        </div>
        <div class="">
            <form method="POST" action={{ route('post.store') }}>
                @csrf

                <input type="hidden" value="{{ csrf_token() }}">

                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">First Name:</label>
                    <input type="text" class="form-control" name="firstname" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Last Name:</label>
                    <input type="text" class="form-control" name="lastname" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address:</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
