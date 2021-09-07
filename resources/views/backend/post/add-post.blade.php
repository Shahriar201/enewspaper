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
                                @if (isset($editData))
                                    Edit Post
                                @else
                                    Add Post
                                @endif

                                <a class="btn btn-success float-right btn-sm" href="{{ route('posts.view') }}">
                                    <i class="fa fa-list"></i>Post List</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                {{-- User add form --}}
                                <form method="post"
                                    action="{{ @$editData ? route('posts.update', $editData->id) : route('posts.store') }}"
                                    id="myForm" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-row">

                                       <div class="form-group col-md-6">
                                            <label for="">Category</label>
                                            <select name="category_id" id="category_id" class="form-control">
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" {{ (@$editData->category_id==$category->id)? "selected": "" }}>{{ $category->name_en }}</option>
                                                    {{-- <option value="{{ $category->id }}" {{ (@$editData->category_id==$category->id)? "selected": "" }}>{{ $category->name_bn }}</option> --}}
                                                @endforeach
                                            </select>
                                        </div>
                                       
                                        <div class="form-group col-md-6">
                                            <label for="">District</label>
                                            <select name="district_id" id="district_id" class="form-control">
                                                <option value="">Select Category</option>
                                                @foreach ($districts as $district)
                                                    <option value="{{ $district->id }}" {{ (@$editData->district_id==$district->id)? "selected": "" }}>{{ $district->name_en }}</option>
                                                    {{-- <option value="{{ $district->id }}" {{ (@$editData->district_id==$district->id)? "selected": "" }}>{{ $district->name_bn }}</option> --}}
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="title">Title</label>
                                            {{-- <input type="text" name="name_bn" value="{{ @$editData->name_bn }}"
                                                class="form-control form-control-sm"> --}}
                                                <textarea name="title" id="title" class="form-control">{{ @$editData->title }}</textarea>
                                            <font style="color:red">
                                                {{ $errors->has('title') ? $errors->first('title') : '' }}
                                            </font>
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                            <label for="name">Bangla Post</label>
                                            {{-- <input type="text" name="name_bn" value="{{ @$editData->name_bn }}"
                                                class="form-control form-control-sm"> --}}
                                                <textarea name="name_bn" id="name_bn" class="form-control" rows="10">{{ @$editData->name_bn }}</textarea>
                                            <font style="color:red">
                                                {{ $errors->has('name_bn') ? $errors->first('name_bn') : '' }}
                                            </font>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="name">English Post</label>
                                            <textarea name="name_en" id="name_en" class="form-control" rows="10">{{ @$editData->name_en }}</textarea>
                                            <font style="color:red">
                                                {{ $errors->has('name_en') ? $errors->first('name_en') : '' }}
                                            </font>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="action">Status</label>
                                            <select name="status" id="status" class="form-control form-control-sm">
                                                <option value="">Select Status</option>
                                                <option value="0" {{ @$editData->status == '0' ? 'selected' : '' }}>
                                                    Active</option>
                                                <option value="1" {{ @$editData->status == '1' ? 'selected' : '' }}>
                                                    Deactive</option>
                                            </select>
                                            <font style="color:red">
                                                {{ $errors->has('status') ? $errors->first('status') : '' }}
                                            </font>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="">Image</label>
                                            <input type="file" name="image" id="image" class="form-control">
                                        </div>
        
                                        <div class="form-group col-md-4">
                                            <img id="showImage" src="{{ (!empty($editData->image))?url('public/upload/post_images/'.$editData->image):url('public/upload/no_image.jpg') }}"
                                             style="width: 100px; height: 105px; border: 1px solid #000;">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <input type="submit" value="{{ @$editData ? 'Update' : 'Submit' }}"
                                                class="btn btn-primary btn-sm">
                                        </div>
                                    </div>


                                </form>


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

    <!-- Page specific script -->
    <script>
        $(function() {

            $('#myForm').validate({
                rules: {
                    category_id: {
                        required: true,
                    },
                    district_id: {
                        required: true,
                    },
                    title: {
                        required: true,
                    },
                    name_bn: {
                        required: true,
                    },
                    name_en: {
                        required: true,
                    },
                    status: {
                        required: true,
                    },
                    image: {
                        required: true,
                    },

                },
                messages: {

                    //terms: "Please accept our terms"
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>

@endsection
