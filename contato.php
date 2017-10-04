<?php require "header.php" ?>

    <section id="contato" class="bg-color-azul bg-nuvem-contato">

        <div class="container">
            <div class="row espacamento_top espacamento_bottom">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="titulo-grande text-color-marrom">
                        Contato
                    </div>
                </div>
            </div>

            <div class="contato-formulario">
                <form name="contato">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div id="contato-nome" class="text-color-marrom vamor-conversar">
                                        <input class="input-customizado" type="text" placeholder="Nome">
                                        <img class="img-responsive" src="img/input-contato.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div id="contato-email" class="text-color-marrom">
                                        <input class="input-customizado" type="text" placeholder="E-mail">
                                        <img class="img-responsive" src="img/input-contato.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div id="contato-telefone" class="text-color-marrom">
                                        <input class="input-customizado" type="text" placeholder="Telefone">
                                        <img class="img-responsive" src="img/input-contato.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <textarea name="" id="contato-mensagem" class="textarea-customizado" placeholder="Mensagem"></textarea>
                            <img class="img-responsive" src="img/textarea-contato.png" alt="">
                        </div>
                    </div>
                </form>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                        <a href="javascript:void(0)"><img src="img/contato_botao_enviar.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="home-casa" class="">
            <div class="row">
                <div class="col-md-8 col-sm-10 col-xs-10">
                    <img class="img-responsive" src="img/casas.png" alt="">
                </div>
            </div>
        </div>
    </section>

<?php require "footer.php" ?>