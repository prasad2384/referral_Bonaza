@extends('admin.layout')
@section('title')
    Users
@endsection
@section('content')
    <!-- Main content -->
    <section class="content mt-3">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mt-1 fw-bold">Users Table</h3>
                            <div class="card-tools">
                                <a href="{{url('admin/users/create')}}" class="btn btn-sm btn-primary fw-bold">Add User</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="UserTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>UserName</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Logo</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>About</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone == '' ? '-' : $user->phone }}</td>
                                            <td>{!! $user->logo == '' ? '-' : "<img src='" . asset('images/' . $user->logo) . "' class='' style='width:50px'>" !!}</td>

                                            <td>{{ $user->address == '' ? '-' : $user->address }}</td>
                                            <td>{{ $user->status == 1 ? 'Active' : 'Removed' }}</td>
                                            <td>{{ $user->about == '' ? '-' : $user->about }}</td>
                                            <td><button class="btn btn-sm btn-danger mx-2"
                                                    onclick="DeleteUser({{ $user->id }})">D</button>
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                    class="btn btn-warning btn-sm ">U</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function DeleteUser(id) {
            $.ajax({
                url: '/admin/users/' + id,
                type: "Delete",
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
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
                        $('#UserTable').find('tr').filter(function() {
                            return $(this).find('td').first().text() == id;
                        }).remove();

                    } else {
                        alert(response.message);
                    }
                }
            })
        }
    </script>
@endsection
