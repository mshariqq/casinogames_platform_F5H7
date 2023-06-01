@extends('admin.layouts.dash')
@section('content')
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card overflow-hidden">
            <div class="card-header custom-header">
                <div>
                    <h2 class="card-title">Projects</h2>
                    <h6 class="card-subtitle">Overview of this month</h6>
                </div>
                <div class="card-options">
                    <label class="custom-switch">
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <div>
                        <h5 class="text-muted">Total Projects</h5>
                        <h2 class="text-dark count mt-0 font-30 mb-0">3,456</h2>
                    </div>
                    <span class="sparkline_bar1 ml-auto"></span>
                </div>
            </div>
            <div class="card-footer">
                <span class="text-left"><i class="fe fe-arrow-up  text-success mr-1"></i> 24 Uploads</span>
                <span class="float-right"><i class="fe fe-arrow-down  text-danger mr-1"></i> 05 Pendings</span>
            </div>
        </div>
    </div><!-- col end -->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card overflow-hidden">
            <div class="card-header custom-header">
                <div>
                    <h3 class="card-title">Employess</h3>
                    <h6 class="card-subtitle">Overview of this month</h6>
                </div>
                <div class="card-options">
                    <label class="custom-switch">
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" >
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <div>
                        <h5 class="text-muted">Total Employess</h5>
                        <h2 class="text-dark count mt-0 font-30 mb-0">4,738</h2>
                    </div>
                    <span class="sparkline_bar2 ml-auto"></span>
                </div>
            </div>
            <div class="card-footer">
                <span class="text-left"><i class="si si-user  text-success mr-1"></i> 42 Male</span>
                <span class="float-right"><i class="si si-user-female  text-danger mr-1"></i> 35 Female</span>
            </div>
        </div>
    </div><!-- col end -->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card overflow-hidden">
            <div class="card-header custom-header">
                <div>
                    <h3 class="card-title">Task</h3>
                    <h6 class="card-subtitle">Overview of this month</h6>
                </div>
                <div class="card-options">
                    <label class="custom-switch">
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <div>
                        <h5 class="text-muted">Total Tasks</h5>
                        <h2 class="text-dark count mt-0 font-30 mb-0">6,738</h2>
                    </div>
                    <span class="sparkline_bar3 ml-auto"></span>
                </div>
            </div>
            <div class="card-footer">
                <span class="text-left"><i class="fe fe-corner-left-up  text-success mr-1"></i> 08 Active</span>
                <span class="float-right"><i class="fe fe-corner-left-down  text-danger mr-1"></i> 01 Inactive</span>
            </div>
        </div>
    </div><!-- col end -->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card overflow-hidden">
            <div class="card-header custom-header">
                <div>
                    <h3 class="card-title">Earnings</h3>
                    <h6 class="card-subtitle">Overview of this month</h6>
                </div>
                <div class="card-options">
                    <label class="custom-switch">
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <div>
                        <h5 class="text-muted">Total Earnings</h5>
                        <h2 class="text-dark count mt-0 font-30 mb-0">$18,963</h2>
                    </div>
                    <span class="sparkline_bar4 ml-auto"></span>
                </div>
            </div>
            <div class="card-footer">
                <span class="text-left"><i class="fe fe-dollar-sign  text-success mr-1"></i> 22% Profits</span>
                <span class="float-right"><i class="fe fe-trending-down  text-danger mr-1"></i> 5% Loos</span>
            </div>
        </div>
    </div><!-- col end -->
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header custom-header">
                <div>
                    <h3 class="card-title">Monthly Earings</h3>
                    <h6 class="card-subtitle">Overview of this year live charts</h6>
                </div>
                <div class="card-options">
                    <a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                        <span class="fa fa-ellipsis-v"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li><a href="#"><i class="si si-plus mr-2"></i>Add</a></li>
                        <li><a href="#"><i class="si si-trash mr-2"></i>Remove</a></li>
                        <li><a href="#"><i class="si si-eye mr-2"></i>View</a></li>
                        <li><a href="#"><i class="si si-settings mr-2"></i>More</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-9 col-lg-12 col-md-12 border-right">
                        <canvas id="Chart" class="chartsh "></canvas>
                    </div>
                    <div class="col-xl-3 collg-12 col-md-12">
                        <div class="clearfix mb-4">
                            <div class="float-left">
                                <h2 class="mb-0 text-primary mainvalue mb-2">$12,467</h2>
                                <p class="text-muted ">Marketing</p>
                            </div>
                            <div class="float-right text-right mt-1">
                                <span class="pie" data-peity='{ "fill": ["#f0f3f7", "#1753fc"]}'>2/5</span>
                            </div>
                        </div>
                        <div class="clearfix mb-4">
                            <div class="float-left">
                                <h2 class="mb-0 text-danger mainvalue mb-1">$23,456</h2>
                                <p class="text-muted">General & Admin</p>
                            </div>
                            <div class="float-right text-right mt-1">
                                <span class="pie" data-peity='{ "fill": ["#ff6666", "#f0f3f7"]}'>226,134</span>
                            </div>
                        </div>
                        <div class="clearfix mb-4">
                            <div class="float-left">
                                <h2 class="mb-0 text-secondary mainvalue mb-1">$4,878</h2>
                                <p class="text-muted">Other Expenses</p>
                            </div>
                            <div class="float-right text-right mt-1">
                                <span class="pie" data-peity='{ "fill": ["#7d41de", "#f0f3f7"]}'>1.22,1.041</span>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary btn-block">View more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-5 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header custom-header">
                <div>
                    <h3 class="card-title">Projects Status</h3>
                    <h6 class="card-subtitle">Overview of this year</h6>
                </div>
                <div class="card-options">
                    <a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                        <span class="fa fa-ellipsis-v"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li><a href="#"><i class="si si-plus mr-2"></i>Add</a></li>
                        <li><a href="#"><i class="si si-trash mr-2"></i>Remove</a></li>
                        <li><a href="#"><i class="si si-eye mr-2"></i>View</a></li>
                        <li><a href="#"><i class="si si-settings mr-2"></i>More</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <canvas id="polarChart" class="h-300"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header custom-header">
                <div>
                    <h3 class="card-title">Comments</h3>
                    <h6 class="card-subtitle">Overview of this week</h6>
                </div>
                <div class="card-options">
                    <a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                        <span class="fa fa-ellipsis-v"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li><a href="#"><i class="si si-plus mr-2"></i>Add</a></li>
                        <li><a href="#"><i class="si si-trash mr-2"></i>Remove</a></li>
                        <li><a href="#"><i class="si si-eye mr-2"></i>View</a></li>
                        <li><a href="#"><i class="si si-settings mr-2"></i>More</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body p-0 ">
                <div class="list-group list-lg-group list-group-flush">
                    <a class="list-group-item list-group-item-action" href="#">
                        <div class="media mt-0">
                            <img class="avatar-lg rounded-circle mr-3" src="../assets/images/users/female/2.jpg" alt="Image description">
                            <div class="media-body">
                                <div class="d-md-flex align-items-center">
                                    <h4 class="mb-1">
                                        Samantha Wilson
                                    </h4>
                                    <small class="text-primary ml-md-auto"><i class="fe fe-calendar mr-1"></i> 28 Feb 2019</small>
                                </div>
                                <p class="mb-0 text-muted">Itaque earum rerum hic tenetur a sapiente reiciendis voluptatibus.</p>
                            </div>
                        </div>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                        <div class="media mt-0">
                            <img class="avatar-lg rounded-circle mr-3" src="../assets/images/users/male/2.jpg" alt="Image description">
                            <div class="media-body">
                                <div class="d-md-flex align-items-center">
                                    <h4 class="mb-1">
                                        Kevin North
                                    </h4>
                                    <small class="text-primary ml-md-auto"><i class="fe fe-calendar mr-1"></i> 26 Feb 2019</small>
                                </div>
                                <p class="mb-0 text-muted">Itaque earum rerum hic tenetur a sapiente reiciendis voluptatibus.</p>
                            </div>
                        </div>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                        <div class="media mt-0">
                            <img class="avatar-lg rounded-circle mr-3" src="../assets/images/users/male/12.jpg" alt="Image description">
                            <div class="media-body">
                                <div class="d-md-flex align-items-center">
                                    <h4 class="mb-1">
                                        Steven Fisher
                                    </h4>
                                    <small class="text-primary ml-md-auto"><i class="fe fe-calendar mr-1"></i> 26 Feb 2019</small>
                                </div>
                                <p class="mb-0 text-muted">Itaque earum rerum hic tenetur a sapiente reiciendis voluptatibus.</p>
                            </div>
                        </div>
                    </a>
                    <a class="list-group-item list-group-item-action br-br-7 br-bl-7" href="#">
                        <div class="media mt-0">
                            <img class="avatar-lg rounded-circle mr-3" src="../assets/images/users/female/5.jpg" alt="Image description">
                            <div class="media-body">
                                <div class="d-md-flex align-items-center">
                                    <h4 class="mb-1">
                                        Joanne Taylor
                                    </h4>
                                    <small class="text-primary ml-md-auto"><i class="fe fe-calendar mr-1"></i> 25 Feb 2019</small>
                                </div>
                                <p class="mb-0 text-muted">Itaque earum rerum hic tenetur a sapiente reiciendis voluptatibus.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-12 col-md-12">
        <div class="card">
            <a href="#"><img class="card-img-top br-tl-7 br-tr-7" src="../assets/images/photos/6.jpg" alt="img"></a>
            <div class="card-body d-flex flex-column">
                <small class="text-muted mb-1"><i class="fe fe-calendar mr-1"></i> 25 Feb 2019</small>
                <h4><a href="#">voluptatem quia voluptas.</a></h4>
                <div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser</div>
                <a href="" class=" mt-3 btn btn-sm btn-primary">Read more</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header custom-header">
                <div>
                    <h3 class="card-title">Marketing  Campaign</h3>
                    <h6 class="card-subtitle">Overview of all marketing vales</h6>
                </div>
                <div class="card-options d-none d-sm-block">
                    <div class="btn-group btn-sm">
                        <button type="button" class="btn btn-light btn-sm">
                            <span class="">Today</span>
                        </button>
                        <button type="button" class="btn btn-light btn-sm">
                            <span class="">Month</span>
                        </button>
                        <button type="button" class="btn btn-light btn-sm">
                            <span class="">Year</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table border table-bordered text-nowrap mb-0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ICON</th>
                                <th>Currency</th>
                                <th>Price</th>
                                <th>Market Cap</th>
                                <th>Volume 1D</th>
                                <th>Change % (1D)</th>
                                <th>Change % (1W)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="../assets/images/crypto-currencies/bitcoin.svg" class="w-5 h-5" alt=""></td>
                                <td>Bitcoin</td>
                                <td>$1.67</td>
                                <td>$61,191,183,730</td>
                                <td>$10,133,400,000</td>
                                <td><span class="badge badge-pill badge-primary"><i class="fe fe-chevron-up"></i> 17.66%</span></td>
                                <td><span class="badge badge-pill badge-success"><i class="fe fe-chevron-down"></i> -15.25%</span></td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="../assets/images/crypto-currencies/dash.svg" class="w-5 h-5" alt=""></td>
                                <td>Dash</td>
                                <td>$865.25</td>
                                <td>$6,778,308,110</td>
                                <td>$193,430,000</td>
                                <td><span class="badge badge-pill  badge-primary"><i class="fe fe-chevron-up"></i> 30.80%</span></td>
                                <td><span class="badge  badge-pill badge-success"><i class="fe fe-chevron-down"></i> -16.40%</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="../assets/images/crypto-currencies/euro.svg" class="w-5 h-5" alt=""></td>
                                <td>Euro</td>
                                <td>$0.70</td>
                                <td>$17,633,890,043</td>
                                <td>$1,677,430,000</td>
                                <td><span class="badge badge-pill  badge-primary"><i class="fe fe-chevron-up"></i> 40.79%</span></td>
                                <td><span class="badge badge-pill  badge-success"><i class="fe fe-chevron-down"></i> -5.81%</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="../assets/images/crypto-currencies/qtum.svg" class="w-5 h-5" alt=""></td>
                                <td>Qtum</td>
                                <td>$1.67</td>
                                <td>$61,191,183,730</td>
                                <td>$10,133,400,000</td>
                                <td><span class="badge badge-pill  badge-primary"><i class="fe fe-chevron-up"></i> 17.66%</span></td>
                                <td><span class="badge badge-pill badge-success"><i class="fe fe-chevron-down"></i> -15.25%</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img src="../assets/images/crypto-currencies/ripple.svg" class="w-5 h-5" alt=""></td>
                                <td>Ripple</td>
                                <td>$11,723.48</td>
                                <td>$179,078,267,295</td>
                                <td>$17,959,900,000</td>
                                <td><span class="badge badge-pill badge-primary"><i class="fe fe-chevron-up"></i> 66.26%</span></td>
                                <td><span class="badge badge-pill badge-success"><i class="fe fe-chevron-down"></i> -16.48%</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><img src="../assets/images/crypto-currencies/stellar.svg" class="w-5 h-5" alt=""></td>
                                <td>Stellar</td>
                                <td>$149.18</td>
                                <td>$9,644,490,000</td>
                                <td>$1,310,130,000</td>
                                <td><span class="badge badge-pill badge-primary"><i class="fe fe-chevron-up"></i> 36.98%</span></td>
                                <td><span class="badge  badge-pill badge-success"><i class="fe fe-chevron-down"></i> 31.09%</span></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><img src="../assets/images/crypto-currencies/cardano.svg" class="w-5 h-5" alt=""></td>
                                <td>Cardano</td>
                                <td>$39.23</td>
                                <td>$92,644,490,000</td>
                                <td>$14,310,130,000</td>
                                <td><span class="badge badge-pill badge-primary"><i class="fe fe-chevron-up"></i> 26.98%</span></td>
                                <td><span class="badge  badge-pill badge-success"><i class="fe fe-chevron-down"></i> 12.09%</span></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><img src="../assets/images/crypto-currencies/eos.svg" class="w-5 h-5" alt=""></td>
                                <td>Eos</td>
                                <td>$14.67</td>
                                <td>$6,44,490,000</td>
                                <td>$3,10,130,000</td>
                                <td><span class="badge badge-pill badge-primary"><i class="fe fe-chevron-up"></i> 1.98%</span></td>
                                <td><span class="badge  badge-pill badge-success"><i class="fe fe-chevron-down"></i> 6.09%</span></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><img src="../assets/images/crypto-currencies/iota.svg" class="w-5 h-5" alt=""></td>
                                <td>Iota</td>
                                <td>$78.3</td>
                                <td>$24,644,490,000</td>
                                <td>$46,310,130,000</td>
                                <td><span class="badge badge-pill badge-primary"><i class="fe fe-chevron-up"></i> 45.98%</span></td>
                                <td><span class="badge  badge-pill badge-success"><i class="fe fe-chevron-down"></i> 9.09%</span></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td><img src="../assets/images/crypto-currencies/raiblocks.svg" class="w-5 h-5" alt=""></td>
                                <td>Raiblocks</td>
                                <td>$56.02</td>
                                <td>$23,694,490,000</td>
                                <td>$10,130,000</td>
                                <td><span class="badge badge-pill badge-primary"><i class="fe fe-chevron-up"></i> 16.98%</span></td>
                                <td><span class="badge  badge-pill badge-success"><i class="fe fe-chevron-down"></i> 7.09%</span></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td><img src="../assets/images/crypto-currencies/tron.svg" class="w-5 h-5" alt=""></td>
                                <td>Tron</td>
                                <td>$13.12</td>
                                <td>$19,644,490,000</td>
                                <td>$12,310,130,000</td>
                                <td><span class="badge badge-pill badge-primary"><i class="fe fe-chevron-up"></i> 6.98%</span></td>
                                <td><span class="badge  badge-pill badge-success"><i class="fe fe-chevron-down"></i> 3.09%</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection