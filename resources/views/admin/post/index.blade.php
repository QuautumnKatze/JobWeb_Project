@extends("admin_layout")
@section("admin_content")
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-6">
            <h4 class="fw-bold py-3 mb-4">Quản lý bài viết</h4>
        </div>
        <div class="col-lg-6 d-flex flex-row-reverse">
            <button class="btn">
                <a class="btn btn-primary" href="{{route('post.create')}}">Thêm mới</a>
            </button>
        </div>


    </div>


    <!-- Striped Rows -->
    <div class="card">
        <h5 class="card-header">Striped rows</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Hình ảnh</th>
                        <th>Tiêu đề</th>
                        <th>Tác giả</th>
                        <th>Sửa đổi lần cuối</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php
                        $i = 1
                    @endphp
                    @foreach ($postdata as $item)
                        <tr id="post-{{$item->post_id}}">
                            <td>{{$i++}}</td>
                            <td>
                                <img src="{{asset($item->image)}}" class="w-25" />
                            </td>
                            <td>{{$item->title}}</td>
                            <td>
                                {{$item->admin_id}}
                            </td>
                            <td>
                                {{$item->updated_at}}
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href=""><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <button type="button" class="dropdown-item btn-delete" data-id="{{$item->post_id}}">
                                            <i class="bx bx-trash me-1"></i>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Striped Rows -->

    <hr class="my-5" />
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function () {
        $('body').on('click', '.btn-delete', function (e) {
            e.preventDefault();
            const id = $(this).data('id');
            Swal.fire({
                title: "Xác nhận xóa bài viết này?",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Xóa",
                cancelButtonText: "Hủy",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "/post/delete/" + id,
                        type: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            toastr.success(response.message);
                            $('#post-' + id).remove();
                        },
                        error: function (xhr) {
                            toastr.error('Có lỗi khi xóa bài viết');
                        }
                    });
                }
            });
        })

        setTimeout(function () {
            $("#myAlert").fadeOut(500);
        }, 3500);
    })
</script>

@endsection