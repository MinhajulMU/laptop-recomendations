@extends('layouts.admin')
@section('title')
    Admin Page
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group pull-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Welcome !</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->


<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-box float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Orders</h6>
            <h4 class="mb-3" data-plugin="counterup">1,587</h4>
            <span class="badge badge-primary"> +11% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-layers float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Revenue</h6>
            <h4 class="mb-3">$<span data-plugin="counterup">46,782</span></h4>
            <span class="badge badge-primary"> -29% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-tag float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Average Price</h6>
            <h4 class="mb-3">$<span data-plugin="counterup">15.9</span></h4>
            <span class="badge badge-primary"> 0% </span> <span class="text-muted ml-2 vertical-middle">From previous period</span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="fi-briefcase float-right"></i>
            <h6 class="text-muted text-uppercase mb-3">Product Sold</h6>
            <h4 class="mb-3" data-plugin="counterup">1,890</h4>
            <span class="badge badge-primary"> +89% </span> <span class="text-muted ml-2 vertical-middle">Last year</span>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xl-7">
        <div class="card-box">
            <h4 class="header-title">Transactions History</h4>

            <div class="row">
                <div class="col-sm-4">
                    <div class="text-center mt-3">
                        <h6 class="font-normal text-muted font-14">Conversion Rate</h6>
                        <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">1.78%</span> <small></small></h6>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-center mt-3">
                        <h6 class="font-normal text-muted font-14">Average Order Value</h6>
                        <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">25.87</span> <small>USD</small></h6>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-center mt-3">
                        <h6 class="font-normal text-muted font-14">Total Wallet Balance</h6>
                        <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">87,4517</span> <small>USD</small></h6>
                    </div>
                </div>
            </div>

            <canvas id="transactions-chart" height="350" class="mt-4"></canvas>
        </div>
    </div>
    <div class="col-xl-5">
        <div class="card-box">
            <h4 class="header-title">Sales History</h4>

            <div class="row">
                <div class="col-sm-4">
                    <div class="text-center mt-3">
                        <h6 class="font-normal text-muted font-14">Conversion Rate</h6>
                        <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">3.94%</span> <small></small></h6>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-center mt-3">
                        <h6 class="font-normal text-muted font-14">Average Sales</h6>
                        <h6 class="font-18"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> <span class="text-dark">16.25</span> <small>USD</small></h6>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text-center mt-3">
                        <h6 class="font-normal text-muted font-14">Total Sales</h6>
                        <h6 class="font-18"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> <span class="text-dark">124,858.67</span> <small>USD</small></h6>
                    </div>
                </div>
            </div>

            <canvas id="sales-history" height="350" class="mt-4"></canvas>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-4">
        <div class="card-box">
            <h4 class="header-title mb-4">Messages</h4>

            <div class="inbox-widget slimscroll" style="max-height: 370px;">
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                        <p class="inbox-item-author">Chadengle</p>
                        <p class="inbox-item-text">Hey! there I'm available...</p>
                        <p class="inbox-item-date">13:40 PM</p>
                    </div>
                </a>
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                        <p class="inbox-item-author">Tomaslau</p>
                        <p class="inbox-item-text">I've finished it! See you so...</p>
                        <p class="inbox-item-date">13:34 PM</p>
                    </div>
                </a>
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                        <p class="inbox-item-author">Stillnotdavid</p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                        <p class="inbox-item-date">13:17 PM</p>
                    </div>
                </a>
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                        <p class="inbox-item-author">Kurafire</p>
                        <p class="inbox-item-text">Nice to meet you</p>
                        <p class="inbox-item-date">12:20 PM</p>
                    </div>
                </a>
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                        <p class="inbox-item-author">Shahedk</p>
                        <p class="inbox-item-text">Hey! there I'm available...</p>
                        <p class="inbox-item-date">10:15 AM</p>
                    </div>
                </a>
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                        <p class="inbox-item-author">Adhamdannaway</p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                        <p class="inbox-item-date">9:56 AM</p>
                    </div>
                </a>
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/avatar-8.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                        <p class="inbox-item-author">Arashasghari</p>
                        <p class="inbox-item-text">Hey! there I'm available...</p>
                        <p class="inbox-item-date">10:15 AM</p>
                    </div>
                </a>
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/avatar-9.jpg" class="rounded-circle bx-shadow-lg" alt=""></div>
                        <p class="inbox-item-author">Joshaustin</p>
                        <p class="inbox-item-text">I've finished it! See you so...</p>
                        <p class="inbox-item-date">9:56 AM</p>
                    </div>
                </a>
            </div>

        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-box">
            <h4 class="header-title mb-4">Latest Comments</h4>

            <div class="comment-list slimscroll" style="max-height: 370px;">
                <a href="#">
                    <div class="comment-box-item">
                        <div class="badge badge-pill badge-success">Ubold - Admin</div>
                        <p class="commnet-item-date">1 month ago</p>
                        <h6 class="commnet-item-msg">Do you have any plans to add a vertical menu?</h6>
                        <p class="commnet-item-user">Ubold User</p>
                    </div>
                </a>
                <a href="#">
                    <div class="comment-box-item">
                        <div class="badge badge-pill badge-warning">Adminox - Admin</div>
                        <p class="commnet-item-date">1 month ago</p>
                        <h6 class="commnet-item-msg">Hello, what is your plan to upgrade Bootstrap 4 versions? Beta or wait for stable?</h6>
                        <p class="commnet-item-user">Ubold User</p>
                    </div>
                </a>
                <a href="#">
                    <div class="comment-box-item">
                        <div class="badge badge-pill badge-primary">Staro - Landing</div>
                        <p class="commnet-item-date">1 month ago</p>
                        <h6 class="commnet-item-msg">Hi coderthemes – do you have PSD for this admin UI? I could really use it.</h6>
                        <p class="commnet-item-user">Ubold User</p>
                    </div>
                </a>
                <a href="#">
                    <div class="comment-box-item">
                        <div class="badge badge-pill badge-dark">Ubold - Admin</div>
                        <p class="commnet-item-date">1 month ago</p>
                        <h6 class="commnet-item-msg">Do you have any plans to add a vertical menu?</h6>
                        <p class="commnet-item-user">Ubold User</p>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-box">
            <h4 class="header-title mb-4">Last Transactions</h4>

            <ul class="list-unstyled transaction-list slimscroll mb-0" style="max-height: 370px;">
                <li>
                    <i class="dripicons-arrow-down text-success"></i>
                    <span class="tran-text">Advertising</span>
                    <span class="pull-right text-success tran-price">+$230</span>
                    <span class="pull-right text-muted">07/09/2017</span>
                    <span class="clearfix"></span>
                </li>

                <li>
                    <i class="dripicons-arrow-up text-danger"></i>
                    <span class="tran-text">Support licence</span>
                    <span class="pull-right text-danger tran-price">-$965</span>
                    <span class="pull-right text-muted">07/09/2017</span>
                    <span class="clearfix"></span>
                </li>

                <li>
                    <i class="dripicons-arrow-down text-success"></i>
                    <span class="tran-text">Extended licence</span>
                    <span class="pull-right text-success tran-price">+$830</span>
                    <span class="pull-right text-muted">07/09/2017</span>
                    <span class="clearfix"></span>
                </li>

                <li>
                    <i class="dripicons-arrow-down text-success"></i>
                    <span class="tran-text">Advertising</span>
                    <span class="pull-right text-success tran-price">+$230</span>
                    <span class="pull-right text-muted">05/09/2017</span>
                    <span class="clearfix"></span>
                </li>

                <li>
                    <i class="dripicons-arrow-up text-danger"></i>
                    <span class="tran-text">New plugins added</span>
                    <span class="pull-right text-danger tran-price">-$452</span>
                    <span class="pull-right text-muted">05/09/2017</span>
                    <span class="clearfix"></span>
                </li>

                <li>
                    <i class="dripicons-arrow-down text-success"></i>
                    <span class="tran-text">Google Inc.</span>
                    <span class="pull-right text-success tran-price">+$230</span>
                    <span class="pull-right text-muted">04/09/2017</span>
                    <span class="clearfix"></span>
                </li>

                <li>
                    <i class="dripicons-arrow-up text-danger"></i>
                    <span class="tran-text">Facebook Ad</span>
                    <span class="pull-right text-danger tran-price">-$364</span>
                    <span class="pull-right text-muted">03/09/2017</span>
                    <span class="clearfix"></span>
                </li>

                <li>
                    <i class="dripicons-arrow-down text-success"></i>
                    <span class="tran-text">New sale</span>
                    <span class="pull-right text-success tran-price">+$230</span>
                    <span class="pull-right text-muted">03/09/2017</span>
                    <span class="clearfix"></span>
                </li>

                <li>
                    <i class="dripicons-arrow-down text-success"></i>
                    <span class="tran-text">Advertising</span>
                    <span class="pull-right text-success tran-price">+$230</span>
                    <span class="pull-right text-muted">29/08/2017</span>
                    <span class="clearfix"></span>
                </li>

                <li>
                    <i class="dripicons-arrow-up text-danger"></i>
                    <span class="tran-text">Support licence</span>
                    <span class="pull-right text-danger tran-price">-$854</span>
                    <span class="pull-right text-muted">27/08/2017</span>
                    <span class="clearfix"></span>
                </li>
            </ul>

        </div>
    </div>

</div>    
@endsection
