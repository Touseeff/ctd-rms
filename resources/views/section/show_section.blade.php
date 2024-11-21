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
                {{-- show users str --}}

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header" style="display: flex; justify-content: end;">
                                {{-- <h5 class="card-title mb-0"></h5> --}}
                                <a class="btn btn-primary" href="{{ route('deprtment.create') }}">Add Department</a>
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
                                            <th>Department</th>
                                            <th>Department Head Name</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                        @php
                                            $count = 1;
                                        @endphp
                                        @foreach ($sectins as $secton)
                                            <tr>
                                                {{-- <pre>{{ print_r($user->toArray()) }}</pre> --}}
                                                <th scope="row">
                                                    {{-- <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox"
                                                            name="checkAll" value="option1">
                                                    </div> --}}
                                                </th>

                                                <td>{{ $count }}</td>
                                            
                                                <td  class="text-capitalize">{{$secton->department_name }}</td>
                                                <td  class="text-capitalize">{{$secton->department_head_name }}</td>
                                                @if ($department->status == 'active')
                                                <td>
                                                   
                                                    <span class="badge badge-label bg-success"><i class="mdi mdi-circle-medium"></i>Active</span>
                                                  
                                                    </td>   
                                              
                                                @else
                                                <td>
                                                   
                                                    <span class="badge badge-label bg-danger"><i class="mdi mdi-circle-medium"></i>Inactive</span>
                                                  
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
                                                            <li><a href="{{ route('show.department', ['id' =>$secton->id]) }}"
                                                                    class="dropdown-item"><i
                                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                    View</a></li>   
                                                            <li>
                                                                <a href="{{ route('edit.department', ['id' =>$secton->id]) }}"
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
