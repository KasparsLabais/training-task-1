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
    <script type="text/javascript" src="whatthefuck.js"></script>

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

<div id="main-container" style="width:100%; background-color:green;">
    <div class="left-div">
        <div class="small-admin-panel">
            <div class="small-admin-text">
                <h4>Danielle McLaren</h4>
                <p>Admin</p>
            </div>
            <!-- <div class="small-admin-panel" style="width:30%;">
                 <div class="small-admin-text">
                     <h4>Danielle</h4>
                     <p>Admin</p>
                 </div>
                 <div class="small-admin-image">
                 </div>
             </div>
                 -->


            <div class="small-admin-sidebar">
                <h3 class="item-father"><i class="fas fa-ad"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marketing</h3>
                <ul class="item-child">
                    <li>Promo Manager</li>
                </ul>
                <h3 class="item-father"><i class="fas fa-marker"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Feeds</h3>
                <ul class="item-child">
                    <li>Feeds Management</li>
                    <li>Add New Feed</li>
                </ul>
                <h3 class="item-father"><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mail List
                </h3>
                <ul class="item-child">
                    <li>Generate Mail List</li>
                    <li>Unsubscribe Users</li>
                </ul>
                <h3 class="item-father"><i class="fa fa-line-chart"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User
                    Stats
                </h3>
                <ul class="item-child">
                    <li><a href="#">PRS Callers Free Mins Stats</a></li>
                    <li><a href="#">Inactive Users</a></li>
                    <li><a href="#">Webcam Stats</a></li>
                    <li><a href="#">Management Stats</a></li>
                    <li><a href="#">Topup Stats</a></li>
                    <li><a href="#">Rampant VR Stats</a></li>
                    <li><a href="#">Roku Stats</a></li>
                    <li><a href="#">Lottery Stats</a></li>
                </ul>
                <h3 class="item-father"><i class="fa fa-server"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Servers</h3>
                <ul class="item-child">
                    <li><a href="#">MSioF</a></li>
                    <li><a href="#">Pingdom</a></li>
                    <li><a href="#">Portal</a></li>
                </ul>
                <h3 class="item-father"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WhiteList
                </h3>
                <ul class="item-child">
                    <li><a href="#">Manage IPs</a></li>
                </ul>
                <h3 class="item-father"><i class="fa fa-question-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Helpers
                </h3>
                <ul class="item-child">
                    <li><a href="#">Clear Forgotten Password IP Cache</a></li>
                    <li><a href="#">Clear any Memcache Key</a></li>
                    <li><a href="#">User Editor</a></li>
                    <li><a href="#">Show Creator</a></li>
                </ul>
                <h3 class="item-father"><i class="fa fa-caret-square-o-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Force
                    Default Stream</h3>
                <form id="stream-form" style="display: block;">
                    <p style="color:white; font-family: 'Roboto', sans-serif;font-weight: 400;
    line-height: 2rem;">Force the default stream id to </p>
                    <input type="number" name="from-value" min="1" max="99999">
                    <p style="color:white; font-family: 'Roboto', sans-serif;font-weight: 400;
    line-height: 2rem;">for</p>
                    <input type="number" name="to-value" min="1" max="99999">
                    <button type="submit" value="submit">Set</button>
                </form>
                <h3 class="item-father"><i class="fa fa-database"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Localhost
                    Helpers</h3>
                <ul class="item-child">
                    <li><a href="#">Concan/Min JS & CSS</a></li>
                </ul>
            </div>
        </div>
    </div>


    <!--
    <div id="container" style="width:100%; background-color:green;">
        LEFT NAV BAR 30%
        <div id="admin-nav-bar">
            <div id="admin-info">
                <img src="http://3.bp.blogspot.com/-ku5soa8KViM/TkA22DK8fdI/AAAAAAAAAoo/dQ0Fqlv1_bo/s1600/dogs-wearing-wigs-0011.jpg"
                     alt="admin-profile-pic"
                     style="border-radius: 50%; height: 75px; float: right; padding: 10px 10px 10px 10px;">
                <div id="admin-role-name">
                    <li style="font-size: 20px; color: #63B0CD;">Danielle McLaren</li>
                    <li style="font-size: 20px; color: white;">Administrator</li>
                </div>
            </div>


            <div id="admin-panel-controls">

                <div id="admin-panel-marketing">
                    <h1 class="admin-panel-subheader">
                        Marketing
                    </h1>
                    <ul>
                        <li><a href="#">Promo Manager</a></li>
                    </ul>

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
    -->

    <div id="admin-info-container" style="width:80%; height: 1500px; background-color: #9E9E9E; float:left;">
        <div id="main-user-details"
             style="width:100%; height: 100px; background-color: coral; display: inline-block; float:left; color: white;">
            <div class="user-info-left" style="height: 150px; width: 50%; background-color: red; display: inline-block">
                <div class="user-info-block" style="background-color:black;">
                    <div class="user-heading">
                        <h3>ReturnOfDemac</h3>
                        <span class="help-block "> Registered: 19/06/2018</span>
                    </div>
                </div>
            </div>


            <div class="user-info-right" style="width: 50%;display: inline-block; float: right; background-color: green; height: 150px;">
                <div class="user-right-buttons" style="width: 100%; display: inlineblock:">
                    <div class="account-options">
                        <div id="impersonate" style="width:50%; display: inline-block; float:left;">
                            <button type="button" class="impersonate-button">Impersonate</button>
                        </div>
                        <div id="password" style="width:50%;display: inline-block; float:left;">
                            <button type="submit" class="change-password-button">Change Password
                            </button>
                        </div>
                    </div>
                </div>


            </div>

            <div id="secondary-user-details"
                 style="background-color:white; width:100%; color: black; float:left; margin: auto; display: inline-block;">
                <div class="user-info-box">
                    <h3 class="user-info-title">STATUS</h3>
                    <p style="text-align: center;">ACTIVE</p>
                </div>
                <div class="user-info-box">
                    <h3 class="user-info-title">CCIVRID</h3>
                    <p style="text-align: center;">2913291</p>
                </div>
                <div class="user-info-box">
                    <h3 class="user-info-title">VIP LEVEL</h3>
                    <p style="text-align: center;">GOLD</p>
                </div>
                <div class="user-info-box">
                    <h3 class="user-info-title">EMAIL</h3>
                    <p style="text-align: center;">dmclaren@firestormmedia.tv</p>
                </div>
                <div class="user-info-box">
                    <h3 class="user-info-title">DirtyChat ID</h3>
                    <p style="text-align: center;">483788</p>
                </div>
            </div>


            <div id="subscription-details"
                 style="width: 100%;height: 500px;background-color: white;color: black;font-family: Roboto, sans-serif;">
                <h2>Subscription Info</h2>
                <table style="width:100%">
                    <tr>
                        <th>PurchaseID</th>
                        <th>SubID</th>
                        <th>DateStart</th>
                        <th>DateEnd</th>
                        <th>Method</th>
                        <th>Rebill Enabled</th>
                        <th>Rebilled From</th>
                    </tr>
                    <tr>
                        <th>145846</th>
                        <th>554</th>
                        <th>16/05/2019 07:22:30</th>
                        <th>15/06/2019 07:22:30</th>
                        <th>7</th>
                        <th>0</th>
                        <th>114740</th>
                    </tr>
                    <tr>
                        <th>145846</th>
                        <th>554</th>
                        <th>16/05/2019 07:22:30</th>
                        <th>15/06/2019 07:22:30</th>
                        <th>7</th>
                        <th>0</th>
                        <th>114740</th>
                    </tr>
                    <tr>
                        <th>145846</th>
                        <th>554</th>
                        <th>16/05/2019 07:22:30</th>
                        <th>15/06/2019 07:22:30</th>
                        <th>7</th>
                        <th>0</th>
                        <th>114740</th>
                    </tr>
                    <tr>
                        <th>145846</th>
                        <th>554</th>
                        <th>16/05/2019 07:22:30</th>
                        <th>15/06/2019 07:22:30</th>
                        <th>7</th>
                        <th>0</th>
                        <th>114740</th>
                    </tr>
                    <tr>
                        <th>145846</th>
                        <th>554</th>
                        <th>16/05/2019 07:22:30</th>
                        <th>15/06/2019 07:22:30</th>
                        <th>7</th>
                        <th>0</th>
                        <th>114740</th>
                    </tr>
                    <tr>
                        <th>145846</th>
                        <th>554</th>
                        <th>16/05/2019 07:22:30</th>
                        <th>15/06/2019 07:22:30</th>
                        <th>7</th>
                        <th>0</th>
                        <th>114740</th>
                    </tr>
                    <tr>
                        <th>145846</th>
                        <th>554</th>
                        <th>16/05/2019 07:22:30</th>
                        <th>15/06/2019 07:22:30</th>
                        <th>7</th>
                        <th>0</th>
                        <th>114740</th>
                    </tr>
                    <tr>
                        <th>145846</th>
                        <th>554</th>
                        <th>16/05/2019 07:22:30</th>
                        <th>15/06/2019 07:22:30</th>
                        <th>7</th>
                        <th>0</th>
                        <th>114740</th>
                    </tr>
                    <tr>
                        <th>145846</th>
                        <th>554</th>
                        <th>16/05/2019 07:22:30</th>
                        <th>15/06/2019 07:22:30</th>
                        <th>7</th>
                        <th>0</th>
                        <th>114740</th>
                    </tr>
                    <tr>
                        <th>145846</th>
                        <th>554</th>
                        <th>16/05/2019 07:22:30</th>
                        <th>15/06/2019 07:22:30</th>
                        <th>7</th>
                        <th>0</th>
                        <th>114740</th>
                    </tr>
                    <tr>
                        <th>145846</th>
                        <th>554</th>
                        <th>16/05/2019 07:22:30</th>
                        <th>15/06/2019 07:22:30</th>
                        <th>7</th>
                        <th>0</th>
                        <th>114740</th>
                    </tr>
                </table>
            </div>

        </div>

</body>
</html>