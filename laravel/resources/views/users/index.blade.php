@extends('users.layout')

@section('content')

{{-- import Details --}}
<div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalLabel">Import Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3" style="padding:20px">
                    <label for="file" class="form-label"><strong>Import</strong></label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-light">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- end import Detail --}}
<div class="d-flex justify-content-center">
    <h2>Customer Details</h2>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Customer Details</h2>
        </div>
        <div class="pull-right">
            <button class="btn btn-light me-2" data-bs-toggle="modal" data-bs-target="#importModal"><i class="bi-plus-circle me-2" style="color:red"></i>Import Customer Data</button>
            <a href="{{ route('export') }}" class="btn btn-light me-2">Export Customer Data</a>
            {{-- <button class="btn btn-danger me-2 resetAll" data-bs-toggle="modal" id="resetAll" data-bs-target="#resetModal">Reset ALL</button> --}}
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>

        <th>Date</th>
        <th>BM_BatchID</th>
        <th>CountyName</th>
        <th>BM_BatchName</th>
        <th>ImageID</th>
        <th>ImageName</th>
        <th>AddendumID</th>
        <th>DocType_Name</th>
        <th>Level_name</th>
        <th>FieldLabel</th>
        <th>IndexFieldValue</th>
        <th>VerifyFieldValue</th>
        <th>IndexUser</th>
        <th>VerifyUser</th>
        <th>ErrorStatus</th>
        <th>VendorName</th>
        <th>Status</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            {{-- <td>{{ $loop->iteration }}</td> --}}
            {{-- <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td> --}}
            <td>{{ $user->Date }}</td>
            <td>{{ $user->BM_BatchID }}</td>
            <td>{{ $user->CountyName }}</td>
            <td>{{ $user->BM_BatchName }}</td>
            <td>{{ $user->ImageID }}</td>
            <td>{{ $user->ImageName }}</td>
            <td>{{ $user->AddendumID }}</td>
            <td>{{ $user->DocType_Name }}</td>
            <td>{{ $user->Level_name }}</td>
            <td>{{ $user->FieldLabel }}</td>
            <td>{{ $user->IndexFieldValue }}</td>
            <td>{{ $user->VerifyFieldValue }}</td>
            <td>{{ $user->IndexUser }}</td>
            <td>{{ $user->VerifyUser }}</td>
            <td>{{ $user->ErrorStatus }}</td>
            <td>{{ $user->VendorName }}</td>
            <td>{{ $user->Status }}</td>
            <td>
                {{-- <form action="{{ route('users.destroy', $user->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('users.show', $user->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> --}}
            </td>
        </tr>
    @endforeach
</table>
{{-- <div class="d-flex justify-content-end">
    <a class="btn btn-success" href="{{ route('users.create') }}">Create New User</a>
</div> --}}


    {{-- {!! $users->links() !!} --}}

@endsection
