@extends('layouts.backend.index')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="iq-card">
           <div class="iq-card-body p-0">
              <div class="iq-edit-list">
                 <ul class="iq-edit-profile d-flex nav nav-pills">
                    <li class="col-md-6 p-0">
                       <a class="nav-link active" data-toggle="pill" href="#personal-information">
                       Personal Information
                       </a>
                    </li>
                    <li class="col-md-6 p-0">
                       <a class="nav-link" data-toggle="pill" href="#add-category">
                       Add Category
                       </a>
                    </li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
    <div class="col-lg-12">
        <div class="iq-edit-list-data">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="tab-content">
                <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Edit Product</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form action="{{ url('editProduct').'/'.$products->id }}" method="POST">
                                @csrf
                                <div class=" row align-items-center">
                                    <div class="form-group col-sm-6">
                                        <label for="fname">Name:</label>
                                    <input type="text" name="name" class="form-control" id="fname" value="{{$products->name}}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="lname">Description:</label>
                                        <input type="text" name="description" class="form-control" id="lname" value="{{$products->description}}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="pname">price:</label>
                                        <input type="integer" name="price" class="form-control" id="pname" value="{{$products->price}}">
                                    </div>
                                    {{-- <div class="form-group col-sm-6">
                                        <label for="uname">Category id:</label>
                                        <select class="form-control" name="category_id" id="category_id">
                                            @foreach ($categories as $item)
                                                @if ($item->id == $products->category_id)
                                                <option value="{{ $item->id }}" selected>{{ $item->name }}</option> 
                                                @else
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>   
                                                @endif
                                            @endforeach
                                        </select>
                                    </div> --}}
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="reset" class="btn iq-bg-danger">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="tab-pane fade" id="add-category" role="tabpanel">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Add Category</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form action="{{ url('addcategories').'/'.$products->id }}" method="POST">
                                @csrf
                                <table class="table table-bordered table-responsive-md table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $count = 1;
                                        @endphp
                                        @foreach ($categories as $item)
                                            <tr>
                                                <td>{{ $count }}</td>
                                                <td><img src="{{ asset('assets/images/category') . '/' . $item->image }}"
                                                        class="category-image" alt="category image"></td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td>
                                                    <input type="checkbox" class="form-control" name="categories[]" id="categories" value="{{$item->id}}"
                                                    @if (in_array($item->id, $cateproduct))
                                                        checked
                                                    @endif
                                                    >
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="reset" class="btn iq-bg-danger">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection