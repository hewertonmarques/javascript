<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <body>
        <h1>Configuracões do Sistema</h1>
        <p>Bem Vindo ao Painel de Preferências</p>

        <button id="btn-tema"></button> Modo Noturno</button>

        <script>
            let botao = document.getElementById("btn-tema");

            botao.addEventListener('mouseover', function() {
                document.body.classList.toggle('modo-escuro');

                if(document.body.classList.contains('modo-escuro')){
                    botao.innerHTML = "Ativar mmodo Claro";
                }else{
                botao.innerHTML = "Ativar mmodo Escuro";
                }
            });
        </script>
    </body>
    </html>