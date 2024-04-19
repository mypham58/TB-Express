<?
    include("includes/session.php");
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $renewpass = $_POST['renewpass'];
    $id = $_SESSION['admin'];
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT * FROM member");
    $stmt->execute();
    $row = $stmt->fetch();
    if(isset($_POST['change'])){
        if(isset($_SESSION['admin'])){
            if(password_verify($oldpass, $row['pass'])){
                //if($oldpass == $row['pass']){
                if($newpass == $renewpass){                
                    $newpass = password_hash($newpass, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("UPDATE member SET pass=:pass WHERE id_member=:id");
                    $stmt->execute(["pass"=>$newpass, "id"=>$id]);                
                    $_SESSION['success'] = "Đổi mật khẩu thành công";                              
                }else{
                    $_SESSION['error'] = "Mật khẩu mới không khớp";
                }
            }else{
                $_SESSION['error'] = "Sai mật khẩu cũ";
            }
            header("location: admin/admin.php");
        }
        if(isset($_SESSION['user'])){
            if(password_verify($oldpass, $row['pass'])){
                if($newpass == $renewpass){                
                    $newpass = password_hash($newpass, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("UPDATE member SET pass=:pass WHERE id_member=:id");
                    $stmt->execute(["pass"=>$newpass, "id"=>$_SESSION['user']]);                
                    $_SESSION['success'] = "Đổi mật khẩu thành công";                              
                }else{
                    $_SESSION['error'] = "Mật khẩu mới không khớp";
                }
            }else{
                $_SESSION['error'] = "Sai mật khẩu cũ";
            }
            header("location: member/dowork.php");
        }              
    }
    $pdo->close();

?>