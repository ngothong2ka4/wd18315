<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    function queryBuilder(){
        //1 Lấy danh sách toàn bộ user
        // $resultQuery = DB::table('users')->get();
        // dd($resultQuery);

        // 2 Lấy thông tin user có id = 4 
        // $resultQuery = DB::table('users')
        //                 ->find('4');
        // dd($resultQuery);

        // 3 Lấy thuộc tính 'name' của user có id = 16
        // $resultQuery = DB::table('users')
        //                 ->where('id',16)->value('name');
        // dd($resultQuery);

        // 4 Lấy danh sách idUser của phòng ban 'Ban giám hiệu'
            // $idPhongBan = DB::table('phongban')
            //                     ->where('ten_donvi', 'like', 'Ban giám hiệu');

            // $resultQuery = DB::table('users')
            //         ->where('phongban_id', $idPhongBan)->pluck('id');
            // dd($resultQuery);

        //     5. Tìm user có độ tuổi lớn nhất trong công ty 
            // $resultQuery = DB::table('users')
            //                 ->where('tuoi', DB::table('users')->max('tuoi'))->get();
            // dd($resultQuery);


        //     6. Tìm user có độ tuổi nhỏ nhất trong công ty
                // $resultQuery = DB::table('users')
                //                 ->where('tuoi', DB::table('users')->min('tuoi'))->get();
                // dd($resultQuery->toArray());


        //     7. Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user 
                //  $resultQuery = DB::table('users')
                //                 ->where('phongban_id', 
                //                     DB::table('phongban')
                //                     ->where('ten_donvi', 'like', 'Ban giám hiệu')
                //                     ->value('id'))
                //                 ->count();
                // dd($resultQuery);


        //     8. Lấy danh sách tuổi các user 
                // $resultQuery = DB::table('users')
                //                 ->distinct()
                //                 ->pluck('tuoi');
                // dd($resultQuery);


        //     9. Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
                // $resultQuery = DB::table('users')
                //                 ->where('name','like','%Khải')
                //                 ->orWhere('name','like','%Thanh')
                //                 ->get();
                // dd($resultQuery);


        //     10. Lấy danh sách user ở phòng ban 'Ban đào tạo'
                // $resultQuery = DB::table('users')
                //                     ->where('phongban_id', 
                //                             DB::table('phongban')
                //                             ->where('ten_donvi','like','Ban đào tạo')
                //                             ->value('id'))
                //                     ->select('id','name','email')        
                //                     ->get();
                //     dd($resultQuery);


        //     11. Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
                // $resultQuery = DB::table('users')
                //                 ->select('id','name','email','tuoi')    
                //                 ->where('tuoi','>=','30')
                //                 ->orderBy('tuoi','asc')
                //                 ->get();
                // dd($resultQuery);


        //     12. Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
                // $resultQuery = DB::table('users')
                //                 ->select('id','name','email','tuoi')
                //                 ->orderBy('tuoi','desc')
                //                 ->offset(5)
                //                 ->limit(10)
                //                 ->get();
                // dd($resultQuery);


        //     13. Thêm một user mới vào công ty
                // $data = [
                //     'name'          => 'Ngô Trí Thông',
                //     'email'         => 'thongnt@fpt.edu.vn',
                //     'phongban_id'   => '1',
                //     'songaynghi'    => '0',
                //     'tuoi'          => '19',
                //     'created_at'    => Carbon::now(),
                //     'updated_at'    => Carbon::now(),
                // ];
                //  DB::table('users')->insert($data);


        //     14. Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo' 
                


        //     15. Xóa user nghỉ quá 15 ngày


    }

    
}
