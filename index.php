<?php include_once ($_SERVER['DOCUMENT_ROOT']."/component/header.php")?>
<div id="main" class="container">
    <div class="banner all-center">
        Event Banner
    </div>
    <div class="search-wrapper">
        <input type="text" placeholder="Type search terms">
        <button>
            <img src="/static/img/search-icon.svg" alt="search">
        </button>
    </div>
    <div class="cate-wrapper">
        <ul>
            <li>
                <a href="/item/top_list.php">
                    <img src="/static/img/category/best.svg" alt="best">
                </a>
                <p>Top Item</p>
            </li>
            <li>
                <a href="/item/nintendo_list.php">
                    <img src="/static/img/category/nintendo.svg" alt="nintendo">
                </a>
                <p>Nintendo</p>
            </li>
            <li>
                <a href="#">
                    <img src="/static/img/category/playstation.svg" alt="playstation">
                </a>
                <p>PlayStation</p>
            </li>
            <li>
                <a href="#">
                    <img src="/static/img/category/auction.svg" alt="auction">
                </a>
                <p>Auction</p>
            </li>
            <li>
                <a href="#">
                    <img src="/static/img/category/xbox.svg" alt="xbox">
                </a>
                <p>XBOX</p>
            </li>
            <li>
                <a href="#">
                    <img src="/static/img/category/pc.svg" alt="pc">
                </a>
                <p>PC</p>
            </li>
        </ul>
    </div>
    <div class="recommend-item-wrapper">
        <p>Recommend for SJSU</p>
        <div class="item-list">
            <ul>
                <?php
                $arr = getData()->data;
                for ($i = 0;  $i < 8; $i++) {
                ?>
                <li>
                    <div class="item">
                        <div class="img-wrapper">
                            <a href="<?php echo $arr[$i]->url ?>">
                                <img src="<?php echo $arr[$i]->img ?>" alt="">
                            </a>
                        </div>
                        <div class="like-wrapper" onclick="toggleLike(this)">
                            <img src="/static/img/like_empty.svg" alt="like">
                        </div>
                        <div class="time-wrapper">
                            <img src="/static/img/time.svg" alt="time">
                            <span><?php echo $arr[$i]->date ?></span>
                        </div>
                        <a href="<?php echo $arr[$i]->url ?>">
                            <div class="title">
                                <?php echo $arr[$i]->title ?>
                            </div>
                            <div class="price">
                                <?php echo $arr[$i]->price ?>
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
</div>
<?php include_once ($_SERVER['DOCUMENT_ROOT']."/component/navigation.php")?>


<style>
    #header .back {
        display: none;
    }
    
    #header .new {
        display: block;
    }
</style>
<script>
    activeNavigation('home');
</script>
