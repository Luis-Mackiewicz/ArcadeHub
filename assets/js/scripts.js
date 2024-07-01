// Detecta o scroll da página
window.addEventListener('scroll', function() {
    var header = document.querySelector('header');

    // Verifica a posição da barra de rolagem
    if (window.scrollY > 0) {
        header.classList.add('navbar-scroll'); // Adiciona classe ao header ao rolar
    } else {
        header.classList.remove('navbar-scroll'); // Remove classe ao voltar ao topo
    }
});
