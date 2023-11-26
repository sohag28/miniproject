@extends('admin.master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Menu Management</h4>

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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <div class="table-responsive">
                            <table class="table mb-0">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Menu Type</th>
                                        <th>Menu Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($menus as $row)
                                    <tr>
                                        <th scope="row">{{$row->id}}</th>
                                        <td>@if($row->menuType == 0){{{'Root'}}}@else{{{$row->menuType}}}@endif</td>
                                        <td>{{$row->menuName}}</td>
                                        <td>
                                            <a class="btn btn-primary waves-effect waves-light" href="{{route('menus.edit', $row->id)}}">Edit</a>
                                            <form action="{{url('menus/destroy')}}" method="post"> 
                                                @csrf @method('put')
                                                <button type="submit" >Delete</button>
                                            
                                            </form>
                                        </td>
                                    </tr>
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