<?php

abstract class Controller
{
    public function sendEmail($from,$from_name,$to,$to_name,$template,$subject)
    {
        require 'lib/phpmailer/PHPMailerAutoload.php';

        
        /*
         * Email Settings
			Mail Server Username: info@emotiontherapies.com 			
			Standard (without SSL)			
			Incoming Mail Server: mail.emotiontherapies.com 			
			Supported Ports: 143 (IMAP), 110 (POP3) 			
			Outgoing Mail Server: mail.emotiontherapies.com 			
			Supported Port: 26 (server requires authentication) 			
			
			Private (with SSL)			
			Incoming Mail Server: box1130.bluehost.com (SSL) 			
			Supported Ports: 993 (IMAP), 995 (POP3) 			
			Outgoing Mail Server: box1130.bluehost.com (SSL) 			
			Supported Port: 465 (server requires authentication) 			
			Supported Incoming Mail Protocols: POP3, IMAP 			
			Supported Outgoing Mail Protocols: SMTP 
         * 
         * */
        
        $mail = new PHPMailer;
    	
    	$mail->CharSet = "UTF-8";
    	
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->Host = 'mail.emotiontherapies.com';
        $mail->Port = 26;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = "info@emotiontherapies.com";
        $mail->Password = "!Info1234";
        $mail->setFrom($from, $from_name);
        $mail->addReplyTo($from, $from_name);
        $mail->addAddress($to, $to_name);

        $mail->Subject = $subject;

        $body = nl2br($template);

        $body = preg_replace('/\\\\/','', $body);
        $mail->msgHTML($body);
      
        if (!$mail->send()) {
        	   $result = "Mailer Error: " . $mail->ErrorInfo;
        } else {
        	   $result = "Message sent!";
        }
        
        return $result;
    }
    /*
     * related to paging
     *
     */
    public function total_page($total_row, $page_size) {
    	if (! $total_row || $total_row <= 0)
    		$total_row = 0;
    		$total_row = ceil ( $total_row / $page_size );
    		return $total_row;
    }
    public function current_page($page_size, $first_no) {
    	 $current_page = ceil ( ($first_no + 1) / $page_size );
    	return $current_page;
    }
}
?>
