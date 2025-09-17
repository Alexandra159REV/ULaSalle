<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla Principal</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #87CEEB; /* Color celeste sólido */
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: #2c3e50;
        }
        
        .container {
            background: rgba(255, 255, 255, 0.85);
            border-radius: 25px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 650px;
            padding: 50px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(5px);
        }
        
        .header {
            margin-bottom: 35px;
        }
        
        h1 {
            font-size: 3.2rem;
            color: #2980b9;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .subtitle {
            font-size: 1.4rem;
            color: #7f8c8d;
            margin-bottom: 10px;
        }
        
        .divider {
            height: 3px;
            background: linear-gradient(to right, transparent, #3498db, transparent);
            margin: 30px 0;
            border-radius: 50%;
        }
        
        .navigation {
            display: flex;
            flex-direction: column;
            gap: 22px;
            margin-top: 40px;
        }
        
        .nav-item {
            display: flex;
            align-items: center;
            background: rgba(52, 152, 219, 0.1);
            padding: 22px 30px;
            border-radius: 15px;
            transition: all 0.3s ease;
            border: 2px solid rgba(52, 152, 219, 0.2);
            cursor: pointer;
        }
        
        .nav-item:hover {
            background: rgba(52, 152, 219, 0.2);
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(0, 0, 0, 0.15);
            border-color: rgba(52, 152, 219, 0.4);
        }
        
        .nav-item:active {
            transform: translateY(0);
        }
        
        input[type="checkbox"] {
            width: 22px;
            height: 22px;
            margin-right: 20px;
            cursor: pointer;
            accent-color: #3498db;
        }
        
        .nav-label {
            font-size: 1.3rem;
            font-weight: 500;
            color: #2c3e50;
            flex-grow: 1;
            text-align: left;
        }
        
        .icon {
            margin-left: 15px;
            font-size: 1.4rem;
            color: #3498db;
        }
        
        @media (max-width: 600px) {
            .container {
                padding: 30px 25px;
            }
            
            h1 {
                font-size: 2.5rem;
            }
            
            .subtitle {
                font-size: 1.2rem;
            }
            
            .nav-label {
                font-size: 1.1rem;
            }
            
            .nav-item {
                padding: 18px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>¡Bienvenido!</h1>
            <p class="subtitle">Selecciona una de las siguientes tipografias</p>
        </div>
        
        <div class="divider"></div>
        
        <div class="navigation">
            <label class="nav-item">
                <input type="checkbox">
                <span class="nav-label">Arial</span>
                
                <span class="icon">➡️</span>
            </label>
            
            <label class="nav-item">
                <input type="checkbox">
                <span class="nav-label">Carta</span>
                
                <span class="icon">➡️</span>
            </label>
            
            <label class="nav-item">
                <input type="checkbox">
                <span class="nav-label">Mezcla</span>
                
                <span class="icon">➡️</span>
            </label>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    // Desmarcar otros checkboxes cuando se selecciona uno
                    if (this.checked) {
                        checkboxes.forEach(otherCheckbox => {
                            if (otherCheckbox !== this) {
                                otherCheckbox.checked = false;
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>