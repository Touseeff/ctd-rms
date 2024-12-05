@php
    use Illuminate\Support\Facades\DB;
    $users = DB::table('users')->get();
@endphp
@include('layout.header')
<!-- Begin page -->
<style>
    /**
 * FilePond Custom Styles
 */
.filepond--drop-label {
	color: #4c4e53;
}

.filepond--label-action {
	text-decoration-color: #babdc0;
}

.filepond--panel-root {
	border-radius: 2em;
	background-color: #edf0f4;
	height: 1em;
}

.filepond--item-panel {
	background-color: #595e68;
}

.filepond--drip-blob {
	background-color: #7f8a9a;
}


/**
 * Page Styles
 */

</style>


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
                        <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data">
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
                                            <input type="text" class="form-control" id="datepicker-deadline-input"
                                                placeholder="Enter task title" data-provider="flatpickr">
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
                                            <select class="js-example-data-array" name="users[]" multiple="multiple"
                                                id="assign-users">
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->first_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-12">
                                            <div class="justify-content-between d-flex align-items-center mb-3">
                                                <h5 class="mb-0 pb-1 text-decoration-underline">Filepond</h5>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end col -->
                                        <input type="file" class="filepond" name="files[]" multiple>
                                    </div>
                                    <!-- end row -->
                                   
                                    
                                    {{-- <button type="submit">Upload</button> --}}
                                    <!-- end card body -->
                                </div>

                                <div id="dropzone-preview-list"></div>
                                <div class="row">
                                    <div class="col d-flex justify-content-end ">

                                        <button class="btn  btn-primary d-flex justify-content-end "
                                            type="submit">submint</button>
                                    </div>
                                </div>
                                <!-- end card -->
                        </form>
                    </div>
                    {{-- <form method="POST" action="{{ route('tasks.store') }}" enctype="multipart/form-data"> --}}
                        {{-- @csrf --}}
                        {{-- <input type="file" class="filepond" name="files[]" multiple> --}}
                        {{-- <button type="submit">Upload</button> --}}
                    {{-- </form> --}}
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
        // $(".js-example-data-array").select2({
        //     placeholder: "Search for a Project",
        //     allowClear: true,
        //     // width: '100%', // Ensures proper dropdown width
        //     ajax: {
        //         url: '/ctd_cms_project/get-project',
        //         type: 'GET',
        //         dataType: 'json',
        //         delay: 250,
        //         data: function(params) {
        //             return {
        //                 q: params.term // The search term
        //             };
        //         },
        //         processResults: function(data) {
        //             return {
        //                 results: $.map(data, function(item) {
        //                     return {
        //                         id: item.id,
        //                         text: item.project_name
        //                     };
        //                 })
        //             };
        //         },
        //         error: function(xhr, status, error) {
        //             console.error('AJAX error:', error);
        //             console.log('Response:', xhr.responseText);
        //         }
        //     }
        // });
        // $(".js-example-data-array").val(null).trigger('change');
    </script>
 <script>
    // // Register plugins
    // FilePond.registerPlugin(
    //     FilePondPluginFileValidateType,
    //     FilePondPluginFileValidateSize,
    //     FilePondPluginImagePreview
    // );

    // // Set options for FilePond
    // FilePond.setOptions({
    //     server: {
    //         process: {
    //             url: '{{ route('upload') }}',
    //             method: 'POST',
    //             headers: {
    //                 'X-CSRF-TOKEN': '{{ csrf_token() }}'
    //             }
    //         },
    //         revert: {
    //             url: '{{ route('delete') }}',
    //             method: 'DELETE',
    //             headers: {
    //                 'X-CSRF-TOKEN': '{{ csrf_token() }}'
    //             }
    //         }
    //     }
    // });

    // // Turn all input elements into FilePond inputs
    // FilePond.create(document.querySelector('.filepond'));
</script>
<script>
    // Register FilePond
    const inputElement = document.querySelector('.filepond');
    FilePond.create(inputElement);

    // Configure FilePond to handle server uploads
    FilePond.setOptions({
        server: {
            process: {
                url: '{{ route("tasks.store") }}',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            },
            revert: null, // Define if you need revert functionality
        }
    });
</script>
