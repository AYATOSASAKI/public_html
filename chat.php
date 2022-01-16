<?php
    $hand = $_POST["message"];
    switch ($hand){
        case "rock":
            $hand = "paper";
            break;
        case "paper":
            $hand = "scissor";
            break;
        case "scissor":
            $hand = "rock";
            break;
        default:
            $hand = "What is that ?";
            break;
        }
    var_dump($hand);
?>