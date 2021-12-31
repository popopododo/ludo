<?php include_once ($_SERVER['DOCUMENT_ROOT']."/component/header.php")?>
<div id="item_form" class="container">
    <div class="title all-center">
        <?php echo msg('item_form_page_title') ?>
    </div>
    <div class="form_step_tab">
        <ul>
            <li class="all-center category active" data-step="1"><?php echo msg('item_form_step1') ?></li>
            <li class="all-center content" data-step="2"><?php echo msg('item_form_step2') ?></li>
            <li class="all-center setting" data-step="3"><?php echo msg('item_form_step3') ?></li>
        </ul>
    </div>
    <div class="ad all-center">
        <div>AD</div>
    </div>
    <div class="from_step_content">
        <div class="category" style="display: block">
            <div class="form-group">
                <label><?php echo msg('item_form_cate1') ?></label>
                <select name="" class="form-control">
                    <option value="" disabled selected><?php echo msg('item_form_cate_op') ?></option>
                    <option value=""><?php echo msg('item_form_cate1_op1') ?></option>
                    <option value="" disabled><?php echo msg('item_form_cate1_op2') ?></option>
                    <option value="" disabled><?php echo msg('item_form_cate1_op3') ?></option>
                </select>
            </div>
    
            <div class="form-group">
                <label><?php echo msg('item_form_cate2') ?></label>
                <select name="" class="form-control">
                    <option value="" disabled selected><?php echo msg('item_form_cate_op') ?></option>
                    <option value=""><?php echo msg('item_form_cate2_op1') ?></option>
                    <option value="" disabled><?php echo msg('item_form_cate2_op2') ?></option>
                    <option value="" disabled><?php echo msg('item_form_cate2_op3') ?></option>
                    <option value="" disabled><?php echo msg('item_form_cate2_op4') ?></option>
                </select>
            </div>
    
            <div class="form-group">
                <label><?php echo msg('item_form_cate3') ?></label>
                <select name="" class="form-control">
                    <option value="" disabled selected><?php echo msg('item_form_cate_op') ?></option>
                    <option value=""><?php echo msg('item_form_cate3_op1') ?></option>
                    <option value="" disabled><?php echo msg('item_form_cate3_op2') ?></option>
                    <option value="" disabled><?php echo msg('item_form_cate3_op3') ?></option>
                    <option value="" disabled><?php echo msg('item_form_cate3_op4') ?></option>
                    <option value="" disabled><?php echo msg('item_form_cate3_op5') ?></option>
                    <option value="" disabled><?php echo msg('item_form_cate3_op6') ?></option>
                    <option value="" disabled><?php echo msg('item_form_cate3_op7') ?></option>
                </select>
            </div>
    
            <div class="form-group">
                <label><?php echo msg('item_form_cate4') ?></label>
                <select name="" class="form-control">
                    <option value="" disabled selected><?php echo msg('item_form_cate_op') ?></option>
                    <option value="" disabled><?php echo msg('item_form_cate4_op1') ?></option>
                    <option value="" disabled><?php echo msg('item_form_cate4_op2') ?></option>
                    <option value="" disabled><?php echo msg('item_form_cate4_op3') ?></option>
                    <option value=""><?php echo msg('item_form_cate4_op4') ?></option>
                    <option value="" disabled><?php echo msg('item_form_cate4_op5') ?></option>
                    <option value="" disabled><?php echo msg('item_form_cate4_op6') ?></option>
                </select>
            </div>
            
            <a class="btn next" data-step="1"><?php echo msg('item_form_next_btn') ?></a>
        </div>
        
        <div class="content">
            <div class="form-group">
                <label><?php echo msg('item_form_img') ?></label>
                <div class="all-center file-btn">
                    <div class="cross-sign"></div>
                </div>
                <input class="form-control" type="file" style="display: none;">
            </div>
            
            <div class="form-group">
                <label><?php echo msg('item_form_title') ?></label>
                <input class="form-control">
            </div>
    
            <div class="form-group">
                <label><?php echo msg('item_form_date') ?></label>
                <input class="form-control date-input" placeholder="YYYY-MM" maxlength="7">
            </div>
            
            <div class="form-group">
                <label><?php echo msg('item_form_product_status') ?></label>
                <select name="" class="form-control">
                    <option value="" disabled selected><?php echo msg('item_form_cate_op') ?></option>
                    <option value=""><?php echo msg('item_form_product_status_op1') ?></option>
                    <option value=""><?php echo msg('item_form_product_status_op2') ?></option>
                    <option value=""><?php echo msg('item_form_product_status_op3') ?></option>
                    <option value=""><?php echo msg('item_form_product_status_op4') ?></option>
                </select>
            </div>
    
            <div class="form-group">
                <label><?php echo msg('item_form_content') ?></label>
                <textarea class="form-control"></textarea>
            </div>
    
            <a class="btn next" data-step="2"><?php echo msg('item_form_next_btn') ?></a>
        </div>
        
        <div class="setting">
            <div class="form-group" style="margin-bottom: 16px">
                <label><?php echo msg('item_form_sell_type') ?></label>
                <select name="sell-option" class="form-control">
                    <option value="fix" selected><?php echo msg('item_form_sell_type_fix') ?></option>
                    <option value="auction"><?php echo msg('item_form_sell_type_auction') ?></option>
                </select>
            </div>
            
            <div id="sell-fix">
                <div class="form-group">
                    <label><?php echo msg('item_form_sell_price') ?></label>
                    <input class="form-control price-input currency" placeholder="<?php echo msg('item_form_sell_price_place') ?>">
                </div>
    
                <div class="form-group">
                    <input type="checkbox" class="switch" id="nego">
                    <label class="nego-label" for="nego"><span class="sw"></span><?php echo msg('item_form_sell_nego_sw') ?></label>
                </div>
    
                <a href="javascript:openChart();" class="btn btn2" style="margin-bottom: 50px"><?php echo msg('item_form_sell_market_price') ?></a>
    
                <a class="btn next" data-step="3"><?php echo msg('item_form_submit_btn') ?></a>
            </div>
    
            <div id="sell-auction" style="display:none;">
                <div class="form-group">
                    <label><?php echo msg('item_form_sell_min_price') ?></label>
                    <input class="form-control price-input currency" placeholder="<?php echo msg('item_form_sell_min_price_place') ?>">
                </div>
    
                <div class="form-group">
                    <label><?php echo msg('item_form_sell_immediate_price') ?></label>
                    <input class="form-control immediate-purchase-input price-input currency" placeholder="<?php echo msg('item_form_sell_price_place') ?>">
                </div>
        
                <div class="form-group">
                    <input type="checkbox" class="switch" id="immediate-purchase">
                    <label class="immediate-purchase-label" for="immediate-purchase"><span class="sw"></span><?php echo msg('item_form_sell_immediate_price_sw') ?></label>
                </div>
        
                <a href="javascript:openChart();" class="btn btn2" style="margin-bottom: 50px"><?php echo msg('item_form_sell_market_price') ?></a>
        
                <a class="btn next" data-step="3"><?php echo msg('item_form_submit_btn') ?></a>
            </div>
        </div>
    </div>
    
