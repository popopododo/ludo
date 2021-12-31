<?php include_once ($_SERVER['DOCUMENT_ROOT']."/component/header.php")?>
<div id="top_item_list" class="container">
    <div class="title-wrapper">
        <div class="title">Nintendo</div>
        <div class="filter-wrapper">
            <select id="sell-filter" class="form-control">
                <option value="all" selected><?php echo msg('top_item_list_filter_op1') ?></option>
                <option value="fix"><?php echo msg('top_item_list_filter_op2') ?></option>
                <option value="auction"><?php echo msg('top_item_list_filter_op3') ?></option>
            </select>
        </div>
        
    </div>
    <div class="item-list">
        <ul>
            <?php
            $arr = getData2()->data;
            for ($i = 0;  $i < count($arr); $i++) {
            ?>
            <li>
                <div class="item">
                    <div class="img-wrapper">
                        <a href="<?php echo $arr[$i]->url?>">
                            <img src="<?php echo $arr[$i]->img?>" alt="">
                        </a>
                    </div>
                    <div class="like-wrapper" onclick="toggleLike(this)">
                        <img src="/static/img/like_empty.svg" alt="like">
                    </div>
                    <div class="time-wrapper">
                        <img src="/static/img/time.svg" alt="time">
                        <span><?php echo $arr[$i]->date?></span>
                    </div>
                    <a href="<?php echo $arr[$i]->url?>">
                        <div class="title">
                            <?php echo $arr[$i]->title?>
                        </div>
                        <div class="price">
                            <?php echo $arr[$i]->price?>
                        </div>
                    </a>
                </div>
            </li>
            <?php
            }
            ?>
            
        </ul>
    </div>
</div>
<?php include_once ($_SERVER['DOCUMENT_ROOT']."/component/navigation.php")?>

<script>
    activeNavigation('home');
</script>
