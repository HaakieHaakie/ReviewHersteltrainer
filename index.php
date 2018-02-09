<!DOCTYPE HTML> 
<?php
include 'General.php';
$conn = connectionDB();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>

            .error {color: #FF0000;}
            #pre {
                color: #4a4b63;
            }

            .field_set{
                border-color:#DA3701;
                border-radius: 25px;  
            }


            .item1 { grid-area: header; }
            .item2 { grid-area: menu; }
            .item3 { grid-area: main; } 
            .item4 { grid-area: view; }
            .item5 { grid-area: right; }
            .item6 { grid-area: footer; }

            .grid-container {
                display: grid;
                grid-template-areas:
                    'header header header header header'
                    'menu main main main right'
                    'menu view view view right'
                    'footer footer footer footer footer';
                /*                grid-gap: 1px;
                                background-color: #DA3701;
                                padding: 1px;*/
            }
            .grid-container > div {
                background-color: rgba(255, 255, 255, 1);
                text-align: center;
                padding: 20px 0;
                font-size: 15px;
            }
            .grid-container > .item1 {
                background-color: black;
                left: 38.27px;
                top: -68.41px;
                font-family: 'Open Sans';
                font-weight: 800;
                font-size: 64px;
                color: #DA3701;
            }

            .grid-container > .item4 {
                background-color: #ececec;
                border-radius: 25px;
                font-family: 'Open Sans';
                font-weight: 800;
                font-size: 14px;
                color: #DA3701;
            }

            .grid-container > .item2 {
                width: 200px;
            }
            .grid-container > .item5 {
                width: 200px;
            }
        </style>
    </head>
    <body>  
        <div class="grid-container">
            <div class="item1">Header</div>
            <div class="item2">Menu</div>




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
            <div class="item3">Main
                <h2>Review de Hersteltrainer</h2>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <fieldset class="field_set">
                        <legend><p><span class="error">* verplicht veld.</span></p></legend>
                        <div id="input">
                            <b>Voornaam:</b><br> <input type="text" name="naam" value="<?php echo $naam; ?>">
                            <span class="error">* <?php echo $naamErr; ?></span>
                            <br><br>
                            <b>Achternaam:</b><br> <input type="text" name="achternaam" value="<?php echo $achternaam; ?>">
                            <span class="error">* <?php echo $achternaamErr; ?></span>
                            <br><br>
                            <b>E-mail:</b><br> <input type="text" name="email" value="<?php echo $email; ?>">
                            <span class="error">* <?php echo $emailErr; ?></span>
                            <br><br>
                            <b>Review:</b><br> <textarea name="review" rows="5" cols="40"><?php echo $review; ?></textarea>
                            <br><br>
                            <b>Beoordeling:</B><br>
                            <input type="radio" name="beoordeling" <?php if (isset($beoordeling) && $beoordeling == "uitstekend") echo "checked"; ?> value="uitstekend">Uitstekend
                            <input type="radio" name="beoordeling" <?php if (isset($beoordeling) && $beoordeling == "goed") echo "checked"; ?> value="goed">Goed
                            <input type="radio" name="beoordeling" <?php if (isset($beoordeling) && $beoordeling == "matig") echo "checked"; ?> value="matig">Matig
                            <input type="radio" name="beoordeling" <?php if (isset($beoordeling) && $beoordeling == "slecht") echo "checked"; ?> value="slecht">Slecht
                            <input type="radio" name="beoordeling" <?php if (isset($beoordeling) && $beoordeling == "nietAanbevelen") echo "checked"; ?> value="nietAanbevelen">Niet aan te bevelen

                            <span class="error">* <?php echo $beoordelingErr; ?></span>
                            <br><br>
                            <input type="submit" name="submit" value="Stuur!">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="item4">view

                <?php
                echo "<h2>Uw invoer:</h2>";
                echo "<i>$naam</i>";
                echo "<br>";
                echo "<i>$achternaam</i>";
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $review;
                echo "<br>";
                echo $beoordeling;
                ?>
            </div>

            <div class="item4">
                <div>
                    <?php
                    $conn = connectionDB();
                    if ($conn->connect_error)
                        die($conn->connect_error);

                    $query = "SELECT * FROM reviews";
                    $result = $conn->query($query);
                    if (!$result)
                        die("Database access failed: " . $conn->error);

                    $rows = $result->num_rows;

                    for ($j = 0; $j < $rows; ++$j) {
                        $result->data_seek($j);
                        $row = $result->fetch_array(MYSQLI_NUM);
                        echo <<<_END
      <br><br>Naam :<span id="pre"> $row[1] $row[2]</span><br>
       Beoordeling :<span id="pre"> $row[5]</span>               
<pre></pre>
Review:<div id="pre">$row[4]</div><br><br><hr> 
_END;
                    }

                    $result->close();
                    $conn->close();
                    ?>
                </div>
            </div>
            <div class="item5">Right</div>
            <div class="item6">Footer</div>
        </div>
    </body>
</html>