<?php
include_once '../assets/includes/header_dashb.php'
?>

<body>
<div id="contextWrap">
    <!--sidebar-->
    <div class="ui sidebar vertical left menu overlay  borderless visible sidemenu inverted  grey"
         style="-webkit-transition-duration: 0.1s; transition-duration: 0.1s;" data-color="grey">
        <a class="item logo" href="delete_account.php">
            <img src="../assets/images/logo.png" alt="logo"/><img src="../assets/images/thumblogo.png" alt="logo" class="displaynone"/>
        </a>
        <div class="ui accordion inverted">

            <a class="title item">
                <i class="ion-speedometer titleIcon icon"></i> Dashboard <i class="dropdown icon"></i>
            </a>
            <div class="content">
                <a class="item" href="">
                    Dashboard v1
                </a>
            </div>

            <div class="title item">
                <i class="ion-ios-lightbulb titleIcon icon"></i>

                <i class="dropdown icon"></i> Apps
            </div>
            <div class="content">
                <a class="item" href="inbox.html">
                    Inbox
                </a>

                <a class="item" href="chat.html">
                    Chat
                </a>

                <a class="item" href="filter.html">
                    Filter
                </a>
                <a class="item" href="todo.html">
                    Todo
                </a>
            </div>
            <div class="title item">
                <i class="ion-bowtie titleIcon icon"></i>

                <i class="dropdown icon"></i> Settings
            </div>
            <div class="content">

                <a class="item" href="settings.html">
                    More Settings
                </a>

                <a class="item" href="../delete_account/delete_account.php">
                    Delete Account
                </a>
                <a class="item" href="../Login/login.php">
                    User Sign In
                </a>
                <a class="item" href="../Login/register.php">
                    User Sign Up
                </a>
                <a class="item" href="../Login/alter_password(1).php">
                    User Forgot Password
                </a>
                <a class="item" href="lockme.html">
                    Lock Screen
                </a>
                <a class="item" href="404.html">
                    Error 404
                </a>
                <a class="item" href="comingsoon.html">
                    Coming Soon
                </a>
            </div>
            <div class="title item">
                <i class="ion-arrow-graph-up-right titleIcon icon"></i>

                <i class="dropdown icon"></i> Chart
            </div>
            <div class="content">
                <a class="item" href="chart.html">
                    Charts 1
                </a>
                <a class="item" href="chart-2.html">
                    Charts 2
                </a>

            </div>

        </div>

        <div class="ui dropdown item displaynone scrolling">
            <span>Dashboard</span>
            <i class="ion-speedometer icon"></i>

            <div class="menu">
                <div class="header">
                    Dashboard
                </div>
                <div class="ui divider"></div>
                <a class="item" href="../dashboard/dashboard.php">
                    Dashboard v1
                </a>
            </div>
        </div>


        <div class="ui dropdown item displaynone scrolling">
            <span>Apps</span>
            <i class="ion-ios-lightbulb icon"></i>
            <div class="menu">
                <div class="header">
                    Apps
                </div>
                <div class="ui divider"></div>
                <a class="item" href="inbox.html">
                    Inbox
                </a>
                <a class="item" href="filter.html">
                    Filter
                </a>
                <a class="item" href="todo.html">
                    Todo
                </a>
            </div>
        </div>
        <div class="ui dropdown item displaynone scrolling">
            <span>Pages</span>
            <i class="ion-bowtie icon"></i>

            <div class="menu">
                <div class="header">
                    Settings
                </div>
                <div class="ui divider"></div>

                <a class="item" href="settings.html">
                    More Settings
                </a>

                <a class="item" href="../delete_account/delete_account.php">
                    Delete Account
                </a>
                <a class="item" href="../Login/login.php">
                    User Sign In
                </a>
                <a class="item" href="../Login/register.php">
                    User Sign Up
                </a>
                <a class="item" href="../Login/alter_password(1).php">
                    User Forgot Password
                </a>
                <a class="item" href="lockme.html">
                    Lock Screen
                </a>
                <a class="item" href="404.html">
                    Error 404
                </a>
                <a class="item" href="comingsoon.html">
                    Coming Soon
                </a>
            </div>
        </div>

        <div class="ui dropdown item displaynone scrolling">
            <span>Charts</span>
            <i class="ion-arrow-graph-up-right icon"></i>

            <div class="menu">
                <div class="header">
                    Charts
                </div>
                <div class="ui divider"></div>
                <a class="item" href="chart.html">
                    Charts 1
                </a>
                <a class="item" href="chart-2.html">
                    Charts 2
                </a>

            </div>
        </div>
        <div class="ui divider"></div>
        <a class="item" href="typography.html">
            <i class="ion-printer icon"></i> <span class="colhidden">Typography</span>
        </a>
        <a class="item" href="document.html">
            <i class="ion-code icon"></i> <span class="colhidden">Document</span>
        </a>
        <div class="ui divider"></div>
        <a class="item">
            <div class="ui inverted progress tiny yellow" id="sidebar_progress1">
                <div class="bar">

                </div>
                <div class="label colhidden" style="margin-top: 10px"><span
                            class="colhidden">Monthly Bandwidth activity</span></div>
            </div>

        </a>

        <a class="item">
            <div class="ui inverted progress tiny teal" id="sidebar_progress2">
                <div class="bar">

                </div>
                <div class="label colhidden" style="margin-top: 10px"><span class="colhidden">Disk Space Usage</span>
                </div>
            </div>

        </a>
        <a class="item">
            <div class="ui inverted progress tiny blue" id="sidebar_progress3">
                <div class="bar">

                </div>
                <div class="label colhidden" style="margin-top: 10px"><span class="colhidden">All matches</span></div>
            </div>

        </a>
        <div class="ui divider"></div>

        <a class="item hiddenCollapse">
            <div class="ui one tiny inverted statistics">
                <div class="statistic">
                    <div class="value counter">
                        3654
                    </div>
                    <div class="label">
                        Successful match
                    </div>
                </div>

                <div class="statistic">
                    <div class="value">
                        <img src="assets/images/avatar/people/carol.png" class="ui circular inline  top aligned image"><span
                                class="counter">5</span>
                    </div>
                    <div class="label">
                        Team Members
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!--sidebar-->
    <div class="ui right sidebar">
        <div class="ui pointing secondary two item tabular menu">
            <a class="item active" data-tab="first"><i class="red icon ion-chatbox-working icon"></i></a>

            <a class="item" data-tab="fourth"><i class="blue icon ion-gear-a"></i></a>
        </div>
        <div class="ui tab active" data-tab="first">
            <div class="ui small feed">
                <h4 class="ui header">Followers Activity</h4>
                <div class="event">
                    <div class="label">
                        <img src="../assets/images/avatar/people/Abraham.png" alt="label-image"/>
                    </div>
                    <div class="content">
                        <div class="date">
                            3 days ago
                        </div>
                        <div class="summary">
                            You added <a>RUI</a> to your <a>worker</a> group.
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="../assets/images/avatar/people/carol.png" alt="label-image"/>
                    </div>
                    <div class="content">
                        <div class="summary">
                            You added <a>RUI</a> to your <a>worker</a> group.
                            <div class="date">
                                3 days ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui tab" data-tab="fourth">
            <div class="ui form fluid">
                <div class="grouped fields">
                    <label>Connection Limited</label>
                    <div class="field">
                        <div class="ui slider checkbox">
                            <input type="radio" name="throughput" checked="checked">
                            <label>20 mbps max</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui slider checkbox">
                            <input type="radio" name="throughput">
                            <label>10mbps max</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui slider checkbox">
                            <input type="radio" name="throughput">
                            <label>5mbps max</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui slider checkbox checked">
                            <input type="radio" name="throughput">
                            <label>Unmetered</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui divider"></div>
            <div class="ui form fluid">
                <div class="grouped fields">
                    <label>Notifications</label>
                    <div class="field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" checked name="public">
                            <label class="coloring red">Enabled</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" name="public">
                            <label class="coloring green">Updates</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" name="public">
                            <label>Comments</label>
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" name="public">
                            <label>Chat</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui divider"></div>

            <h4 class="ui header">Navbar Color</h4>
            <div class="ui basic segment">

                <ul class="colorlist">
                    <li>
                        <a class="ui segment yellow inverted" data-addClass="inverted yellow">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment red inverted" data-addClass="inverted red">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment blue inverted" data-addClass="inverted blue">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment black inverted" data-addClass="inverted black">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment orange inverted" data-addClass="inverted orange">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment pink inverted" data-addClass="inverted pink">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment green inverted" data-addClass="inverted green">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment purple inverted" data-addClass="inverted purple">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment violet inverted" data-addClass="inverted violet">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment brown inverted" data-addClass="inverted brown">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment teal inverted" data-addClass="inverted teal">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment greenli inverted" data-addClass="inverted greenli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment grey inverted" data-addClass="inverted grey">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment redli inverted" data-addClass="inverted redli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment yellowli inverted" data-addClass="inverted yellowli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment blueli inverted" data-addClass="inverted blueli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkpurpleli inverted" data-addClass="inverted darkpurpleli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkorangeli inverted" data-addClass="inverted darkorangeli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment greenli2 inverted" data-addClass="inverted greenli2">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment pinkli inverted" data-addClass="inverted pinkli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment lightyellowli inverted" data-addClass="inverted lightyellowli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkli inverted" data-addClass="inverted darkli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment lightbrownli inverted" data-addClass="inverted lightbrownli">
                        </a>
                    </li>
                </ul>
            </div>
            <h4 class="ui header">Sidebar Color</h4>
            <div class="ui basic segment">

                <ul class="sidecolor">
                    <li>
                        <a class="ui segment yellow inverted" data-addClass="inverted yellow">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment red inverted" data-addClass="inverted red">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment blue inverted" data-addClass="inverted blue">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment black inverted" data-addClass="inverted black">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment orange inverted" data-addClass="inverted orange">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment pink inverted" data-addClass="inverted pink">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment green inverted" data-addClass="inverted green">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment purple inverted" data-addClass="inverted purple">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment violet inverted" data-addClass="inverted violet">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment brown inverted" data-addClass="inverted brown">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment teal inverted" data-addClass="inverted teal">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment greenli inverted" data-addClass="inverted greenli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment grey inverted" data-addClass="inverted grey">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment redli inverted" data-addClass="inverted redli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment yellowli inverted" data-addClass="inverted yellowli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment blueli inverted" data-addClass="inverted blueli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkpurpleli inverted" data-addClass="inverted darkpurpleli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkorangeli inverted" data-addClass="inverted darkorangeli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment greenli2 inverted" data-addClass="inverted greenli2">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment pinkli inverted" data-addClass="inverted pinkli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment lightyellowli inverted" data-addClass="inverted lightyellowli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment darkli inverted" data-addClass="inverted darkli">
                        </a>
                    </li>
                    <li>
                        <a class="ui segment lightbrownli inverted" data-addClass="inverted lightbrownli">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="pusher">
        <!--navbar-->
        <div class="navslide navwrap">
            <div class="ui menu icon borderless grid" data-color="inverted white">
                <a class="item labeled openbtn">
                    <i class="ion-navicon-round big icon"></i>
                </a>
                <a class="item labeled expandit" onclick="toggleFullScreen(document.body)">
                    <i class="ion-arrow-expand big icon"></i>
                </a>
                <div class="item ui colhidden">
                    <div class="ui icon input">
                        <input type="text" placeholder="Search...">
                        <i class="search icon"></i>
                    </div>
                </div>
                <div class="right menu colhidden">

                    <div class="ui dropdown item labeled icon">
                        <i class="bell icon"></i>
                        <div class="ui red label mini circular">6</div>
                        <div class="menu">
                            <div class="header">
                                group
                            </div>
                            <div class="item">
                                <img class="ui avatar image" src="../assets/images/avatar/people/enid.png" alt="label-image"/> rui
                            </div>
                            <div class="item">
                                <img class="ui avatar image" src="../assets/images/avatar/people/Hershell.png" alt="label-image"/>
                                chen
                            </div>
                            <div class="item">
                                <img class="ui avatar image" src="../assets/images/avatar/people/Rick.png" alt="label-image"/> shi
                            </div>
                        </div>
                    </div>
                    <div class="ui dropdown item">
                        Language <i class="dropdown icon"></i>
                        <div class="menu">
                            <a class="item"><i class="united kingdom flag"></i>English</a>
                            <a class="item"><i class="turkey flag"></i>Chinese</a>
                            <a class="item"><i class="spain flag"></i>Spanish</a>
                        </div>
                    </div>
                    <div class="ui dropdown item">
                        <img class="ui mini circular image" src="../assets/images/avatar/people/enid.png" alt="label-image"/>
                        <div class="menu">
                            <a class="item" href="mail.html">Inbox</a>
                            <a class="item" href="profile.html">Profile</a>
                            <a class="item" href="settings.html">Settings</a>
                            <div class="ui divider"></div>
                            <a class="item">Need Help?</a>

                        </div>
                    </div>
                    <a class="item labeled rightsidebar computer only">
                        <i class="ion-wrench large icon"></i>
                    </a>

                </div>
            </div>
        </div>
        <!--navbar-->
        <!--maincontent-->
        <div class="mainWrap navslide">
            <div class="ui equal width left aligned padded grid stackable">
                <div class="row">
                    <div class="column">
                        <div class="ui segments no-padding">
                            <div class="ui segment basic no-padding-bottom">
                                <h5 class="ui left floated header">
                                    matches Statistics
                                </h5>
                                <h5 class="ui right floated header">
                                    <i class="ion-ios-arrow-up icon link"></i>
                                    <i class="ion-ios-refresh-empty refreshing icon link"></i>
                                    <i class="ion-ios-close-empty icon link"></i>
                                </h5>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ui basic segment no-padding">
                                <div id="chart-curved-line" class="flot-chart" style="width:100%;height:200px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="sixteen wide tablet four wide computer column">

                        <div class="ui segment left aligned">

                            <div class="ui  statistic">
                                <div class="value counter">
                                    3,952
                                </div>
                                <div class="label">
                                    matches
                                </div>
                                <i class="icon ion-ios-cart teal statisticIcon"></i>
                            </div>
                            <div id="flot-order" class="flotchart"></div>
                        </div>
                    </div>

                    <div class="sixteen wide tablet four wide computer column">

                        <div class="ui segment left aligned">

                            <div class="ui  statistic">
                                <div class="value">
                                    <span class="counter">57.6</span> %
                                </div>
                                <div class="label">
                                    Average Time
                                </div>
                                <i class="icon ion-ios-timer blue statisticIcon"></i>
                            </div>
                            <div id="flot-avarage" class="flotchart"></div>
                        </div>
                    </div>
                    <div class="sixteen wide tablet four wide computer column">

                        <div class="ui segment left aligned">

                            <div class="ui  statistic">
                                <div class="value counter">
                                    3,112
                                </div>
                                <div class="label">
                                    favorite
                                </div>
                                <i class="icon ion-magnet purple statisticIcon"></i>
                            </div>
                            <div id="flot-saves" class="flotchart"></div>
                        </div>
                    </div>
                    <div class="sixteen wide tablet four wide computer column">

                        <div class="ui segment left aligned">

                            <div class="ui  statistic">

                                <div class="value counter">
                                    9,582
                                </div>
                                <div class="label">
                                    Page Views
                                </div>
                                <i class="icon ion-trophy red statisticIcon"></i>
                            </div>
                            <div id="flot-view" class="flotchart"></div>
                        </div>
                    </div>
                </div>

                <div class="stretched row">

                    <div class="sixteen wide tablet ten wide computer column">
                        <div class="ui segments">
                            <div class="ui segment no-padding-bottom">
                                <h5 class="ui left floated header">
                                    Populer Browsers
                                </h5>
                                <h5 class="ui right floated header">
                                    <i class="ion-ios-arrow-up icon link"></i>
                                    <i class="ion-ios-refresh-empty refreshing icon link"></i>
                                    <i class="ion-ios-close-empty icon link"></i>
                                </h5>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ui segment left aligned">

                                <table class="ui very basic center aligned  celled table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Project Name</th>
                                        <th>Date</th>
                                        <th>Accept</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Chrome</td>
                                        <td>10 July 2019</td>
                                        <td><i class="green check icon"></i></td>
                                        <td><a class="ui blue mini basic label">Update</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mozilla</td>
                                        <td>2 Feb 2020</td>
                                        <td><i class="red close icon"></i></td>
                                        <td><a class="ui green mini basic label">Upgrade</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>360</td>
                                        <td>29 Aug 2019</td>
                                        <td><i class="green check icon"></i></td>
                                        <td><a class="ui purple mini basic label">Coming Soon</a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Internet Explorer</td>
                                        <td>5 Sep 2019</td>
                                        <td><i class="red close icon"></i></td>
                                        <td><a class="ui red mini basic label">Released</a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Safari</td>
                                        <td>1 Jan 2020</td>
                                        <td><i class="red close icon"></i></td>
                                        <td><a class="ui yellow mini basic label">Upgrade</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="ui inverted dimmer">
                                    <div class="ui text loader">Loading</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sixteen wide tablet six wide computer column">

                        <div class="ui segment">
                            <h2 class="ui   center aligned header">

                                <div class="content">
                                    Melbourne
                                    <div class="sub header">Sunday, 29 march</div>
                                </div>
                            </h2>
                            <h3 class="ui center aligned header">14 &deg;</h3>
                            <div class="ui divider"></div>
                            <div class="ui five column centered grid">

                                <div class="column center aligned">
                                    <p>Wed</p>
                                    <p><i class="wi wi-day-cloudy"></i></p>
                                    <p>12&deg;</p>
                                </div>
                                <div class="column center aligned">
                                    <p>Thu</p>
                                    <p><i class="wi wi-day-sleet"></i></p>
                                    <p>10&deg;</p>
                                </div>
                                <div class="column center aligned">
                                    <p>Fri</p>
                                    <p><i class="wi wi-day-cloudy-gusts"></i></p>
                                    <p>8&deg;</p>
                                </div>
                                <div class="column center aligned">
                                    <p>Sat</p>
                                    <p><i class="wi wi-day-sprinkle"></i></p>
                                    <p>-5&deg;</p>
                                </div>
                                <div class="column center aligned">
                                    <p>Sun</p>
                                    <p><i class="wi wi-day-lightning"></i></p>
                                    <p>14&deg;</p>
                                </div>
                            </div>
                            <div id="flot-weather" class="flotchart"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="sixteen wide tablet sixteen wide computer column">
                        <div class="ui segments">
                            <div class="ui segment no-padding-bottom">
                                <h5 class="ui left floated header">
                                    Browser Usage Statistics
                                </h5>
                                <h5 class="ui right floated header">
                                    <i class="ion-ios-arrow-up icon link"></i>
                                    <i class="ion-ios-refresh-empty refreshing icon link"></i>
                                    <i class="ion-ios-close-empty icon link"></i>
                                </h5>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ui segment">
                                <div class="ui grid">
                                    <div class="stretched row">
                                        <div class="sixteen wide tablet ten wide computer column">
                                            <canvas id="chart_1" width="400" height="400"></canvas>
                                        </div>
                                        <div class="sixteen wide tablet six wide computer column">
                                            <div class="ui horizontal large statistic">
                                                <div class="value counter">
                                                    16,482
                                                </div>
                                                <div class="label">
                                                    Website Views
                                                </div>
                                            </div>
                                            <div id="flot-profile" class="flotchart"></div>
                                            <table class="ui celled striped table">
                                                <thead>
                                                <tr>
                                                    <th style="width:10%">#</th>
                                                    <th style="width:40%">Browser</th>
                                                    <th style="width:25%">Sessions</th>
                                                    <th style="width:25%">Up/Down</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Chrome</td>
                                                    <td>4325</td>
                                                    <td class="text-success">+3.26%</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Firefox</td>
                                                    <td>3257</td>
                                                    <td class="text-danger">-2.14%</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Edge</td>
                                                    <td>2314</td>
                                                    <td class="text-success">+2.92%</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!--                <div class="stretched row">-->
