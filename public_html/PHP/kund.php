
	<form action="index.php" method="post">
  <fieldset>
    <legend>Registrera Kund:</legend>
    <input type="radio" name="kundtyp" value="privat" checked> Privat
    <input type="radio" name="kundtyp" value="foretag"> Företag<br>
    <div class="inputboxes"> 
    Namn:<br> 
    <input type="text" name="namn"><br>
    Gatuadress:<br> 
    <input type="text" name="gatuadress"><br>
    Postnummer:<br> 
    <input type="number" name="postnummer"><br>
    Ort:<br> 
    <input type="text" name="ort"><br>    
    </div>
    <div class="inputboxes">
    IDnummer:<br> 
    <input type="number" name="idnummer"><br>
    Telefonnummer:<br> 
    <input type="tel" name="telefonnummer"><br>
    E-post:<br> 
    <input type="email" name="email"><br>
    </div>
    <div class="clearleft">
    <input type="submit">
    </div>
  </fieldset>
</form>


        <?php
        // define variables and set to empty values
        $namnErr = $idnummerErr = $gatuadressErr = $postnummerErr = $ortErr = $telefonnummerErr = $emailErr = $data = "";
        $namn = $idnummer = $kundtyp = $gatuadress = $postnummer = $ort = $telefonnummer = $email = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            
            if (empty($_POST["namn"])) {
                $namnErr = "Namn saknas!";
            } else {
                $namn = test_input($_POST["namn"]);
                if (!preg_match("/^[a-zA-ZåäöÅÄÖ ]*$/",$namn)) {
                  $namnErr = "Endast bokstäver och tomrum tillåtna!";
                }
            }
            
            if (empty($_POST["idnummer"])){
                $idnummerErr = "ID-nummer saknas.";
            } else {
                $idnummer = test_input($_POST["idnummer"]);
                if (!preg_match("/^[0-9]{10,12}$/",$idnummer)) {
                    $idnummerErr = "ID-numret får endast innehålla siffror och måste vara 10-12 siffror långt!"; 

                }
            }
            
            if (empty($_POST["kundtyp"])) {
                $kundtypErr = "Kundtyp saknas!";
            } else {
                $kundtyp = test_input($_POST["kundtyp"]);  
            }          

            if (empty($_POST["gatuadress"])) {
                $gatuadressErr = "Gatuadress saknas!";
            } else {
                $gatuadress = test_input($_POST["gatuadress"]);
                if (!preg_match("/^[0-9a-zA-ZåäöÅÄÖ ]*$/",$gatuadress)) {
                    $gatuadressErr = "Gatuadressen får endast innehålla bokstäver, siffror och tomrum!"; 
                }
            }

            if (empty($_POST["postnummer"])){
                $postnummerErr = "Postnummer saknas.";
            } else {
                $postnummer = test_input($_POST["postnummer"]);
                if (!preg_match("/^[0-9]{5}$/",$postnummer)) {
                    $postnummerErr = "Postnummret får endast innehålla 5 siffror!"; 
                }
            }

            if (empty($_POST["ort"])) {
                $ortErr = "Ort saknas!";
            } else {
                $ort = test_input($_POST["ort"]);
                if (!preg_match("/^[a-zA-ZåäöÅÄÖ ]*$/",$ort)) {
                  $ortErr = "Endast bokstäver och tomrum tillåtna i orten!"; 
                }
            }
            if (empty($_POST["telefonnummer"])){
                $telefonnummerErr = "Telefonnummer saknas.";
            } else {
                $telefonnummer = test_input($_POST["telefonnummer"]);
                if (!preg_match("/^[0-9]*$/",$telefonnummer)) {
                    $telefonnummerErr = "Telefonnummret får endast innehålla siffror!"; 
                }
            }
            
            if (empty($_POST["email"])) {
                $emailErr = "Email saknas!";
            } else {
                $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = $_POST["email"] . " är inte en giltig email!"; 
                }
            }

        }
        



        echo $namnErr, "<br/>\n",
        $idnummerErr, "<br/>\n",
        $gatuadressErr, "<br/>\n",
        $postnummerErr, "<br/>\n",
        $ortErr, "<br/>\n",
        $telefonnummerErr, "<br/>\n",
        $emailErr, "<br/>\n";
        echo $namn, "<br/>\n",
        $idnummer, "<br/>\n",
        $kundtyp, "<br/>\n",
        $gatuadress, "<br/>\n",
        $postnummer, "<br/>\n",
        $ort, "<br/>\n",
        $telefonnummer, "<br/>\n",
        $email, "<br/>\n";
        ?>

