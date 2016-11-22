<?php
session_start();
 require '../webApp/controllers/login.controller.php';

  require '../webApp/models/login.model.php';


  $login = new login_controller();

  $login_model = new login();

  $login->login_page();

  $login_model->check_registration('singup','username','email','email_beves','password','pass_beves');

  $login_model->signIn('signin','username','password');


   //$login->input_values('username','email','email_beves');

 ?>
