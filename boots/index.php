<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<style>
    .mView{
        width: 100%;padding-top: 36%;
        position: relative; overflow:hidden;
        }
    .mView video{position: absolute; width: 100%;left: 50%;top: 50%; transform:translate(-50%,-50%)}
</style>
<div class="mView">
    <video src="https://ybmlemon.com/img/web/HOME/main/ybmlemon.mp4"autoplay="" muted=""></video>
</div>
<style>
    .cont{}
</style>
<div class="container cont">
    <div class="row">
        <div class="col-md-4 p-4">
            <?php
            // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
            // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
            // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
            echo latest('theme/basic', 'notice', 5, 23);		// 최소설치시 자동생성되는 갤러리게시판
            ?>
        </div>
        <div class="col-md-4 p-4">
            <?php
            echo latest('theme/basic', 'notice', 5, 23);	
            ?>
        </div>
        <div class="col-md-4 p-4">
            <?php
            echo latest('theme/basic', 'notice', 5, 23);
            ?>
        </div>
    </div>
</div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    .prev,.next{cursor: pointer;}
    img.prev,img.next{position: absolute;top: 50%; transform:translateY(-50%)}
    img.prev{left: -50px;}
    img.next{right: -50px;}
    .slickslide1 .sItem{
        padding:10px; opacity:0.5;transition:0.3s;
        transform:scale(0.8)
    }
    .slickslide1 .sItem.slick-center{
        padding:10px; opacity:1;
        transform:scale(1)
    }

</style>
<div class="container position-relative">
    <img src="<?php echo G5_THEME_IMG_URL?>/prev.png" alt="" class="prev d-none d-md-block">
    <img src="<?php echo G5_THEME_IMG_URL?>/next1.png" alt="" class="next d-none d-md-block">
    <div class="slickslide1">
        <div class="sItem">
            <img src="<?php echo G5_THEME_IMG_URL?>/img1.jpg" alt="" class="img-fluid">
        </div>
        <div class="sItem">
            <img src="<?php echo G5_THEME_IMG_URL?>/img2.jpg" alt="" class="img-fluid">
        </div>
        <div class="sItem">
            <img src="<?php echo G5_THEME_IMG_URL?>/img3.jpg" alt="" class="img-fluid">
        </div>
        <div class="sItem">
            <img src="<?php echo G5_THEME_IMG_URL?>/img4.jpg" alt="" class="img-fluid">
        </div>
        <div class="sItem">
            <img src="<?php echo G5_THEME_IMG_URL?>/img5.jpg" alt="" class="img-fluid">
        </div>
        <div class="sItem">
            <img src="<?php echo G5_THEME_IMG_URL?>/img6.jpg" alt="" class="img-fluid">
        </div>
        <div class="sItem">
            <img src="<?php echo G5_THEME_IMG_URL?>/img7.jpg" alt="" class="img-fluid">
        </div>
    </div>
</div>
<script>
    
$('.slickslide1').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  nextArrow:$('.next'),
  prevArrow:$('.prev'),
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
</script>
  


<?php
include_once(G5_THEME_PATH.'/tail.php');