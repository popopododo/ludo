<?php include_once ($_SERVER['DOCUMENT_ROOT']."/component/header.php")?>
<div id="sell-normal" class="container">
<div class="item-image just-switch">
        <div class="sell-status">Sell</div>
        <div class="left"></div>
        <div class="right"></div>
    </div>
    <div class="content">
        <div class="item-info">
            <div class="trade-status">
                Safe
            </div>
            <div class="item-title">
                Nintendo Switch
            </div>
        </div>
        <div class="item-detail">
            <!-- (본체/닌텐도/스위치/동물의 숲 에디션/상품 우수) -->
            (Console/Nintendo/Switch/High Quality)
            </div>
        <div class="price">
            $300.00
        </div>
        <div class="seller-info">
            <div class="seller-container">
                <div class="seller">
                    <div class="seller-set">
                        <div class="info-icon">
                            <img class="seller-icon" src="./image/info-2x.png"/>
                        </div>
                        <div class="profile-icon">
                            <img class="seller-icon" src="./image/profile-2x.png"/>
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
                <p>Nintendo Switch</p>
                <p>I've used it just few times.</p>
                <p>Almost Brand new</p>
            </div>
            <div class="more-button">
                <img src="./image/down.png"/>More
            </div>
        </div>
        <div class="price-trend">
            <span class="des-title">Price Trend</span>
            <div class="price-option">
                <div class="btn-group price-option" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">1 Month</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
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
            <div class="footer-price">$300.00</div>
        </div>
        
        <div class="buy-button">
            <button type="button" class="btn btn-primary-normal">Purchase</button>
        </div>
    </div>
</div>
<script>
$(function(){
    // 즐겨찾기 버튼
    $('.favorite').click(function() {
        if($(this).css('background-image').substr(-10,8) == "full.png")
            $(this).css("background-image", "url('../../sell/image/like-empty.png')");
        else
            $(this).css("background-image", "url('../../sell/image/like-full.png')");
    });
});
</script>
<?php include_once ($_SERVER['DOCUMENT_ROOT']."/component/navigation.php")?>

<script>
    activeNavigation('home');
</script>