<!--                    <div class="sixteen wide tablet five wide computer column">-->
<!--                        <div class="ui segment">-->
<!--                            <h5 class="ui dividing header">-->
<!--                                Recent Activities-->
<!--                            </h5>-->
<!--                            <div class="ui feed timeline">-->
<!--                                <div class="event">-->
<!--                                    <div class="label">-->
<!--                                        <img src="img/avatar/people/Abraham.png" alt="label-image"/>-->
<!--                                    </div>-->
<!--                                    <div class="content">-->
<!--                                        <div class="summary">-->
<!--                                            <a class="user">-->
<!--                                                Francis Baldwin-->
<!--                                            </a> added you as a friend-->
<!--                                            <div class="date">-->
<!--                                                1 Hour Ago-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="meta">-->
<!--                                            <a class="like">-->
<!--                                                <i class="like icon"></i> 4 Likes-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="event">-->
<!--                                    <div class="label">-->
<!--                                        <img src="img/avatar/people/carol.png" alt="label-image"/>-->
<!--                                    </div>-->
<!--                                    <div class="content">-->
<!--                                        <div class="summary">-->
<!--                                            <a>Lindsey Daniels</a> added <a>2 new illustrations</a>-->
<!--                                            <div class="date">-->
<!--                                                4 days ago-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="extra images">-->
<!--                                            <a><img src="img/bg/1.png" alt="bg-image"/></a>-->
<!--                                            <a><img src="img/bg/3.png.jpeg" alt="bg-image"/></a>-->
<!--                                        </div>-->
<!--                                        <div class="meta">-->
<!--                                            <a class="like">-->
<!--                                                <i class="like icon"></i> 1 Like-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="event">-->
<!--                                    <div class="label">-->
<!--                                        <img src="img/avatar/people/Daryl.png" alt="label-image"/>-->
<!--                                    </div>-->
<!--                                    <div class="content">-->
<!--                                        <div class="summary">-->
<!--                                            <a class="user">-->
<!--                                                Walter Stewart-->
<!--                                            </a> added you as a friend-->
<!--                                            <div class="date">-->
<!--                                                2 Days Ago-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="meta">-->
<!--                                            <a class="like">-->
<!--                                                <i class="like icon"></i> 8 Likes-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="event">-->
<!--                                    <div class="label">-->
<!--                                        <img src="img/avatar/people/deana.png" alt="label-image"/>-->
<!--                                    </div>-->
<!--                                    <div class="content">-->
<!--                                        <div class="summary">-->
<!--                                            <a>Loretta Burke</a> posted on his page-->
<!--                                            <div class="date">-->
<!--                                                3 days ago-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="extra text">-->
<!--                                            Ours is a life of constant reruns. We're always circling back to where we'd-->
<!--                                            we started, then starting all over again. Even if we don't run extra laps-->
<!--                                            that day, we surely will come back for more of the same another day soon.-->
<!--                                        </div>-->
<!--                                        <div class="meta">-->
<!--                                            <a class="like">-->
<!--                                                <i class="like icon"></i> 5 Likes-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="event">-->
<!--                                    <div class="label">-->
<!--                                        <img src="img/avatar/people/enid.png" alt="label-image"/>-->
<!--                                    </div>-->
<!--                                    <div class="content">-->
<!--                                        <div class="summary">-->
<!--                                            <a>Meredith Barnes</a> added <a>2 new photos</a> of you-->
<!--                                            <div class="date">-->
<!--                                                4 days ago-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="extra images">-->
<!--                                            <a><img src="img/bg/5.png" alt="bg-image"/></a>-->
<!--                                            <a><img src="img/bg/6.png" alt="bg-image"/></a>-->
<!--                                        </div>-->
<!--                                        <div class="meta">-->
<!--                                            <a class="like">-->
<!--                                                <i class="like icon"></i> 41 Likes-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->

