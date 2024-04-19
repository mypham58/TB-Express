<?
    include 'includes/session.php';
    $conn = $pdo->open();

    if(isset($_POST['login'])){
        $user = $_POST['User'];
        $password = $_POST['Password'];
        try{
            $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM member WHERE user=:user");
            $stmt->execute(['user'=>$user]);
            $row = $stmt->fetch();
            if($row['numrows']>0){               
                if(password_verify($password, $row['pass'])){
                    if($row['type']){
                        $_SESSION['admin'] = $row['id_member'];
                        // header('location: admin/admin.php');
                    }
                    else{
                        $_SESSION['user'] = $row['id_member'];
                        // header('location: member/dowork.php');
                    }
                }
                else{
                        $_SESSION['error'] = 'Sai tên hoặc mật khẩu';
                }
            }
            else{
                $_SESSION['error'] = 'Sai tên hoặc mật khẩu';
            }
        }
        catch(PDOException $e){
            echo "There is some problem in connection: ". $e->getMessage();
        }       
    }
    else{
        $_SESSION['error'] = 'Sai tên hoặc mật khẩu';

    }
    header("location:login.php");
    $pdo->close();
    
    
?>