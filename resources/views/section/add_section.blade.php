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
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <input type="hidden" name="departmentId"
                                                        value="{{Auth::user()->department_id}}">
                                                    <input type="hidden" name="id"
                                                        value="{{ isset($section) ? $section->id : '' }}">

                                                    <label for="firstNameinput" class="form-label">Section Name</label>
                                                    <input type="text"
                                                        value="{{ isset($section) ? $section->section_name : '' }}"
                                                        class="form-control" placeholder="Enter section name"
                                                        id="firstNameinput" name="section">
                                                </div>
                                            </div>

                                            <!-- Last Name -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="lastNameinput" class="form-label">Section Lead Name</label>
                                                    <input type="text"
                                                        value="{{ isset($section) ? $section->section_lead_name : '' }}"
                                                        class="form-control" placeholder="Enter section lead name"
                                                        id="lastNameinput" name="sectionLeadName">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="mb-3">
                                                    <label for="statusSelect" class="form-label">Status</label>
                                                    <select name="status" class="form-select" data-choices=""
                                                        data-choices-sorting="true" id="statusSelect">

                                                        <option value="active"
                                                            {{ isset($section) && $section->status == 'active' ? 'selected' : '' }}>
                                                            Active</option>
                                                        <option value="inactive" selected
                                                            {{ isset($section) && $section->status == 'inactive' ? 'selected' : '' }}>
                                                            Inactive</option>
                                                     


                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                    <a class="btn btn-light"
                                                        href="{{ route('section.dashboard') }}">Cancel</a>
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
    
