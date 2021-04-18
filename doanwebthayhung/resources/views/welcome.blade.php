<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/maincss.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('public/frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->
<style>
	.modal-1 li:first-child a {
	-moz-border-radius: 6px 0 0 6px;
	-webkit-border-radius: 6px;
	border-radius: 6px 0 0 6px;
	}
	.modal-1 li:last-child a {
	-moz-border-radius: 0 6px 6px 0;
	-webkit-border-radius: 0;
	border-radius: 0 6px 6px 0;
	}
	.modal-1 a {
	border-color: #ddd;
	color: #4285F4;
	background: #fff;
	}
	.modal-1 a:hover {
	background: #eee;
	}
	.modal-1 a.active, .modal-1 a:active {
	border-color: #4285F4;
	background: #4285F4;
	color: #fff;
	}
</style>
<body>
	<!-- header -->
	@include('frontend.menu')
	<!-- header -->	

	@include('frontend.slider')
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh Mục Sản Phẩm</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            @foreach($hangxe as $hx)
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a  href="/doanwebthayhung/sanpham_loai/{{$hx->HangXe}}">{{$hx->HangXe}}</a></h4>
										<!-- <h4 class="panel-title"><a onclick="sanpham_loai({{$hx->HangXe}})" href="javascript:">{{$hx->HangXe}}</a></h4> -->
										
										
									</div>
								</div>
							@endforeach
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
                    <!--kế thừa-->
                    @yield('content')
					
					<!--kế thừa-->
                </div>
               
					
				
			</div>
		</div>
	</section>
	
	<!-- footer -->
		@include('frontend.footer')
	<!-- footer -->
	

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
	<script>
		function themvaogiohang(MaSP){
			console.log(MaSP);
			$.ajax({
				url: 'themvaogiohang/'+MaSP,
				type: 'GET',
			}).done(function(response) {
				console.log(response);
				alertify.success('đã thêm sản phẩm vào giỏ hàng');
			});
		}
		/* function sanpham_loai(id){
			console.log(id);
			$.ajax({
				url: 'sanpham_loai/'+HangXe,
				type: 'GET',
			}).done(function(response) {
				console.log(response);
			});
		} */
	</script>
</body>
</html>