<?php
//Comentario importante DatePicker
//La ruta para modificar el archivo con el idioma del mismo es assets/dashboard/js/materialize.min.js

//Para modificar las palabras de las tablas debe modificar el archivo jquery.dataTables.js 
//ubicado en la ruta assets\dashboard\js\plugins\data-tables\js posteriormente debe comprimirlo para que su extension sea .min.js ya que 
//el archivo que utiliza la aplicacion es el jquery.dataTables.min.js

//Los mensajes que se muestran en los errores de validación de los formularios se encuentran 
//en el archivo assets\dashboard\js\messages_es.js Sin este el lenguaje 
//por defecto es el ingles. 




	$lang['nombreSistema'] = 'Touch!';

//mensajes 
	$lang['confirmarEliminarCotizacion'] = '¿Realmente desea eliminar la cotización seleccionada?';
	$lang['confirmarFinalizarCotizacion'] = '¿Realmente desea finalizar la cotización seleccionada?';
	$lang['confirmarDuplicarCotizacion'] = '¿Realmente desea duplicar la cotización seleccionada?';
	$lang['confirmarEliminarContacto'] = '¿Realmente desea eliminar el contacto seleccionado?';
	$lang['confirmarEliminarSalario'] = '¿Realmente desea eliminar el salario seleccionado?';
	$lang['confirmarEliminarElementoProductos'] = '¿Realmente desea eliminar el elemento seleccionado?';
	$lang['confirmarEliminarServicio'] = '¿Realmente desea eliminar el servicio seleccionado?';
	$lang['confirmarEliminarEmpleado'] = '¿Realmente desea eliminar el empleado seleccionado?';
	$lang['confirmarEliminarProveedor'] = '¿Realmente desea eliminar el proveedor seleccionado?';
	$lang['confirmarEliminarCliente'] = '¿Realmente desea eliminar el cliente seleccionado?';
	$lang['confirmarDesactivarCliente'] = '¿Realmente desea desactivar el cliente seleccionado?';
	$lang['confirmarDesactivarProveedor'] = '¿Realmente desea desactivar el proveedor seleccionado?';
	$lang['confirmarEliminarTipoMoneda'] = '¿Realmente desea eliminar el tipo de moneda seleccionado?';
    $lang['confirmarEliminarGasto'] = '¿Realmente desea eliminar el gasto adicional seleccionado?';
	$lang['confirmarEliminarUsuario'] = '¿Realmente desea eliminar el usuario seleccionado?';
	$lang['confirmarEliminarCaracteristica'] = '¿Realmente desea eliminar la característica seleccionada?';
	$lang['confirmarEliminarElementoServicio'] = '¿Realmente desea eliminar el elemento seleccionado?';
	$lang['confirmarEditarEmpleado'] = '¿Realmente desea guardar los cambios realizados?';
    $lang['confirmarEliminarlineaDetalle'] = '¿Realmente desea eliminar la linea de detalle seleccionada?';
    $lang['confirmarEliminarFinanciamiento'] = '¿Realmente desea eliminar la forma de pago seleccionada?';
    $lang['confirmarEliminarMoneda'] = '¿Realmente desea eliminar la moneda seleccionada?';
    $lang['confirmarEliminarSolicitud'] = '¿Realmente desea eliminar la solicitud de cotización?';
    $lang['confirmarEnvioCliente'] = '¿Realmente desea aprobar la cotización y enviarla al cliente?';
    $lang['confirmarEliminarImpuesto'] = '¿Realmente desea eliminar el impuesto seleccionado?';
    $lang['confirmarEliminarUnidad'] = '¿Realmente desea eliminar la unidad seleccionada?';
    $lang['confirmarEliminarCategoria'] = '¿Realmente desea eliminar la categoría seleccionada?';
    $lang['motivoRechaza'] = 'Agregue el motivo por el cual rechaza esta cotización';
    $lang['confirmarGuardarDescargar'] = '¿Realmente desea guardar y descargar la cotización en proceso?';
    $lang['confirmarGuardarCerrar'] = '¿Realmente desea guardar y cerrar la cotización en proceso?';
    $lang['confirmarCancelarCotizacion'] = '¿Realmente desea cancelar la cotización en proceso?';
    $lang['confirmarObtenerPlan'] = '¿Realmente desea obtener el plan?';

    $lang['confirmarEliminarProductoServicio'] = '¿Realmente desea eliminar el elemento seleccionado?';
    $lang['confirmarActivarProductoServicio'] = '¿Realmente desea activar el elemento seleccionado?';
    $lang['confirmarDesactivarProductoServicio'] = '¿Realmente desea desactivar el elemento seleccionado?';

    $lang['empleadoGuardadoCorrectamente'] = 'El empleado ha sido creado correctamente.';
    $lang['empleadoEditadoCorrectamente'] = 'El empleado ha sido editado correctamente.';
    $lang['empleadoIdentificacionExistente'] = 'La identificación indicada ya existe.';

    
    $lang['errorGuardar'] = 'Ha ocurrido un error al intentar guardar los datos.';
    $lang['errorLeerDatos'] = 'Ha ocurrido un error al intentar leer los datos.';
    $lang['errorEliminar'] = 'Ha ocurrido un error al intentar eliminar los datos.';
    $lang['errorEditar'] = 'Ha ocurrido un error al intentar editar los datos.';

    

    
    
    
//tipos de salario
    $lang['horas'] = 'Por horas';
    $lang['dia'] = 'Diario';
    $lang['semana'] = 'Semanal';
    $lang['quincena'] = 'Quincenal';
    $lang['mes'] = 'Mensual';
    
