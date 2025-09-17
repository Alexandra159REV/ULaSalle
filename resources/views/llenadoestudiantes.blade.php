<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro - Universidad La Salle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f0f9ff 0%, #e6f7ff 100%);
            color: #4a5568;
            min-height: 100vh;
            padding: 20px;
        }
        
        .header {
            background: linear-gradient(135deg, #a0d2eb 0%, #7cb9e8 100%);
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        
        .header-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .university-logo {
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .form-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 18px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
        }
        
        .section-title {
            color: #2c5282;
            border-bottom: 2px solid #bee3f8;
            padding-bottom: 0.8rem;
            margin-bottom: 1.8rem;
            margin-top: 1.8rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .section-title i {
            font-size: 1.4rem;
        }
        
        .form-label {
            font-weight: 500;
            color: #4a5568;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .form-control, .form-select {
            padding: 0.8rem 1rem;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            background-color: #f7fafc;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #a0d2eb;
            box-shadow: 0 0 0 0.25rem rgba(124, 185, 232, 0.25);
            background-color: #fff;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #a0d2eb 0%, #7cb9e8 100%);
            border: none;
            border-radius: 50px;
            padding: 0.8rem 2rem;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(124, 185, 232, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(124, 185, 232, 0.4);
        }
        
        .btn-secondary {
            background: linear-gradient(135deg, #e2e8f0 0%, #cbd5e0 100%);
            color: #4a5568;
            border: none;
            border-radius: 50px;
            padding: 0.8rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        
        .btn-secondary:hover {
            transform: translateY(-2px);
            color: #4a5568;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }
        
        .required-field::after {
            content: " *";
            color: #e53e3e;
        }
        
        .form-check-input:checked {
            background-color: #7cb9e8;
            border-color: #7cb9e8;
        }
        
        .action-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2.5rem;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .footer-note {
            text-align: center;
            color: #718096;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }
        
        .input-group-icon {
            position: relative;
        }
        
        .input-group-icon .form-control {
            padding-left: 2.5rem;
        }
        
        .input-group-icon i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aec0;
        }
        
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
            }
            
            .action-buttons {
                flex-direction: column-reverse;
                align-items: stretch;
            }
            
            .btn-secondary, .btn-primary {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="container">
            <div class="header-content">
                <div class="university-logo">
                    <i class="fas fa-university"></i>
                </div>
                <div>
                    <h1>Formulario de Registro Estudiantil</h1>
                    <p class="lead mb-0">Universidad La Salle</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Formulario -->
        <div class="form-container">
            <form id="studentForm">
                <!-- Información Personal -->
                <h3 class="section-title">
                    <i class="fas fa-user-graduate"></i>
                    Información Personal
                </h3>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="colegio" class="form-label required-field">
                            <i class="fas fa-school"></i>Colegio de procedencia
                        </label>
                        <div class="input-group-icon">
                            <i class="fas fa-school"></i>
                            <input type="text" class="form-control" id="colegio" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nombre" class="form-label required-field">
                            <i class="fas fa-signature"></i>Nombre y apellido
                        </label>
                        <div class="input-group-icon">
                            <i class="fas fa-signature"></i>
                            <input type="text" class="form-control" id="nombre" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="fechaNacimiento" class="form-label required-field">
                            <i class="fas fa-birthday-cake"></i>Fecha de nacimiento
                        </label>
                        <div class="input-group-icon">
                            <i class="fas fa-birthday-cake"></i>
                            <input type="date" class="form-control" id="fechaNacimiento" required>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="email" class="form-label required-field">
                            <i class="fas fa-envelope"></i>Correo electrónico
                        </label>
                        <div class="input-group-icon">
                            <i class="fas fa-envelope"></i>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="celular" class="form-label required-field">
                            <i class="fas fa-mobile-alt"></i>Celular
                        </label>
                        <div class="input-group-icon">
                            <i class="fas fa-mobile-alt"></i>
                            <input type="tel" class="form-control" id="celular" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="telefonoFijo" class="form-label">
                            <i class="fas fa-phone"></i>Teléfono fijo
                        </label>
                        <div class="input-group-icon">
                            <i class="fas fa-phone"></i>
                            <input type="tel" class="form-control" id="telefonoFijo">
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="cedula" class="form-label required-field">
                            <i class="fas fa-id-card"></i>Cédula de identidad
                        </label>
                        <div class="input-group-icon">
                            <i class="fas fa-id-card"></i>
                            <input type="text" class="form-control" id="cedula" required>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="redSocial" class="form-label">
                            <i class="fas fa-hashtag"></i>Red social de preferencia
                        </label>
                        <select class="form-select" id="redSocial">
                            <option value="">Seleccione una opción</option>
                            <option value="instagram">Instagram</option>
                            <option value="facebook">Facebook</option>
                            <option value="twitter">Twitter/X</option>
                            <option value="tiktok">TikTok</option>
                            <option value="whatsapp">WhatsApp</option>
                            <option value="otra">Otra</option>
                        </select>
                    </div>
                </div>

                <!-- Dirección -->
                <h3 class="section-title">
                    <i class="fas fa-home"></i>
                    Dirección
                </h3>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="direccion" class="form-label required-field">
                            <i class="fas fa-map-marker-alt"></i>Dirección
                        </label>
                        <div class="input-group-icon">
                            <i class="fas fa-map-marker-alt"></i>
                            <input type="text" class="form-control" id="direccion" required>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="numeroCasa" class="form-label required-field">
                            <i class="fas fa-house-number"></i>Número de casa
                        </label>
                        <div class="input-group-icon">
                            <i class="fas fa-hashtag"></i>
                            <input type="text" class="form-control" id="numeroCasa" required>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zona" class="form-label required-field">
                            <i class="fas fa-map-marked-alt"></i>Zona
                        </label>
                        <div class="input-group-icon">
                            <i class="fas fa-map-marked-alt"></i>
                            <input type="text" class="form-control" id="zona" required>
                        </div>
                    </div>
                </div>

                <!-- Información de Padres -->
                <h3 class="section-title">
                    <i class="fas fa-users"></i>
                    Información de Padres o Tutores
                </h3>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nombrePadre" class="form-label">
                            <i class="fas fa-male"></i>Nombre completo del padre
                        </label>
                        <div class="input-group-icon">
                            <i class="fas fa-user"></i>
                            <input type="text" class="form-control" id="nombrePadre">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="celularPadre" class="form-label">
                            <i class="fas fa-mobile-alt"></i>Celular del padre
                        </label>
                        <div class="input-group-icon">
                            <i class="fas fa-mobile-alt"></i>
                            <input type="tel" class="form-control" id="celularPadre">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nombreMadre" class="form-label">
                            <i class="fas fa-female"></i>Nombre completo de la madre
                        </label>
                        <div class="input-group-icon">
                            <i class="fas fa-user"></i>
                            <input type="text" class="form-control" id="nombreMadre">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="celularMadre" class="form-label">
                            <i class="fas fa-mobile-alt"></i>Celular de la madre
                        </label>
                        <div class="input-group-icon">
                            <i class="fas fa-mobile-alt"></i>
                            <input type="tel" class="form-control" id="celularMadre">
                        </div>
                    </div>
                </div>

                <!-- Preferencias Académicas -->
                <h3 class="section-title">
                    <i class="fas fa-graduation-cap"></i>
                    Preferencias Académicas
                </h3>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label required-field">
                            <i class="fas fa-book"></i>Carreras de interés (3 opciones)
                        </label>
                        <div class="mb-2">
                            <div class="input-group-icon">
                                <i class="fas fa-1"></i>
                                <input type="text" class="form-control mb-2" placeholder="Primera opción" required>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="input-group-icon">
                                <i class="fas fa-2"></i>
                                <input type="text" class="form-control mb-2" placeholder="Segunda opción" required>
                            </div>
                        </div>
                        <div>
                            <div class="input-group-icon">
                                <i class="fas fa-3"></i>
                                <input type="text" class="form-control" placeholder="Tercera opción" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label required-field">
                            <i class="fas fa-university"></i>Universidades de preferencia (3 opciones)
                        </label>
                        <div class="mb-2">
                            <div class="input-group-icon">
                                <i class="fas fa-1"></i>
                                <input type="text" class="form-control mb-2" placeholder="Primera opción" required>
                            </div>
                        </div>
                        <div class="mb-2">
                            <div class="input-group-icon">
                                <i class="fas fa-2"></i>
                                <input type="text" class="form-control mb-2" placeholder="Segunda opción" required>
                            </div>
                        </div>
                        <div>
                            <div class="input-group-icon">
                                <i class="fas fa-3"></i>
                                <input type="text" class="form-control" placeholder="Tercera opción" required>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Información Adicional -->
                <h3 class="section-title">
                    <i class="fas fa-info-circle"></i>
                    Información Adicional
                </h3>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="medioConocimiento" class="form-label required-field">
                            <i class="fas fa-bullhorn"></i>¿Por qué medio te enteraste de la Universidad La Salle?
                        </label>
                        <select class="form-select" id="medioConocimiento" required>
                            <option value="">Seleccione una opción</option>
                            <option value="redes">Redes Sociales</option>
                            <option value="amigos">Amigos/Familiares</option>
                            <option value="colegio">Colegio</option>
                            <option value="feria">Feria Educativa</option>
                            <option value="publicidad">Publicidad</option>
                            <option value="web">Página Web</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label required-field">
                            <i class="fas fa-question-circle"></i>¿Te inscribirás a la Universidad La Salle?
                        </label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inscripcion" id="inscripcionSi" value="si" required>
                                <label class="form-check-label" for="inscripcionSi">Sí</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inscripcion" id="inscripcionNo" value="no">
                                <label class="form-check-label" for="inscripcionNo">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inscripcion" id="inscripcionIndeciso" value="indeciso">
                                <label class="form-check-label" for="inscripcionIndeciso">Indeciso</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botones de acción -->
                <div class="action-buttons">
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Enviar Formulario
                    </button>
                </div>
            </form>
        </div>

        <p class="footer-note">Los campos marcados con <span class="text-danger">*</span> son obligatorios</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Validación básica del formulario
        document.getElementById('studentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Aquí puedes agregar validaciones adicionales
            
            alert('Formulario enviado con éxito. Nos pondremos en contacto contigo pronto.');
            // this.submit(); // Descomenta para enviar realmente el formulario
        });
    </script>
</body>
</html>