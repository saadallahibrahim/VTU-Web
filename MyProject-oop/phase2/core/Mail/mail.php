


<?php 
class mail{
private $name;
private $template;
private $senderMail;
private $email;
private $senderName;
private $subject ;
private $MAIL_TEMPLATE_VAR;

public function __construct($name, $email, $senderMail,$template, $subject , $MAIL_TEMPLATE_VAR)
{
   $this->name =  $name;
   $this->email =  $email;
   $this->senderMail = $senderMail;
   $this->template = $template; 
   $this->subject = $subject;
   $this->MAIL_TEMPLATE_VAR = $MAIL_TEMPLATE_VAR;
}

public function  __constructWithParamsAsConstructor( $email, $senderMail,$template, $subject , $MAIL_TEMPLATE_VAR)
{
 
   $this->email =  $email;
   $this->senderMail = $senderMail;
   $this->template = $template; 
   $this->subject = $subject;
   $this->MAIL_TEMPLATE_VAR = $MAIL_TEMPLATE_VAR;
}



public function send_mail()
{

    require_once "../../../PHPMailer/PHPMailer//PHPMailerAutoload.php";


    //PHPMailer Object
    $mail = new PHPMailer;

    //Enable SMTP debugging. 
    $mail->SMTPDebug = 0;
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();
    //Set SMTP host name                          
    $mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    //Provide username and password     
    $mail->Username = "dextertech39@gmail.com";
    $mail->Password = "drrh gjcv qupv tlqk";
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "ssl";
    //Set TCP port to connect to 
    $mail->Port = 465;

    $mail->From = $this->senderMail;
    $mail->FromName = $this->senderName;

    //To address and name of the reciecver
    $mail->addAddress($this->email, $this->name);
    $mail->addReplyTo($this->senderMail, "GHANI");

    $mail->isHTML(true);
    $subject = $this->subject;
    $mail->Subject = $subject;
    //email template
    $content = file_get_contents($this->template);

    if ($this->MAIL_TEMPLATE_VAR != null && is_array($this->MAIL_TEMPLATE_VAR)) {
        foreach ($this->MAIL_TEMPLATE_VAR as $key => $value) {
            $content = str_replace("{{{$key}}}", $value, $content);
        }
    }

    $mail->msgHTML($content);

    if ($mail->send()) {
        $status = 'Sent';
    } else {
        $status =  'Mailer Error: ' . $mail->ErrorInfo;
    }

    return $status;
}
}
























?>