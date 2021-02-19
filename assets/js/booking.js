//*** Function (Start)
function inputNumberFunction(ctrl) {

    $(ctrl).keydown(function (event) {
        // Allow:  delete, tab, enter and . - , f5 

        if ($.inArray(event.keyCode, [8, 9, 27, 13, 46, 109, 110, 190, 189, 116]) !== -1 ||
        // Allow: Ctrl+A

            (event.keyCode == 65 && event.ctrlKey === true) ||
        // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                event.preventDefault();
            }
        }
    });

    $(ctrl).change(function () {
        var value = $(this).val();
        if (isNaN(value)) {
            $(this).val('0');
              alert('Require Number!');
              $(this).focus();
        }
    });

}
//*** Function (End)