//titulos
    $lang['tituloPagos'] = 'Pagos al sistema';
    $lang['tituloReporte'] = 'Reportes de la empresa';
    $lang['tituloReporteClientes'] = 'Reportes de clientes';
    $lang['tituloFormularioPlan'] = 'Plan';
    $lang['tituloListaPlanes'] = 'Lista de planes';
    $lang['tituloListaPagos'] = 'Lista de pagos';
    $lang['tituloFormularioMonedas'] = 'Moneda';
    $lang['tituloListaMonedas'] = 'Lista de monedas';
    $lang['tituloGenerarEmbed'] = 'Generar embed';
    $lang['tituloFormularioEmbed'] = 'Solicitud de cotización';
    $lang['tituloCotizarEmbed'] = 'Realizar cotización';
    $lang['tituloProductoEmbed'] = 'Detalles del artículo';
    $lang['tituloFormularioFinanciamiento'] = 'Forma de pago';
    $lang['tituloListaFinanciamiento'] = 'Lista de formas de pago disponibles';
	$lang['tituloListaCotizaciones'] = 'Lista de cotizaciones';
    $lang['tituloListaImpuesto'] = 'Lista de impuestos';
    $lang['tituloListaUnidad'] = 'Lista de unidades';
    $lang['tituloCotizacion'] = 'Cotización';
	$lang['tituloFormularioCliente'] = 'Agregar cliente';
	$lang['tituloFormularioClienteEditar'] = 'Editar cliente';
	$lang['tituloFormularioSolicitudes'] = 'Solitud de cotización';
	$lang['tituloFormularioEmpleado'] = 'Agregar empleado';
	$lang['tituloFormularioEmpleadoEditar'] = 'Editar empleado';
	$lang['tituloFormularioProveedor'] = 'Agregar proveedor';
	$lang['tituloFormularioProveedorEditar'] = 'Editar proveedor';
	$lang['tituloFormularioUsuario'] = 'Agregar usuario';
	$lang['tituloFormularioUsuarioEditar'] = 'Editar usuario';
	$lang['tituloFormularioRegistro'] = 'Registro';
	$lang['tituloFormularioServicio'] = 'Agregar servicio';
	$lang['tituloFormularioServicioEditar'] = 'Editar servicio';
	$lang['tituloFormularioProducto'] = 'Agregar producto';
	$lang['tituloFormularioProductoEditar'] = 'Editar producto';
    $lang['tituloFormularioImpuesto'] = 'Agregar impuesto';
	$lang['tituloProducto'] = 'Productos';
	$lang['tituloServicios'] = 'Servicios';
	$lang['tituloProductosServicios'] = 'Productos y servicios';
	$lang['Categorias_titulo'] = 'Categorías';
	$lang['tituloEmpleados'] = 'Empleados';
	$lang['tituloProveedores'] = 'Proveedores';
	$lang['tituloClientes'] = 'Clientes';
	$lang['tituloUsuarios'] = 'Usuarios';
    $lang['tituloListaSolicitudesConCliente'] = 'Solicitudes pendientes';
    $lang['tituloListaSolicitudesSinCliente'] = 'Solicitudes de nuevos clientes'; 
    $lang['tituloListaPorAprobar'] = 'Cotizaciones pendientes por revisar';
    $lang['tituloAprobarEnvioCliente'] = 'Revisar cotización';
    $lang['tituloListaPlan'] = 'Lista de planes';
    $lang['tituloPerfil'] = 'Información de la cuenta';
    $lang['tituloUsuario'] = 'Información del usuario';

//tabla de planes
    $lang['tablaPlan_nombre'] = 'Nombre';
    $lang['tablaPlan_costo'] = 'Costo';
    $lang['tablaPlan_beneficios'] = 'Beneficios';
    $lang['tablaPlan_opciones'] = 'Opciones';
    $lang['tablaPlan_Obtener'] = 'Obtener plan';


//tabla de impuestos    
    $lang['formImpuesto_nombre'] = 'Nombre';
    $lang['formImpuesto_descripcion'] = 'Descripción';
    $lang['formImpuesto_valor'] = 'Valor';
    $lang['formImpuesto_agregar'] = 'Agregar';
    $lang['impuestoNuevo'] = 'Agregar nuevo';
    $lang['tablaImpuesto_nombre'] = 'Nombre';
    $lang['tablaImpuesto_descripcion'] = 'Descripción';
    $lang['tablaImpuesto_valor'] = 'Valor';
    $lang['impuestoNuevo'] = 'Agregar nuevo';
    $lang['impuesto'] = 'Impuestos';
    
//tabla de unidades
    $lang['unidadNueva'] = 'Agregar nuevo';
    $lang['tablaUnidad_nombre'] = 'Nombre';
    $lang['formUnidad_nombre'] = 'Nombre';
    $lang['unidad'] = 'Unidades';
    

//Gastos adicionales
    $lang['tituloGastos'] = 'Gastos adicionales';
    $lang['tituloGastos_nombre'] = 'Nombre';
    $lang['tituloGastos_monto'] = 'Monto';
    $lang['tituloGastos_opciones'] = 'Opciones';
    $lang['tituloGastos_nuevo'] = 'Agregar nuevo';
    $lang['formGastos_nombre'] = 'Nombre del gasto';
    $lang['formGastos_monto'] = 'Monto del gasto';

//Tipos de moneda
	$lang['tituloTiposMoneda'] = 'Tipos de moneda';
	$lang['tiposMoneda_defecto'] = 'Tipo de moneda por defecto';
	$lang['tiposMoneda_selecionarUno'] = 'Seleccione uno';
	$lang['tiposMoneda_permitidos'] = 'Tipos de moneda permitidos en las cotizaciones';
	$lang['tiposMoneda_nombre'] = 'Moneda';
    $lang['tiposMoneda_tipoCambio'] = 'Tipo de cambio respecto a la moneda por defecto';
	$lang['tiposMoneda_opciones'] = 'Opciones';
	$lang['tiposMoneda_nuevo'] = 'Nuevo tipo de moneda';

//columnas tabla de cotizaciones 
	$lang['tablaCotizaciones_codigo'] = 'Código';
	$lang['tablaCotizaciones_fecha'] = 'Fecha';
	$lang['tablaCotizaciones_cliente'] = 'Cliente';
	$lang['tablaCotizaciones_monto'] = 'Monto';
	$lang['tablaCotizaciones_estado'] = 'Estado';
	$lang['tablaCotizaciones_opciones'] = 'Opciones';

    $lang['tablaCotizaciones_opcionDuplicar'] = 'Duplicar';
    $lang['tablaCotizaciones_opcionVerEditar'] = 'Ver / Editar';
    $lang['tablaCotizaciones_opcionVer'] = 'Ver';
    $lang['tablaCotizaciones_opcionEditar'] = 'Editar';
    $lang['tablaCotizaciones_opcionFinalizar'] = 'Finalizar';
    $lang['tablaCotizaciones_opcionEliminar'] = 'Eliminar';

    $lang['verCotizacion'] = 'Ver cotización';
    $lang['verCotizacion_editar'] = 'Editar cotización';
    $lang['verCotizacion_duplicar'] = 'Duplicar cotización';
    $lang['verCotizacion_eliminar'] = 'Eliminar cotización';

//columnas tabla de solicitudes
    $lang['tablaSolicitudes_nombre'] = 'Nombre';
    $lang['tablaSolicitudes_correo'] = 'Correo';
    $lang['tablaSolicitudes_fecha'] = 'Fecha';
    $lang['tablaSolicitudes_descripcion'] = 'Descrpción';
    $lang['tablaSolicitudes_opciones'] = 'Opciones';

//columnas tabla de solicitudes
    $lang['tablaPorAbrobar_cliente'] = 'Cliente';
    $lang['tablaPorAbrobar_monto'] = 'Monto';
    $lang['tablaPorAbrobar_fecha'] = 'Fecha';
    $lang['tablaPorAbrobar_opciones'] = 'Opciones';





// texto de los botones
	$lang['aceptar'] = 'Aceptar';
	$lang['cancelar'] = 'Cancelar';
	$lang['eliminar'] = 'Eliminar';
	$lang['ver'] = 'Ver';
	$lang['editar'] = 'Editar';
	$lang['duplicar'] = 'Duplicar';
	$lang['finalizar'] = 'Finalizar';
	$lang['on'] = 'Activo';
	$lang['off'] = 'Inactivo';
	$lang['loguear'] = 'Ingresar';
	$lang['annadir'] = 'Añadir';
	$lang['recordar'] = 'Recordarme';
	$lang['registrar'] = 'Registrarse';
	$lang['contrasena_olvido'] = '¿Olvidó su contraseña?';
    $lang['editarContenido'] = 'Editar contenido';
    $lang['aprobarEnvioCliente'] = 'Aprobar';
    $lang['guardarEnviar'] = 'Guardar y enviar';
    $lang['guardarDescargar'] = 'Guardar y descargar';
    $lang['guardarCerrar'] = 'Guardar y cerrar';
    $lang['cancelarCot'] = 'Cancelar cotización';
    $lang['agregarNuevo'] = 'Agregar nuevo';


