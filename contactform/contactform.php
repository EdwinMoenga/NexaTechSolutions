<?php
  
  if( file_exists($php_mail_form_library = '../lib/php-mail-form/php-mail-form.php' )) {
    include( $php_mail_form_library );
  } else {
    die( 'Unable to load the PHP Mail Form Library!');
  }

  $contactform = new PHP_Mail_Form;
  $contactform->ajax = true;

  $contactform->to = 'info@nexatechsolutions.co.ke';
  $contactform->from_name = $_POST['name'];
  $contactform->from_email = $_POST['email'];
  $contactform->subject = $_POST['subject'];

  $contactform->add_message( $_POST['name'], 'From');
  $contactform->add_message( $_POST['email'], 'Email');
  $contactform->add_message( $_POST['message'], 'Message', 10);

  echo $contactform->send();
?>
