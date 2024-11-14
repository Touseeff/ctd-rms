@php
    use Illuminate\Support\Facades\DB;
    $roles = DB::table('roles')->get();
    $departments = DB::table('departments')->get();
<<<<<<< HEAD
    $sections = DB::table('sections')->get();
=======
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
@endphp


@include('layout.header')
<!-- Begin page -->
<div id="layout-wrapper">
    @include('hr_dashboard.header')

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
<<<<<<< HEAD
                                                    <input type="text"
                                                        value="{{ isset($user) ? $user->first_name : '' }}"
=======
                                                    <input type="text" {{ isset($user) ? 'disabled' : '' }}
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                                                        class="form-control" placeholder="Enter first name"
                                                        id="firstNameinput" name="firstName">
                                                </div>
                                            </div>

<<<<<<< HEAD
=======
                                            <!-- Middle Name -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="middleNameinput" class="form-label">Middle Name</label>
                                                    <input type="text" {{ isset($user) ? 'disabled' : '' }}
                                                        class="form-control" placeholder="Enter middle name"
                                                        id="middleNameinput" name="middleName">
                                                </div>
                                            </div>

>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                                            <!-- Last Name -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="lastNameinput" class="form-label">Last Name</label>
<<<<<<< HEAD
                                                    <input type="text"
                                                        value="{{ isset($user) ? $user->last_name : '' }}"
=======
                                                    <input type="text"{{ isset($user) ? 'disabled' : '' }}
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                                                        class="form-control" placeholder="Enter last name"
                                                        id="lastNameinput" name="lastName">
                                                </div>
                                            </div>

                                            <!-- Email -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="emailinput" class="form-label">Email</label>
<<<<<<< HEAD
                                                    <input type="email" value="{{ isset($user) ? $user->email : '' }}"
=======
                                                    <input type="email" {{ isset($user) ? 'disabled' : '' }}
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                                                        class="form-control" placeholder="Enter email" id="emailinput"
                                                        name="email">
                                                </div>
                                            </div>
<<<<<<< HEAD
                                            <!-- Contact Number -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="contactNumberinput" class="form-label">Cell
                                                        Number</label>
                                                    <input type="tel"
                                                        value="{{ isset($user) ? $user->contact_number : '' }}"
                                                        class="form-control" placeholder="Enter cell number"
=======

                                            <!-- Password (disabled for editing) -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="passwordinput" class="form-label">Password</label>
                                                    <input type="password" class="form-control"
                                                        placeholder="Enter password" id="passwordinput" name="password"
                                                        {{ isset($user) ? 'disabled' : '' }}>
                                                </div>
                                            </div>

                                            <!-- Contact Number -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="contactNumberinput" class="form-label">Contact
                                                        Number</label>
                                                    <input type="tel" {{ isset($user) ? 'disabled' : '' }}
                                                        class="form-control" placeholder="Enter contact number"
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                                                        id="contactNumberinput" name="contactNumber">
                                                </div>
                                            </div>
                                            <!-- Id Number -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
<<<<<<< HEAD
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
=======
                                                    <label for="contactNumberinput" class="form-label">NIC
                                                        Number</label>
                                                    <input type="tel" {{ isset($user) ? 'disabled' : '' }}
                                                        class="form-control" placeholder="Enter NIC number"
                                                        id="contactNumberinput" name="contactNumber">
                                                </div>
                                            </div>



                                            <!-- Gender -->
                                            <div class="col-md-4">
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
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
<<<<<<< HEAD
                                            <!-- Date of Birth -->
                                            <div class="col-md-3">
=======

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

                                            <!-- Date of Birth -->
                                            <div class="col-md-4">
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
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
<<<<<<< HEAD
                                            <!-- Date of Joining -->
                                            <div class="col-md-3">
=======

                                            <!-- Date of Joining -->
                                            <div class="col-md-4">
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                                                <div class="mb-3">
                                                    <label for="dateOfJoininginput" class="form-label">Date of
                                                        Joining</label>
                                                    <input type="date"
                                                        value="{{ isset($user) ? $user->joining_date : '' }}"
                                                        class="form-control" id="dateOfJoininginput"
                                                        name="dateOfJoining">
                                                </div>
                                            </div>
<<<<<<< HEAD


                                            <!-- Skills -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="skillsinput" class="form-label">Address 01 (Current
                                                        Address)</label>
                                                    <textarea class="form-control" id="skillsinput" rows="3" name="addressOne"
                                                        placeholder="Enter Current address">{{ isset($user) ? $user->address_one : '' }}</textarea>
