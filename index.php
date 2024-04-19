<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="includes/index.css">
    <title>Document</title>
</head>
<body>
<? include "includes/session.php"; ?>
<div class="container my-3">
    <div class="clearfix">
        <div class="float-left">
            <img src="image/logo3.png" style="width: 150px; height: 60px" />
        </div>
        <div class="float-right ml-5">
            <img src="image/VN.png" style="width: 50px" />          
        </div>
        <div class="float-right">
            <img src="image/mail.png" class="float-left" />
            <div class="float-left mx-2" style="font-size: 12px">
                <b>Email</b>
                <br>
                <a style="color: #000" href="mailto:info@nascoexpress.com">
                    <span>info@nascoexpress.com</span>
                </a>
            </div>            
        </div>
        <div class="float-right">
            <img src="image/phone-call.png" class="float-left" />
            <div class="float-left mx-2" style="font-size: 12px">
                <b>Hotline</b>
                <br>
                <span>1900 1106</span>
            </div>            
        </div>
        <div class="float-right">
            <img src="image/time-left.png" class="float-left" />
            <div class="float-left mx-2" style="font-size: 12px">
                <b>Giờ làm việc</b>
                <br>
                <span>24/7</span>
            </div>            
        </div>
    </div>   
</div>
<hr>
<nav class="navbar navbar-expand-sm">
		<div class="container" style="font-weight: bold;">
			<a class="navbar-brand text-dark" href="index.php">Trang chủ</a>         
			<ul class="navbar-nav">
                <li><a class="nav-link text-dark" href="aboutus.php">Về chúng tôi</a></li>
				<li><a class="nav-link text-dark" href="contact.php">Liên hệ</a></li>
			</ul>
			<ul class="ml-auto navbar-nav">
				<li class="nav-item"><a class="nav-link text-dark" href="login.php">Login</a></li>			
			</ul>
		</div>
	</nav>
<div>
    <img src="image/vanchuyen.jpg" style="width: 100%" />
</div>
<!-- Phần thân-->
<section>
    <div class="text-center mt-5">
        <h2 style="font-family: Comic Sans MS; color: #86073e">Tại sao chọn TB Express?</h2>
        <div class="container mt-5">
            <div class="row" >          
                <div class="col-sm-6 row">
                    <div class="col-sm-2">   
                        <img src="image/diacau.jpg" style="height: 80px"/>
                    </div>
                    <div class="col-sm-10">
                        <h3>Mạng lưới giao hàng rộng khắp</h3>
                        <p>TB Express vận chuyển hàng hóa tới 63 tỉnh/thành phố Toàn Quốc cùng 220 quốc gia và vùng lãnh thổ trên thế giới</p>
                    </div>
                </div>
            
                <div class="col-sm-6 row">
                    <div class="col-sm-2">   
                        <img src="image/maybay.jpg" style="height: 80px"/>
                    </div>
                    <div class="col-sm-10">
                        <h3>Đa dạng dịch vụ vận chuyển</h3>
                        <p>TB Express mang tới nhiều lựa chọn chuyển phát phù hợp với từng yêu cầu đặc thù của mỗi cá nhân/tổ chức</p>
                    </div>
                </div>
            
                <div class="col-sm-6 row">
                    <div class="col-sm-2">   
                        <img src="image/khien.jpg" style="height: 80px"/>
                    </div>
                    <div class="col-sm-10">
                        <h3>Nhanh chóng và tiết kiệm</h3>
                        <p>Các dịch vụ vận chuyển được tối ưu hóa để đảm bảo thời gian phát hàng tới tay người nhận nhanh nhất với cước phí phù hợp nhất</p>
                    </div>
                </div>
            
                <div class="col-sm-6 row">
                    <div class="col-sm-2">   
                        <img src="image/hop.jpg" style="height: 80px"/>
                    </div>
                    <div class="col-sm-10">
                        <h3>Chủ động kiểm soát</h3>
                        <p>Hệ thống Tracking và quản lý Online cho phép khách hàng có thể chủ động kiểm soát hành trình của đơn hàng mọi lúc mọi nơi</p>
                    </div>    
                </div>              
            </div>
        </div>
    </div>
</section>
    <!-- tra cuu van don -->
<div class="my-3 text-center vandon" id="searching">
    <h2 class="text-success">Tra cứu vận đơn</h2>

    <div class="bang">
        <input type="text" placeholder="Search for order" class="searchfo" id="searchfo">
        <input type="button" value="search" class="search" name="search">
        <div id="status" class="text-success"></div>
    </div>

</div>
<script>
    
    $(document).ready(function(){
        $(".search").click(function(e){
            //debugger;
            e.preventDefault();       
            var id = $("#searchfo").val();
            $.ajax({
                type: 'POST',
                url: 'searchfo.php',
                data: { id_code: id},
                success: function(result){
                    $('#status').html(result);
                //console.log();
                }
            });          
        });

    });
</script>

<!--/ABOUT-->

<div>
    <footer class="footer" style="background:gray">
                <?include("includes/footer.php");?>
    </footer>
</div>
</body>
</html>