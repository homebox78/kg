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
									<div class="card">
										<div class="card-header align-items-center border-0 p-5 py-md-5 px-md-10">
											<div class="card-title">
												<h2 class="fs-2 fs-md-1 ls-n0 fw-bold">웹진등록</h2>
											</div>
										</div>
										<div class="separator separator-dotted"></div>
										<div class="card-body p-5 pb-8 p-md-10 pb-md-12 pb-lg-14">

											<!-- Write -->
											<form action="#">
												<div class="my-1 pb-2">
													<div class="d-flex flex-wrap gap-5 mb-5">
														<!--Input group-->
														<div class="fv-row w-100 flex-md-root">
															<label class="required form-label">카테고리</label>
															<select class="form-select mb-2" name="tax" data-control="select2" data-hide-search="true" data-placeholder="카테고리 선택" required="required">
																<option>카테고리 선택</option>
																<option value="2024">2024</option>
																<option value="2023">2023</option>
																<option value="2022">2022</option>
															</select>
														</div>
														<!--/Input group-->

														<!--Input group-->
														<div class="fv-row w-100 flex-md-root">
															<label class="required form-label">웹진제목</label>
															<input type="text" class="form-control mb-2" placeholder="웹진제목을 입력하세요." required="required">
														</div>
														<!--/Input group-->
													</div>

													<div class="d-flex flex-wrap gap-5 mb-5">
														<!--Input group-->
														<div class="fv-row w-100 flex-md-root">
															<label class="required form-label">웹진설명</label>
															<textarea name="notes" class="form-control" rows="14" placeholder="내용을 입력하세요." required="required"></textarea>
														</div>
														<!--/Input group-->
													</div>

													<div class="d-flex flex-wrap gap-5 mb-5">
														<!--Input group-->
														<div class="fv-row w-100 flex-md-root">
															<label class="form-label">웹진첨부</label>
															<input type="file" class="form-control mb-2" placeholder="첨부파일을 선택하세요.">
														</div>
														<!--/Input group-->
													</div>
												</div>

												<div class="row mt-4 text-end">
													<div class="col-5 text-start">
														<a href="webzine_list.php" class="btn btn-primary">목록</a>
													</div>
													<div class="col-7 text-end">
														<a href="webzine_list.php" class="btn btn-secondary">취소</a>
														<button type="submit" class="btn btn-primary">글작성</button>
													</div>
												</div>
											</form>
											<!-- /Write -->

										</div>
									</div>
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