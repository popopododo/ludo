<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/static/css/main.css?<?php echo time() ?>">
    <link rel="stylesheet" href="./scss.php/app.scss"/>
    <!-- CSS + Bootstrap -->
    <link rel="stylesheet" href="./main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- CSS + Bootstrap -->
    <script src="/static/js/jquery-3.5.1.min.js"></script>
    <script src="/static/js/imageMapResizer.min.js"></script>
    <script src="/static/js/main.js?<?php echo time() ?>"></script>
    <title>Nintendo Switch</title>
</head>
<body>
    <div class="header">
        <div class="back"></div> 
        <div class="logo"></div>
        <div class="notify"></div>
    </div>
    <div class="item-image">
        <div class="sell-status">역경매</div>
        <div class="left"></div>
        <div class="right"></div>
    </div>
    <div class="content">
        <div class="item-info">
            <div class="trade-status trade-status-false">
                인증필요
            </div>
            <div class="item-title">
                Nintendo Switch Animal Crossing
            </div>
        </div>
        <div class="item-detail">
            <!-- (본체/닌텐도/스위치/동물의 숲 에디션/상품 우수) -->
            (Console/Nintendo/Switch/High Quality)
            </div>
        <div class="price">
            <span class="price-now">Now</span> $199.90
        </div>
        <div class="time-left">
            <div class="time-box">
                <img src="./image/time.png"/>
                D-1 5H 44M 59S
            </div>
        </div>
        <div class="seller-info">
            <div class="seller-container">
                <div class="seller">
                    <div class="seller-set">
                        <div class="info-icon">
                            <img class="seller-icon" src="./image/info.png"/>
                        </div>
                        <div class="profile-icon">
                            <img class="seller-icon" src="./image/profile.png"/>
                        </div>
                        <div class="seller-id">
                            <p class="no-margin"><span class="user-name">SJSU</span></br><span class="user-address">San Jose, CA</span></p>
                        </div>
                    </div>
                    <div class="ludo-value">
                        <span class="ludo-number">78</span>&nbsp;ludo
                    </div>
                </div>
                <div class="ludo-bar">
                    <div class="ludo-real-bar"></div>
                </div>
            </div>
            <div class="buttons">
                <img src="./image/chat.png"/>
                <img src="./image/share.png"/>
            </div>
        </div>
        <div class="description">
            <div class="description-header">
                <span class="des-title">Description</span>
                <span class="des-info">Like 10 / View 2,034</span>
            </div>
            <div class="description-content">
                <p>Nintendo Switch - Animal Crossing Edition</p>
                <p>I've used it just few times.</p>
                <p>Almost Brand new</p>
            </div>
            <div class="more-button">
                <img src="./image/down.png"/>More
            </div>
        </div>
        <div class="current-bid">
            <div class="title-box">
                <span class="des-title">Current Bidding</span>
                <div class="show-all">
                    Show All<img src="./image/right-grey.png"/>
                </div>
            </div>
            <div class="price-option">
            <table class="table table-striped">
                <tbody class="table-text">
                    <tr>
                        <td>$199.90</td>
                        <td class="td2">1hour ago</td>
                    </tr>
                    <tr>
                        <td>$210.00</td>
                        <td class="td2">6hours ago</td>
                    </tr>
                    <tr>
                        <td>$215.00</td>
                        <td class="td2">1day ago</td>
                    </tr>
                    <tr>
                        <td>$225.00</td>
                        <td class="td2">1day ago</td>
                    </tr>
                    <tr>
                        <td>$245.00</td>
                        <td class="td2">2days ago</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="price-trend">
            <span class="des-title">Price Trend</span>
            <div class="price-option">
                <div class="btn-group price-option" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio1">1 Month</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio2">1 Week</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">Total</label>
                </div>
            <div class="price-graph"></div>
        </div>
        
    </div>
    <div class="footer">
        <div class="left-container">
            <div class="favorite"></div>
            <div class="split"></div>
            <div class="footer-price"><span class="small-price">Below</span>&nbsp;$199.90</div>
        </div>
        
        <div class="buy-button">
            <button type="button" class="btn btn-primary">Bidding</button>
        </div>
    </div>
</body>
</html>