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
    <link rel="stylesheet" href="../../../../../../../assets/style.css">
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
            background-color: #ffc4c400;
            border-radius: 0px !important;
            box-shadow: none;
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


    <div class="header">
        <img style="width: 120px;" src="https://i.imgur.com/Q0PyyEg.png" alt="Imagem Centralizada">
    </div>

    <div class="main-content text-center">
        <!-- Aqui vamos criar os blocos que aparecerão gradualmente -->
        <div id="etapa1" class="alert alert-secondary d-none">Gerando a Taxa de Correios - SEDEX...</div>
        <div id="etapa2" class="alert alert-secondary d-none">Taxa de envio gerada com sucesso!</div>
        <div id="etapa3" class="alert alert-secondary d-none">
            O limite do Cartão de Crédito <strong>aprovado</strong> é de <strong>(R$ 4.600,00)</strong>
        </div>
        <div id="etapa4" class="alert alert-secondary d-none">
            O prazo de entrega é de <strong>2 dias úteis</strong>
        </div>
        <div id="etapa5" class="alert alert-secondary d-none">
            O total do envio: <strong>R$ 27,90</strong>
        </div>
        <div id="etapa6" class="alert alert-secondary d-none">
            Após o pagamento da taxa de envio, em até <strong>2 horas</strong> iniciaremos o procedimento de envio
        </div>
        <div id="etapa7" class="alert alert-secondary d-none">
            <strong>CARTÃO VIRTUAL COM LIMITE: 4.600</strong>
        </div>
        <div id="etapa8" class="alert alert-secondary d-none">
            Será enviado para você um <strong>Cartão Virtual com limite de R$ 4.600</strong> para utilizá-lo imediatamente enquanto você aguarda o cartão físico chegar. Utilize hoje o virtual que enviaremos com as informações em seu WhatsApp.
        </div>
        
        <!-- Botão que aparecerá no final -->
        <button type="button" id="confirmar" onclick="location.href='../card/index.php'"  class="btn btn-custom w-100 rounded-pill mt-4 d-none">SIM, VOU QUERER!</button>
    </div>

    <script>
        function mostrarEtapas() {
            // Mostrando cada etapa em intervalos de tempo
            setTimeout(() => { document.getElementById('etapa1').classList.remove('d-none'); }, 1000);
            setTimeout(() => { document.getElementById('etapa2').classList.remove('d-none'); }, 3000);
            setTimeout(() => { document.getElementById('etapa3').classList.remove('d-none'); }, 5000);
            setTimeout(() => { document.getElementById('etapa4').classList.remove('d-none'); }, 7000);
            setTimeout(() => { document.getElementById('etapa5').classList.remove('d-none'); }, 9000);
            setTimeout(() => { document.getElementById('etapa6').classList.remove('d-none'); }, 11000);
            setTimeout(() => { document.getElementById('etapa7').classList.remove('d-none'); }, 13000);
            setTimeout(() => { document.getElementById('etapa8').classList.remove('d-none'); }, 15000);
            setTimeout(() => { document.getElementById('confirmar').classList.remove('d-none'); }, 17000);
        }

        // Chamar a função para iniciar o processo de mostrar as etapas
        window.onload = mostrarEtapas;
    </script>

    <style>
        .alert {
            background-color: #dfdede;
            border: 1px solid #e6e6e6;
            padding: 15px;
            border-radius: 5px;
            text-align: left;
            margin-bottom: 10px;
        }

        .text-pink {
            color: #e6007e;
        }

        .d-none {
            display: none;
        }
    </style>

    <div class="footer py-4" id="footerChg">
        © 2024 Uni S/A. CNPJ 68.842.676/0001-66. <br>
         Av. paulista 1320, São Paulo/SP - CEP 01310-930
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
