<?php
$jsonString2 = '{
  "data": [
    {
      "url": "/sell/sell-auction.php",
      "title": "Switch Animal Crossing New Horizons Edition",
      "price": "$300.00",
      "img": "https://img.hankyung.com/photo/202001/53988_104697_945.jpg",
      "date": "15m ago"
    },
    {
      "url": "/sell/sell-reverse.php",
      "title": "Ring Fit Adventure",
      "price": "$68.00",
      "img": "http://image.yes24.com/momo/TopCate2589/MidCate10/258898418.jpg",
      "date": "20m ago"
    },
    {
      "url": "/sell/sell-normal.php",
      "title": "Switch",
      "price": "$300.00",
      "img": "https://www.costco.co.kr/medias/sys_master/images/h21/ha5/26922555408414.jpg",
      "date": "30m ago"
    },
    {
      "url": "#",
      "title": "Legends of Zelda: Breath of the Wild",
      "price": "$59.50",
      "img": "http://image.yes24.com/usedshop/2019/0729/_/f53047de-20fe-4290-8976-b7af80ba7f7c_XL.jpg",
      "date": "1h ago"
    },
    {
      "url": "#",
      "title": "Animal Crossing: New Horizons",
      "price": "$66.10",
      "img": "http://image.yes24.com/goods/90115382/800x0",
      "date": "1h ago"
    },
    {
      "url": "#",
      "title": "The Legend of Zelda: Link\'s Awakening",
      "price": "$59.20",
      "img": "http://image.yes24.com/momo/TopCate2512/MidCate3/251125517.jpg",
      "date": "1h ago"
    },
    {
      "url": "#",
      "title": "Super Mario Odyssey",
      "price": "$58.30",
      "img": "http://image.yes24.com/momo/TopCate1691/MidCate3/169024417.jpg",
      "date": "2h ago"
    },
    {
      "url": "#",
      "title": "Pokémon Sword and Shield",
      "price": "$49.90",
      "img": "https://contents.lotteon.com/itemimage/_v002012/LI/14/82/49/36/24/_2/LI1482493624_2_1.jpg",
      "date": "2h ago"
    },
    {
      "url": "#",
      "title": "Mario Kart 8",
      "price": "$64.50",
      "img": "http://image.yes24.com/goods/57463745/800x0",
      "date": "2h ago"
    },
    {
      "url": "#",
      "title": "Super Mario 3D Land",
      "price": "$61.20",
      "img": "http://image.yes24.com/goods/96851643/800x0",
      "date": "3h ago"
    },
    {
      "url": "#",
      "title": "Kirby Star Allies",
      "price": "$64.30",
      "img": "http://image.yes24.com/goods/59613816/800x0",
      "date": "6h ago"
    },
    {
      "url": "#",
      "title": "Hyrule Warriors Age of Calamity",
      "price": "$64.80",
      "img": "http://image.yes24.com/goods/93875411/800x0",
      "date": "6h ago"
    },
    {
      "url": "#",
      "title": "Mario Tennis Aces",
      "price": "$61.20",
      "img": "http://image.yes24.com/goods/61295744/800x0",
      "date": "8h ago"
    },
    {
      "url": "#",
      "title": "Super Smash Brothers Ultimate",
      "price": "$62.80",
      "img": "http://image.yes24.com/goods/66581711/800x0",
      "date": "10h ago"
    },
    {
      "url": "#",
      "title": "Luigi\'s Mansion 3",
      "price": "$58.20",
      "img": "http://image.yes24.com/goods/79363127/800x0",
      "date": "12h ago"
    }
  ]
}';

function getData2() {
    global $jsonString2;
    return json_decode($jsonString2);
}

//print_r(getData()->data);