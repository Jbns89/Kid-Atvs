<?php

class HomeController extends BaseController {

    public function showHome()
    {
        return View::make('home');
    }
    
// Functions to show information
    public function showContact()
    {
        return View::make('contact');
    }
    
    public function showPolicy()
    {
        return View::make('policies');
    }
    
    public function showAbout()
    {
        return View::make('about');
    }

// Functions to show vehicles
    public function showUtility()
    {
        return View::make('vehicles.utility');
    }
    
    public function showAtvs()
    {
        return View::make('vehicles.atvs');
    }
    
    public function showKarts()
    {
        return View::make('vehicles.karts');
    }
    
    public function showDirtbikes()
    {
        return View::make('vehicles.dirtbikes');
    }
    


// Functions for submitting email
    public function died($error) 
    {
 
        // your error code can go here
 
        echo $error;
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
    
    public function clean_string($string) 
    {
 
        $bad = array("content-type","bcc:","to:","cc:","href");

        return str_replace($bad,"",$string);
 
    }
    
    // public function submitContact()
    // {
    //     if(isset($_POST['email'])) {

    //         // EDIT THE 2 LINES BELOW AS REQUIRED
         
    //         $email_to = "jbns89@gmail.com";
    //         //$email_to = "kidsatv@yahoo.com";
         
    //         $email_subject = "Customer Comments";
         
    //         // validation expected data exists
         
    //         if(!isset($_POST['f_name']) ||
         
    //             !isset($_POST['l_name']) ||
         
    //             !isset($_POST['email']) ||
         
    //             !isset($_POST['phone']) ||
         
    //             !isset($_POST['comments'])) {
         
    //             died('We are sorry, but there appears to be errors on the form you submitted.');       
         
    //         }
         
    //         $first_name = $_POST['f_name']; // required
         
    //         $last_name = $_POST['l_name']; // required
         
    //         $email_from = $_POST['email']; // required
         
    //         $phone = $_POST['phone']; // not required
         
    //         $comments = $_POST['comments']; // required
         
    //         $error_message = "";
         
    //         $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    //         if(!preg_match($email_exp,$email_from)) {
    //             $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    //         }

    //         $string_exp = "/^[A-Za-z .'-]+$/";

    //         if(!preg_match($string_exp,$first_name)) {
    //             $error_message .= 'The First Name you entered does not appear to be valid.<br />';
    //         }

    //         if(!preg_match($string_exp,$last_name)) {
    //             $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
    //         }

    //         if(strlen($comments) < 2) {
    //             $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    //         }

    //         if(strlen($error_message) > 0) {
    //             died($error_message);
    //         }
         
    //         $email_message = "Form details below.\n\n";
         
    //         $email_message .= "First Name: ".clean_string($first_name)."\n";
         
    //         $email_message .= "Last Name: ".clean_string($last_name)."\n";
         
    //         $email_message .= "Email: ".clean_string($email_from)."\n";
         
    //         $email_message .= "Telephone: ".clean_string($phone)."\n";
         
    //         $email_message .= "Comments: ".clean_string($comments)."\n";
         
    //     // create email headers
         
    //     $headers = 'From: '.$email_from."\r\n".
         
    //     'Reply-To: '.$email_from."\r\n" .
         
    //     'X-Mailer: PHP/' . phpversion();
         
    //     @mail($email_to, $email_subject, $email_message, $headers);
        
        
    //     return View::make('vehicles.dirtbikes');
    // }

}
