@extends('backend.layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Category</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
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
                            <h3>Category List
                                <a class="btn btn-success float-right btn-sm" href="{{ route('categories.add') }}">
                                    <i class="fa fa-plus-circle"></i>Add Category</a>
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
                                    @foreach ($allData as $key => $category)

                                    <tr class="{{ $category->id }}">
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $category->name_bn }}</td>
                                        <td>{{ $category->name_en }}</td>
                                        <td>
                                            <button id="{{ $category->id }}" class="btn btn-basic"
                                                style="background-color:#faebd700;color:#3e5569"
                                                onclick="testStatusControll({{ $category->id }})">{{ $category->status == 0 ? 'Active' : 'Deactive' }}</button>

                                        </td>
                                        <td>
                                            <a title="Edit" id="edit" class="btn btn-sm btn-primary" href="{{ route('categories.edit', $category->id)}}">
                                                <i class="fa fa-edit">

                                                </i>
                                            </a>
                                            <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{ route('categories.delete') }}" data-token="{{ csrf_token() }}" data-id="{{ $category->id }}">
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
    function testStatusControll($id) {

        var x;
        var category_id = $id;

        var _token = $('input[name="_token"]').val();
    
        $.ajax({
            url: "{{ route('categories.status.controll') }}",
            method: "POST",
            data: {
                category_id: category_id,
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