<div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="{{ asset('backend/assets/images/user.png') }}" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Pro. William</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="professors-profile.html"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
                <hr>
                <ul class="row list-unstyled">
                    <li class="col-4">
                        <span>Exp</span>
                        <h6>14</h6>
                    </li>
                    <li class="col-4">
                        <span>Awards</span>
                        <h6>13</h6>
                    </li>
                    <li class="col-4">
                        <span>Clients</span>
                        <h6>213</h6>
                    </li>
                </ul>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#admin">Admin</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#graduation"><i class="fa fa-graduation-cap"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sub_menu"><i class="icon-grid"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
            </ul>
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane active" id="admin">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li class="active"><a href="index.html"><i class="icon-home"></i><span>Dashboard</span></a></li>
                            
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Banner Management</span> </a>
                                <ul>
                                    <li><a href="{{ route('banner.index') }}">All Banners</a></li>
                                     <li><a href="{{ route('banner.create') }}">Create Banner</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Category Management</span> </a>
                                <ul>
                                    <li><a href="{{route('category.index')}}">All Category</a></li>
                                     <li><a href="{{route('category.create')}}">Create Category</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-handbag"></i><span>Brand Management</span> </a>
                                <ul>
                                    <li><a href="{{route('brand.index')}}">All Brand</a></li>
                                     <li><a href="{{route('brand.create')}}">Create Brand</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Products Management</span> </a>
                                <ul>
                                    <li><a href="{{route('product.index')}}">All Products</a></li>
                                     <li><a href="{{route('product.create')}}">Add Product</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Carts Management</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                     <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Post Category</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                     <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Oder Management</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                     <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Post Tags</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                     <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Post Management</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                     <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Review Management</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                     <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>
                   
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Coupon Management</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                     <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>User Management</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                     <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-control-pause"></i><span>Comment Management</span> </a>
                                <ul>
                                    <li><a href="departments.html">All Departments</a></li>
                                     <li><a href="add-departments.html">Add Departments</a></li>
                                </ul>
                            </li>

                            <li><a href="departments.html">Settings</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane" id="graduation">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li><span>-- Professor</span></li>
                            <li><a href="app-inbox.html"><i class="icon-home"></i>Inbox App</a></li>
                            <li><a href="app-chat.html"><i class="icon-bubbles"></i>Chat App</a></li>
                            <li><a href="professors.html"><i class="icon-user"></i>All Professors</a></li>
                            <li><a href="professors-profile.html"><i class="icon-user"></i>My Profile</a></li>
                            <li><a href="leave.html"><i class="icon-user"></i>Leave</a></li>
                            <li><a href="attendance.html"><i class="icon-user"></i>Attendance</a></li>
                            <li><a href="events.html"><i class="icon-user"></i>Events List</a></li>
                            <li><span>-- Students</span></li>
                            <li><a href="students.html"><i class="icon-user"></i>All Students</a></li>
                            <li><a href="students-profile.html"><i class="icon-user"></i>My Profile</a></li>
                            <li><a href="payments.html"><i class="icon-user"></i>Payments</a></li>
                            <li><a href="attendance.html"><i class="icon-user"></i>Attendance</a></li>
                            <li><a href="events.html"><i class="icon-user"></i>Events List</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane" id="sub_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li>
                                <a href="#Widgets" class="has-arrow"><i class="icon-puzzle"></i><span>Widgets</span></a>
                                <ul>
                                    <li><a href="widgets-statistics.html">Statistics Widgets</a></li>
                                    <li><a href="widgets-data.html">Data Widgets</a></li>
                                    <li><a href="widgets-chart.html">Chart Widgets</a></li>
                                    <li><a href="widgets-weather.html">Weather Widgets</a></li>
                                    <li><a href="widgets-social.html">Social Widgets</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Pages" class="has-arrow"><i class="icon-docs"></i><span>More Pages</span></a>
                                <ul>
                                    <li><a href="page-blank.html">Blank Page</a></li>
                                    <li><a href="page-gallery.html">Image Gallery <span class="badge badge-default float-right">v1</span></a> </li>
                                    <li><a href="page-gallery2.html">Image Gallery <span class="badge badge-warning float-right">v2</span></a> </li>
                                    <li><a href="page-timeline.html">Timeline</a></li>
                                    <li><a href="page-timeline-h.html">Horizontal Timeline</a></li>
                                    <li><a href="page-pricing.html">Pricing</a></li>
                                    <li><a href="page-invoices.html">Invoices</a></li>
                                    <li><a href="page-invoices2.html">Invoices <span class="badge badge-warning float-right">v2</span></a></li>
                                    <li><a href="page-search-results.html">Search Results</a></li>
                                    <li><a href="page-helper-class.html">Helper Classes</a></li>
                                    <li><a href="page-maintenance.html">Maintenance</a></li>
                                    <li><a href="page-testimonials.html">Testimonials</a></li>
                                    <li><a href="page-faq.html">FAQs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i> <span>UI Elements</span></a>
                                <ul>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-tabs.html">Tabs</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                    <li><a href="ui-icons.html">Icons</a></li>
                                    <li><a href="ui-notifications.html">Notifications</a></li>
                                    <li><a href="ui-colors.html">Colors</a></li>
                                    <li><a href="ui-dialogs.html">Dialogs</a></li>
                                    <li><a href="ui-list-group.html">List Group</a></li>
                                    <li><a href="ui-media-object.html">Media Object</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-nestable.html">Nestable</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-range-sliders.html">Range Sliders</a></li>
                                    <li><a href="ui-treeview.html">Treeview</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#forms" class="has-arrow"><i class="icon-pencil"></i> <span>Forms</span></a>
                                <ul>
                                    <li><a href="forms-validation.html">Form Validation</a></li>
                                    <li><a href="forms-advanced.html">Advanced Elements</a></li>
                                    <li><a href="forms-basic.html">Basic Elements</a></li>
                                    <li><a href="forms-wizard.html">Form Wizard</a></li>
                                    <li><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>
                                    <li><a href="forms-cropping.html">Image Cropping</a></li>
                                    <li><a href="forms-summernote.html">Summernote</a></li>
                                    <li><a href="forms-editors.html">CKEditor</a></li>
                                    <li><a href="forms-markdown.html">Markdown</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Tables" class="has-arrow"><i class="icon-tag"></i> <span>Tables</span></a>
                                <ul>
                                    <li><a href="table-basic.html">Tables Example<span class="badge badge-info float-right">New</span></a> </li>
                                    <li><a href="table-normal.html">Normal Tables</a> </li>
                                    <li><a href="table-jquery-datatable.html">Jquery Datatables</a> </li>
                                    <li><a href="table-editable.html">Editable Tables</a> </li>
                                    <li><a href="table-color.html">Tables Color</a> </li>
                                    <li><a href="table-filter.html">Table Filter <span class="badge badge-info float-right">New</span></a> </li>
                                    <li><a href="table-dragger.html">Table dragger <span class="badge badge-info float-right">New</span></a> </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#charts" class="has-arrow"><i class="icon-bar-chart"></i> <span>Charts</span></a>
                                <ul>
                                    <li><a href="chart-morris.html">Morris</a> </li>
                                    <li><a href="chart-flot.html">Flot</a> </li>
                                    <li><a href="chart-chartjs.html">ChartJS</a> </li>
                                    <li><a href="chart-jquery-knob.html">Jquery Knob</a> </li>
                                    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                    <li><a href="chart-peity.html">Peity</a></li>
                                    <li><a href="chart-c3.html">C3 Charts</a></li>
                                    <li><a href="chart-gauges.html">Gauges</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Maps" class="has-arrow"><i class="icon-map"></i> <span>Maps</span></a>
                                <ul>
                                    <li><a href="map-google.html">Google Map</a></li>
                                    <li><a href="map-yandex.html">Yandex Map</a></li>
                                    <li><a href="map-jvectormap.html">jVector Map</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane p-l-15 p-r-15" id="setting">
                    <h6>Choose Skin</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>                   
                        <li data-theme="blue" class="active">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="blush">
                            <div class="blush"></div>
                            <span>Blush</span>
                        </li>
                    </ul>
                    <hr>
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Report Panel Usag</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Email Redirect</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Notifications</span>
                            </label>                      
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Auto Updates</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Offline</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Location Permission</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>