<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión de Formularios - Asistente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #6da7b8;
      --primary-light: #eaf4f7;
      --secondary: #f8f9fa;
      --accent: #93c5d4;
      --text: #4a5568;
      --text-light: #718096;
      --success: #a3be8c;
      --warning: #ebcb8b;
      --danger: #bf616a;
      --border: #e2e8f0;
    }
    
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #f0f7fa 0%, #e3f2f7 100%);
      margin: 0;
      padding: 20px;
      color: var(--text);
      min-height: 100vh;
    }

    .glass-container {
      max-width: 1300px;
      margin: 0 auto;
      background: rgba(255, 255, 255, 0.95);
      padding: 30px;
      border-radius: 18px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.6);
      backdrop-filter: blur(10px);
    }

    .header {
      text-align: center;
      margin-bottom: 30px;
      padding-bottom: 20px;
      border-bottom: 2px solid var(--primary-light);
    }

    h1 {
      color: var(--primary);
      margin-bottom: 10px;
      font-weight: 700;
      font-size: 2.4rem;
    }

    .subtitle {
      color: var(--text-light);
      font-size: 1.1rem;
    }

    .admin-actions {
      display: flex;
      gap: 15px;
      margin-bottom: 25px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .action-btn {
      background: var(--primary-light);
      color: var(--primary);
      border: 1px solid var(--accent);
      padding: 12px 24px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 8px;
      text-align: center;
    }

    .action-btn:hover {
      background: var(--primary);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(109, 167, 184, 0.2);
    }

    .controls {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
      flex-wrap: wrap;
      gap: 20px;
      background: var(--primary-light);
      padding: 20px;
      border-radius: 14px;
    }

    .search-container {
      flex: 1;
      min-width: 300px;
    }

    input[type="text"] {
      padding: 14px;
      width: 100%;
      border: 1px solid var(--border);
      border-radius: 10px;
      font-size: 1rem;
      box-sizing: border-box;
      background: white;
      transition: all 0.3s ease;
    }

    input[type="text"]:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(109, 167, 184, 0.2);
    }

    .filters {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
    }

    select {
      padding: 12px;
      border: 1px solid var(--border);
      border-radius: 10px;
      background: white;
      color: var(--text);
      font-size: 0.95rem;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    select:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(109, 167, 184, 0.2);
    }

    .btn-add {
      background: var(--primary);
      color: white;
      padding: 12px 24px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      font-weight: 600;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .btn-add:hover {
      background: #5d95a6;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(109, 167, 184, 0.3);
    }

    table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
      margin-top: 20px;
      background: white;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
    }

    th, td {
      padding: 16px;
      text-align: left;
      border-bottom: 1px solid var(--border);
    }

    th {
      background: var(--primary-light);
      color: var(--primary);
      font-weight: 600;
      position: sticky;
      top: 0;
    }

    tr:last-child td {
      border-bottom: none;
    }

    tr:hover {
      background: #f8fbfc;
    }

    .btn {
      padding: 8px 14px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 0.9rem;
      margin-right: 6px;
      transition: all 0.2s;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .view-btn {
      background: var(--primary-light);
      color: var(--primary);
    }

    .view-btn:hover {
      background: var(--primary);
      color: white;
    }

    .delete-btn {
      background: rgba(191, 97, 106, 0.2);
      color: var(--danger);
    }

    .delete-btn:hover {
      background: var(--danger);
      color: white;
    }

    .badge {
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 0.85rem;
      font-weight: 600;
    }

    .excellent {
      background: rgba(163, 190, 140, 0.2);
      color: var(--success);
    }

    .good {
      background: rgba(235, 203, 139, 0.2);
      color: #d08770;
    }

    .average {
      background: rgba(191, 97, 106, 0.2);
      color: var(--danger);
    }

    .footer {
      margin-top: 30px;
      text-align: center;
      color: var(--text-light);
      font-size: 0.9rem;
      padding: 15px;
      border-top: 1px solid var(--border);
    }

    @media (max-width: 900px) {
      .controls {
        flex-direction: column;
        align-items: stretch;
      }
      
      .filters {
        width: 100%;
        justify-content: space-between;
      }
      
      table {
        display: block;
        overflow-x: auto;
      }
      
      .admin-actions {
        flex-direction: column;
        align-items: center;
      }
      
      .action-btn {
        width: 100%;
        max-width: 300px;
        justify-content: center;
      }
    }

    .stats-bar {
      display: flex;
      justify-content: space-around;
      margin: 25px 0;
      flex-wrap: wrap;
      gap: 15px;
    }

    .stat-card {
      background: white;
      padding: 20px;
      border-radius: 12px;
      text-align: center;
      flex: 1;
      min-width: 180px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      border: 1px solid var(--border);
    }

    .stat-number {
      font-size: 2rem;
      font-weight: 700;
      color: var(--primary);
      margin-bottom: 5px;
    }

    .stat-label {
      color: var(--text-light);
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <div class="glass-container">
    <div class="header">
      <h1><i class="fas fa-user-tie me-2"></i>Gestión de Formularios - Asistente</h1>
      <p class="subtitle">Sistema de gestión de estudiantes</p>
    </div>

    <div class="admin-actions">
      <a href="{{ route('administrador') }}" class="action-btn">
        <i class="fas fa-user-shield"></i> Panel de Administrador
      </a>
      <a href="{{ route('formulario') }}" class="action-btn">
        <i class="fas fa-file-alt"></i> Formulario de Registro
      </a>
      <a href="{{ route('login') }}" class="action-btn">
        <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
      </a>
    </div>

    <div class="stats-bar">
      <div class="stat-card">
        <div class="stat-number">10</div>
        <div class="stat-label">Total Estudiantes</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">4</div>
        <div class="stat-label">Ingeniería</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">9.2</div>
        <div class="stat-label">Promedio General</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">3</div>
        <div class="stat-label">Excelentes</div>
      </div>
    </div>
    
    <div class="controls">
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Buscar estudiante por nombre, carrera o email...">
      </div>
      
      <div class="filters">
        <select id="careerFilter">
          <option value="">Todas las carreras</option>
          <option value="Ingeniería">Ingeniería</option>
          <option value="Derecho">Derecho</option>
          <option value="Medicina">Medicina</option>
          <option value="Arquitectura">Arquitectura</option>
          <option value="Administración">Administración</option>
          <option value="Diseño">Diseño</option>
        </select>
        
        <select id="semesterFilter">
          <option value="">Todos los semestres</option>
          <option value="1">1° Semestre</option>
          <option value="2">2° Semestre</option>
          <option value="3">3° Semestre</option>
          <option value="4">4° Semestre</option>
          <option value="5">5° Semestre</option>
          <option value="6">6° Semestre</option>
        </select>
      </div>
      
      <button class="btn-add" onclick="agregarEstudiante()">
        <i class="fas fa-plus"></i> Agregar Estudiante
      </button>
    </div>

    <table id="studentTable">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Email</th>
          <th>Carrera</th>
          <th>Semestre</th>
          <th>Edad</th>
          <th>Promedio</th>
          <th>Estado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <!-- Aquí se cargarán los estudiantes con JS -->
      </tbody>
    </table>
    
    <div class="footer">
      Mostrando <span id="totalStudents">0</span> estudiantes | Sistema de Gestión Académica v2.0
    </div>
  </div>

  <script>
    // Datos simulados ampliados
    const estudiantes = [
      { nombre: "Ana López", email: "ana.lopez@universidad.edu", carrera: "Ingeniería", semestre: 5, edad: 21, promedio: 9.2 },
      { nombre: "Carlos Pérez", email: "carlos.perez@universidad.edu", carrera: "Derecho", semestre: 3, edad: 23, promedio: 8.5 },
      { nombre: "María Torres", email: "maria.torres@universidad.edu", carrera: "Medicina", semestre: 7, edad: 22, promedio: 9.8 },
      { nombre: "Luis Gómez", email: "luis.gomez@universidad.edu", carrera: "Arquitectura", semestre: 4, edad: 20, promedio: 8.9 },
      { nombre: "Sofía Ramírez", email: "sofia.ramirez@universidad.edu", carrera: "Administración", semestre: 6, edad: 24, promedio: 9.1 },
      { nombre: "Jorge Martínez", email: "jorge.martinez@universidad.edu", carrera: "Ingeniería", semestre: 2, edad: 19, promedio: 8.2 },
      { nombre: "Elena Castro", email: "elena.castro@universidad.edu", carrera: "Diseño", semestre: 5, edad: 21, promedio: 8.7 },
      { nombre: "Miguel Ángel Ruiz", email: "miguel.ruiz@universidad.edu", carrera: "Medicina", semestre: 8, edad: 25, promedio: 9.5 },
      { nombre: "Laura Díaz", email: "laura.diaz@universidad.edu", carrera: "Derecho", semestre: 4, edad: 22, promedio: 8.4 },
      { nombre: "Diego Herrera", email: "diego.herrera@universidad.edu", carrera: "Arquitectura", semestre: 3, edad: 20, promedio: 8.8 }
    ];

    const tbody = document.querySelector("#studentTable tbody");
    const searchInput = document.getElementById("searchInput");
    const careerFilter = document.getElementById("careerFilter");
    const semesterFilter = document.getElementById("semesterFilter");
    const totalStudentsSpan = document.getElementById("totalStudents");

    function determinarEstado(promedio) {
      if (promedio >= 9.0) return {texto: "Excelente", clase: "excellent"};
      if (promedio >= 8.0) return {texto: "Bueno", clase: "good"};
      return {texto: "Regular", clase: "average"};
    }

    function renderTable(filtro = "", carrera = "", semestre = "") {
      tbody.innerHTML = "";
      let contador = 0;
      
      estudiantes
        .filter(est => {
          const cumpleNombre = est.nombre.toLowerCase().includes(filtro.toLowerCase()) ||
                              est.email.toLowerCase().includes(filtro.toLowerCase());
          const cumpleCarrera = carrera === "" || est.carrera === carrera;
          const cumpleSemestre = semestre === "" || est.semestre.toString() === semestre;
          return cumpleNombre && cumpleCarrera && cumpleSemestre;
        })
        .forEach((est, index) => {
          contador++;
          const estado = determinarEstado(est.promedio);
          const row = document.createElement("tr");
          row.innerHTML = `
            <td>${est.nombre}</td>
            <td>${est.email}</td>
            <td>${est.carrera}</td>
            <td>${est.semestre}° Semestre</td>
            <td>${est.edad} años</td>
            <td>${est.promedio.toFixed(1)}</td>
            <td><span class="badge ${estado.clase}">${estado.texto}</span></td>
            <td>
              <button class="btn view-btn" onclick="verDetalles(${index})"><i class="fas fa-eye"></i> Ver</button>
              <button class="btn delete-btn" onclick="eliminar(${index})"><i class="fas fa-trash"></i> Eliminar</button>
            </td>
          `;
          tbody.appendChild(row);
        });
        
      totalStudentsSpan.textContent = contador;
    }

    function verDetalles(index) {
      const est = estudiantes[index];
      const estado = determinarEstado(est.promedio);
      alert(`Detalles del estudiante:\n\nNombre: ${est.nombre}\nEmail: ${est.email}\nCarrera: ${est.carrera}\nSemestre: ${est.semestre}°\nEdad: ${est.edad} años\nPromedio: ${est.promedio.toFixed(1)}\nEstado: ${estado.texto}`);
    }

    function eliminar(index) {
      if (confirm("¿Seguro que deseas eliminar este estudiante?")) {
        estudiantes.splice(index, 1);
        renderTable(searchInput.value, careerFilter.value, semesterFilter.value);
      }
    }

    function agregarEstudiante() {
      alert("Función para agregar nuevo estudiante se activaría aquí. En una aplicación real, se abriría un formulario modal.");
    }

    // Eventos para búsqueda y filtros
    searchInput.addEventListener("input", () => {
      renderTable(searchInput.value, careerFilter.value, semesterFilter.value);
    });

    careerFilter.addEventListener("change", () => {
      renderTable(searchInput.value, careerFilter.value, semesterFilter.value);
    });

    semesterFilter.addEventListener("change", () => {
      renderTable(searchInput.value, careerFilter.value, semesterFilter.value);
    });

    // Render inicial
    renderTable();
  </script>
</body>
</html>