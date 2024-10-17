// burger.js
document.addEventListener("DOMContentLoaded", function () {
  const navbarToggle = document.getElementById("navbar-toggle");
  const navbarMenu = document.getElementById("navbar-menu");

  // Evento para el botón hamburguesa
  navbarToggle.addEventListener("click", function () {
    if (navbarMenu.classList.contains("active")) {
      navbarMenu.style.animation = "slideOut 0.5s forwards"; // Animación para cerrar
      setTimeout(() => {
        navbarMenu.classList.remove("active"); // Ocultar menú después de la animación
      }, 500); // Tiempo de la animación
    } else {
      navbarMenu.classList.add("active"); // Mostrar el menú
      navbarMenu.style.animation = "slideIn 0.5s forwards"; // Animación para abrir
    }
    navbarToggle.classList.toggle("active"); // Cambiar el icono a "X"
  });
});
