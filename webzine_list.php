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
							<!--Content-->
							<div id="kt_app_content" class="app-content  flex-column-fluid ">
								<!--Content container-->
								<div id="kt_app_content_container" class="app-container">
									<div class="container-xxl">
										<div class="px-2 px-md-4 px-lg-6 px-xl-8 pt-8">

											<div class="row gx-3 my-2">
												<div class="col-sm-6 col-md-3 col-xl-2">
													<select class="form-select mb-2" name="" data-control="select2" data-hide-search="true" data-placeholder="카테고리 선택">
														<option value="0">2023</option>
														<option value="1">2022</option>
													</select>
												</div>
												<div class="col-sm-6 col-md-9 col-xl-10 text-end d-none d-sm-block">
													<div class="mt-4">
														Total Article<strong class="text-primary">2</strong> <em class="text-muted mx-2">/</em> Total Pages<strong class="text-dark">1</strong>
													</div>
												</div>
											</div>

											<div class="row">
												<!--Item-->
												<div class="col-sm-6 col-md-4 col-xl-3">
													<div class="card card-bordered mx-1 text-center text-md-start bg-white my-4 shadow-sm">
														<div class="card-body ls-n0 d-block px-8 px-sm-10 px-lg-12">
															<div class="overlay book-wrap card-rounded-end position-relative mb-4">
																<div class="card-rounded-end">
																	<img src="https://cdn.thereport.co.kr/news/photo/202209/24465_25898_5024.jpg" class="w-100" alt=""/>
																</div>
																<div class="overlay-layer bg-dark bg-opacity-50 align-items-end justify-content-center card-rounded-end">
																	<div class="d-flex flex-grow-1 flex-center  py-5">

																		<a href="webzine_detail.php" class="btn btn-sm fs-8 btn-light-info btn-shadow ms-2"><i class="fad fa-arrow-alt-to-bottom svg-icon"></i> 다운로드</a>
																	</div>
																</div>
															</div>
															<div class="m-0 px-2">
																<span class="fs-6 text-gray-600 d-block lh-base mb-2">2023</span>
																<a href="webzine_detail.php" class="text-gray-800 fw-bold fs-4 d-block lh-base text-truncate w-98 d-block text-hover-info">4분기 수업나눔 웹진</a>
															</div>
														</div>
													</div>
												</div>
												<!--//Item-->

												<!--Item-->
												<div class="col-sm-6 col-md-4 col-xl-3">
													<div class="card card-bordered mx-1 text-center text-md-start bg-white my-4 shadow-sm">
														<div class="card-body ls-n0 d-block px-8 px-sm-10 px-lg-12">
															<div class="overlay book-wrap card-rounded-end position-relative mb-4">
																<div class="card-rounded-end">
																	<img src="https://cdn.thereport.co.kr/news/photo/202209/24465_25898_5024.jpg" class="w-100" alt=""/>
																</div>
																<div class="overlay-layer bg-dark bg-opacity-50 align-items-end justify-content-center card-rounded-end">
																	<div class="d-flex flex-grow-1 flex-center  py-5">

																		<a href="webzine_detail.php" class="btn btn-sm fs-8 btn-light-info btn-shadow ms-2"><i class="fad fa-arrow-alt-to-bottom svg-icon"></i> 다운로드</a>
																	</div>
																</div>
															</div>
															<div class="m-0 px-2">
																<span class="fs-6 text-gray-600 d-block lh-base mb-2">2023</span>
																<a href="webzine_detail.php" class="text-gray-800 fw-bold fs-4 d-block lh-base text-truncate w-98 d-block text-hover-info">4분기 수업나눔 웹진</a>
															</div>
														</div>
													</div>
												</div>
												<!--//Item-->

												<!--Item-->
												<div class="col-sm-6 col-md-4 col-xl-3">
													<div class="card card-bordered mx-1 text-center text-md-start bg-white my-4 shadow-sm">
														<div class="card-body ls-n0 d-block px-8 px-sm-10 px-lg-12">
															<div class="overlay book-wrap card-rounded-end position-relative mb-4">
																<div class="card-rounded-end">
																	<img src="https://cdn.thereport.co.kr/news/photo/202209/24465_25898_5024.jpg" class="w-100" alt=""/>
																</div>
																<div class="overlay-layer bg-dark bg-opacity-50 align-items-end justify-content-center card-rounded-end">
																	<div class="d-flex flex-grow-1 flex-center  py-5">

																		<a href="webzine_detail.php" class="btn btn-sm fs-8 btn-light-info btn-shadow ms-2"><i class="fad fa-arrow-alt-to-bottom svg-icon"></i> 다운로드</a>
																	</div>
																</div>
															</div>
															<div class="m-0 px-2">
																<span class="fs-6 text-gray-600 d-block lh-base mb-2">2023</span>
																<a href="webzine_detail.php" class="text-gray-800 fw-bold fs-4 d-block lh-base text-truncate w-98 d-block text-hover-info">4분기 수업나눔 웹진</a>
															</div>
														</div>
													</div>
												</div>
												<!--//Item-->

												<!--Item-->
												<div class="col-sm-6 col-md-4 col-xl-3">
													<div class="card card-bordered mx-1 text-center text-md-start bg-white my-4 shadow-sm">
														<div class="card-body ls-n0 d-block px-8 px-sm-10 px-lg-12">
															<div class="overlay book-wrap card-rounded-end position-relative mb-4">
																<div class="card-rounded-end">
																	<img src="https://cdn.thereport.co.kr/news/photo/202209/24465_25898_5024.jpg" class="w-100" alt=""/>
																</div>
																<div class="overlay-layer bg-dark bg-opacity-50 align-items-end justify-content-center card-rounded-end">
																	<div class="d-flex flex-grow-1 flex-center  py-5">

																		<a href="webzine_detail.php" class="btn btn-sm fs-8 btn-light-info btn-shadow ms-2"><i class="fad fa-arrow-alt-to-bottom svg-icon"></i> 다운로드</a>
																	</div>
																</div>
															</div>
															<div class="m-0 px-2">
																<span class="fs-6 text-gray-600 d-block lh-base mb-2">2023</span>
																<a href="webzine_detail.php" class="text-gray-800 fw-bold fs-4 d-block lh-base text-truncate w-98 d-block text-hover-info">4분기 수업나눔 웹진</a>
															</div>
														</div>
													</div>
												</div>
												<!--//Item-->

												<!--Item-->
												<div class="col-sm-6 col-md-4 col-xl-3">
													<div class="card card-bordered mx-1 text-center text-md-start bg-white my-4 shadow-sm">
														<div class="card-body ls-n0 d-block px-8 px-sm-10 px-lg-12">
															<div class="overlay book-wrap card-rounded-end position-relative mb-4">
																<div class="card-rounded-end">
																	<img src="https://cdn.thereport.co.kr/news/photo/202209/24465_25898_5024.jpg" class="w-100" alt=""/>
																</div>
																<div class="overlay-layer bg-dark bg-opacity-50 align-items-end justify-content-center card-rounded-end">
																	<div class="d-flex flex-grow-1 flex-center  py-5">

																		<a href="webzine_detail.php" class="btn btn-sm fs-8 btn-light-info btn-shadow ms-2"><i class="fad fa-arrow-alt-to-bottom svg-icon"></i> 다운로드</a>
																	</div>
																</div>
															</div>
															<div class="m-0 px-2">
																<span class="fs-6 text-gray-600 d-block lh-base mb-2">2023</span>
																<a href="webzine_detail.php" class="text-gray-800 fw-bold fs-4 d-block lh-base text-truncate w-98 d-block text-hover-info">4분기 수업나눔 웹진</a>
															</div>
														</div>
													</div>
												</div>
												<!--//Item-->

												<!--Item-->
												<div class="col-sm-6 col-md-4 col-xl-3">
													<div class="card card-bordered mx-1 text-center text-md-start bg-white my-4 shadow-sm">
														<div class="card-body ls-n0 d-block px-8 px-sm-10 px-lg-12">
															<div class="overlay book-wrap card-rounded-end position-relative mb-4">
																<div class="card-rounded-end">
																	<img src="https://cdn.thereport.co.kr/news/photo/202209/24465_25898_5024.jpg" class="w-100" alt=""/>
																</div>
																<div class="overlay-layer bg-dark bg-opacity-50 align-items-end justify-content-center card-rounded-end">
																	<div class="d-flex flex-grow-1 flex-center  py-5">

																		<a href="webzine_detail.php" class="btn btn-sm fs-8 btn-light-info btn-shadow ms-2"><i class="fad fa-arrow-alt-to-bottom svg-icon"></i> 다운로드</a>
																	</div>
																</div>
															</div>
															<div class="m-0 px-2">
																<span class="fs-6 text-gray-600 d-block lh-base mb-2">2023</span>
																<a href="webzine_detail.php" class="text-gray-800 fw-bold fs-4 d-block lh-base text-truncate w-98 d-block text-hover-info">4분기 수업나눔 웹진</a>
															</div>
														</div>
													</div>
												</div>
												<!--//Item-->

												<!--Item-->
												<div class="col-sm-6 col-md-4 col-xl-3">
													<div class="card card-bordered mx-1 text-center text-md-start bg-white my-4 shadow-sm">
														<div class="card-body ls-n0 d-block px-8 px-sm-10 px-lg-12">
															<div class="overlay book-wrap card-rounded-end position-relative mb-4">
																<div class="card-rounded-end">
																	<img src="https://cdn.thereport.co.kr/news/photo/202209/24465_25898_5024.jpg" class="w-100" alt=""/>
																</div>
																<div class="overlay-layer bg-dark bg-opacity-50 align-items-end justify-content-center card-rounded-end">
																	<div class="d-flex flex-grow-1 flex-center  py-5">

																		<a href="webzine_detail.php" class="btn btn-sm fs-8 btn-light-info btn-shadow ms-2"><i class="fad fa-arrow-alt-to-bottom svg-icon"></i> 다운로드</a>
																	</div>
																</div>
															</div>
															<div class="m-0 px-2">
																<span class="fs-6 text-gray-600 d-block lh-base mb-2">2022</span>
																<a href="webzine_detail.php" class="text-gray-800 fw-bold fs-4 d-block lh-base text-truncate w-98 d-block text-hover-info">4분기 수업나눔 웹진</a>
															</div>
														</div>
													</div>
												</div>
												<!--//Item-->

												<!--Item-->
												<div class="col-sm-6 col-md-4 col-xl-3">
													<div class="card card-bordered mx-1 text-center text-md-start bg-white my-4 shadow-sm">
														<div class="card-body ls-n0 d-block px-8 px-sm-10 px-lg-12">
															<div class="overlay book-wrap card-rounded-end position-relative mb-4">
																<div class="card-rounded-end">
																	<img src="https://cdn.thereport.co.kr/news/photo/202209/24465_25898_5024.jpg" class="w-100" alt=""/>
																</div>
																<div class="overlay-layer bg-dark bg-opacity-50 align-items-end justify-content-center card-rounded-end">
																	<div class="d-flex flex-grow-1 flex-center  py-5">

																		<a href="webzine_detail.php" class="btn btn-sm fs-8 btn-light-info btn-shadow ms-2"><i class="fad fa-arrow-alt-to-bottom svg-icon"></i> 다운로드</a>
																	</div>
																</div>
															</div>
															<div class="m-0 px-2">
																<span class="fs-6 text-gray-600 d-block lh-base mb-2">2022</span>
																<a href="webzine_detail.php" class="text-gray-800 fw-bold fs-4 d-block lh-base text-truncate w-98 d-block text-hover-info">4분기 수업나눔 웹진</a>
															</div>
														</div>
													</div>
												</div>
												<!--//Item-->

												<!--Item-->
												<div class="col-sm-6 col-md-4 col-xl-3">
													<div class="card card-bordered mx-1 text-center text-md-start bg-white my-4 shadow-sm">
														<div class="card-body ls-n0 d-block px-8 px-sm-10 px-lg-12">
															<div class="overlay book-wrap card-rounded-end position-relative mb-4">
																<div class="card-rounded-end">
																	<img src="https://cdn.thereport.co.kr/news/photo/202209/24465_25898_5024.jpg" class="w-100" alt=""/>
																</div>
																<div class="overlay-layer bg-dark bg-opacity-50 align-items-end justify-content-center card-rounded-end">
																	<div class="d-flex flex-grow-1 flex-center  py-5">

																		<a href="webzine_detail.php" class="btn btn-sm fs-8 btn-light-info btn-shadow ms-2"><i class="fad fa-arrow-alt-to-bottom svg-icon"></i> 다운로드</a>
																	</div>
																</div>
															</div>
															<div class="m-0 px-2">
																<span class="fs-6 text-gray-600 d-block lh-base mb-2">2022</span>
																<a href="webzine_detail.php" class="text-gray-800 fw-bold fs-4 d-block lh-base text-truncate w-98 d-block text-hover-info">4분기 수업나눔 웹진</a>
															</div>
														</div>
													</div>
												</div>
												<!--//Item-->

												<!--Item-->
												<div class="col-sm-6 col-md-4 col-xl-3">
													<div class="card card-bordered mx-1 text-center text-md-start bg-white my-4 shadow-sm">
														<div class="card-body ls-n0 d-block px-8 px-sm-10 px-lg-12">
															<div class="overlay book-wrap card-rounded-end position-relative mb-4">
																<div class="card-rounded-end">
																	<img src="https://cdn.thereport.co.kr/news/photo/202209/24465_25898_5024.jpg" class="w-100" alt=""/>
																</div>
																<div class="overlay-layer bg-dark bg-opacity-50 align-items-end justify-content-center card-rounded-end">
																	<div class="d-flex flex-grow-1 flex-center  py-5">

																		<a href="webzine_detail.php" class="btn btn-sm fs-8 btn-light-info btn-shadow ms-2"><i class="fad fa-arrow-alt-to-bottom svg-icon"></i> 다운로드</a>
																	</div>
																</div>
															</div>
															<div class="m-0 px-2">
																<span class="fs-6 text-gray-600 d-block lh-base mb-2">2022</span>
																<a href="webzine_detail.php" class="text-gray-800 fw-bold fs-4 d-block lh-base text-truncate w-98 d-block text-hover-info">4분기 수업나눔 웹진</a>
															</div>
														</div>
													</div>
												</div>
												<!--//Item-->

												<!--Item-->
												<div class="col-sm-6 col-md-4 col-xl-3">
													<div class="card card-bordered mx-1 text-center text-md-start bg-white my-4 shadow-sm">
														<div class="card-body ls-n0 d-block px-8 px-sm-10 px-lg-12">
															<div class="overlay book-wrap card-rounded-end position-relative mb-4">
																<div class="card-rounded-end">
																	<img src="https://cdn.thereport.co.kr/news/photo/202209/24465_25898_5024.jpg" class="w-100" alt=""/>
																</div>
																<div class="overlay-layer bg-dark bg-opacity-50 align-items-end justify-content-center card-rounded-end">
																	<div class="d-flex flex-grow-1 flex-center  py-5">

																		<a href="webzine_detail.php" class="btn btn-sm fs-8 btn-light-info btn-shadow ms-2"><i class="fad fa-arrow-alt-to-bottom svg-icon"></i> 다운로드</a>
																	</div>
																</div>
															</div>
															<div class="m-0 px-2">
																<span class="fs-6 text-gray-600 d-block lh-base mb-2">2022</span>
																<a href="webzine_detail.php" class="text-gray-800 fw-bold fs-4 d-block lh-base text-truncate w-98 d-block text-hover-info">4분기 수업나눔 웹진</a>
															</div>
														</div>
													</div>
												</div>
												<!--//Item-->

												<!--Item-->
												<div class="col-sm-6 col-md-4 col-xl-3">
													<div class="card card-bordered mx-1 text-center text-md-start bg-white my-4 shadow-sm">
														<div class="card-body ls-n0 d-block px-8 px-sm-10 px-lg-12">
															<div class="overlay book-wrap card-rounded-end position-relative mb-4">
																<div class="card-rounded-end">
																	<img src="https://cdn.thereport.co.kr/news/photo/202209/24465_25898_5024.jpg" class="w-100" alt=""/>
																</div>
																<div class="overlay-layer bg-dark bg-opacity-50 align-items-end justify-content-center card-rounded-end">
																	<div class="d-flex flex-grow-1 flex-center  py-5">

																		<a href="webzine_detail.php" class="btn btn-sm fs-8 btn-light-info btn-shadow ms-2"><i class="fad fa-arrow-alt-to-bottom svg-icon"></i> 다운로드</a>
																	</div>
																</div>
															</div>
															<div class="m-0 px-2">
																<span class="fs-6 text-gray-600 d-block lh-base mb-2">2022</span>
																<a href="webzine_detail.php" class="text-gray-800 fw-bold fs-4 d-block lh-base text-truncate w-98 d-block text-hover-info">4분기 수업나눔 웹진</a>
															</div>
														</div>
													</div>
												</div>
												<!--//Item-->
											</div>

											<!-- Pagination -->
											<ul class="pagination mt-6">
												<li class="page-item previous disabled"><a href="webzine_detail.php" class="page-link"><i class="previous"></i></a></li>
												<li class="page-item "><a href="webzine_detail.php" class="page-link">1</a></li>
												<li class="page-item active"><a href="webzine_detail.php" class="page-link">2</a></li>
												<li class="page-item "><a href="webzine_detail.php" class="page-link">3</a></li>
												<li class="page-item "><a href="webzine_detail.php" class="page-link">4</a></li>
												<li class="page-item "><a href="webzine_detail.php" class="page-link">5</a></li>
												<li class="page-item "><a href="webzine_detail.php" class="page-link">6</a></li>
												<li class="page-item next"><a href="webzine_detail.php" class="page-link"><i class="next"></i></a></li>
											</ul>
											<!-- /Pagination -->

											<div class="row gx-3 my-6">
												<div class="col-md-2"></div>
												<div class="col-3 col-md-2">
													<select name="#" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="검색 옵션">
														<option value="1">제목</option>
													</select>
												</div>
												<div class="col-6 col-md-4 col-xl-5">
													<div class="d-flex align-items-center position-relative">
														<i class="fad fa-search fs-4 text-gray-500 position-absolute top-50 translate-middle-y ms-4"></i>
														<input type="text" data-kt-customer-table-filter="search" class="form-control ps-10 ps-sm-15" placeholder="키워드를 입력하세요.">
													</div>
												</div>
												<div class="col-3 col-md-2 col-xl-1">
													<button type="submit" class="btn btn-dark w-100">검색</button>
												</div>
												<div class="col-md-2"></div>
											</div>

											<div class="my-4 text-end">
												<a href="webzine_write.php" class="btn btn-primary">웹진등록</a>
											</div>


										</div>
									</div>
								</div>
								<!--//Content container-->
							</div>
							<!--//Content-->
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