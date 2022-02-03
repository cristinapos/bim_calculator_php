<?php
if ($_POST != null) {
    $height = empty($_POST["height"]) ? 0 : $_POST["height"];
    $weight = empty($_POST["weight"]) ? 0 : $_POST["weight"];

    $result = "";

    if ($height !=0 && $weight !=0) {
        $result = round(($weight/(($height/100) * ($height/100))), 2);
    }

    $text = "";
    $text_style = "black";

    if ($result < 1) {
        $text=" ";
    } elseif ($result < 16) {
        $text = "Underweight (Severe thinness)";
        $result;
        $text_style = "#455A64";
    } elseif ($result < 16.9) {
        $text = "Underweight (Moderate thinness) ";
        $result;
        $text_style = "#E0F2F1";
    } elseif ($result < 18.5) {
        $text = "Underweight (Mild thinness) ";
        $result;
        $text_style = "#39C0ED";
    } elseif ($result < 25) {
        $text = "Normal range";
        $result;
        $text_style = "#1266F1";
    } elseif ($result < 30) {
        $text = "Overweight (Pre-obese)";
        $result;
        $text_style = "#FFA900";
    } elseif ($result < 35) {
        $text = "Obese (Class I) ";
        $result;
        $text_style = "#F93154";
    } elseif ($result < 39.9) {
        $text = "Obese (Class II) ";
        $result;
        $text_style = "#C62828";
    } else {
        $text = "Obese (Class III) ";
        $result;
        $text_style = "#B71C1C";
    }
}
