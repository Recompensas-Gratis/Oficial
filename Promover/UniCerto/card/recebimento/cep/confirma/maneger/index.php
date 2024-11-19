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
    <link rel="stylesheet" href="../../../../../assets/style.css">

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
        <div style="margin-top: 18px;" class="main-content">
        <!-- Seção de introdução ao gerente responsável -->
            <div id="introducao-gerente" class="mb-3 text-center">
                <h4>Ótimo, quase lá<span id="nomeUsuario"></span>!</h4>
                <p>Antes de escolher uma forma de envio, conheça sua Gerente Responsável:</p>
                
                <div class="card p-3">
                    <img src="https://unisolucoes.online/card/recebimento/cep/confirma/maneger/manager.jpg" class="img-fluid rounded" alt="Foto da Gerente">
                    <h5 class="mt-3">Gerente</h5>
                    <h4 class="text-pink" style="color: #e60882;">Roberta Fernandes</h4>
                    <p>Prêmio: melhor gerente 2023-2024</p>
                </div>
     
                <p style="margin-top: 10px;">Após concluir o procedimento, Roberta entrará em contato para garantir um atendimento humanizado sempre que você precisar.</p>
    
                <!-- Campo para inserir o WhatsApp -->
                <div class="mb-3 text-start">
                    <label for="whatsapp" class="form-label" style="font-size: 12px;color: gray;">Digite seu WhatsApp</label>
                    <input type="text" class="form-control rounded-pill" id="whatsapp" placeholder="(00) 00000-0000">
                </div>
    
                <button type="submit" id="continuarAg" class="btn btn-custom w-100 rounded-pill" onclick="enviarWhatsApp()">Continuar</button>
            </div>
        </div>
    </div>    

    <script>
        // Função para carregar o nome do usuário do localStorage (se estiver disponível)
        function carregarNomeUsuario() {
            const nomeCompleto = localStorage.getItem('nome');
            const primeiroNome = nomeCompleto ? nomeCompleto.split(' ')[0] : '';
            document.getElementById('nomeUsuario').innerText = primeiroNome;
        }

        // Chamada da função para carregar o nome do usuário
        carregarNomeUsuario();

        // Função para enviar o WhatsApp e redirecionar
        function enviarWhatsApp() {
            const whatsapp = document.getElementById('whatsapp').value;
            if (whatsapp) {
                localStorage.setItem('whatsapp', whatsapp); // Salva o WhatsApp no localStorage

                // Redireciona para a próxima página de confirmação (AJAX pode ser adicionado se necessário)
                window.location.href = 'sedex/index.php';
            } else {
                alert('Por favor, insira seu número de WhatsApp.');
            }
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