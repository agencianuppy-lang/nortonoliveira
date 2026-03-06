<?php
$pageTitle = 'Contato | Norton Oliveira';
$pageDescription = 'Entre em contato para diagnóstico técnico, retrofit e fabricação industrial para fertilizantes.';
$activePage = 'contato';
require __DIR__ . '/header.php';
?>

<div class="page-header bg-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Contato</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-info-list">
                    <div class="contact-info-item wow fadeInUp">
                        <div class="contact-info-item-image">
                            <figure class="image-anime">
                                <img src="images/servicos/Turnkey/turnkey-02.jpeg" alt="Atendimento técnico por WhatsApp">
                            </figure>
                        </div>
                        <div class="contact-info-item-body">
                            <div class="icon-box">
                                <img src="images/icon-headphone-primary.svg" alt="WhatsApp">
                            </div>
                            <div class="contact-info-item-content">
                                <p>WhatsApp</p>
                                <h2><a href="https://wa.me/55SEUNUMEROAQUI" target="_blank" rel="noopener">(xx) xxxxx-xxxx</a></h2>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="contact-info-item-image">
                            <figure class="image-anime">
                                <img src="images/servicos/Turnkey/turnkey-03.jpeg" alt="Contato por e-mail">
                            </figure>
                        </div>
                        <div class="contact-info-item-body">
                            <div class="icon-box">
                                <img src="images/icon-mail-primary.svg" alt="E-mail">
                            </div>
                            <div class="contact-info-item-content">
                                <p>E-mail</p>
                                <h2><a href="mailto:contato@seudominio.com.br">contato@seudominio.com.br</a></h2>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="contact-info-item-image">
                            <figure class="image-anime">
                                <img src="images/servicos/Turnkey/turnkey-04.jpeg" alt="Atendimento em todo o Brasil">
                            </figure>
                        </div>
                        <div class="contact-info-item-body">
                            <div class="icon-box">
                                <img src="images/icon-location-primary.svg" alt="Localizacao">
                            </div>
                            <div class="contact-info-item-content">
                                <p>Cobertura</p>
                                <h2>Atendimento em todo o Brasil</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="contact-us-image-box wow fadeInUp">
                    <div class="contact-us-image">
                        <figure class="image-anime">
                            <img src="images/servicos/Turnkey/turnkey-main.jpg" alt="Planta industrial de fertilizantes">
                        </figure>
                    </div>

                    <div class="working-hour-box">
                        <h3>Horario de atendimento</h3>
                        <ul>
                            <li>Segunda a sexta: 08:00 as 18:00</li>
                            <li>Atendimento técnico programado em campo</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="contact-us-form">
                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">Fale com nosso time</span>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Envie sua demanda técnica</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Compartilhe capacidade atual, gargalos e cidade da planta. Retornamos com direcionamento técnico inicial.
                        </p>
                    </div>

                    <div class="contact-form">
                        <form id="contactForm" action="form-process.php" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.4s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="Nome" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="empresa" class="form-control" id="empresa" placeholder="Empresa" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="WhatsApp" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <input type="text" name="assunto" class="form-control" id="assunto" placeholder="Assunto (diagnóstico, retrofit, equipamento)">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="message" class="form-control" id="message" rows="5" placeholder="Descreva a demanda da sua planta"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default">Enviar mensagem</button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="google-map">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <div class="section-title section-title-center">
                    <span class="section-sub-title wow fadeInUp">Atendimento nacional</span>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Base no Brasil, execução em campo</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="google-map-iframe wow fadeInUp" data-wow-delay="0.2s">
                    <iframe src="https://www.google.com/maps?q=Brasil&output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '/footer.php'; ?>
