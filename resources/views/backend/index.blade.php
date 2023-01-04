@extends('backend.layouts.master')

@section('content')

<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">eCommerce</li>
                        </ul>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#00c5dc"
                                data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                            <span>Visitors</span>
                        </div>
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#f4516c"
                                data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                            <span>Visits</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3>109 <i class="icon-basket-loaded float-right"></i></h3>
                            <span>Products Sold</span>                            
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-blue m-b-0">
                            <div class="progress-bar" data-transitiongoal="64"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3>235 <i class="icon-user-follow float-right"></i></h3>
                            <span>New Customers</span>                    
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-purple m-b-0">
                            <div class="progress-bar" data-transitiongoal="67"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3>2,318 <i class="fa fa-dollar float-right"></i></h3>
                            <span>Net Profit</span>       
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-yellow m-b-0">
                            <div class="progress-bar" data-transitiongoal="89"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3>68% <i class=" icon-heart float-right"></i></h3>
                            <span>Customer Satisfaction</span>        
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-green m-b-0">
                            <div class="progress-bar" data-transitiongoal="68"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Annual Report <small>Description text here...</small></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <span class="text-muted">Sales Report</span>
                                    <h3 class="text-warning">$4,516</h3>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <span class="text-muted">Annual Revenue </span>
                                    <h3 class="text-info">$6,481</h3>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <span class="text-muted">Total Profit</span>
                                    <h3 class="text-success">$3,915</h3>
                                </div>
                            </div>
                            <div id="area_chart" class="graph"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Income Analysis<small>8% High then last month</small></h2>
                        </div>
                        <div class="body">                            
                            <div class="sparkline-pie text-center">6,4,8</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Sales Income</h2>
                        </div>
                        <div class="body">
                            <h6>Overall <b class="text-success">7,000</b></h6>
                            <div class="sparkline" data-type="line" data-spot-Radius="2" data-highlight-Spot-Color="#445771" data-highlight-Line-Color="#222"
                                data-min-Spot-Color="#445771" data-max-Spot-Color="#445771" data-spot-Color="#445771"
                                data-offset="90" data-width="100%" data-height="95px" data-line-Width="1" data-line-Color="#ffcd55"
                                data-fill-Color="#ffcd55">2,4,3,1,5,7,3,2</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Recent Transactions</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th style="width:60px;">#</th>
                                            <th>Name</th>
                                            <th>Item</th>
                                            <th>Address</th>
                                            <th>Quantity</th>                                    
                                            <th>Status</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                            <td>Hossein</td>
                                            <td>IPONE-7</td>
                                            <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                            <td>3</td>
                                            <td><span class="badge badge-success">DONE</span></td>
                                            <td>$ 356</td>
                                        </tr>
                                        <tr>
                                            <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                            <td>Camara</td>
                                            <td>NOKIA-8</td>
                                            <td>2595 Pearlman Avenue Sudbury, MA 01776 </td>
                                            <td>3</td>
                                            <td><span class="badge badge-default">Delivered</span></td>
                                            <td>$ 542</td>
                                        </tr>
                                        <tr>
                                            <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                            <td>Maryam</td>
                                            <td>NOKIA-456</td>
                                            <td>Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                            <td>4</td>
                                            <td><span class="badge badge-success">DONE</span></td>
                                            <td>$ 231</td>
                                        </tr>
                                        <tr>
                                            <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                            <td>Micheal</td>
                                            <td>SAMSANG PRO</td>
                                            <td>508 Virginia Street Chicago, IL 60653</td>
                                            <td>1</td>
                                            <td><span class="badge badge-success">DONE</span></td>
                                            <td>$ 601</td>
                                        </tr>
                                        <tr>
                                            <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                            <td>Frank</td>
                                            <td>NOKIA-456</td>
                                            <td>1516 Holt Street West Palm Beach, FL 33401</td>
                                            <td>13</td>
                                            <td><span class="badge badge-warning">PENDING</span></td>
                                            <td>$ 128</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>New Orders</h2>
                        </div>
                        <div class="body">
                            <table class="table table-hover">
                                <thead class="thead-success">
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Customers</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>IPONE-7</td>
                                        <td>
                                            <ul class="list-unstyled team-info margin-0">                                                
                                                <li><img src="../assets/images/xs/avatar1.jpg" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar6.jpg" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>$ 356</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>NOKIA-8</td>
                                        <td>
                                            <ul class="list-unstyled team-info margin-0">                                                
                                                <li><img src="../assets/images/xs/avatar1.jpg" title="Avatar" alt="Avatar"></li>                                                
                                                <li><img src="../assets/images/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar9.jpg" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>$ 542</td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>IPONE-7</td>
                                        <td>
                                            <ul class="list-unstyled team-info margin-0">                                                
                                                <li><img src="../assets/images/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>$ 356</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>NOKIA-8</td>
                                        <td>
                                            <ul class="list-unstyled team-info margin-0">                                                
                                                <li><img src="../assets/images/xs/avatar3.jpg" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar2.jpg" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>$ 542</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Top Selling Country</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="world-map-markers" class="jvector-map" style="height: 300px"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

@endsection