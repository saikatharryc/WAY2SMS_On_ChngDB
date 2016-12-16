# WAY2SMS_On_ChngDB
Get SMS  Direct on phone on database value insertion,from way2sms using cron job
           Demo URL: 
[Click Here](http://www.sunnyabhipaulphotography.in/WAY2SMS_On_ChngDB-master/view.php)

Note: The demo set to a Specific no. so you cant get SMS until you set it to your number,and for that u have to change it. 
            
Head in to `New.php`
edit your Credentials at  line no. 15,16,17
`$uid='your way2sms user id here';
$pwd='your way2sms password here';
$to='which mobile no. to send';`

now go to `connect-db.php`
and edit with your database credentials at line number 8-11.
here:
`$server = 'localhost';
$user = 'root';
$pass = '*****';
$db = 'saikatha_records';`
#####Upload SQL Dump `saikatha_records.sql` to your database. and all the codes to your server. and Run.