//comentarios de una cotizacion
	$lang['comentar'] = 'Comentar';

//pasos para una cotizacion
	$lang['paso1'] = '1 General';
	$lang['paso2'] = '2 Detalle';
	$lang['paso3'] = '3 Diseño';
	$lang['paso4'] = '4 Finalizar';
	$lang['pasoAnterior'] = 'Atrás';
	$lang['pasoSiguiente'] = 'Siguiente';
    $lang['paso2_elegirProducto'] = 'Elija un producto';

   
    $lang['paso1_elegirFormaPago'] = 'Elegir forma de pago';
    $lang['paso1_elegirMoneda'] = 'Elegir moneda';
    $lang['paso1_elegirCliente'] = 'Elegir cliente';
    $lang['paso1_elegirAtencion'] = 'Elegir atención';
    $lang['paso2_elegirProductoNombre'] = 'Elegir';
    $lang['paso2_elegirProductoItem'] = 'Elegir';


    $lang['paso1_labelCodido'] = 'Código';
    $lang['paso1_labelNumero'] = 'Número';
    $lang['paso1_labelCliente'] = 'Cliente';
    $lang['paso1_labelContacto'] = 'Atención';
    $lang['paso1_labelFormaPago'] = 'Forma de pago';
    $lang['paso1_labelTipoMoneda'] = 'Tipo de moneda';
    $lang['paso1_labelTiempoVlidez'] = 'Tiempo de validez';
    $lang['paso1_labelTipoCambio'] = 'Tipo de cambio';
    $lang['paso1_labelDetalle'] = 'Detalle';


//Menu izquierdo 
	$lang['inicio'] = 'Panel principal';
	$lang['cotizaciones'] = 'Cotizaciones';
    $lang['listarCotizacion'] = 'Lista de cotizaciones';
    $lang['listarReporteCot'] = 'Reportes cotizaciones';
	$lang['servicios'] = 'Servicios';
	$lang['productos'] = 'Productos';
	$lang['agregarP'] = 'Agregar producto';
	$lang['listarP'] = 'Lista de productos';
	$lang['administración'] = 'Configuración';
	$lang['costos'] = 'Costos';
	$lang['clientes'] = 'Clientes';
	$lang['agregarCliente'] = 'Agregar cliente';
	$lang['listarCliente'] = 'Lista de clientes';
	$lang['listarReporteCli'] = 'Reportes de clientes';
	$lang['empleados'] = 'Empleados';
	$lang['proveedores'] = 'Proveedores';
	$lang['monedas'] = 'Monedas';
	$lang['usuarios'] = 'Usuarios';
	$lang['financiamiento'] = 'Formas de pago';
	$lang['gastos'] = 'Gastos';
	$lang['avanzado'] = 'Avanzado';
	$lang['masOpciones'] = 'MÁS OPCIONES';
	$lang['agregarCotizacion'] = 'Crear cotización';
	$lang['agregarProduto_Servicio'] = 'Agregar producto/servicio';
	$lang['agregarProducto'] = 'Producto';
	$lang['agregarServicio'] = 'Servicio';
	$lang['agregarEmpleado'] = 'Agregar empleado';
	$lang['agregarProveedor'] = 'Agregar proveedor';
	$lang['agregarS'] = 'Agregar servicio';
	$lang['reportes'] = 'Reportes';

//Formulario informacion del perfil
    $lang['formPerfil_numeroIdentificacion'] = 'Número de identificación';
    $lang['formPerfil_nombre'] = 'Nombre';
    $lang['formPerfil_apellido1'] = 'Primer apellido';
    $lang['formPerfil_apellido2'] = 'Segundo apellido';
    $lang['formPerfil_correo'] = 'Correo electrónico';
    $lang['formPerfil_confCorreo'] = 'Confirmar correo electrónico';
    $lang['formPerfil_contraseña'] = 'Contraseña';
    $lang['formPerfil_confContraseña'] = 'Confirmar contraseña';
    $lang['formPerfil_telefono'] = 'Teléfono';
    $lang['formPerfil_celular'] = 'Celular';
    $lang['formPerfil_profesion'] = 'Profesión';
    $lang['formPerfil_sitioWeb'] = 'Sitio web';
    $lang['formPerfil_fechaNac'] = 'Fecha de nacimiento';
    $lang['formPerfil_actividadComercial'] = 'Actividad comercial';
    $lang['formPerfil_pais'] = 'País';
    $lang['formPerfil_estado'] = 'Estado/Provincia';
    $lang['formPerfil_ciudad'] = 'Ciudad/Cantón';
    $lang['formPerfil_domicilio'] = 'Domicilio';
    $lang['formPerfil_nombreEmpresa'] = 'Nombre (Razón social)';
    $lang['formPerfil_nombreFantasia'] = 'Nombre de fantasía';
    $lang['formPerfil_correoEmpresarial'] = 'Correo empresarial';
    $lang['formPerfil_tamañoEmp'] = 'Tamaño de la empresa';
    $lang['formPerfil_fechaCreacion'] = 'Fecha de creación';
    $lang['formPerfil_direccion'] = 'Dirección';
    $lang['formPerfil_datosContacto'] = 'Datos del contacto (Representante legal)';
    $lang['formPerfil_puesto'] = 'Puesto';
    $lang['formPerfil_captcha'] = 'Ingrese el captcha';
    $lang['formPerfil_acepto1'] = 'Acepto recibir correos y promociones de Touch!';
    $lang['formPerfil_acepto2'] = 'Acepto términos y condiciones de uso';

//Formulario de solicitudes
    $lang['formSolicitud_nombre'] = 'Nombre';
    $lang['formSolicitud_correo'] = 'Correo electrónico';
    $lang['formSolicitud_telefono'] = 'Número telefónico';
    $lang['formSolicitud_fecha'] = 'Fecha de la solicitud';
    $lang['formSolicitud_detalle'] = 'Detalle de la solicitud';
    $lang['formSolicitud_datosAdicionales'] = 'Datos adicionales';
    $lang['formSolicitud_agregarCliente'] = 'Agregar cliente';
    $lang['formSolicitud_iniciar'] = 'Iniciar cotización';
    $lang['formSolicitud_tablaNombre'] = 'Nombre';
    $lang['formSolicitud_tablaPrecio'] = 'Precio';
    $lang['formSolicitud_tablaCantidad'] = 'Cantidad';
    $lang['formSolicitud_tablaTotal'] = 'Total';

