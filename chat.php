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
                <form action="chat.php" method="POST" id="form" class="form">
                    <input type="text" name="message" class="text">
                    <input type="submit" name="send_button" value="send">      
                </form>
            </div>
        </section>

         


        <script src="chat.js" charset="utf-8"></script>

    </body>
</html>