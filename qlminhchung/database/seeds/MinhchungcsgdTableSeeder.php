<?php

use Illuminate\Database\Seeder;

class MinhchungcsgdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('minhchungcsgds')->insert([
        	['tenminhchung'=>'Sứ mạng và mục tiêu của trường đại học', 'noibanhanh'=>'ĐH KHTN', 'ngaybanhanh' => '2020-11-12 00:00:00', 'sohieu' => 'H1-1-01-01','tentieuchuan' => 'Tiêu chuẩn 1', 'tentieuchi'=> 'Tiêu chí 1.1', 'tencap' => 'CSGD', 'noidung' => 'Sứ mạng của trường đại học được xác định phù hợp với chức năng, nhiệm vụ, các nguồn lực và định hướng phát triển của nhà trường; phù hợp và gắn kết với chiến lược phát triển kinh tế - xã hội của địa phương và cả nước.','file' => 'danh-muc-ma-minh-chung-danh-gia.doc'],

        	['tenminhchung'=>'Sứ mạng và mục tiêu của trường đại học', 'noibanhanh'=>'ĐH KHTN', 'ngaybanhanh' => '2020-11-04 00:00:00', 'sohieu' => 'H1-2-01-01','tentieuchuan' => 'Tiêu chuẩn 2', 'tentieuchi'=> 'Tiêu chí 2.1', 'tencap' => 'CSGD', 'noidung' => 'Mục tiêu của trường đại học được xác định phù hợp với mục tiêu đào tạo trình độ đại học quy định tại Luật Giáo dục và sứ mạng đã tuyên bố của nhà trường; được định kỳ rà soát, bổ sung, điều chỉnh và được triển khai thực hiện.','file' => 'danh-muc-ma-minh-chung-danh-gia.doc'],

        	['tenminhchung'=>'Tổ chức và quản lý', 'noibanhanh'=>'ĐH KHTN', 'ngaybanhanh' => '2020-10-23 00:00:00', 'sohieu' => 'H1-1-02-01','tentieuchuan' => 'Tiêu chuẩn 1', 'tentieuchi'=> 'Tiêu chí 1.2', 'tencap' => 'CSGD', 'noidung' => 'Cơ cấu tổ chức của trường đại học được thực hiện theo quy định của Điều lệ trường đại học và được cụ thể hoá trong quy chế về tổ chức và hoạt động của nhà trường.','file' => 'danh-muc-ma-minh-chung-danh-gia.doc'],

        	['tenminhchung'=>'Tổ chức và quản lý', 'noibanhanh'=>'ĐH KHTN', 'ngaybanhanh' => '2020-12-02 00:00:00', 'sohieu' => 'H1-4-02-01','tentieuchuan' => 'Tiêu chuẩn 4', 'tentieuchi'=> 'Tiêu chí 4.2', 'tencap' => 'CSGD', 'noidung' => 'Có hệ thống văn bản để tổ chức, quản lý một cách có hiệu quả các hoạt động của nhà trường.','file' => 'danh-muc-ma-minh-chung-danh-gia.doc'],

        	['tenminhchung'=>'Tổ chức và quản lý', 'noibanhanh'=>'ĐH KHTN', 'ngaybanhanh' => '2020-11-30 00:00:00', 'sohieu' => 'H1-3-02-01','tentieuchuan' => 'Tiêu chuẩn 3', 'tentieuchi'=> 'Tiêu chí 3.2', 'tencap' => 'CSGD', 'noidung' => 'Chức năng, trách nhiệm và quyền hạn của các bộ phận, cán bộ quản lý, giảng viên và nhân viên được phân định rõ ràng','file' => 'danh-muc-ma-minh-chung-danh-gia.doc'],
        ]);
    }
}
