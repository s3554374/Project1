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
            <?php
            if(!empty($_GET['result']))
            {
                $result=$_GET['result'];
                if($result==1)
                {
                    echo "<script>alert( 'succeed deleted the account')</script>";

                }
                elseif($result==2) {
                    echo "<script>alert(' delete failed ')</script>";
                }

            }



            ?>
        <h3>search user</h3>
        <form id="show_user" name="show_user" method="post" action="select_user.php">
            User email: <input type="text" name="email"/><br/>

            <br/>
            <input type="submit" value="Results"/>
        </form>

        </div>
        <!--maincontent-->
    </div>
</div>
<?php
include_once '../assets/includes/footer_dashb.php'
?>




