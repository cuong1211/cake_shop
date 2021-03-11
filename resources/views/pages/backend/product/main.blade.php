@extends('layouts.backend.index')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Editable Table</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div id="table" class="table-editable">
                                <span class="table-add float-right mb-3 mr-2">
                                    <button class="btn btn-sm iq-bg-success"><i class="ri-add-fill"><span class="pl-1">Add
                                                New</span></i>
                                    </button>
                                </span>
                                <table class="table table-bordered table-responsive-md table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $count = 1;
                                        @endphp
                                        @foreach ($products as $item)
                                            <tr>
                                                <td>{{ $count }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->description }}</td>

                                            </tr>
                                            @php
                                                $count++;
                                            @endphp
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
