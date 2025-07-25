import $ from 'jquery';
import './bootstrap';
import Toggle from "./components/Toggle.js";

window.$ = $;
window.jQuery = $;

$(document).ready(function () {
    const toggle = new Toggle('#toggle');

    $('#button').on('click', function () {
        toggle.hide()
    })
})
