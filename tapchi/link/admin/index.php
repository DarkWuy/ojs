<!DOCTYPE html>
<html lang="vi-VN" xml:lang="vi-VN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			Giới thiệu về Tạp chí
			| Tạp chí VLUTE
		</title>
		<link rel="stylesheet" href="font.css">


		<meta name="generator" content="Hệ thống tạp chí mở 3.3.0.14">
		<link rel="stylesheet"
			href="http://tapchikhoahoc.vlute.edu.vn/index.php/tc/$$$call$$$/page/page/css?name=stylesheet"
			type="text/css" />
		<link rel="stylesheet"
			href="http://tapchikhoahoc.vlute.edu.vn/lib/pkp/styles/fontawesome/fontawesome.css?v=3.3.0.14"
			type="text/css" />
		<link rel="stylesheet"
			href="http://tapchikhoahoc.vlute.edu.vn\plugins/themes/material\vendor/fontawesome/css/all.min.css?v=3.3.0.14"
			type="text/css" />
		<link rel="stylesheet"
			href="http://tapchikhoahoc.vlute.edu.vn\plugins/themes/material\vendor/mdb/css/mdb.min.css?v=3.3.0.14"
			type="text/css" />
		<link rel="stylesheet"
			href="http://tapchikhoahoc.vlute.edu.vn\plugins/themes/material\vendor/aos/aos.css?v=3.3.0.14"
			type="text/css" />
		<link rel="stylesheet"
			href="http://tapchikhoahoc.vlute.edu.vn\plugins/themes/material\vendor/swiper/swiper-bundle.min.css?v=3.3.0.14"
			type="text/css" />
		<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js"
			crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/dataTables.foundation.min.css">
		<link rel="stylesheet" href="css/jquery.dataTables.min.css">

		<link rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet"
			href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
		<link rel="stylesheet"
			href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css">
		<link rel="stylesheet"
			href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css">
		<link rel="stylesheet"
			href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css">
		<link rel="stylesheet"
			href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	</head>

	<body class="pkp_page_about pkp_op_index" dir="ltr">


		<!-- ======= Header ======= -->
		<?php include '../include/header.html' ?>

		<main class="" role="main">
			<a id="pkp_content_main"></a>


			<section class="hero-section inner-page">
				<div class="wave">

					<svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1"
						xmlns="http://www.w3.org/2000/svg"
						xmlns:xlink="http://www.w3.org/1999/xlink">
						<g id="Page-1" stroke="none" stroke-width="1" fill="none"
							fill-rule="evenodd">
							<g id="Apple-TV" transform="translate(0.000000, -402.000000)"
								fill="#FFFFFF">
								<path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974
									458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362
									1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417
									1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z"
									id="Path"></path>
							</g>
						</g>
					</svg>

				</div>

				<div class="container">
					<div class="row align-items-center">
						<div class="col-12">
							<div class="row justify-content-center">
								<div class="col-md-10 text-center hero-text">
									<h1 data-aos="fade-up" data-aos-delay="">Quản Lý Đường Liên Kết</h1>
									<p class="mb-5" data-aos="fade-up" data-aos-delay="100"></p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>

			<div class="page page_about container">
				<nav class="cmp_breadcrumbs" role="navigation" aria-label="Bạn đang ở
					đây:">
					<ol>
						<li>
							<a href="http://tapchikhoahoc.vlute.edu.vn/index.php/tc/index">
								Trang chủ
							</a>
							<span class="separator">/</span>
						</li>
						<li class="current">
							<span aria-current="page">
								Quản lý đường liên kết
							</span>
						</li>
					</ol>
				</nav>

			</div><!-- .page -->

			<div class="html-preloader bg-light">
				<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;"
					role="status">
					<span class="visually-hidden">Loading...</span>
				</div>
			</div>


			<div id="layoutSidenav_content">
				<main>
					<div class="container-fluid px-4">
						<div class="card mb-4">
							<div class="card-header" style="z-index: 1;">
								<button id="addbutton" type="button" class="btn btn-outline-success"> <i
										class="fa-solid fa-plus"></i> Thêm liên kết mới</button>
								<!-- <button id="uploadbutton" type="button" class="btn btn-success"> <i
										class="fa-thin fa-file-plus fa-bounce"></i> Tải tệp lên</button> -->
							</div>
							<div class="card-body">
								<table id="example" class="display" style="width:100%">
									<thead>
										<tr>
											<th>ID</th>
											<th>Tên tác giả</th>
											<th>Đơn vị</th>
											<th>Thể loại</th>
											<th>Tiêu đề</th>
											<th>Tóm tắt</th>
											<th>Năm XB</th>
											<th>Ảnh</th>
											<th>Đường dẫn</th>
											<th>Sửa</th>
											<th>Xóa</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>ID</th>
											<th>Tên tác giả</th>
											<th>Đơn vị</th>
											<th>Thể loại</th>
											<th>Tiêu đề</th>
											<th>Tóm tắt</th>
											<th>Năm XB</th>
											<th>Ảnh</th>
											<th>Đường dẫn</th>
											<th>Sửa</th>
											<th>Xóa</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</main>
					</div>
				</div>
				<div>
				</div>


				<script src="js/vendor/jquery-1.12.4.min.js"></script>


				<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
				<script>
			$(document).ready(function () {
				var table = $('#example').DataTable({
					scrollX: true,
					scrollCollapse: true,
					"ajax": "data.php",
					"columns": [
						{ "data": "id" },
						{ "data": "tentg" },
						{ "data": "donvi" },
						{ "data": "theloai" },
						{ "data": "tieude" },
						{ "data": "tomtat" },
						{ "data": "ngayxuatban" },
						{ "data": "anh" },
						{ "data": "duongdan" },
						{
							"data": null,
							"render": function (data, type, full, meta) {
								return '<button type="button" class="btn "><i class="fa-duotone fa-pen-to-square"></i> </button>';
							}
						},
						{
							"data": null,
							"render": function (data, type, full, meta) {
								return '<button type="button" class="btn "><i class="fa-duotone fa-trash-can-list"></i>';
							}
						}
					], "columnDefs": [
						{
							"targets": 1,
							"render": function (data, type, row) {
								if (type === 'display' && data.length > 30) {
									return '<span original-value="' + data + '">' + data.substr(0, 30) + '...' + '</span>';
								}
								return '<span original-value="' + data + '">' + data + '</span>';
							}
						},
						{
							"targets": 2,
							"render": function (data, type, row) {
								if (type === 'display' && data.length > 30) {
									return '<span original-value="' + data + '">' + data.substr(0, 30) + '...' + '</span>';
								}
								return '<span original-value="' + data + '">' + data + '</span>';
							}
						},
						{
							"targets": 3,
							"render": function (data, type, row) {
								if (type === 'display' && data.length > 30) {
									return '<span original-value="' + data + '">' + data.substr(0, 30) + '...' + '</span>';
								}
								return '<span original-value="' + data + '">' + data + '</span>';
							}
						},
						{
							"targets": 4,
							"render": function (data, type, row) {
								if (type === 'display' && data.length > 40) {
									return '<span original-value="' + data + '">' + data.substr(0, 40) + '...' + '</span>';
								}
								return '<span original-value="' + data + '">' + data + '</span>';
							}
						},
						{
							"targets": 5,
							"render": function (data, type, row) {
								if (type === 'display' && data.length > 20) {
									return '<span original-value="' + data + '">' + data.substr(0, 20) + '...' + '</span>';
								}
								return '<span original-value="' + data + '">' + data + '</span>';
							}
						},
						{
							"targets": 6,
							"render": function (data, type, row) {
								if (type === 'display' && data.length > 4) {
									return '<span original-value="' + data + '">' + data.substr(0, 4) + '</span>';
								}
								return '<span original-value="' + data + '">' + data + '</span>';
							}
						},
						{
							"targets": 7,
							"render": function (data, type, row) {
								if (type === 'display' && data.length > 10) {
									return '<span original-value="' + data + '">' + data.substr(0, 10) + '</span>';
								}
								return '<span original-value="' + data + '">' + data + '</span>';
							}
						},
						{
							"targets": 8,
							"render": function (data, type, row) {
								if (type === 'display' && data.length > 10) {
									return '<span original-value="' + data + '">' + data.substr(0, 10) + '...' + '</span>';
								}
								return '<span original-value="' + data + '">' + data + '</span>';
							}
						},
					]
				});
			});

		</script>
				<!-- add button -->
				<div class="modal fade" id="addmodal" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Thêm liên kết mới</h5>
								<button type="button" class="close" data-dismiss="modal"
									aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<form action="php.php" method="POST" enctype="multipart/form-data">
								<div class="modal-body">
									<div class="form-group">
										<label> Tên tác giả </label>
										<input type="text" name="tentg" id="tentg" class="form-control"
											placeholder="Vui lòng nhập tên" value="" >
									</div>
									<div class="form-group">
										<label> Đơn vị </label>
										<input type="text" name="dvi" id="dvi" class="form-control"
											placeholder="Nhập đơn vị"
											value="">
									</div>

									<div class="form-group">
										<label> Thể loại </label>
										<input type="text" name="theloai" id="theloai" class="form-control"
											placeholder="Nhập thể loại" value="">
									</div>
									<div class="form-group">
										<label> Tiêu đề </label>
										<input type="text" name="tieude" id="tieude" class="form-control"
											placeholder="Tiêu đề bài viết" value="">
									</div>
									<div class="form-group">
										<label> Tóm tắt </label>
										<textarea name="tomtat" id="tomtat" class="form-control" rows="5"
											style="
											width: 100%;
											display: block;
											resize: vertical;
											overflow: auto;
											"> </textarea>
									</div>
									<div class="form-group">
										<label> Ngày xuất bản </label>
										<input type="date" name="ngayxb" id="ngayxb"
											class="form-control"
											placeholder="Ngày xuất bản" >
									</div>
									<div class="form-group">
										<label> Hình ảnh </label>
										<img src="" alt="" id="preview-image" style="
											max-width: 30%;
											max-height: 30%;
											display: block;
											padding: 5px;
											margin: auto;
											">
										<input type="file" name="hinhanh" id="hinhanh" class="form-control"
											onchange="previewImage(this)" placeholder="Chọn hình ảnh">
									</div>
									<div class="form-group">
										<label> Đường dẫn </label>
										<input type="url" name="duongdan" id="duongdan" class="form-control"
											placeholder="Điền đường dẫn bài viết"
											value="">
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
									<button type="submit" name="adddata" class="btn btn-primary">Lưu</button>
								</div>
							</form>

						</div>
					</div>
				</div>
				<script>
			function previewImage(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#preview-image').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}
		</script>
				<!-- EDIT POP UP FORM (Bootstrap MODAL) -->
				<div class="modal fade" id="editmodal" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog" role="document" enctype="multipart/form-data">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel"> Chỉnh sửa liên kết
								</h5>
								<button type="button" class="close" data-dismiss="modal"
									aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

							<form action="php.php" method="POST" enctype="multipart/form-data">

								<div class="modal-body">

									<input type="hidden" name="update_id" id="update_id">

									<div class="form-group">
										<label> Tên tác giả </label>
										<input type="text" name="edtentg" id="edtentg" class="form-control"
											placeholder="Vui lòng nhập tên">
									</div>
									<div class="form-group">
										<label> Đơn vị </label>
										<input type="text" name="eddvi" id="eddvi" class="form-control"
											placeholder="Nhập đơn vị" required>
									</div>

									<div class="form-group">
										<label> Thể loại </label>
										<input type="text" name="edtheloai" id="edtheloai"
											class="form-control"
											placeholder="Nhập thể loại">
									</div>
									<div class="form-group">
										<label> Tiêu đề </label>
										<input type="text" name="edtieude" id="edtieude" class="form-control"
											placeholder="Tiêu đề bài viết">
									</div>
									<div class="form-group">
										<label> Tóm tắt </label>
										<textarea name="edtomtat" id="edtomtat" class="form-control" rows="5"
											style="
											width: 100%;
											display: block;
											resize: vertical;
											overflow: auto;
											"> </textarea>
									</div>
									<div class="form-group">
										<label> Ngày xuất bản </label>
										<input type="date" name="edngayxb" id="edngayxb"
											class="form-control"
											placeholder="Ngày xuất bản">
									</div>
									<input type="hidden" name="edhinhanh_old" id="edhinhanh_old">
									<div class="form-group">
										<label> Hình ảnh </label>
										<input type="file" name="edhinhanh" id="edhinhanh"
											class="form-control"
											placeholder="Chọn hình ảnh">
									</div>
									<div class="form-group">
										<label> Đường dẫn </label>
										<input type="url" name="edduongdan" id="edduongdan"
											class="form-control"
											placeholder="Điền đường dẫn bài viết">
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
									<button type="submit" name="updatedata" class="btn btn-primary">Xong</button>
								</div>
							</form>

						</div>
					</div>
				</div>
				<!-- delete -->
				<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel"> Xóa liên kết </h5>
								<button type="button" class="close" data-dismiss="modal"
									aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">
									Không </button>
								<button type="button" id="deleteConfirm" class="btn btn-primary"> Có!
									Tôi muốn xóa </button>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="modal fade" id="uploadmodal" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Vui lòng nhập file</h5>
								<button type="button" class="close" data-dismiss="modal"
									aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="process_excel.php" method="post"
									enctype="multipart/form-data">
									<input type="file" name="excel_file" />
									<input type="submit" name="submit" class="btn btn-success"
										value="Import" />
								</form>
							</div>
							<div class="modal-footer">
								<h5 class="modal-title" id="exampleModalLabel"><i>Vui lòng nhập file
										có định dạng giống
										như bên đưới</i></h5>

							</div>
						</div>

					</div> -->
					<style>
				.table-wrapper {
					display: flex;
					justify-content: center;
					align-items: center;
					height: 100vh;
				}

				table {
					background-color: #fff;
					border-collapse: collapse;
					width: 80%;
					max-width: 800px;
					box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
					border: 1px solid #ccc;
				}

				th,
				td {
					padding: 10px;
					text-align: left;
					border-bottom: 1px solid #ccc;
				}

				th {
					background-color: #eee;
					font-weight: bold;
					text-align: center;
				}
			</style>
					<!-- <div class="table-wrapper">
						<table>
							<thead>
								<tr>
									<th>Tên tác giả</th>
									<th>Đơn vị</th>
									<th>Thể loại</th>
									<th>Tiêu đề</th>
									<th>Tóm tắt</th>
									<th>Ngày xuất bản</th>
									<th>Đường dẫn</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Nguyen Van A</td>
									<td>ABC</td>
									<td>Khoa học tự nhiên</td>
									<td>Tiêu đề bài báo 1</td>
									<td>Tóm tắt bài báo 1</td>
									<td>01/01/2023</td>
									<td>https://example.com/bai-bao-1.pdf</td>
								</tr>
								<tr>
									<td>Tran Thi B</td>
									<td>XYZ</td>
									<td>Kinh tế</td>
									<td>Tiêu đề bài báo 2</td>
									<td>Tóm tắt bài báo 2</td>
									<td>02/01/2023</td>
									<td>https://example.com/bai-bao-2.pdf</td>
								</tr>
							</tbody>
						</table>
					</div> -->


				</div>

			</div>

			<script
				src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script
				src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
			<script
				src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
			<script
				src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
			<script
				src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
			<script>
			$(document).ready(function () {

				$('#addbutton').on('click', function () {

					$('#addmodal').modal('show');

				});
			});
		</script>
			<script>
			$(document).ready(function () {

				$('#uploadbutton').on('click', function () {

					$('#uploadmodal').modal('show');

				});
			});
		</script>
			<script>
			$(document).ready(function () {
				var isToastShown = false;
				$('#example').on('click', 'tbody td:nth-child(11)', function () {

					var id = $(this).closest('tr').find('td:eq(0)').text();
					var tr = $(this).closest('tr');
					$('#deletemodal').modal('show');
					$('#deleteConfirm').click(function () {
						$.ajax({
							url: 'delete.php',
							type: 'POST',
							data: { delete_id: id },
							success: function (response) {
								if (response == 'success') {
									$('#deletemodal').modal('hide');
									tr.remove();
									if (!isToastShown) {
										toastr.success('Xóa thành công');
										isToastShown = true;
									}
								}
							}
						});

					});
				});
			});
		</script>
			<script>
			$('#example').on('click', 'tbody td:nth-child(10)', function () {
				$('#editmodal').modal('show');
				$tr = $(this).closest('tr');
				var data = $tr.children("td").map(function () {
					return $(this).text();
				}).get();
				var originalValue = [];
				$tr.children("td").find('span').each(function () {
					originalValue.push($(this).attr('original-value'));
				});
				console.log(originalValue)
				$('#update_id').val(data[0]);
				$('#edtentg').val(originalValue[0]);
				$('#eddvi').val(originalValue[1]);
				$('#edtheloai').val(originalValue[2]);
				$('#edtieude').val(originalValue[3]);
				$('#edtomtat').val(originalValue[4]);
				$('#edngayxb').val(originalValue[5]);
				$('#edhinhanh_old').val(originalValue[6]);
				$('#edduongdan').val(originalValue[7]);
			});

		</script>
		</main><!-- _pkp_structure_main -->
		<!-- ======= Footer ======= -->
		<?php include '../include/footer.html'?>
		<script
			src="http://tapchikhoahoc.vlute.edu.vn/lib/pkp/lib/vendor/components/jqueryui/jquery-ui.min.js?v=3.3.0.14"
			type="text/javascript"></script>
		<script
			src="http://tapchikhoahoc.vlute.edu.vn\plugins/themes/material\vendor/mdb/js/mdb.min.js?v=3.3.0.14"
			type="text/javascript"></script>
		<script
			src="http://tapchikhoahoc.vlute.edu.vn\plugins/themes/material\vendor/aos/aos.js?v=3.3.0.14"
			type="text/javascript"></script>
		<script
			src="http://tapchikhoahoc.vlute.edu.vn\plugins/themes/material\vendor/swiper/swiper-bundle.min.js?v=3.3.0.14"
			type="text/javascript"></script>
		<script
			src="http://tapchikhoahoc.vlute.edu.vn\plugins/themes/material\js/main.js?v=3.3.0.14"
			type="text/javascript"></script>
	</body>
</html>
