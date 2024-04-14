<?php
 
require_once 'model/courrier.php';
function login()
{
  loginAction();
    require_once 'views/login.php';  
  
}
function register()
{
  registerAction();
    require_once 'views/register_form.php';  
  
}

function afficher()
{


     $matable = afficherAction();
   
    require_once 'views/datatable.php';

}
function updateAction()
{

    extract($_POST);
    edit($id, $N_D_ORDRE, $DATE_BO, $EXPEDITEUR, $N_D_ORDRE_EXPEDITEUR, $DATE_COURRIER,$OBJET_DU_COURRIER, $DIRECTION_EN_PRIORITE,
    $DIRECTION_SECONDAIRE,$CONSIGNES,$AVANCEMENT);
    header('location:views/datatable.php');
}
