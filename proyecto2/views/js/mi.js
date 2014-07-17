    $(document).ready(function() {

	$(function () {
           $('#datetimepicker1').datetimepicker({language: 'es'});
        });

	$('.registerForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                message: 'El campo no es valido',
                validators: {
                    notEmpty: {
                        message: 'El campo no puede estar vacio'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'El campo debe de ser entre 6 y 30 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'El campo solo consiste en caracteres alfabeticos, numericos y guion bajo'
                    }
                }
            }
        }
    });

  

  

});