//formulario cliente
    $lang['Cliente_tablaNombre'] = 'Nombre';
    $lang['Cliente_tablaCodigo'] = 'Código';
    $lang['Cliente_tablaTipo'] = 'Tipo';
    $lang['Cliente_tablaTelefono'] = 'Teléfono';
    $lang['Cliente_tablaCorreo'] = 'Correo electrónico';
    $lang['Cliente_tablaCotizador'] = 'Vendedores';
    $lang['Cliente_tablaOpciones'] = 'Opciones';
    $lang['Cliente_nuevo'] = 'Agregar nuevo';
	$lang['formCliente_tipoPersona'] = 'Tipo de persona';
	$lang['formCliente_seleccioneUno'] = 'Seleccione uno';
	$lang['formCliente_fisica'] = 'Física';
	$lang['formCliente_juridica'] = 'Jurídica';
	$lang['formCliente_codigo'] = 'Código';
	$lang['formCliente_nombre'] = 'Nombre';
	$lang['formCliente_identificacion'] = 'Identificación';
	$lang['formCliente_fechaNacimiento'] = 'Fecha de nacimiento';
	$lang['formCliente_telefonoMovil'] = 'Teléfono móvil';
	$lang['formCliente_telefonoFijo'] = 'Teléfono fijo';
	$lang['formCliente_correoContacto'] = 'Correo';
	$lang['formCliente_opcionesContacto'] = 'Opciones';
	$lang['formCliente_gustos_preferencias'] = 'Gustos y preferencias';
	$lang['formCliente_gustos'] = 'Gusto';
	$lang['formCliente_estado'] = 'Estado';
	$lang['formCliente_nuevoGusto'] = 'Nuevo gusto';
	$lang['formCliente_mediosContacto'] = 'Medios de contacto';
	$lang['formCliente_medio'] = 'Medio';
	$lang['formCliente_agregarNuevo'] = 'Agregar';
	$lang['formCliente_estadoMedio'] = 'Estado';
	// $lang['formCliente_nuevoMedio'] = 'Nuevo medio';
	$lang['formCliente_cotizador'] = 'Vendedores';
	$lang['formCliente_comentarios'] = 'Comentarios';
	$lang['formCliente_archivo'] = 'Archivo';
    $lang['formCliente_anadirVendedor'] = 'Añadir vendedor';
    $lang['formCliente_anadirGusto'] = 'Añadir gusto';
    $lang['formCliente_anadirMedio'] = 'Añadir medio';

    $lang['formCliente_nacionalidad'] = 'Nacionalidad';
    $lang['formCliente_apellido1'] = 'Primer apellido';
    $lang['formCliente_apellido2'] = 'Segundo apellido';
    $lang['formCliente_nombreContacto'] = 'Nombre completo';
    $lang['formCliente_Contactos'] = 'Contactos';
    $lang['cliente_infoAdicional'] = 'Adicional';
    $lang['cliente_infoFacturacion'] = 'Facturación';
    $lang['formCliente_formaPagoFavorita'] = 'Forma de pago preferida';
    $lang['formCliente_descuento'] = 'Descuento fijo';
    $lang['formCliente_monedaCotizar'] = 'Cotizar en';

$lang['formCliente_contactoAgregar'] = 'Agregar nuevo contacto';
$lang['formCliente_contactoEditar'] = 'Editar contacto';
$lang['formCliente_contactoDescargar'] = 'Descargar contacto';
$lang['formCliente_contactoEliminar'] = 'Eliminar contacto';
$lang['formCliente_contactoPrincipal'] = 'Contacto principal';
$lang['formCliente_contactoSecundario'] = 'Cambiar a contacto principal';

    $lang['cliente_direccion'] = 'Dirección';
    $lang['formCliente_direccionPais'] = 'País';
    $lang['formCliente_direccionProvincia'] = 'Estado o provincia';
    $lang['formCliente_direccionCanton'] = 'Ciudad o cantón';
    $lang['formCliente_direccionDistrito'] = 'Distrito';
    $lang['formCliente_direccionDomicilio'] = 'Domicilio';
    $lang['formCliente_correo'] = 'Correo electrónico';
    $lang['formCliente_correoCheck'] = 'Enviar facturas a este correo';

    $lang['formContacto_apellido1'] = 'Primer apellido';
    $lang['formContacto_apellido2'] = 'Segundo apellido';
    $lang['formContacto_nombre'] = 'Nombre';
    $lang['formContacto_correo'] = 'Correo electrónico';
    $lang['formContacto_puesto'] = 'Puesto';
    $lang['formContacto_telefono'] = 'Teléfono';

    $lang['formCliente_identificacionJuridica'] = 'Cédula jurídica';
    $lang['formCliente_nombreJuridico'] = 'Nombre (Razón social)';
    $lang['formCliente_nombreFantasia'] = 'Nombre de fantasía';
    $lang['formCliente_telefono'] = 'Número telefónico';
    $lang['formCliente_fax'] = 'Fax';

//Formulario de empleados
    $lang['Empleado_tablaNombre'] = 'Nombre';
    $lang['Empleado_tablaCodigo'] = 'Código';
    $lang['Empleado_tablaIdentificacion'] = 'Identificación';
    $lang['Empleado_tablaPalabras'] = 'Palabras clave';
    $lang['Empleado_tablaOpciones'] = 'Opciones';
    $lang['Empleado_nuevo'] = 'Agregar nuevo';
    $lang['formEmpleado_codigo'] = 'Código';
    $lang['formEmpleado_nombre'] = 'Nombre';
    $lang['formEmpleado_apellido1'] = 'Primer apellido';
    $lang['formEmpleado_apellido2'] = 'Segundo apellido';
    $lang['formEmpleado_identificacion'] = 'Identificación';
    $lang['formEmpleado_fechaNacimiento'] = 'Fecha de nacimiento';
    $lang['formEmpleado_fechaIngreso'] = 'Fecha de ingreso a la empresa';
    $lang['formEmpleado_palabrasClave'] = 'Palabras clave';
    $lang['formEmpleado_descripcion'] = 'Descripción';
    $lang['formEmpleado_salarios'] = 'Salarios';
    $lang['formEmpleado_nuevaPalabra'] = 'Nueva palabra clave';
    $lang['formEmpleado_nuevoSalario'] = 'Nuevo salario';
    $lang['formEmpleado_agregar'] = 'Agregar';
    $lang['formEmpleado_salariosTipo'] = 'Agregar';
    $lang['formEmpleado_salariosMonto'] = 'Agregar';
    $lang['formEmpleado_salariosOpciones'] = 'Agregar';
    $lang['formEmpleado_enviar'] = 'Agregar empleado';
    $lang['formEmpleado_editar'] = 'Guardar cambios';
    $lang['formEmpleado_palabraNombre'] = 'Ocupación';
    $lang['formEmpleado_salarioTipo'] = 'Tipo';
    $lang['formEmpleado_salarioMonto'] = 'Monto';
    $lang['formEmpleado_anadirPalabraClave'] = 'Añadir palabra';
   



