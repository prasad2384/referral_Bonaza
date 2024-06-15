@extends('admin.layout')
@section('title')
    Add Category
@endsection
@section('style')
    .errors{
    color:red;
    }
@endsection
@section('content')
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title float-left mt-1" style="font-weight: bold; color:black">Add Cateogry</h3>
                </div>
                <div class="card-body">
                    <form id="category_form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Enter User">
                                    <span class="text-danger fw-bold" style="font-weight: bold;" id='error_name'></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" style="color: black;font-weight:bold"
                                    class="btn btn-primary btn-sm float-right mt-2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
    </section>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- jquery-validation -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('#category_form').validate({
            errorClass: 'errors',
            ignore: [],
            rules: {
                name: {
                    required: true,
                }
            },
            message: {
                name: {
                    required: "Please enter your Category name",
                }
            },
            submitHandler: function(form, event) {
                $('#error_name').text('');
                event.preventDefault();
                $.ajax({
                    type: "Post",
                    url: '/category',
                    data: $(form).serialize(),
                    success: function(response) {
                        console.log(response);
                        if (response.errors) {
                            if (response.errors && response.errors.name && response.errors
                                .name[0]) {
                                $('#error_name').text(response.errors.name[0]);
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
                                window.location.href = '/category';
                            }, 4000);
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })

            }
        })
    </script>
@endsection
