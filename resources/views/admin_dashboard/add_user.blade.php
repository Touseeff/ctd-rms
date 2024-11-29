@php
    use Illuminate\Support\Facades\DB;
    $roles = DB::table('roles')->get();
    $departments = DB::table('departments')->get();
    $sections = DB::table('sections')->get();
@endphp
@include('layout.header')
<!-- Begin page -->
<div id="layout-wrapper">
    @include('admin_dashboard.header')
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
                                        {{-- <label for="form-grid-showcode" class="form-label text-muted">Show Code</label> --}}
                                        {{-- <input class="form-check-input code-switcher" type="checkbox"
                                            id="form-grid-showcode"> --}}
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
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <input type="hidden" name="id"
                                                        value="{{ isset($user) ? $user->id : '' }}">
                                                    <label for="firstNameinput" class="form-label">First Name</label>
                                                    <input type="text"
                                                        value="{{ isset($user) ? $user->first_name : '' }}"
                                                        class="form-control" placeholder="Enter first name"
                                                        id="firstNameinput" name="firstName">
                                                </div>
                                            </div>

                                            <!-- Last Name -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="lastNameinput" class="form-label">Last Name</label>
                                                    <input type="text"
                                                        value="{{ isset($user) ? $user->last_name : '' }}"
                                                        class="form-control" placeholder="Enter last name"
                                                        id="lastNameinput" name="lastName">
                                                </div>
                                            </div>

                                            <!-- Email -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="emailinput" class="form-label">Email</label>
                                                    <input type="email" {{ isset($user) ? 'disabled' : '' }}
                                                        class="form-control" placeholder="Enter email" id="emailinput"
                                                        name="email">
                                                </div>
                                            </div>
                                            <!-- Contact Number -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="contactNumberinput" class="form-label">Cell
                                                        Number</label>
                                                    <input type="tel"
                                                        value="{{ isset($user) ? $user->contact_number : '' }}"
                                                        class="form-control" placeholder="Enter cell number"
                                                        id="contactNumberinput" name="contactNumber">
                                                </div>
                                            </div>
                                            <!-- Id Number -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="nicNumberInput" class="form-label">NIC Number</label>
                                                    <input type="text"
                                                        value="{{ isset($user) ? $user->nic_number : '' }}"
                                                        class="form-control" placeholder="Enter NIC number"
                                                        id="nicNumberInput" name="nicNumber">
                                                </div>
                                            </div>
                                            <!-- Qualification -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="qualificationinput"
                                                        class="form-label">Qualification</label>
                                                    <input type="text"
                                                        value="{{ isset($user) ? $user->qualification : '' }}"
                                                        class="form-control" placeholder="Enter qualification"
                                                        id="qualificationinput" name="qualification">
                                                </div>
                                            </div>
                                            <!-- Gender -->
                                            <div class="col-md-2">
                                                <div class="mb-3">
                                                    <label for="genderinput" class="form-label">Gender</label>
                                                    <select name="gender" class="form-select" id="genderinput">
                                                        <option value="male"
                                                            {{ isset($user) && $user->gender == 'male' ? 'selected' : '' }}>
                                                            Male</option>
                                                        <option value="female"
                                                            {{ isset($user) && $user->gender == 'female' ? 'selected' : '' }}>
                                                            Female</option>
                                                        <option value="other"
                                                            {{ isset($user) && $user->gender == 'other' ? 'selected' : '' }}>
                                                            Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Date of Birth -->
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="dobinput" class="form-label">Date of Birth</label>
                                                    <input type="date"
                                                        value="{{ isset($user) ? $user->date_of_birth : '' }}"
                                                        class="form-control" id="dobinput" name="dateOfBirth">
                                                </div>
                                            </div>
                                            <!-- Designation -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="designationinput"
                                                        class="form-label">Designation</label>
                                                    <input type="text"
                                                        value="{{ isset($user) ? $user->designation : '' }}"
                                                        class="form-control" placeholder="Enter designation"
                                                        id="designationinput" name="designation">
                                                </div>
                                            </div>
                                            <!-- Date of Joining -->
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="dateOfJoininginput" class="form-label">Date of
                                                        Joining</label>
                                                    <input type="date"
                                                        value="{{ isset($user) ? $user->joining_date : '' }}"
                                                        class="form-control" id="dateOfJoininginput"
                                                        name="dateOfJoining">
                                                </div>
                                            </div>


                                            <!-- Skills -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="skillsinput" class="form-label">Address 01 (Current
                                                        Address)</label>
                                                    <textarea class="form-control" id="skillsinput" rows="3" name="addressOne"
                                                        placeholder="Enter Current address">{{ isset($user) ? $user->address_one : '' }}</textarea>
                                                </div>
                                            </div>

                                            <!-- Address -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="addressinput" class="form-label">Address 02 (Permanent
                                                        Address)</label>
                                                    <textarea class="form-control" id="addressinput" rows="3" name="addressTwo"
                                                        placeholder="Enter permanent address">{{ isset($user) ? $user->address_two : '' }}</textarea>
                                                </div>
                                            </div>


                                            {{--  --}}
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="departmentSelect"
                                                        class="form-label">Department</label>
                                                    <select class="form-select" name="department" data-choices=""
                                                        data-choices-sorting="true" id="departmentSelect">

                                                        <option value="">Select Department</option>
                                                        @foreach ($departments as $department)
                                                            <option value="{{ $department->id }}"
                                                                {{ isset($user) && $user->department_id == $department->id ? 'selected' : '' }}>
                                                                {{ $department->department_name }}

                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-3"> --}}

                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="sectionSelect" class="form-label">Section</label>
                                                    <select class="form-select" name="section" id="sectionSelect">
                                                        <option value="">Select section</option>
                                                        @foreach ($sections as $section)
                                                            <option value="{{ $section->id }}"
                                                                {{ isset($user) && $user->section_id == $section->id ? 'selected' : '' }}>
                                                                {{ $section->section_name }}

                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="col-md-2">
                                                <div class="mb-3">
                                                    <label for="roleSelect" class="form-label">Designation
                                                        Role</label>
                                                    <select class="form-select" data-choices=""
                                                        data-choices-sorting="true" id="roleSelect"
                                                        name="designationRole">
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->role_type }}"
                                                                {{ isset($user) && $user->role_id == $role->id ? 'selected' : '' }}>
                                                                {{ $role->role_type }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="mb-3">
                                                    <label for="roleSelect" class="form-label">Role (for
                                                        Dashboard)</label>
                                                    <select name="role" class="form-select" data-choices=""
                                                        data-choices-sorting="true" id="roleSelect">
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->id }}"
                                                                {{ isset($user) && $user->role_id == $role->id ? 'selected' : '' }}>
                                                                {{ $role->role_type }}</option>
                                                        @endforeach
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
                                                        href="{{ route('admin.dashboard') }}">Cancel</a>
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
    @include('admin_dashboard.preloader')
    <!-- Theme Settings -->
    @include('layout.footer');
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#departmentSelect').on('change', function() {
                let departmentId = $(this).val();

                // Clear the current options in the section dropdown
                $('#sectionSelect').empty();

                // Append the default 'Select Section' option
                $('#sectionSelect').append('<option value="">Select Section</option>');

                if (departmentId) {
                    $.ajax({
                        url: `{{ url('/admin-dashboard/user-create') }}/${departmentId}`,
                        type: 'GET',
                        dataType: 'json',
                        // headers: {
                        // 'Accept': 'application/json',  // Set header to request JSON
                        // 'Content-Type': 'application/json',  // Explicitly set content type as JSON
                        // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  // Add CSRF token
                        // },
                        success: function(data) {
                            // console.log(data); // Log the response for debugging

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
                            console.log('Error details:', textStatus, errorThrown);
                            console.log('Response Text:', jqXHR.responseText);
                            alert('Failed to load sections please tray again');
                        }
                    });
                }
            });
        });
    </script>
