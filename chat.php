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
                <form action="chat.php" method="post" id="form" class="form">
                    <input type="text" name="word" class="text">
                    <input type="submit" name="send" value="send">
                </form>
            </div>

            <?php
                $abc = $_POST["word"];
                if (isset($_POST["send"])){
                    $hand = $_POST["word"];
                    switch ($hand){
                        case 'rock':
                            $hand = 'paper';
                            break;
                        case 'paper':
                            $hand = 'scissor';
                            break;
                        case 'scissor':
                            $hand = 'rock';
                            break;
                        default:
                            $hand = 'What is that ?';
                            break;
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
                
                let bot_hand_js = '<?php echo $abc; ?>';
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