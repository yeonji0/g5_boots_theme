<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand col-sm-3" href="#">
                <img src="<? echo G5_THEME_IMG_URL ?>/logo.svg" alt="" style="width:180px">
            </a>

            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>

            <div class="collapse navbar-collapse col-sm-5" id="collapsibleNavId">

                <ul class="navbar-nav ms-auto mt-2 mt-lg-0 me-5 gap-5">
                    <?php
                    $menu_datas = get_menu_db(0, true);
                    $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                    $i = 0;
                    foreach( $menu_datas as $row ){
                    if( empty($row) ) continue;
                
                ?>

                    <li class="nav-item">
                        <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" ><?php echo $row['me_name'] ?></a>
                    </li>
                <?php
                $i++;
                }   //end foreach $row
               ?>
                </ul>
            </div>

            <div class="logIn d-flex gap-2 justify-content-center ">
                <img src="<? echo G5_THEME_IMG_URL ?>/menu_nonMember.png" alt="" style="width:60px">
                <a href="#" class="d-flex justify-content-center align-items-center">로그인하기</a>
            </div>
            
        </div>
    </nav>


<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
    <div class="container_wr">
        <div>
            <div class="video mb-5">
              <video src="https://ybmlemon.com/img/web/HOME/main/ybmlemon.mp4" 
              autoplay muted loop muted playsinline poster></video>
            </div>
        </div>

        <div class="container banner p-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col d-flex gap-3">
                    <div class="card">
                        <div class="card-img p-3">
                            <img class="position-relative" src="<? echo G5_THEME_IMG_URL ?>/main_visual_01.png" alt="">
                            <img class="img01 position-absolute" src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item01.png" alt="">
                            <img class="img02 position-absolute" src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item02.png" alt="">
                        </div>
                    </div> 
                    <div class="txtWrap">
                        <h2>YBM 레몬만의 <br> 전용뷰어로 수업</h2>
                        <p>화상 회의실 같은 딱딱한 뷰어가 아닙니다. <br> YBM교육이 개발한 화상수업 전용 뷰어입니다.</p>
                    </div>
                </div>
            </div>

        </div>


    