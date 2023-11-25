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
				<div class="d-flex flex-center flex-column flex-lg-row-fluid">
					<div class="w-lg-500px p-10">
						<form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" id="sign_in_form" action="#">
							<div class="text-center mb-11">
								<h1 class="text-dark fw-bolder mb-3">
									웹진통합 관리시스템 로그인
								</h1>
								<div class="text-gray-500 fw-semibold fs-6">
									아이디와 비밀번호를 입력하세요.
								</div>
							</div>

							<div class="fv-row mb-4 fv-plugins-icon-container">
								<input type="text" placeholder="아이디" name="userid" autocomplete="off" class="form-control ">
							</div>

							<div class="fv-row mb-6 fv-plugins-icon-container">
								<input type="password" placeholder="비밀번호" name="password" autocomplete="off" class="form-control">
							</div>

							<div class="d-grid mb-10">
								<button type="submit" class="btn btn-lg btn-primary">
									<span class="indicator-label"><strong>로그인</strong></span>
								</button>
							</div>
							<div class="text-gray-500 text-center fw-semibold fs-6">
								고객만족센터 : <strong class="text-primary">070-1234-5678</strong>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!--//Page-->
		</div>
		<!--//App-->
	</body>
	<!--//Body-->
</html>