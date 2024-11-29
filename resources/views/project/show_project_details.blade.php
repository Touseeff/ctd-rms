@include('layout.header')
<!-- Begin page -->
<div id="layout-wrapper">
    @if(Auth::user()->role_id == 3)
    @include('hr_dashboard.header')
    @else
    @include('admin_dashboard.header')
    @endif
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                            <!-- Tab panes -->
                                            <div class="card">
                                                <h5 class="card-header">Department Details</h5>
                                             
                                                <div class="card-body">
                                                    <div class="table-responsive table-card">
                                                        <table class="table table-borderless mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="fw-medium" scope="row">Department:</td>
                                                                    <td>{{$department->department_name}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-medium" scope="row">Head Name</td>
                                                                    <td>t{{$department->department_head_name}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fw-medium" scope="row">Regulating Authority</td>
                                                                    <td>{{$department->regulating_authority}}</td>
                                                                </tr>
                                                              
                                                                <tr>
                                                                    <td class="fw-medium" scope="row">Status</td>
                                                                    <td>
                                                                    @if ($department->status == 'active')
                                                                    <span class="badge badge-label bg-success"><i class="mdi mdi-circle-medium"></i>Active</span>
                                                                    @else
                                                                    <span class="badge badge-label bg-danger"><i class="mdi mdi-circle-medium"></i> Inative</span>
                                                                    @endif
                                                                    </td>
                                                                </tr>
                                                             
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="card-header " style="display: flex; justify-content: end;">
                                
                                                        <a class="btn btn-dark" href="{{route('department.view')}}">Cancel</a>
                                                        <a class="btn btn-primary" style="margin-left:10px" href="{{route('edit.department',['id'=>$department->id])}}">Edit Department</a>
                                                        
                                                    </div>
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
                        </script> © Craf Tech Digital.
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
    @if(Auth::user()->role_id = 3)
    @include('hr_dashboard.preloader')
    @else
    @include('admin_dashboard.preloader')
    @endif
    <!-- Theme Settings -->

    @include('layout.footer');
