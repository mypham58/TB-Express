
<?  include 'includes/header.php';
    include 'includes/session.php'; 
?>
<? 
    if(isset($_SESSION['admin'])){
        header('location: admin/admin.php');
    }else if(isset($_SESSION['user'])){
        header('location: member/dowork.php');
        // tam thoi z, luc sau noi trang member cua My
    }
?>
<body>
<div class="container">
    <div class="card my-5 col-md-5 mx-auto">
        <div class="card-body">
            <h3 class="card-title text-center">WELCOME TO TB EXPRESS</h3>
            <h3 class="card-title text-center">Login</h3>
            <form action="verify.php" method="post">
                <?
                    if(isset($_SESSION['error'])){
                        echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
                        unset($_SESSION['error']);
                    }
                ?>
                <div class="form-label-group">
                    <input class="form-control" placeholder="User" name="User">
                </div><br>
                <div class="form-label-group">
                    <input type="password" class="form-control" placeholder="Password" name="Password">
                </div><br>
                <button class="btn btn-primary btn-block text-uppercase" type="submit" name="login">Login</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>