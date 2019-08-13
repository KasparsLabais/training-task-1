<!DOCTYPE html>
<html lang="en" xmlns:display="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/admin.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/265560036b.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
</head>

<body style="margin: 0px; border: 0px;">

<div class="container">
    <div id="rampant-nav-bar">
        <nav>
            <ul class="rampant-nav">
                <img src="https://www.rampant.tv/images/rampant_logo.png" alt="Rampant Logo" class="rampant-nav-title">
                <li class="rampant-nav-select"><a href="#">CHANNELS</a></li>
                <li class="rampant-nav-select"><a href="#">FORUM</a></li>
                <li class="rampant-nav-select"><a href="#">VIDEOS</a></li>
                <li class="rampant-nav-select"><a href="#">SCHEDULE</a></li>
                <li class="rampant-nav-select"><a href="#">TRENDING</a></li>
                <div class="social-dropdown">
                    <span class="social-dropbutton">SOCIAL</span>
                    <div class="social-dropdown-options">
                        <a href="https://www.instagram.com/rampant__tv/">INSTAGRAM</a>
                        <a href="https://twitter.com/RampantTV">TWITTER</a>
                        <a href="https://www.snapchat.com/add/rampant_tv">SNAPCHAT</a>
                        <a href="mailto:support@rampant.tv">CONTACT US</a>
                    </div>
                </div>
                <li class="rampant-nav-select"><a href="#">SHOWS</a></li>
                <li class="rampant-nav-select"><a href="#">ADMIN</a></li>
            </ul>
        </nav>

    </div>
</div>
<div id="container" style="width:100%; background-color:green;">
    <!-- LEFT NAV BAR 30% -->
    <div id="admin-nav-bar">
        <div id="admin-info">
            <h1 class="admin-inf-header">Admin Info</h1>
            <i class="fas fa-user-tag"></i>
            <li>Danielle McLaren</li>
            <li>Administrator</li>
        </div>
        <div id="admin-panel-controls">
            <div id="admin-panel-marketing">
                <h1 class="admin-panel-subheader">
                    Marketing
                </h1>
                <ul>
                    <li><a href="#">Promo Manager</a></li>
                </ul>
            </div>

            <div id="admin-panel-feeds">
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
                <h1 class="admin-panel-subheader">Localhost Helpers </h1>
                <ul>
                    <li><a href="#">Concan/Min JS & CSS</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END LEFT NAV BAR 30% -->

<!-- MAIN INFO CONTAINER 70% --->
<div id="admin-info-container" style="width:70%; height: 1500px; background-color: red; float:left;">
    <div id="main-user-details"
         style="width:100%; height: 100px; background-color: coral; display: inline-block; float:left; color: white;">
        <div id="main-user-info-box"
             style="width:50%; height: 100px; background-color: dimgrey; display: inline-block; float:left;">
            <ul>
                <li class="username">ReturnOfDeMac</li>
                <li class="registered-date">19/06/2018</li>
            </ul>
        </div>
        <div id="main-user-action-box"
             style="width:50%; height: 100px; background-color:green; display: inline-block; float:left; color: white;">
            <ul>
                <button type="button" class="impersonate-button">Impersonate</button>
                <button type="submit" class="change-password-button">Change Password
                </button>
            </ul>
        </div>
    </div>
    <div id="secondary-user-details"
         style="background-color:white; width:100%; height:400px; display:inline-block; float:left;">
        <ul>
            <li style="background-color: brown; width: 20%; display:inline-block; float:left;">Status: Active</li>
            <li style="background-color: orange; width: 20%; display:inline-block; float:left;">CCIVRID:</li>
            <li style="background-color: lawngreen; width: 20%; display:inline-block; float:left;">VIP LEVEL: 20</li>
            <!--VIP BUTTONS NEED HOME FIRST
            <button style="background-color: yellow; display:inline-block;" type="reset">Reset VIP</button>
            <button style="background-color: red; display:inline-block;" type="submit">Give VIP Status</button>
            -->
            <li style="background-color: blue; width: 20%; display:inline-block; float:left;">Email:
                dmclaren@firestormmedia.tv
            </li>
            <li style="background-color: purple; width: 20%; display:inline-block; float:left;">dirtychatUserID</li>
        </ul>
    </div>
    <div id="subscription-details" style="width:100%; height: 500px; background-color: hotpink; float:left;">
    </div>

</div>

</body>
</html>