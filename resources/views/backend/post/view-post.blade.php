@extends('backend.layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Post</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Post</li>
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
                            <h3>Posts List
                                <a class="btn btn-success float-right btn-sm" href="{{ route('posts.add') }}">
                                    <i class="fa fa-plus-circle"></i>Add Post</a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="2%">SL.</th>
                                        <th width="2%">Category Name</th>
                                        <th width="2%">District Name</th>
                                        <th width="2%">Menu</th>
                                        <th width="2%">Title</th>
                                        <th width="40%">Bangla Post</th>
                                        <th width="40%">English Post</th>
                                        <th width="10%">Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($allData as $key => $post)

                                    <tr class="{{ $post->id }}">
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $post['category']['name_en'] }}</td>
                                        <td>{{ $post['district']['name_en'] }}</td>
                                        <td>{{ $post['menu']['name_en'] }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->name_bn }}</td>
                                        <td>{{ $post->name_en }}</td>
                                        <td>
                                            <button id="{{ $post->id }}" class="btn btn-basic"
                                                style="background-color:#faebd700;color:#3e5569"
                                                onclick="postStatusControll({{ $post->id }})">{{ $post->status == 0 ? 'Active' : 'Deactive' }}</button>

                                        </td>
                                        <td>
                                            <img src="{{ !empty($post->image) ? url('public/upload/post_images/' . $post->image) : url('public/upload/no_image.jpg') }}"
                                                style="width: 50px; height: 55px;">
                                        </td>
                                        <td>
                                            <a title="Edit" id="edit" class="btn btn-sm btn-primary" href="{{ route('posts.edit', $post->id)}}">
                                                <i class="fa fa-edit">

                                                </i>
                                            </a>
                                            <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{ route('posts.delete') }}" data-token="{{ csrf_token() }}" data-id="{{ $post->id }}">
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
    function postStatusControll($id) {

        var x;
        var id = $id;

        var _token = $('input[name="_token"]').val();
    
        $.ajax({
            url: "{{ route('posts.status.controll') }}",
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