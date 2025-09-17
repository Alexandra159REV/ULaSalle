<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Beca</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #87CEEB 0%, #5ca8cf 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
            color: #2c3e50;
        }
        
        .container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 25px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 700px;
            padding: 60px 50px;
            text-align: center;
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.7);
        }
        
        .header {
            margin-bottom: 40px;
        }
        
        h1 {
            font-size: 2.8rem;
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
            margin: 35px 0;
            border-radius: 50%;
        }
        
        .options {
            display: flex;
            flex-direction: column;
            gap: 22px;
            margin: 40px 0;
        }
        
        .option-btn {
            display: flex;
            align-items: center;
            background: rgba(52, 152, 219, 0.1);
            padding: 22px 30px;
            border-radius: 15px;
            transition: all 0.3s ease;
            border: 2px solid rgba(52, 152, 219, 0.2);
            cursor: pointer;
            text-align: left;
        }
        
        .option-btn:hover {
            background: rgba(52, 152, 219, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        input[type="radio"] {
            width: 22px;
            height: 22px;
            margin-right: 20px;
            cursor: pointer;
            accent-color: #3498db;
        }
        
        .option-label {
            font-size: 1.3rem;
            font-weight: 500;
            color: #2c3e50;
            flex-grow: 1;
        }
        
        .icon {
            margin-left: 15px;
            font-size: 1.4rem;
            color: #3498db;
        }
        
        .selection-message {
            margin-top: 25px;
            font-size: 1.2rem;
            color: #3498db;
            font-weight: 500;
            padding: 15px;
            background: rgba(52, 152, 219, 0.1);
            border-radius: 12px;
            border: 2px dashed rgba(52, 152, 219, 0.3);
        }
        
        .image-section {
            margin: 40px 0 30px;
        }
        
        .image-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 25px;
            text-align: left;
            padding-left: 10px;
        }
        
        .image-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 20px;
        }
        
        .image-btn {
            padding: 18px 35px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.2rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            min-width: 180px;
        }
        
        .image-btn:hover {
            background: #2980b9;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        
        .image-btn:active {
            transform: translateY(0);
        }
        
        @media (max-width: 700px) {
            .container {
                padding: 40px 30px;
            }
            
            h1 {
                font-size: 2.3rem;
            }
            
            .subtitle {
                font-size: 1.2rem;
            }
            
            .option-label {
                font-size: 1.1rem;
            }
            
            .option-btn {
                padding: 18px 20px;
            }
            
            .image-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .image-btn {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Llenado de formulario de beca</h1>
            <p class="subtitle">Selecciona una de las siguientes tipografías:</p>
        </div>
        
        <div class="options">
            <label class="option-btn">
                <input type="radio" name="font-type" value="imprenta">
                <span class="option-label">Imprenta</span>
                <span class="icon">🖨️</span>
            </label>
            
            <label class="option-btn">
                <input type="radio" name="font-type" value="carta" checked>
                <span class="option-label">Carta</span>
                <span class="icon">✉️</span>
            </label>
            
            <label class="option-btn">
                <input type="radio" name="font-type" value="mezcla" checked>
                <span class="option-label">Mezcla</span>
                <span class="icon">🔄</span>
            </label>
        </div>
        
        <div class="selection-message">
            Selección realizada
        </div>
        
        <div class="divider"></div>
        
        <div class="image-section">
            <h2 class="image-title">Subir una imagen</h2>
            
            <div class="image-buttons">
                <button class="image-btn">Subir una imagen</button>
                <button class="image-btn">Sacar foto</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const radioButtons = document.querySelectorAll('input[type="radio"]');
            
            radioButtons.forEach(radio => {
                radio.addEventListener('change', function() {
                    // Aquí puedes agregar cualquier funcionalidad adicional
                    // cuando se cambie la selección
                    console.log('Tipografía seleccionada:', this.value);
                });
            });
            
            const imageButtons = document.querySelectorAll('.image-btn');
            imageButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    if (this.textContent === 'Subir una imagen') {
                        alert('Funcionalidad para subir una imagen');
                    } else if (this.textContent === 'Sacar foto') {
                        alert('Funcionalidad para sacar una foto');
                    }
                });
            });
        });
    </script>
</body>
</html>