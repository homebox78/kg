<!DOCTYPE html>
<html lang="ko">
	<head>
		<?php
			include_once("template_common.php");
		?>
	</head>

	<!--Body-->
	<body id="kt_app_body" data-kt-app-layout="light-header" data-kt-app-header-fixed="true" data-kt-app-toolbar-enabled="true" class="app-default">
   		<!--App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--Page-->
			<div class="app-page  flex-column flex-column-fluid " id="kt_app_page">

				<?php
					include_once("template_header.php");
				?>

				<!--Wrapper-->
				<div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
					<!--Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">


							<!--Content wrapper-->
							<div class="container-xxl d-flex flex-column flex-column-fluid my-8">
								<!--Content-->
								<div id="kt_app_content" class="app-content flex-column-fluid">
									<!--Card-->
									<div class="card">
										<div class="card-body p-5 pb-8 p-md-10 pb-md-12 pb-lg-14">

											<div class="my-1 pb-2">
												<div class="mb-8">
													<div class="d-flex flex-wrap mb-6">
														<div class="me-9 my-1">
															<i class="fad fa-calendar-week text-gray-700 me-1"></i>
															<span class="text-gray-800">2023-12-19</span>
														</div>
														<div class="me-9 my-1">
															<i class="fad fa-eye text-gray-700 me-1"></i>
															<span class="text-gray-800">1354</span>
														</div>
														<div class="me-9 my-1">
															<i class="fad fa-user text-gray-700 me-1"></i>
															<span class="text-gray-800">관리자</span>
														</div>
													</div>

													<strong class="text-dark fs-3 fs-sm-2 fs-lg-1 fw-bold">경기도교육청, 웹진 '월간 수업나눔' 초등학교마다 배포</strong>
													<div class="mt-8">
														<img alt="" src="https://cdn.thereport.co.kr/news/photo/202209/24465_25898_5024.jpg" class="w-100 min-h-200px card-rounded">
													</div>
												</div>

												<div class="fs-5 text-gray-800">
													<p class="mb-8">
														사례마다 동영상, 학습지, 교수 자료, 참고 누리집 등 다양한 자료를 모아 교사들이 수업에 바로 적용할 수 있는 '멀티미디어 이북(e-book)으로 만들었다.
													</p>

													<ul class="list-style-none border-top fs-7 fs-md-6 pt-2 px-0">
														<li class="my-4"><a href="#" class="text-gray-800 text-hover-primary border border-dashed border-gray-500 rounded py-2 px-3"><i class="fad fa-save me-2"></i> 20231025webzine.pdf</a></li>
													</ul>
												</div>
											</div>

											<div class="row mt-4 text-end">
												<div class="col-6 text-start">
													<a href="webzine_list.php" class="btn btn-primary">웹진목록</a>
												</div>
												<div class="col-6 text-end">
													<a href="webzine_write.php" class="btn btn-primary">웹진등록</a>
												</div>
											</div>

										</div>
									</div>
									<!--/Card-->
								</div>
								<!--/Content-->
							</div>
							<!--/Content wrapper-->


						</div>
						<!--//Content wrapper-->

						<?php
							include_once("template_footer.php");
						?>

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

	</body>
	<!--//Body-->
</html>