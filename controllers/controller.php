<?php
 require_once('models/models.php');
 class Controller{
     public $model;
     public function __construct()
     {
         $this->models = new Model();
     }

     public function invoke()
     {
         $reslt = $this->models->getlogin();
         if($reslt == 'login')
         {
             include 'views/afterlogin.php';
         }
                 else
             {
             include 'views/login.php';
         }
    }
}

 ?>