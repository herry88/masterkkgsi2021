@extends('master')

@section('title-web')
    <title>Halaman Category Add</title>
@endsection

@section('content-title')
    <div class="d-flex align-items-center">
        <h5 class="font-medium m-b-0">Coupon Add</h5>
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
                            <form action="{{route('coupon.store')}}" class="m-t-40" method="post">
                                @csrf
                                @method('POST')
                                <table class="table table-striped">
                                    <tr>
                                        <td>Title</td>
                                        <td><input type="text" name="title" id="name"></td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td><input type="text" name="description" id="name"></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><button type="submit" class="waves-effect waves-light btn indigo">Save
                                                Data</button></td>
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

