<?php
     
        $file_path = "H:\uploads/";
        //print_r($_FILES);
		//print_r($_POST);
        $file_path = $file_path . basename( $_FILES['video']['name']);
        if(move_uploaded_file($_FILES['video']['tmp_name'], $file_path)) {
            echo "success";
        } else{
            echo "fail";
        }
     ?>