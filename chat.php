<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="chat.css" type="text/css">
        <title>simple chatbot</title>
    </head>
    <body>
        <section>
            <div id="chat" class="chat"><br>
                <ul id="chat_ul" class="chat_ul">
                </ul><br><br><br><hr>
            </div>

            <div id="form_style" class="form_style">
                <form method="GET" id="form" class="form">
                    <input type="text" name="message" class="text">
                    <input type="submit" name="send_button" value="send">      
                </form>
            </div>
        </section>

        <script src="chat.js" charset="utf-8"></script>

        <?php
            if (isset($_GET["send_button"])) {
                $hand = $_GET["message"];
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
        <script src="bot_js.js" charset="utf-8"></script>

    </body>
</html>