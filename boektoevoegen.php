<?php  include "includes/head.php" ?>
<body>
    
<div id="achtergrond">
    <div id="boektoevoegenwrapper">
        <h1 id="boektoevoegentitel">boek toevoegen</h1>
    <form action="includes/actionboektoevoegen.php" method="post">
<input type="text" class="Boektoevoegeninputs" id="titelboekid" name="titelboek" placeholder="titelboek..."> <br><br>
<input type="text" class="Boektoevoegeninputs" id="auteurid" name="auteur" placeholder=" auteur..."> <br><br>
<textarea placeholder="Boekdescriptie" id="Boekdescriptieid" name="Boekdescriptie" rows="4" cols="50"></textarea> <br>
<input type="file" accept="image/png, image/jpeg" class="Boektoevoegeninputs" id="boekplaatjeid" name="boekplaatje" placeholder=" boekplaatje..."> <br><br>
<input type="submit" id="Opslaan" name="Opslaan"  value="Opslaan" placeholder=" Boekdescriptie..."> <br>
 </form>

 <?php
 if(isset($_GET["Error"])){
    if($_GET["Error"]== "emptyInput"){
     echo "<p> Please fill in all info.</p>";
 }

 if($_GET["Error"] == "invalidName"){
    echo "<p> Invalid name. Probeer iets anders</p>";
}
 }



 ?>
    </div>
</div>

</body>
</html>