//Formulario de proveedores
    $lang['proveedor_info'] = 'Información del proveedor';
    $lang['proveedor_ver'] = 'Perfil';
    $lang['proveedor_archivos'] = 'Archivos';
    $lang['proveedor_editar'] = 'Editar información';
    $lang['Proveedor_tablaNombre'] = 'Nombre';
    $lang['Proveedor_tablaCodigo'] = 'Código';
    $lang['Proveedor_tablaIdentificacion'] = 'Identificación';
    $lang['Proveedor_tablaDescripcion'] = 'Descripción';
    $lang['Proveedor_tablaOpciones'] = 'Opciones';
    $lang['Proveedor_nuevo'] = 'Agregar nuevo';
    $lang['formProveedor_tipoProveedor'] = 'Tipo de proveedor';
    $lang['formProveedor_nacionalidad'] = 'Nacionalidad';
    $lang['formProveedor_seleccioneUno'] = 'Seleccione uno';
    $lang['formProveedor_fisico'] = 'Físico';
    $lang['formProveedor_juridico'] = 'Jurídico';
    $lang['formProveedor_codigo'] = 'Código';
    $lang['formProveedor_apellido1'] = 'Primer apellido';
    $lang['formProveedor_apellido2'] = 'Segundo apellido';
    $lang['formProveedor_nombre'] = 'Nombre';
    $lang['formProveedor_identificacion'] = 'Identificación';
$lang['formProveedor_identificacionJuridica'] = 'Cédula jurídica';
$lang['formProveedor_nombreJuridico'] = 'Nombre (Razón social)';
$lang['formProveedor_nombreFantasia'] = 'Nombre de fantasía';
$lang['formProveedor_telefono'] = 'Número telefónico';
$lang['formProveedor_fax'] = 'Fax';
$lang['formProveedor_palabrasClave'] = 'Palabras clave';
$lang['formProveedor_palabrasClaveAsociadas'] = 'Palabras clave asociadas';
$lang['formProveedor_palabrasClaveAnadir'] = 'Añadir palabra';
$lang['formProveedor_descripcion'] = 'Descripción';
$lang['formProveedor_direccion'] = 'Dirección';
    $lang['formProveedor_direccionPais'] = 'País';
    $lang['formProveedor_direccionProvincia'] = 'Estado o provincia';
    $lang['formProveedor_direccionCanton'] = 'Ciudad o cantón';
    $lang['formProveedor_direccionDistrito'] = 'Distrito';
    $lang['formProveedor_direccionDomicilio'] = 'Domicilio';
$lang['formProveedor_correoCheck'] = 'Enviar facturas a este correo';
$lang['formProveedor_contactos'] = 'Contactos';
$lang['formProveedor_infoCotizacion'] = 'Información de cotización';
    $lang['formProveedor_correo'] = 'Correo electrónico';
    $lang['formProveedor_telefonoFijo'] = 'Teléfono fijo';
    $lang['formProveedor_telefonoMovil'] = 'Teléfono móvil';
    $lang['formProveedor_fechaNacimiento'] = 'Fecha de nacimiento';
    $lang['formProveedor_palabrasClave'] = 'Palabras clave';
    $lang['formProveedor_descripcion'] = 'Descripción';
    $lang['formProveedor_salarios'] = 'Salarios';
    $lang['formProveedor_nuevaPalabra'] = 'Nueva palabra clave';
    $lang['formProveedor_nuevoSalario'] = 'Nuevo presupuesto';
    $lang['formProveedor_agregar'] = 'Agregar';
    $lang['formProveedor_salariosTipo'] = 'Tipo';
    $lang['formProveedor_salariosMonto'] = 'Monto';
    $lang['formProveedor_salariosOpciones'] = 'Opciones';
    $lang['formProveedor_enviar'] = 'Agregar proveedor';
    $lang['formProveedor_editar'] = 'Guardar cambios';
    $lang['formProveedor_salarioTipo'] = 'Tipo';
    $lang['formProveedor_salarioMonto'] = 'Monto';
    $lang['formProveedor_palabrasClave'] = 'Palabras clave';
    $lang['formProveedor_anadirPalabraClave'] = 'Añadir palabra';
$lang['formProveedor_contactoAgregar'] = 'Agregar nuevo contacto';
$lang['formProveedor_contactoEditar'] = 'Editar contacto';
$lang['formProveedor_contactoDescargar'] = 'Descargar contacto';
$lang['formProveedor_contactoEliminar'] = 'Eliminar contacto';
$lang['formProveedor_contactoPrincipal'] = 'Contacto principal';
$lang['formProveedor_contactoSecundario'] = 'Cambiar a contacto principal';

$lang['proveedores_archivosNombre'] = 'Nombre del archivo';
$lang['proveedores_archivosDescripcion'] = 'Descripción';
$lang['proveedores_archivosPeso'] = 'Tamaño';
$lang['proveedores_archivosFecha'] = 'Fecha';
$lang['proveedores_archivosOpciones'] = 'Opciones';
$lang['proveedores_archivos_accionEliminar'] = 'Eliminar archivos seleccionados';
$lang['proveedores_archivoNuevo'] = 'Agregar nuevo archivo';
$lang['proveedores_archivoEliminar'] = '¿Realmente desea eliminar el archivo seleccionado?';
$lang['proveedores_archivosSeleccionadosEliminar'] = '¿Realmente desea eliminar los archivos seleccionados?';

//Formulario de usuarios
    $lang['Usuario_tablaNombre'] = 'Nombre';
    $lang['Usuario_tablaIdentificacion'] = 'Identificación';
    $lang['Usuario_tablaCorreo'] = 'Correo electrónico';
    $lang['Usuario_tablaOpciones'] = 'Opciones';
    $lang['Usuario_nuevo'] = 'Agregar nuevo';
    $lang['formUsuario_nombre'] = 'Nombre';
    $lang['formUsuario_apellido1'] = 'Primer apellido';
    $lang['formUsuario_apellido2'] = 'Segundo apellido';
    $lang['formUsuario_correo'] = 'Correo electrónico';
    $lang['formUsuario_nombreUsuario'] = 'Nombre de usuario';
    $lang['formUsuario_contrasena'] = 'Contraseña';
    $lang['formUsuario_contrasenaCambio'] = 'Cambio de contraseña';
    $lang['formUsuario_contrasenaVieja'] = 'Contraseña actual';
    $lang['formUsuario_contrasenaNueva'] = 'Contraseña nueva';
    $lang['formUsuario_contrasenaConfirmar'] = 'Confirmar contraseña';
    $lang['formUsuario_fotografia'] = 'Imagen';
    $lang['formUsuario_roles'] = 'Roles asignados';
    $lang['formUsuario_examinar'] = 'Ex';
    $lang['formUsuario_rol'] = 'Rol';
    $lang['formUsuario_rolEstado'] = 'Estado';
    $lang['formUsuario_rolAdministrador'] = 'Administrador';
    $lang['formUsuario_rolAprobador'] = 'Aprobador';
    $lang['formUsuario_rolCotizador'] = 'Cotizador';
    $lang['formUsuario_rolContador'] = 'Contador';
    $lang['formUsuario_enviar'] = 'Agregar usuario';
    $lang['formUsuario_editar'] = 'Guardar cambios';

//Formulario de registro
    $lang['formRegistro_nombre'] = 'Nombre';
    $lang['formRegistro_correo'] = 'Correo electrónico';
    $lang['formRegistro_telefono'] = 'Número telefónico';
    $lang['formRegistro_sitioWeb'] = 'Sitio Web';
    $lang['formRegistro_nombreUsuario'] = 'Nombre de usuario';
    $lang['formRegistro_contrasena'] = 'Contraseña';
    $lang['formRegistro_contrasenaConfirm'] = 'Confirmar contraseña';
    $lang['formRegistro_fotografia'] = 'Imagen';
    $lang['formRegistro_examinar'] = 'Ex';
    $lang['formRegistro_crearPerfil'] = 'Crear perfil';

