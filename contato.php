<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid - Exemplo Layout Colunas</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="img/logo_h.gif" type="image/x-icon">
</head>

<body>
    <?php 
        require_once 'includes/header.php'; 
    ?>
    
    <main>
        <div id="banner-contato">
            <div>
                <h1>Contato</h1>
            </div>
        </div>

        <section id="contato">
            <div id="esquerda">
                <form action="">
                    <h2>Fale conosco</h2>
                    <div id="grid-contato">
                        <div>
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>
                        <div>
                            <label for="telefone">Telefone</label>
                            <input type="text" id="telefone" name="telefone" required>
                        </div>
                        <div>
                            <label for="">E-mail</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div>
                            <label for="assunto">Assunto</label>
                            <select name="assunto" id="assunto" required>
                                <option value="" selected disabled>Selecione...</option>
                                <option value="Reclamação">Reclamação</option>
                                <option value="Sugestão">Sugestão</option>
                                <option value="Franquia">Franquia</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="">Mensagem</label>
                        <textarea name="msg" id="msg" required placeholder="Digite aqui..."></textarea>
                    </div>
                    <div>
                        <input type="checkbox" name="news" id="news">
                        <label for="news">Receber promoções e novidades?</label>
                    </div>

                    <input type="submit" id="btnenviar" value="Enviar">
                </form>
            </div>

            <div id="direita">
                <img src="assets/img/contato_cortado.png" alt="">
                <div id="grid-direita">
                    <i class="fa-solid fa-envelope fa-2xl"></i>
                    <div>
                        <p>Email</p>
                        <a href="mailto:email@hotmail.com">
                            <p>email@hotmail.com</p>
                        </a>
                        
                    </div>

                    <i class="fa-solid fa-square-phone fa-2xl"></i>
                    <div>
                        <p>Telefone/WhatsApp</p>
                        <p>(19) 3366-1100</p>
                    </div>

                    <i class="fa-solid fa-location-dot fa-2xl"></i>
                    <div>
                        <p>Endereço</p>
                        <p>Rua São João, 123</p>
                        <p>São João da Boa Vista - SP</p>
                    </div>
                </div>
            </div>

        </section>

         <div id="banner_contato_baixo">
            <div>
                <h1>Venha conhecer nosso rodízio!</h1>
            </div>
        </div>













    </main>

    <?php 
        require_once 'includes/footer.php';
    ?>

</body>

</html>