<!--                                <div class="event">-->
<!--                                    <div class="label">-->
<!--                                        <img src="img/avatar/people/Meggie.png" alt="label-image"/>-->
<!--                                    </div>-->
<!--                                    <div class="content">-->
<!--                                        <div class="summary">-->
<!--                                            <a>Jennifer Clarke</a> posted on his page-->
<!--                                            <div class="date">-->
<!--                                                3 days ago-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="extra text">-->
<!--                                            Ours is a life of constant reruns. We're always circling back to where we'd-->
<!--                                            we started, then starting all over again.-->
<!--                                        </div>-->
<!--                                        <div class="meta">-->
<!--                                            <a class="like">-->
<!--                                                <i class="like icon"></i> 5 Likes-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="sixteen wide tablet five wide computer column">-->

<!--                        <div class="ui segment">-->
<!--                            <div class="ui middle aligned relaxed list">-->
<!--                                <div class="item">-->
<!--                                    <div class="right floated content">-->
<!--                                        <a class="ui red basic label">Just Now</a>-->
<!--                                    </div>-->
<!--                                    <i class="icon large ion-pizza circular red"></i>-->
<!--                                    <div class="content">-->
<!--                                        You have 4 pending tasks.-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <div class="right floated content">-->
<!--                                        <a class="ui teal basic label">2 Hours ago</a>-->
<!--                                    </div>-->
<!--                                    <i class="icon large ion-lock-combination circular teal"></i>-->

