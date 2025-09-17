<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Becas - Universidad La Salle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4a8cbb;
            --primary-light: #e8f2f9;
            --secondary: #f8f9fa;
            --accent: #7fb3d5;
            --light: #ffffff;
            --text: #4a5568;
            --text-light: #718096;
            --success: #68d391;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e6f2ff 0%, #f0f7ff 100%);
            min-height: 100vh;
            color: var(--text);
            padding: 20px;
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.6);
            overflow: hidden;
            backdrop-filter: blur(10px);
        }
        
        .header-section {
            background: linear-gradient(135deg, var(--primary-light) 0%, #e1effa 100%);
            color: var(--text);
            padding: 2.5rem;
            text-align: center;
            border-radius: 24px 24px 0 0;
            border-bottom: 1px solid rgba(74, 140, 187, 0.1);
        }
        
        .logo-container {
            margin-bottom: 1.2rem;
        }
        
        .logo {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--primary);
            letter-spacing: -0.5px;
        }
        
        .subtitle {
            font-size: 1.2rem;
            color: var(--text-light);
            font-weight: 400;
        }
        
        .content-section {
            padding: 2.5rem;
        }
        
        .section-title {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 1.8rem;
            padding-bottom: 0.8rem;
            border-bottom: 2px solid var(--primary-light);
            font-size: 1.4rem;
        }
        
        .option-card {
            background: var(--light);
            border-radius: 16px;
            padding: 1.8rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
            border: 2px solid transparent;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .option-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            border-color: var(--accent);
        }
        
        .option-card.selected {
            border-color: var(--primary);
            background-color: var(--primary-light);
        }
        
        .option-icon {
            font-size: 2.2rem;
            margin-bottom: 1.2rem;
            color: var(--primary);
            background: rgba(74, 140, 187, 0.1);
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        
        .option-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.6rem;
            color: var(--text);
        }
        
        .option-desc {
            color: var(--text-light);
            margin-bottom: 0;
            line-height: 1.5;
        }
        
        .form-check-input {
            width: 1.3rem;
            height: 1.3rem;
            margin-top: 0.3rem;
            border: 2px solid #cbd5e0;
        }
        
        .form-check-input:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }
        
        .form-check-input:focus {
            box-shadow: 0 0 0 0.25rem rgba(74, 140, 187, 0.25);
        }
        
        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2.5rem;
            flex-wrap: wrap;
        }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            padding: 1rem 1.8rem;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(74, 140, 187, 0.15);
        }
        
        .btn-primary:hover {
            background-color: #3a7ca5;
            border-color: #3a7ca5;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(74, 140, 187, 0.2);
        }
        
        .btn-outline-primary {
            color: var(--primary);
            border-color: var(--primary);
            padding: 1rem 1.8rem;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            background: transparent;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(74, 140, 187, 0.2);
        }
        
        .admin-panel {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
        }
        
        .admin-btn {
            background: rgba(255, 255, 255, 0.95);
            color: var(--primary);
            border: 1px solid rgba(74, 140, 187, 0.2);
            border-radius: 12px;
            padding: 0.8rem 1.4rem;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            margin-left: 0.8rem;
            text-decoration: none;
            display: inline-block;
            backdrop-filter: blur(10px);
        }
        
        .admin-btn:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
            text-decoration: none;
            box-shadow: 0 6px 16px rgba(74, 140, 187, 0.25);
        }
        
        .notification-toast {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1050;
            background: var(--success);
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            box-shadow: 0 6px 16px rgba(104, 211, 145, 0.3);
            opacity: 0;
            transform: translateY(100px);
            transition: all 0.5s ease;
            font-weight: 500;
        }
        
        .notification-toast.show {
            opacity: 1;
            transform: translateY(0);
        }
        
        @media (max-width: 768px) {
            .content-section {
                padding: 1.8rem;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .admin-panel {
                position: relative;
                top: 0;
                right: 0;
                margin-bottom: 1.8rem;
                display: flex;
                justify-content: center;
                gap: 0.8rem;
            }
            
            .admin-btn {
                margin-left: 0;
                margin-bottom: 0.8rem;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .header-section {
                padding: 1.8rem;
            }
        }
        
        .footer {
            text-align: center;
            margin-top: 2.5rem;
            color: var(--text-light);
            font-size: 0.9rem;
        }
        
        .divider {
            height: 1px;
            background: linear-gradient(to right, transparent, rgba(74, 140, 187, 0.2), transparent);
            margin: 2rem 0;
        }
    </style>
</head>
<body>
    <div class="admin-panel">
        <a href="{{ route('administrador') }}" class="admin-btn">
            <i class="fas fa-user-shield me-2"></i>Administrador
        </a>
        <a href="{{ route('asistente') }}" class="admin-btn">
            <i class="fas fa-users me-2"></i>Asistentes
        </a>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="glass-card">
                    <div class="header-section">
                        <div class="logo-container">
                            <i class="fas fa-graduation-cap logo"></i>
                        </div>
                        <h1>Sistema de Solicitud de Becas</h1>
                        <p class="subtitle">Universidad La Salle</p>
                    </div>
                    
                    <div class="content-section">
                        <h3 class="section-title">Seleccione el formato de solicitud</h3>
                        
                        <div class="option-card" id="imprentaOption">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="formatOption" id="imprentaRadio">
                                <label class="form-check-label w-100" for="imprentaRadio">
                                    <div class="d-flex align-items-start">
                                        <div class="option-icon me-4">
                                            <i class="fas fa-print"></i>
                                        </div>
                                        <div>
                                            <h4 class="option-title">Formato Imprenta</h4>
                                            <p class="option-desc">Complete el formulario con letra de imprenta para una mejor legibilidad.</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        
                        <div class="option-card" id="cartaOption">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="formatOption" id="cartaRadio" checked>
                                <label class="form-check-label w-100" for="cartaRadio">
                                    <div class="d-flex align-items-start">
                                        <div class="option-icon me-4">
                                            <i class="fas fa-envelope-open-text"></i>
                                        </div>
                                        <div>
                                            <h4 class="option-title">Formato Carta</h4>
                                            <p class="option-desc">Ideal para solicitudes formales con formato de carta tradicional.</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        
                        <div class="option-card" id="mezclaOption">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="formatOption" id="mezclaRadio">
                                <label class="form-check-label w-100" for="mezclaRadio">
                                    <div class="d-flex align-items-start">
                                        <div class="option-icon me-4">
                                            <i class="fas fa-blender-phone"></i>
                                        </div>
                                        <div>
                                            <h4 class="option-title">Formato Mixto</h4>
                                            <p class="option-desc">Combine diferentes estilos según las secciones del formulario.</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        
                        <div class="divider"></div>
                        
                        <div class="action-buttons">
                            
                            <button class="btn btn-outline-primary btn-lg flex-fill" id="uploadBtn">
                                <i class="fas fa-upload me-2"></i>Subir Documento
                            </button>
                            <button class="btn btn-outline-primary btn-lg flex-fill" id="cameraBtn">
                                <i class="fas fa-camera me-2"></i>Tomar Foto
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="footer">
                    <p>© 2025 Universidad La Salle - Sistema de Gestión de Becas</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="notification-toast" id="notification">
        <i class="fas fa-check-circle me-2"></i>
        <span id="notificationText">Operación realizada con éxito</span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const optionCards = document.querySelectorAll('.option-card');
            const continueBtn = document.getElementById('continueBtn');
            const uploadBtn = document.getElementById('uploadBtn');
            const cameraBtn = document.getElementById('cameraBtn');
            const notification = document.getElementById('notification');
            const notificationText = document.getElementById('notificationText');
            
            // Seleccionar opción al hacer clic en la tarjeta
            optionCards.forEach(card => {
                card.addEventListener('click', function() {
                    const radioInput = this.querySelector('input[type="radio"]');
                    radioInput.checked = true;
                    
                    // Quitar selección de todas las tarjetas
                    optionCards.forEach(c => c.classList.remove('selected'));
                    // Agregar selección a la tarjeta clickeada
                    this.classList.add('selected');
                });
            });
            
            // Configurar evento para el botón Continuar
            continueBtn.addEventListener('click', function() {
                const selectedOption = document.querySelector('input[name="formatOption"]:checked');
                if (selectedOption) {
                    showNotification('Redirigiendo al formulario seleccionado...');
                    // Aquí iría la redirección real según la opción seleccionada
                    setTimeout(() => {
                        switch(selectedOption.id) {
                            case 'imprentaRadio':
                                window.location.href = '/formulario-imprenta';
                                break;
                            case 'cartaRadio':
                                window.location.href = '/formulario-carta';
                                break;
                            case 'mezclaRadio':
                                window.location.href = '/formulario-mezcla';
                                break;
                        }
                    }, 1500);
                } else {
                    showNotification('Por favor seleccione un formato primero');
                }
            });
            
            // Configurar evento para el botón Subir Documento
            uploadBtn.addEventListener('click', function() {
                showNotification('Funcionalidad de subida de documento activada');
                // Aquí iría la lógica para subir un documento
            });
            
            // Configurar evento para el botón Tomar Foto
            cameraBtn.addEventListener('click', function() {
                showNotification('Activando cámara para captura de documento...');
                // Aquí iría la lógica para activar la cámara
            });
            
            // Función para mostrar notificaciones
            function showNotification(message) {
                notificationText.textContent = message;
                notification.classList.add('show');
                
                setTimeout(() => {
                    notification.classList.remove('show');
                }, 3000);
            }
            
            // Seleccionar la opción por defecto al cargar
            document.getElementById('cartaOption').classList.add('selected');
        });
    </script>
</body>
</html>