var vallesMobile = {
    openB24Chat: function () {
        document.querySelector('.b24-widget-button-openline_livechat').click();
        /* setTimeout(function () {
            $('.bx-livechat-control-btn-close').css('background', 'red')

            var allButtons = document.querySelectorAll('.bx-livechat-control-btn-close');
            for (var i = 0; i < allButtons.length; i++) {
                allButtons[i].addEventListener('click', function() {
                    alert()
                    //document.querySelector('.b24-widget-button-crmform').click();
                });
            }
            console.log(1)
        }, 1000) */
    },

    openB24Form: function () {
        document.querySelector('.b24-widget-button-crmform').click();
    },
    openB24Callback: function () {
        document.querySelector('.b24-widget-button-callback').click();
    },
    renderB25WhatsApp: function () {
        $('a[href="#whatsapp"]').attr('href', $('a[href="https://wa.me/79884888030"]').attr('href'))
    }
}