@include('layout.header')
@php
    $date = $user->joining_date;
    $joiningDate = date('d M Y', strtotime($date));
    $joiningDate; // Output: 04 Sep 2018

    $birthDate = $user->date_of_birth;
    $birthDate = date('d M Y', strtotime($birthDate));
    $birthDate; // Output: 04 Sep 2018

@endphp
<!-- Begin page -->
<div id="layout-wrapper">
    @include('admin_dashboard.header')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="profile-foreground position-relative mx-n4 mt-n4">
                    <div class="profile-wid-bg">
                        <img src="{{ asset('./public/assets/images/users/user-dummy-img.jpg') }}" alt=""
                            class="profile-wid-img" />
                    </div>
                </div>
                <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                    <div class="row g-4">
                        <div class="col-auto">
                            <div class="avatar-lg">
                                <img src="{{ asset('./public/assets/images/users/user-dummy-img.jpg') }}" alt="user-img"
                                    class="img-thumbnail rounded-circle" />
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col">
                            <div class="p-2">
                                <h3 class="text-white mb-1 text-uppercase">{{ $user['first_name'] }}</h3>
                                <p class="text-white text-opacity-75 text-uppercase">{{ $user['designation'] }}</p>
                                <div class="hstack text-white-50 gap-1">
                                    <div class="me-2"><i
                                            class="ri-map-pin-user-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>{{ $user->address_one ?? $user->address_two }}
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <!--end col-->
                        <div class="col-12 col-lg-auto order-last order-lg-0">
                            <div class="row text text-white-50 text-center">

                                <div class="col-lg-6 col-4">
                                    <div class="p-2">
                                        <h4 class="text-white mb-1 text-uppercase">Role</h4>
                                        <p class="fs-14 mb-0 text-uppercase">{{ $user->designation_role }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-4">
                                    <div class="p-2">
                                        <h4 class="text-white mb-1 text-uppercase">Status</h4>
                                        <p class="fs-14 mb-0 text-uppercase">{{ $user->status }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <div class="d-flex profile-wrapper">
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link fs-14 active" data-bs-toggle="tab"
                                            href="pages-profile.html#overview-tab" role="tab">
                                            <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span
                                                class="d-none d-md-inline-block">Overview</span>
                                        </a>
                                    </li>



                                </ul>
                                <div class="flex-shrink-0">
                                    <a href="{{ route('admin.edit.user', ['id' => $user->id]) }}"
                                        class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit
                                        Profile</a>
                                </div>
                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content pt-4 text-muted">
                                <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                    <div class="row">
                                        <div class="col-xxl-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-5">Profile staus</h5>
                                                    <div
                                                        class="progress animated-progress custom-progress progress-label">
                                                        @if ($user->status == 'approve' &&  $user->profile_image == null)
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 50%" aria-valuenow="50" aria-valuemin="50"
                                                                aria-valuemax="50">
                                                                <div class="label">50%</div>
                                                            </div>
                                                        @elseif ($user->status == 'active' && $user->profile_image !== null)
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 100%" aria-valuenow="100  "
                                                                aria-valuemin="0" aria-valuemax="100">
                                                                <div class="label"> 0%</div>
                                                            </div> 
                                                        @elseif ($user->status == 'active' &&  $user->profile_image == null)
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 80%" aria-valuenow="80  "
                                                                aria-valuemin="0" aria-valuemax="80">
                                                                <div class="label">80%</div>
                                                            </div>
                                                        @elseif ($user->status == 'inactive'  &&  $user->profile_image == null)
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 10%" aria-valuenow="10  "
                                                                aria-valuemin="0" aria-valuemax="10">
                                                                <div class="label">10%</div>
                                                            </div>
                                                        @elseif ($user->status == 'reject'  &&  $user->profile_image == null)
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                style="width: 5%" aria-valuenow="5" aria-valuemin="0"
                                                                aria-valuemax="5">
                                                                <div class="label">5%</div>
                                                            </div>
                                                        @else
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 30%" aria-valuenow="30  "
                                                                aria-valuemin="0" aria-valuemax="30">
                                                                <div class="label">30%</div>
                                                            </div>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-3">Info</h5>
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Full Name :</th>
                                                                    <td class="text-muted">
                                                                        {{ $user['first_name'] . ' ' . $user['middle_name'] . ' ' . $user['last_name'] }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Mobile :</th>
                                                                    <td class="text-muted">
                                                                        {{ $user['contact_number'] }}
                                                                    </td>
                                                                    <hr>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">NIC Number :
                                                                    </th>
                                                                    <td class="text-muted">{{ $user['nic_number'] }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">E-mail :</th>
                                                                    <td class="text-muted">{{ $user->email }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Date of Birth :
                                                                    </th>
                                                                    <td class="text-muted">{{ $birthDate }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Qualification :
                                                                    </th>
                                                                    <td class="text-muted">{{ $user->qualification }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Joining Date :
                                                                    </th>
                                                                    <td class="text-muted">{{ $joiningDate }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Department :
                                                                    </th>
                                                                    <td class="text-muted text-uppercase">
                                                                        {{ $user->department['department_name'] ?? 'NA' }}
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <th class="ps-0" scope="row">Section :</th>
                                                                    <td class="text-muted text-uppercase">
                                                                        {{ $user->section['section_name'] ?? 'NA' }}
                                                                    </td>

                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div><!-- end card body -->
                                            </div>
                                            <!-- end card -->

                                            {{-- <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title mb-4">Skills</h5>
                                                    <div class="d-flex flex-wrap gap-2 fs-15">
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary-subtle text-primary">Photoshop</a>
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary-subtle text-primary">illustrator</a>
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary-subtle text-primary">HTML</a>
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary-subtle text-primary">CSS</a>
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary-subtle text-primary">Javascript</a>
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary-subtle text-primary">Php</a>
                                                        <a href="javascript:void(0);"
                                                            class="badge bg-primary-subtle text-primary">Python</a>
                                                    </div>
                                                </div>
                                            </div> --}}



                                        </div>
                                        <!--end col-->
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body">

                                                    <h5 class="card-title mb-3">Designation</h5>
                                                    <p>{{ $user->skills }}</p>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12 col-md-12">
                                                            <div class="d-flex mt-4">
                                                                <div
                                                                    class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                    <div
                                                                        class="avatar-title bg-light rounded-circle fs-16 text-primary material-shadow">
                                                                        <i class="ri-user-2-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="mb-1">Designation :</p>
                                                                    <h6 class="text-truncate mb-0">
                                                                        {{ $user->designation }}</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end col-->

                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="card-body">

                                                    <h5 class="card-title mb-3">Address</h5>
                                                    <p>{{ $user->skills }}</p>
                                                    <hr>
                                                    <div class="row">

                                                        <!--end col-->

                                                        <div class="col-12 col-md-12">
                                                            <div class="d-flex mt-4">
                                                                <div
                                                                    class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                    <div
                                                                        class="avatar-title bg-light rounded-circle fs-16 text-primary material-shadow">
                                                                        <i class="ri-global-line"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="mb-1">Address 01 :</p>
                                                                    <h6 class="text-truncate mb-0">
                                                                        {{ $user->address_one }}</h6>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="mb-1">Address 02 :</p>
                                                                    <h6 class="text-truncate mb-0">
                                                                        {{ $user->address_two }}</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <!--end card-body-->
                                            </div><!-- end card -->
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end tab-pane-->
                            </div>
                            <!-- End Page-content -->
                            <!--end tab-content-->
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div><!-- container-fluid -->
        </div>
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
    </div><!-- end main content-->

    <!-- END layout-wrapper -->
    @include('admin_dashboard.preloader')

    <!-- Theme Settings -->

    @include('layout.footer');
