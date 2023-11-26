<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

                                </div>
                            </div>
                            <!--//Content container-->
                        </div>
                        <!--//Content-->
                    </div>
                    <!--//Content wrapper-->

                    <!--Footer-->
                    <div class="app-footer bg-white">
                        <div class="container-xxl pt-6 text-dark text-center">
                            <span class="text-muted fw-semibold">2023 &copy; </span>
                            <span class="text-gray-800 ms-lg-2">서울 서대문구 경기대로9길 10 (충정로2가, 경기초등학교)</span><br class="d-sm-none" />
                            <span class="text-gray-800 ms-lg-6">TEL. 02-363-2908</span>
                            <span class="text-gray-800 ms-lg-6">FAX. 02 02-3146-9581</span>
                        </div>
                    </div>
                    <!--//Footer-->

                </div>
                <!--//:Main-->
            </div>
            <!--//Wrapper-->

        </div>
        <!--//Page-->
    </div>
    <!--//App-->

    <!--Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <span class="svg-icon">
            <i class="fad fa-arrow-up"></i>
        </span>
    </div>
    <!--//Scrolltop-->


<?php
    if ($config['cf_analytics']) {
        echo $config['cf_analytics'];
    }
?>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");