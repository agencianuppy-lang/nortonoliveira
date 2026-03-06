<?php
$pageTitle = 'Equipamentos | Norton Oliveira';
$pageDescription = 'Equipamentos industriais para fertilizantes com foco em estabilidade, vazão e durabilidade.';
$activePage = 'equipamentos';
require __DIR__ . '/header.php';
?>

<section class="equipamentos-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-title">
                    <span class="section-sub-title wow fadeInUp">Linha de equipamentos</span>
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Equipamentos para reduzir gargalos e estabilizar sua planta</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Projetamos e entregamos equipamentos para fertilizantes considerando fluxo real, abrasão, manutenção e operação contínua.
                    </p>
                </div>
                <div class="hero-content-footer wow fadeInUp" data-wow-delay="0.4s">
                    <a href="contato.php" class="btn-default">Solicitar especificação técnica</a>
                </div>
            </div>
            <div class="col-lg-6">
                <figure class="equipamentos-hero-image image-anime reveal">
                    <img src="images/equipamentos/hero.jpg" alt="Estrutura industrial para fertilizantes">
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="equipamentos-grid">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <div class="section-title section-title-center">
                    <span class="section-sub-title wow fadeInUp">Equipamentos em destaque</span>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Soluções robustas para cada etapa do processo</h2>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <article class="equip-card wow fadeInUp" data-wow-delay="0.1s">
                    <figure class="equip-card-media"><img src="images/equipamentos/moega.jpg" alt="Moega industrial"></figure>
                    <div class="equip-card-body">
                        <h3>Moega</h3>
                        <p>Recebimento com melhor fluxo e menos aculo de material.</p>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="equip-card wow fadeInUp" data-wow-delay="0.2s">
                    <figure class="equip-card-media"><img src="images/equipamentos/elevador.jpg" alt="Elevador de canecas"></figure>
                    <div class="equip-card-body">
                        <h3>Elevador de canecas</h3>
                        <p>Transporte vertical com confiabilidade para operação contínua.</p>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="equip-card wow fadeInUp" data-wow-delay="0.3s">
                    <figure class="equip-card-media"><img src="images/equipamentos/peneira.jpg" alt="Peneira industrial"></figure>
                    <div class="equip-card-body">
                        <h3>Peneiras</h3>
                        <p>Classificacao eficiente para reduzir retorno e retrabalho.</p>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="equip-card wow fadeInUp" data-wow-delay="0.4s">
                    <figure class="equip-card-media"><img src="images/equipamentos/dosagem.jpg" alt="Dosagem e balanca dosadora"></figure>
                    <div class="equip-card-body">
                        <h3>Dosagem</h3>
                        <p>Controle de alimentacao para estabilidade de mistura e produtividade.</p>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="equip-card wow fadeInUp" data-wow-delay="0.5s">
                    <figure class="equip-card-media"><img src="images/equipamentos/mistura.jpg" alt="Misturador industrial"></figure>
                    <div class="equip-card-body">
                        <h3>Mistura</h3>
                        <p>Homogeneizacao consistente para padrao de produto final.</p>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="equip-card wow fadeInUp" data-wow-delay="0.6s">
                    <figure class="equip-card-media"><img src="images/equipamentos/silo.jpg" alt="Silo e armazenagem"></figure>
                    <div class="equip-card-body">
                        <h3>Silo e armazenagem</h3>
                        <p>Armazenagem segura com descarga previsivel e menos paradas.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<div class="our-contact-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Precisa especificar um equipamento para sua planta?</h2>
                    <p>Receba recomendação técnica com foco em vazão, abrasão e disponibilidade operacional.</p>
                </div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contato.php" class="btn-default">Solicitar análise</a>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '/footer.php'; ?>
