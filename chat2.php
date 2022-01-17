<?php
    function res(){
        $num = rand(0, 3);
        switch ($num){
            case 0:
                echo "Hi";
                break;
            case 1:
                echo "Hello";
                break;
            case 2:
                echo "I'm a chatbot";
                break;
            case 3:
                echo "What is that ?";
                break;
            }
    }
?>

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

        <script>
            'use strict';
            document.getElementById('form').onsubmit = function(event){
                event.preventDefault();
                const user_input = document.getElementById('form').message.value;
                let user_item = `<p class="user_item">${user_input}</p>`;
                document.getElementById('chat_ul').insertAdjacentHTML('beforeend', user_item);

                let bot_res = "<?php res(); ?>";
                let bot_item = `<p class="bot_item">${bot_res}</p>`;
                const bot = () => {
                    document.getElementById('chat_ul').insertAdjacentHTML('beforeend', bot_item);
                    scrollBy(0, 1000);
                };
                setTimeout(bot, 300);
                form.reset();
                scrollBy(0, 1000);
                bot_res = "<?php res(); ?>";
            };
        </script>
    </body>
</html>