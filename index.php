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
                <!--<img src="https://www.rampant.tv/images/rampant_logo.png" alt="Rampant Logo" class="rampant-nav-title">-->
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

<div id="main-container">
    <div class="left-div">
        <div class="small-admin-panel">
            <div class="small-admin-text">
                <h4>Danielle McLaren</h4>
                <p>Admin</p>
            </div>


            <div class="small-admin-sidebar">
                <h3 class="item-father"><i class="fas fa-ad"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marketing</h3>
                <ul class="item-child">
                    <li><a href="#">Promo Manager</a></li>
                </ul>
                <h3 class="item-father"><i class="fas fa-marker"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Feeds</h3>
                <ul class="item-child">
                    <li><a href="#">Feeds Management</a></li>
                    <li><a href="#">Add New Feed</a></li>
                </ul>
                <h3 class="item-father"><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mail List
                </h3>
                <ul class="item-child">
                    <li><a href="#">Generate Mail List</a></li>
                    <li><a href="#">Unsubscribe</a></li>
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

    <div id="admin-info-container">
        <div id="main-user-details">
            <div class="user-info-left"
                 style="height: 200px; width: 50%; background-color: red; display: inline-block;">
                <div class="user-details-left" >
                    <div class="user-heading">
                    <h3>ReturnOfDemac</h3>
                        <p>Registered: 19/06/2018</p>
                    </div>
                </div>
            </div>

        <div class="user-info-right">
            <div class="user-right-buttons" style="width: 100%; display: inline-block;">
                <div class="account-options">
                    <div id="impersonate" style="width:50%; display: inline-block;">
                        <button type="button" class="impersonate-button">Impersonate</button>
                    </div>
                    <div id="password" style="width:50%;display: inline-block;">
                        <button type="submit" class="change-password-button">Change Password
                        </button>
                    </div>
                </div>
            </div>
        </div>


        </div>

        <div id="secondary-user-details">
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

<!--
        <div id="subscription-details">
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
                    <td>145846</td>
                    <td>554</td>
                    <td>16/05/2019 07:22:30</td>
                    <td>15/06/2019 07:22:30</td>
                    <td>7</td>
                    <td>0</td>
                    <td>114740</td>
                </tr>
                <tr>
                    <td>145846</td>
                    <td>554</td>
                    <td>16/05/2019 07:22:30</td>
                    <td>15/06/2019 07:22:30</td>
                    <td>7</td>
                    <td>0</td>
                    <td>114740</td>
                </tr>
                <tr>
                    <td>145846</td>
                    <td>554</td>
                    <td>16/05/2019 07:22:30</td>
                    <td>15/06/2019 07:22:30</td>
                    <td>7</td>
                    <td>0</td>
                    <td>114740</td>
                </tr>
                <tr>
                    <td>145846</td>
                    <td>554</td>
                    <td>16/05/2019 07:22:30</td>
                    <td>15/06/2019 07:22:30</td>
                    <td>7</td>
                    <td>0</td>
                    <td>114740</td>
                </tr>

            </table>
        </div>
    </div>
    -->
</body>
</html>