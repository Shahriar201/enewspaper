@extends('backend.layouts.master')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Contact</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
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
                                    Edit Contact
                                @else
                                    Add Contact
                                @endif

                                <a class="btn btn-success float-right btn-sm" href="{{ route('contacts.view') }}">
                                    <i class="fa fa-list"></i>Contact List</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                {{-- User add form --}}
                                <form method="post"
                                    action="{{ @$editData ? route('contacts.update', $editData->id) : route('contacts.store') }}"
                                    id="myForm" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                            <label for="name">Contact Location Bangla</label>
                                            <input type="text" name="contact_title_location_bn" value="{{ @$editData->contact_title_location_bn }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('contact_title_location_bn') ? $errors->first('contact_title_location_bn') : '' }}
                                            </font>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Contact Location English</label>
                                            <input type="text" name="contact_title_location_en" value="{{ @$editData->contact_title_location_en }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('contact_title_location_en') ? $errors->first('contact_title_location_en') : '' }}
                                            </font>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="name">Contact Phone Bangla</label>
                                            <input type="text" name="contact_phone_bn" value="{{ @$editData->contact_phone_bn }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('contact_phone_bn') ? $errors->first('contact_phone_bn') : '' }}
                                            </font>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Contact Phone English</label>
                                            <input type="text" name="contact_phone_en" value="{{ @$editData->contact_phone_en }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('contact_phone_en') ? $errors->first('contact_phone_en') : '' }}
                                            </font>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Contact Circulation Phone Bangla</label>
                                            <input type="text" name="contact_circulation_phone_bn" value="{{ @$editData->contact_circulation_phone_bn }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('contact_circulation_phone_bn') ? $errors->first('contact_circulation_phone_bn') : '' }}
                                            </font>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Contact Circulation Phone English</label>
                                            <input type="text" name="contact_circulation_phone_en" value="{{ @$editData->contact_circulation_phone_en }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('contact_circulation_phone_en') ? $errors->first('contact_circulation_phone_en') : '' }}
                                            </font>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Contact Advirtising Phone Bangla</label>
                                            <input type="text" name="contact_advertising_phone_bn" value="{{ @$editData->contact_advertising_phone_bn }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('contact_advertising_phone_bn') ? $errors->first('contact_advertising_phone_bn') : '' }}
                                            </font>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="name">Contact Circulation Phone English</label>
                                            <input type="text" name="contact_advertising_phone_en" value="{{ @$editData->contact_advertising_phone_en }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('contact_advertising_phone_en') ? $errors->first('contact_advertising_phone_en') : '' }}
                                            </font>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Contact email</label>
                                            <input type="text" name="contact_email" value="{{ @$editData->contact_email }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('contact_email') ? $errors->first('contact_email') : '' }}
                                            </font>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Editor Name Bangla</label>
                                            <input type="text" name="editor_name_bn" value="{{ @$editData->editor_name_bn }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('editor_name_bn') ? $errors->first('editor_name_bn') : '' }}
                                            </font>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="name">Editor Name English</label>
                                            <input type="text" name="editor_name_en" value="{{ @$editData->editor_name_en }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('editor_name_en') ? $errors->first('editor_name_en') : '' }}
                                            </font>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Executive Editor Name Bangla</label>
                                            <input type="text" name="executive_editor_name_bn" value="{{ @$editData->executive_editor_name_bn }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('executive_editor_name_bn') ? $errors->first('executive_editor_name_bn') : '' }}
                                            </font>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Executive Editor Name English</label>
                                            <input type="text" name="executive_editor_name_en" value="{{ @$editData->executive_editor_name_en }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('executive_editor_name_en') ? $errors->first('executive_editor_name_en') : '' }}
                                            </font>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Message Editor Name Bangla</label>
                                            <input type="text" name="message_editor_name_bn" value="{{ @$editData->message_editor_name_bn }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('message_editor_name_bn') ? $errors->first('message_editor_name_bn') : '' }}
                                            </font>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Message Editor Name English</label>
                                            <input type="text" name="message_editor_name_en" value="{{ @$editData->message_editor_name_en }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('message_editor_name_en') ? $errors->first('message_editor_name_en') : '' }}
                                            </font>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Editor Office Bangla</label>
                                            <input type="text" name="editor_office_bn" value="{{ @$editData->editor_office_bn }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('editor_office_bn') ? $errors->first('editor_office_bn') : '' }}
                                            </font>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Editor Office English</label>
                                            <input type="text" name="editor_office_en" value="{{ @$editData->editor_office_en }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('editor_office_en') ? $errors->first('editor_office_en') : '' }}
                                            </font>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Editor Phone Bangla</label>
                                            <input type="text" name="editor_phone_bn" value="{{ @$editData->editor_phone_bn }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('editor_phone_bn') ? $errors->first('editor_phone_bn') : '' }}
                                            </font>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="name">Editor Phone English</label>
                                            <input type="text" name="editor_phone_en" value="{{ @$editData->editor_phone_en }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('editor_phone_en') ? $errors->first('editor_phone_en') : '' }}
                                            </font>
                                        </div>
                                       
                                        <div class="form-group col-md-6">
                                            <label for="editor_email">Editor Email</label>
                                            <input type="text" name="editor_email" value="{{ @$editData->editor_email }}"
                                                class="form-control form-control-sm">
                                            <font style="color:red">
                                                {{ $errors->has('editor_email') ? $errors->first('editor_email') : '' }}
                                            </font>
                                        </div>

                                        {{-- <div class="form-group col-md-4">
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
                                        </div> --}}

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
                    contact_title_location_bn: {
                        required: true,
                    },
                    contact_title_location_en: {
                        required: true,
                    },
                    contact_phone_bn: {
                        required: true,
                    },
                    contact_phone_en: {
                        required: true,
                    },
                    contact_circulation_phone_bn: {
                        required: true,
                    },
                    contact_circulation_phone_en: {
                        required: true,
                    },
                    contact_advertising_phone_bn: {
                        required: true,
                    },
                    contact_advertising_phone_en: {
                        required: true,
                    },
                    contact_email: {
                        required: true,
                    },
                    editor_name_bn: {
                        required: true,
                    },
                    editor_name_en: {
                        required: true,
                    },
                    executive_editor_name_bn: {
                        required: true,
                    },
                    executive_editor_name_en: {
                        required: true,
                    },
                    message_editor_name_bn: {
                        required: true,
                    },
                    message_editor_name_en: {
                        required: true,
                    },
                    editor_office_bn: {
                        required: true,
                    },
                    editor_office_en: {
                        required: true,
                    },
                    editor_phone_bn: {
                        required: true,
                    },
                    editor_phone_en: {
                        required: true,
                    },
                    editor_email: {
                        required: true,
                    }

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
