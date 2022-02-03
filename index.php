<?php

if($_POST!=null)
{
    $height=empty($_POST["height"]) ? 0 : $_POST["height"];
    $weight=empty($_POST["weight"]) ? 0 : $_POST["weight"];
    $result="";
    if($height !=0 && $weight !=0)
        $result = round(($weight/(($height/100) * ($height/100))),2);

    $text="";
    $text_style="black";
    if ($result < 1) {
     $text=" ";
    } else if ($result < 16) {
        $text="Underweight (Severe thinness)";
        $result;
        $text_style="#455A64";
    }else if ($result < 16.9) {
        $text="Underweight (Moderate thinness) ";
        $result;
        $text_style="#E0F2F1";
    }else if ($result < 18.5) {
        $text="Underweight (Mild thinness) ";
        $result;
        $text_style="#39C0ED";
    } else if ($result < 25) {
        $text="Normal range";
        $result;
        $text_style="#1266F1";
    } else if ($result < 30) {
        $text="Overweight (Pre-obese)";
        $result;
        $text_style="#FFA900";
    } else if ($result < 35) {
        $text="Obese (Class I) ";
        $result;
        $text_style="#F93154";
    } else if ($result < 39.9) {
        $text="Obese (Class II) ";
        $result;
        $text_style="#C62828";
    } else {
        $text="Obese (Class III) ";
        $result;
        $text_style="#B71C1C";
    }
}

?>


<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>BMI</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="container_section">
        <h1 class="title">BMI Calculator</h1>
        <div class="information">
            <p>
                Body mass index (BMI) is a value derived from the mass (weight) and height of a person.
                The BMI is defined as the body mass divided by the square of the body height, and is expressed
                in units of kg/m2, resulting from mass in kilograms and height in metres.
            </p>
        </div>
        <div class="formular">
            <form method="post">
                        <div class="label_input">
                            <label for="height">Height:</label>
                            <input type="text"
                                   name="height"
                                   value="<?php echo isset($_POST['height']) ? $_POST['height'] : '' ?>"
                                   placeholder="Type your height (cm)"/>
                        </div>
                        <div class="label_input">
                            <label for="weight">Weight:</label>
                            <input type="text"
                                    name="weight"
                                    value="<?php echo isset($_POST['weight']) ? $_POST['weight'] : '' ?>"
                                   placeholder="Type your weight (kg)"/>
                        </div>
                        <div class="buttons">
                            <button class="button_one"type="sumbit">
                                Calculate
                            </button>
                            <button class="button_two" type="submit">
                                Reset
                            </button>
                        </div>

                    </form>
                    <div class="text" id="text">
                            <h2 style="color:<?php echo $text_style ?>">
                                <?php
                                  echo $result;
                                ?>
                            </h2>
                            <p class="description">
                                <?php
                                  echo $text;
                                ?>
                            </p>
                        </div>
        </div>
    </section>
</body>
</html>