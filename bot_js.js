'use strict';
document.getElementById('use_call').onsubmit = function(event){
    event.preventDefault();
    const user_input = document.getElementById('form').message.value;
    //let bot_hand = '<?php echo $hand; ?>';
    let bot_item = `<p id="bot_response" class="bot_item">${user_input}</p>`;
    const bot = () => {
        document.getElementById('chat_ul').insertAdjacentHTML('beforeend', bot_item);
        scrollBy(0, 1000);
    };
    setTimeout(bot, 300);

    form.reset();
    scrollBy(0, 1000);
};