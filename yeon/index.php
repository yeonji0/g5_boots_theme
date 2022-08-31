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

    <div>
        <div class="mView mb-5">
         <video src="https://ybmlemon.com/img/web/HOME/main/ybmlemon.mp4" autoplay muted loop muted playsinline poster></video>
        </div>
    </div>

    <div class="container banner p-5">
        <div class="row">
            <div class="container-fluid d-flex justify-content-center align-items-center gap-5">
                <div class="imgWrap p-3 position-relative">
                     <img class="position-relative" src="<? echo G5_THEME_IMG_URL ?>/main_visual_01.png" alt="">
                     <img class="img01 position-absolute" src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item01.png" alt="">
                     <img class="img02 position-absolute" src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item02.png" alt="">
                </div>

                <div class="txtWrap p-5 text-center">
                    <h2 class="mb-3">YBM 레몬만의 <br> 전용뷰어로 수업</h2>
                    <p>화상 회의실 같은 딱딱한 뷰어가 아닙니다. <br> YBM교육이 개발한 화상수업 전용 뷰어입니다.</p>
                </div>      
            </div>

            <div class="row"  >
                
                <div class="container-fluid d-flex justify-content-center align-items-center gap-5">
                <div class="txtWrap p-5 text-center">
                    <h2 class="mb-3">YBM 레몬만의 <br> 전용뷰어로 수업</h2>
                    <p>화상 회의실 같은 딱딱한 뷰어가 아닙니다. <br> YBM교육이 개발한 화상수업 전용 뷰어입니다.</p>
                </div>
                
                    <div class="imgWrap">
                         <img class="position-relative" src="<? echo G5_THEME_IMG_URL ?>/main_visual_01.png" alt="">
                    </div>
            </div>
        </div>

    </div>



<?php
include_once(G5_THEME_PATH.'/tail.php');