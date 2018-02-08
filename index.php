<!DOCTYPE HTML> 
<?php
include 'General.php';
$conn = connectionDB();
?>
<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>  

        <?php
        if (isset($_POST['naam']) &&
                isset($_POST['achternaam']) &&
                isset($_POST['email']) &&
                isset($_POST['review']) &&
                isset($_POST['beoordeling'])) {
            $naam = get_post($conn, 'naam');
            $achternaam = get_post($conn, 'achternaam');
            $email = get_post($conn, 'email');
            $review = get_post($conn, 'review');
            $beoordeling = get_post($conn, 'beoordeling');
            $query = "INSERT INTO `reviews`"
                    . "(`naam`, `achternaam`, `email`, `review`, `beoordeling`)"
                    . " VALUES ('" . $naam . "','" . $achternaam . "','" . $email . "','"
                    . $review . "','" . $beoordeling . "')";
            $result = $conn->query($query);



            if (!$result)
                echo "INSERT failed: $query<br>" .
                $conn->error . "<br><br>";
        }
// define variables and set to empty values
        $naamErr = $achternaamErr = $emailErr = $beoordelingErr = "";
        $naam = $achternaam = $email = $beoordeling = $review = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["naam"])) {
                $naamErr = "Uw voornaam is niet ingevuld";
            } else {
                $naam = test_input($_POST["naam"]);
                // check if naam only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $naam)) {
                    $naamErr = "Alleen letters en spaties";
                }
            }

            if (empty($_POST["achternaam"])) {
                $achternaamErr = "Uw achternaam is niet ingevuld";
            } else {
                $achternaam = test_input($_POST["achternaam"]);
                // check if naam only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $achternaam)) {
                    $achternaamErr = "Alleen letters en spaties";
                }
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email is niet ingevuld";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Voer een geldig e-mailadres in";
                }
            }


            if (empty($_POST["review"])) {
                $review = "";
            } else {
                $review = test_input($_POST["review"]);
            }

            if (empty($_POST["beoordeling"])) {
                $beoordelingErr = "U heeft geen beoordeling gegeven";
            } else {
                $beoordeling = test_input($_POST["beoordeling"]);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <h2>Review de Hersteltrainer</h2>
        <p><span class="error">* verplicht veld.</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">  
            Voornaam: <input type="text" name="naam" value="<?php echo $naam; ?>">
            <span class="error">* <?php echo $naamErr; ?></span>
            <br><br>
            Achternaam: <input type="text" name="achternaam" value="<?php echo $achternaam; ?>">
            <span class="error">* <?php echo $achternaamErr; ?></span>
            <br><br>
            E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error">* <?php echo $emailErr; ?></span>
            <br><br>
            Review: <textarea name="review" rows="5" cols="40"><?php echo $review; ?></textarea>
            <br><br>
            Beoordeling:
            <input type="radio" name="beoordeling" <?php if (isset($beoordeling) && $beoordeling == "uitstekend") echo "checked"; ?> value="uitstekend">Uitstekend
            <input type="radio" name="beoordeling" <?php if (isset($beoordeling) && $beoordeling == "goed") echo "checked"; ?> value="goed">Goed
            <input type="radio" name="beoordeling" <?php if (isset($beoordeling) && $beoordeling == "matig") echo "checked"; ?> value="matig">Matig
            <input type="radio" name="beoordeling" <?php if (isset($beoordeling) && $beoordeling == "slecht") echo "checked"; ?> value="slecht">Slecht
            <input type="radio" name="beoordeling" <?php if (isset($beoordeling) && $beoordeling == "nietAanbevelen") echo "checked"; ?> value="nietAanbevelen">Niet aan te bevelen

            <span class="error">* <?php echo $beoordelingErr; ?></span>
            <br><br>
            <input type="submit" name="submit" value="Stuur!">  
        </form>

        <?php
        echo "<h2>Uw invoer:</h2>";
        echo $naam;
        echo "<br>";
        echo $achternaam;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $review;
        echo "<br>";
        echo $beoordeling;
        ?>

    </body>
</html>