<?php include 'includes/header.php'; ?>

<main role="main">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Conheça nossa Equipe</h2>

        <div class="row">
            <!-- Card 1: Luis Mackiewicz -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/img/equipe/luis.jpg" class="card-img-top" alt="Foto de Luis Mackiewicz">
                    <div class="card-body">
                        <h5 class="card-title">Luis Mackiewicz</h5>
                        <p class="card-text">Desenvolvedor Principal</p>
                        <p class="card-text">Entusiasta da fantasia, criativo, sonhador.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2: Pedro Rorato -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/img/equipe/pedro.jpg" class="card-img-top" alt="Foto de Pedro Rorato">
                    <div class="card-body">
                        <h5 class="card-title">Pedro Rorato</h5>
                        <p class="card-text">Designer de Jogos</p>
                        <p class="card-text">Estudante de artes marciais, disciplinado, focado.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3: Gabriel de Barros -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/img/equipe/gabriel.jpg" class="card-img-top" alt="Foto de Gabriel de Barros">
                    <div class="card-body">
                        <h5 class="card-title">Gabriel de Barros</h5>
                        <p class="card-text">Artista de Jogos</p>
                        <p class="card-text">Sonhador, imaginativo, apaixonado por histórias fantásticas.</p>
                    </div>
                </div>
            </div>

            <!-- Adicione mais cards para os outros membros da equipe conforme necessário -->
        </div>
    </div>
</main>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Função para iniciar o carrossel de imagens
        $('#carouselExampleIndicators').carousel();

        // Modal para exibir imagens em tela cheia
        $('.carousel-item img').on('click', function () {
            let imgSrc = $(this).attr('src');
            let modalHtml = `
                <div class="modal" tabindex="-1" role="dialog" id="imagemModal">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="${imgSrc}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            `;
            $('body').append(modalHtml);
            $('#imagemModal').modal('show');
        });

        // Fechar modal ao clicar no botão Fechar
        $(document).on('click', '.btn-close', function () {
            $('#imagemModal').modal('hide');
            $('#imagemModal').remove();
        });

        // Ajustar altura do iframe ao carregar
        $('iframe').on('load', function () {
            $(this).height($(this).contents().height());
        });
    });
</script>
<?php include 'includes/footer.php'; ?>
