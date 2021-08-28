@extends('master')
@section('title-web')
    <title>Halaman Transaction</title>
@endsection

@section('content-title')
<div class="d-flex align-items-center">
    <h5 class="font-medium m-b-0">Transaction</h5>
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
                    <h5 class="card-title">Data Transaction</h5>
                    <p class="caption"><a class="waves-effect waves-light btn btn-round indigo">Add Data</a></p>
                    <div class="row">
                        <div class="col s12">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>tes</td>
                                        <th>test</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
