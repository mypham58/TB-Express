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
    <img src="image/vechungtoi.jpg" style="width: 100%; height: 300px" />
</div>
<!--Phần thân-->
<div class="container my-5">
    <h2 class="text-center">Công ty Cổ phần giao nhận hàng hóa TB (TB Logistics)</h2>
    <p>Công ty Cổ phần giao nhận hàng hóa TB (TB Logistics) được chính thức thành lập vào ngày 01 tháng 03 năm 2016 sau khi tách khỏi Công ty Cổ phần Dịch vụ Hàng không sân bay Nội Bài (TB) thuộc Tổng công ty Hàng không Việt Nam (Vietnam Airlines).</p>
    <p>TB Logistics hoạt động chuyên sâu trong lĩnh vực Logistics bao gồm: Giao nhận vận chuyển (Với thương hiệu TB Express hoạt động từ năm 1993), Kho hàng (Warehouse), Phân phối (Distribution) và Kết nối chuỗi cung ứng (Supplychain).</p>

</div>
<div class="container mb-2">
    <h2 class="text-center">Giá trị cốt lõi</h2>
    <div class="row">
        <div class="col-sm-6">
            <img src="image/truck.jpg" width="500px" />
        </div>
        <div class="col-sm-6">
            <b>* Khách hàng là trọng tâm phát triển</b>
            <br>
            <span>Nasco Logistics luôn đặt lợi ích và mong muốn của khách hàng lên hàng đầu. Khách hàng chính là trung tâm; là động lực để công ty phát triển các sản phẩm – dịch vụ hoàn hảo nhất.</span>
            <br>
            <br>
            <b>* Nhanh chóng – Uy tín – Chuyên nghiệp</b>
            <br>
            <span>Nasco Logistics luôn cố gắng nỗ lực hết mình để cung cấp các giải pháp Logistics chuyên nghiệp cùng các dịch vụ chuyển phát nhanh nhất đảm bảo đúng và cao hơn các cam kết của mình với khách hàng, đối tác.
            </span>
            <br>
            <br>
            <b>* Đổi mới – Sáng tạo </b>
            <br>
            <span>Nasco Logistics luôn lấy đổi mới, sáng tạo là đòn bẩy cạnh tranh tạo nên sự khác biệt trong các sản phẩm dịch vụ mà công ty cung cấp. </span>
        </div>
    </div>
</div>
<div>
    <footer class="footer" style="background:gray">
                <?include("includes/footer.php");?>
    </footer>
</div>
</body>
</html>