//Formulario de servicio
    $lang['Servicio_tablaNombre'] = 'Nombre';
    $lang['Servicio_tablaCodigo'] = 'Código';
    $lang['Servicio_tablaDescripcion'] = 'Descripción';
    $lang['Servicio_tablaPrecio'] = 'Precio';
    $lang['Servicio_tablaOpciones'] = 'Opciones';
    $lang['Servicio_nuevo'] = 'Agregar nuevo';
    $lang['formServicio_codigo'] = 'Código';
    $lang['formServicio_nombre'] = 'Nombre';
    $lang['formServicio_descripcion'] = 'Descripción';
    $lang['formServicio_imagen'] = 'Imagen';
    $lang['formServicio_examinar'] = 'Ex';
    $lang['formServicio_gastos'] = 'Gastos relacionados';
    $lang['formServicio_gastosNombre'] = 'Nombre';
    $lang['formServicio_gastosCantidad'] = 'Cantidad';
    $lang['formServicio_gastosSubtotal'] = 'Sub-total';
    $lang['formServicio_gastosOpciones'] = 'Opciones';
    $lang['formServicio_nuevaPersona'] = 'Nuevo gasto';
    $lang['formServicio_utilidad'] = 'Margen de utilidad';
    $lang['formServicio_total'] = 'Total';
    $lang['formServicio_enviar'] = 'Agregar servicio';
    $lang['formServicio_editar'] = 'Guardar cambios';
    $lang['formServicio_gastoAdicionalNombre'] = 'Nombre';
    $lang['formServicio_gastoAdicionalMonto'] = 'Monto';
    $lang['formServicio_nuevaPersonaTipo'] = 'Tipo de persona';
    $lang['formServicio_nuevaPersonaEmpleado'] = 'Empleado';
    $lang['formServicio_nuevaPersonaProveedor'] = 'Proveedor';
    $lang['formServicio_nuevaPersonaCodigo'] = 'Código';
    $lang['formServicio_nuevaPersonaIdentificacion'] = 'Identificación';
    $lang['formServicio_nuevaPersonaNombre'] = 'Nombre';
    $lang['formServicio_nuevaPersonaDescripcion'] = 'Descripción';
    $lang['formServicio_nuevaPersonaSalario'] = 'Salario';
    $lang['formServicio_nuevaPersonaSalarioTipo'] = 'Tipo de salario';
    $lang['formServicio_nuevaPersonaSalarioMonto'] = 'Monto';

//Formulario de producto
    $lang['ProductosServicios_busquedaAvanzada'] = 'Búsqueda avanzada';
    $lang['ProductosServicios_tablaNombre'] = 'Nombre';
    $lang['ProductosServicios_tablaCodigo'] = 'Código';
    $lang['ProductosServicios_tablaDescripcion'] = 'Descripción';
    $lang['ProductosServicios_tablaCantidad'] = 'Cant.';
    $lang['ProductosServicios_tablaPrecioUnitario'] = 'Precio unitario';
    $lang['ProductosServicios_tablaImpuestos'] = 'Impuestos';
    $lang['ProductosServicios_tablaPrecioFinal'] = 'Precio final';
    $lang['ProductosServicios_tablaOpciones'] = 'Opciones';
    $lang['ProductosServicios_nuevo'] = 'Agregar nuevo';

    $lang['ProductosServicios_seleccionarCategorias'] = 'Seleccione las categorías donde desea agregar el producto:';
    $lang['ProductosServicios_categorias'] = 'Categorías:';

    $lang['Categorias_nuevo'] = 'Agregar nueva categoría';
    $lang['Categorias_codigo'] = 'Código';
    $lang['Categorias_nombre'] = 'Nombre';
    $lang['Categorias_opciones'] = 'Opciones';$lang['confirmarEliminarSubcategoria'] = '¿Realmente desea eliminar la sub-categoría seleccionada?';

    $lang['Categorias_nuevo'] = 'Agregar nueva categoría';
    $lang['Categorias_editar'] = 'Editar categoría';
    $lang['Categorias_ver'] = 'Ver sub-categorías';
    $lang['Categorias_codigo'] = 'Código';
    $lang['Categorias_nombre'] = 'Nombre';
    $lang['Categorias_codigoNuevo'] = 'Código de la categoría';
    $lang['Categorias_nombreNuevo'] = 'Nombre de la categoría';
    $lang['Categorias_opciones'] = 'Opciones';
    $lang['Categorias_agregarProductos'] = 'Agregar productos';
    $lang['Categorias_annadirProductos'] = 'Añadir producto';
    $lang['Categorias_annadirSubcategoria'] = 'Añadir sub-categoría';
    $lang['Categorias_annadirOtraSubcategoria'] = 'Añadir otra sub-categoría';
    $lang['Subcategorias_nuevo'] = 'Agregue la nueva sub-categoría';
    $lang['Subcategorias_codigo'] = 'Código de la sub-categoría';
    $lang['Subcategorias_nombre'] = 'Nombre de la sub-categoría';
    $lang['Subcategorias_eliminar'] = 'Eliminar la sub-categoría';
    $lang['Subcategorias_guardarCambios'] = 'Guardar';
    $lang['Subcategorias_cancelarCambios'] = 'Cancelar';

    $lang['busquedaPS_codigo'] = 'Código';
    $lang['busquedaPS_todos'] = 'Todos';
    $lang['busquedaPS_todosTipos'] = 'Todos los tipos';
    $lang['busquedaPS_todosCategorias'] = 'Todas las categorías';
    $lang['busquedaPS_todosElementos'] = 'Todos los elementos';
    $lang['busquedaPS_todosEstados'] = 'Todos los estados';
    $lang['busquedaPS_todosImpuestos'] = 'Todos los impuestos';
    $lang['busquedaPS_todosUnidades'] = 'Todas las unidades';
    $lang['busquedaPS_productos'] = 'Productos';
    $lang['busquedaPS_servicios'] = 'Servicios';
    $lang['busquedaPS_tipo'] = 'Tipo';
    $lang['busquedaPS_categoria'] = 'Categorías';
    $lang['busquedaPS_elementos'] = 'Elementos';
    $lang['busquedaPS_precioDesde'] = 'Precio desde';
    $lang['busquedaPS_precioHasta'] = 'Precio hasta';
    $lang['busquedaPS_estado'] = 'Estado';
    $lang['busquedaPS_impuesto'] = 'Impuesto';
    $lang['busquedaPS_unidad'] = 'Unidad';

    $lang['Producto_agregarNuevo'] = 'Agregar producto';
    $lang['Producto_tipo'] = 'Tipo de elemento';
    $lang['Producto_categorias'] = 'Categorías';
    $lang['Producto_categoriaNombre'] = 'Nombre de la categoría';
    $lang['Producto_tablaNombre'] = 'Nombre';
    $lang['Producto_tablaCodigo'] = 'Código';
    $lang['Producto_tablaDescripcion'] = 'Descripción';
    $lang['Producto_tablaPrecio'] = 'Precio';
    $lang['Producto_tablaOpciones'] = 'Opciones';
    $lang['Producto_tablaBusqueda'] = 'Buscar: ';
    $lang['Producto_productos'] = 'Productos';
    $lang['formProducto_codigo'] = 'Código';
    $lang['formProducto_nombre'] = 'Nombre';
    $lang['formProducto_descripcion'] = 'Descripción';
    $lang['formProducto_precio'] = 'Precio';
    $lang['formProducto_imagen'] = 'Imagen';
    $lang['formProducto_examinar'] = 'Ex';
    $lang['formProducto_caracteristicas'] = 'Características';
    $lang['formProducto_caracteristicasDescripcion'] = 'Descripción';
    $lang['formProducto_caracteristicasOpciones'] = 'Opciones';
    $lang['formProducto_nuevaCaracteristica'] = 'Nueva característica';
    $lang['formProducto_enviar'] = 'Agregar producto';
    $lang['formProducto_editar'] = 'Guardar cambios';
    $lang['formProducto_anadirImpuesto'] = 'Añadir impuesto';
    $lang['formProducto_impuestos'] = 'Impuestos';


