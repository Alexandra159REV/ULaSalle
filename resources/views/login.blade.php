<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Universidad La Salle</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e6f7ff 0%, #c3e6fc 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            color: #4a5568;
        }
        
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 90%;
            max-width: 420px;
            position: relative;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        
        .university-logo {
            width: 80px;
            height: 80px;
            margin: 0 auto 15px;
            background: linear-gradient(135deg, #a0d2eb 0%, #7cb9e8 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 32px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            color: #2c5282;
            font-size: 28px;
            margin-bottom: 5px;
            font-weight: 600;
        }
        
        h2 {
            color: #4a5568;
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 25px;
        }
        
        p {
            color: #718096;
            margin-bottom: 30px;
            font-size: 15px;
            line-height: 1.5;
        }
        
        .google-btn {
            background: linear-gradient(135deg, #a0d2eb 0%, #7cb9e8 100%);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(124, 185, 232, 0.3);
            width: 100%;
        }
        
        .google-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(124, 185, 232, 0.4);
        }
        
        .google-btn i {
            margin-right: 10px;
            font-size: 18px;
        }
        
        .options-menu {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        
        .menu-btn {
            background: #ebf8ff;
            color: #4299e1;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid #bee3f8;
        }
        
        .menu-btn:hover {
            background: #bee3f8;
            transform: rotate(90deg);
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            top: 50px;
            background: white;
            min-width: 200px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            z-index: 1;
            overflow: hidden;
        }
        
        .dropdown-content a, .dropdown-content button {
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            color: #4a5568;
            text-align: left;
            background: none;
            border: none;
            width: 100%;
            cursor: pointer;
            font-family: inherit;
            font-size: 14px;
            transition: all 0.2s ease;
            border-bottom: 1px solid #f1f5f9;
        }
        
        .dropdown-content a i, .dropdown-content button i {
            margin-right: 10px;
            color: #7cb9e8;
        }
        
        .dropdown-content a:hover, .dropdown-content button:hover {
            background: #f1f5f9;
            padding-left: 25px;
        }
        
        .dropdown-content a:last-child, .dropdown-content button:last-child {
            border-bottom: none;
        }
        
        .show {
            display: block;
            animation: fadeIn 0.3s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .copyright {
            margin-top: 30px;
            font-size: 12px;
            color: #a0aec0;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="options-menu">
            <div class="menu-btn" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </div>
            <div id="dropdown" class="dropdown-content">
                <a href="{{ route('administrador') }}"><i class="fas fa-user-shield"></i> Administrador</a>
                <a href="{{ route('asistente') }}"><i class="fas fa-user-tie"></i> Asistente</a>
                <a href="{{ route('formulario') }}"><i class="fas fa-desktop"></i> Pantalla</a>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <button type="submit"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</button>
                </form>
            </div>
        </div>
        
        <div class="university-logo">
            <i class="fas fa-university"></i>
        </div>
        <h1>Universidad La Salle</h1>
        <h2>Plataforma Estudiantil</h2>
        <p>Inicia sesión con tu cuenta institucional para acceder a todos los servicios universitarios</p>
        
        <a href="{{ route('google.login') }}" class="google-btn">
            <i class="fab fa-google"></i> Continuar con Google
        </a>
        
        <p class="copyright">© 2025 Universidad La Salle. Todos los derechos reservados.</p>
    </div>

    <script>
        function toggleMenu() {
            document.getElementById("dropdown").classList.toggle("show");
        }
        
        // Cerrar el menú si se hace clic fuera de él
        window.onclick = function(event) {
            if (!event.target.matches('.menu-btn') && !event.target.matches('.menu-btn *')) {
                var dropdown = document.getElementById("dropdown");
                if (dropdown.classList.contains('show')) {
                    dropdown.classList.remove('show');
                }
            }
        }
    </script>
</body>
</html>