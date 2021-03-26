@extends('layouts.backend.index')

@section('content')

    <div class="box-body" style="height: 100vh">
        <iframe src="{{url('http://localhost/cake_shop/file')}}/dialog.php" style="width: 79%; height: 500px; float: right; margin-top: 100px">
        </iframe>
    </div>
@endsection

