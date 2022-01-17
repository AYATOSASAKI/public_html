<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
'use strict';
document.getElementById('form').onsubmit = function(event){
    event.preventDefault();
    const user_input = document.getElementById('form').message.value;
    let user_item = `<p id="user_call" class="user_item">${user_input}</p>`;
    document.getElementById('chat_ul').insertAdjacentHTML('beforeend', user_item);

    //let bot_hand = '<?php echo $hand; ?>';
    let bot_item = `<p id="bot_response" class="bot_item">${user_input}</p>`;
    const bot = () => {
        document.getElementById('chat_ul').insertAdjacentHTML('beforeend', bot_item);
        scrollBy(0, 1000);
    };
    setTimeout(bot, 300);

    form.reset();
    scrollBy(0, 1000);

    //event.off();
};