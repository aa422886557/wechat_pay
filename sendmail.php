<?php  
require_once ('email.class.php'); 
//########################################## 
$smtpserver = "smtp.163.com";//SMTP������ 
$smtpserverport =25;//SMTP�������˿� 
$smtpusermail = "aa422886551@163.com";//SMTP���������û����� 
$smtpemailto = "422886557@qq.com";//���͸�˭ 
$smtpuser = "aa422886551@163.com";//SMTP���������û��ʺ� 
$smtppass = "aa123456";//SMTP���������û����� 
$mailsubject = "PHP100�����ʼ�ϵͳ";//�ʼ����� 
$mailbody = "<h1> ����һ�����Գ��� PHP100.com </h1>";//�ʼ����� 
$mailtype = "HTML";//�ʼ���ʽ��HTML/TXT��,TXTΪ�ı��ʼ� 
########################################## 
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//�������һ��true�Ǳ�ʾʹ�������֤,����ʹ�������֤. 
$smtp->debug = true;//�Ƿ���ʾ���͵ĵ�����Ϣ 
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
?>