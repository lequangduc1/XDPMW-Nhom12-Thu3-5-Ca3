@extends('welcome')
@section('content')
<div class="features_items">
    <h2 class="title text-center">Sản Phẩm</h2>
    @foreach($sanpham as $sp)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{!! asset('public/frontend/images/home/sanpham/'.$sp->HinhAnh) !!}" alt="" style="width: 250px; height: 192px;"/>
                            <h2><a href="/doanwebthayhung/chitietsanpham/{{$sp->MaSP}}">{{$sp->TenSP}}</a></h2>
                            <p><?php echo number_format($sp->Gia, 0) . " VNĐ"?></p>
                            <!-- <a href="themvaogiohang/{{$sp->MaSP}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a> -->
                            <a onclick="themvaogiohang({{$sp->MaSP}})" href="javascript:" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                        </div>
                </div>
            </div>
            
        </div>
    @endforeach
    <div class="col-sm-12" style="text-align: center;">
        <ul class="pagination modal-1" >
            {{$sanpham->links()}}
        </ul>
    </div>
    
    

</div>

@endsection