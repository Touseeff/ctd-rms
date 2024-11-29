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
                                            <!-- User ID, Department ID, Section ID (Hidden Fields) -->
                                            <input type="hidden" name="id" value="{{isset($project) ? $project->id : ''}}">
                                            <input type="hidden" name="userId" value="{{ isset($project) ? $project->user_id : Auth::user()->id }}">
                                            <input type="hidden" name="departmentId" value="{{ isset($project) ? $project->department_id : Auth::user()->department_id }}">
                                            <input type="hidden" name="sectionId" value="{{ isset($project) ? $project->section_id : Auth::user()->section_id }}">
                                    
                                            <!-- Project Title -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstNameinput" class="form-label">Project Title</label>
                                                    <input type="text" 
                                                           class="form-control" 
                                                           placeholder="Enter project title" 
                                                           id="firstNameinput"
                                                           value="{{ isset($project) ? $project->project_name : '' }}" 
                                                           name="projectTitle">
                                                </div>
                                            </div>
                                    
                                            <!-- Project Owner Name -->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="lastNameinput" class="form-label">Project Owner Name</label>
                                                    <input type="text" 
                                                           class="form-control" 
                                                           placeholder="Enter Project Owner Name" 
                                                           id="lastNameinput"
                                                           value="{{ isset($project) ? $project->poject_description : '' }}" 
                                                           name="projectOwnerName">
                                                </div>
                                            </div>
                                    
                                            <!-- Status -->
                                            <div class="col-md-2">
                                                <div class="mb-3">
                                                    <label for="statusSelect" class="form-label">Status</label>
                                                    <select name="status" class="form-select" id="statusSelect">
                                                        <option value="active" {{ isset($project) && $project->status == 'active' ? 'selected' : '' }}>
                                                            Active
                                                        </option>
                                                        <option value="inactive" {{ isset($project) && $project->status == 'inactive' ? 'selected' : '' }}>
                                                            Inactive
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                    
                                            <!-- Submit and Cancel Buttons -->
                                            <div class="col-lg-12">
                                                <div class="text-end">
                                                    <a class="btn btn-light" href="{{ route('hr.dashboard') }}">Cancel</a>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
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
