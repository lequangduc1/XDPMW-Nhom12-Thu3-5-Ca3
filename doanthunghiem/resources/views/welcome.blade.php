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
										<h4 class="panel-title"><a href="/doanthunghiem/sanpham_loai/{{$hx->HangXe}}">{{$hx->HangXe}}</a></h4>
									</div>
								</div>
							@endforeach
						</div><!--/category-products-->
					
						
						
						
						
						
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
                    <!--kế thừa-->
                    @yield('content')
					
					<!--kế thừa-->
                </div>
                
					
				</div>
			</div>
		</div>
	</section>
	
	<!-- footer -->
		@include('frontend.footer')
	<!-- footer -->
	

  
	<!-- JavaScript -->
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
	<!-- Default theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
	<!-- Semantic UI theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
	<!-- Bootstrap theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

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
<script>
</body>
</html>