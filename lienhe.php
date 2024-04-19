<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
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
                <li><a class="nav-link text-dark" href="vechungtoi.php">Về chúng tôi</a></li>
				<li><a class="nav-link text-dark" href="lienhe.php">Liên hệ</a></li>
			</ul>
			<ul class="ml-auto navbar-nav">
				<li class="nav-item"><a class="nav-link text-dark" href="login.php">Login</a></li>			
			</ul>
		</div>
	</nav>
<div>
    <img src="image/lienhe.png" style="width: 100%; height: 300px" />
</div>
<!-- Phần thân-->
<div class="container mt-5">
    <div class="row mb-5">
        <div class="col-sm-5 pt-5">
            <h3 class="mb-5">HỖ TRỢ TRỰC TUYẾN</h3>
            <h6>Chúng tôi luôn ở đây để hỗ trợ.</h6>
            <h6>Nếu bạn có bất cứ câu hỏi nào về hàng hoá, bưu phẩm của mình, đừng ngần ngại liên hệ với chúng tôi.</h6>
            <div class="row mt-5">
                <div class="col-sm-6">
                    <b>Liên Hệ Tổng Đài</b>
                    <div>
                        <i class="fa fa-phone"></i>
                        <span><a href="calto:19001106">19001106</a></span>
                    </div>
                    <div>
                        <i class="fa fa-skype"></i>
                        <span><a href="https://join.skype.com/invite/mcM6VFCqpnv0">Trần Thắng</a></span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <b>Chi nhánh TP.HCM</b>
                    <div>
                        <i class="fa fa-phone"></i>
                        <span><a href="calto:19001106">19001106</a></span>
                    </div>
                    <div>
                        <i class="fa fa-skype"></i>
                        <span><a href="https://join.skype.com/invite/mcM6VFCqpnv0">Trần Thắng</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6248068311584!2d106.66019742419289!3d10.763371796380437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eef2879a3fb%3A0xfc7216a575660b83!2zMTg5IE5ndXnhu4VuIEtpbSwgUGjGsOG7nW5nIDcsIFF14bqtbiAxMCwgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1556281707963!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <div></div>

</div>
<!--/ABOUT-->

<div>
    <footer class="footer" style="background:gray">
                <?include("includes/footer.php");?>
    </footer>
</div>
</body>
</html>

