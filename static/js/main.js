$(function () {
    $('.price-input').on('keyup', function () {
        this.value = this.value.replace(/[^0-9]/g, '');
        this.value = this.value.replace(/,/g, '');
        this.value = this.value.replace(/\B(?=(\d{3})+(?!\d))/g, ",");

        if (this.value.length > 0 && this.classList.contains('currency')) {
            if (currentLang == 'ko') {
                this.value = this.value + ' 원';
            }

            if (currentLang == 'en') {
                this.value = '$' + this.value;
            }
        }
    });

    counter();
});

function openChart() {
    $('#chart-wrapper').css('display', 'flex');
}

function closeChart() {
    $('#chart-wrapper').hide();
}


function counter() {
    var dday = new Date("Feb 19, 2021, 13:00:00").getTime();
    setInterval(function () {
        var now = new Date();
        var distance = dday - now;
        var d = Math.floor(distance / (1000 * 60 * 60 * 24));
        var h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var s = Math.floor((distance % (1000 * 60)) / 1000);
        if (s < 10) {
            s = '0' + s;
        }
        $('.time-box .timer').html(`D-${d} ${h}H ${m}M ${s}S`); // D-1 5H 44M 59S
    }, 1000);
}

function activeNavigation(target) {
    $('#navigation li.' + target).addClass('active');

    var targetIcon = $('#navigation li.' + target + ' img');
    var iconSrc = targetIcon.attr('src');

    targetIcon.attr('src', iconSrc.replace('.svg', '-active.svg'));
}

function toggleLike(_this) {
    var target = $(_this).find('img');
    var imgSrc = target.attr('src');

    if (imgSrc.includes('_empty')) {
        imgSrc = imgSrc.replace('_empty', '_fill');
    } else {
        imgSrc = imgSrc.replace('_fill', '_empty');
    }

    target.attr('src', imgSrc);
}