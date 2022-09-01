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
            <a class="navbar-brand col-sm-3" href="<?echo G5_URL?>">
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

                <li class="nav-item dropdown">
                    <a class="nav-link" href="<?php echo $row['me_link']; ?>" id="navbarDropdownMenuLink" 
                    role="button" data-bs-toggle="dropdown" aria-expanded="false" target="_<?php echo $row['me_target']; ?>">
                        <?php echo $row['me_name'] ?>>
                    </a>

                    <!-- 서브 -->

                            <?php
                            $k = 0;
                            foreach( (array) $row['sub'] as $row2 ){

                                if( empty($row2) ) continue; 

                                if($k == 0)
                                    echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">'
                                    .PHP_EOL;
                            ?>
                            
                        <li>
                            <a href="<?php echo $row2['me_link']; ?>" 
                               target="_<?php echo $row2['me_target']; ?>" 
                               class="dropdown-item"><?php echo $row2['me_name'] ?>
                            </a>
                        </li>

                        <?php
                        $k++;
                        }   //end foreach $row2

                        if($k > 0)
                            echo '</ul>'.PHP_EOL;
                        ?>
                 <!-- 서브 -->
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

    <?  if(!defined('_INDEX_')) { ?>
        <div class="container subView rounded-5" id="page_title">

            <div class="txtWrap d-flex flex-column align-items-center gap-3">
                <h2 class="loc1D stitle text-white locTitle text-center"></h2>
                <div class="p-3 px-4 bg-dark rounded-5">
                  <ul class="d-flex text-white gap-2">
                    <li><img src="<? echo G5_THEME_IMG_URL?>/home_icon_white.png" alt=""></li>
                    <li>></li>
                    <li class="loc1D"></li>
                    <li>></li>
                    <li><?php echo get_head_title($g5['title']); ?></li>
                  </ul>
                </div>
            </div>
        </div>

    <? } ?>



    <?  if(defined('_INDEX_')) { ?>
        <div class="containerw_wr" > <!-- full -->
    <? }else{?>
        <div class="container position-relative" > <!-- 1400 -->
        <h2 id="container_title" class="stitle text-center py-3">
        <span title="<?php echo get_text($g5['title']); ?>">
        <?php echo get_head_title($g5['title']); ?></span>
        </h2>
    <?} ?>



    