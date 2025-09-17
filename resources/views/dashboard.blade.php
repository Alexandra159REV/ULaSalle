<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Usuario Logueado</title>
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
            min-height: 100vh;
            color: #4a5568;
            padding: 20px;
        }
        
        .dashboard-container {
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        
        .university-info {
            display: flex;
            align-items: center;
        }
        
        .university-logo {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #a0d2eb 0%, #7cb9e8 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            margin-right: 15px;
        }
        
        .user-info {
            display: flex;
            align-items: center;
        }
        
        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            margin-left: 15px;
            border: 2px solid #bee3f8;
        }
        
        .welcome-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 18px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
        }
        
        .user-avatar-large {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #bee3f8;
            margin: 0 auto 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            color: #2c5282;
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .lead {
            color: #718096;
            font-size: 1.2rem;
            margin-bottom: 25px;
        }
        
        .alert-custom {
            background: linear-gradient(135deg, #c6f6d5 0%, #9ae6b4 100%);
            color: #22543d;
            border: none;
            border-radius: 12px;
            padding: 15px 20px;
            margin-bottom: 25px;
        }
        
        .info-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .info-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 14px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
            transition: transform 0.3s ease;
            border: 1px solid #e2e8f0;
        }
        
        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        
        .info-card i {
            font-size: 2rem;
            color: #7cb9e8;
            margin-bottom: 15px;
        }
        
        .info-card h3 {
            color: #2c5282;
            font-size: 1.1rem;
            margin-bottom: 10px;
        }
        
        .info-card p {
            color: #718096;
            margin-bottom: 0;
        }
        
        .btn-action {
            background: linear-gradient(135deg, #a0d2eb 0%, #7cb9e8 100%);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(124, 185, 232, 0.3);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            margin: 0 10px;
        }
        
        .btn-action i {
            margin-right: 8px;
        }
        
        .btn-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(124, 185, 232, 0.4);
            color: white;
        }
        
        .btn-logout {
            background: linear-gradient(135deg, #fed7d7 0%, #feb2b2 100%);
            box-shadow: 0 4px 15px rgba(254, 178, 178, 0.3);
        }
        
        .btn-logout:hover {
            box-shadow: 0 6px 20px rgba(254, 178, 178, 0.4);
        }
        
        .session-info {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 12px;
            padding: 15px;
            margin-top: 25px;
            display: inline-block;
        }
        
        .session-info small {
            color: #718096;
        }
        
        .btn-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 30px;
        }
        
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }
            
            .user-info {
                margin-top: 15px;
            }
            
            .btn-container {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-action {
                width: 100%;
                max-width: 280px;
                margin: 5px 0;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Header -->
        <div class="header">
            <div class="university-info">
                <div class="university-logo">
                    <i class="fas fa-university"></i>
                </div>
                <div>
                    <h2 class="m-0">Universidad La Salle</h2>
                    <p class="m-0 text-muted">Plataforma Estudiantil</p>
                </div>
            </div>
            
            <div class="user-info">
                <div class="text-end">
                    <h5 class="m-0">{{ auth()->user()->name }}</h5>
                    <p class="m-0 text-muted">{{ auth()->user()->email }}</p>
                </div>
                <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&background=7cb9e8&color=fff&size=100" 
                     class="user-avatar" alt="Avatar">
            </div>
        </div>
        
        <!-- Tarjeta de bienvenida -->
        <div class="welcome-card">
            <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&background=7cb9e8&color=fff&size=200" 
                 class="user-avatar-large" alt="Avatar">
            
            <h1>¡Bienvenido!</h1>
            <p class="lead">Has iniciado sesión correctamente en el sistema</p>
            
            <div class="alert-custom">
                <i class="fas fa-check-circle me-2"></i>
                <strong>Sesión activa</strong> - Estás logueado en el sistema
            </div>

            <!-- Información del usuario -->
            <div class="info-cards">
                <div class="info-card">
                    <i class="fas fa-user"></i>
                    <h3>Usuario</h3>
                    <p>{{ auth()->user()->name }}</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-envelope"></i>
                    <h3>Email</h3>
                    <p>{{ auth()->user()->email }}</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-clock"></i>
                    <h3>Hora de acceso</h3>
                    <p>{{ now()->format('H:i') }}</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-calendar-day"></i>
                    <h3>Fecha de acceso</h3>
                    <p>{{ now()->format('d/m/Y') }}</p>
                </div>
            </div>

            <!-- Botones de acción -->
            <div class="btn-container">
                <a href="{{ route('llenadoestudiantes') }}" class="btn-action">
                    <i class="fas fa-edit"></i> Llenar formulario
                </a>
                
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-action btn-logout">
                        <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                    </button>
                </form>
            </div>

            <!-- Información de la sesión -->
            <div class="session-info">
                <small>
                    <i class="fas fa-info-circle me-1"></i>
                    Sesión iniciada: {{ now()->format('d/m/Y H:i:s') }}
                </small>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>