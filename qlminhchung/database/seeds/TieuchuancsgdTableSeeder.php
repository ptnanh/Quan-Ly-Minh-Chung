<?php

use Illuminate\Database\Seeder;

class TieuchuancsgdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $results = DB::table('tieuchuancsgds')->insert([
        	['tentieuchuan'=>'Tiêu chuẩn 1','tencap'=>'CSGD','noidung'=>'Tầm nhìn, sứ mạng và văn hóa'],
        	['tentieuchuan'=>'Tiêu chuẩn 2','tencap'=>'CSGD','noidung'=>'Quản trị'],
        	['tentieuchuan'=>'Tiêu chuẩn 3','tencap'=>'CSGD','noidung'=>'Lãnh đạo và quản lý'],
        	['tentieuchuan'=>'Tiêu chuẩn 4','tencap'=>'CSGD','noidung'=>'Quản trị chiến lược'],
        	['tentieuchuan'=>'Tiêu chuẩn 5','tencap'=>'CSGD','noidung'=>'Các chính sách về đào tạo, nghiên cứu khoa học và phục vụ cộng đồng'],
        	['tentieuchuan'=>'Tiêu chuẩn 6','tencap'=>'CSGD','noidung'=>'Quản lý nguồn nhân lực'],
        	['tentieuchuan'=>'Tiêu chuẩn 7','tencap'=>'CSGD','noidung'=>'Quản lý tài chính và cơ sở vật chất'],
        	['tentieuchuan'=>'Tiêu chuẩn 8','tencap'=>'CSGD','noidung'=>'Các mạng lưới và quan hệ đối ngoại'],
        	['tentieuchuan'=>'Tiêu chuẩn 9','tencap'=>'CSGD','noidung'=>'Hệ thống đảm bảo chất lượng bên trong'],
        	['tentieuchuan'=>'Tiêu chuẩn 10','tencap'=>'CSGD','noidung'=>'Tự đánh giá và đánh giá ngoài'],
        	['tentieuchuan'=>'Tiêu chuẩn 11','tencap'=>'CSGD','noidung'=>'Hệ thống thông tin đảm bảo chất lượng bên trong'],
        	['tentieuchuan'=>'Tiêu chuẩn 12','tencap'=>'CSGD','noidung'=>'Nâng cao chất lượng'],
        	['tentieuchuan'=>'Tiêu chuẩn 13','tencap'=>'CSGD','noidung'=>'Tuyển sinh và nhập học'],
        	['tentieuchuan'=>'Tiêu chuẩn 14','tencap'=>'CSGD','noidung'=>'Thiết kế và rà soát chương trình dạy học'],
        	['tentieuchuan'=>'Tiêu chuẩn 15','tencap'=>'CSGD','noidung'=>'Giảng dạy và học tập'],
        	['tentieuchuan'=>'Tiêu chuẩn 16','tencap'=>'CSGD','noidung'=>'Đánh giá người học'],
        	['tentieuchuan'=>'Tiêu chuẩn 17','tencap'=>'CSGD','noidung'=>'Các hoạt động phục vụ và hỗ trợ người học'],
        	['tentieuchuan'=>'Tiêu chuẩn 18','tencap'=>'CSGD','noidung'=>'Quản lý nghiên cứu khoa học'],
        	['tentieuchuan'=>'Tiêu chuẩn 19','tencap'=>'CSGD','noidung'=>'Quản lý tài sản trí tuệ'],
        	['tentieuchuan'=>'Tiêu chuẩn 20','tencap'=>'CSGD','noidung'=>'Hợp tác và đối tác nghiên cứu khoa học'],
        	['tentieuchuan'=>'Tiêu chuẩn 21','tencap'=>'CSGD','noidung'=>'Kết nối và phục vụ cộng đồng'],
        	['tentieuchuan'=>'Tiêu chuẩn 22','tencap'=>'CSGD','noidung'=>'Kết quả đào tạo'],
        	['tentieuchuan'=>'Tiêu chuẩn 23','tencap'=>'CSGD','noidung'=>'Kết quả nghiên cứu khoa học'],
        	['tentieuchuan'=>'Tiêu chuẩn 24','tencap'=>'CSGD','noidung'=>'Kết quả phục vụ cộng đồng'],
        	['tentieuchuan'=>'Tiêu chuẩn 25','tencap'=>'CSGD','noidung'=>'Kết quả tài chính và thị trường'],
        ]);
    }
}
