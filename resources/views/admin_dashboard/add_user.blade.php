@php
    use Illuminate\Support\Facades\DB;

    // Fetch roles from the database
    $roles = DB::table('roles')->get();
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
                                                    <input type="text" value="{{ isset($user) ? $user->first_name : '' }}"
                                                        class="form-control" placeholder="Enter first name"
                                                        id="firstNameinput" name="firstName">
                                                </div>
                                            </div>

                                            <!-- Middle Name -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="middleNameinput" class="form-label">Middle Name</label>
                                                    <input type="text" value="{{ isset($user) ? $user->middle_name : '' }}"
                                                        class="form-control" placeholder="Enter middle name"
                                                        id="middleNameinput" name="middleName">
                                                </div>
                                            </div>

                                            <!-- Last Name -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="lastNameinput" class="form-label">Last Name</label>
                                                    <input type="text" value="{{ isset($user) ? $user->last_name : '' }}"
                                                        class="form-control" placeholder="Enter last name"
                                                        id="lastNameinput" name="lastName">
                                                </div>
                                            </div>

                                            <!-- Email -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="emailinput" class="form-label">Email</label>
                                                    <input type="email"  {{ isset($user) ? 'disabled' : '' }}
                                                        class="form-control" placeholder="Enter email"
                                                        id="emailinput" name="email">
                                                </div>
                                            </div>

                                            <!-- Password (disabled for editing) -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="passwordinput" class="form-label">Password</label>
                                                    <input type="password" class="form-control"
                                                        placeholder="Enter password" id="passwordinput"
                                                        name="password" {{ isset($user) ? 'disabled' : '' }}>
                                                </div>
                                            </div>

                                            <!-- Contact Number -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="contactNumberinput" class="form-label">Contact
                                                        Number</label>
                                                    <input type="tel" value="{{ isset($user) ? $user->contact_number : '' }}"
                                                        class="form-control" placeholder="Enter contact number"
                                                        id="contactNumberinput" name="contactNumber">
                                                </div>
                                            </div>
                                            <!-- Id Number -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="contactNumberinput" class="form-label">NIC
                                                        Number</label>
                                                    <input type="tel"  value="{{ isset($user) ? $user->nicNumber : '' }}"
                                                        class="form-control" placeholder="Enter NIC number"
                                                        id="contactNumberinput" name="nicNumber">
                                                </div>
                                            </div>

                                           

                                            <!-- Gender -->
                                            <div class="col-md-4">
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
                                            <div class="col-md-4">
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
                                                    <label for="skillsinput" class="form-label">Skills</label>
                                                    <textarea class="form-control" id="skillsinput" rows="3" name="skills" placeholder="Enter skills">{{ isset($user) ? $user->skills : '' }}</textarea>
                                                </div>
                                            </div>

                                            <!-- Address -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="addressinput" class="form-label">Address</label>
                                                    <textarea class="form-control" id="addressinput" rows="3" name="address" placeholder="Enter address">{{ isset($user) ? $user->address : '' }}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="departmentSelect"
                                                        class="form-label">Department</label>
                                                    <select class="form-select" name="department" data-choices=""
                                                        data-choices-sorting="true" id="departmentSelect">
                                                        <option value="admin"
                                                            {{ isset($user) && $user->department == 'admin' ? 'selected' : '' }}>
                                                            Admin</option>
                                                        <option value="hr"
                                                            {{ isset($user) && $user->department == 'hr' ? 'selected' : '' }}>
                                                            HR</option>
                                                        <option value="design"
                                                            {{ isset($user) && $user->department == 'design' ? 'selected' : '' }}>
                                                            Design</option>
                                                        <option value="ebook"
                                                            {{ isset($user) && $user->department == 'ebook' ? 'selected' : '' }}>
                                                            Ebook</option>
                                                        <option value="production"
                                                            {{ isset($user) && $user->department == 'production' ? 'selected' : '' }}>
                                                            Production</option>
                                                        <option value="ecommerce"
                                                            {{ isset($user) && $user->department == 'ecommerce' ? 'selected' : '' }}>
                                                            Ecommerce</option>
                                                        <option value="app"
                                                            {{ isset($user) && $user->department == 'app' ? 'selected' : '' }}>
                                                            App</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
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
                                            <div class="col-md-2">
                                                <div class="mb-3">
                                                    <label for="roleSelect" class="form-label">Role</label>
                                                    <select  name="role" class="form-select" data-choices=""
                                                        data-choices-sorting="true" id="roleSelect">
                                                        @foreach ($roles as $role)
                                                        <option value="{{$role->id}}"
                                                        {{ isset($user) && $user->role == $role->id ? 'selected' : '' }}>
                                                        {{$role->role_type}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            
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

                                            <div class="col-md-2">
                                                <div class="mb-3">
                                                    <label for="statusSelect" class="form-label">Status</label>
                                                    <select name="status"
                                                        class="form-select" data-choices=""
                                                        data-choices-sorting="true" id="statusSelect">
                                                        <option value="active"
                                                            {{ isset($user) && $user->status == 'active' ? 'selected' : '' }}>
                                                            Active</option>
                                                        <option value="inactive"
                                                            {{ isset($user) && $user->status == 'inactive' ? 'selected' : '' }}>
                                                            InActive</option>
                                                        <option value="pending" selected
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
                            </script> © Velzon.
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
