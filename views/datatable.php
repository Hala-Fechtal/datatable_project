<!DOCTYPE html>
<html lang="fr">
<head >
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="views/style.css">
  
  <script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script  src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  <script  src="script.js"></script>
  <title>ETAT _ ARRIVEE</title>
  
</head>
<body>
    <title>ETAT _ ARRIVEE</title>
</head>
<body>
<?php require_once 'include/nav.php'?>

    <h2>ETAT _ ARRIVEE ANNEE 2024</h2>
    <hr>
    
    <!--datatable-->
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-2"></div>

            <div class="col-md-8">
           


              
    <table id="example" class="table table-striped" style="width:100%">
  
    <thead>
       
      <tr>
      <th>ID</th>  
      <th>N' D'ORDRE</th>
      <th>DATE BO</th>
      <th>EXPEDITEUR</th>
      <th>N° D'ORDRE EXPEDITEUR</th>
      <th>DATE _</th>
      <th>OBJET DU _</th>
     <th>ACTIONS</th>
      </tr>
      </thead>

      <tbody>
      <?php  foreach ($courriers as $courrier): ?>
            <tr>
                <td><?= $courrier['ID'];  ?></td>
                <td><?= $courrier['N_ORDRE'];?></td>
                <td><?= $courrier['DATE_BO'];?></td>
                <td><?= $courrier['EXPEDITEUR'];?></td>
                <td><?= $courrier['N_D_ORDRE_EXPEDITEUR'];?></td>
                <td><?= $courrier['DATE_COURRIER']; ?></td>
                <td><?= $courrier['OBJET_DU_COURRIER'];  ?></td>
                <td>
                    <a href="edit.php&id=<?php echo $courrier->id?>" class="btn btn-success btn-sm">Modifier</a>
                    
                </td>
            </tr>
        <?php endforeach; ?> 
     
   



       
        </tbody>
      </table>
     
    


</div>

</div>

</div>
</div>
