    $(document).on("ready", function(){

        // $("button[type= 'submit']").on("click", function(){
             //event.preventDefault();
             var username = {required: true, minlength: 3, maxlength: 6};

            $('#form_empleado').validate({
                rules:
                {
                    empleado_codigo: {required: true, minlength: 3, maxlength: 6},
                    empleado_id: {required: true, minlength: 3, maxlength: 6},
                    username1: username,
                    username2: username,
                    username3: username
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

            $('#form_usuario').validate({
                rules:
                {
                    usuario_primeroApellido: {required: true},
                    usuario_nombre: { required: true},
                    usuario_correo: { required:true},
                    usuario_contrasena: { required:true},
                    usuario_contrasenaConfirm: { required:true, equalTo:"#usuario_contrasena"}
                },
                errorElement: 'div',
                submitHandler: function(form) {
                    validacionCorrecta_Usuarios();
                }
            });

            $('#usuario-cambio-contrasena').validate({
                rules:
                {
                    usuario_contrasena_actual: { required: true},
                    usuario_contrasena_nueva: { required: true},
                    usuario_contrasena_confirmar: { required:true, equalTo:"#usuario_contrasena_nueva"}
                },
                errorElement: 'div',
                submitHandler: function(form) {
                    validacionCorrecta_Contrasena();
                }
            });

    });