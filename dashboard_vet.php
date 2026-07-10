<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard_vet.php</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="w3-card vet-top-container w3-teal">
    
    <div class="vet-identity-bar">
        <div>
            <span class="w3-xlarge" style="font-weight: bold; letter-spacing: 1px;">
                <i class="fa fa-clinic-medical"></i> El rincón de tu Mascota
            </span>
        </div>

        <div class="admin-profile-top">
            <div class="w3-right-align w3-hide-small" style="line-height: 1.2;">
                <span class="w3-medium" style="display: block;">Bienvenido, <strong></strong></span>
                <span class="w3-small w3-text-light-grey">Rol: Administrador</span>
                <span class="w3-small w3-text-lime" style="display: block; font-weight: bold;">
                    <i class="fa fa-key"></i> Inicio de sesion
                </span>
            </div>
            <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle w3-card-2 w3-border w3-border-white" style="width:48px; height:48px;" alt="Avatar Admin">
        </div>
    </div>

    <div class="w3-bar vet-nav-bar w3-medium">
        
        <div class="w3-dropdown-hover">
            <button class="w3-button w3-padding-16 w3-hover-blue"><i class="fa fa-paw"></i> Mascotas <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
                <a href="#" class="w3-bar-item w3-button w3-hover-blue"><i class="fa fa-list"></i> Lista de Mascotas</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue w3-light-grey"><i class="fa fa-plus-circle"></i> Registro de Pacientes</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue"><i class="fa fa-edit"></i> Actualizar Datos de Mascota</a>
            </div>
        </div>

        <div class="w3-dropdown-hover">
            <button class="w3-button w3-padding-16 w3-hover-blue"><i class="fa fa-user-md"></i> Cirugías <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
                <a href="#" class="w3-bar-item w3-button w3-hover-blue"><i class="fa fa-calendar"></i> Calendario de Cirugías</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue"><i class="fa fa-calendar-plus"></i> Programar Cirugía</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue"><i class="fa fa-notes-medical"></i> Seguimiento Postoperatorio</a>
            </div>
        </div>

        <div class="w3-dropdown-hover">
            <button class="w3-button w3-padding-16 w3-hover-blue"><i class="fa fa-syringe"></i> Vacunación <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
                <a href="#" class="w3-bar-item w3-button w3-hover-blue"><i class="fa fa-history"></i> Historial de Vacunación</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue"><i class="fa fa-file-medical"></i> Registrar Nueva Vacuna</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue"><i class="fa fa-clock"></i> Próximas Vacunas</a>
            </div>
        </div>

        <div class="w3-dropdown-hover">
            <button class="w3-button w3-padding-16 w3-hover-blue"><i class="fa fa-pills"></i> Farmacia <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
                <a href="#" class="w3-bar-item w3-button w3-hover-blue"><i class="fa fa-boxes"></i> Inventario de Farmacia</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue"><i class="fa fa-file-import"></i> Entrada de Medicamentos</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue w3-text-red"><i class="fa fa-exclamation-triangle"></i> Medicamentos por Vencer</a>
            </div>
        </div>

        <div class="w3-dropdown-hover">
            <button class="w3-button w3-padding-16 w3-hover-blue"><i class="fa fa-file-invoice-dollar"></i> Facturación <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-white w3-card-4">
                <a href="#" class="w3-bar-item w3-button w3-hover-blue"><i class="fa fa-plus"></i> Nueva Factura</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue"><i class="fa fa-folder-open"></i> Historial de Facturas</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue w3-text-orange"><i class="fa fa-clock"></i> Pagos Pendientes</a>
            </div>
        </div>

        <div class="w3-dropdown-hover w3-right">
            <button class="w3-button w3-padding-16 w3-hover-blue"><i class="fa fa-cogs"></i> Configuración <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-white w3-card-4" style="right:0">
                <a href="#" class="w3-bar-item w3-button w3-hover-blue"><i class="fa fa-building"></i> Datos de la Clínica</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-blue"><i class="fa fa-users-cog"></i> Usuarios del Sistema</a>
                <a href="#" class="w3-bar-item w3-button w3-text-red w3-hover-red"><i class="fa fa-sign-out-alt"></i> Cerrar Sesión</a>
            </div>
        </div>

    </div>
</div>

<div class="w3-container vet-main">
    <div class="w3-content w3-padding-24" style="max-width:1100px;">
        
        <div class="w3-margin-bottom">
            <h5><b><i class="fa fa-dashboard"></i> Panel de Control</b> / Módulo Mascotas / Registro</h5>
        </div>

        <div class="w3-card-4 w3-white">
            <div class="w3-container w3-teal">
                <h2><i class="fa fa-clipboard-list"></i> Registro de Pacientes</h2>
                <p>Ingrese los datos de la mascota y del propietario para el expediente clínico.</p>
            </div>
            
            <form class="w3-container w3-padding-24">
                <div class="w3-row-padding">
                    <div class="w3-half w3-margin-bottom">
                        <label class="w3-text-teal"><b>Nombre de la Mascota:</b></label>
                        <input class="w3-input w3-border w3-round" type="text" placeholder="" required>
                    </div>
                    <div class="w3-half w3-margin-bottom">
                        <label class="w3-text-teal"><b>DNI del Propietario:</b></label>
                        <input class="w3-input w3-border w3-round" type="text" placeholder="" required>
                    </div>
                </div>

                <div class="w3-row-padding w3-margin-top">
                    <div class="w3-third w3-margin-bottom">
                        <label class="w3-text-teal"><b>Especie:</b></label>
                        <select class="w3-select w3-border w3-round" name="especie">
                            <option value="" disabled selected>Seleccione una opción</option>
                            <option value="Canino">Canino (Perro)</option>
                            <option value="Felino">Felino (Gato)</option>
                            <option value="Ave">Ave</option>
                            <option value="Exótico">Exótico / Otro</option>
                        </select>
                    </div>
                    <div class="w3-third w3-margin-bottom">
                        <label class="w3-text-teal"><b>Raza:</b></label>
                        <input class="w3-input w3-border w3-round" type="text" placeholder="">
                    </div>
                    <div class="w3-third w3-margin-bottom">
                        <label class="w3-text-teal"><b>Peso (kg):</b></label>
                        <input class="w3-input w3-border w3-round" type="number" step="0.01" placeholder="">
                    </div>
                </div>

                <div class="w3-row-padding w3-margin-top">
                    <div class="w3-col m12">
                        <label class="w3-text-teal"><b>Alergias / Observaciones Clínicas:</b></label>
                        <textarea class="w3-textarea w3-border w3-round" rows="4" placeholder="" style="resize:none; width:100%; font-family:inherit; padding:8px;"></textarea>
                    </div>
                </div>

                <div class="w3-container w3-margin-top w3-padding-16 w3-right-align">
                    <button type="reset" class="w3-button w3-red w3-round w3-medium"><i class="fa fa-trash"></i> Limpiar Campos</button>
                    <button type="button" class="w3-button w3-blue w3-round w3-medium w3-margin-left"><i class="fa fa-save"></i> Guardar Información</button>
                </div>
            </form>
        </div>
    </div>
</div>

<footer class="w3-container w3-padding-16 w3-light-grey w3-center w3-border-top w3-margin-top">
    <p class="w3-small w3-text-grey">veterinaria - Derechos Reservados &copy; 2026</p>
</footer>

</body>
</html>