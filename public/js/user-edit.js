(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

/**
 * Created by bulger on 2017/5/17.
 */
(function ($) {
    var id = $('#userInfo').attr('data-uid');
    $('.edit-menu').on('click', '.item', function () {
        var self = $(this);
        var id = self.attr('data-target');

        self.addClass('active').siblings().removeClass('active');

        $('.edit-menu-wrap > div').addClass('hide');
        $('.edit-menu-wrap').find('#' + id).removeClass('hide');
    });

    $('.special.cards .image').dimmer({
        on: 'hover'
    });

    // 消息推送设置
    $('.j-messageSet [type="checkbox"]').on('change', function () {
        if ($(this).val() == 1) {
            $(this).val(0);
        } else {
            $(this).val(1);
        }
        var data = {};
        $('.j-messageSet [name]').each(function (i, e) {
            data[$(e).attr('name')] = $(e).val();
        });
        $.ajax('/users/' + id + '/edit/message/setting', {
            method: 'post',
            data: data,
            success: function success(res) {
                if (res.code = 200) {
                    window.notify(res.message);
                }
            },
            error: function error() {
                window.notify('服务器错误,请稍后再试', 'error');
            }
        });
    });

    // 隐私设置
    $('.j-privacySet [type="radio"]').on('change', function () {
        var data = {
            '_method': $('.j-privacySet [name="_method"]').val(),
            '_token': $('.j-privacySet [name="_token"]').val()
        };
        $('.j-privacySet [name]:checked').each(function (i, e) {
            data[$(e).attr('name')] = $(e).val();
        });
        console.log(data);

        $.ajax('/users/' + id + '/edit/privacy/setting', {
            method: 'post',
            data: data,
            success: function success(res) {
                if (res.code = 200) {
                    window.notify(res.message);
                }
            },
            error: function error() {
                window.notify('服务器错误,请稍后再试', 'error');
            }
        });
    });
})(jQuery);

},{}]},{},[1]);

//# sourceMappingURL=user-edit.js.map
