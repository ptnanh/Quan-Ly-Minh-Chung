<?php

use Illuminate\Database\Seeder;

class TieuchuanctdtTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $results = DB::table('tieuchuanctdts')->insert([
        	['tentieuchuan'=>'Tiêu chuẩn 1','tencap'=>'CTDT','noidung'=>'Mục tiêu và chuẩn đầu ra của chương trình đào tạo'],
        	['tentieuchuan'=>'Tiêu chuẩn 2','tencap'=>'CTDT','noidung'=>'Bản mô tả chương trình đào tạo'],
        	['tentieuchuan'=>'Tiêu chuẩn 3','tencap'=>'CTDT','noidung'=>'Cấu trúc và nội dung chương trình dạy học'],
        	['tentieuchuan'=>'Tiêu chuẩn 4','tencap'=>'CTDT','noidung'=>'Phương pháp tiếp cận trong dạy và học'],
        	['tentieuchuan'=>'Tiêu chuẩn 5','tencap'=>'CTDT','noidung'=>'Đánh giá kết quả học tập của người học'],
        	['tentieuchuan'=>'Tiêu chuẩn 6','tencap'=>'CTDT','noidung'=>'Đội ngũ giảng viên, nghiên cứu viên'],
        	['tentieuchuan'=>'Tiêu chuẩn 7','tencap'=>'CTDT','noidung'=>'Đội ngũ nhân viên'],
        	['tentieuchuan'=>'Tiêu chuẩn 8','tencap'=>'CTDT','noidung'=>'Người học và hoạt động hỗ trợ người học'],
        	['tentieuchuan'=>'Tiêu chuẩn 9','tencap'=>'CTDT','noidung'=>'Cơ sở vật chất và trang thiết bị'],
        	['tentieuchuan'=>'Tiêu chuẩn 10','tencap'=>'CTDT','noidung'=>'Nâng cao chất lượng'],
        	['tentieuchuan'=>'Tiêu chuẩn 11','tencap'=>'CTDT','noidung'=>'Kết quả đầu ra'],
       ]);
    }
}
