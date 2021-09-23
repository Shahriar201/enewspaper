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
                            <h3>Contact List
                                <a class="btn btn-success float-right btn-sm" href="{{ route('contacts.add') }}">
                                    <i class="fa fa-plus-circle"></i>Add Contact</a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>SL.</th>
                                        {{-- <th>Contact Location Bangla</th> --}}
                                        <th>Contact Location English</th>
                                        {{-- <th>Contact Phone Bangla</th> --}}
                                        <th>Contact Phone English</th>
                                        {{-- <th>Circulation Phone Bangla</th> --}}
                                        <th>Circulation Phone English</th>
                                        {{-- <th>Advertising Phone Bangla</th> --}}
                                        <th>Advertising Phone English</th>
                                        {{-- <th>Editor Name Bangla</th> --}}
                                        <th>Contact Email</th>
                                        <th>Editor Name English</th>
                                        <th>Executive Editor Name English</th>
                                        <th>Message Editor Name English</th>
                                        {{-- <th>Editor Office Bangla</th> --}}
                                        <th>Editor Office English</th>
                                        {{-- <th>Editor Phone Bangla</th> --}}
                                        <th>Editor Phone English</th>
                                        {{-- <th>Editor Email Bangla</th> --}}
                                        <th>Editor Email</th>
                                        {{-- <th>Status</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($allData as $key => $contact)

                                    <tr class="{{ $contact->id }}">
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $contact->contact_title_location_en }}</td>
                                        <td>{{ $contact->contact_phone_en }}</td>
                                        <td>{{ $contact->contact_circulation_phone_en }}</td>
                                        <td>{{ $contact->contact_advertising_phone_en }}</td>
                                        <td>{{ $contact->contact_email }}</td>
                                        <td>{{ $contact->editor_name_en }}</td>
                                        <td>{{ $contact->executive_editor_name_en }}</td>
                                        <td>{{ $contact->message_editor_name_en }}</td>
                                        <td>{{ $contact->editor_office_en }}</td>
                                        <td>{{ $contact->editor_phone_en }}</td>
                                        <td>{{ $contact->editor_email }}</td>
                                        {{-- <td>
                                            <button id="{{ $contact->id }}" class="btn btn-basic"
                                                style="background-color:#faebd700;color:#3e5569"
                                                onclick="contactStatusControll({{ $contact->id }})">{{ $contact->status == 0 ? 'Active' : 'Deactive' }}</button>

                                        </td> --}}
                                        <td>
                                            <a title="Edit" id="edit" class="btn btn-sm btn-primary" href="{{ route('contacts.edit', $contact->id)}}">
                                                <i class="fa fa-edit">

                                                </i>
                                            </a>
                                            <a title="Delete" id="delete" class="btn btn-sm btn-danger" href="{{ route('contacts.delete') }}" data-token="{{ csrf_token() }}" data-id="{{ $contact->id }}">
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
    function districtStatusControll($id) {

        var x;
        var district_id = $id;

        var _token = $('input[name="_token"]').val();
    
        $.ajax({
            url: "{{ route('districts.status.controll') }}",
            method: "POST",
            data: {
                district_id: district_id,
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