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
                <form action="#" method="post" id="form" class="form">
                    <input type="text" name="word" class="text">
                    <input type="submit" name="send" value="send">
                </form>
            </div>

            <?php
            print("a");
                if (isset($_POST["send"])){
                    $hand = $_POST["word"];
                    if ($hand = 'rock'){
                        $bot_hand = 'paper';
                    }else if($hand = 'scissor'){
                        $bot_hand = 'rock';
                    }else if($hand = 'paper'){
                        $bot_hand = 'scissor';
                    }else{
                        $bot_hand = 'What is this ?';
                    }
                }
            ?>
        </section>

        <script>
            'use strict';
            document.getElementById('form').onsubmit = function(event){
                event.preventDefault();
                const user_input = document.getElementById('form').word.value;
                let user_item = `<p class="user_item">${user_input}</p>`;
                document.getElementById('chat_ul').insertAdjacentHTML('beforeend', user_item);
                
                let bot_hand_js = '<?php echo $bot_hand; ?>';
                let bot_item = `<p class="bot_item">${bot_hand_js}</p>`;
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