<!--                                    <div class="content">-->
<!--                                        Server #1 overloaded.-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <div class="right floated content">-->
<!--                                        <a class="ui blue basic label">31 May</a>-->
<!--                                    </div>-->
<!--                                    <i class="icon large ion-bowtie circular blue"></i>-->

<!--                                    <div class="content">-->
<!--                                        New order received.-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <div class="right floated content">-->
<!--                                        <a class="ui purple basic label">30 May</a>-->
<!--                                    </div>-->
<!--                                    <i class="icon large ion-bonfire circular purple"></i>-->

<!--                                    <div class="content">-->
<!--                                        New user registered.-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <div class="right floated content">-->
<!--                                        <a class="ui brown basic label">27 May</a>-->
<!--                                    </div>-->
<!--                                    <i class="icon large ion-scissors circular brown"></i>-->

<!--                                    <div class="content">-->
<!--                                        New Version just arrived.-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="ui basic segment no-padding">-->
<!--                            <div class="ui fluid one cards special">-->
<!--                                <div class="card fluid">-->
<!--                                    <div class="blurring dimmable image">-->
<!--                                        <div class="ui dimmer">-->
<!--                                            <div class="content">-->
<!--                                                <div class="center">-->
<!--                                                    <div class="ui inverted button">Add Friend</div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <img src="img/gallery/images5.jpg">-->
<!--                                    </div>-->
<!--                                    <div class="content">-->
<!--                                        <a class="header">Samantha Green</a>-->
<!--                                        <div class="meta">-->
<!--                                            <span class="date">Melbourne</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="extra content">-->
<!--                                        <a>-->
<!--                                            <i class="like icon"></i> 214 Likes-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="sixteen wide tablet six wide computer column">-->

