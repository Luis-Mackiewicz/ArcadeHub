// assets/js/scripts.js
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        fetch('/api/desempenho.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert(data.message);
                form.reset();
            } else {
                alert('Ocorreu um erro ao enviar o feedback.');
            }
        })
        .catch(error => console.error('Erro:', error));
    });
});