</div>

<div id="chart-wrapper" class="all-center">
    <div class="content">
        <div class="title">
            <div class="img-wrapper">
                <img src="/static/img/nintendo_switch.svg" alt="switch">
            </div>
            <div class="text">
                <?php echo msg('item_form_chart_title') ?>
            </div>
        </div>
        <div class="chart">
            <img src="/static/img/chart.svg" alt="chart">
        </div>
        <div class="info">
            <?php echo msg('item_form_chart_content') ?>
        </div>
        <a class="btn btn2" href="javascript:closeChart();">
            <?php echo msg('item_form_close_btn') ?>
        </a>
    </div>
</div>

<script>
    $(function() {
        $('.file-btn').on('click', function () {
            $('input[type=file]').click();
        });
        
        $('a.next.btn').on('click', function () {
            var currentStep = $(this).data('step');

            moveToNextStep(currentStep);
        });

        $('.form_step_tab li').on('click', function () {
            var targetStep = $(this).data('step');

            moveToStep(targetStep);
        });
        
        $('.date-input').on('keyup', function () {
            if (this.value.length > 7) {
                this.value = this.value.substr(0, 7);
            }
            var val = this.value.replace(/\D/g, '');
            var original = this.value.replace(/\D/g, '').length;
            var conversion = '';
            for (i = 0; i < 2; i++) {
                if (val.length > 4 && i === 0) {
                    conversion += val.substr(0, 4) + '-';
                    val = val.substr(4);
                } else if (original > 6 && val.length > 2 && i === 1) {
                    conversion += val.substr(0, 2) + '-';
                    val = val.substr(2);
                }
            }
            conversion += val;
            this.value = conversion;
        });
        
        $('select[name="sell-option"]').on('change', function () {
            var option = $(this).val();
            
            $('#sell-fix, #sell-auction').hide();
            
            if (option === 'fix') {
                $('#sell-fix').show();
            } else {
                $('#sell-auction').show();
            }
        });
        
        $('.immediate-purchase-input').on('keyup', function () {
           if (this.value.length > 0) {
               $('#immediate-purchase').prop('checked', true);
           } else {
               $('#immediate-purchase').prop('checked', false);
           }
        });
        
        $('#immediate-purchase').on('change', function () {
            if ($(this).prop('checked') == false) {
                $('.immediate-purchase-input').val('');
            }
        });
    });
    
    function moveToNextStep(currentStep) {
        var next_step = currentStep + 1;

        if (currentStep <= 2) {
            $('.from_step_content > div').hide();
            $('.from_step_content > div:nth-of-type(' + next_step + ')').show();

            $('.form_step_tab li').removeClass('active');
            $('.form_step_tab li:nth-of-type(' + next_step + ')').addClass('active');
        } else {
            location.href = "/";
        }
    }

    function moveToStep(toStep) {
        $('.from_step_content > div').hide();
        $('.from_step_content > div:nth-of-type(' + toStep + ')').show();

        $('.form_step_tab li').removeClass('active');
        $('.form_step_tab li:nth-of-type(' + toStep + ')').addClass('active');
    }
</script>
<?php include_once ($_SERVER['DOCUMENT_ROOT']."/component/navigation.php")?>

<script>
    activeNavigation('home');
</script>
