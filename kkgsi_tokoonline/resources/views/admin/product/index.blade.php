@extends('master')
@section('title-web')
    <title>Halaman Product</title>
@endsection

@section('content-title')
<div class="d-flex align-items-center">
    <h5 class="font-medium m-b-0">Product</h5>
    <div class="custom-breadcrumb ml-auto">
        <a href="#!" class="breadcrumb">Home</a>
        <a href="#!" class="breadcrumb">Dashboard</a>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Data Product</h5>
                    <p class="caption"><a href="{{ route('product.create') }}"
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
                                    @forelse ($product as $pd)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$pd->title}}</td>
                                            <td>{{$pd->description}}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">Tidak Ada Data</td>
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