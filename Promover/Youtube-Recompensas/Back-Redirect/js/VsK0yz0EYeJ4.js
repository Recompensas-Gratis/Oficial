
    function atomiApplyParams({inputUrl}) {
      try {
        console.log(inputUrl)
        const inputUrlObj = new URL(inputUrl, window.location.origin);
        const currentPageParams = new URLSearchParams(window.location.search);
        const inputUrlParams = new URLSearchParams(inputUrlObj.search);
      
        // Iterate over all parameters in the current page's URL
        for (const [key, value] of currentPageParams) {
          // If the input URL does not already contain the parameter, add it
          if (!inputUrlParams.has(key)) {
            inputUrlParams.append(key, value);
          }
        }
      
        // Construct the final URL
        const finalUrl = inputUrlObj.origin + inputUrlObj.pathname + '?' + inputUrlParams.toString();
        console.log(finalUrl)
        return finalUrl;
      } catch (error) {
        console.log(error);
      }
    }

    function atomiFormatDate(options = { slated: false, addDate: 0 }) {
      try {
        const defaultOptions = {
          weekday: 'long',
          year: 'numeric',
          month: 'long',
          day: 'numeric',
        };

        const today = new Date();

        if (options.slated) {
          const slatedDate = new Date(today);
          slatedDate.setDate(slatedDate.getDate() + (options.addDate || 0));

          const day = slatedDate.getDate().toString().padStart(2, "0");
          const month = (slatedDate.getMonth() + 1).toString().padStart(2, "0");
          const year = slatedDate.getFullYear();
          return `${day}/${month}/${year}`;
        }

        if(options.addDate){
          today.setDate(today.getDate()+options.addDate)
        }
        const formattedDate = today.toLocaleDateString(undefined, defaultOptions);

        return formattedDate;
      } catch (error) {
        console.log(error);
      }
    };

    function atomiFormatTime() {
      try {
        const now = new Date();
        return now.toLocaleTimeString(undefined, {
          hour: '2-digit',
          minute: '2-digit',
          hour12: false
        });
      } catch (error) {
        console.log(error);
      }
    };
    function runDelayedFunctions(data) {
      try {
        document.querySelectorAll('.atomicat-delay').forEach(el => el.classList.remove('atomicat-delay'));
        if(data?.setDisplayed){
          localStorage.setItem(data?.setDisplayed, true);
        }
        
      } catch (error) {
        console.log(error);
      }
    }
  
      (function() {
        try {
          const replaceItems = ["hoje-ext", "amanha-ext", "hoje", "ano", "amanha", "hora"]
          replaceItems.forEach(rI => {
            let innerData = ""
            if(rI == "hoje-ext"){
              innerData = atomiFormatDate()
            } else if(rI == "amanha-ext"){
              innerData = atomiFormatDate({addDate: 1})
            } else if(rI == "hoje"){
              innerData = atomiFormatDate({ slated: true })
            } else if(rI == "ano"){
              innerData = new Date().getFullYear()
            } else if(rI == "amanha"){
              innerData = atomiFormatDate({ slated: true, addDate: 1 })
            } else if(rI == "hora"){
              innerData = atomiFormatTime()
            }
            document.querySelectorAll('.atomicat-'+rI).forEach(el => {
              el.innerText = innerData
            });
          });
        } catch (error) {
          console.log(error);
        }
      })();
    
    (function() {
      try {
        document.addEventListener('DOMContentLoaded', function () {
          document.addEventListener("keydown", function (e) {
            e.ctrlKey && e.preventDefault();
          }),
          (document.onkeydown = function (e) {
            if (123 == e.keyCode) return !1;
          }),
          document.addEventListener("contextmenu", (e) => e.preventDefault());
        });
      } catch (error) {
        console.log(error);
      }
    })();
    
    (function() {
      function atomiShowNotification(e, t) {
        try {
          var n = document.getElementById("atomicat-snackbar");
          document.getElementById("atomicat-notification-name").innerText = e;
          
          n.classList.add("atomicat-show-notification");
          setTimeout(function () {
            n.classList.remove("atomicat-show-notification");
          }, 4e3);
        } catch (error) {
          console.log(error);
        }
      }
      function randomIntFromInterval(e, t) {
        try {
          return Math.floor(Math.random() * (t - e + 1) + e);
        } catch (error) {
          console.log(error);
        }
      }

      try {
        const names = ["Jose","Joao","Antonio","Francisco","Carlos","Paulo","Pedro","Lucas","Luiz","Marcos","Luis","Gabriel","Rafael","Daniel","Marcelo","Bruno","Eduardo","Felipe","Raimundo","Rodrigo","Manoel","Mateus","Andre","Fernando","Fabio","Leonardo","Gustavo","Guilherme","Leandro","Tiago","Anderson","Ricardo","Marcio","Jorge","Sebastiao","Alexandre","Roberto","Edson","Diego","Vitor","Sergio","Claudio","Matheus","Thiago","Geraldo","Adriano","Luciano","Julio","Renato","Alex","Vinicius","Rogerio","Samuel","Ronaldo","Mario","Flavio","Douglas","Igor","Davi","Manuel","Jeferson","Cicero","Victor","Miguel","Robson","Mauricio","Danilo","Henrique","Caio","Reginaldo","Joaquim","Benedito","Gilberto","Marco","Alan","Nelson","Cristiano","Elias","Wilson","Valdir","Emerson","Luan","David","Renan","Severino","Fabricio","Mauro","Jonas","Gilmar","Jean","Fabiano","Wesley","Diogo","Adilson","Jair","Alessandro","Everton","Osvaldo","Gilson","Willian","Joel","Silvio","Helio","Maicon","Reinaldo","Pablo","Artur","Vagner","Valter","Celso","Ivan","Cleiton","Vanderlei","Vicente","Arthur","Milton","Domingos","Wagner","Sandro","Moises","Edilson","Ademir","Adao","Evandro","Cesar","Valmir","Murilo","Juliano","Edvaldo","Ailton","Junior","Breno","Nicolas","Ruan","Alberto","Rubens","Nilton","Augusto","Cleber","Osmar","Nilson","Orlando","Hugo","Otavio","Vinicios","Italo","Wilian","Alisson","Aparecido","Maria","Ana","Francisca","Antonia","Adriana","Juliana","Marcia","Fernanda","Patricia","Aline","Sandra","Camila","Amanda","Bruna","Jessica","Leticia","Julia","Luciana","Vanessa","Mariana","Gabriela","Vera","Vitoria","Larissa","Claudia","Beatriz","Rita","Luana","Sonia","Renata","Eliane","Josefa","Simone","Natalia","Cristiane","Carla","Debora","Rosangela","Jaqueline","Rosa","Aparecida","Daniela","Marlene","Terezinha","Raimunda","Andreia","Fabiana","Lucia","Raquel","Angela","Rafaela","Joana","Luzia","Elaine","Regina","Daniele","Sueli","Daiane","Alessandra","Isabel","Sara","Bianca","Flavia","Erica","Viviane","Silvana","Priscila","Paula","Luiza","Tereza","Isabela","Marta","Caroline","Janaina","Laura","Marli","Tatiane","Marina","Silvia","Monica","Tais","Michele","Solange","Edna","Fatima","Helena","Cristina","Alice","Carolina","Rosana","Andressa","Celia","Valeria","Eliana","Sabrina","Andrea","Tania","Barbara","Thais","Denise","Roseli","Gisele","Marilene","Katia","Eva","Milena","Eduarda","Elisangela","Vilma","Geovana","Luciene","Tamires","Tatiana","Roberta","Elza","Talita","Marcela","Pamela","Vania","Irene","Josiane","Livia","Cintia","Ivone","Lais","Benedita","Sebastiana","Taina","Joice","Mirian","Elizabete","Angelica","Gabriele","Brenda","Veronica","Rosilene","Karina","Nair","Neusa","Margarida","Neuza","Neide","Raissa","Maiara","Lorena","Franciele","Samara","Lilian","Janete"]

        const g = randomIntFromInterval(0, names.length - 1);
        atomiShowNotification(names[g], "[atomicat-notification-msg]");
        setInterval(() => {
          let t = randomIntFromInterval(0, names.length - 1);
          atomiShowNotification(names[t], "[atomicat-notification-msg]");
        }, 8e3);
      } catch (error) {
        console.log(error);
      }
    })();