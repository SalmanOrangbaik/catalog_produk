@extends('layouts.admin')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body performane-indicator-card">
                            <div class="d-sm-flex">
                                <h4 class="card-title flex-shrink-1">Performance Indicator</h4>
                                <p class="m-sm-0 ms-sm-auto flex-shrink-0">
                                    <span class="data-time-range ms-0">7d</span>
                                    <span class="data-time-range active">2w</span>
                                    <span class="data-time-range">1m</span>
                                    <span class="data-time-range">3m</span>
                                    <span class="data-time-range">6m</span>
                                </p>
                            </div>
                            <div class="d-sm-flex flex-wrap mt-3">
                                <div class="d-flex align-items-center">
                                    <span class="dot-indicator bg-primary ms-2"></span>
                                    <p class="mb-0 ms-2 text-muted font-weight-semibold">Complaints (2098)</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="dot-indicator bg-info ms-2"></span>
                                    <p class="mb-0 ms-2 text-muted font-weight-semibold"> Task Done (1123)</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="dot-indicator bg-danger ms-2"></span>
                                    <p class="mb-0 ms-2 text-muted font-weight-semibold">Attends (876)</p>
                                </div>
                            </div>
                            <div class="dotted-chart-height">
                                <canvas id="performance-indicator-chart" class="mt-5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sessions by channel</h4>
                            <div class="aligner-wrapper py-3">
                                <div class="doughnut-chart-height">
                                    <canvas id="sessionsDoughnutChart" height="210"></canvas>
                                </div>
                                <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                                    <h2 class="text-center mb-0 font-weight-bold">8.234</h2>
                                    <small class="d-block text-center text-muted  font-weight-semibold mb-0">Total
                                        Leads</small>
                                </div>
                            </div>
                            <div class="wrapper mt-4 d-flex flex-wrap align-items-cente">
                                <div class="d-flex">
                                    <span class="square-indicator bg-danger ms-2"></span>
                                    <p class="mb-0 ms-2">Assigned</p>
                                </div>
                                <div class="d-flex">
                                    <span class="square-indicator bg-success ms-2"></span>
                                    <p class="mb-0 ms-2">Not Assigned</p>
                                </div>
                                <div class="d-flex">
                                    <span class="square-indicator bg-warning ms-2"></span>
                                    <p class="mb-0 ms-2">Reassigned</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quick Action Toolbar Starts-->
            <div class="row quick-action-toolbar">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-header d-block d-md-flex">
                            <h5 class="mb-0">Quick Actions</h5>
                            <p class="ms-auto mb-0">How are your active users trending overtime?<i class="icon-bulb"></i>
                            </p>
                        </div>
                        <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                            <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                                <button type="button" class="btn px-0"> <i class="icon-user me-2"></i> Add Client</button>
                            </div>
                            <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                                <button type="button" class="btn px-0"><i class="icon-docs me-2"></i> Create Quote</button>
                            </div>
                            <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                                <button type="button" class="btn px-0"><i class="icon-folder me-2"></i> Enter
                                    Payment</button>
                            </div>
                            <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                                <button type="button" class="btn px-0"><i class="icon-book-open me-2"></i>Create
                                    Invoice</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quick Action Toolbar Ends-->
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-sm-flex align-items-baseline report-summary-header">
                                        <h5 class="font-weight-semibold">Report Summary</h5> <span class="ms-auto">Updated
                                            Report</span> <button class="btn btn-icons border-0 p-2"><i
                                                class="icon-refresh"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="row report-inner-cards-wrapper">
                                <div class=" col-md -6 col-xl report-inner-card">
                                    <div class="inner-card-text">
                                        <span class="report-title">EXPENSE</span>
                                        <h4>$32123</h4>
                                        <span class="report-count"> 2 Reports</span>
                                    </div>
                                    <div class="inner-card-icon bg-success">
                                        <i class="icon-rocket"></i>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl report-inner-card">
                                    <div class="inner-card-text">
                                        <span class="report-title">PURCHASE</span>
                                        <h4>95,458</h4>
                                        <span class="report-count"> 3 Reports</span>
                                    </div>
                                    <div class="inner-card-icon bg-danger">
                                        <i class="icon-briefcase"></i>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl report-inner-card">
                                    <div class="inner-card-text">
                                        <span class="report-title">QUANTITY</span>
                                        <h4>2650</h4>
                                        <span class="report-count"> 5 Reports</span>
                                    </div>
                                    <div class="inner-card-icon bg-warning">
                                        <i class="icon-globe-alt"></i>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl report-inner-card">
                                    <div class="inner-card-text">
                                        <span class="report-title">RETURN</span>
                                        <h4>25,542</h4>
                                        <span class="report-count"> 9 Reports</span>
                                    </div>
                                    <div class="inner-card-icon bg-primary">
                                        <i class="icon-diamond"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-items-center mb-4">
                                <h4 class="card-title mb-sm-0">Products Inventory</h4>
                                <a href="#" class="text-dark ms-auto mb-3 mb-sm-0"> View all Products</a>
                            </div>
                            <div class="table-responsive border rounded p-1">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="font-weight-bold">Store ID</th>
                                            <th class="font-weight-bold">Amount</th>
                                            <th class="font-weight-bold">Gateway</th>
                                            <th class="font-weight-bold">Created at</th>
                                            <th class="font-weight-bold">Paid at</th>
                                            <th class="font-weight-bold">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img class="img-sm rounded-circle" src="assets/images/faces/face1.jpg"
                                                    alt="profile image"> Katie Holmes
                                            </td>
                                            <td>$3621</td>
                                            <td><img src="assets/images/dashboard/alipay.png" alt="alipay"
                                                    class="gateway-icon me-2"> alipay</td>
                                            <td>04 Jun 2019</td>
                                            <td>18 Jul 2019</td>
                                            <td>
                                                <div class="badge badge-success p-2">Paid</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="img-sm rounded-circle" src="assets/images/faces/face2.jpg"
                                                    alt="profile image"> Minnie Copeland
                                            </td>
                                            <td>$6245</td>
                                            <td><img src="assets/images/dashboard/paypal.png" alt="alipay"
                                                    class="gateway-icon me-2"> Paypal</td>
                                            <td>25 Sep 2019</td>
                                            <td>07 Oct 2019</td>
                                            <td>
                                                <div class="badge badge-danger p-2">Pending</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="img-sm rounded-circle" src="assets/images/faces/face3.jpg"
                                                    alt="profile image"> Rodney Sims
                                            </td>
                                            <td>$9265</td>
                                            <td><img src="assets/images/dashboard/alipay.png" alt="alipay"
                                                    class="gateway-icon me-2"> alipay</td>
                                            <td>12 dec 2019</td>
                                            <td>26 Aug 2019</td>
                                            <td>
                                                <div class="badge badge-warning p-2">Failed</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="img-sm rounded-circle" src="assets/images/faces/face4.jpg"
                                                    alt="profile image"> Carolyn Barker
                                            </td>
                                            <td>$2263</td>
                                            <td><img src="assets/images/dashboard/alipay.png" alt="alipay"
                                                    class="gateway-icon me-2"> alipay</td>
                                            <td>30 Sep 2019</td>
                                            <td>20 Oct 2019</td>
                                            <td>
                                                <div class="badge badge-success p-2">Paid</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex mt-4 flex-wrap align-items-center">
                                <p class="text-muted mb-sm-0">Showing 1 to 10 of 57 entries</p>
                                <nav class="ms-auto">
                                    <ul class="pagination separated pagination-info mb-sm-0">
                                        <li class="page-item"><a href="#" class="page-link"><i
                                                    class="icon-arrow-left"></i></a></li>
                                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                                        <li class="page-item"><a href="#" class="page-link"><i
                                                    class="icon-arrow-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 Stellar. All
                    rights reserved. <a href="#"> Terms of use</a><a href="#">Privacy Policy</a> Distributed
                    by<a href="https://themewagon.com" target="_blank">ThemeWagon</a></span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                        class="icon-heart text-danger"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
 @endsection