=======
                                            <!-- Skills -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="skillsinput" class="form-label">Address 01 <span
                                                            class="text-danger">Current Address</span></label>
                                                    <textarea class="form-control" id="skillsinput" rows="3" name="addressOne"
                                                        placeholder="Enter Current address">{{ isset($user) ? $user->skills : '' }}</textarea>
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                                                </div>
                                            </div>

                                            <!-- Address -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
<<<<<<< HEAD
                                                    <label for="addressinput" class="form-label">Address 02 (Permanent
                                                        Address)</label>
                                                    <textarea class="form-control" id="addressinput" rows="3" name="addressTwo"
                                                        placeholder="Enter permanent address">{{ isset($user) ? $user->address_two : '' }}</textarea>
=======
                                                    <label for="addressinput" class="form-label">Address 02</label>
                                                    <textarea class="form-control" id="addressinput" rows="3" name="addressTwo" placeholder="Enter address">{{ isset($user) ? $user->address : '' }}</textarea>
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                                                </div>
                                            </div>


<<<<<<< HEAD
                                            {{--  --}}
                                            <div class="col-md-3">
=======
                                            {{-- <div class="col-md-3">
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                                                <div class="mb-3">
                                                    <label for="departmentSelect"
                                                        class="form-label">Department</label>
                                                    <select class="form-select" name="department" data-choices=""
                                                        data-choices-sorting="true" id="departmentSelect">
<<<<<<< HEAD

                                                        <option value="">Select Department</option>
                                                        @foreach ($departments as $department)
                                                            <option value="{{ $department->id }}"
                                                                {{ isset($user) && $user->department_id == $department->id ? 'selected' : '' }}>
                                                                {{ $department->department_name }}

=======
                                                        @foreach ($departments as $department)
                                                            <option value="{{ $department->id }}"
                                                                {{ isset($user) && $user->department == 'admin' ? 'selected' : '' }}>
                                                                {{ $department->department_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="departmentSelect"
                                                        class="form-label">Section</label>
                                                    <select class="form-select" name="department" data-choices=""
                                                        data-choices-sorting="true" id="departmentSelect">
                                                        <option value="admin"
                                                            {{ isset($user) && $user->department == 'admin' ? 'selected' : '' }}>
                                                            Admin</option>

                                                    </select>
                                                </div>
                                            </div> --}}

                                            {{--  --}}
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="departmentSelect" class="form-label">Department</label>
                                                    <select class="form-select" name="department" data-choices=""
                                                            data-choices-sorting="true" id="departmentSelect">
                                                            <option value="">Select Department</option>
                                                        @foreach ($departments as $department)
                                                            <option value="{{ $department->id }}">
                                                                {{ $department->department_name }}
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
<<<<<<< HEAD
                                            {{-- <div class="col-md-3"> --}}
=======
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a

                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="sectionSelect" class="form-label">Section</label>
                                                    <select class="form-select" name="section" id="sectionSelect">
<<<<<<< HEAD
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
=======
                                                    </select>
                                                </div>
                                            </div>


                                            {{--  --}}

                                            {{--  --}}
                                            <!-- Designation Role -->
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="designationRoleinput" class="form-label">Designation
                                                        Role</label>
                                                    <select name="designationRole" class="form-select"
                                                        id="designationRoleinput">
                                                        <option value="super admin"
                                                            {{ isset($user) && $user->designation_role == 'super admin' ? 'selected' : '' }}>
                                                            Super Admin</option>
                                                        <option value="admin"
                                                            {{ isset($user) && $user->designation_role == 'admin' ? 'selected' : '' }}>
                                                            Admin</option>
                                                        <option value="hr"
                                                            {{ isset($user) && $user->designation_role == 'hr' ? 'selected' : '' }}>
                                                            HR</option>
                                                        <option value="head"
                                                            {{ isset($user) && $user->designation_role == 'head' ? 'selected' : '' }}>
                                                            Head</option>
                                                        <option value="Manager"
                                                            {{ isset($user) && $user->designation_role == 'manager' ? 'selected' : '' }}>
                                                            Manager</option>
                                                        <option value="Lead"
                                                            {{ isset($user) && $user->designation_role == 'lead' ? 'selected' : '' }}>
                                                            Lead</option>
                                                        <option value="Agent"
                                                            {{ isset($user) && $user->designation_role == 'agent' ? 'selected' : '' }}>
                                                            Agent</option>
                                                        <option value="User"
                                                            {{ isset($user) && $user->designation_role == 'user' ? 'selected' : '' }}>
                                                            User</option>
                                                    </select>
                                                </div>
                                            </div>

                                            {{--  --}}
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="roleSelect" class="form-label">Role</label>
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                                                    <select name="role" class="form-select" data-choices=""
                                                        data-choices-sorting="true" id="roleSelect">
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->id }}"
<<<<<<< HEAD
                                                                {{ isset($user) && $user->role_id == $role->id ? 'selected' : '' }}>
