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
?>


    <!--App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">

            <!--Header-->
            <div id="kt_app_header" class="app-header">
                <div class="app-container container-xxl d-flex align-items-stretch justify-content-between " id="kt_app_header_container">
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
                        <a href="/">
                            <img alt="Logo" src="https://kyonggi.sen.es.kr/dggb/module/file/selectImageView.do?atchFileId=12744&fileSn=0" class="h-25px h-lg-35px app-sidebar-logo-default">
                        </a>
                    </div>
                    <div class="d-flex align-items-stretch" id="kt_app_header_wrapper">
                        <div class="app-navbar">
                            <!--User menu-->
                            <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                                <div class="cursor-pointer symbol symbol-30px symbol-md-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <div class="symbol-label fs-5 fw-semibold bg-primary"><i class="fad fa-user text-white"></i></div>
                                </div>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-250px" data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <div class="symbol symbol-40px me-5">
                                                <div class="symbol-label fs-5 fw-semibold bg-primary"><i class="fad fa-user text-white"></i></div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">
                                                        관리자
                                                        <span class="badge badge-light-primary fw-bold fs-8 px-2 py-1 ms-2">Admin</span>
                                                </div>
                                                <span class="fw-semibold text-muted fs-7">웹진통합 관리시스템</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item px-5">
                                        <a href="sign-in.php" class="menu-link px-5">
                                            로그아웃
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--//User menu-->

                            <!--Header menu toggle-->
                            <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
                                <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-35px h-md-35px" id="kt_app_header_menu_toggle">
                                    <span class="svg-icon svg-icon-2 svg-icon-md-1">
                                        <i class="fad fa-align-left"></i>
                                    </span>
                                </div>
                            </div>
                            <!--//Header menu toggle-->
                        </div>
                    </div>
                </div>
            </div>
            <!--//Header-->

            <!--Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
                <!--Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--Content-->
                        <div id="kt_app_content" class="app-content  flex-column-fluid ">
                            <!--Content container-->
                            <div id="kt_app_content_container" class="app-container">
                                <div class="container-xxl">





    <ul>
        <?php if ($is_member) {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
        <?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
        <?php }  ?>
        <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
        <?php }  ?>
    </ul>

    <?php if (!defined("_INDEX_")) { ?>
        <h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2>
    <?php }