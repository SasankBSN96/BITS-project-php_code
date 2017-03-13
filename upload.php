<?php
     
        //Path to the directory where videos get saved
		$file_path = "H:\uploads/"; 

	//Appending the name of the video file to the file path
        $file_path = $file_path . basename( $_FILES['video']['name']);
		
	//Save the video to the directory and check if the upload was successful
        if(move_uploaded_file($_FILES['video']['tmp_name'], $file_path)) {
            echo "success";
        } else{
            echo "fail";
        }
     ?>