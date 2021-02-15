<?php 


if(isset($_POST["Opslaan"])){
    require_once("dbconnect.php");
    $titelboek = $_POST["titelboek"];
    $auteur = $_POST["auteur"];
    $boekplaatje = $_POST["boekplaatje"];
    $Boekdescriptie = $_POST["Boekdescriptie"];
    $pattern = "/^[a-zA-Z0-9]*$/";

     if(empty($titelboek) || empty($auteur) || empty($Boekdescriptie)){
        header('Location: ../boektoevoegen.php?Error=emptyInput');
        exit;
     }
     if(!preg_match($pattern, $titelboek) || !preg_match($pattern, $auteur)){
        header('Location: ../boektoevoegen.php?Error=invalidName');
        exit;
     }
    
else{
    $sql = "INSERT INTO boeken (titelboek, auteur, boekplaatje, boekdescriptie) VALUES
      (:titelboekTemplate, :auteurTemplate, :boekjeplaatjeTemplate, :boekdescriptieTemplate)";
    $params = array(":titelboekTemplate" => "$titelboek", ":auteurTemplate" => "$auteur", ":boekjeplaatjeTemplate" => "$boekplaatje", ":boekdescriptieTemplate" => "$Boekdescriptie");
    
    $sth = $con->prepare($sql);
    $sth->execute($params);
    
    $con = null;
    header("Location: ../boektoevoegen.php");
}
}