<?php
/*
 NEW.PHP
 Allows user to create a new entry in the database
*/

// creates the new record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
include('func.php');
error_reporting(0);
set_time_limit(0);
$ser="http://site24.way2sms.com/";
$ckfile = tempnam ("/tmp", "CURLCOOKIE");
$login=$ser."Login1.action";
$uid='8373886873';
$pwd='saikatfb';
$to='7890647677';

function renderForm($first, $last, $error)
{
    ?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    <html>
    <head>
        <title>New Record</title>
    </head>
    <body>
    <?php
    // if there are any errors, display them
    if ($error != '')
    {
        echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
    }
    ?>

    <form action="" method="post">
        <div>
            <strong>First Name: *</strong> <input type="text" name="firstname" value="<?php echo $first; ?>" /><br/>
            <strong>Last Name: *</strong> <input type="text" name="lastname" value="<?php echo $last; ?>" /><br/>
            <p>* required</p>
            <input type="submit" name="submit" value="Submit">
        </div>
       </form>
    </body>
    </html>
    <?php
}




// connect to the database
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit']))
{
    // get form data, making sure it is valid
    $firstname = mysql_real_escape_string(htmlspecialchars($_POST['firstname']));
    $lastname = mysql_real_escape_string(htmlspecialchars($_POST['lastname']));

    // check to make sure both fields are entered
    if ($firstname == '' || $lastname == '')
    {
        // generate error message
        $error = 'ERROR: Please fill in all required fields!';

        // if either field is blank, display the form again
        renderForm($firstname, $lastname, $error);
    }
    else
    {
        // save the data to the database
        mysql_query("INSERT players SET firstname='$firstname', lastname='$lastname'")
        or die(mysql_error());
        $IDN=mysql_insert_id($connection);

if(isset($_POST['submit'])) {
   $N= "New value have Entered,The first name is $firstname and the last name you entered is $lastname";

     //sent message through way2sms starts here
    $msg="$N";
    if(!$to)
    { $to=$uid; }
    if(!$msg)
    { $msg=rword(5).rword(5).rword(5).rword(5).rword(5); }
    $captcha=input($_REQUEST['captcha']);
    flush();
    if($uid && $pwd)
    {
        $ibal="0";
        $sbal="0";
        $lhtml="0";
        $shtml="0";
        $khtml="0";
        $qhtml="0";
        $fhtml="0";
        $te="0";
        flush();

        $loginpost="gval=&username=".$uid."&password=".$pwd."&Login=Login";

        $ch = curl_init();
        $lhtml=post($login,$loginpost,$ch,$ckfile);
////curl_close($ch);

        if(stristr($lhtml,'Location: '.$ser.'vem.action') || stristr($lhtml,'Location: '.$ser.'MainView.action') || stristr($lhtml,'Location: '.$ser.'ebrdg.action'))
        {
            preg_match("/~(.*?);/i",$lhtml,$id);
            $id=$id['1'];
            if(!$id)
            {
                goto end;
            }
// * Login Sucess Message//

            goto bal;
        }
        elseif(stristr($lhtml,'Location: http://site2.way2sms.com/entry'))
        {
// * Login Faild or SMS Send Error Message 3//
//echo  "Check Your Username and Password Inorder to Send SMS";
            goto end;
        }
        else
        {
// * Login Faild or SMS Send Error Message 2//
//echo  "Check Your Username and Password Inorder to Send SMS";
            goto end;
        }
        bal:
///$ch = curl_init();
        $msg=urlencode($msg);
        $main=$ser."smstoss.action";
        $ref=$ser."sendSMS?Token=".$id;
        $conf=$ser."smscofirm.action?SentMessage=".$msg."&Token=".$id."&status=0";

        $post="ssaction=ss&Token=".$id."&mobile=".$to."&message=".$msg."&Send=Send Sms&msgLen=".strlen($msg);
        $mhtml=post($main,$post,$ch,$ckfile,$proxy,$ref);
        //if(stristr($mhtml,'smscofirm.action?SentMessage='))
// * Message Sended Sucessfull Message//
        //else
// * Login Faild or SMS Send Error Message 1//
//echo  "Check Your Username and Password Inorder to Send SMS";
    curl_close($ch);

end:
flush();
}
    //sent sms ends here





      }
        // once saved, redirect back to the view page
        header("Location: view.php");
    }
}
else
    // if the form hasn't been submitted, display the form
{
    renderForm('','','');
}
?>