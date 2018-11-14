<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class CartController extends Controller
{
    // Hàm này ý nghĩa là show ra tất cả lịch sử order của user hen
    public function index()
    {
        // e nghi ngờ là do chị chưa logn vào 
        
        // Get all cart/ order của user
        $userId = auth()->user()->id;
        $order = new Order();
        $data = $order->where('user_id', $userId)->get();
        
        // hàm này nó cast thành array
        // 1 là e truyền qua view bằng hàm compact 
        // 2 là e viết như này
        // như này
        return view('pages.users.order.index', [
            'orders' => $data
        ]);
    }

    // Chị tưởng tượng là vd làm crud thì có read, create, edit, delete
    // thì cái hàm này nó kiểu như chị click vào 1 cái orrder và xem chi tiết của nó
    // Truyền vào là 1 cái id của order
    // Id lấy ở đâu thì do hàm phía trên nó list ra hết orrder rồi, click vào là lấy đc thôi hen
    public function show($id)
    {
        $order = new Order();

        // $userId = auth()->id(); cai nay la lay id cua user login hien tại
        // Tức là điều kiện là order có id = cái chị truyền lên, và thuộc user đang login hiện tại
        $data = $order->where('id', $id)->where('user_id', 1)
            ->first();

        // $listProductOfOrder = $data->products();

        // dd($data, $listProductOfOrder);
    }

    public function addCart($product_id)
    {
        if (Request::isMethod('post')) {
           $this->
            $product_id = Request::get('product_id');
            $product = Product::find($product_id);
            $add = [
                'id' => $product_id,
                'name' => $product->name,
                'price' => $product->price,
                'qty' => '1'
            ];   
        }       
    }
}
