# Quan-Ly-Minh-Chung
Kiểm định giáo dục
<!-- Mục đích -->
Quản lý minh chứng và viết báo cáo tự đánh giá chất lượng giáo dục là một trong những hoạt động đảm bảo chất lượng một cơ sở đào tạo. 
Quá trình quản lý lưu trữ minh chứng và viết báo cáo tự đánh giá nhằm mục tiêu lưu trữ và quản lý minh chứng và các báo cáo của cơ sở đào tạo từ đó quyết định công nhận 
về mức độ tiến bộ và đảm bảo chất lượng giáo dục tại các trường cao đẳng, đại học… 
***Xây dựng trang web Quản lý minh chứng và viết báo cáo tự đánh giá với mục đích làm cho việc lưu trữ minh chứng và các báo cáo tự đánh giá của các đơn vị trở nên 
dễ dàng, hiệu quả và an toàn hơn. Giúp cho người dùng tiếp cận dần với điều đó và giúp cho ban lãnh đạo nhà trường và các cán bộ giảng viên giáo viên dễ dàng hơn trong 
công việc quản lý minh chứng và các báo cáo đã đánh giá đơn vị của mình.
Phầm mềm được thực hiện từ giai đoạn phân tích thiết kế hệ thống của website gồm: đặc tả yêu cầu, phân tích thiết kế các use case, đặc tả cơ sở dữ liệu… 
đến giai đoạn viết chương trình, sửa lỗi, đóng gói,…***

Thực hiện:
- Giao diện: HTML5, CSS,(BOOSTRAP 4, JQUERY), ngôn ngữ lập trình JAVASCRIPT, PHP
- Cấu Trúc: MVC - Laravel
- Database: MySQL

Các Bước Cài Đặt Hệ Thống:

1.1. Phần cứng (tối thiểu): 

  CPU Duo Core, RAM 1Gb, dung lượng ổ đĩa trống tổi thiểu là 1Gb
  
1.2. Phần mềm:
-	Hệ điều hành Windows XP/Vista/win7/win8/win10.
-	Trình duyệt: Firefox 2.0 trở lên , IE 7.0 trở lên, Google Chrome 19.0.1049.3 trở lên.
-	Xampp bản 7.x
-	Larvel 5.7
-	Php 7.x

2.	Các bước thực hiện

2.1.	 Cài đặt và khởi động Xampp

-	Có thể download phần mềm này với đầy đủ phiên bản trên trang: http://www.oldapps.com/xampp.php 
-	Khởi động Xampp

2.2.	Copy file code vào thư mục gốc của máy chủ

Giải nén file nhom11.rar, copy thư mục thu được vào thư mục htdocs của xampp.

2.3.	 Tạo cơ sở dữ liệu với phpMyadmin

-	Bật trình duyệt gõ địa chỉ: localhost/phpmyadmin  
-	Tạo database với tên nhom11
-	Mở file nhom11 trong htdocs
-	Mở cmd gõ các lệnh sau:
  + php artisan migrate
  + php artisan db:seed
  + php artisan server

Chú ý: Tên CSDL mặc định là nhom11, tài khoản đăng nhập CSDL mặc định là “root” và không có passwword. Nếu có thay đổi về tên CSDL, tên đăng nhập…có thể sửa trong file .env.

2.4.	 Copy file code vào thư mục gốc của máy chủ

Giải nén file qlmc.rar, copy thư mục thu được vào thư mục htdocs của xampp.

2.5.	 Thao tác trang web 
