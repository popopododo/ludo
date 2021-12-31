<?php include_once ($_SERVER['DOCUMENT_ROOT']."/component/header.php")?>
<div id="mypage" class="container">
    <div class="profile-container">
        <div class="profile-image"><img src="./image/profile.svg"/></div>
        <div class="vertical-set">
            <div class="user-info">
                <div class="user-name">SJSU</div>
                <div class="user-address">San Jose, CA</div>
            </div>
            <div class="ludo-value">32 ludo</div>
            <div class="ludo-bar">
                <div class="ludo-real-bar"></div>
            </div>
        </div>
    </div>

    <div class="main-icon-container">
        <div class="icon-box">
            <div class="icon"><img src="./image/wish.svg"/></div>
            <div class="icon-text">Wishlist</div>
        </div>
        <div class="icon-box">
            <div class="icon"><img src="./image/sell.svg"/></div>
            <div class="icon-text">Sell history</div>
        </div>
        <div class="icon-box">
            <div class="icon"><img src="./image/buy.svg"/></div>
            <div class="icon-text">Buy history</div>
        </div>
    </div>

    <div class="menu-box up-border ">
        <div class="menu-icon"><img src="./image/ship.svg"/></div>
        <div class="menu-text">Shipping management</div>
        <div class="menu-button"><img src="./image/right.png"/></div>
    </div>
    <div class="menu-box up-border" onclick="location.href='certify.php';">
        <div class="menu-icon"><img src="./image/verify.svg"/></div>
        <div class="menu-text">Identity verification</div>
        <div class="menu-button"><img src="./image/right.png"/></div>
    </div>
    <div class="menu-box up-border ">
        <div class="menu-icon"><img src="./image/review.svg"/></div>
        <div class="menu-text">Trade review</div>
        <div class="menu-button"><img src="./image/right.png"/></div>
    </div>
    <div class="menu-box up-border ">
        <div class="menu-icon"><img src="./image/info.svg"/></div>
        <div class="menu-text">My info</div>
        <div class="menu-button"><img src="./image/right.png"/></div>
    </div>
    <div class="menu-box up-border ">
        <div class="menu-icon"><img src="./image/coupon.svg"/></div>
        <div class="menu-text">Coupon</div>
        <div class="menu-button"><img src="./image/right.png"/></div>
    </div>
    <div class="menu-box up-border ">
        <div class="menu-icon"><img src="./image/information.svg"/></div>
        <div class="menu-text">Information</div>
        <div class="menu-button"><img src="./image/right.png"/></div>
    </div>
    <div class="menu-box up-border down-border">
        <div class="menu-icon"><img src="./image/setting.svg"/></div>
        <div class="menu-text">Setting</div>
        <div class="menu-button"><img src="./image/right.png"/></div>
    </div>
    
</div>
<?php include_once ($_SERVER['DOCUMENT_ROOT']."/component/navigation.php")?>

<script>
    activeNavigation('mypage');
</script>
