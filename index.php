<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/admin.css" rel="stylesheet" type="text/css"
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
</head>

<body style="margin: 0px; border: 0px;">

<div class="container">
    <div id="rampant-nav-bar" style="width: 100%; background-color: black; height: 15% color: white;">
        <h1>RampantTV</h1>
        <nav>
            <ul>
                <li><a href="#">CHANNELS</a></li>
                <li><a href="#">FORUM</a></li>
                <li><a href="#">VIDEOS</a></li>
                <li><a href="#">SCHEDULE</a></li>
                <li><a href="#">TRENDING</a></li>
                <li><a href="#">SOCIAL</a></li>
                <li><a href="#">SHOWS</a></li>
                <li><a href="#">ADMIN</a></li>
            </ul>
        </nav>

    </div>
</div>
<div id="entire-admin-bar" style="width:20%; height: 85%; background-color:darkblue; float: left;">
    <!-- LEFT NAV BAR 30% -->
    <div id="admin-nav-bar" style="background-color: lightpink; width:90%; height 20%; float:left;">
        <div id="admin-info">
            <h1>Admin Info</h1>
            <li>Admin Name</li>
            <li>Role</li>
        </div>
    </div>
    <!-- END LEFT NAV BAR 30% -->

    <!-- MAIN INFO CONTAINER 70% -->SSS

    <div id="admin-info-container">
    </div>
    <!-- END INFO CONTAINER 70% -->
    <div id="admin-panel-controls" style="width: 90%; height 20%; background-color:yellow;">
        <div id="admin-panel-marketing">
            <h1 class="admin-panel-subheader">
                Marketing
            </h1>
            <ul>
                <li><a href="#">Promo Manager</a></li>
            </ul>
        </div>

        <div id="admin-panel-feeds"><
            <h1 class="admin-panel-subheader">
                Feeds
            </h1>
            <ul>
                <li><a href="#">Feeds Management</a></li>
                <li><a href="#">Add New Feeds</a></li>
            </ul>
        </div>

        <div id="admin-panel-usersales-stats">
            <h1 class="admin-panel-subheader">
                User/Sales Stats
            </h1>
            <ul>
                <li><a href="#">Generate Mail List</a></li>
                <li><a href="#">Unsubscribe Users</a></li>
            </ul>
        </div>

        <div id="admin-panel-user-stats">
            <h1 class="admin-panel-subheader">
                User Stats
            </h1>
            <ul>
                <li><a href="#">PRS Callers Free Mins Stats</a></li>
                <li><a href="#">Inactive Users</a></li>
                <li><a href="#">Webcam Stats</a></li>
                <li><a href="#">Management Stats</a></li>
                <li><a href="#">Topup Stats</a></li>
                <li><a href="#">Rampant VR Stats</a></li>
                <li><a href="#">Roku Stats</a></li>
                <li><a href="#">Lottery Stats</a></li>
            </ul>
        </div>

        <div id="admin-panel-servers">
            <h1 class="admin-panel-subheader">
                Servers
            </h1>
            <ul>
                <li><a href="#">MSioF</a></li>
                <li><a href="#">Pingdom</a></li>
                <li><a href="#">Portal</a></li>
            </ul>
        </div>

        <div id="admin-panel-whitelist">
            <h1 class="admin-panel-subheader">
                WhiteList
            </h1>
            <ul>
                <li><a href="#">Manage IPs</a></li>
            </ul>
        </div>

        <div id="admin-panel-helpers">
            <h1 class="admin-panel-subheader">
                Helpers
            </h1>
            <ul>
                <li><a href="#">Clear Forgotten Password IP Cache</a></li>
                <li><a href="#">Clear any Memcache Key</a></li>
                <li><a href="#">User Editor</a></li>
                <li><a href="#">Show Creator</a></li>
            </ul>
        </div>

        <div id="admin-panel-force-default-stream">
            <h1 class="admin-panel-subheader">
                Force Default Stream
            </h1>
            <form>
                <p>Force the default stream id to</p>
                <input type="number" name="from-value" min="1" max="99999">
                for
                <input type="number" name="to-value" min="1" max="99999">
                <button type="submit" value="submit">Set</button>
            </form>
        </div>
        <div id="admin-panel-localhost-helpers">
            <h1>
                Localhost Helpers
            </h1>
            <ul>
                <li><a href="#">Concan/Min JS & CSS</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container" style="background-color: red; height: 100%; width: 100%;">
    <div id="top-half-body">
        <div id="main-user-details">
            <ul>
                <li>Users name</li>
                <li>Date registered</li>
                <button type="button" class="main-user-details">Impersonate</button>
        </div>
        <div id="main-user-details-extended" style="background-color:green">
            <ul>
                <li class="extended-user-details">Status</li>
                <li class="extended-user-details">CCIVRID</li>
                <li class="extended-user-details">vipLevel</li>
                <li class="extended-user-details">email</li>
                <li class="extended-user-details">dirtychatID</li>
            </ul>
        </div>


        <div id="secondary-user-details" style="background-color: orange">
            <ul>
                <li>Status</li>
                <li>CCIVRID</li>
                <li>VIP LEVEL</li>
                <button type="reset">Reset VIP</button>
                <button type="submit">Give VIP Status</button>
            </ul>
            <ul>Email</ul>
            <ul>dirtychatUserID</ul>
            <button type="submit">Change Password</button>
        </div>


        <div class="container">
            <div id="bottom-half-body">

            </div>
</body>
</html>