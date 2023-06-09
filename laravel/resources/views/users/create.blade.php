@extends('users.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mt-4">
                <strong>email:</strong>
                <input class="form-control" name="email" placeholder="Email">
            </div>
        </div>

    </div>

    <div class="form-group">
        <label for="email">BM_BatchID</label>
        <input type="text" name="email" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="email">CountyName</label>
        <input type="text" name="CountyName" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="email">BM_BatchName</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="email">ImageID</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="email">ImageName</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="email">AddendumIDa</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="email">DocType_Name</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="email">Level_name</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="email">FieldLabel</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="email">IndexFieldValue</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="email">VerifyFieldValue</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="email">IndexUser</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="email">VerifyUser</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="email">IndexUser</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="email">Error/No Error</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="email">Vendor Name</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="form-group">
        <label for="email">Vendor Name</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-end mt-2">
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
@endsection
