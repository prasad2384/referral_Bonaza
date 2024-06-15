@extends('admin.layout')
@section('title')
    Edit User
@endsection
@section('style')
    .errors{
    color:red;
    }
    .form-group{
    margin-bottom:5px;
    }
@endsection
@section('content')
    <!-- Main content -->
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title float-left mt-1" style="font-weight: bold; color:black">Update User</h3>
                </div>
                <div class="card-body">
                    <form id="submit_form" enctype="multipart/form-data" data-id="{{ $data->id }}">
                        @csrf
                        @method('PUT')
                        @if ($data->logo)
                            <div class="text-center mb-2">
                                <img src="{{ asset('images/' . $data->logo) }}" width="80px" alt="User Logo">
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control"
                                        placeholder="Enter First Name" value="{{ $data->firstname }}">
                                    <span style="color:red" id=""></span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control"
                                        placeholder="Enter Last Name" value="{{ $data->lastname }}">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Enter Email" value="{{ $data->email }}">
                                    <span style="color:red" id="error_email"></span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label>Phone No</label>
                                    <input type="number" name="phone" id="phone" class="form-control"
                                        placeholder="Enter Phone No" value="{{ $data->phone }}">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" name="username" id="username" class="form-control"
                                        placeholder="Enter User Name" value="{{ $data->username }}">
                                    <span style="color:red" id="error_username"></span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Upload pic</label>
                                    <div class="custom-file">
                                        <input type="file" class="form-control p-1" name="logo"
                                            class="custom-file-input" id="logo">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" id="status" class="form-control" id="">
                                        <option value="">---------Select Status------</option>
                                        <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Removed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-6">
                                <div class="form-group">
                                    <label for="">About</label>
                                    <textarea name="about" class="form-control" id="about" cols="30" rows="1">{{ $data->about }}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" style="color: black;font-weight:bold"
                                    class="btn btn-primary btn-sm float-right mt-2">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('scripts')
    <!-- Ensure jQuery is loaded first -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- jquery-validation -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        if (typeof $.fn.validate !== 'undefined') {
            jQuery.validator.addMethod("noSpace", function(value, element) {
                return value.indexOf(" ") < 0 && value != "";
            }, "No space please and don't leave it empty");
            $.validator.addMethod("noDigits", function(value, element) {
                return this.optional(element) || !/\d/.test(value);
            }, "No digits allowed");
            $.validator.addMethod("noSpecialChars", function(value, element) {
                return this.optional(element) || /^[a-zA-Z\s]*$/.test(value);
            }, "No special characters allowed");
            $.validator.addMethod("alphanumeric", function(value, element) {
                return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
            }, "Only letters and numbers are allowed");
            $('#submit_form').validate({
                errorClass: 'errors',
                ignore: [],
                rules: {
                    firstname: {
                        required: true,
                        noSpace: true,
                        noDigits: true,
                        noSpecialChars: true,
                    },
                    lastname: {
                        required: true,
                        noSpace: true,
                        noSpecialChars: false,
                        noDigits: true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: false,
                        minlength: 10,
                    },
                    username: {
                        required: true,
                        minlength: 3,
                        maxlength: 32,
                        alphanumeric: true,
                    },
                    logo: {
                        required: false,
                        accept: "image/*"
                    }
                },
                messages: {
                    firstname: {
                        required: "Please enter your first name",
                    },
                    lastname: {
                        required: "Please enter your last name",
                    },
                    email: {
                        required: "Please enter your email",
                        email: "Invalid email address"
                    },
                    phone: {
                        required: "Please enter your phone number",
                        minlength: "Please Enter valid phone number"
                    },
                    username: {
                        required: "Please enter your username",
                        minlength: "Username must be at least 3 characters long",
                        maxlength: "Username must be no more than 32 characters long",
                        alphanumeric: "Username can only contain letters and numbers",
                    },
                    
                    logo: {
                        required: "Please upload file.",
                        accept: "Please upload file in these format only (jpg, jpeg, png, ico, bmp)."
                    }
                },
                submitHandler: function(form, event) {
                    $('#error_email').text('');
                    $('#error_username').text('');
                    event.preventDefault();
                    var formData = new FormData(form);
                    var id = $(form).data('id');
                    $.ajax({
                        type: "Post",
                        url: '/users/' + id,
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            console.log(response);
                            if (response.errors) {
                                if (response.errors && response.errors.email && response.errors
                                    .email[
                                        0]) {
                                    $('#error_email').text(response.errors.email[0]);
                                }
                                if (response.errors && response.errors.username && response.errors
                                    .username[0]) {
                                    $('#error_username').text(response.errors.username[0]);
                                }
                            } else {
                                form.reset();
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: response.message,
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 4000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal
                                            .stopTimer)
                                        toast.addEventListener('mouseleave', Swal
                                            .resumeTimer)
                                    }
                                });
                                setInterval(() => {
                                    window.location.href = '/users';
                                }, 4000);
                            }
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }
            });
        } else {
            console.error('jQuery validation plugin is not loaded');
        }
    </script>
@endsection
