/**
 * Created by bulger on 2017/5/6.
 */
// window.$ = window.jQuery = require('jquery');
$(document).ready(function () {
    $('.ui.dropdown').dropdown();
    $('.ui.checkbox').checkbox();
    $('.j-submit').on('click', function () {
        document.getElementById("logout").submit();
    });

    $('.ui.sticky')
        .sticky({
            context: '#weixin'
        })
    ;

    window.notify = function (message,type, time) {
        new Noty({
            type: type || 'success',
            layout: 'topCenter',
            theme: 'nest',
            text: message,
            timeout: time || 2000,
            progressBar: true,
            closeWith: ['click'],
            animation: {
                open: 'animated fadeIn',
                close: 'animated fadeOut'
            }
        }).show();
    }
});