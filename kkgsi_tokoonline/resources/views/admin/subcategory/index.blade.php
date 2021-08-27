@extends('master')

@section('title-web')
    <title>Halaman Sub Category</title>
@endsection

@section('content-title')
    <div class="d-flex align-items-center">
        <h5 class="font-medium m-b-0">Sub Category</h5>
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
                    <h5 class="card-title">Data Sub Category</h5>
                    <p class="caption"><a class="waves-effect waves-light btn btn-round indigo">Add Data</a></p>
                    <div class="row">
                        <div class="col s12">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($sub_category as $sc)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $sc->title }}</td>
                                            <td>{{ $sc->description }}</td>
                                            <td>{{ $sc->category_id }}</td>
                                            <td><a href="#"><i class="small material-icons">edit</i></a>
                                                <a href="#"><i class="small material-icons">delete</i></a>
                                            </td>
                                        </tr>


                                    @empty
                                        <tr>
                                            <td colspan="5" class="center-align">Tidak Ada Data</td>
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
