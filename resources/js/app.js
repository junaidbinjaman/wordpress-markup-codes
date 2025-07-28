import $ from 'jquery';
import './bootstrap';
import Toggle from "./components/Toggle.js";

window.$ = $;
window.jQuery = $;

(function ($) {
    $(document).ready(function () {
        const toggle = new Toggle('#foobar', '.bill-monthly', '.bill-annually');

        $('#billSwitch').on('click', function () {
            toggle.toggle()
        });

        setInterval(() => {
            $("#myImg").effect("bounce", {
                times: 1,
                distance: 10
            }, 300);
        }, 600)
    })

})(jQuery)
