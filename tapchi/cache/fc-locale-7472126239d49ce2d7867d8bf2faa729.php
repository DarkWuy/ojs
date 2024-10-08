<?php return array (
  'plugins.importexport.datacite.displayName' => 'Plugin xuất/đăng ký DataCite',
  'plugins.importexport.datacite.description' => 'Xuất hoặc đăng ký số, bài viết, bản in và siêu dữ liệu tập tin bổ sung ở định dạng DataCite.',
  'plugins.importexport.datacite.settings.description' => 'Vui lòng định cấu hình plugin xuất DataCite trước khi sử dụng lần đầu tiên.',
  'plugins.importexport.datacite.intro' => '
		Nếu bạn muốn đăng ký DOIs với DataCite, vui lòng liên hệ với Quản lý thông qua <a href="http://datacite.org/contact" target="_blank">Trang chủ DataCite
	</a>, người sẽ giới thiệu bạn đến thành viên Datacite tại khu vực của bạn> Một khi bạn có
		thiết lập mối quan hệ với tổ chức thành viên, bạn sẽ được cung cấp
		với quyền truy cập vào dịch vụ DataCite để tạo các số nhận dạng liên tục (DOIs)
		và đăng ký siêu dữ liệu liên quan. Nếu bạn không có username và mật khẩu của riêng bạn
		bạn vẫn có thể xuất thành định dạng DataCite XML nhưng bạn
		không thể đăng ký DOI của bạn với DataCite từ trong OJS.
		Xin lưu ý rằng mật khẩu sẽ được lưu dưới dạng văn bản thuần, tức là không được mã hóa, do
		các yêu cầu dịch vụ đăng ký DataCite.
	',
  'plugins.importexport.datacite.settings.form.username' => 'Username (ký hiệu)',
  'plugins.importexport.datacite.settings.form.usernameRequired' => 'Vui lòng nhập username(ký hiệu) bạn nhận được từ DataCite. Tên người dùng có thể không chứa dấu hai chấm.',
  'plugins.importexport.datacite.settings.form.automaticRegistration.description' => 'OJS sẽ tự động gửi DOI vào DataCite. Xin lưu ý rằng việc này có thể mất một khoảng thời gian ngắn sau khi xuất bản để xử lý (ví dụ: tùy thuộc vào cấu hình cronjob của bạn). Bạn có thể kiểm tra tất cả các DOI chưa đăng ký.',
  'plugins.importexport.datacite.settings.form.testMode.description' => 'Sử dụng tiền tố kiểm tra DataCite để đăng ký DOI. Xin đừng quên loại bỏ tùy chọn này khi xuất bản.',
  'plugins.importexport.datacite.senderTask.name' => 'Nhiệm vụ đăng ký tự động DataCite',
  'plugins.importexport.datacite.cliUsage' => 'Usage: 
{$scriptName} {$pluginName} xuất [outputFileName] [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
{$scriptName} {$pluginName} đăng ký [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
',
);