<!--                        <div class="ui segment">-->

<!--                            <div class="chat">-->
<!--                                <div class="chat-header clearfix">-->
<!--                                    <img class="ui circular image" src="img/avatar/people/Meggie.png" alt="avatar"/>-->

<!--                                    <div class="chat-about">-->
<!--                                        <div class="chat-with">Chat with Vincent Porter</div>-->
<!--                                        <div class="chat-num-messages">Already 14 messages</div>-->
<!--                                    </div>-->
<!--                                    <i class="fa fa-star"></i>-->
<!--                                </div>-->
<!--                                &lt;!&ndash; end chat-header &ndash;&gt;-->

<!--                                <div class="chat-history" style="overflow:hidden">-->
<!--                                    <ul>-->
<!--                                        <li class="clearfix">-->
<!--                                            <div class="message-data align-right">-->
<!--                                                <span class="message-data-time">10:10 AM, Today</span> &nbsp; &nbsp;-->
<!--                                                <span class="message-data-name">Olia</span> <i-->
<!--                                                    class="icon circle me"></i>-->
<!--                                            </div>-->
<!--                                            <div class="message other-message float-right">-->
<!--                                                Hi Vincent-->
<!--                                            </div>-->
<!--                                        </li>-->

<!--                                        <li>-->
<!--                                            <div class="message-data">-->
<!--                                                <span class="message-data-name"><i class="icon circle online"></i> Vincent</span>-->
<!--                                                <span class="message-data-time">10:12 AM, Today</span>-->
<!--                                            </div>-->
<!--                                            <div class="message my-message">-->
<!--                                                Are we meeting today?-->
<!--                                            </div>-->
<!--                                        </li>-->

<!--                                        <li class="clearfix">-->
<!--                                            <div class="message-data align-right">-->
<!--                                                <span class="message-data-time">10:14 AM, Today</span> &nbsp; &nbsp;-->
<!--                                                <span class="message-data-name">Olia</span> <i-->
<!--                                                    class="icon circle me"></i>-->
<!--                                            </div>-->
<!--                                            <div class="message other-message float-right">-->
<!--                                                Well I am not sure.-->
<!--                                            </div>-->
<!--                                        </li>-->

<!--                                        <li>-->
<!--                                            <div class="message-data">-->
<!--                                                <span class="message-data-name"><i class="icon circle online"></i> Vincent</span>-->
<!--                                                <span class="message-data-time">10:20 AM, Today</span>-->
<!--                                            </div>-->
<!--                                            <div class="message my-message">-->
<!--                                                Actually everything was fine-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                                &lt;!&ndash; end chat-history &ndash;&gt;-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
        <!--maincontent-->
    </div>
</div>
<?php
include_once "../assets/includes/footer_dashb.php"
?>
