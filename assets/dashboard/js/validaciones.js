    $(document).on("ready", function(){

        // $("button[type= 'submit']").on("click", function(){
             //event.preventDefault();
            $('#form_empleado').validate({
                rules:
                {
                    empleado_codigo: {required: true, minlength: 3, maxlength: 6},
                    empleado_id: {required: true, minlength: 3, maxlength: 6},
                    username: {required: true, minlength: 3, maxlength: 6}
                    // empleado_primerApellido: {required: true, minlength: 3, maxlength: 6},
                    // empleado_segundoApellido: {required: true, minlength: 3, maxlength: 6},
                    // empleado_nombre: {required: true, minlength: 3, maxlength: 6},
                    // empleado_descripcion: {minlength: 3, maxlength: 250}, 
                    // empleado_fechaNacimiento: {required: true, date: true}
                },
                 errorElement: 'div',
                 submitHandler: function(form) {
                    validacionCorrecta();
                  }
            });

            $('#form_empleado_agregarSalario').validate({
                rules:
                {
                    salario_monto: {required: true, minlength: 3, maxlength: 6}
                },
                 errorElement: 'div',
                 submitHandler: function(form) {
                    validacionCorrecta_agregarSalario();
                  }
            });

            $('#form_login').validate({
                rules:
                {
                    username: {required: true, minlength: 3, maxlength: 6},
                    password: {required: true, minlength: 3, maxlength: 6}
                },
                 errorElement: 'div',
                 submitHandler: function(form) {
                    validacionCorrecta_login();
                  }
            });

            

    });