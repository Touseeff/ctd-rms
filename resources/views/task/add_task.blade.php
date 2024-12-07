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
                        <form action="{{ route('tasks.store') }}" id="taskForm" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="basiInput" class="form-label">Project Title</label>
                                            <select class="js-example-basic-single form-control" name="projectName"
                                                style="width: 100%;">
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="basiInput" class="form-label">Task Title</label>
                                            <input type="text" name="task_title" class="form-control"
                                                id="datepicker-deadline-input" placeholder="Enter task title"
                                                data-provider="flatpickr">
                                        </div>
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="ckeditor-classic" class="form-label">Task
                                                    Description</label>
                                                <textarea id="ckeditor-classic" name="task_description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row pt-2">
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-lg-0">
                                                <label for="choices-priority-input" class="form-label">Priority</label>
                                                <select name="priority" class="form-select" data-choices
                                                    data-choices-search-false id="choices-priority-input">
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
                                                <input type="date" name="startDate" class="form-control"
                                                    id="datepicker-deadline-input" placeholder="Enter start date"
                                                    data-provider="flatpickr">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div>
                                                <label for="datepicker-deadline-input"
                                                    class="form-label">Deadline</label>
                                                <input type="date" name="dueDate" class="form-control"
                                                    id="datepicker-deadline-input" placeholder="Enter due date"
                                                    data-provider="flatpickr">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-lg-0">
                                                <label for="choices-status-input" name="status"
                                                    class="form-label">Status</label>
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
                                            <select class="js-example-data-array" name="users[]" multiple="multiple"
                                                id="assign-users">
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->first_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <label for="datepicker-deadline-input" class="form-label">Files</label>
                                        <!-- end row -->
                                        {{--  --}}
                                        <input type="file" name="file[]" id="file" multiple />
                                        {{-- <input type="file" class="filepond" name="file[]" multiple> --}}
                                        {{-- <input type="file" class="filepond" name="file" accept="image/*" multiple> --}}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col d-flex justify-content-end ">

                                        <button id="taskForm" class="btn btn-primary d-flex justify-content-end "
                                            type="submit">submit</button>
                                    </div>
                                </div>
                                <!-- end card -->
                        </form>
                    </div>


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
            $(".js-example-basic-single").select2({
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
            $(".js-example-basic-single").val(null).trigger('change');
        });
    </script>

    <script>
        // Register FilePond plugins (if needed)
        FilePond.registerPlugin(FilePondPluginImagePreview);


        const pond = FilePond.create(document.querySelector('input[name="file[]"]'));

        // FilePond options
        FilePond.setOptions({
            allowMultiple: true, 
            instantUpload: false, 
            maxFiles: 5, 
            allowImagePreview: true,
        });

        // Form submission handler
        document.getElementById('taskForm').addEventListener('submit', async function(e) {
            e.preventDefault(); // Prevent the default form submission

            const formData = new FormData(this); // Collect the form data

            // Append files from FilePond to FormData
            const files = pond.getFiles();
            files.forEach(file => {
                formData.append('file[]', file.file);
            });

            try {
                // Send the form data (including files) via a POST request
                const response = await fetch('{{ route('tasks.store') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}', 
                    },
                });

                const result = await response.json();
                if (result.success) {
                    console.log('task create successfully');
                    // alert('Task created successfully!');
                } else {
                    console.error(result);
                    alert(result.error || 'An error occurred');
                }
            } catch (error) {
                console.error(error);
                alert('An error occurred while submitting the form');
            }
        });
    </script>