$lang['agregar_nuevo'] = 'Agregar nuevo';
//Formulario de logueo
    $lang['login_username'] = 'Nombre de usuario';
    $lang['login_password'] = 'Contraseña';

//botones formulario cliente
	$lang['formCliente_agregar'] = 'Nuevo contacto';
	$lang['formCliente_enviar'] = 'Agregar cliente';
	$lang['formCliente_editar'] = 'Guardar cambios';


    //Formulario de plan
    $lang['planNuevo'] = 'Agregar nuevo';
    $lang['formPlan_nombre'] = 'Nombre';
    $lang['formPlan_descripcion'] = 'Descripción';
    $lang['formPlan_costo'] = 'Costo';
    $lang['formPlan_beneficio1'] = 'Administrar';
    $lang['formPlan_beneficio2'] = 'Cotizar';
    $lang['formPlan_beneficio3'] = 'Embed';
    $lang['formPlan_beneficio4'] = 'Vender';
    $lang['formPlan_agregar'] = 'Agregar';

    //tabla de plan
    $lang['planes'] = 'Planes';
    $lang['tablaPlanes_nombre'] = 'Nombre';
    $lang['tablaPlanes_costo'] = 'Costo';
    $lang['tablaPlanes_beneficios'] = 'Beneficios';
    $lang['tablaPlanes_opciones'] = 'Opciones';

    //Pagos
    $lang['datosDelServicio'] = 'Datos del servicio';
    $lang['monto_mensual'] = 'Monto mensual';
    $lang['tipo_plan'] = 'Tipo de plan';
    $lang['fecha_pago'] = 'Fecha de último pago';
    $lang['estado_pago'] = 'Estado';
    $lang['lista_pagos_pendientes'] = 'Lista de pagos pendientes';
    $lang['pagar_servicio'] = 'Pagar servicio';
    $lang['lista_pagos_recientes'] = 'Lista de pagos recientes';
    $lang['mensaje_pago'] = 'Ingrese los datos de su tarjeta';
    $lang['tarjeta_numero'] = 'Número de tarjeta';
    $lang['tarjeta_expiracion'] = 'Mes y año de expiración';



    //tabla de pagos
    $lang['pagos'] = 'Pagos';
    $lang['tablaPagos_codigo'] = 'Código';
    $lang['tablaPagos_empresa'] = 'Empresa';
    $lang['tablaPagos_fecha'] = 'Fecha';
    $lang['tablaPagos_monto'] = 'Monto';
    $lang['tablaPagos_comprobante'] = 'Comprobante de pago';
    $lang['tablaPagos_opciones'] = 'Opciones';
    $lang['ver_comprobante'] = 'Ver comprobante';
    $lang['mostrarComprobante'] = 'Comprobante del pago';

    //Formulario de moneda
    $lang['monedas'] = 'Monedas';
    $lang['formMoneda_agregar'] = 'Agregar';
    $lang['formMoneda_nombre'] = 'Nombre';
    $lang['formMoneda_signo'] = 'Símbolo';
    $lang['monedaNuevo'] = 'Agregar nuevo';

    //Generar embed
    $lang['incluir'] = 'Incluir productos/servicios';
    $lang['noIncluir'] = 'No incluir productos/servicios';
    $lang['si'] = 'Sí';
    $lang['no'] = 'No';
    $lang['vertical'] = 'Vertical';
    $lang['horizontal'] = 'Horizontal';
    $lang['copiarCodigo'] = 'Copiar código';

    //Embed
    $lang['formEmbed_enviar'] = 'Enviar';
    $lang['formEmbed_correo'] = 'Correo electrónico';
    $lang['formEmbed_nombre'] = 'Nombre completo';
    $lang['formEmbed_telefono'] = 'Número telefónico';
    $lang['formEmbed_detalle'] = 'Detalles adicionales';
    $lang['ListaEmbed_tablaNombre'] = 'Nombre';
    $lang['ListaEmbed_tablaPrecio'] = 'Precio';
    $lang['ListaEmbed_tablaCantidad'] = 'Cantidad';
    $lang['formEmbedProducto_cerrar'] = 'Cerrar';

    //Formulario financiamiento
    $lang['financiamientoNuevo'] = 'Agregar nuevo';
    $lang['formFinanciamiento_nombre'] = 'Nombre';
    $lang['formFinanciamiento_descripcion'] = 'Descripción';
    $lang['formFinanciamiento_agregar'] = 'Agregar';

    //tabla financiamiento
    $lang['tablaFinanciamiento_nombre'] = 'Nombre';
    $lang['tablaFinanciamiento_descripcion'] = 'Descripción';

//Tool tips
    $lang['tooltip_verEditar'] = 'Ver / Editar';
    $lang['tooltip_annadir'] = 'Añadir';
    $lang['tooltip_duplicar'] = 'Duplicar';
    $lang['tooltip_finalizar'] = 'Finalizar';
    $lang['tooltip_examinar'] = 'Examinar';
    $lang['tooltip_eliminar'] = 'Eliminar';
    $lang['tooltip_revisar'] = 'Revisar';
    $lang['tooltip_cotizar'] = 'Crear cotización';
    $lang['tooltip_pantallaCompleta'] = 'Pantalla completa';
    $lang['tooltip_notificaciones'] = 'Notificaciones';
    $lang['tooltip_configuracion'] = 'Configuración';
    $lang['tooltip_eliminarSeleccionados'] = 'Eliminar los elementos seleccionados';
    $lang['tooltip_imprimirSeleccionados'] = 'Imprimir los elementos seleccionados';
    $lang['tooltip_exportarSeleccionados'] = 'Exportar tabla';
    $lang['tooltip_guardarEnviar'] = 'Guardar y enviar';
    $lang['tooltip_guardarDescargar'] = 'Guardar y descargar';
    $lang['tooltip_guardarCerrar'] = 'Guardar y cerrar';
    $lang['tooltip_cancelarCot'] = 'Cancelar cotización';

    $lang['menuOpciones_seleccionar'] = 'Opciones';
    $lang['menuOpciones_editar'] = 'Editar';
    $lang['menuOpciones_ver'] = 'Ver';
    $lang['menuOpciones_cotizar'] = 'Cotizar';
    $lang['menuOpciones_desactivar'] = 'Desactivar';
    $lang['menuOpciones_eliminar'] = 'Eliminar';
    $lang['menuOpciones_abrir'] = 'Abrir';
    $lang['menuOpciones_agregarCategoria'] = 'Agregar categoría';
    $lang['menuOpciones_agregarProducto'] = 'Producto';
    $lang['menuOpciones_agregarServicio'] = 'Servicio';
    $lang['menuOpciones_cambiarCategoria'] = 'Cambiar categoría';
    $lang['menuOpciones_activar'] = 'Activar';
    $lang['menuOpciones_desactivar'] = 'Desactivar';
    $lang['menuOpciones_verCategoria'] = 'Ver categoría';
    $lang['opciones_seleccionadosEliminar'] = 'Eliminar los elementos seleccionados';
    $lang['opciones_seleccionadosImprimir'] = 'Imprimir los elementos seleccionados';
    $lang['opciones_seleccionadosCotizar'] = 'Realizar una cotización con los elementos seleccionados';
    $lang['opciones_seleccionadosExportar'] = 'Exportar tabla';
    $lang['opciones_seleccionadosExportarPdf'] = 'Pdf';
    $lang['opciones_seleccionadosExportarExcel'] = 'Excel';

