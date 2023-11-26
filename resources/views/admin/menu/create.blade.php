@extends('admin.master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add New</h4>

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
                        <form action="{{route('menus.store')}}" method="POST" class="needs-validation was-validated" name="" id="">
                            @csrf
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" required name="menuName" type="text" placeholder="Menu Name" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                    <select name="menuType" class="form-select" aria-label="Default select example">
                                        <option selected="" value="0">Root</option>
                                        @foreach($menus as $row)
                                        <option value="{{$row->id}}">{{$row->menuName}}</option>
                                        @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Content</label>
                                <div class="col-sm-10">
                                    <select name="contentId" class="form-select" aria-label="Default select example">
                                        <option selected="" value="0">Root</option>
                                        @foreach($menus as $row)
                                        <option value="{{$row->id}}">{{$row->menuName}}</option>
                                        @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Parent Menu</label>
                                <div class="col-sm-10">
                                    <select name="parentId" class="form-select" aria-label="Default select example">
                                        <option selected="" value="0">Root</option>
                                        @foreach($menus as $row)
                                        <option value="{{$row->id}}">{{$row->menuName}}</option>
                                        @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Page Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" required name="pageTitle" type="text" placeholder="Page Title" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Meta Keyword</label>
                                <div class="col-sm-10">
                                    <input class="form-control" required name="metaKeyword" type="text" placeholder="Meta Keyword" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Meta Description</label>
                                <div class="col-sm-10">
                                    <input class="form-control" required name="metaDescription" type="text" placeholder="Meta Description" id="example-text-input">
                                </div>
                            </div>
                        
                        <div>
                            <button class="btn btn-primary" type="submit">Submit</button>
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