@extends('admin.master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Menu Update</h4>

                    {{-- <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div> --}}

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('menus.update', $data->id)}}" method="POST" class="needs-validation was-validated">
                            @csrf @method('PUT')
                            
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Menu Type</label>
                                <div class="col-sm-10">
                                    <select name="menuType" class="form-select" aria-label="Default select example">
                                        <option value="0" @if($data->menuType == 0){{{'selected'}}}@endif>Root</option>
                                        @foreach($menus as $row)
                                        <option value="{{$row->id}}" {{ $row->id == $data->menuType ? 'selected' : ''}}>{{$row->menuName}}</option>
                                        @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Menu Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" value="{{$data->menuName}}" required name="menuName" type="text" placeholder="Menu Name" id="example-text-input">
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                        </form>
                        <!-- end row -->
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>

@endsection