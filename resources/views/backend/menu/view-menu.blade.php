@extends('backend.layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Menu</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Menu</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-md-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3>Menu List
                                <a class="btn btn-success float-right btn-sm" href="{{ route('menues.add') }}">
                                    <i class="fa fa-plus-circle"></i>Add Menu</a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Bangla Name</th>
                                        <th>English Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($allData as $key => $menu)

                                    <tr class="{{ $menu->id }}">
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $menu->name_bn }}</td>
                                        <td>{{ $menu->name_en }}</td>
                                        <td>
                                            <button id="{{ $menu->id }}" class="btn btn-basic"
                                                style="background-color:#faebd700;color:#3e5569"
                                                onclick="menuStatusControll({{ $menu->id }})">{{ $menu->status == 0 ? 'Active' : 'Deactive' }}</button>

                                        </td>
                                        <td>
                                            <a title="Edit" id="edit" class="btn btn-sm btn-primary" href="{{ route('menues.edit', $menu->id)}}">
                                                <i class="fa fa-edit">

                                                </i>
                                            </a>
                                            <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{ route('menues.delete') }}" data-token="{{ csrf_token() }}" data-id="{{ $menu->id }}">
                                                <i class="fa fa-trash">

                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                        
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            
                        </div>
                        <!-- /.card-body -->
                    </div>

                </section>

                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

{{-- Button Active Deactive by ajax --}}
<script>
    function menuStatusControll($id) {

        var x;
        var id = $id;

        var _token = $('input[name="_token"]').val();
    
        $.ajax({
            url: "{{ route('menues.status.controll') }}",
            method: "POST",
            data: {
                id: id,
                _token: _token
            },

            success: function(result) {

                myObj = JSON.parse(result);

                if (myObj.status == 0) {
                    // alert('active');
                    document.getElementById(myObj.id).innerHTML = "Active";
                } else {
                    // alert('deactive');
                    document.getElementById(myObj.id).innerHTML = "Deactive";
                }

            }

        })
    }
</script>

@endsection