$(document).ready(function () {
    $('.datepicker-f').datetimepicker({
        format: "YYYY-MM-DD",
        icons: {
            up: 'fa fa-angle-up',
            down: 'fa fa-angle-down',
            previous: 'fa fa-angle-left',
            next: 'fa fa-angle-right',
        },
        minDate: moment()
    });
});