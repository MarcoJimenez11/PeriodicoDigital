const contenedor = document.getElementById("section1");
const picture = document.getElementById("picture1");
const sourceAvif = document.getElementById("sourceAvif");
const sourceWebp = document.getElementById("sourceWebp");
const imagen = document.getElementById("imagen1");

// Definir imágenes disponibles según tamaño
// ¡¡¡Cuidado!!! La ruta de las imágenes es relativa al archivo HTML (que en este caso coincide con la de este script, pero podría no ser así)
const imagenes = [
  { ancho: 1200, avif: "media/img/avif/estadio-de-futbol_1200.avif", webp: "media/img/webp/estadio-de-futbol_1200.webp", jpg: "media/img/jpeg/estadio-de-futbol_1200.jpeg" },
  { ancho: 768, avif: "media/img/avif/estadio-de-futbol_768.avif", webp: "media/img/webp/estadio-de-futbol_768.webp", jpg: "media/img/jpeg/estadio-de-futbol_768.jpeg" },
  { ancho: 0, avif: "media/img/avif/estadio-de-futbol_480.avif", webp: "media/img/webp/estadio-de-futbol_480.webp", jpg: "media/img/jpeg/estadio-de-futbol_480.jpeg" }
];

// Función para cambiar la imagen según el tamaño del contenedor
const cambiarImagen = (anchoContenedor) => {
  const imagenSeleccionada = imagenes.find(img => anchoContenedor >= img.ancho);
  
  // Si ya está cargada, no hacer nada
  if (imagen.dataset.actual === imagenSeleccionada.jpg) return;

  // Cambiar las fuentes de <source> y <img>
  sourceAvif.srcset = imagenSeleccionada.avif;
  sourceWebp.srcset = imagenSeleccionada.webp;
  imagen.src = imagenSeleccionada.jpg;
  
  // Guardar la imagen actual para evitar recargas innecesarias
  imagen.dataset.actual = imagenSeleccionada.jpg;
};

// Observar cambios en el tamaño del contenedor
const resizeObserver = new ResizeObserver(entries => {
  for (let entry of entries) {
    cambiarImagen(entry.contentRect.width);
  }
});

resizeObserver.observe(contenedor);