<?php
  session_start();

  require '../webApp/controllers/admin.controller.php';
  require '../webApp/models/admin.model.php';

  $admin = new admin_controller();
  $model = new admin_model();

  $admin->admin_page();

  $model->check_registration('signup','username','email','password');
  $model->signIn('signin','username','password');

 ?>
