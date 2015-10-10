    $(document).on("ready", function(){

        // $("button[type= 'submit']").on("click", function(){
             //event.preventDefault();
             var cliente_contactoNombre = {required: true, minlength: 3, maxlength: 6};


            //  $('#form_cliente').validate({
            //     rules:
            //     {
            //         cliente_contactoNombre_0: cliente_contactoNombre,
            //         cliente_contactoNombre_1: cliente_contactoNombre,
            //         cliente_contactoNombre_2: cliente_contactoNombre,
            //         cliente_contactoNombre_3: cliente_contactoNombre,
            //         cliente_contactoNombre_4: cliente_contactoNombre,
            //         cliente_contactoNombre_5: cliente_contactoNombre,
            //         cliente_contactoNombre_6: cliente_contactoNombre,
            //         cliente_contactoNombre_7: cliente_contactoNombre,
            //         cliente_contactoNombre_8: cliente_contactoNombre,
            //         cliente_contactoNombre_9: cliente_contactoNombre,
            //         cliente_contactoNombre_10: cliente_contactoNombre,
            //         cliente_contactoNombre_11: cliente_contactoNombre,
            //         cliente_contactoNombre_12: cliente_contactoNombre,
            //         cliente_contactoNombre_13: cliente_contactoNombre,
            //         cliente_contactoNombre_14: cliente_contactoNombre,
            //         cliente_contactoNombre_15: cliente_contactoNombre,
            //         cliente_contactoNombre_16: cliente_contactoNombre,
            //         cliente_contactoNombre_17: cliente_contactoNombre,
            //         cliente_contactoNombre_18: cliente_contactoNombre,
            //         cliente_contactoNombre_19: cliente_contactoNombre,
            //         cliente_contactoNombre_20: cliente_contactoNombre
            //     },
            //      errorElement: 'div',
            //      submitHandler: function(form) {
            //         validacionCorrecta();
            //       }
            // });

            $('#form_empleado').validate({
                rules:
                {
                    empleado_codigo: {required: true, minlength: 3, maxlength: 6},
                    empleado_id: {required: true, minlength: 3, maxlength: 6}
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

            $('#form_usuario_editar').validate({
                rules:
                {
                    usuario_primeroApellido: {required: true},
                    usuario_nombre: { required: true},
                    usuario_correo: { required:true}
                },
                errorElement: 'div',
                submitHandler: function(form) {
                    validacionCorrecta_UsuariosEditar();
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

            $('#usuario-cambio-imagen').validate({
                rules:
                {
                    userfile: { required: false}
                },
                errorElement: 'div',
                submitHandler: function(form) {
                    validacionCorrecta_Imagen();
                }
            });

            $('#formulario_registro').validate({
            rules:
            {
                registro_cedulaTrabajador: {required: true},
                registro_nombreEmpresaTrabajador: {required: true},
                registro_paisTrabajador: {required: true},
                registro_provinciaTrabajador: {required: true},
                registro_cantonTrabajador: {required: true},
                registro_domicilioTrabajador: {required: true},
                registro_primerApellidoTrabajador: {required: true},
                registro_segundoApellidoTrabajador: {required: true},
                registro_nombreTrabajador: {required: true},
                registro_correoTrabajador: {required: true},
                registro_confirmarCorreoTrabajador: {required: true, equalTo:"#registro_correoTrabajador"},
                registro_contrasenaTrabajador: {required: true},
                registro_confirmarContrasenaTrabajador: {required: true, equalTo:"#registro_contrasenaTrabajador"},

                registro_cedulaEmpresa: {required: true},
                registro_nombreEmpresa: {required: true},
                registro_nombreFantasiaEmpresa: {required: true},
                registro_paisEmpresa: {required: true},
                registro_provinciaEmpresa: {required: true},
                registro_cantonEmpresa: {required: true},
                registro_domicilioEmpresa: {required: true},
                registro_empresaPrimerApellidoContacto: {required: true},
                registro_empresaSegundoApellidoContacto: {required: true},
                registro_empresaNombreContacto: {required: true},
                registro_empresaCorreoContacto: {required: true},
                registro_empresaConfirmarCorreoContacto: {required: true, equalTo:"#registro_empresaCorreoContacto"},
                registro_empresaContrasenaContacto: {required: true},
                registro_empresaConfirmarContrasenaContacto: {required: true, equalTo:"#registro_empresaContrasenaContacto"},

                defaultReal: {required: true}
            },
            errorElement: 'div'//,
            //submitHandler: function(form) {
            //    validacionCorrecta_Registro();
            //}
        });

    });