@extends('master')

@section('title-web')
    <title>Halaman Category Add</title>
@endsection

@section('content-title')
    <div class="d-flex align-items-center">
        <h5 class="font-medium m-b-0">Category Add</h5>
        <div class="custom-breadcrumb ml-auto">
            <a href="#!" class="breadcrumb">Home</a>
            <a href="#!" class="breadcrumb">Dashboard</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <form action="{{ route('categories.store') }}" class="m-t-40 h-form" method="post">
                                @csrf
                                @method('POST')
                                <div class="form-body">
                                    <div class="divider"></div>
                                    <div class="card-content">
                                        <h6 class="font-medium">Add Category</h6>
                                        <div class="row">
                                            <div class="col s3">
                                                <div class="h-form-label">
                                                    <label for="f-nameh">Title Category</label>
                                                </div>
                                            </div>
                                            <div class="input-field col s9">
                                                <input type="text" name="title" placeholder="Title Category">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <div class="h-form-label">
                                                    <label for="l-description">Description</label>
                                                </div>
                                            </div>
                                            <div class="input-field col s9">
                                                <input type="text" name="description" id="" placeholder="description">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="h-form-label">
                                                <label for=""></label>
                                            </div>
                                            <div class="input-field col s9">
                                                <button type="submit" class="waves-effect waves-light btn blue">Save Data</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
