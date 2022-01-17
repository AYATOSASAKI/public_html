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

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
        <script>
            'use strict';
            $('form').submit();
            document.getElementById('form').onsubmit = function(event){
                event.preventDefault();
                const user_input = document.getElementById('form').message.value;
                let user_item = `<p class="user_item">${user_input}</p>`;
                document.getElementById('chat_ul').insertAdjacentHTML('beforeend', user_item);
            
                //let bot_hand = '<?php echo $hand; ?>';
                let bot_item = `<p class="bot_item">${user_input}</p>`;
                const bot = () => {
                    document.getElementById('chat_ul').insertAdjacentHTML('beforeend', bot_item);
                    scrollBy(0, 1000);
                };
                setTimeout(bot, 300);
            
                form.reset();
                scrollBy(0, 1000);
            };
        </script>
    </body>
</html>