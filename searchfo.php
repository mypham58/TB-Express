<?php
    include "includes/session.php";
    $id_code = $_POST['id_code'];
    
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT *, COUNT(*) AS rownums FROM shipping sh 
                            RIGHT JOIN status st on sh.status = st.id  
                            WHERE id_code=:id_code");
    $stmt->execute(['id_code'=>$id_code]);
    $row = $stmt->fetch();
    if( $row['rownums'] > 0 ){
        echo $row['status_goods'];
    }else{
       echo "Không tìm thấy đơn hàng";
    }
    //header('location: index.php')
?>