
<?php

$nom = trim($_POST['nom']);
$prenom = trim($_POST['prenom']);
$mail = trim($_POST['mail']);
$NumeroT = trim($_POST['NumeroT']);
$motspasse = trim($_POST['motspasse']);
$motspasse2 = trim($_POST['motspasse2']);
$adress = trim($_POST['adress']);
$adress2 = trim($_POST['adress2']);
$ville = trim($_POST['ville']);
$pays = trim($_POST['pays']);
$codePostal = trim($_POST['codePostal']);
$spcialite = trim($_POST['spcialite']);
$description = trim($_POST['description']);

if($nom !='' && $prenom !='' && $mail != '' && $NumeroT != '' && $motspasse !='' && $motspasse2 !='' && $adress != '' && $ville != ''&& $pays !='' && $codePostal !='' && $description != '' )
{
  $nom = 'farid';
  var_dump($nom);
/*
  if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}*/
//$db = new PDO("mysql:host=localhost;dbname=fatis","root"," ");

 $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password);
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie';

  /*$db = new PDO('mysql:host=localhost;dbname=cuisine', 'root', '');
  $sql = "SELECT * FROM user_user where Adresse_Mail = '$mail' ";
  $result = $db->prepare($sql);
  $result->execute();
  if($result->rowCount() > 0)
  {
    $motspasse =password_hash($motspasse, PASSWORD_DEFAULT);
    $sql = "INSERT INTO user_user (Adresse_Mail, password) VALUES ('$mail','$motspasse')";
    $req = $db->prepare($sql);
    $req->execute();
    echo "enrejistrement effectué";
  }*/
} else {
  echo('Doit remplir les champs obligatoires');
}
//var_dump($description);




  /*if(isset($_POST['submit']))
{
  $mail = $_POST['mail'];
  var_dump($mail) ;

}*/



?>
