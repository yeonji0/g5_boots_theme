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
                <div class="col-md-6 d-flex justify-content-center col-lg-8 position-relative mb-5 p-5">
                    <img class="img-fluid" src="<? echo G5_THEME_IMG_URL ?>/main_visual_01.png" alt="">
                    <img class="img01 position-absolute" src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item01.png" alt="">
                    <img class="img02 position-absolute" src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item02.png" alt="">
                    <img class="img03 rounded-5 position-absolute" src="<? echo G5_THEME_IMG_URL ?>/main_ani.gif" alt="">
                    <img class="img04 position-absolute" src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item03.png" alt="">                
                </div>
               
                <div class="col-md-6 col-lg-4 txtWrap d-flex flex-column justify-content-center p-3">
                    <h2 class="mb-5">YBM 레몬만의 <br> 전용뷰어로 수업</h2>
                    <p>화상 회의실 같은 딱딱한 뷰어가 아닙니다. <br> YBM교육이 개발한 화상수업 전용 뷰어입니다.</p>
                </div>  

            </div>
    </div>

    <div class="container sec01 rounded-5 mb-5 p-3">       
            <div class="row">   
                <div class="col-md-6 col-lg-8 d-flex align-items-center">
                        <div class="txttWrap p-3">
                            <h2 class="mb-3">화상수업을 위해 개발된 <br> e-Classbook </h2>
                            <p>오프라인 교재를 그대로 올려서 수업하지 않습니다.<br>온라인 수업에 맞춰 개발된 온라인 전용 e-Classbook입니다.</p>
                        </div>
                </div>         
                <div class="col-md-6 col-lg-4 p-3">
                    <img class="img05 img-fluid" src="<? echo G5_THEME_IMG_URL ?>/main_visual_02.png" alt="">
                </div>

            </div>
 
    </div>
        
       
    <div class="container sec02 p-3 mb-5">
        <div class="row">       
            <div class="col-md-6 d-flex position-relative ">
                <img class="img06 " src="<? echo G5_THEME_IMG_URL ?>/main_visual_03.png" alt="">
                <img class="img07 position-absolute" src="<? echo G5_THEME_IMG_URL ?>/img_6.png" alt="">
            </div>

            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="txtWrap">
                    <h2 class="mb-3">지루할 틈이 없는 수업 진행</h2>
                    <p>온라인 교구와 액티비티로 흥미있는 수업이 진행됩니다.<br>선생님과 함께 직접 수업에 참여합니다.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container sec03 p-3 rounded-5">
        <img class="img08 position-absolute" src="<? echo G5_THEME_IMG_URL ?>/main_visual_bg02.png" alt="">
        <div class="row">
            <div class="col-md-6 position-relative d-flex">
                <div class="txtWrap">
                    <h2 class="mb-3">외국인 선생님 + <br> 한국인 선생님이 함께 </h2>
                    <p>외국인 선생님과 수업할 때, 한국인 선생님도<br>옆에 함께합니다. 더 이상 영어가 두렵지 않습니다.</p>
                </div>
                <img class="img08 position-absolute" src="<? echo G5_THEME_IMG_URL ?>/main_visual_char.png" alt="">
            </div>

            <div class="col-md-6">
             <img class="img09 " src="<? echo G5_THEME_IMG_URL ?>/main_visual_04.png" alt="">
            </div>
        </div>
    </div>


<?php
include_once(G5_THEME_PATH.'/tail.php');