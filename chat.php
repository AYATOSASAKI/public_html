<?php
    if (isset($_POST["send_button"])) {
        $hand = $_POST["message"];
        switch ($hand){
            case "rock":
                $reaction = "paper";
                break;
            case "paper":
                $reaction = "scissor";
                break;
            case "scissor":
                $reaction = "rock";
                break;
            default:
                $reaction = "What is that ?";
                break;
            }
        var_dump($hand);
        var_dump($reaction);
    }
?>