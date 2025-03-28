document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slider .slide');
    const indicatorsContainer = document.querySelector('.indicators');
    const totalSlides = slides.length;
    let currentIndex = 0;

    // Crear indicadores
    for (let i = 0; i < totalSlides; i++) {
        const indicator = document.createElement('div');
        if (i === 0) indicator.classList.add('active');
        indicatorsContainer.appendChild(indicator);
    }

    const indicators = document.querySelectorAll('.indicators div');

    function showSlide(index) {
        const slider = document.querySelector('.slider');
        slider.style.transform = `translateX(-${index * 100}%)`;
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('active', i === index);
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        showSlide(currentIndex);
    }

    // Cambiar imagen cada 10 segundos
    setInterval(nextSlide, 2000);

    // Hacer clic en indicadores
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentIndex = index;
            showSlide(currentIndex);
        });
    });
});

// Función para obtener el parámetro 'id' de la URL
function getParameterByName(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}

// Mapeo de IDs a nombres de clubes
const clubMap = {
    1: 'boca',
    2: 'river',
    3: 'sanlo',
    4: 'ind',
    5: 'racing'
};

// Obtener el ID de la URL
const id = getParameterByName('id');

// Verificar si el ID existe en el mapa
const club = clubMap[id];

if (club) {
    console.log(club);
    const headers = document.querySelectorAll('.acordeon-header-'+club);

        headers.forEach(header => {
            header.addEventListener('click', () => {
                const content = header.nextElementSibling;

                // Alternar la visibilidad del contenido
                content.style.display = content.style.display === 'block' ? 'none' : 'block';

                // Opcional: cerrar otros elementos al abrir uno nuevo
                headers.forEach(otherHeader => {
                    if (otherHeader !== header) {
                        otherHeader.nextElementSibling.style.display = 'none';
                    }
                });
            });
        });
} else {
    console.error('El ID del club no es válido.');
}
