    

    $(document).on("ready", function(){

        // $("button[type= 'submit']").on("click", function(){
             //event.preventDefault();
             
             $.validator.setDefaults({ ignore: ":hidden:not(select)" });// permite la validacion de los selects que usan el plugin chosen plugin



             var reglasImpuesto =  {
                    impuesto_nombre: {required: true, maxlength: 45},
                    impuesto_descripcion: {required: false, maxlength: 45},
                    impuesto_valor: {required: true, max: 99.99, min: 0}

                };

            $('#form_impuesto').validate({
                rules: reglasImpuesto,
                 errorElement: 'div',
                 submitHandler: function(form) {
                    validacionCorrecta();
                  }
            });

            $('#form_impuestoEditar').validate({
                rules: reglasImpuesto,
                 errorElement: 'div',
                 submitHandler: function(form) {
                    validacionCorrectaEditar();
                  }
            });

             var cliente_contactoNombre = {required: true, maxlength: 45};
             var cliente_contactoApellido1 = {required: true, maxlength: 45};
             var cliente_contactoApellido2 = {required: false, maxlength: 45};
             var cliente_contactoCorreo = {required: true, maxlength: 45};
             var cliente_contactoPuesto = {required: true, maxlength: 45};
             var cliente_contactoTelefono = {required: true, maxlength: 45};
             var reglasCliente = {
                cliente_contactoNombre_0: cliente_contactoNombre,
                cliente_contactoNombre_1: cliente_contactoNombre,
                cliente_contactoNombre_2: cliente_contactoNombre,
                cliente_contactoNombre_3: cliente_contactoNombre,
                cliente_contactoNombre_4: cliente_contactoNombre,
                cliente_contactoNombre_5: cliente_contactoNombre,
                cliente_contactoNombre_6: cliente_contactoNombre,
                cliente_contactoNombre_7: cliente_contactoNombre,
                cliente_contactoNombre_8: cliente_contactoNombre,
                cliente_contactoNombre_9: cliente_contactoNombre,
                cliente_contactoNombre_10: cliente_contactoNombre,

                cliente_contactoApellido1_0: cliente_contactoApellido1,
                cliente_contactoApellido1_1: cliente_contactoApellido1,
                cliente_contactoApellido1_2: cliente_contactoApellido1,
                cliente_contactoApellido1_3: cliente_contactoApellido1,
                cliente_contactoApellido1_4: cliente_contactoApellido1,
                cliente_contactoApellido1_5: cliente_contactoApellido1,
                cliente_contactoApellido1_6: cliente_contactoApellido1,
                cliente_contactoApellido1_7: cliente_contactoApellido1,
                cliente_contactoApellido1_8: cliente_contactoApellido1,
                cliente_contactoApellido1_9: cliente_contactoApellido1,
                cliente_contactoApellido1_10: cliente_contactoApellido1,


                cliente_contactoApellido2_0: cliente_contactoApellido2,
                cliente_contactoApellido2_1: cliente_contactoApellido2,
                cliente_contactoApellido2_2: cliente_contactoApellido2,
                cliente_contactoApellido2_3: cliente_contactoApellido2,
                cliente_contactoApellido2_4: cliente_contactoApellido2,
                cliente_contactoApellido2_5: cliente_contactoApellido2,
                cliente_contactoApellido2_6: cliente_contactoApellido2,
                cliente_contactoApellido2_7: cliente_contactoApellido2,
                cliente_contactoApellido2_8: cliente_contactoApellido2,
                cliente_contactoApellido2_9: cliente_contactoApellido2,
                cliente_contactoApellido2_10: cliente_contactoApellido2,

                cliente_contactoPuesto_0: cliente_contactoPuesto,
                cliente_contactoPuesto_1: cliente_contactoPuesto,
                cliente_contactoPuesto_2: cliente_contactoPuesto,
                cliente_contactoPuesto_3: cliente_contactoPuesto,
                cliente_contactoPuesto_4: cliente_contactoPuesto,
                cliente_contactoPuesto_5: cliente_contactoPuesto,
                cliente_contactoPuesto_6: cliente_contactoPuesto,
                cliente_contactoPuesto_7: cliente_contactoPuesto,
                cliente_contactoPuesto_8: cliente_contactoPuesto,
                cliente_contactoPuesto_9: cliente_contactoPuesto,
                cliente_contactoPuesto_10: cliente_contactoPuesto,

                cliente_contactoCorreo_0: cliente_contactoCorreo,
                cliente_contactoCorreo_1: cliente_contactoCorreo,
                cliente_contactoCorreo_2: cliente_contactoCorreo,
                cliente_contactoCorreo_3: cliente_contactoCorreo,
                cliente_contactoCorreo_4: cliente_contactoCorreo,
                cliente_contactoCorreo_5: cliente_contactoCorreo,
                cliente_contactoCorreo_6: cliente_contactoCorreo,
                cliente_contactoCorreo_7: cliente_contactoCorreo,
                cliente_contactoCorreo_8: cliente_contactoCorreo,
                cliente_contactoCorreo_9: cliente_contactoCorreo,
                cliente_contactoCorreo_10: cliente_contactoCorreo,

                cliente_contactoTelefono_0: cliente_contactoTelefono,
                cliente_contactoTelefono_1: cliente_contactoTelefono,
                cliente_contactoTelefono_2: cliente_contactoTelefono,
                cliente_contactoTelefono_3: cliente_contactoTelefono,
                cliente_contactoTelefono_4: cliente_contactoTelefono,
                cliente_contactoTelefono_5: cliente_contactoTelefono,
                cliente_contactoTelefono_6: cliente_contactoTelefono,
                cliente_contactoTelefono_7: cliente_contactoTelefono,
                cliente_contactoTelefono_8: cliente_contactoTelefono,
                cliente_contactoTelefono_9: cliente_contactoTelefono,
                cliente_contactoTelefono_10: cliente_contactoTelefono,

                cliente_id: {required: true, maxlength: 45},
                cliente_apellido1: {required: true, maxlength: 45},
                cliente_apellido2: {required: false, maxlength: 45},
                cliente_nombre: {required: true, maxlength: 45},
                cliente_correo: {required: true, maxlength: 45},
                cliente_telefonoMovil: {required: true, maxlength: 45},
                cliente_telefono: {required: true, maxlength: 45},
                cliente_fechaNacimiento: {required: true, maxlength: 45},

                clientejuridico_id: {required: true, maxlength: 45},
                clientejuridico_nombre: {required: true, maxlength: 45},
                clientejuridico_nombreFantasia: {required: true, maxlength: 45},
                clientejuridico_correo: {required: true, maxlength: 45},
                clientejuridico_telefono: {required: true, maxlength: 45},
                clientejuridico_fax: {required: true, maxlength: 45},

                 // cliente_direccionPais: {required: true, maxlength: 45},
                 cliente_direccionProvincia: {required: true, maxlength: 45},
                 cliente_direccionCanton: {required: true, maxlength: 45},
                 cliente_direccionDomicilio: {required: false, maxlength: 200},

                cliente_descuento: {required: true, maxlength: 45}
             };


             $('#form_cliente').validate({
                rules: reglasCliente,
                 errorElement: 'div',
                 submitHandler: function(form) {
                    validacionCorrecta();
                  }
            });
            $('#cliente-cambio-imagen').validate({
                rules:
                {
                    userfile: { required: false}
                },
                errorElement: 'div',
                submitHandler: function(form) {
                    validacionCorrecta_Imagen();
                }
            });

        
            var subfase_codigo = {required: true, maxlength: 45};
            var subfase_nombre = {required: true, maxlength: 45};
            var subfase_notas = {required: true, maxlength: 200};
            var reglasFases =  {
                    fase_codigo: {required: true, maxlength: 45},
                    fase_nombre: {required: true, maxlength: 45},
                    fase_notas: {required: true, maxlength: 200},

                    fase_codigo0: subfase_codigo,
                    fase_codigo1: subfase_codigo,
                    fase_codigo2: subfase_codigo,
                    fase_codigo3: subfase_codigo,
                    fase_codigo4: subfase_codigo,
                    fase_codigo5: subfase_codigo,
                    fase_codigo6: subfase_codigo,
                    fase_codigo7: subfase_codigo,
                    fase_codigo8: subfase_codigo,
                    fase_codigo9: subfase_codigo,
                    fase_codigo10: subfase_codigo,

                    fase_nombre0: subfase_nombre,
                    fase_nombre1: subfase_nombre,
                    fase_nombre2: subfase_nombre,
                    fase_nombre3: subfase_nombre,
                    fase_nombre4: subfase_nombre,
                    fase_nombre5: subfase_nombre,
                    fase_nombre6: subfase_nombre,
                    fase_nombre7: subfase_nombre,
                    fase_nombre8: subfase_nombre,
                    fase_nombre9: subfase_nombre,
                    fase_nombre10: subfase_nombre,

                    fase_notas0: subfase_notas,
                    fase_notas1: subfase_notas,
                    fase_notas2: subfase_notas,
                    fase_notas3: subfase_notas,
                    fase_notas4: subfase_notas,
                    fase_notas5: subfase_notas,
                    fase_notas6: subfase_notas,
                    fase_notas7: subfase_notas,
                    fase_notas8: subfase_notas,
                    fase_notas9: subfase_notas,
                    fase_notas10: subfase_notas

                };

            $('#form_fases').validate({
                rules: reglasFases,
                 errorElement: 'div',
                 submitHandler: function(form) {
                    validacionCorrecta();
                  }
            });


            $('#formGasto').validate({
                rules:
                {
                    nuevoGasto_codigo: {required: true, maxlength: 45},
                    nuevoGasto_gasto: {required: true, maxlength: 45},
                    nuevoGasto_monto: {required: true, maxlength: 45}
                },
                 errorElement: 'div',
                 submitHandler: function(form) {
                    validacionCorrecta();
                  }
            });

            $('#formServicio').validate({
                rules:
                {
                    servicio_codigo: {required: true, maxlength: 45},
                    servicio_nombre: {required: true, maxlength: 45},
                    servicio_descripcion: {required: false, maxlength: 200},
                    servicio_utilidad: {required: true, maxlength: 45}
                },
                errorElement: 'div',
                submitHandler: function(form){
                    validacionCorrecta();
                }
            });

            $('#form_fasesEditar').validate({
                rules: reglasFases,
                 errorElement: 'div',
                 submitHandler: function(form) {
                    validacionCorrectaEditar();
                  }
            });

            $('#formGeneral').validate({
                rules:
                {
                    paso1_codigo: {required: true, maxlength: 45},
                    paso1_numero: {required: true, maxlength: 45},
                    contenedorSelectCliente: {required: true},
                    contenedorSelectAtencion: {required: true},
                    contenedorSelectFormaPago: {required: true},
                    contenedorSelectMoneda: {required: true},
                    paso1_validez: {required: true, maxlength: 45},
                    paso1_tipoCambio: {required: true, maxlength: 45},
                    paso1_detalle: {required: true, maxlength: 45}
                },
                errorElement: 'div',
                submitHandler: function(form){
                    validacionCorrecta();
                }
            });

            $('#form_paso3AgregarPlantilla').validate({
                rules:
                {
                    nombrePlantilla: {required: true, minlength: 3, maxlength: 20}
                },
                 errorElement: 'div',
                 submitHandler: function(form) {
                    validacionCorrecta();
                  }
            });

            

            $('#formEnvio').validate({
                rules:
                {
                    envio_asunto: {required: true}
                },
                 errorElement: 'div',
                 submitHandler: function(form) {
                    validacionCorrecta();
                  }
            });

            $('#formRechazar').validate({
                rules:
                {
                    envio_asunto: {required: true},
                    envio_texto: {required: true}
                },
                 errorElement: 'div',
                 submitHandler: function(form) {
                    validacionCorrectaRechazar();
                  }
            });

            

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
                    username: {required: true, minlength: 3},
                    password: {required: true, minlength: 3}
                },
                 errorElement: 'div',
                 submitHandler: function(form) {
                    validacionCorrecta_login();
                  }
            });

            // $('#form_usuario').validate({
            //     rules:
            //     {
            //         usuario_primeroApellido: {required: true},
            //         usuario_nombre: { required: true},
            //         usuario_correo: { required:true},
            //         usuario_contrasena: { required:true},
            //         usuario_contrasenaConfirm: { required:true, equalTo:"#usuario_contrasena"}
            //     },
            //     errorElement: 'div',
            //     submitHandler: function(form) {
            //         validacionCorrecta_Usuarios();
            //     }
            // });

            var reglasUsuario = {
                usuario_primeroApellido: {required: true, maxlength: 45},
                usuario_segundoApellido: {required: false, maxlength: 45},
                usuario_nombre: {required: true, maxlength: 45},
                usuario_correo: {required: true, maxlength: 45},
                usuario_contrasena: {required: true, maxlength: 45},
                usuario_contrasenaConfirm: {required: true, equalTo: "#usuario_contrasena"}
            };

            $('#form_usuario').validate({
                rules: reglasUsuario,
                errorElement: 'div',
                submitHandler: function(form) {
                    validacionCorrecta_Usuarios();
                }
            });

            $('#form_usuario_editar').validate({
                rules:
                {
                    usuario_correo: {required: true},
                    usuario_primerApellido: {required: true, maxlength: 45},
                    usuario_segundoApellido: {required: false, maxlength: 45},
                    usuario_nombre: {required: true, maxlength: 45}
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
                registro_segundoApellidoTrabajador: {required: false},
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
                registro_empresaSegundoApellidoContacto: {required: false},
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

            var reglasArchivo = {
                userfile: { required: false},
                archivo_descripcion: { required: true}
            }

            $('#cliente-archivo').validate({
                rules: reglasArchivo,
                errorElement: 'div',
                submitHandler: function(form) {
                    validacionCorrecta_Archivo();
                }
            });


            var proveedor_contactoNombre = {required: true, maxlength: 45};
            var proveedor_contactoApellido1 = {required: true, maxlength: 45};
            var proveedor_contactoApellido2 = {required: false, maxlength: 45};
            var proveedor_contactoCorreo = {required: true, maxlength: 45};
            var proveedor_contactoPuesto = {required: true, maxlength: 45};
            var proveedor_contactoTelefono = {required: true, maxlength: 45};
            var reglasPersona = {
                proveedor_contactoNombre_0: proveedor_contactoNombre,
                proveedor_contactoNombre_1: proveedor_contactoNombre,
                proveedor_contactoNombre_2: proveedor_contactoNombre,
                proveedor_contactoNombre_3: proveedor_contactoNombre,
                proveedor_contactoNombre_4: proveedor_contactoNombre,
                proveedor_contactoNombre_5: proveedor_contactoNombre,
                proveedor_contactoNombre_6: proveedor_contactoNombre,

                proveedor_contactoApellido1_0: proveedor_contactoApellido1,
                proveedor_contactoApellido1_1: proveedor_contactoApellido1,
                proveedor_contactoApellido1_2: proveedor_contactoApellido1,
                proveedor_contactoApellido1_3: proveedor_contactoApellido1,
                proveedor_contactoApellido1_4: proveedor_contactoApellido1,
                proveedor_contactoApellido1_5: proveedor_contactoApellido1,
                proveedor_contactoApellido1_6: proveedor_contactoApellido1,

                proveedor_contactoApellido2_0: proveedor_contactoApellido2,
                proveedor_contactoApellido2_1: proveedor_contactoApellido2,
                proveedor_contactoApellido2_2: proveedor_contactoApellido2,
                proveedor_contactoApellido2_3: proveedor_contactoApellido2,
                proveedor_contactoApellido2_4: proveedor_contactoApellido2,
                proveedor_contactoApellido2_5: proveedor_contactoApellido2,
                proveedor_contactoApellido2_6: proveedor_contactoApellido2,

                proveedor_contactoCorreo_0: proveedor_contactoCorreo,
                proveedor_contactoCorreo_1: proveedor_contactoCorreo,
                proveedor_contactoCorreo_2: proveedor_contactoCorreo,
                proveedor_contactoCorreo_3: proveedor_contactoCorreo,
                proveedor_contactoCorreo_4: proveedor_contactoCorreo,
                proveedor_contactoCorreo_5: proveedor_contactoCorreo,
                proveedor_contactoCorreo_6: proveedor_contactoCorreo,

                proveedor_contactoPuesto_0: proveedor_contactoPuesto,
                proveedor_contactoPuesto_1: proveedor_contactoPuesto,
                proveedor_contactoPuesto_2: proveedor_contactoPuesto,
                proveedor_contactoPuesto_3: proveedor_contactoPuesto,
                proveedor_contactoPuesto_4: proveedor_contactoPuesto,
                proveedor_contactoPuesto_5: proveedor_contactoPuesto,
                proveedor_contactoPuesto_6: proveedor_contactoPuesto,

                proveedor_contactoTelefono_0: proveedor_contactoTelefono,
                proveedor_contactoTelefono_1: proveedor_contactoTelefono,
                proveedor_contactoTelefono_2: proveedor_contactoTelefono,
                proveedor_contactoTelefono_3: proveedor_contactoTelefono,
                proveedor_contactoTelefono_4: proveedor_contactoTelefono,
                proveedor_contactoTelefono_5: proveedor_contactoTelefono,
                proveedor_contactoTelefono_6: proveedor_contactoTelefono,

                persona_identificacion: { required: true, maxlength: 45},
                persona_apellido1: { required: true, maxlength: 45},
                persona_apellido2: { required: false, maxlength: 45},
                persona_nombre: { required: true, maxlength: 45},
                persona_correo: { required: true, maxlength: 45},
                persona_telefonoMovil: { required: true, maxlength: 45},
                persona_telefono: { required: true, maxlength: 45},
                persona_fechaNacimiento: { required: true, maxlength: 45},
                personajuridico_identificacion: { required: true, maxlength: 45},
                personajuridico_nombre: { required: true, maxlength: 45},
                personajuridico_nombreFantasia: { required: true, maxlength: 45},
                personajuridico_correo: { required: true, maxlength: 45},
                personajuridico_telefono: { required: true, maxlength: 45},
                personajuridico_fax: { required: true, maxlength: 45},
                persona_palabras: { required: true, maxlength: 45},
                persona_descripcion: { required: false, maxlength: 200},
                 persona_direccionPais: { required: false, maxlength: 45},
                 persona_direccionProvincia: { required: true, maxlength: 45},
                 persona_direccionCanton: { required: true, maxlength: 45},
                 persona_direccionDomicilio: { required: false, maxlength: 200}
            };

            $('#formPersona').validate({
                rules: reglasPersona,
                errorElement: 'div',
                submitHandler: function(form) {
                    validacionCorrecta_Persona();
                }
            });

            $('#persona-archivo').validate({
                rules: reglasArchivo,
                errorElement: 'div',
                submitHandler: function(form) {
                    validacionCorrecta_Archivo();
                }
            });

            $('#persona-cambio-imagen').validate({
            rules:
            {
                userfile: { required: false}
            },
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta_Imagen();
            }
        });


        var reglasServicio = {
            servicio_codigo: { required: true },
            servicio_nombre: { required: true, maxlength: 45},
            servicio_descripcion: { required: false, maxlength: 200},
            servicio_utilidad: { required: true, max: 99.9, min: 0 }
        };

        $('#form_servicio').validate({
            rules: reglasServicio,
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta_Servicios();
            }
        });
        $('#form_servicio_cotizar').validate({
            rules: reglasServicio,
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta_ServiciosCotizacion();
            }
        });

        var reglasTipoMoneda =  {
            tipoMoneda_nombre: {required: true, maxlength: 45},
            tipoMoneda_signo: {required: true, maxlength: 45},
            tipoMoneda_tipoCambio: {required: true, maxlength: 45}
        };
        $('#form_tipoMoneda').validate({
            rules: reglasTipoMoneda,
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta();
            }
        });
        $('#form_tipoMonedaEditar').validate({
            rules: reglasTipoMoneda,
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrectaEditar();
            }
        });

        $('#form_tipoMoneda_cotizar').validate({
            rules: reglasTipoMoneda,
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta_Moneda();
            }
        });

        var reglasFormaPago =  {
            formaPago_nombre: {required: true, maxlength: 100},
            formaPago_descripcion: {required: false, maxlength: 200}
        };
        $('#form_formaPago').validate({
            rules: reglasFormaPago,
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta();
            }
        });
        $('#form_formaPagoEditar').validate({
            rules: reglasFormaPago,
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrectaEditar();
            }
        });
        $('#form_formaPago_cotizar').validate({
            rules: reglasFormaPago,
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta_FormaPago();
            }
        });

        var reglasGasto =  {
            gasto_codigo: {required: true},
            gasto_nombre: {required: true}
        };
        $('#form_gasto').validate({
            rules: reglasFormaPago,
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta();
            }
        });
        $('#form_gastoEditar').validate({
            rules: reglasFormaPago,
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrectaEditar();
            }
        });
        $('#form_categoria').validate({
            rules:
            {
                categoria_nombre: { required: true }
            },
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta_Categoria();
            }
        });
        $('#form_formaPago_Gastos').validate({
            rules:
            {
                formaPago_nombre: { required: true },
                formaPago_descripcion: { required: true }
            },
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta_FormaPago();
            }
        });
        $('#form_persona_Gastos').validate({
            rules: reglasPersona,
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta_Persona();
            }
        });

        var reglasCategoriaGasto =  {
            categoriaGasto_nombre: {required: true, maxlength: 45},
            categoriaGasto_descripcion: {required: false, maxlength: 200}
        };
        $('#form_categoriaGasto').validate({
            rules: reglasCategoriaGasto,
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta();
            }
        });
        $('#form_categoriaGastoEditar').validate({
            rules: reglasCategoriaGasto,
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrectaEditar();
            }
        });

        var reglasCategoriaPersona =  {
            categoriaPersona_nombre: {required: true, maxlength: 45},
            categoriaPersona_descripcion: {required: false, maxlength: 200}
        };
        $('#form_categoriaPersona').validate({
            rules: reglasCategoriaPersona,
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta();
            }
        });
        $('#form_categoriaPersonaEditar').validate({
            rules: reglasCategoriaPersona,
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrectaEditar();
            }
        });

        $('#form_horas').validate({
            rules:
            {
                horas_diasAnno: {required: true},
                horas_finesSemana: {required: true},
                horas_festivosObligatorios: {required: true},
                horas_festivosNoObligatorios: {required: false},
                horas_vacaciones: {required: false},
                horas_promedioBajas: {required: false},
                horas_diasFacturables: {required: false},
                horas_promedioHorasDiarias: {required: false},
                horas_cantidadManoObra: {required: false}
            },
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta_horas();
            }
        });

        $('#registro_cambioImagen').validate({
            rules: {
                userfile: {required: false}
            },
            errorElement: 'div',
            submitHandler: function (form) {
                validacionCorrecta_Imagen();
            }
        });
        $('#form_registroEditar').validate({
            rules: {
                empresa_idEmpresa: {required: true},
                empresa_empresaNombre: {required: true},
                empresa_empresaNombreFantasia: {required: false},
                empresa_empresaTelefonoFijo: {required: true},
                empresa_empresaCorreo: {required: true},
                empresa_empresaSitioweb: {required: false},
                empresa_fechaCreacion: {required: false},
                empresa_tamano: {required: false},
                empresa_idTrabajador: {required: true},
                empresa_trabajadorNombreArtistico: {required: false},
                empresa_trabajadorNombre: {required: true},
                empresa_trabajadorPrimerApellido: {required: true},
                empresa_trabajadorSegundoApellido: {required: false},
                empresa_trabajadorCorreo: {required: true},
                empresa_trabajadorProfesion: {required: false},
                empresa_trabajadorSitioWeb: {required: false},
                empresa_trabajadorFechaNacimiento: {required: false},
                empresa_direccionPais: {required: true},
                empresa_direccionProvincia: {required: true},
                empresa_direccionCanton: {required: true},
                empresa_direccionDomicilio: {required: true},
                empresa_actividadComercial: {required: true},
                empresa_nombreContacto: {required: true},
                empresa_primerApellidoContacto: {required: true},
                empresa_segundoApellidoContacto: {required: false},
                empresa_correoContacto: {required: true},
                empresa_codigoCotizacion: {required: true},
                empresa_nombreRepresentante: {required: true},
                empresa_primerApellidoRepresentante: {required: true}
            },
            errorElement: 'div',
            submitHandler: function (form) {
                validacionCorrecta();
            }
        });

        $('#registro_cambioImagenFirma').validate({
            rules: {
                userfile: {required: false}
            },
            errorElement: 'div',
            submitHandler: function (form) {
                validacionCorrecta_ImagenFirma();
            }
        });

        $('#form_completarRegistro').validate({
            rules:
            {
                //registro_actividadComercial: { required: true },
                registro_fechaNacIndependiente: { required: false },
                registro_profesionIndepediente: { required: false },
                registro_correoEmpresa: { required: false },
                registro_fechaCreacionEmpresa: { required: false },
                registro_telefonoFijo: { required: false },
                registro_telefonoMovil: { required: false },
                registro_sitioWeb: { required: false },
                registro_codigoCotizacion: { required: false },
                registro_tamanoEmpresa: { required: false }
            },
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta_registro();
            }
        });

        $('#completarRegistro_cambioImagenFirma').validate({
            rules: {
                userfile: {required: false}
            },
            errorElement: 'div',
            submitHandler: function (form) {
                validacionCorrecta_ImagenFirma_completar();
            }
        });
        $('#completarRegistro_cambioImagen').validate({
            rules: {
                userfile: {required: false}
            },
            errorElement: 'div',
            submitHandler: function (form) {
                validacionCorrecta_Imagen_completar();
            }
        });

        $('#form_cliente_cotizar').validate({
            rules: reglasCliente,
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta_Cliente();
            }
        });

        $('#form_contacto_cotizar').validate({
            rules: {
                cliente_contactoNombre: {required: true, maxlength: 45},
                cliente_contactoApellido1: {required: true, maxlength: 45},
                cliente_contactoApellido2: {required: false, maxlength: 45},
                cliente_contactoCorreo: {required: true, maxlength: 45},
                cliente_contactoPuesto: {required: false, maxlength: 45},
                cliente_contactoTelefono: {required: false, maxlength: 45}
            },
            errorElement: 'div',
            submitHandler: function(form) {
                validacionCorrecta_Contacto();
            }
        });

    });