//Captcha
    $lang['cambiar_captcha'] = 'Cambiar captcha';

//Clientes editar
    $lang['clientes_busquedaAvanzada'] = 'Búsqueda avanzada';
    $lang['clientes_info'] = 'Información del cliente';
    $lang['clientes_ver'] = 'Información';
    $lang['clientes_editar'] = 'Editar datos';
    $lang['clientes_archivos'] = 'Archivos';
    $lang['clientes_cotizaciones'] = 'Cotizaciones';
    $lang['clientes_buscar'] = 'Buscar: ';
    $lang['clientes_archivosNombre'] = 'Nombre del archivo';
    $lang['clientes_archivosDescripcion'] = 'Descripción';
    $lang['clientes_archivosPeso'] = 'Tamaño';
    $lang['clientes_archivosFecha'] = 'Fecha';
    $lang['clientes_archivosOpciones'] = 'Opciones';
    $lang['clientes_archivos_accionEliminar'] = 'Eliminar archivos seleccionados';
    $lang['clientes_archivoNuevo'] = 'Agregar nuevo archivo';
    $lang['clientes_archivoEliminar'] = '¿Realmente desea eliminar el archivo seleccionado?';
    $lang['clientes_archivosSeleccionadosEliminar'] = '¿Realmente desea eliminar los archivos seleccionados?';
    $lang['tooltip_descargarArchivo'] = 'Abrir archivo en otra pestaña';
    $lang['clientes_busquedaDesde'] = 'Desde: ';
    $lang['clientes_busquedaHasta'] = 'Hasta: ';

//Olvidar contrasenna
    $lang['olvidarContrasenna_mensaje'] = 'Digite una dirección de correo electrónico para poder reestablecer la contraseña de su cuenta';
    $lang['olvidarContrasenna_correo'] = 'Correo electrónico';
    $lang['olvidarContrasenna_enviar'] = 'Enviar';

//Usuarios editar
    $lang['usuarios_info'] = 'Información del usuario';
    $lang['usuarios_verEditar'] = 'Ver / Editar información';
    $lang['usuarios_ver'] = 'Perfil';
    $lang['usuarios_editar'] = 'Editar';
    $lang['usuarios_cotizaciones'] = 'Cotizaciones';


//landing page
    $lang['correoInicio'] = 'hello@touchcr.com';
    $lang['nombreInicio'] = 'touch!';
    $lang['registrarse'] = 'Registrarse';
    $lang['ingresar'] = 'Ingresar';
    $lang['queEsTouch'] = '¿Qué es Touch!?';
    $lang['faq'] = 'FAQ';
    $lang['faq2'] = 'Preguntas frecuentes';
    $lang['nosotros'] = 'Nosotros';
    $lang['quienesLoUsan'] = '¿Quiénes lo usan?';
    $lang['prensa'] = 'Prensa';
    $lang['sobreTouch'] = 'Sobre Touch!';
    $lang['comoFunciona'] = '¿Cómo funciona?';
    $lang['beneficios'] = 'Beneficios';
    $lang['precios'] = 'Precios';
    $lang['prensa'] = 'Prensa';
    $lang['terminosCondiciones'] = 'Términos y condiciones de uso';
    $lang['planes'] = 'Planes';
    $lang['cuantoDeboPagar'] = '¿Cuánto debo pagar?';
    $lang['tiposDePlanes'] = 'Tipos de planes';
    $lang['metodosDePago'] = 'Médotos de pago';
    $lang['beneficios'] = 'Beneficios Touch!';
    $lang['realizarCotizaciones'] = 'Realizar cotizaciones';
    $lang['cuidarCotizaciones'] = 'Cuidar tus cotizaciones';
    $lang['manejarProveedores'] = 'Manejar tus proveedores';
    $lang['administrarEmpleados'] = 'Administrar tus empleados';
    $lang['mantenerSeguraInformacion'] = 'Mantener segura tu información';
    $lang['muchoMas'] = 'Mucho más...';
    $lang['contactenos'] = 'Contáctenos';
    $lang['telefonoInicio'] = '+506-24542407';
    $lang['slogan'] = 'Keep in Touch!';
    $lang['textoPrincipal'] = 'Toda la información de su empresa a su alcance.  Clientes, Cotizaciones, Facturas entre otras. ';
    $lang['pruebeloGratis'] = 'Pruébelo gratis';
    $lang['conTouch'] = 'Con Touch!';
    $lang['textoSecundario'] = 'Podrá controlar sus cotizaciones, clientes, empleados, proveedores entre otras opciones';
    $lang['numeroEmpresas'] = '10,000+';
    $lang['empresasUtilizandoTouch'] = 'EMPRESAS UTILIZANDO TOUCH!';
    $lang['numeroCotizaciones'] = '121.291+';
    $lang['cotizacionesEnviadas'] = 'COTIZACIONES ENVIADAS A TRAVÉS DE TOUCH!';
    $lang['textoPlan'] = 'Selecciona el plan Touch! que más te se adapte a tu negocio:';
    $lang['nombrePlan1'] = 'Prueba';
    $lang['montoPlan1'] = '$0';
    $lang['tiempoPlan1'] = '30 días gratis';
    $lang['nombrePlan2'] = 'Básico';
    $lang['montoPlan2'] = '$12';
    $lang['tiempoPlan2'] = 'Mensual';
    $lang['nombrePlan3'] = 'Avanzado';
    $lang['montoPlan3'] = '$22';
    $lang['tiempoPlan3'] = 'Mensual';
    $lang['iniciar'] = 'Iniciar';
    $lang['pagosEnLinea'] = 'Pagos en línea';
    $lang['textoContacto'] = 'Estaremos muy felices y atentos esperando tu contacto';

    $lang['archivo_descripcion'] = 'Descripción del archivo';
    $lang['archivo_upload'] = 'Subir archivo';

?>
