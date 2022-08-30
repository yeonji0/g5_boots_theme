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
    .visual{
        height: 300px;
        background-image: url(<? echo G5_THEME_IMG_URL?>/main.png);
        background-position:center;
        background-repeat:no-repeat;
        background-size:cover;
        background-attachment:fixed;
        }
</style>
<div class="visual">
    
</div>


<?php
echo G5_THEME_PATH;
echo G5_THEME_IMG_URL. "<BR>";
echo G5_THEME_CSS_URL. "<BR>";
echo G5_THEME_JS_URL. "<BR>";
echo G5_BBS_URL. "<BR>";
?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php
            // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
            // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
            // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
            echo latest('theme/basic', 'notice', 3, 30);
            ?>
        </div>
    </div>
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');