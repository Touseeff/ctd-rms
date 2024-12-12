@php
    use Illuminate\Support\Facades\DB;
    // $roles = DB::table('roles')->get();
    // $departments = DB::table('departments')
    //     ->where('user_id', Auth::user()->id)
    //     ->get();
    // $sections = DB::table('sections')->get();
    // $users = DB::table('users')->get();
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">{{ $title }}</h4>
                                <div class="flex-shrink-0">
                                    <div class="form-check form-switch form-switch-right form-switch-md">
                                    </div>
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">
                                    {{--  --}}
                                    <form action="{{ route($url) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <!-- First Name -->
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <input type="hidden" name="sectionId"
                                                        value="{{ isset($workspace) ? $workspace->section_id : (isset($sectionId) ? $sectionId : '') }}">
                                                    <input type="hidden" name="departmentId"
                                                        value="{{ isset($workspace) ? $workspace->department_id : (isset($departmentId) ? $departmentId : '') }}">

                                                    <label for="firstNameinput" class="form-label">Workspace
                                                        Title</label>
                                                    <input type="text"
                                                        value="{{ isset($workspace) ? $workspace->title : '' }}"
                                                        class="form-control" placeholder="Enter workspace title"
                                                        id="workspaceTitleInput" name="workspaceTitle">

                                                </div>
                                            </div>
                                            {{--  --}}
                                            {{-- <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="departmentSelect" class="form-label">Department</label>
                                                    <select class="form-select" name="department_id" id="departmentSelect">
                                                        <option value="">Select Department</option>
                                                        @foreach ($departments as $department)
                                                            <option value="{{ $department->id }}"
                                                                {{ isset($user) && $user->department_id == $department->id ? 'selected' : '' }}>
                                                                {{ $department->department_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="sectionSelect" class="form-label">Section</label>
                                                    <select class="form-select" name="section_id" id="sectionSelect">
                                                        <option value="">Select Section</option>
                                                        @foreach ($sections as $section)
                                                            <option value="{{ $section->id }}"
                                                                {{ isset($user) && $user->section_id == $section->id ? 'selected' : '' }}>
                                                                {{ $section->section_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> --}}
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="userSelect" class="form-label">User</label>
                                                    <select class="form-select" name="userSelect" id="userSelect">
                                                        <option value="">Select User</option>
                                                        @foreach ($section_users as $section_user)
                                                            <option value="{{ $section_user->id }}"
                                                                {{ isset($section_user) && $section_user->id == $section_user->id ? 'selected' : '' }}>
                                                                {{ $section_user->first_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="mb-3">
                                                    <label for="statusSelect" class="form-label">Status</label>
                                                    <select name="status" class="form-select" data-choices=""
                                                        data-choices-sorting="true" id="statusSelect">
                                                        <option value="approve"
                                                            {{ isset($user) && $user->status == 'approve' ? 'selected' : '' }}>
                                                            Approve</option>
                                                        <option value="pending" selected
                                                            {{ isset($user) && $user->status == 'pending' ? 'selected' : '' }}>
                                                            Pending</option>
                                                        <option value="inactive"
                                                            {{ isset($user) && $user->status == 'inactive' ? 'selected' : '' }}>
                                                            InActive</option>
                                                        <option value="reject"
                                                            {{ isset($user) && $user->status == 'reject' ? 'selected' : '' }}>
                                                            Reject</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                    <a class="btn btn-light"
                                                        href="{{ route('workspace.dashboard') }}">Cancel</a>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                            {{--  --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!--end row-->
                    {{-- add user end  --}}
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script>

        $(document).ready(function() {
            // Handle department change
            $('#departmentSelect').on('change', function() {
                let departmentId = $(this).val();

                // Clear current options in the section dropdown
                $('#sectionSelect').empty().append('<option value="">Select Section</option>');
                if (departmentId) {
                    $.ajax({
                        url: `{{ url('/admin-dashboard/user-create') }}/${departmentId}`,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            if (Array.isArray(data) && data.length > 0) {
                                $.each(data, function(key, section) {
                                    $('#sectionSelect').append(
                                        `<option value="${section.id}">${section.section_name}</option>`
                                    );
                                });
                            } else {
                                $('#sectionSelect').append(
                                    '<option value="">No sections available</option>');
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.error('Error details:', textStatus, errorThrown);
                            console.error('Response Text:', jqXHR.responseText);
                            alert('Failed to load sections. Please try again.');
                        }
                    });
                }
            });

            // Handle section change
            $('#sectionSelect').on('change', function() {
                let sectionId = $(this).val();

                // Clear current options in the user dropdown
                $('#userSelect').empty().append('<option value="">Select User</option>');

                if (sectionId) {
                    $.ajax({
                        url: `{{ url('/workspace/get-user') }}/${sectionId}`,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            if (Array.isArray(data) && data.length > 0) {
                                $.each(data, function(key, user) {
                                    $('#userSelect').append(
                                        `<option value="${user.id}">${user.first_name}</option>`
                                    );
                                });
                            } else {
                                $('#userSelect').append(
                                    '<option value="">No users available</option>');
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.error('Error details:', textStatus, errorThrown);
                            console.error('Response Text:', jqXHR.responseText);
                        }
                    });
                }
            });

        });
    </script> --}}

    {{-- <script>
        $(document).ready(function() {
            // Initially disable the Section and User dropdowns
            $('#sectionSelect').prop('disabled', true);
            $('#userSelect').prop('disabled', true);
    
            // Handle department change
            $('#departmentSelect').on('change', function() {
                let departmentId = $(this).val();
    
                // Clear current options and disable Section and User dropdowns
                $('#sectionSelect').empty().append('<option value="">Select Section</option>').prop('disabled', true);
                $('#userSelect').empty().append('<option value="">Select User</option>').prop('disabled', true);
    
                if (departmentId) {
                    // Enable the Section dropdown if a department is selected
                    $('#sectionSelect').prop('disabled', false);
    
                    $.ajax({
                        url: `{{ url('/admin-dashboard/user-create') }}/${departmentId}`,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            if (Array.isArray(data) && data.length > 0) {
                                $.each(data, function(key, section) {
                                    $('#sectionSelect').append(
                                        `<option value="${section.id}">${section.section_name}</option>`
                                    );
                                });
                            } else {
                                $('#sectionSelect').append(
                                    '<option value="">No sections available</option>'
                                );
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.error('Error details:', textStatus, errorThrown);
                            console.error('Response Text:', jqXHR.responseText);
                            alert('Failed to load sections. Please try again.');
                        }
                    });
                }
            });
    
            // Handle section change
            $('#sectionSelect').on('change', function() {
                let sectionId = $(this).val();
    
                // Clear current options and disable User dropdown
                $('#userSelect').empty().append('<option value="">Select User</option>').prop('disabled', true);
    
                if (sectionId) {
                    // Enable the User dropdown if a section is selected
                    $('#userSelect').prop('disabled', false);
    
                    $.ajax({
                        url: `{{ url('/workspace/get-user') }}/${sectionId}`,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            if (Array.isArray(data) && data.length > 0) {
                                $.each(data, function(key, user) {
                                    $('#userSelect').append(
                                        `<option value="${user.id}">${user.first_name}</option>`
                                    );
                                });
                            } else {
                                $('#userSelect').append(
                                    '<option value="">No users available</option>'
                                );
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.error('Error details:', textStatus, errorThrown);
                            console.error('Response Text:', jqXHR.responseText);
                        }
                    });
                }
            });
        });
    </script> --}}
    {{-- <script>
        $(document).ready(function() {
            // Initially disable the Section and User dropdowns
            $('#sectionSelect').prop('disabled', true);
            $('#userSelect').prop('disabled', true);
    
            // Handle department change
            $('#departmentSelect').on('change', function() {
                let departmentId = $(this).val();
                // alert(departmentId);
    
                // Clear current options and disable Section and User dropdowns
                $('#sectionSelect').empty().append('<option value="">Select Section</option>').prop('disabled', true);
                $('#userSelect').empty().append('<option value="">Select User</option>').prop('disabled', true);
    
                if (departmentId) {
                    // Enable the Section dropdown if a department is selected
                    $('#sectionSelect').prop('disabled', false);
    
                    $.ajax({
                        url: `{{ url('/workspace/get-section/') }}/${departmentId}`,
                        type: 'GET',
                        dataType: 'json',
                        cache: false, // Disable caching
                        success: function(data) {
                            if (Array.isArray(data) && data.length > 0) {
                                $.each(data, function(key, section) {
                                    $('#sectionSelect').append(
                                        `<option value="${section.id}">${section.section_name}</option>`
                                    );
                                });
                            } else {
                                $('#sectionSelect').append(
                                    '<option value="">No sections available</option>'
                                );
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.error('Error details:', textStatus, errorThrown);
                            console.error('Response Text:', jqXHR.responseText);
                            alert('Failed to load sections. Please try again.');
                        }
                    });
                }
            });
    
            // Handle section change
            $('#sectionSelect').on('change', function() {
                let sectionId = $(this).val();
    
                // Clear current options and disable User dropdown
                $('#userSelect').empty().append('<option value="">Select User</option>').prop('disabled', true);
    
                if (sectionId) {
                    // Enable the User dropdown if a section is selected
                    $('#userSelect').prop('disabled', false);
    
                    $.ajax({
                        url: `{{ url('/workspace/get-user') }}/${sectionId}`,
                        type: 'GET',
                        dataType: 'json',
                        cache: false, // Disable caching
                        success: function(data) {
                            if (Array.isArray(data) && data.length > 0) {
                                $.each(data, function(key, user) {
                                    $('#userSelect').append(
                                        `<option value="${user.id}">${user.first_name}</option>`
                                    );
                                });
                            } else {
                                $('#userSelect').append(
                                    '<option value="">No users available</option>'
                                );
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.error('Error details:', textStatus, errorThrown);
                            console.error('Response Text:', jqXHR.responseText);
                        }
                    });
                }
            });
        });
    </script>
     --}}
