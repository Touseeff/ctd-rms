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
                {{-- show users str --}}

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header" style="display: flex; justify-content: end;">
                                {{-- <h5 class="card-title mb-0"></h5> --}}
                                <a class="btn btn-primary" href="{{ route('create.user') }}">Add User</a>
                                {{-- <button id="addRow" class="btn btn-primary">Add New Row</button> --}}
                            </div>

                            <div class="card-body">
                                <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 10px;">
                                                {{-- <div class="form-check">
                                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll"
                                                        value="option">
                                                </div> --}}
                                            </th>
                                            <th>SR No.</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
<<<<<<< HEAD
                                            <th>Password</th>
                                            <th>Department</th>
                                            <th>Section</th>
=======
                                            <th>Department</th>
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                                            <th>Designation</th>
                                            <th>Designation Role</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
<<<<<<< HEAD
                               
=======
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                                    <tbody>
                                        @php
                                            $count = 1;
                                        @endphp
                                        @foreach ($users as $user)
                                            <tr>
<<<<<<< HEAD
                                                {{-- <pre>{{ print_r($user->toArray()) }}</pre> --}}
=======
>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a
                                                <th scope="row">
                                                    {{-- <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div> --}}
                                                </th>
<<<<<<< HEAD

                                                <td>{{ $count }}</td>
                                                <td class="text-capitalize">
                                                    {{ $user['first_name'] . ' ' . $user['middle_name'] . ' ' . $user['last_name'] }}
                                                </td>
                                                <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                                <td>{{ $user->password }}</td>
                                                {{-- <td>{{ $user->department->department_name ?? 'N/A' }} --}}
                                                <td  class="text-capitalize">{{ $user->department['department_name'] ?? 'N/A' }}</td>
                                                <td  class="text-capitalize">{{ $user->section['section_name'] ?? 'N/A' }}</td>
                                                {{-- <td>{{ ($user->department['department_name'] true) }}</td> --}}
                                                </td>
                                                <td  class="text-capitalize">{{ $user->designation }}</td>

                                                <td  class="text-capitalize">{{ $user->designation_role }}</td>
=======
                                                <td>{{ $count }}</td>
                                                <td class="text-capitalize" >{{ $user['first_name'] . ' ' . $user['middle_name'] . ' ' . $user['last_name'] }}
                                                </td>
                                                <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                                <td>{{ $user->department }}
                                                </td>
                                                <td>{{ $user->designation }}</td>

                                                <td>{{ $user->designation_role }}</td>

>>>>>>> 2b95eb976fe92153eb882815a4e7388932a1b19a

                                                @if ($user->status == 'active')
                                                    <td><span class="badge bg-success text-uppercase">Active</span>
                                                    </td>
                                                @elseif ($user->status == 'inactive')
                                                    <td><span class="badge bg-primary text-uppercase">Inactive</span>
                                                    </td>
                                                @elseif ($user->status == 'approve')
                                                    <td><span class="badge bg-secondary text-uppercase">Approve</span>
                                                    </td>
                                                @elseif ($user->status == 'reject')
                                                    <td><span class="badge bg-danger text-uppercase">Reject</span>
                                                    </td>
                                                @else
                                                    <td><span class="badge bg-warning text-uppercase">Pending</span>
                                                    </td>
                                                @endif
                                                <td>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-soft-secondary btn-sm dropdown"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="{{ route('view.user', ['id' => $user->id]) }}"
                                                                    class="dropdown-item"><i
                                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                    View</a></li>
                                                            <li>
                                                                <a href="{{ route('edit.user', ['id' => $user->id]) }}"
                                                                    class="dropdown-item edit-item-btn">
                                                                    <i
                                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                    Edit
                                                                </a>
                                                            </li>

                                                            <a href="#"
                                                                class="dropdown-item disabled remove-item-btn">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            @php
                                                $count++;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                {{-- show users end --}}


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

@include('layout.footer');
