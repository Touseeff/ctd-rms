@php
    use Illuminate\Support\Facades\DB;
    $users = DB::table('users')->get();
@endphp
@include('layout.header')
<!-- Begin page -->
<div id="layout-wrapper">
    @include('head_dashboard.header')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    {{--  --}}
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                {{-- alert message --}}
                @if (session('success'))
                    <div id="alert-message" class="alert alert-success">
                        {{ session('success') }}

                    </div>
                @endif
                @if (session('error'))
                    <div id="alert-message" class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                {{-- add user str  --}}
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route($url) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="basiInput" class="form-label">Project Title</label>
                                            <select class="js-example-data-array  js-example-basic-single form-control"
                                                name="projectName" style="width: 100%;">
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="basiInput" class="form-label">Task Title</label>
                                                <input type="text" class="form-control" name="cardTitle"
                                                    id="basiInput">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Project Description</label>
                                        <div id="ckeditor-classic">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-lg-0">
                                                <label for="choices-priority-input" class="form-label">Priority</label>
                                                <select class="form-select" data-choices data-choices-search-false
                                                    id="choices-priority-input">
                                                    <option value="High" selected>High</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div>
                                                <label for="datepicker-deadline-input" class="form-label">Start
                                                    Date</label>
                                                <input type="date" class="form-control"
                                                    id="datepicker-deadline-input" placeholder="Enter start date"
                                                    data-provider="flatpickr">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div>
                                                <label for="datepicker-deadline-input"
                                                    class="form-label">Deadline</label>
                                                <input type="date" class="form-control"
                                                    id="datepicker-deadline-input" placeholder="Enter due date"
                                                    data-provider="flatpickr">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-lg-0">
                                                <label for="choices-status-input" class="form-label">Status</label>
                                                <select class="form-select" data-choices data-choices-search-false
                                                    id="choices-status-input">
                                                    <option value="Inprogress" selected>Inprogress</option>
                                                    <option value="Completed">Completed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 pt-2">
                                            <label for="datepicker-deadline-input" class="form-label">Assign
                                                Task</label>
                                            <select class="js-example-basic-single" name="users[]" multiple="multiple"
                                                id="assign-users">
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->first_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <p class="text-muted">Add Attached files here.</p>

                                            <div class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple="multiple">
                                                </div>
                                                <div class="dz-message needsclick">
                                                    <div class="mb-3">
                                                        <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                    </div>

                                                    <h5>Drop files here or click to upload.</h5>
                                                </div>
                                            </div>

                                            <ul class="list-unstyled mb-0" id="dropzone-preview">
                                                <li class="mt-2" id="dropzone-preview-list">
                                                    <!-- This is used as the file preview template -->
                                                    <div class="border rounded">
                                                        <div class="d-flex p-2">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar-sm bg-light rounded">
                                                                    <img src="apps-projects-create.html#"
                                                                        alt="Project-Image" data-dz-thumbnail
                                                                        class="img-fluid rounded d-block" />
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div class="pt-1">
                                                                    <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                                    <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                                    <strong class="error text-danger"
                                                                        data-dz-errormessage></strong>
                                                                </div>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-3">
                                                                <button data-dz-remove
                                                                    class="btn btn-sm btn-danger">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- end dropzon-preview -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-end ">

                                    <button class="btn  btn-primary d-flex justify-content-end "
                                        type="submit">submint</button>
                                </div>
                            </div>
                            <!-- end card -->
                        </form>

                    </div>
                    <!-- end col -->

                    <!-- end col -->
                </div>
                <!-- container-fluid -->
            </div>

            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Craftech Digital.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>

    <!-- END layout-wrapper -->

    @include('head_dashboard.preloader')

    <!-- Theme Settings -->


    @include('layout.footer');
    <script>
        $(document).ready(function() {
            $(".js-example-data-array").select2({
                placeholder: "Search for a Project",
                allowClear: true,
                ajax: {
                    url: '/ctd_cms_project/get-project',
                    type: 'GET',
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    id: item.id,
                                    text: item.project_name
                                };
                            })
                        };
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX error:', error);
                        console.log('Response:', xhr.responseText);
                    }
                }
            });
            $(".js-example-data-array").val(null).trigger('change');
        });
    </script>
    <script>
        // $(document).ready(function() {
        //     $('#user-select').change(function() {
        //         var selectedUsers = $(this).val();
        //         if (!selectedUsers || selectedUsers.length === 0) {
        //             alert('Please select at least one user.');
        //             return;
        //         }

        //         $.ajax({
        //             url: "/ctd_cms_project/assign-task",
        //             method: "GET",
        //             data: {
        //                 _token: "{{ csrf_token() }}",
        //                 users: selectedUsers,

        //             },
        //             success: function(response) {
        //                 alert(response.message);
        //             },
        //             error: function(xhr) {
        //                 alert('An error occurred: ' + xhr.responseJSON.message);
        //             }
        //         });
        //     });
        // });
    </script>
