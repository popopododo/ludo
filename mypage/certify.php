<?php include_once ($_SERVER['DOCUMENT_ROOT']."/component/header.php")?>
<div id="certify" class="container">
    <div class="certify-title">
        Identity verification
    </div>
    <div class="ludo-value">
        <span class="real-ludo">32</span>&nbsp;ludo
    </div>
    <div class="ludo-bar">
        <div class="ludo-real-bar"></div>
    </div>
    <div class="certify-box down-border">
        <div class="box-icon"><img src="./image/phone.svg"/></div>
        <div class="box-text">Cell Phone</div>
        <div class="box-label"><img src="./image/label.svg"/></div>
        <div class="box-arrow"><img src="./image/right.png"/></div>
    </div>
    <div class="certify-box down-border certified">
        <div class="box-icon"><img src="./image/email.svg"/></div>
        <div class="box-text">Email</div>
        <div class="box-label"><img src="./image/label.svg"/></div>
        <div class="box-arrow"><img src="./image/right.png"/></div>
    </div>
    <div class="certify-box down-border">
        <div class="box-icon"><img src="./image/facebook.svg"/></div>
        <div class="box-text">Facebook</div>
        <div class="box-label"><img src="./image/label.svg"/></div>
        <div class="box-arrow"><img src="./image/right.png"/></div>
    </div>
    <div class="certify-box down-border">
        <div class="box-icon"><img src="./image/card.svg"/></div>
        <div class="box-text">Credit Card</div>
        <div class="box-label"><img src="./image/label.svg"/></div>
        <div class="box-arrow"><img src="./image/right.png"/></div>
    </div>
    <div class="certify-box down-border">
        <div class="box-icon"><img src="./image/id.svg"/></div>
        <div class="box-text">ID card</div>
        <div class="box-label"><img src="./image/label.svg"/></div>
        <div class="box-arrow"><img src="./image/right.png"/></div>
    </div>
    <div class="certify-box">
        <div class="box-icon"><img src="./image/thecheat.svg"/></div>
        <div class="box-text">The Cheat</div>
        <div class="box-label"><img src="./image/label.svg"/></div>
        <div class="box-arrow"><img src="./image/right.png"/></div>
    </div>
</div>
<script>
    $(function(){
        $('.certify-box').click(function() {
            // Certified가 아닌 경우
            if(!$(this).hasClass("certified")) {
                $(this).addClass("certified");

                // Ludo 값 변경
                var val = parseInt($('.real-ludo').text());
                val+=10;
                $('.real-ludo').html(val);

                // Ludo바 변경
                var str = val + "%";
                $('.ludo-real-bar').css('width', str)
            }
        })
    });

</script>
<?php include_once ($_SERVER['DOCUMENT_ROOT']."/component/navigation.php")?>

<script>
    activeNavigation('mypage');
</script>
