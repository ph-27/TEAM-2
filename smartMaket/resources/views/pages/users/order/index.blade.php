@extends('layouts.master-user')

@section('title', 'Detail Order')

@section('css')

@endsection

@section('content')
<div class="container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
            <th style="width:50%">SẢN PHẨM</th>
            <th style="width:10%">ĐƠN GIÁ</th>
            <th style="width:22%" class="text-center">SỐ LƯỢNG</th>
            <th style="width:22%" class="text-center">THÀNH TIỀN</th>
            <th style="width:10%"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                @foreach ($order->products as $product)
                    <tr>
                        <td data-th="Product">       
                            <div class="row">
                                <div class="col-sm-2 hidden-xs"><img src="public/images/{{ $product->images }}" alt="..." class="img-responsive"/></div>
                                <div class="col-sm-10">
                                    <h4 class="nomargin">{{ $product->name }}</h4>
                                    <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">$1.99</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control text-center" value="1">
                        </td>
                        <td data-th="Subtotal" class="text-center">1.99</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>                   
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
        <tfoot>
            <tr class="visible-xs">
            <td class="text-center"><strong>Tổng tiền 1.99</strong></td>
            </tr>
            <tr>
            <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Tổng tiền $1.99</strong></td>
            <td><a href="#" class="btn btn-success btn-block">THOÁT <i class="fa fa-angle-right"></i></a></td>
            </tr>
        </tfoot>
    </table>
</div>
@endsection

@section('js')

@endsection
