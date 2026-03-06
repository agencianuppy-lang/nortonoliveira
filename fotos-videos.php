<?php
$pageTitle = 'Fotos e Vídeos | Norton Oliveira';
$pageDescription = 'Galeria de fotos e registros de campo dos serviços industriais da Norton Oliveira.';
$activePage = 'fotos-videos';
require __DIR__ . '/header.php';

$fotos = [
    ['src' => 'images/servicos/Turnkey/turnkey-main.jpg', 'alt' => 'Projeto turnkey em planta de fertilizantes', 'cat' => 'Turnkey'],
    ['src' => 'images/servicos/Turnkey/turnkey-02.jpeg', 'alt' => 'Estrutura turnkey em montagem', 'cat' => 'Turnkey'],
    ['src' => 'images/servicos/Turnkey/turnkey-03.jpeg', 'alt' => 'Equipamento turnkey instalado', 'cat' => 'Turnkey'],
    ['src' => 'images/servicos/Turnkey/turnkey-04.jpeg', 'alt' => 'Detalhe de estrutura turnkey', 'cat' => 'Turnkey'],
    ['src' => 'images/servicos/Montagem industrial/IMG_5920.JPG', 'alt' => 'Montagem industrial em campo', 'cat' => 'Montagem'],
    ['src' => 'images/servicos/Montagem industrial/IMG-20150506-WA0000.jpg', 'alt' => 'Equipe em montagem de equipamento', 'cat' => 'Montagem'],
    ['src' => 'images/servicos/Montagem industrial/IMG-20150507-WA0005.jpg', 'alt' => 'Montagem e ajustes mecânicos', 'cat' => 'Montagem'],
    ['src' => 'images/servicos/Recondicionamento misturador rotativo/IMG_0447.JPG', 'alt' => 'Recondicionamento de misturador rotativo', 'cat' => 'Recondicionamento'],
    ['src' => 'images/servicos/Recondicionamento misturador rotativo/IMG_0451.JPG', 'alt' => 'Reparo estrutural de misturador', 'cat' => 'Recondicionamento'],
    ['src' => 'images/servicos/Recondicionamento misturador rotativo/IMG_0452.JPG', 'alt' => 'Detalhe técnico de recondicionamento', 'cat' => 'Recondicionamento'],
    ['src' => 'images/servicos/Recondicionamento misturador rotativo/IMG_0455.JPG', 'alt' => 'Serviço de recuperação de equipamento', 'cat' => 'Recondicionamento'],
    ['src' => 'images/servicos/Recondicionamento misturador rotativo/IMG_5766.JPG', 'alt' => 'Equipamento recondicionado pronto para operação', 'cat' => 'Recondicionamento'],
];

$videos = [
    ['thumb' => 'images/servicos/Turnkey/turnkey-05.jpeg', 'title' => 'Turnkey em campo'],
    ['thumb' => 'images/servicos/Montagem industrial/IMG-20150430-WA0001.jpg', 'title' => 'Montagem industrial'],
    ['thumb' => 'images/servicos/Recondicionamento misturador rotativo/IMG_0452.JPG', 'title' => 'Recondicionamento técnico'],
];
?>

<section class="fotos-videos-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <span class="section-sub-title wow fadeInUp">Galeria técnica</span>
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Fotos e vídeos dos serviços executados</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Registros reais de montagem, retrofit, recondicionamento e entregas turnkey para plantas de fertilizantes.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-gallery">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <div class="section-title section-title-center">
                    <span class="section-sub-title wow fadeInUp">Fotos</span>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Execucao de campo e detalhes de engenharia</h2>
                </div>
            </div>
        </div>

        <div class="row gallery-items page-gallery-box">
            <?php foreach ($fotos as $index => $foto): ?>
                <div class="col-lg-4 col-6">
                    <div class="photo-gallery wow fadeInUp" data-wow-delay="<?php echo number_format(($index % 6) * 0.1, 1); ?>s">
                        <a href="<?php echo htmlspecialchars($foto['src'], ENT_QUOTES, 'UTF-8'); ?>" data-cursor-text="Ver">
                            <figure class="image-anime">
                                <img src="<?php echo htmlspecialchars($foto['src'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($foto['alt'], ENT_QUOTES, 'UTF-8'); ?>">
                            </figure>
                        </a>
                        <span class="galeria-categoria"><?php echo htmlspecialchars($foto['cat'], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="page-video-gallery">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <div class="section-title section-title-center">
                    <span class="section-sub-title wow fadeInUp">Vídeos</span>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Registros em video das frentes de servico</h2>
                    <p>As capas abaixo representam os tipos de execução. Para receber os vídeos completos, solicite no WhatsApp.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($videos as $index => $video): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="<?php echo number_format($index * 0.2, 1); ?>s">
                        <a href="https://wa.me/55SEUNUMEROAQUI?text=Ola!%20Quero%20receber%20os%20videos%20dos%20servicos%20da%20Norton%20Oliveira." target="_blank" rel="noopener" data-cursor-text="Solicitar">
                            <figure>
                                <img src="<?php echo htmlspecialchars($video['thumb'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($video['title'], ENT_QUOTES, 'UTF-8'); ?>">
                            </figure>
                        </a>
                        <h3 class="video-thumb-title"><?php echo htmlspecialchars($video['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
