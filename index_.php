<!DOCTYPE html>
<html lang="ko">
	<head>
		<?php
			include_once("template_common.php");
		?>
	</head>

	<!--Body-->
	<body id="kt_app_body" data-kt-app-layout="light-header" data-kt-app-header-fixed="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<div class="container">
			<h5 class="mt-4">
				작업상태 (<strong class="text-danger">작업완료 ●</strong>, <strong class="text-dark">작업중 ▲</strong> )
			</h5>
			<div class="row my-4">
				<div class="col-md-6 col-lg-4 mb-4">
					<ul class="fs-md-6">
						<li><a href="webzine_list.php"><strong class="text-dark">▲</strong> 메인</a></li>
						<li><a href="webzine_detail.php"><strong class="text-dark">▲</strong> 상세</a></li>
						<li><a href="webzine_write.php"><strong class="text-dark">▲</strong> 등록</a></li>
						<li><a href="sign-in.php"><strong class="text-dark">▲</strong> 로그인</a></li>
					</ul>
				</div>
			</div>
		</div>

	</body>
</html>