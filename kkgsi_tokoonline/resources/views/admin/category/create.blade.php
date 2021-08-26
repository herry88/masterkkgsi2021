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
                            <form action="#" class="m-t-40" method="post">
                                <table class="table">
                                    <tr>
                                        <td>No</td>
                                        <td><input type="text" name="#" id="name"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
