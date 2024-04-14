<?php
function database_connection()
{
    return new PDO('mysql:dbname=alomrane;host=localhost', 'root', '3vAFY6Q5c@Y.yf8');
}
function loginAction()
{
    $pdo = database_connection();  
   
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password   = $_POST['password'];

        if(!empty($email) && !empty($password)){
          
            $sqlState = $pdo->prepare('SELECT * FROM login 
                                            WHERE email=?
                                            AND   password=?');
            $sqlState->execute([$email,$password]);
            if($sqlState->rowCount()>=1){
                $_SESSION['email'] = $sqlState->fetch();
                header('location:views/datatable.php');
            }else{
                ?>
                <div class="alert alert-danger" role="alert">
             <?php $erreur = 'Login ou password incorrectes.';?>php
                </div>
                <?php
            }
        }else{
            ?>
            <div class="alert alert-danger" role="alert">
           <?php $erreur = 'Login , password sont obligatoires' ;?>
            </div>
            <?php
        }
    }

}
function registerAction()
{
    $pdo = database_connection();  
   
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password   = $_POST['password'];
        $cpassword   = $_POST['cpassword'];

        if(!empty($name) && !empty($lastname) &&!empty($email) && !empty($password) && !empty($password)){
          
            $sqlState = $pdo->prepare('SELECT * FROM login 
                                            WHERE email=?
                                            AND   password=?');
            $sqlState->execute([$email,$password]);
            if($sqlState->rowCount()>=1){
                $error[] = 'user already exist!';
            }else{
                if($password != $cpassword){
                    $error[] = 'password not matched!';
            }else{
            $insert = $pdo->prepare('INSERT INTO login (nom,prenom,email,password) VALUES(?,?,?,?)');
            $insert->execute([$name,$lastname,$email,$password]);
            header('location:login.php');
        }
    }

}}}

function afficherAction()
{
    $pdo = database_connection();  
    return $pdo->query('SELECT ID, N_ORDRE, DATE_BO, EXPEDITEUR,N_D_ORDRE_EXPEDITEUR, DATE_COURRIER,OBJET_DU_COURRIER FROM ma_table ORDER BY ID DESC')->fetchAll(PDO::FETCH_OBJ);
 
}
/*
function edit($id, $N_D_ORDRE, $DATE_BO, $EXPEDITEUR, $N_D_ORDRE_EXPEDITEUR, $DATE_COURRIER,$OBJET_DU_COURRIER, $DIRECTION_EN_PRIORITE,
$DIRECTION_SECONDAIRE,$CONSIGNES,$AVANCEMENT)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("UPDATE ma_table
                                    SET N_D_ORDRE=?,
                                     DATE_BO=?, 
                                     EXPEDITEUR=?,
                                      N_D_ORDRE_EXPEDITEUR=?, 
                                     DATE_COURRIER=?,
                                     OBJET_DU_COURRIER=?,
                                     DIRECTION_EN_PRIORITE=?,
                                     DIRECTION_SECONDAIRE=?,
                                     CONSIGNES=?,
                                     AVANCEMENT=?

                                    WHERE ID = ?");
    return $sqlState->execute([ $id,$N_D_ORDRE, $DATE_BO, $EXPEDITEUR, $N_D_ORDRE_EXPEDITEUR, $DATE_COURRIER,$OBJET_DU_COURRIER, $DIRECTION_EN_PRIORITE,
    $DIRECTION_SECONDAIRE,$CONSIGNES,$AVANCEMENT]);
}

?>*/