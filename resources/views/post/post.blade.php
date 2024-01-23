@extends('layout.master')
@section('content')
    <div class="bg-primary-subtle">
        <div class="text-center w-75 mx-auto align-item-center">
            <h1 class="mb-2">This page is Post Index page.</h1>
            {{-- <a href={{ route('post.create') }} class="btn border border-info"> Create </a> --}}
        </div>
        <div class="text-center">
            {{-- <table class="table shadow mx-auto border w-75 table-success table-striped-columns my-3">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($postdatas as $num => $postdata)
                        <tr>
                            <th scope="row">{{ ++$num }}</th>
                            <td>{{ $postdata->firstname }}</td>
                            <td>{{ $postdata->lastname }}</td>
                            <td><a href="#" class="link-offset-1">{{ $postdata->email }} </a></td>
                            <td class="d-flex">
                                <a href={{ route('post.edit', $postdata->id) }} class="btn btn-primary mx-2">Edit</a>
                                <form method="POST" action="{{ route('post.destroy', $postdata->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table> --}}
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35">data table</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                                <select class="js-select2" name="property">
                                    <option selected="selected">All Properties</option>
                                    <option value>Option 1</option>
                                    <option value>Option 2</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--light rs-select2--sm">
                                <select class="js-select2" name="time">
                                    <option selected="selected">Today</option>
                                    <option value>3 Days</option>
                                    <option value>1 Week</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <button class="au-btn-filter">
                                <i class="zmdi zmdi-filter-list"></i>filters</button>
                        </div>
                        <div class="table-data__tool-right">
                            <a href={{ route('post.create') }} class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>add item</a>
                            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                <select class="js-select2" name="type">
                                    <option selected="selected">Export</option>
                                    <option value>Option 1</option>
                                    <option value>Option 2</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </th>
                                    <th>id</th>
                                    <th>first</th>
                                    <th>last</th>
                                    <th>email</th>
                                    <th>action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($postdatas as $num => $postdata)
                                    <tr>
                                        <td>
                                            <label class="au-checkbox">
                                                <input type="checkbox">
                                                <span class="au-checkmark"></span>
                                            </label>
                                        </td>
                                        <td>{{ ++$num }}</td>
                                        <td>{{ $postdata->firstname }}</td>
                                        <td>{{ $postdata->lastname }}</td>
                                        <td><a href="#" class="link-offset-1">{{ $postdata->email }} </a></td>
                                        {{-- <td class="d-flex">
                                            <a href={{ route('post.edit', $postdata->id) }}
                                                class="btn btn-primary mx-2">Edit</a>
                                            <form method="POST" action="{{ route('post.destroy', $postdata->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    Delete
                                                </button>
                                            </form>
                                        </td> --}}
                                        <td>
                                            <div class="table-data-feature">
                                                {{-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                <i class="zmdi zmdi-mail-send"></i>
                                                </button> --}}
                                                <a href={{ route('post.edit', $postdata->id) }} class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <form method="POST" action="{{ route('post.destroy', $postdata->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="item btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal">
                                                        
                                                        <i class="zmdi zmdi-delete"></i></button>
                                                </form> 
                                                {{-- <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                <i class="zmdi zmdi-more"></i>
                                                </button> --}}
                                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    @endsection
