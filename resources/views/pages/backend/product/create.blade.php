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
                                <div class="col-sm-12 col-lg-12">
                                    <div class="iq-card">
                                        <div class="iq-card-header d-flex justify-content-between">
                                            <div class="iq-header-title">
                                                <h4 class="card-title">Add Product </h4>
                                            </div>
                                        </div>
                                        <div class="iq-card-body">
                                            <form action="{{ url('createProduct') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="fname">Name:</label>
                                                            <input type="text" name="name" class="form-control" id="fname">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pname">Price:</label>
                                                            <input type="integer" name="price" class="form-control"
                                                                id="pname">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Description:</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                                name="description" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="img">Image:</label>
                                                            <div class="custom-file">
                                                                <input type="text" name="image" id="image">
                                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-file">Chosse file</button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="img-single">Image-single:</label>
                                                            <div class="custom-file">
                                                                <input type="text" name="image-single" id="img-single"
                                                                    multiple>
                                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-file">Chosse file</button>

                                                            </div>
                                                        </div>
                                                    </div>
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

            @section('js')
                <div class="modal fade" id="modal-file" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Chosse file</h4>
                            </div>
                            <div class="modal-body" style="width:100%;height: 500px">
                                <iframe src="{{url('http://localhost/cake_shop/file')}}/dialog.php" style="width: 100%; height: 100%;">
                                </iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
