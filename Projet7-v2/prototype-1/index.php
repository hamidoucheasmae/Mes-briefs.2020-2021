<?php
 if (isset($_POST['Resultat'])){
$chiffre1 = $_POST['chiffre1'];
$chiffre2 = $_POST['chiffre2'];
$Resultat = $_POST['Resultat'];
$operator = $_POST['operator'];
switch ($operator){ 
    case "null":
        echo "chose a operateur";
    break;
    
    case "adiition":
        echo $_POST['chiffre1']+$_POST['chiffre2'];
    break;
        



}




 }



?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Prototype-1</title>
 </head>
 <body>
     <div class="calcule">
     <form action="" method="POST">
     <input type="text" placeholder="chiffre1" name="chiffre1" ></br>
     <select name="operator">
         <option value="null">  </option>
         <option value="adiition"> + </option>
     </select>
     <input type="text" placeholder="chiffre2" name="chiffre2"></br>
     <button> = </button></br>
     <input type="text" placeholder="Resultat" name="Resultat">



     </form>
     </div>
 </body>
 </html>
