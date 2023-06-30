@extends('admin.layouts.app')
@section('title')
{{ isset($title) ? $title : "Dashboard"; }}
@endsection
@section('content')
<div class="row" style="display: inline-block;">
    <div class="tile_count">
        <div class="col-md-2 col-sm-4  tile_stats_count">
            <span class="count_top">
                <i class="fa fa-users"></i>
                Type Role
            </span>
            <div class="count">
                {{ str_pad($jml_role, 4, '0', STR_PAD_LEFT); }}
            </div>
        </div>
        <div class="col-md-2 col-sm-4  tile_stats_count">
            <span class="count_top">
                <i class="fa fa-user"></i>
                Total Users
            </span>
            <div class="count">
                {{ str_pad($jml_user, 4, '0', STR_PAD_LEFT); }}
            </div>
        </div>
        <div class="col-md-2 col-sm-4  tile_stats_count">
            <span class="count_top">
                <i class="fa fa-user"></i>
                Active Users
            </span>
            <div class="count">
                {{ str_pad($jml_userac, 4, '0', STR_PAD_LEFT); }}
            </div>
        </div>
        <div class="col-md-2 col-sm-4  tile_stats_count">
            <span class="count_top">
                <i class="fa fa-user"></i>
                Non Active Users
            </span>
            <div class="count">
                {{ str_pad($jml_userdeac, 4, '0', STR_PAD_LEFT); }}
            </div>
        </div>
        <div class="col-md-2 col-sm-4  tile_stats_count">
            <span class="count_top">
                <i class="fa fa-user"></i>
                Type Of Items
            </span>
            <div class="count">
                {{ str_pad($categoryProduct, 4, '0', STR_PAD_LEFT); }}
            </div>
        </div>
        <div class="col-md-2 col-sm-4  tile_stats_count">
            <span class="count_top">
                <i class="fa fa-user"></i>
                Non Void Items
            </span>
            <div class="count">
                {{ str_pad($jml_product, 4, '0', STR_PAD_LEFT); }}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="dashboard_graph">
            <div class="row x_title">
                <div class="col-md-6">
                    <h3>Log Login <small>Subtitle</small></h3>
                </div>
                <div class="col-md-6">
                    <div id="reportrange" class="pull-right"
                        style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-7">
                <div id="chart_login">

                </div>
            </div>
            <div class="col-md-5 col-sm-5 bg-white">
                <div class="x_title">
                    <h2>Table Log Auth</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-12 col-sm-12 ">
                    <table id="" class="table table-hover table-striped table-bordered dt-responsive nowrap bulk_action"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody id="tabel_user">
                            @forelse($data_logauth as $data_logauth)
                            <tr>
                                <td style="text-transform:uppercase;">{{ $data_logauth->activity }}</td>
                                <td style="text-transform:uppercase;">
                                    @if($data_logauth->status == "success")
                                    <span class="badge badge-success">{{ $data_logauth->status }}</span>
                                    @elseif($data_logauth->status == "failed")
                                    <span class="badge badge-danger">{{ $data_logauth->status }}</span>
                                    @else
                                    <span class="badge badge-warning">{{ $data_logauth->status }}</span>
                                    @endif
                                </td>
                                <td>{{ $data_logauth->updated_at }}&nbsp;||
                                    {{
                                    $data_logauth->updated_at->diffForHumans([
                                    'parts' => 3,
                                    'join' => true,
                                    ])
                                    }}
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">Data Log Auth Kosong</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<br />
<div class="row">
    <div class="col-md-4 col-sm-4 ">
        <div class="x_panel tile fixed_height_320">
            <div class="x_title">
                <h2>App Versions</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <h4>App Usage across versions</h4>
                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>0.1.5.2</span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100" style="width: 66%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>123k</span>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>0.1.5.3</span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100" style="width: 45%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>53k</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>0.1.5.4</span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100" style="width: 25%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>23k</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>0.1.5.5</span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100" style="width: 5%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>3k</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>0.1.5.6</span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100" style="width: 2%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>1k</span>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-4 ">
        <div class="x_panel tile fixed_height_320 overflow_hidden">
            <div class="x_title">
                <h2>Device Usage</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="" style="width:100%">
                    <tr>
                        <th style="width:37%;">
                            <p>Top 5</p>
                        </th>
                        <th>
                            <div class="col-lg-7 col-md-7 col-sm-7 ">
                                <p class="">Device</p>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 ">
                                <p class="">Progress</p>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <canvas class="canvasDoughnut" height="140" width="140"
                                style="margin: 15px 10px 10px 0"></canvas>
                        </td>
                        <td>
                            <table class="tile_info">
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square blue"></i>IOS </p>
                                    </td>
                                    <td>30%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square green"></i>Android </p>
                                    </td>
                                    <td>10%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square purple"></i>Blackberry </p>
                                    </td>
                                    <td>20%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square aero"></i>Symbian </p>
                                    </td>
                                    <td>15%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square red"></i>Others </p>
                                    </td>
                                    <td>30%</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>


    <div class="col-md-4 col-sm-4 ">
        <div class="x_panel tile fixed_height_320">
            <div class="x_title">
                <h2>Quick Settings</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="dashboard-widget-content">
                    <ul class="quick-list">
                        <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
                        </li>
                        <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
                        </li>
                        <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                        <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                        </li>
                        <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                        <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                        </li>
                        <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
                        </li>
                    </ul>

                    <div class="sidebar-widget">
                        <h4>Profile Completion</h4>
                        <canvas width="150" height="80" id="chart_gauge_01" class=""
                            style="width: 160px; height: 100px;"></canvas>
                        <div class="goal-wrapper">
                            <span id="gauge-text" class="gauge-value pull-left">0</span>
                            <span class="gauge-value pull-left">%</span>
                            <span id="goal-text" class="goal-value pull-right">100%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-4 col-sm-4 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Recent Activities <small>Sessions</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="dashboard-widget-content">

                    <ul class="list-unstyled timeline widget">
                        <li>
                            <div class="block">
                                <div class="block_content">
                                    <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                                    <div class="byline">
                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                    </div>
                                    <p class="excerpt">Film festivals used to be do-or-die moments for
                                        movie makers. They were where you met the producers that could
                                        fund your project, and if the buyers liked your flick, they’d
                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <div class="block_content">
                                    <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                                    <div class="byline">
                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                    </div>
                                    <p class="excerpt">Film festivals used to be do-or-die moments for
                                        movie makers. They were where you met the producers that could
                                        fund your project, and if the buyers liked your flick, they’d
                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <div class="block_content">
                                    <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                                    <div class="byline">
                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                    </div>
                                    <p class="excerpt">Film festivals used to be do-or-die moments for
                                        movie makers. They were where you met the producers that could
                                        fund your project, and if the buyers liked your flick, they’d
                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <div class="block_content">
                                    <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                                    <div class="byline">
                                        <span>13 hours ago</span> by <a>Jane Smith</a>
                                    </div>
                                    <p class="excerpt">Film festivals used to be do-or-die moments for
                                        movie makers. They were where you met the producers that could
                                        fund your project, and if the buyers liked your flick, they’d
                                        pay to Fast-forward and… <a>Read&nbsp;More</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-8 col-sm-8 ">



        <div class="row">

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Visitors location <small>geo-presentation</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="dashboard-widget-content">
                            <div class="col-md-4 hidden-small">
                                <h2 class="line_30">125.7k Views from 60 countries</h2>

                                <table class="countries_list">
                                    <tbody>
                                        <tr>
                                            <td>United States</td>
                                            <td class="fs15 fw700 text-right">33%</td>
                                        </tr>
                                        <tr>
                                            <td>France</td>
                                            <td class="fs15 fw700 text-right">27%</td>
                                        </tr>
                                        <tr>
                                            <td>Germany</td>
                                            <td class="fs15 fw700 text-right">16%</td>
                                        </tr>
                                        <tr>
                                            <td>Spain</td>
                                            <td class="fs15 fw700 text-right">11%</td>
                                        </tr>
                                        <tr>
                                            <td>Britain</td>
                                            <td class="fs15 fw700 text-right">10%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="world-map-gdp" class="col-md-8 col-sm-12 " style="height:230px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">


            <!-- Start to do list -->
            <div class="col-md-6 col-sm-6 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>To Do List <small>Sample tasks</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="">
                            <ul class="to_do">
                                <li>
                                    <p>
                                        <input type="checkbox" class="flat"> Schedule meeting with new
                                        client
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <input type="checkbox" class="flat"> Create email address for
                                        new intern
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <input type="checkbox" class="flat"> Have IT fix the network
                                        printer
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <input type="checkbox" class="flat"> Copy backups to offsite
                                        location
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <input type="checkbox" class="flat"> Food truck fixie locavors
                                        mcsweeney
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <input type="checkbox" class="flat"> Food truck fixie locavors
                                        mcsweeney
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <input type="checkbox" class="flat"> Create email address for
                                        new intern
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <input type="checkbox" class="flat"> Have IT fix the network
                                        printer
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <input type="checkbox" class="flat"> Copy backups to offsite
                                        location
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End to do list -->

            <!-- start of weather widget -->
            <div class="col-md-6 col-sm-6 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Daily active users <small>Sessions</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="temperature"><b>Monday</b>, 07:30 AM
                                    <span>F</span>
                                    <span><b>C</b></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="weather-icon">
                                    <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="weather-text">
                                    <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="weather-text pull-right">
                                <h3 class="degrees">23</h3>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="row weather-days">
                            <div class="col-sm-2">
                                <div class="daily-weather">
                                    <h2 class="day">Mon</h2>
                                    <h3 class="degrees">25</h3>
                                    <canvas id="clear-day" width="32" height="32"></canvas>
                                    <h5>15 <i>km/h</i></h5>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="daily-weather">
                                    <h2 class="day">Tue</h2>
                                    <h3 class="degrees">25</h3>
                                    <canvas height="32" width="32" id="rain"></canvas>
                                    <h5>12 <i>km/h</i></h5>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="daily-weather">
                                    <h2 class="day">Wed</h2>
                                    <h3 class="degrees">27</h3>
                                    <canvas height="32" width="32" id="snow"></canvas>
                                    <h5>14 <i>km/h</i></h5>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="daily-weather">
                                    <h2 class="day">Thu</h2>
                                    <h3 class="degrees">28</h3>
                                    <canvas height="32" width="32" id="sleet"></canvas>
                                    <h5>15 <i>km/h</i></h5>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="daily-weather">
                                    <h2 class="day">Fri</h2>
                                    <h3 class="degrees">28</h3>
                                    <canvas height="32" width="32" id="wind"></canvas>
                                    <h5>11 <i>km/h</i></h5>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="daily-weather">
                                    <h2 class="day">Sat</h2>
                                    <h3 class="degrees">26</h3>
                                    <canvas height="32" width="32" id="cloudy"></canvas>
                                    <h5>10 <i>km/h</i></h5>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end of weather widget -->
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    Highcharts.chart('chart_login', {
        title: {
            text: 'Log Login , 12/06/2023 - 13/06/2023'
        },

        subtitle: {
            text: 'Data: <a href="{{ route("log_auth.index") }}" target="_blank">Log Auth</a>'
        },

        yAxis: {
            title: {
                text: 'Total login'
            }
        },

        xAxis: {
            title: {
                text: 'Date'
            },
            category: [20, 25, 30, 35, 40, 45, 50, 55, 60],
            accessibility: {
                rangeDescription: 'Range: 20 to 60'
            }
        },

        legend: {
            enabled: false
        },

        plotOptions: {
            series: {
                marker: {
                    enabled: false
                },
                pointStart: 20,
                pointInterval: 5
            }
        },

        series: [{
            name: 'Income Distribution and Intentional Homicide Rates,',
            data: [16.56, 18.9, 21.24, 23.58, 25.92, 28.26, 30.6, 32.94, 35.28]
        }]
    });
</script>
@endsection