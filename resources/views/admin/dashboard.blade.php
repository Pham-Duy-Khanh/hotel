@include('admin.content.header');
    <!-- Sidebar End -->

    <!-- Main Container Start -->
    <main class="main--container">
        <!-- Page Header Start -->
        <section class="page--header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Page Title Start -->
                        <h2 class="page--title h5">Dashboard</h2>
                        <!-- Page Title End -->

                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active"><span>Dashboard</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <!-- Summary Widget Start -->
                        <div class="summary--widget">
                            <div class="summary--item">
                                <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,9,7,9,11,9,7,5,7,7,9,11</p>

                                <p class="summary--title">This Month</p>
                                <p class="summary--stats text-green">2,371,527</p>
                            </div>

                            <div class="summary--item">
                                <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7</p>

                                <p class="summary--title">Last Month</p>
                                <p class="summary--stats text-orange">2,527,371</p>
                            </div>
                        </div>
                        <!-- Summary Widget End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Header End -->

        <!-- Main Content Start -->
        <section class="main--content">
            <div class="row gutter-20">
                <div class="col-md-4">
                    <div class="panel">
                        <!-- Mini Stats Panel Start -->
                        <div class="miniStats--panel">
                            <div class="miniStats--header bg-darker">
                                <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#2bb3c0">5,6,9,4,9,5,3,5,9,15,3,2,2,3,9,11,9,7,20,9,7,6</p>

                                <p class="miniStats--label text-white bg-blue">
                                    <i class="fa fa-level-up-alt"></i>
                                    <span>10%</span>
                                </p>
                            </div>

                            <div class="miniStats--body">
                                <i class="miniStats--icon fa fa-user text-blue"></i>

                                <p class="miniStats--caption text-blue">Monthly</p>
                                <h3 class="miniStats--title h4">New Users</h3>
                                <p class="miniStats--num text-blue">13,450</p>
                            </div>
                        </div>
                        <!-- Mini Stats Panel End -->
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel">
                        <!-- Mini Stats Panel Start -->
                        <div class="miniStats--panel">
                            <div class="miniStats--header bg-darker">
                                <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#e16123">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>

                                <p class="miniStats--label text-white bg-orange">
                                    <i class="fa fa-level-down-alt"></i>
                                    <span>10%</span>
                                </p>
                            </div>

                            <div class="miniStats--body">
                                <i class="miniStats--icon fa fa-ticket-alt text-orange"></i>

                                <p class="miniStats--caption text-orange">Monthly</p>
                                <h3 class="miniStats--title h4">Tickets Answered</h3>
                                <p class="miniStats--num text-orange">450</p>
                            </div>
                        </div>
                        <!-- Mini Stats Panel End -->
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel">
                        <!-- Mini Stats Panel Start -->
                        <div class="miniStats--panel">
                            <div class="miniStats--header bg-darker">
                                <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#009378">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>

                                <p class="miniStats--label text-white bg-green">
                                    <i class="fa fa-level-up-alt"></i>
                                    <span>10%</span>
                                </p>
                            </div>

                            <div class="miniStats--body">
                                <i class="miniStats--icon fa fa-rocket text-green"></i>

                                <p class="miniStats--caption text-green">Monthly</p>
                                <h3 class="miniStats--title h4">Projects Launched</h3>
                                <p class="miniStats--num text-green">3,130,300</p>
                            </div>
                        </div>
                        <!-- Mini Stats Panel End -->
                    </div>
                </div>

                <div class="col-xl-8 col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Yearly Earning Graph Overview</h3>

                            <div class="dropdown">
                                <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>

                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                    <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                    <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-chart">
                            <!-- Morris Area Chart 01 Start -->
                            <div id="morrisAreaChart01" class="chart--body area--chart style--1"></div>
                            <!-- Morris Area Chart 01 End -->

                            <div class="chart--stats style--1">
                                <ul class="nav">
                                    <li data-overlay="1 orange">
                                        <p class="amount">$10,320,340</p>
                                        <p>
                                            <span class="label">Order</span>
                                            <span class="text-red"><i class="fa fa-long-arrow-alt-down"></i>2.25%</span>
                                        </p>
                                    </li>
                                    <li data-overlay="1 red">
                                        <p class="amount">$235,090</p>
                                        <p>
                                            <span class="label">Shipment</span>
                                            <span class="text-green"><i class="fa fa-long-arrow-alt-up"></i>2.25%</span>
                                        </p>
                                    </li>
                                    <li data-overlay="1 blue">
                                        <p class="amount">$134,900</p>
                                        <p>
                                            <span class="label">Tax</span>
                                            <span class="text-red"><i class="fa fa-long-arrow-alt-down"></i>2.25%</span>
                                        </p>
                                    </li>
                                    <li data-overlay="1 green">
                                        <p class="amount">$1,340</p>
                                        <p>
                                            <span class="label">Revenue</span>
                                            <span class="text-green"><i class="fa fa-long-arrow-alt-up"></i>2.25%</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Market Trends</h3>

                            <div class="dropdown">
                                <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>

                                <ul class="dropdown-menu">
                                    <li><a href="#">This Week</a></li>
                                    <li><a href="#">Last Week</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-chart">
                            <!-- Morris Area Chart 02 Start -->
                            <div id="morrisAreaChart02" class="chart--body area--chart style--1"></div>
                            <!-- Morris Area Chart 02 End -->

                            <div class="chart--stats style--2">
                                <ul class="nav">
                                    <li>
                                        <p class="amount">$56,700</p>
                                        <p data-overlay="1 blue"><span class="label">TOTAL EQUITY</span></p>
                                    </li>
                                    <li>
                                        <p class="amount">$4,000</p>
                                        <p data-overlay="1 red"><span class="label">TOTAL DEBT</span></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Sales Progress</h3>

                            <div class="dropdown">
                                <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>

                                <ul class="dropdown-menu">
                                    <li><a href="#">This Week</a></li>
                                    <li><a href="#">Last Week</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-chart">
                            <!-- Morris Line Chart 01 Start -->
                            <div id="morrisLineChart01" class="chart--body line--chart style--1"></div>
                            <!-- Morris Line Chart 01 End -->
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Monthly Traffic</h3>

                            <div class="dropdown">
                                <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>

                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                    <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                    <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-chart">
                            <!-- Morris Line Chart 02 Start -->
                            <div id="morrisLineChart02" class="chart--body line--chart style--2"></div>
                            <!-- Morris Line Chart 02 End -->

                            <div class="chart--stats style--3">
                                <ul class="nav">
                                    <li>
                                        <p data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#2bb3c0">0,5,9,7,12,15,12,5</p>

                                        <p><span class="label">Total Visitors</span></p>
                                        <p class="amount">12,202</p>
                                    </li>
                                    <li>
                                        <p data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">0,15,12,5,5,9,7,12</p>

                                        <p><span class="label">Total Sales</span></p>
                                        <p class="amount">25,051</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <select name="filter" data-trigger="selectmenu" data-minimum-results-for-search="-1">
                                    <option value="top-search">Top Search</option>
                                    <option value="average-search">Average Search</option>
                                </select>
                            </h3>

                            <div class="dropdown">
                                <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>

                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                    <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                    <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <!-- Vector Map Start -->
                            <div class="vector--map" data-trigger="jvectorMap" data-map-selected='["US", "CA", "MX", "GT", "HN", "BZ", "SV", "NI", "CR", "BS", "CU", "JM", "HT", "DO", "PR", "PA", "CO", "VE", "TT", "GY", "SR", "GL", "EC", "PE", "BR", "BO", "PY", "CL", "AR", "UY", "FK"]'></div>
                            <!-- Vector Map End -->

                            <div class="map--stats">
                                <table class="table">
                                    <tr>
                                        <td>United States</td>
                                        <td>65%</td>
                                    </tr>
                                    <tr>
                                        <td>United Kingdom</td>
                                        <td>15%</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <a href="#" class="btn-link">View All</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Running Projects Progress</h3>

                            <div class="dropdown">
                                <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>

                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                    <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                    <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table style--1">
                                    <tbody>
                                    <!-- Table Row Start -->
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="media--img">
                                                    <img src="assets/img/projects/thumb-01.jpg" alt="">
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="media">
                                                <div class="media--info">
                                                    <h3 class="media--name h5">Project Title</h3>
                                                    <p class="media--desc">Menz Products</p>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <p>Last Updated <strong class="fw--600 text-muted">Today at 4:24 AM</strong></p>
                                        </td>

                                        <td>|</td>

                                        <td>
                                            <p><strong class="fw--600 text-muted">May 6, 2017</strong><br>8:30</p>
                                        </td>

                                        <td>
                                            <p class="text-right">30% Completed</p>

                                            <div class="progress">
                                                <div class="progress-bar bg-red w-25"></div>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="#" class="remove btn-link fs--18">&times;</a>
                                        </td>
                                    </tr>
                                    <!-- Table Row End -->

                                    <!-- Table Row Start -->
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="media--img">
                                                    <img src="assets/img/projects/thumb-02.jpg" alt="">
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="media">
                                                <div class="media--info">
                                                    <h3 class="media--name h5">Project Title</h3>
                                                    <p class="media--desc">Menz Products</p>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <p>Last Updated <strong class="fw--600 text-muted">Today at 4:24 AM</strong></p>
                                        </td>

                                        <td>|</td>

                                        <td>
                                            <p><strong class="fw--600 text-muted">May 6, 2017</strong><br>8:30</p>
                                        </td>

                                        <td>
                                            <p class="text-right">50% Completed</p>

                                            <div class="progress">
                                                <div class="progress-bar bg-blue w-50"></div>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="#" class="remove btn-link fs--18">&times;</a>
                                        </td>
                                    </tr>
                                    <!-- Table Row End -->

                                    <!-- Table Row Start -->
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="media--img">
                                                    <img src="assets/img/projects/thumb-03.jpg" alt="">
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="media">
                                                <div class="media--info">
                                                    <h3 class="media--name h5">Project Title</h3>
                                                    <p class="media--desc">Menz Products</p>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <p>Last Updated <strong class="fw--600 text-muted">Today at 4:24 AM</strong></p>
                                        </td>

                                        <td>|</td>

                                        <td>
                                            <p><strong class="fw--600 text-muted">May 6, 2017</strong><br>8:30</p>
                                        </td>

                                        <td>
                                            <p class="text-right">80% Completed</p>

                                            <div class="progress">
                                                <div class="progress-bar bg-green w-75"></div>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="#" class="remove btn-link fs--18">&times;</a>
                                        </td>
                                    </tr>
                                    <!-- Table Row End -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">To-Do List</h3>

                            <div class="dropdown">
                                <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>

                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                    <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="todo--panel">
                            <form action="#">
                                <ul class="list-group" data-trigger="scrollbar">
                                    <li class="list-group-item">
                                        <label class="todo--label">
                                            <input type="checkbox" name="todo_id" value="1" class="todo--input" checked>
                                            <span class="todo--text">Schedule Meeting</span>
                                        </label>

                                        <a href="#" class="todo--remove">&times;</a>
                                    </li>
                                    <li class="list-group-item">
                                        <label class="todo--label">
                                            <input type="checkbox" name="todo_id" value="2" class="todo--input">
                                            <span class="todo--text">Call Clients To Follow-Up</span>
                                        </label>

                                        <a href="#" class="todo--remove">&times;</a>
                                    </li>
                                    <li class="list-group-item">
                                        <label class="todo--label">
                                            <input type="checkbox" name="todo_id" value="3" class="todo--input" checked>
                                            <span class="todo--text">Book Flight For Holiday</span>
                                        </label>

                                        <a href="#" class="todo--remove">&times;</a>
                                    </li>
                                    <li class="list-group-item">
                                        <label class="todo--label">
                                            <input type="checkbox" name="todo_id" value="4" class="todo--input">
                                            <span class="todo--text">Forward Important Tasks</span>
                                        </label>

                                        <a href="#" class="todo--remove">&times;</a>
                                    </li>
                                    <li class="list-group-item">
                                        <label class="todo--label">
                                            <input type="checkbox" name="todo_id" value="6" class="todo--input">
                                            <span class="todo--text">Important Tasks</span>
                                        </label>

                                        <a href="#" class="todo--remove">&times;</a>
                                    </li>
                                </ul>

                                <div class="input-group">
                                    <input type="text" name="todo" placeholder="Add New Task" class="form-control" autocomplete="off" required>

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn-link">+</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <select name="filter" data-trigger="selectmenu" data-minimum-results-for-search="-1">
                                    <option value="top-search">Recent Orders</option>
                                    <option value="average-search">Latest Orders</option>
                                </select>
                            </h3>

                            <div class="dropdown">
                                <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>

                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                    <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                    <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table style--2">
                                    <thead>
                                    <tr>
                                        <th>Product Image</th>
                                        <th>Product ID</th>
                                        <th>Customer Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Tracking No.</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- Table Row Start -->
                                    <tr>
                                        <td><img src="assets/img/products/thumb-01.jpg" alt=""></td>
                                        <td>3BSD59</td>
                                        <td><a href="#" class="btn-link">Leisure Suit Casual</a></td>
                                        <td>$99</td>
                                        <td>2</td>
                                        <td><span class="text-muted">#BG6R9853lP</span></td>
                                        <td><span class="label label-success">Paid</span></td>
                                    </tr>
                                    <!-- Table Row End -->

                                    <!-- Table Row Start -->
                                    <tr>
                                        <td><img src="assets/img/products/thumb-02.jpg" alt=""></td>
                                        <td>3BSD59</td>
                                        <td><a href="#" class="btn-link">Leisure Suit Casual</a></td>
                                        <td>$99</td>
                                        <td>2</td>
                                        <td><span class="text-muted">#BG6R9853lP</span></td>
                                        <td><span class="label label-warning">Due</span></td>
                                    </tr>
                                    <!-- Table Row End -->

                                    <!-- Table Row Start -->
                                    <tr>
                                        <td><img src="assets/img/products/thumb-03.jpg" alt=""></td>
                                        <td>3BSD59</td>
                                        <td><a href="#" class="btn-link">Leisure Suit Casual</a></td>
                                        <td>$99</td>
                                        <td>2</td>
                                        <td><span class="text-muted">#BG6R9853lP</span></td>
                                        <td><span class="label label-info">Rejected</span></td>
                                    </tr>
                                    <!-- Table Row End -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Total Overdue</h3>

                            <div class="dropdown">
                                <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>

                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                    <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                    <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-chart">
                            <div class="chart--title text-blue">
                                <h2 class="h2">$14,200,000</h2>
                            </div>

                            <!-- Morris Line Chart 03 Start -->
                            <div id="morrisLineChart03" class="chart--body line--chart style--3"></div>
                            <!-- Morris Line Chart 03 End -->

                            <div class="chart--action">
                                <a href="#" class="btn-link">Export PDF <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Overall Rating</h3>

                            <div class="dropdown">
                                <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>

                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                    <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                    <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-chart">
                            <div class="chart--body line--chart style--4" data-trigger="sparklineChart01">10,15,15,20,18,20,18,22</div>

                            <div class="chart--stats style--4">
                                <ul class="nav">
                                    <li>
                                        <span class="text">The product is awesome</span>
                                        <span class="stat">20%</span>
                                    </li>
                                    <li>
                                        <span class="text">I am so pleased</span>
                                        <span class="stat">40%</span>
                                    </li>
                                    <li>
                                        <span class="text">The product is really good</span>
                                        <span class="stat">20%</span>
                                    </li>
                                    <li>
                                        <span class="text">The product is awesome</span>
                                        <span class="stat">60%</span>
                                    </li>
                                    <li>
                                        <span class="text">I am so surprised</span>
                                        <span class="stat">20%</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Events Timeline</h3>

                            <div class="dropdown">
                                <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>

                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                    <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                    <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="cd-horizontal-timeline">
                                <div class="timeline">
                                    <div class="events-wrapper">
                                        <div class="events">
                                            <ol>
                                                <li><a href="#" data-date="10/11/2014" class="older-event">Meeting</a></li>
                                                <li><a href="#" data-date="16/11/2014" class="selected">New Project</a></li>
                                                <li><a href="#" data-date="06/12/2014">Party</a></li>
                                                <li><a href="#" data-date="06/01/2015">Dinner</a></li>
                                            </ol>

                                            <span class="filling-line"></span>
                                        </div>
                                    </div>

                                    <ul class="cd-timeline-navigation">
                                        <li><a href="#" class="prev inactive"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#" class="next"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>

                                <div class="events-content">
                                    <ol>
                                        <li data-date="10/11/2014">
                                            <div class="title">
                                                <h2 class="h4">Meeting</h2>
                                            </div>

                                            <div class="subtitle">
                                                <p>10 November 2014, 7:45 PM</p>
                                            </div>

                                            <div class="desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure maiores nulla aspernatur. Nemo doloremque a deserunt quas, sunt, voluptate inventore iure? Deserunt sit omnis quas eligendi, nulla architecto alias officia.</p>
                                            </div>
                                        </li>

                                        <li data-date="16/11/2014" class="selected">
                                            <div class="title">
                                                <h2 class="h4">New Project Lauched</h2>
                                            </div>

                                            <div class="subtitle">
                                                <p>16 November 2014, 7:45 PM</p>
                                            </div>

                                            <div class="desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure maiores nulla aspernatur. Nemo doloremque a deserunt quas, sunt, voluptate inventore iure? Deserunt sit omnis quas eligendi, nulla architecto alias officia.</p>
                                            </div>
                                        </li>

                                        <li data-date="06/12/2014">
                                            <div class="title">
                                                <h2 class="h4">Party</h2>
                                            </div>

                                            <div class="subtitle">
                                                <p>06 December 2014, 7:45 PM</p>
                                            </div>

                                            <div class="desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure maiores nulla aspernatur. Nemo doloremque a deserunt quas, sunt, voluptate inventore iure? Deserunt sit omnis quas eligendi, nulla architecto alias officia.</p>
                                            </div>
                                        </li>

                                        <li data-date="06/01/2015">
                                            <div class="title">
                                                <h2 class="h4">Dinner</h2>
                                            </div>

                                            <div class="subtitle">
                                                <p>06 January 2015, 7:45 PM</p>
                                            </div>

                                            <div class="desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure maiores nulla aspernatur. Nemo doloremque a deserunt quas, sunt, voluptate inventore iure? Deserunt sit omnis quas eligendi, nulla architecto alias officia.</p>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="panel">
                        <div class="weather--panel text-white bg-blue">
                            <div class="weather--title">
                                <i class="fa fa-map-marker-alt"></i>
                                <span>Dhaka, Bangladesh</span>
                            </div>

                            <div class="weather--info">
                                <i class="wi wi-rain-wind"></i>
                                <span>33°C</span>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="weather--panel text-white bg-orange">
                            <div class="weather--title">
                                <i class="fa fa-map-marker-alt"></i>
                                <span>Melbourne, Autoria</span>
                            </div>

                            <div class="weather--info">
                                <i class="wi wi-hot"></i>
                                <span>35°C</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="panel">
                        <div class="profile--panel">
                            <div class="img-wrapper" data-bg-img="assets/img/covers/01_800x150.jpg">
                                <div class="img online">
                                    <img src="assets/img/avatars/01_150x150.png" alt="" class="rounded-circle">
                                </div>
                            </div>

                            <div class="name">
                                <h3 class="h3">{{Session::get('username')}}</h3>
                            </div>

                            <div class="role">
                                <p>Web Developer &amp; Graphic Designer</p>
                            </div>

                            <div class="action">
                                <a href="#" class="btn btn-info">+ Follow</a>
                            </div>

                            <div class="bio">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ratione vitae aliquid aliquam provident nostrum itaque quam minima molestias.</p>
                            </div>

                            <ul class="info nav text-uppercase">
                                <li>
                                    <strong>1125</strong>
                                    <span>Items</span>
                                </li>
                                <li>
                                    <strong>133</strong>
                                    <span>Projects</span>
                                </li>
                                <li>
                                    <strong>3025</strong>
                                    <span>Followers</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Feeds &amp; Activities</h3>

                            <div class="dropdown">
                                <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>

                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                    <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="feeds-panel">
                            <ul class="nav">
                                <li>
                                    <span class="time">2 mins</span>
                                    <i class="fa fa-shopping-cart text-white bg-blue"></i>
                                    <span class="text">New Order Received</span>
                                </li>
                                <li>
                                    <span class="time">10 mins</span>
                                    <i class="fa fa-user text-white bg-orange"></i>
                                    <span class="text">Updated Profile Picture</span>
                                </li>
                                <li>
                                    <span class="time">20 mins</span>
                                    <i class="fa fa-comment text-white bg-red"></i>
                                    <span class="text"><a href="#">John Doe</a> Commented on <a href="#">News #123</a></span>
                                </li>
                                <li>
                                    <span class="time">21 mins</span>
                                    <i class="fa fa-shopping-cart text-white bg-blue"></i>
                                    <span class="text">New Order Received</span>
                                </li>
                                <li>
                                    <span class="time">25 mins</span>
                                    <i class="fa fa-user text-white bg-green"></i>
                                    <span class="text">New User Registered</span>
                                </li>
                                <li>
                                    <span class="time">25 mins</span>
                                    <i class="fa fa-times text-white bg-dark"></i>
                                    <span class="text">Order <a href="#">#24DP01</a> Rejected</span>
                                </li>
                                <li>
                                    <span class="time">2 hours</span>
                                    <i class="fa fa-comment text-white bg-red"></i>
                                    <span class="text"><a href="#">John Doe</a> Commented on <a href="#">News #123</a></span>
                                </li>
                                <li>
                                    <span class="time">3 hours</span>
                                    <i class="fa fa-user text-white bg-orange"></i>
                                    <span class="text">You Uploaded A Image</span>
                                </li>
                                <li>
                                    <span class="time">4 hours</span>
                                    <i class="fa fa-shopping-cart text-white bg-blue"></i>
                                    <span class="text">New Order Received</span>
                                </li>
                                <li>
                                    <span class="time">8 hours</span>
                                    <i class="fa fa-user text-white bg-green"></i>
                                    <span class="text">New User Registered</span>
                                </li>
                                <li>
                                    <span class="time">22 hours</span>
                                    <i class="fa fa-shopping-cart text-white bg-blue"></i>
                                    <span class="text">New Order Received</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Comments</h3>

                            <div class="dropdown">
                                <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>

                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                    <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="comments-panel">
                            <ul>
                                <li>
                                    <div class="img">
                                        <img src="assets/img/avatars/02_40x40.png" alt="" class="rounded-circle">
                                    </div>

                                    <div class="info">
                                        <h3 class="h6">John Doe</h3>

                                        <p>Lorem ipsum dolor sit elit, sed do eiusmod tempor.</p>

                                        <div class="action">
                                            <span class="status text-orange">Pending</span>
                                            <a href="#" class="btn btn-sm btn-info">Delete</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="assets/img/avatars/03_40x40.png" alt="" class="rounded-circle">
                                    </div>

                                    <div class="info">
                                        <h3 class="h6">Jane Doe</h3>

                                        <p>Lorem ipsum dolor sit elit, sed do eiusmod tempor.</p>

                                        <div class="action">
                                            <span class="status text-blue">Approved</span>
                                            <a href="#" class="btn btn-sm btn-info">Delete</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="assets/img/avatars/04_40x40.png" alt="" class="rounded-circle">
                                    </div>

                                    <div class="info">
                                        <h3 class="h6">Harry Johnson</h3>

                                        <p>Lorem ipsum dolor sit elit, sed do eiusmod tempor.</p>

                                        <div class="action">
                                            <span class="status text-red">Rejected</span>
                                            <a href="#" class="btn btn-sm btn-info">Delete</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <div class="nav">
                                <a href="#" class="next btn-link">Older Comments <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main Content End -->

        <!-- Main Footer Start -->
        <footer class="main--footer main--footer-light">
            <p>Copyright &copy; <a href="#">DAdmin</a>. All Rights Reserved.</p>
        </footer>
        <!-- Main Footer End -->
    </main>
    <!-- Main Container End -->
</div>
<!-- Wrapper End -->

<!-- Scripts -->
@include('admin.content.jsdefault');


<!-- Page Level Scripts -->

</body>
</html>