=======
                                                                {{ isset($user) && $user->role == $role->id ? 'selected' : '' }}>
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                                                                {{ $role->role_type }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
<<<<<<< HEAD
=======

                                            {{-- <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="roleSelect" class="form-label">Role</label>
                                                    <select name="role" class="form-select" data-choices=""
                                                        data-choices-sorting="true" id="roleSelect">
                                                        <option value="1"
                                                            {{ isset($user) && $user->role == 1 ? 'selected' : '' }}>
                                                            Head</option>
                                                        <option value="2"
                                                            {{ isset($user) && $user->role == 2 ? 'selected' : '' }}>
                                                            Manager</option>
                                                        <option value="3"
                                                            {{ isset($user) && $user->role == 3 ? 'selected' : '' }}>
                                                            Lead</option>
                                                        <option value="4"
                                                            {{ isset($user) && $user->role == 4 ? 'selected' : '' }}>
                                                            Agent</option>
                                                        <option value="6"
                                                            {{ isset($user) && $user->role == 6 ? 'selected' : '' }}>
                                                            HR</option>
                                                        <option value="5"
                                                            {{ isset($user) && $user->role == 5 ? 'selected' : '' }}>
                                                            User</option>
                                                    </select>
                                                </div>
                                            </div> --}}

                                            {{-- <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="statusSelect" class="form-label">Status</label>
                                                    <select {{ isset($user) ? 'disabled' : '' }} disabled name="status"
                                                        class="form-select" data-choices=""
                                                        data-choices-sorting="true" id="statusSelect">
                                                        <option value="inactive"
                                                            {{ isset($user) && $user->status == 'inactive' ? 'selected' : '' }}>
                                                            InActive</option>
                                                        <option value="active"
                                                            {{ isset($user) && $user->status == 'active' ? 'selected' : '' }}>
                                                            Active</option>
                                                        <option value="pending"
                                                            {{ isset($user) && $user->status == 'pending' ? 'selected' : '' }}>
                                                            Pending</option>
                                                        <option value="approve"
                                                            {{ isset($user) && $user->status == 'approve' ? 'selected' : '' }}>
                                                            Approve</option>
                                                        <option value="reject"
                                                            {{ isset($user) && $user->status == 'reject' ? 'selected' : '' }}>
                                                            Reject</option>
                                                    </select>
                                                </div>
                                            </div> --}}

>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                    <a class="btn btn-light"
                                                        href="{{ route('hr.dashboard') }}">Cancel</a>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>

                                            {{--  --}}

                                        </div>
<<<<<<< HEAD
                                    </form>
=======
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
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
<<<<<<< HEAD
                            </script> © Craftech Digital.
=======
                            </script> © Velzon.
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
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
    @include('hr_dashboard.preloader')

    <!-- Theme Settings -->


<<<<<<< HEAD
    @include('layout.footer');
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#departmentSelect').on('change', function() {
=======
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#departmentSelect').on('change', function () {
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                let departmentId = $(this).val();

                // Clear the current options in the section dropdown
                $('#sectionSelect').empty();

                // Append the default 'Select Section' option
                $('#sectionSelect').append('<option value="">Select Section</option>');

                if (departmentId) {
                    $.ajax({
                        url: `{{ url('/hr-dashboard/user-create') }}/${departmentId}`,
                        type: 'GET',
                        dataType: 'json',
                        // headers: {
<<<<<<< HEAD
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
=======
                            // 'Accept': 'application/json',  // Set header to request JSON
                            // 'Content-Type': 'application/json',  // Explicitly set content type as JSON
                            // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  // Add CSRF token
                        // },
                        success: function (data) {
                            console.log(data);  // Log the response for debugging

                            if (Array.isArray(data) && data.length > 0) {
                                $.each(data, function (key, section) {
                                    $('#sectionSelect').append(`<option value="${section.id}">${section.section_name}</option>`);
                                });
                            } else {
                                $('#sectionSelect').append('<option value="">No sections available</option>');
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                            console.log('Error details:', textStatus, errorThrown);
                            console.log('Response Text:', jqXHR.responseText);
                            alert('Failed to load sections please tray again');
                        }
                    });
                }
            });
        });
    </script>
<<<<<<< HEAD
=======









    @include('layout.footer');
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
