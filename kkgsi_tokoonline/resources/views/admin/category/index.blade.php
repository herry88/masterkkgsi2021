@extends('master')

@section('title-web')
    <title>Halaman Category</title>
@endsection

@section('content-title')
    <div class="d-flex align-items-center">
        <h5 class="font-medium m-b-0">Category</h5>
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
                    <h5 class="card-title">Data Category</h5>
                    <p class="caption"><a href="{{ route('categories.create') }}"
                            class="waves-effect waves-light btn btn-round indigo">Add Data</a></p>
                    <div class="row">
                        <div class="col s12">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($category as $ct)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $ct->title }}</td>
                                            <td>{{ $ct->description }}</td>
                                            <td>
                                                <a href="#" title="edit"><i class="small material-icons"
                                                        style="color:green">edit</i></a>
                                                <a href="#" title="delete"><i class="small material-icons"
                                                        style="color:red">delete</i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="center-align">Tidak Ada Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
