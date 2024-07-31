<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    private string $fodel = "admin.";
    public function index()
    {

        // Truy vấn lấy tổng số đơn hàng theo tháng và năm  
        $monthlyStats = Order::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(id) as total_orders, SUM(totak) as total_amount')
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get();

        // dd($monthlyStats);
        return view($this->fodel . __FUNCTION__, compact('monthlyStats'));
    }


    // public function monthlyOrderStatistics()
    // {


    //     // Trả về view với dữ liệu thống kê hàng tháng  
    //     return view('monthly_statistics', compact('monthlyData'));
    // }
}
