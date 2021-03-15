@extends('layouts.backend.index')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="iq-edit-list-data">

                <div class="tab-content">

                    <div id="content-page" class="content-page">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12 col-lg-6">
                                    <div class="iq-card">
                                        <div class="iq-card-header d-flex justify-content-between">
                                            <div class="iq-header-title">
                                                <h4 class="card-title">Add Product </h4>
                                            </div>
                                        </div>
                                        <div class="iq-card-body">
                                            <form action="{{ url('createProduct') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="fname">Name:</label>
                                                    <input type="text" name="name" class="form-control" id="fname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pname">Price:</label>
                                                    <input type="integer" name="price" class="form-control" id="pname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Description:</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="description"
                                                        rows="5"></textarea>
                                                </div>
                                                
                                                <div class="checkbox mb-3">
                                                    <label><input type="checkbox"> Remember me</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn iq-bg-danger">Cancel</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
