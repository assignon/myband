<?php

  //require '../webApp/controllers/technologie.controller.php';
  //$technologie = new technologie_controller();
  //$technologie->technologie_page();

  require "../webApp/models/technologie.model.php";
  $tech_model = new tech_model();
  $tech_model->display_technologie();



 ?>
