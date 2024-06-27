@extends('admin.layout')
@section('title')
    Category
@endsection
@section('content')
    <section class="content mt-3">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mt-1 fw-bold">Category Table</h3>
                            <div class="card-tools">
                                <a href="{{url('admin/category/create')}}" class="btn btn-sm btn-primary fw-bold">Add Category</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="CategoryTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <button class="btn btn-danger btn-sm mx-2"
                                                    onclick="DeleteCategory({{ $category->id }})">D</button>
                                                <a href="{{ route('category.edit', $category->id) }}"
                                                    class='btn btn-warning btn-sm'>U</a>
                                            </td>
                                        </tr>
                                    @empty
                                    <tr>
                                        <td>No Category Found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                          <div class="px-4">
                        {{$data->links()}}
                    </div>
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
        function DeleteCategory(id) {
            $.ajax({
                url: '/admin/category/' + id,
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
                        $('#CategoryTable').find('tr').filter(function() {
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
