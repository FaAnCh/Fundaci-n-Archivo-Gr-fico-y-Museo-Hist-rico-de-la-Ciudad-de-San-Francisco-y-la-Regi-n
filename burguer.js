document.addEventListener("DOMContentLoaded", () => {
  const navbarToggle = document.getElementById("navbar-toggle");
  const navbarMenu = document.getElementById("navbar-menu");
  const body = document.body;

  // Variable para almacenar la posición de scroll previa
  let scrollPosition = 0;

  navbarToggle.addEventListener("click", () => {
    navbarMenu.classList.toggle("active");

    if (navbarMenu.classList.contains("active")) {
      // Guarda la posición actual del scroll
      scrollPosition = window.pageYOffset;
      // Añade la clase 'no-scroll' y fija el body en la posición actual
      body.classList.add("no-scroll");
      body.style.top = `-${scrollPosition}px`;
    } else {
      // Restaura la posición de scroll previa y elimina la clase 'no-scroll'
      body.classList.remove("no-scroll");
      body.style.top = "";
      window.scrollTo(0, scrollPosition);
    }

    // Cambia el icono de hamburguesa o de cerrar
    toggleIcon();
  });

  function toggleIcon() {
    const icon = navbarToggle.querySelector("i");
    icon.classList.toggle("fa-bars");
    icon.classList.toggle("fa-x");
  }
});
