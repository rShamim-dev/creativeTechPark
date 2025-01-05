<x-layout.backend-master>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div class="main-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Dashboard</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Analysis</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-primary">Settings</button>
                    <button type="button"
                        class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                            href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated
                            link</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">

            <div class="col-lg-12 col-xxl-8 d-flex align-items-stretch">
                <div class="card w-100 rounded-4">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-between mb-3">
                            <div class="">
                                <h5 class="mb-0">Recent Orders</h5>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                                    data-bs-toggle="dropdown">
                                    <span class="material-icons-outlined fs-5">more_vert</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="order-search position-relative my-3">
                            <input class="form-control rounded-5 px-5" type="text" placeholder="Search">
                            <span
                                class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th>Amount</th>
                                        <th>Vendor</th>
                                        <th>Status</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="">
                                                    <img src="{{ asset('backend/assets/images/top-products/01.png') }}"
                                                        class="rounded-circle" width="50" height="50"
                                                        alt="">
                                                </div>
                                                <p class="mb-0">Sports Shoes</p>
                                            </div>
                                        </td>
                                        <td>$149</td>
                                        <td>Julia Sunota</td>
                                        <td>
                                            <p class="dash-lable mb-0 bg-success bg-opacity-10 text-success rounded-2">
                                                Completed</p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <p class="mb-0">5.0</p>
                                                <i class="material-icons-outlined text-warning fs-6">star</i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="">
                                                    <img src="{{ asset('backend/assets/images/top-products/02.png') }}"
                                                        class="rounded-circle" width="50" height="50"
                                                        alt="">
                                                </div>
                                                <p class="mb-0">Goldan Watch</p>
                                            </div>
                                        </td>
                                        <td>$168</td>
                                        <td>Julia Sunota</td>
                                        <td>
                                            <p class="dash-lable mb-0 bg-success bg-opacity-10 text-success rounded-2">
                                                Completed</p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <p class="mb-0">5.0</p>
                                                <i class="material-icons-outlined text-warning fs-6">star</i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="">
                                                    <img src="{{ asset('backend/assets/images/top-products/03.png') }}"
                                                        class="rounded-circle" width="50" height="50"
                                                        alt="">
                                                </div>
                                                <p class="mb-0">Men Polo Tshirt</p>
                                            </div>
                                        </td>
                                        <td>$124</td>
                                        <td>Julia Sunota</td>
                                        <td>
                                            <p class="dash-lable mb-0 bg-warning bg-opacity-10 text-warning rounded-2">
                                                Pending</p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <p class="mb-0">4.0</p>
                                                <i class="material-icons-outlined text-warning fs-6">star</i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="">
                                                    <img src="{{ asset('backend/assets/images/top-products/04.png') }}"
                                                        class="rounded-circle" width="50" height="50"
                                                        alt="">
                                                </div>
                                                <p class="mb-0">Blue Jeans Casual</p>
                                            </div>
                                        </td>
                                        <td>$289</td>
                                        <td>Julia Sunota</td>
                                        <td>
                                            <p class="dash-lable mb-0 bg-success bg-opacity-10 text-success rounded-2">
                                                Completed</p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <p class="mb-0">3.0</p>
                                                <i class="material-icons-outlined text-warning fs-6">star</i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="">
                                                    <img src="{{ asset('backend/assets/images/top-products/06.png') }}"
                                                        class="rounded-circle" width="50" height="50"
                                                        alt="">
                                                </div>
                                                <p class="mb-0">Fancy Shirts</p>
                                            </div>
                                        </td>
                                        <td>$389</td>
                                        <td>Julia Sunota</td>
                                        <td>
                                            <p class="dash-lable mb-0 bg-danger bg-opacity-10 text-danger rounded-2">
                                                Canceled</p>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <p class="mb-0">2.0</p>
                                                <i class="material-icons-outlined text-warning fs-6">star</i>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.backend-master>>
