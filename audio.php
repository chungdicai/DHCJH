
<?php ////修改 宣傳單圖片

    $pagevalue = $_REQUEST["pagevalue"];
    if( $pagevalue =='修改'){
     $price = $_REQUEST["price"];
     $id = $_REQUEST["id"];
     $no= $_REQUEST["no"];
     $status = $_REQUEST["status"];
     
    //  echo  $no;  

    
        $errMsg = "";
            try {
             
            require_once("connectBooks.php");
            
            $sql = "update audio set  audioName=:id  , audioPrice=:price , audioStatus=:status  where audioNo=:no" ;
            $products = $pdo->prepare( $sql );
            $products->bindValue(":id", $id);
            $products->bindValue(":no", $no);
            $products->bindValue(":price", $price);
            $products->bindValue(":status", $status);
            
            $products->execute();
           

            } catch (PDOException $e) {
                $errMsg .= "錯誤原因 : ".$e -> getMessage(). "<br>";
                $errMsg .= "錯誤行號 : ".$e -> getLine(). "<br>";	
            //    echo  $errMsg;
            }

    }  
?>
<?php ///新增
        $pagevalue = $_REQUEST["pagevalue"];
        if($pagevalue =='新增'){
    
            $status = $_REQUEST["status"];
            $id = $_REQUEST["id"];
            $price = $_REQUEST["price"];
            
            $upfilename = $_REQUEST["upfilename"];
            
            $img = $_REQUEST["img"];
           
            $upfilenum = $_REQUEST["upfilenum"];
        //    echo   '$upfilename';
        //     // 轉檔 & 存檔
            if($upfilenum=='jpg' || $upfilenum=='jpeg'){
                $num='jpeg';
                $type='.jpg';
            }else if($upfilenum=='png'){
                $num = 'png';
                $type='.png';
            }else{
                // echo '請選擇jpg或png檔案類型';
            }
    
            if($num != null){
                $jpeg = 'data:image/'.  $num  .';base64';
                $img = str_replace($jpeg, '', $img);
                // $img = str_replace('data:image/{$num};base64,', '', $img);
        
                $img = str_replace(' ', '+', $img);
                $data = base64_decode($img);
                // $file = "images/" . uniqid() . $type;
                $file = "images/customized/cust_stage_audioAndPole/" . uniqid() . $type;
                
                $success = file_put_contents($file, $data);
                $output = ($success) ? '成功' : '請再試一次';
                // echo  $output;
            }
        
        
        $errMsg = "";
        try {
    
        require_once("connectBooks.php");
        $sql = "INSERT INTO  audio  VALUES  (null , :id , :price , :file ,   :status);";
    // $sql="INSERT INTO audio VALUES (null , '1' , '1', '1' , '1')";
        $products = $pdo->prepare( $sql );
        $products->bindValue(":id", $id);
        
        $products->bindValue(":file", $file);
        $products->bindValue(":price", $price);
        
        $products->bindValue(":status", $status);
        // echo $id,$file,$price,$status;
        $products->execute();
    
        } catch (PDOException $e) {
            $errMsg .= "錯誤原因 : ".$e -> getMessage(). "<br>";
            $errMsg .= "錯誤行號 : ".$e -> getLine(). "<br>";	
        }
    }
?>

