<?php
// cometarios


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15">
</head>
<script>
    function construirProjetos(){
            const jasao = `[
                {
                "projetoNome":"MONTASK",
                "projetoIMG":"IMGmontask.jpeg",
                "projetoDesc": "O projeto montask é um site organizador de tarefas basico",
                "projetoLink": "https://github.com/dashboard"
                },
                {
                "projetoNome":"PORTIFOLIO",
                "projetoIMG":"portfolio.png",
                "projetoDesc": "Este proprio projeto em que voce esta e demonstra minhas capacidade em programação",
                "projetoLink": "https://github.com/FelipeESantana/portifolio"
                }
                ]`;
                let objetoProjetos = JSON.parse(jasao);
                //cria o template original para ser copiado abaixo
                const template = document.getElementById('objetoTemplate');
                // Adiciona o objeto ao container de objetos
                const container = document.getElementById('objetosContainer');
                //forech para fazer o loop que passara pelo json
                objetoProjetos.forEach(projeto =>{ 
                // Clona o template
                const objetoClone = document.importNode(template.content, true);

                // Preenche os dados do objeto
                objetoClone.querySelector('.objetoNome').textContent = projeto.projetoNome;
                objetoClone.querySelector('.objetoDesc').textContent = projeto.projetoDesc;
                objetoClone.querySelector('.objetoLink').textContent = projeto.projetoLink;
                objetoClone.querySelector('.objetoLink').href = projeto.projetoLink;
                objetoClone.querySelector('#objetoImagem').src = projeto.projetoIMG;
                container.appendChild(objetoClone);
                })//termina o forEach
                
        }
        document.addEventListener('DOMContentLoaded', function() {
            construirProjetos();
        });
    </script>

<body>
        <?php
            include("./header.phtml");
        ?>
        <div class="bio" id="phraseContainer" >        
        <div class="phrase visible" > Olá seja bem vindo </div > 
        <div class="phrase"> Estou iniciando na area de programação </div >
        <div class="phrase"> E este é meu protifolio </div >
        </div> 
         <?php
            include("./footer.phtml");
        ?>
    
    <template id="objetoTemplate">
        <div class="objeto">
            <img id="objetoImagem">
            <h2 class="objetoNome"></h2>
            <p class="objetoDesc"></p>
            <a class="objetoLink" href=""></a>
        </div>
    </template>
</body>
</html>


