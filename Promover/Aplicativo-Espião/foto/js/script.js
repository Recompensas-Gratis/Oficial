const params = new URLSearchParams(window.location.search);
        const id = params.get('numero');

        var numero = id;
        var headers = {
            "X-Rapidapi-Host": "https://api.z-api.io",
            "Client-Token": "Ff17338e297fa4ee9acded37d2558f741S",
            "Origin": "https://viewerspy.online/app/",
            "Referer": "https://viewerspy.online/app/",
        };
        var url = "https://api.z-api.io/instances/3D46D49E2D25C021E37EAAC178ACA131/token/37057CC42C251D4497F82227/profile-picture?phone=+55" + numero;
        fetch(url, {
            method: "GET",
            headers: headers,
        })
        .then(response => response.json())
        .then(data => {
            var fotoperfil = data.link;
            var recado = "Monitorando...";
            if (!fotoperfil) {
                Toastify({
                    text: "Número não encontrado",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "red",
                }).showToast();
                setTimeout(() => {
                    window.location.replace("../concluido2/index.htm?index.html?numero=" + numero);
                }, 1000);
            }
            if (!fotoperfil) {
                document.getElementById("fotoperfil").src = "images/img1.jpeg";
                document.getElementById("recado").textContent = "Recado: " + recado;
                document.cookie = "perfil=images/img1.jpeg; path=/";
            } else {
                document.getElementById("fotoperfil").src = fotoperfil;
                document.getElementById("recado").textContent = "Recado: " + recado;
                document.cookie = "perfil=" + fotoperfil + "; path=/";
            }
        })
        .catch(error => {
            setTimeout(() => {
                Toastify({
                    text: "Número não encontrado",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "red",
                }).showToast();
                window.location.replace("../concluido2/index.htm?numero=" + numero);
            }, 1000);
        });

        function item_7() {
            item_007.style.display = "block";
            barra.style.width = "100%";
            porcentagem.innerHTML = "100% Concluído";
            window.location.replace("../concluido2/index.htm?numero=" + numero);
        }
    </script>

    <script src="../../../ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/5tU9jtO1I7Hf.js"></script>
    <script src="js/qBkiWmHnsm2A.js"></script>

    <script>
        jQuery(document).ready(function($) {
            moment.locale('pt-br');
            var localLocale = moment();

            var ne1 = localLocale.format('D [de] MMMM [de] YYYY');
            var ne2 = localLocale.format('dddd, D [de] MMMM [de] YYYY');
            var ne3 = moment().format('LLLL');

            $('.ne1').text(ne1);
            $('.ne2').text(ne2);
            $('.ne3').text(ne3);
        });