@extends('admin.layout')
@section('content')
<!--  BEGIN CONTENT PART  -->

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Sales Dashboard</h3>
            </div>
            <div class="dropdown filter custom-dropdown-icon">
                <a class="dropdown-toggle btn" href="#" role="button" id="filterDropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><span class="text"><span>Show</span> : Daily Sales</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg></a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="filterDropdown">
                    <a class="dropdown-item" data-value="<span>Show</span> : Daily Sales"
                        href="javascript:void(0);">Daily Sales</a>
                    <a class="dropdown-item" data-value="<span>Show</span> : Weekly Sales"
                        href="javascript:void(0);">Weekly Sales</a>
                    <a class="dropdown-item" data-value="<span>Show</span> : Monthly Sales"
                        href="javascript:void(0);">Monthly Sales</a>
                    <a class="dropdown-item" data-value="Download All" href="javascript:void(0);">Download All</a>
                    <a class="dropdown-item" data-value="Share Statistics" href="javascript:void(0);">Share
                        Statistics</a>
                </div>
            </div>
        </div>

        <div class="row layout-top-spacing">

            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-one">
                    <div class="widget-heading">
                        <h5 class="">Revenue</h5>
                        <ul class="tabs tab-pills">
                            <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Monthly</a></li>
                        </ul>
                    </div>

                    <div class="widget-content">
                        <div class="tabs tab-content">
                            <div id="content_1" class="tabcontent">
                                <div id="revenueMonthly"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-two">
                    <div class="widget-heading">
                        <h5 class="">Sales by Category</h5>
                    </div>
                    <div class="widget-content">
                        <div id="chart-2" class=""></div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget-two">
                    <div class="widget-content">
                        <div class="w-numeric-value">
                            <div class="w-content">
                                <span class="w-value">Daily sales</span>
                                <span class="w-numeric-title">Go to columns for details.</span>
                            </div>
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-dollar-sign">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="w-chart">
                            <div id="daily-sales"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget-three">
                    <div class="widget-heading">
                        <h5 class="">Summary</h5>
                    </div>
                    <div class="widget-content">

                        <div class="order-summary">

                            <div class="summary-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-shopping-bag">
                                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                                    </svg>
                                </div>
                                <div class="w-summary-details">

                                    <div class="w-summary-info">
                                        <h6>Income</h6>
                                        <p class="summary-count">$92,600</p>
                                    </div>

                                    <div class="w-summary-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-secondary" role="progressbar"
                                                style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="summary-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-tag">
                                        <path
                                            d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                        </path>
                                        <line x1="7" y1="7" x2="7" y2="7"></line>
                                    </svg>
                                </div>
                                <div class="w-summary-details">

                                    <div class="w-summary-info">
                                        <h6>Profit</h6>
                                        <p class="summary-count">$37,515</p>
                                    </div>

                                    <div class="w-summary-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar"
                                                style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="summary-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-credit-card">
                                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                        <line x1="1" y1="10" x2="23" y2="10"></line>
                                    </svg>
                                </div>
                                <div class="w-summary-details">

                                    <div class="w-summary-info">
                                        <h6>Expenses</h6>
                                        <p class="summary-count">$55,085</p>
                                    </div>

                                    <div class="w-summary-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar"
                                                style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget-one">
                    <div class="widget-content">
                        <div class="w-numeric-value">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shopping-cart">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </div>
                            <div class="w-content">
                                <span class="w-value">3,192</span>
                                <span class="w-numeric-title">Total Orders</span>
                            </div>
                        </div>
                        <div class="w-chart">
                            <div id="total-orders"></div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="row widget-statistic">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                </div>
                                <p class="w-value">31.6K</p>
                                <h5 class="">Followers</h5>
                            </div>
                            <div class="widget-content">    
                                <div class="w-chart">
                                    <div id="hybrid_followers"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                </div>
                                <p class="w-value">1,900</p>
                                <h5 class="">Referral</h5>
                            </div>
                            <div class="widget-content">    
                                <div class="w-chart">
                                    <div id="hybrid_followers1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                </div>
                                <p class="w-value">18.2%</p>
                                <h5 class="">Engagement</h5>
                            </div>
                            <div class="widget-content">    
                                <div class="w-chart">
                                    <div id="hybrid_followers3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                </div>
                                <p class="w-value">18.2%</p>
                                <h5 class="">Engagement</h5>
                            </div>
                            <div class="widget-content">    
                                <div class="w-chart">
                                    <div id="hybrid_followers4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-one">
                    <div class="widget-heading">
                        <h5 class="">Transactions</h5>
                    </div>

                    <div class="widget-content">
                        <div class="transactions-list">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-home">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>Electricity Bill</h4>
                                        <p class="meta-date">4 Aug 1:00PM</p>
                                    </div>

                                </div>
                                <div class="t-rate rate-dec">
                                    <p><span>-$16.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-down">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <polyline points="19 12 12 19 5 12"></polyline>
                                        </svg></p>
                                </div>
                            </div>
                        </div>

                        <div class="transactions-list">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="avatar avatar-xl">
                                            <span class="avatar-title rounded-circle">SP</span>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>Shaun Park</h4>
                                        <p class="meta-date">4 Aug 1:00PM</p>
                                    </div>
                                </div>
                                <div class="t-rate rate-inc">
                                    <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-up">
                                            <line x1="12" y1="19" x2="12" y2="5"></line>
                                            <polyline points="5 12 12 5 19 12"></polyline>
                                        </svg></p>
                                </div>
                            </div>
                        </div>

                        <div class="transactions-list">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="avatar avatar-xl">
                                            <span class="avatar-title rounded-circle">AD</span>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>Amy Diaz</h4>
                                        <p class="meta-date">4 Aug 1:00PM</p>
                                    </div>

                                </div>
                                <div class="t-rate rate-inc">
                                    <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-up">
                                            <line x1="12" y1="19" x2="12" y2="5"></line>
                                            <polyline points="5 12 12 5 19 12"></polyline>
                                        </svg></p>
                                </div>
                            </div>
                        </div>

                        <div class="transactions-list">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-home">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>Netflix</h4>
                                        <p class="meta-date">4 Aug 1:00PM</p>
                                    </div>

                                </div>
                                <div class="t-rate rate-dec">
                                    <p><span>-$32.00</span> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-down">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <polyline points="19 12 12 19 5 12"></polyline>
                                        </svg></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-activity-four">

                    <div class="widget-heading">
                        <h5 class="">Recent Activities</h5>
                    </div>

                    <div class="widget-content">

                        <div class="mt-container mx-auto">
                            <div class="timeline-line">

                                <div class="item-timeline timeline-primary">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p><span>Updated</span> Server Logs</p>
                                        <span class="badge badge-danger">Pending</span>
                                        <p class="t-time">Just Now</p>
                                    </div>
                                </div>

                                <div class="item-timeline timeline-success">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a
                                                href="javascript:void(0);">Admin</a></p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">2 min ago</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-danger">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Backup <span>Files EOD</span></p>
                                        <span class="badge badge-danger">Pending</span>
                                        <p class="t-time">14:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-dark">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">16:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-warning">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                        <span class="badge badge-primary">In progress</span>
                                        <p class="t-time">17:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-secondary">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Rebooted Server</p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">17:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-warning">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Send contract details to Freelancer</p>
                                        <span class="badge badge-danger">Pending</span>
                                        <p class="t-time">18:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-dark">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Kelly want to increase the time of the project.</p>
                                        <span class="badge badge-primary">In Progress</span>
                                        <p class="t-time">19:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-success">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Server down for maintanence</p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">19:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-secondary">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Malicious link detected</p>
                                        <span class="badge badge-warning">Block</span>
                                        <p class="t-time">20:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-warning">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Rebooted Server</p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">23:00</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tm-action-btn">
                            <button class="btn">View All <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-account-invoice-one">

                    <div class="widget-heading">
                        <h5 class="">Account Info</h5>
                    </div>

                    <div class="widget-content">
                        <div class="invoice-box">

                            <div class="acc-total-info">
                                <h5>Balance</h5>
                                <p class="acc-amount">$470</p>
                            </div>

                            <div class="inv-detail">
                                <div class="info-detail-1">
                                    <p>Monthly Plan</p>
                                    <p>$ 199.0</p>
                                </div>
                                <div class="info-detail-2">
                                    <p>Taxes</p>
                                    <p>$ 17.82</p>
                                </div>
                                <div class="info-detail-3 info-sub">
                                    <div class="info-detail">
                                        <p>Extras this month</p>
                                        <p>$ -0.68</p>
                                    </div>
                                    <div class="info-detail-sub">
                                        <p>Netflix Yearly Subscription</p>
                                        <p>$ 0</p>
                                    </div>
                                    <div class="info-detail-sub">
                                        <p>Others</p>
                                        <p>$ -0.68</p>
                                    </div>
                                </div>
                            </div>

                            <div class="inv-action">
                                <a href="" class="btn btn-dark">Summary</a>
                                <a href="" class="btn btn-danger">Transfer</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-two">

                    <div class="widget-heading">
                        <h5 class="">Recent Orders</h5>
                    </div>

                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="th-content">Customer</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Product</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Invoice</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading">Price</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Status</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name"><img src="assets/img/90x90.jpg"
                                                    alt="avatar">Andy King</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">Nike Sport</div>
                                        </td>
                                        <td>
                                            <div class="td-content">#76894</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing"><span class="">$88.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span
                                                    class="badge outline-badge-primary">Shipped</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name"><img src="assets/img/90x90.jpg"
                                                    alt="avatar">Irene Collins</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">Speakers</div>
                                        </td>
                                        <td>
                                            <div class="td-content">#75844</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing"><span class="">$84.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span
                                                    class="badge outline-badge-success">Paid</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name"><img src="assets/img/90x90.jpg"
                                                    alt="avatar">Laurie Fox</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">Camera</div>
                                        </td>
                                        <td>
                                            <div class="td-content">#66894</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing"><span class="">$126.04</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span
                                                    class="badge outline-badge-danger">Pending</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name"><img src="assets/img/90x90.jpg"
                                                    alt="avatar">Luke Ivory</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">Headphone</div>
                                        </td>
                                        <td>
                                            <div class="td-content">#46894</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing"><span class="">$56.07</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span
                                                    class="badge outline-badge-success">Paid</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name"><img src="assets/img/90x90.jpg"
                                                    alt="avatar">Ryan Collins</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">Sport</div>
                                        </td>
                                        <td>
                                            <div class="td-content">#89891</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing"><span class="">$108.09</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span
                                                    class="badge outline-badge-primary">Shipped</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name"><img src="assets/img/90x90.jpg"
                                                    alt="avatar">Nia Hillyer</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">Sunglasses</div>
                                        </td>
                                        <td>
                                            <div class="td-content">#26974</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing"><span class="">$168.09</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span
                                                    class="badge outline-badge-primary">Shipped</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name"><img src="assets/img/90x90.jpg"
                                                    alt="avatar">Sonia Shaw</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">Watch</div>
                                        </td>
                                        <td>
                                            <div class="td-content">#76844</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing"><span class="">$110.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span
                                                    class="badge outline-badge-success">Paid</span></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-three">

                    <div class="widget-heading">
                        <h5 class="">Top Selling Product</h5>
                    </div>

                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="th-content">Product</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading">Price</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading">Discount</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Sold</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Source</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="td-content product-name"><img src="assets/img/90x90.jpg"
                                                    alt="product">Speakers</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="pricing">$84.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="discount-pricing">$10.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content">240</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><a href="javascript:void(0);" class="">Direct</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content product-name"><img src="assets/img/90x90.jpg"
                                                    alt="product">Sunglasses</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="pricing">$56.07</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="discount-pricing">$5.07</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content">190</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><a href="javascript:void(0);" class="">Google</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content product-name"><img src="assets/img/90x90.jpg"
                                                    alt="product">Watch</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="pricing">$88.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="discount-pricing">$20.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content">66</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><a href="javascript:void(0);" class="">Ads</a></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content product-name"><img src="assets/img/90x90.jpg"
                                                    alt="product">Laptop</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="pricing">$110.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="discount-pricing">$33.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content">35</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><a href="javascript:void(0);" class="">Email</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content product-name"><img src="assets/img/90x90.jpg"
                                                    alt="product">Camera</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="pricing">$126.04</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="discount-pricing">$26.04</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content">30</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><a href="javascript:void(0);" class="">Referral</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content product-name"><img src="assets/img/90x90.jpg"
                                                    alt="product">Shoes</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="pricing">$108.09</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="discount-pricing">$47.09</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content">130</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><a href="javascript:void(0);" class="">Google</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content product-name"><img src="assets/img/90x90.jpg"
                                                    alt="product">Headphone</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="pricing">$168.09</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="discount-pricing">$60.09</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content">170</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><a href="javascript:void(0);" class="">Ads</a></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All
                    rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-heart">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                        </path>
                    </svg></p>
            </div>
        </div>

    </div>
</div>
<!--  END CONTENT PART  -->
@endsection