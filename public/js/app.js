(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

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

    $('.ui.sticky').sticky({
        context: '#weixin'
    });

    window.notify = function (message, type, time) {
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
    };
});

},{}]},{},[1]);

//# sourceMappingURL=app.js.map
