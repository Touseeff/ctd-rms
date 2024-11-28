@include('layout.header')
<!-- Begin page -->
<div id="layout-wrapper">
    @include('head_dashboard.header')


    <!-- ====== -->
    <!-- Start right Content here -->
    <!-- ====== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <!-- end page title -->
                <div class="card">
                    <div class="card-body">
                        <div class="row g-2">
                            <div class="col-lg-auto">
                                <div class="hstack gap-2">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#createboardModal" data-user-id="{{$board->user_id}}" data-workspace-id="{{$board->id}}">
                                        <i class="ri-add-line align-bottom me-1"></i> Create Board
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-auto">
                                <div class="hstack gap-2">
                                    <button class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#createprojectModal" data-user-id="4343" data-workspace-id="434">
                                        <i class="ri-add-line align-bottom me-1"></i> Create Project
                                    </button>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->

                <div class="tasks-board mb-3" id="kanbanboard">
                    <div class="tasks-list">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1">
                                <h6 class="fs-14 text-uppercase fw-semibold mb-0">
                                    Board Name
                                    <small class="badge bg-info align-bottom ms-1 totaltask-badge">3</small>
                                </h6>
                            </div>
                       
                        </div>
                        <div data-simplebar="init" class="tasks-wrapper px-3 mx-n3 simplebar-scrollable-y">
                            <div class="simplebar-wrapper" style="margin: 0px -16px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                            aria-label="scrollable content"
                                            style="height: auto; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 0px 16px;">
                                                <div id="reviews-task" class="tasks">
                                                    <div class="card tasks-box">
                                                        <div class="card-body">
                                                            <div class="d-flex mb-2">
                                                                <a href="javascript:void(0)"
                                                                    class="text-muted fw-medium fs-14 flex-grow-1">#VL2453</a>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted"
                                                                        id="dropdownMenuLink7"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"><i
                                                                            class="ri-more-fill"></i></a>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuLink7">
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-details.html"><i
                                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-kanban.html#"><i
                                                                                    class="ri-edit-2-line align-bottom me-2 text-muted"></i>
                                                                                Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                href="apps-tasks-kanban.html#deleteRecordModal"><i
                                                                                    class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i>
                                                                                Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h6 class="fs-15 text-truncate task-title">
                                                                <a href="apps-tasks-details.html"
                                                                    class="d-block">Create Product Animations</a>
                                                            </h6>
                                                            <div class="tasks-img rounded"
                                                                style="background-image: url('assets/images/small/img-7.jpg');">
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Ecommerce</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="avatar-group">
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" aria-label="Anna"
                                                                            data-bs-original-title="Anna">
                                                                            <img src="assets/images/users/avatar-1.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer border-top-dashed">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <span class="text-muted"><i
                                                                            class="ri-time-line align-bottom"></i> 16
                                                                        Nov,
                                                                        2021</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <ul class="link-inline mb-0">
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-eye-line align-bottom"></i>
                                                                                08</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-question-answer-line align-bottom"></i>
                                                                                54</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-attachment-2 align-bottom"></i>
                                                                                28</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 100%" aria-valuenow="55"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                    <div class="card tasks-box">
                                                        <div class="card-body">
                                                            <div class="d-flex mb-2">
                                                                <a href="javascript:void(0)"
                                                                    class="text-muted fw-medium fs-14 flex-grow-1">#VL2340</a>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted"
                                                                        id="dropdownMenuLink8"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"><i
                                                                            class="ri-more-fill"></i></a>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuLink8">
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-details.html"><i
                                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-kanban.html#"><i
                                                                                    class="ri-edit-2-line align-bottom me-2 text-muted"></i>
                                                                                Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                href="apps-tasks-kanban.html#deleteRecordModal"><i
                                                                                    class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i>
                                                                                Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h6 class="fs-15 text-truncate task-title">
                                                                <a href="apps-tasks-details.html"
                                                                    class="d-block">Product Features Analysis</a>
                                                            </h6>
                                                            <p class="text-muted">
                                                                An essential part of strategic planning is running a
                                                                product feature analysis.
                                                            </p>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Product</span>
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Analysis</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="avatar-group">
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" aria-label="Nancy"
                                                                            data-bs-original-title="Nancy">
                                                                            <img src="assets/images/users/avatar-5.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            aria-label="Alexis"
                                                                            data-bs-original-title="Alexis">
                                                                            <img src="assets/images/users/avatar-6.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                        <div class="card-footer border-top-dashed">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <span class="text-muted"><i
                                                                            class="ri-time-line align-bottom"></i> 05
                                                                        Jan,
                                                                        2022</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <ul class="link-inline mb-0">
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-eye-line align-bottom"></i>
                                                                                14</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-question-answer-line align-bottom"></i>
                                                                                31</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-attachment-2 align-bottom"></i>
                                                                                07</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 67%" aria-valuenow="67"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                    <div class="card tasks-box">
                                                        <div class="card-body">
                                                            <div class="d-flex mb-2">
                                                                <a href="javascript:void(0)"
                                                                    class="text-muted fw-medium fs-14 flex-grow-1">#VL2462</a>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted"
                                                                        id="dropdownMenuLink9"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"><i
                                                                            class="ri-more-fill"></i></a>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuLink9">
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-details.html"><i
                                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-kanban.html#"><i
                                                                                    class="ri-edit-2-line align-bottom me-2 text-muted"></i>
                                                                                Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                href="apps-tasks-kanban.html#deleteRecordModal"><i
                                                                                    class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i>
                                                                                Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h6 class="fs-15 text-truncate task-title">
                                                                <a href="apps-tasks-details.html"
                                                                    class="d-block">Create a Graph of Sketch</a>
                                                            </h6>
                                                            <p class="text-muted">
                                                                To make a pie chart with equal slices create a perfect
                                                                circle by selecting an Oval Tool.
                                                            </p>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Sketch</span>
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Marketing</span>
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Design</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="avatar-group">
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            aria-label="Alexis"
                                                                            data-bs-original-title="Alexis">
                                                                            <img src="assets/images/users/avatar-4.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            aria-label="Thomas"
                                                                            data-bs-original-title="Thomas">
                                                                            <img src="assets/images/users/avatar-8.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            aria-label="Herbert"
                                                                            data-bs-original-title="Herbert">
                                                                            <img src="assets/images/users/avatar-2.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" aria-label="Anna"
                                                                            data-bs-original-title="Anna">
                                                                            <img src="assets/images/users/avatar-1.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer border-top-dashed">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <span class="text-muted"><i
                                                                            class="ri-time-line align-bottom"></i> 05
                                                                        Nov,
                                                                        2021</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <ul class="link-inline mb-0">
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-eye-line align-bottom"></i>
                                                                                12</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-question-answer-line align-bottom"></i>
                                                                                74</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-attachment-2 align-bottom"></i>
                                                                                37</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: 332px; height: 841px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar"
                                    style="height: 25px; transform: translate3d(0px, 0px, 0px); display: block;">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="my-3">
                            <button class="btn btn-soft-info w-100" data-bs-toggle="modal"
                                data-bs-target="#creatertaskModal">
                                Add More
                            </button>
                        </div> --}}
                    </div>
                    <div class="tasks-list">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1">
                                <h6 class="fs-14 text-uppercase fw-semibold mb-0">
                                    Board Name
                                    <small class="badge bg-info align-bottom ms-1 totaltask-badge">3</small>
                                </h6>
                            </div>
                       
                        </div>
                        <div data-simplebar="init" class="tasks-wrapper px-3 mx-n3 simplebar-scrollable-y">
                            <div class="simplebar-wrapper" style="margin: 0px -16px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                            aria-label="scrollable content"
                                            style="height: auto; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 0px 16px;">
                                                <div id="reviews-task" class="tasks">
                                                    <div class="card tasks-box">
                                                        <div class="card-body">
                                                            <div class="d-flex mb-2">
                                                                <a href="javascript:void(0)"
                                                                    class="text-muted fw-medium fs-14 flex-grow-1">#VL2453</a>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted"
                                                                        id="dropdownMenuLink7"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"><i
                                                                            class="ri-more-fill"></i></a>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuLink7">
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-details.html"><i
                                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-kanban.html#"><i
                                                                                    class="ri-edit-2-line align-bottom me-2 text-muted"></i>
                                                                                Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                href="apps-tasks-kanban.html#deleteRecordModal"><i
                                                                                    class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i>
                                                                                Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h6 class="fs-15 text-truncate task-title">
                                                                <a href="apps-tasks-details.html"
                                                                    class="d-block">Create Product Animations</a>
                                                            </h6>
                                                            <div class="tasks-img rounded"
                                                                style="background-image: url('assets/images/small/img-7.jpg');">
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Ecommerce</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="avatar-group">
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" aria-label="Anna"
                                                                            data-bs-original-title="Anna">
                                                                            <img src="assets/images/users/avatar-1.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer border-top-dashed">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <span class="text-muted"><i
                                                                            class="ri-time-line align-bottom"></i> 16
                                                                        Nov,
                                                                        2021</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <ul class="link-inline mb-0">
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-eye-line align-bottom"></i>
                                                                                08</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-question-answer-line align-bottom"></i>
                                                                                54</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-attachment-2 align-bottom"></i>
                                                                                28</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 100%" aria-valuenow="55"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                    <div class="card tasks-box">
                                                        <div class="card-body">
                                                            <div class="d-flex mb-2">
                                                                <a href="javascript:void(0)"
                                                                    class="text-muted fw-medium fs-14 flex-grow-1">#VL2340</a>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted"
                                                                        id="dropdownMenuLink8"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"><i
                                                                            class="ri-more-fill"></i></a>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuLink8">
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-details.html"><i
                                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-kanban.html#"><i
                                                                                    class="ri-edit-2-line align-bottom me-2 text-muted"></i>
                                                                                Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                href="apps-tasks-kanban.html#deleteRecordModal"><i
                                                                                    class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i>
                                                                                Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h6 class="fs-15 text-truncate task-title">
                                                                <a href="apps-tasks-details.html"
                                                                    class="d-block">Product Features Analysis</a>
                                                            </h6>
                                                            <p class="text-muted">
                                                                An essential part of strategic planning is running a
                                                                product feature analysis.
                                                            </p>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Product</span>
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Analysis</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="avatar-group">
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" aria-label="Nancy"
                                                                            data-bs-original-title="Nancy">
                                                                            <img src="assets/images/users/avatar-5.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            aria-label="Alexis"
                                                                            data-bs-original-title="Alexis">
                                                                            <img src="assets/images/users/avatar-6.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                        <div class="card-footer border-top-dashed">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <span class="text-muted"><i
                                                                            class="ri-time-line align-bottom"></i> 05
                                                                        Jan,
                                                                        2022</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <ul class="link-inline mb-0">
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-eye-line align-bottom"></i>
                                                                                14</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-question-answer-line align-bottom"></i>
                                                                                31</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-attachment-2 align-bottom"></i>
                                                                                07</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 67%" aria-valuenow="67"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                    <div class="card tasks-box">
                                                        <div class="card-body">
                                                            <div class="d-flex mb-2">
                                                                <a href="javascript:void(0)"
                                                                    class="text-muted fw-medium fs-14 flex-grow-1">#VL2462</a>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted"
                                                                        id="dropdownMenuLink9"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"><i
                                                                            class="ri-more-fill"></i></a>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuLink9">
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-details.html"><i
                                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-kanban.html#"><i
                                                                                    class="ri-edit-2-line align-bottom me-2 text-muted"></i>
                                                                                Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                href="apps-tasks-kanban.html#deleteRecordModal"><i
                                                                                    class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i>
                                                                                Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h6 class="fs-15 text-truncate task-title">
                                                                <a href="apps-tasks-details.html"
                                                                    class="d-block">Create a Graph of Sketch</a>
                                                            </h6>
                                                            <p class="text-muted">
                                                                To make a pie chart with equal slices create a perfect
                                                                circle by selecting an Oval Tool.
                                                            </p>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Sketch</span>
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Marketing</span>
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Design</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="avatar-group">
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            aria-label="Alexis"
                                                                            data-bs-original-title="Alexis">
                                                                            <img src="assets/images/users/avatar-4.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            aria-label="Thomas"
                                                                            data-bs-original-title="Thomas">
                                                                            <img src="assets/images/users/avatar-8.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            aria-label="Herbert"
                                                                            data-bs-original-title="Herbert">
                                                                            <img src="assets/images/users/avatar-2.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" aria-label="Anna"
                                                                            data-bs-original-title="Anna">
                                                                            <img src="assets/images/users/avatar-1.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer border-top-dashed">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <span class="text-muted"><i
                                                                            class="ri-time-line align-bottom"></i> 05
                                                                        Nov,
                                                                        2021</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <ul class="link-inline mb-0">
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-eye-line align-bottom"></i>
                                                                                12</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-question-answer-line align-bottom"></i>
                                                                                74</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-attachment-2 align-bottom"></i>
                                                                                37</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: 332px; height: 841px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar"
                                    style="height: 25px; transform: translate3d(0px, 0px, 0px); display: block;">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="my-3">
                            <button class="btn btn-soft-info w-100" data-bs-toggle="modal"
                                data-bs-target="#creatertaskModal">
                                Add More
                            </button>
                        </div> --}}
                    </div>
                    <div class="tasks-list">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1">
                                <h6 class="fs-14 text-uppercase fw-semibold mb-0">
                                    Board Name
                                    <small class="badge bg-info align-bottom ms-1 totaltask-badge">3</small>
                                </h6>
                            </div>
                       
                        </div>
                        <div data-simplebar="init" class="tasks-wrapper px-3 mx-n3 simplebar-scrollable-y">
                            <div class="simplebar-wrapper" style="margin: 0px -16px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                            aria-label="scrollable content"
                                            style="height: auto; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 0px 16px;">
                                                <div id="reviews-task" class="tasks">
                                                    <div class="card tasks-box">
                                                        <div class="card-body">
                                                            <div class="d-flex mb-2">
                                                                <a href="javascript:void(0)"
                                                                    class="text-muted fw-medium fs-14 flex-grow-1">#VL2453</a>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted"
                                                                        id="dropdownMenuLink7"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"><i
                                                                            class="ri-more-fill"></i></a>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuLink7">
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-details.html"><i
                                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-kanban.html#"><i
                                                                                    class="ri-edit-2-line align-bottom me-2 text-muted"></i>
                                                                                Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                href="apps-tasks-kanban.html#deleteRecordModal"><i
                                                                                    class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i>
                                                                                Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h6 class="fs-15 text-truncate task-title">
                                                                <a href="apps-tasks-details.html"
                                                                    class="d-block">Create Product Animations</a>
                                                            </h6>
                                                            <div class="tasks-img rounded"
                                                                style="background-image: url('assets/images/small/img-7.jpg');">
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Ecommerce</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="avatar-group">
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" aria-label="Anna"
                                                                            data-bs-original-title="Anna">
                                                                            <img src="assets/images/users/avatar-1.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer border-top-dashed">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <span class="text-muted"><i
                                                                            class="ri-time-line align-bottom"></i> 16
                                                                        Nov,
                                                                        2021</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <ul class="link-inline mb-0">
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-eye-line align-bottom"></i>
                                                                                08</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-question-answer-line align-bottom"></i>
                                                                                54</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-attachment-2 align-bottom"></i>
                                                                                28</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 100%" aria-valuenow="55"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                    <div class="card tasks-box">
                                                        <div class="card-body">
                                                            <div class="d-flex mb-2">
                                                                <a href="javascript:void(0)"
                                                                    class="text-muted fw-medium fs-14 flex-grow-1">#VL2340</a>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted"
                                                                        id="dropdownMenuLink8"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"><i
                                                                            class="ri-more-fill"></i></a>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuLink8">
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-details.html"><i
                                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-kanban.html#"><i
                                                                                    class="ri-edit-2-line align-bottom me-2 text-muted"></i>
                                                                                Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                href="apps-tasks-kanban.html#deleteRecordModal"><i
                                                                                    class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i>
                                                                                Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h6 class="fs-15 text-truncate task-title">
                                                                <a href="apps-tasks-details.html"
                                                                    class="d-block">Product Features Analysis</a>
                                                            </h6>
                                                            <p class="text-muted">
                                                                An essential part of strategic planning is running a
                                                                product feature analysis.
                                                            </p>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Product</span>
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Analysis</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="avatar-group">
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" aria-label="Nancy"
                                                                            data-bs-original-title="Nancy">
                                                                            <img src="assets/images/users/avatar-5.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            aria-label="Alexis"
                                                                            data-bs-original-title="Alexis">
                                                                            <img src="assets/images/users/avatar-6.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                        <div class="card-footer border-top-dashed">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <span class="text-muted"><i
                                                                            class="ri-time-line align-bottom"></i> 05
                                                                        Jan,
                                                                        2022</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <ul class="link-inline mb-0">
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-eye-line align-bottom"></i>
                                                                                14</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-question-answer-line align-bottom"></i>
                                                                                31</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-attachment-2 align-bottom"></i>
                                                                                07</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 67%" aria-valuenow="67"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                    <div class="card tasks-box">
                                                        <div class="card-body">
                                                            <div class="d-flex mb-2">
                                                                <a href="javascript:void(0)"
                                                                    class="text-muted fw-medium fs-14 flex-grow-1">#VL2462</a>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted"
                                                                        id="dropdownMenuLink9"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"><i
                                                                            class="ri-more-fill"></i></a>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuLink9">
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-details.html"><i
                                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-kanban.html#"><i
                                                                                    class="ri-edit-2-line align-bottom me-2 text-muted"></i>
                                                                                Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                href="apps-tasks-kanban.html#deleteRecordModal"><i
                                                                                    class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i>
                                                                                Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h6 class="fs-15 text-truncate task-title">
                                                                <a href="apps-tasks-details.html"
                                                                    class="d-block">Create a Graph of Sketch</a>
                                                            </h6>
                                                            <p class="text-muted">
                                                                To make a pie chart with equal slices create a perfect
                                                                circle by selecting an Oval Tool.
                                                            </p>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Sketch</span>
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Marketing</span>
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Design</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="avatar-group">
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            aria-label="Alexis"
                                                                            data-bs-original-title="Alexis">
                                                                            <img src="assets/images/users/avatar-4.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            aria-label="Thomas"
                                                                            data-bs-original-title="Thomas">
                                                                            <img src="assets/images/users/avatar-8.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            aria-label="Herbert"
                                                                            data-bs-original-title="Herbert">
                                                                            <img src="assets/images/users/avatar-2.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" aria-label="Anna"
                                                                            data-bs-original-title="Anna">
                                                                            <img src="assets/images/users/avatar-1.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer border-top-dashed">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <span class="text-muted"><i
                                                                            class="ri-time-line align-bottom"></i> 05
                                                                        Nov,
                                                                        2021</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <ul class="link-inline mb-0">
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-eye-line align-bottom"></i>
                                                                                12</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-question-answer-line align-bottom"></i>
                                                                                74</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-attachment-2 align-bottom"></i>
                                                                                37</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: 332px; height: 841px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar"
                                    style="height: 25px; transform: translate3d(0px, 0px, 0px); display: block;">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="my-3">
                            <button class="btn btn-soft-info w-100" data-bs-toggle="modal"
                                data-bs-target="#creatertaskModal">
                                Add More
                            </button>
                        </div> --}}
                    </div>
                    <div class="tasks-list">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1">
                                <h6 class="fs-14 text-uppercase fw-semibold mb-0">
                                    Board Name
                                    <small class="badge bg-info align-bottom ms-1 totaltask-badge">3</small>
                                </h6>
                            </div>
                       
                        </div>
                        <div data-simplebar="init" class="tasks-wrapper px-3 mx-n3 simplebar-scrollable-y">
                            <div class="simplebar-wrapper" style="margin: 0px -16px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                            aria-label="scrollable content"
                                            style="height: auto; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 0px 16px;">
                                                <div id="reviews-task" class="tasks">
                                                    <div class="card tasks-box">
                                                        <div class="card-body">
                                                            <div class="d-flex mb-2">
                                                                <a href="javascript:void(0)"
                                                                    class="text-muted fw-medium fs-14 flex-grow-1">#VL2453</a>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted"
                                                                        id="dropdownMenuLink7"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"><i
                                                                            class="ri-more-fill"></i></a>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuLink7">
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-details.html"><i
                                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-kanban.html#"><i
                                                                                    class="ri-edit-2-line align-bottom me-2 text-muted"></i>
                                                                                Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                href="apps-tasks-kanban.html#deleteRecordModal"><i
                                                                                    class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i>
                                                                                Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h6 class="fs-15 text-truncate task-title">
                                                                <a href="apps-tasks-details.html"
                                                                    class="d-block">Create Product Animations</a>
                                                            </h6>
                                                            <div class="tasks-img rounded"
                                                                style="background-image: url('assets/images/small/img-7.jpg');">
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Ecommerce</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="avatar-group">
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" aria-label="Anna"
                                                                            data-bs-original-title="Anna">
                                                                            <img src="assets/images/users/avatar-1.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer border-top-dashed">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <span class="text-muted"><i
                                                                            class="ri-time-line align-bottom"></i> 16
                                                                        Nov,
                                                                        2021</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <ul class="link-inline mb-0">
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-eye-line align-bottom"></i>
                                                                                08</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-question-answer-line align-bottom"></i>
                                                                                54</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-attachment-2 align-bottom"></i>
                                                                                28</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 100%" aria-valuenow="55"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                    <div class="card tasks-box">
                                                        <div class="card-body">
                                                            <div class="d-flex mb-2">
                                                                <a href="javascript:void(0)"
                                                                    class="text-muted fw-medium fs-14 flex-grow-1">#VL2340</a>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted"
                                                                        id="dropdownMenuLink8"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"><i
                                                                            class="ri-more-fill"></i></a>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuLink8">
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-details.html"><i
                                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-kanban.html#"><i
                                                                                    class="ri-edit-2-line align-bottom me-2 text-muted"></i>
                                                                                Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                href="apps-tasks-kanban.html#deleteRecordModal"><i
                                                                                    class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i>
                                                                                Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h6 class="fs-15 text-truncate task-title">
                                                                <a href="apps-tasks-details.html"
                                                                    class="d-block">Product Features Analysis</a>
                                                            </h6>
                                                            <p class="text-muted">
                                                                An essential part of strategic planning is running a
                                                                product feature analysis.
                                                            </p>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Product</span>
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Analysis</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="avatar-group">
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" aria-label="Nancy"
                                                                            data-bs-original-title="Nancy">
                                                                            <img src="assets/images/users/avatar-5.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            aria-label="Alexis"
                                                                            data-bs-original-title="Alexis">
                                                                            <img src="assets/images/users/avatar-6.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                        <div class="card-footer border-top-dashed">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <span class="text-muted"><i
                                                                            class="ri-time-line align-bottom"></i> 05
                                                                        Jan,
                                                                        2022</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <ul class="link-inline mb-0">
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-eye-line align-bottom"></i>
                                                                                14</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-question-answer-line align-bottom"></i>
                                                                                31</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-attachment-2 align-bottom"></i>
                                                                                07</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                style="width: 67%" aria-valuenow="67"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                    <div class="card tasks-box">
                                                        <div class="card-body">
                                                            <div class="d-flex mb-2">
                                                                <a href="javascript:void(0)"
                                                                    class="text-muted fw-medium fs-14 flex-grow-1">#VL2462</a>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="text-muted"
                                                                        id="dropdownMenuLink9"
                                                                        data-bs-toggle="dropdown"
                                                                        aria-expanded="false"><i
                                                                            class="ri-more-fill"></i></a>
                                                                    <ul class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuLink9">
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-details.html"><i
                                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                href="apps-tasks-kanban.html#"><i
                                                                                    class="ri-edit-2-line align-bottom me-2 text-muted"></i>
                                                                                Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item"
                                                                                data-bs-toggle="modal"
                                                                                href="apps-tasks-kanban.html#deleteRecordModal"><i
                                                                                    class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i>
                                                                                Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h6 class="fs-15 text-truncate task-title">
                                                                <a href="apps-tasks-details.html"
                                                                    class="d-block">Create a Graph of Sketch</a>
                                                            </h6>
                                                            <p class="text-muted">
                                                                To make a pie chart with equal slices create a perfect
                                                                circle by selecting an Oval Tool.
                                                            </p>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-grow-1">
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Sketch</span>
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Marketing</span>
                                                                    <span
                                                                        class="badge bg-primary-subtle text-primary">Design</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="avatar-group">
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            aria-label="Alexis"
                                                                            data-bs-original-title="Alexis">
                                                                            <img src="assets/images/users/avatar-4.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            aria-label="Thomas"
                                                                            data-bs-original-title="Thomas">
                                                                            <img src="assets/images/users/avatar-8.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            aria-label="Herbert"
                                                                            data-bs-original-title="Herbert">
                                                                            <img src="assets/images/users/avatar-2.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                        <a href="javascript: void(0);"
                                                                            class="avatar-group-item material-shadow"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top" aria-label="Anna"
                                                                            data-bs-original-title="Anna">
                                                                            <img src="assets/images/users/avatar-1.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer border-top-dashed">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    <span class="text-muted"><i
                                                                            class="ri-time-line align-bottom"></i> 05
                                                                        Nov,
                                                                        2021</span>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <ul class="link-inline mb-0">
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-eye-line align-bottom"></i>
                                                                                12</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-question-answer-line align-bottom"></i>
                                                                                74</a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="javascript:void(0)"
                                                                                class="text-muted"><i
                                                                                    class="ri-attachment-2 align-bottom"></i>
                                                                                37</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: 332px; height: 841px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar"
                                    style="height: 25px; transform: translate3d(0px, 0px, 0px); display: block;">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="my-3">
                            <button class="btn btn-soft-info w-100" data-bs-toggle="modal"
                                data-bs-target="#creatertaskModal">
                                Add More
                            </button>
                        </div> --}}
                    </div>

                </div>
                <!--end task-board-->


                <div class="modal fade" id="createboardModal" tabindex="-1"
                    aria-labelledby="createboardModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0">
                            <div class="modal-header p-3 bg-info-subtle">
                                <h5 class="modal-title" id="createboardModalLabel">
                                    Add Board
                                </h5>
                                <button type="button" class="btn-close" id="addBoardBtn-close"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('add.user-board') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="userId" >
                                    <input type="hidden" name="workspaceId" >
                                    <label for="boardName" class="form-label">Board Name</label>
                                    <input type="text" name="boardName" class="form-control" id="boardName"
                                        placeholder="Enter board name">
                                    <div class="mt-4 hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Add Board</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!--end add board modal-->
                <div class="modal fade" id="creatertaskModal" tabindex="-1"
                    aria-labelledby="creatertaskModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0">
                            <div class="modal-header p-3 bg-info-subtle">
                                <h5 class="modal-title" id="creatertaskModalLabel">
                                    Create New Task
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="apps-tasks-kanban.html#">
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <label for="projectName" class="form-label">Project Name</label>
                                            <input type="text" class="form-control" id="projectName"
                                                placeholder="Enter project name">
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <label for="sub-tasks" class="form-label">Task Title</label>
                                            <input type="text" class="form-control" id="sub-tasks"
                                                placeholder="Task title">
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <label for="task-description" class="form-label">Task
                                                Description</label>
                                            <textarea class="form-control" id="task-description" rows="3" placeholder="Task description"></textarea>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <label for="formFile" class="form-label">Tasks Images</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <label for="tasks-progress" class="form-label">Add Team Member</label>
                                            <div data-simplebar="init" style="height: 95px">
                                                <div class="simplebar-wrapper" style="margin: 0px;">
                                                    <div class="simplebar-height-auto-observer-wrapper">
                                                        <div class="simplebar-height-auto-observer"></div>
                                                    </div>
                                                    <div class="simplebar-mask">
                                                        <div class="simplebar-offset"
                                                            style="right: 0px; bottom: 0px;">
                                                            <div class="simplebar-content-wrapper" tabindex="0"
                                                                role="region" aria-label="scrollable content"
                                                                style="height: auto; overflow: hidden;">
                                                                <div class="simplebar-content"
                                                                    style="padding: 0px;">
                                                                    <ul class="list-unstyled vstack gap-2 mb-0">
                                                                        <li>
                                                                            <div
                                                                                class="form-check d-flex align-items-center">
                                                                                <input class="form-check-input me-3"
                                                                                    type="checkbox" value=""
                                                                                    id="anna-adame">
                                                                                <label
                                                                                    class="form-check-label d-flex align-items-center"
                                                                                    for="anna-adame">
                                                                                    <span class="flex-shrink-0">
                                                                                        <img src="assets/images/users/avatar-1.jpg"
                                                                                            alt=""
                                                                                            class="avatar-xxs rounded-circle">
                                                                                    </span>
                                                                                    <span class="flex-grow-1 ms-2">
                                                                                        Anna Adame
                                                                                    </span>
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="form-check d-flex align-items-center">
                                                                                <input class="form-check-input me-3"
                                                                                    type="checkbox" value=""
                                                                                    id="frank-hook">
                                                                                <label
                                                                                    class="form-check-label d-flex align-items-center"
                                                                                    for="frank-hook">
                                                                                    <span class="flex-shrink-0">
                                                                                        <img src="assets/images/users/avatar-3.jpg"
                                                                                            alt=""
                                                                                            class="avatar-xxs rounded-circle">
                                                                                    </span>
                                                                                    <span class="flex-grow-1 ms-2">
                                                                                        Frank Hook
                                                                                    </span>
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="form-check d-flex align-items-center">
                                                                                <input class="form-check-input me-3"
                                                                                    type="checkbox" value=""
                                                                                    id="alexis-clarke">
                                                                                <label
                                                                                    class="form-check-label d-flex align-items-center"
                                                                                    for="alexis-clarke">
                                                                                    <span class="flex-shrink-0">
                                                                                        <img src="assets/images/users/avatar-6.jpg"
                                                                                            alt=""
                                                                                            class="avatar-xxs rounded-circle">
                                                                                    </span>
                                                                                    <span class="flex-grow-1 ms-2">
                                                                                        Alexis Clarke
                                                                                    </span>
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="form-check d-flex align-items-center">
                                                                                <input class="form-check-input me-3"
                                                                                    type="checkbox" value=""
                                                                                    id="herbert-stokes">
                                                                                <label
                                                                                    class="form-check-label d-flex align-items-center"
                                                                                    for="herbert-stokes">
                                                                                    <span class="flex-shrink-0">
                                                                                        <img src="assets/images/users/avatar-2.jpg"
                                                                                            alt=""
                                                                                            class="avatar-xxs rounded-circle">
                                                                                    </span>
                                                                                    <span class="flex-grow-1 ms-2">
                                                                                        Herbert Stokes
                                                                                    </span>
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="form-check d-flex align-items-center">
                                                                                <input class="form-check-input me-3"
                                                                                    type="checkbox" value=""
                                                                                    id="michael-morris">
                                                                                <label
                                                                                    class="form-check-label d-flex align-items-center"
                                                                                    for="michael-morris">
                                                                                    <span class="flex-shrink-0">
                                                                                        <img src="assets/images/users/avatar-7.jpg"
                                                                                            alt=""
                                                                                            class="avatar-xxs rounded-circle">
                                                                                    </span>
                                                                                    <span class="flex-grow-1 ms-2">
                                                                                        Michael Morris
                                                                                    </span>
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="form-check d-flex align-items-center">
                                                                                <input class="form-check-input me-3"
                                                                                    type="checkbox" value=""
                                                                                    id="nancy-martino">
                                                                                <label
                                                                                    class="form-check-label d-flex align-items-center"
                                                                                    for="nancy-martino">
                                                                                    <span class="flex-shrink-0">
                                                                                        <img src="assets/images/users/avatar-5.jpg"
                                                                                            alt=""
                                                                                            class="avatar-xxs rounded-circle">
                                                                                    </span>
                                                                                    <span class="flex-grow-1 ms-2">
                                                                                        Nancy Martino
                                                                                    </span>
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="form-check d-flex align-items-center">
                                                                                <input class="form-check-input me-3"
                                                                                    type="checkbox" value=""
                                                                                    id="thomas-taylor">
                                                                                <label
                                                                                    class="form-check-label d-flex align-items-center"
                                                                                    for="thomas-taylor">
                                                                                    <span class="flex-shrink-0">
                                                                                        <img src="assets/images/users/avatar-8.jpg"
                                                                                            alt=""
                                                                                            class="avatar-xxs rounded-circle">
                                                                                    </span>
                                                                                    <span class="flex-grow-1 ms-2">
                                                                                        Thomas Taylor
                                                                                    </span>
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div
                                                                                class="form-check d-flex align-items-center">
                                                                                <input class="form-check-input me-3"
                                                                                    type="checkbox" value=""
                                                                                    id="tonya-noble">
                                                                                <label
                                                                                    class="form-check-label d-flex align-items-center"
                                                                                    for="tonya-noble">
                                                                                    <span class="flex-shrink-0">
                                                                                        <img src="assets/images/users/avatar-10.jpg"
                                                                                            alt=""
                                                                                            class="avatar-xxs rounded-circle">
                                                                                    </span>
                                                                                    <span class="flex-grow-1 ms-2">
                                                                                        Tonya Noble
                                                                                    </span>
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="simplebar-placeholder"
                                                        style="width: 0px; height: 0px;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-horizontal"
                                                    style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar"
                                                        style="width: 0px; display: none;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-vertical"
                                                    style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar"
                                                        style="height: 0px; display: none;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4">
                                            <label for="due-date" class="form-label">Due Date</label>
                                            <input type="text" class="form-control" id="due-date"
                                                data-provider="flatpickr" placeholder="Select date">
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4">
                                            <label for="categories" class="form-label">Tags</label>
                                            <input type="text" class="form-control" id="categories"
                                                placeholder="Enter tag">
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4">
                                            <label for="tasks-progress" class="form-label">Tasks Progress</label>
                                            <input type="text" class="form-control" maxlength="3"
                                                id="tasks-progress" placeholder="Enter progress">
                                        </div>
                                        <!--end col-->
                                        <div class="mt-4">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-success">
                                                    Add Task
                                                </button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end add board modal-->
                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close" id="delete-btn-close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mt-2 text-center">
                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                        colors="primary:#f7b84b,secondary:#f06548"
                                        style="width: 100px; height: 100px"></lord-icon>
                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                        <h4>Are you sure ?</h4>
                                        <p class="text-muted mx-4 mb-0">
                                            Are you sure you want to remove this tasks ?
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn w-sm btn-danger" id="delete-record">
                                        Yes, Delete It!
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear());
                        </script>2024
                        © Velzon.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design &amp; Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- End Page-content -->
</div>
<!-- end main content-->
</div>
<!-- END layout-wrapper -->
@include('head_dashboard.preloader')
<!-- Theme Settings -->
@include('layout.footer')
<script>
    // Ensure the DOM is fully loaded before running the script
    document.addEventListener('DOMContentLoaded', function() {
        // Find the modal by its ID
        const createBoardModal = document.getElementById('createboardModal');

        // Add an event listener to handle when the modal is about to be shown
        createBoardModal.addEventListener('show.bs.modal', function(event) {
            // Get the button that triggered the modal
            const button = event.relatedTarget;

            // Get data attributes from the button
            const userId = button.getAttribute('data-user-id'); // Get 'data-user-id' value
            const workspaceId = button.getAttribute('data-workspace-id'); // Get 'data-workspace-id' value

            // Find the input fields inside the modal
            const userIdInput = createBoardModal.querySelector('input[name="userId"]');
            const workspaceIdInput = createBoardModal.querySelector('input[name="workspaceId"]');

            // Set the input fields with the values from the button
            userIdInput.value = userId;
            workspaceIdInput.value = workspaceId;
        });
    });
</script>

