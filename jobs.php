<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];



    $uploadStatus = 1;

    echo empty($_FILES["resume"]["name"]);
    echo '<br>';

    // Upload attachment file
    if(!empty($_FILES["resume"]["name"])){
      echo "not empty";
        // File path config
        $targetDir = "uploads/";
        $fileName = basename($_FILES["resume"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
        if(in_array($fileType, $allowTypes)){
            // Upload file to the server
            if(move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFilePath)){
                $uploadedFile = $targetFilePath;
            }else{
                $uploadStatus = 0;
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
            $uploadStatus = 0;
            $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
        }
    }

    if($uploadStatus == 1) {

        // Recipient
        $toEmail = 'jobs@itvision.me';

        // Sender
        $from = $email;
        $fromName = $name;

        // Subject
        $emailSubject = 'Job form is Submitted by '.$name.' as'.$position;

        // Message
        $htmlContent = '<h2>Contact Request Submitted</h2>
                    <p><b>Name:</b> '.$name.'</p>
                    <p><b>Email:</b> '.$email.'</p>
                    <p><b>Subject:</b> '.$emailSubject.'</p>';

        // Header for sender info
        $headers = "From: $fromName"." <".$from.">";

        if (!empty($uploadedFile) && file_exists($uploadedFile)) {
              echo "hello1";
            // Boundary
            $semi_rand = md5(time());
            $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

            // Headers for attachment
            $headers .= "\nMIME-Version: 1.0\n"."Content-Type: multipart/mixed;\n"." boundary=\"{$mime_boundary}\"";

            // Multipart boundary
            $message = "--{$mime_boundary}\n"."Content-Type: text/html; charset=\"UTF-8\"\n"."Content-Transfer-Encoding: 7bit\n\n".$htmlContent."\n\n";

            // Preparing attachment
            if (is_file($uploadedFile)) {
                $message .= "--{$mime_boundary}\n";
                $fp = @fopen($uploadedFile, "rb");
                $data = @fread($fp, filesize($uploadedFile));
                @fclose($fp);
                $data = chunk_split(base64_encode($data));
                $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n"."Content-Description: ".basename($uploadedFile)."\n"."Content-Disposition: attachment;\n"." filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n"."Content-Transfer-Encoding: base64\n\n".$data."\n\n";
            }

            $message .= "--{$mime_boundary}--";
            $returnpath = "-f".$email;

            // Send email
            $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);

            // Delete attachment file from the server
            @unlink($uploadedFile);
        } else {
            echo "hello2";
            // Set content-type header for sending HTML email
            $headers .= "\r\n"."MIME-Version: 1.0";
            $headers .= "\r\n"."Content-type:text/html;charset=UTF-8";

            // Send email
            $mail = mail($toEmail, $emailSubject, $htmlContent, $headers);
        }

        // If mail sent
        if ($mail) {

            $statusMsg = 'Your contact request has been submitted successfully !';
            $msgClass = 'succdiv';
            return json_encode(array('status'=>'200','msg'=>$statusMsg));

        } else {
            $statusMsg = 'Your contact request submission failed, please try again.';
            return json_encode(array('status'=>'500','msg'=>$statusMsg));
        }
    }
    return json_encode(array('status'=>'500','msg'=>'upload not successful'));
}
?>