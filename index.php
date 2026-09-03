<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sucursales Personales & Asesorías</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #f5f7fa;
    }

    header {
      background: #1e3a8a;
      color: white;
      padding: 60px 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 2.5rem;
    }

    header p {
      margin: 15px 0;
      font-size: 1.2rem;
    }

    .cta-btn {
      background: #22c55e;
      color: white;
      border: none;
      padding: 15px 25px;
      font-size: 1rem;
      cursor: pointer;
      border-radius: 8px;
      margin-top: 20px;
    }

    .cta-btn:hover {
      background: #16a34a;
    }

    .section {
      padding: 50px 20px;
      text-align: center;
    }

    .cards {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .card {
      background: white;
      padding: 20px;
      width: 280px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.6);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background: white;
      padding: 30px;
      border-radius: 10px;
      width: 300px;
      animation: fadeIn 0.3s ease;
    }

    .modal-content input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
    }

    .close {
      float: right;
      cursor: pointer;
      font-size: 18px;
    }

    .footer {
      background: #1e3a8a;
      color: white;
      text-align: center;
      padding: 30px 20px;
      margin-top: 40px;
    }

    .footer p {
      margin: 5px 0;
      font-size: 0.95rem;
    }

    @keyframes fadeIn {
      from { transform: scale(0.9); opacity: 0; }
      to { transform: scale(1); opacity: 1; }
    }
  </style>
</head>
<body>

<header>
  <h1>Sucursales Personales</h1>
  <p>Impulsa tu crecimiento con asesorías personalizadas</p>
  <button class="cta-btn" onclick="openModal()">Solicitar Asesoría</button>
</header>

<section class="section">
  <h2>Nuestros Servicios</h2>
  <div class="cards">
    <div class="card">
      <h3>Sucursales</h3>
      <p>Gestión personalizada de tus operaciones y crecimiento local.</p>
    </div>
    <div class="card">
      <h3>Asesorías</h3>
      <p>Consultoría estratégica adaptada a tus necesidades.</p>
    </div>
    <div class="card">
      <h3>Optimización</h3>
      <p>Mejora de procesos y resultados medibles.</p>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal" id="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">✖</span>
    <h3>Solicitar Asesoría</h3>
    <input type="text" id="nombre" placeholder="Nombre">
    <input type="email" id="email" placeholder="Correo">
    <input type="text" id="telefono" placeholder="Teléfono">
    <button class="cta-btn" onclick="guardarDatos()">Enviar</button>
  </div>
</div>

<!-- Footer -->
<footer class="footer">
  <h3>Contacto</h3>
  <p>Alexander Benavides Alvaraddo</p>
  <p>C.C: 16917829</p>
  <p>Email: c9979163@gmail.com</p>
  <p>Teléfono: (57)3019195819</p>
</footer>

<script>
  function openModal() {
    document.getElementById("modal").style.display = "flex";
  }

  function closeModal() {
    document.getElementById("modal").style.display = "none";
  }

  function guardarDatos() {
    const nombre = document.getElementById("nombre").value.trim();
    const email = document.getElementById("email").value.trim();
    const telefono = document.getElementById("telefono").value.trim();

    if (!nombre || !email || !telefono) {
      alert("Por favor completa todos los campos");
      return;
    }

    if (!email.includes("@")) {
      alert("Correo inválido");
      return;
    }

    const datos = { nombre, email, telefono };

    let registros = JSON.parse(localStorage.getItem("asesorias")) || [];
    registros.push(datos);
    localStorage.setItem("asesorias", JSON.stringify(registros));

    alert("Datos guardados correctamente");

    closeModal();

    document.getElementById("nombre").value = "";
    document.getElementById("email").value = "";
    document.getElementById("telefono").value = "";
  }
</script>

</body>
</html>