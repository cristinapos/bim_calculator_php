<?php include 'php/form.php';?>

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
                            placeholder="Type your height (cm)" >
                    </div>
                    <div class="label_input">
                        <label for="weight">Weight:</label>
                        <input type="text"
                            name="weight"
                            value="<?php echo isset($_POST['weight']) ? $_POST['weight'] : '' ?>"
                            placeholder="Type your weight (kg)"
                            >
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
                    <h2 style="color:<?= (isset($text_style)) ? $text_style : ''  ?>">
                        <?= isset($result) ? $result : '';?>
                    </h2>
                    <p class="description">
                        <?= isset($text) ? $text : ''; ?>
                    </p>
                </div>
            </div>
        </section>
        <script src="javascript/index.js"></script>
    </body>
</html>