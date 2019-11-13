$(function () {
    // $.validator.SetDefaults({
    //     highlight: function (element) {
    //         $(element)
    //             .closest('.form-control')
    //             .addClass('has-error');
    //     }
    // });

    $('#formPoli').validate({
        rules: {
            name: {
                required: true,
                // maxlength: 5
            }
        },
        messages: {
            name: {
                required: '*Tolong input terlebih dahulu',
                // maxlength: 'Hanya bisa 5 karakter'
            }
        }
    });

    $('.formAsuransi').validate({
        rules: {
            name: {
                required: true,
                // minlength: 5
            }
        },
        messages: {
            name: {
                required: '*Tolong input terlebih dahulu',
                // minlength: 'Hanya bisa 5 karakter'
            }
        }
    });

    $('.formLaboratorium').validate({
        rules: {
            nama: {
                required: true,
                // minlength: 5
            }
        },
        messages: {
            nama: {
                required: '*Tolong input terlebih dahulu',
                // minlength: 'Hanya bisa 5 karakter'
            }
        }
    });

});
