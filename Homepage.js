//***************************************************************************
//CARICA COMMENTI

fetch("CaricaCommenti.php").then(FetchRisposta).then(CaricaCommentiJson);
console.log("FETCH IN CORSO");

function FetchRisposta(risposta){
    return risposta.json();
}

function CaricaCommentiJson(json){
    if(json.length != 0){
        for(let elem in json){
            const sezione = document.querySelector(".SezCommenti");
            const riquadro = document.createElement('div');
            
            const giorno = document.createElement('p');
            giorno.textContent = json[elem].Giorno;
            giorno.classList.add("Data-post");

            const nomeutente = document.createElement('p');
            nomeutente.textContent = 'Utente: ' + json[elem].Username;
            nomeutente.classList.add("Utente-post");

            const commento = document.createElement('p');
            commento.textContent = json[elem].Commento;
            commento.classList.add("Messaggio-post");
            
            riquadro.appendChild(giorno);
            riquadro.appendChild(nomeutente);
            riquadro.appendChild(commento);
            sezione.appendChild(riquadro); 
        }
    }
    console.log("Commenti caricati!");
}

//***************************************************************************
//NUOVO COMMENTO

const calendario = new Date();
const user = document.querySelector("#User");
const testo = document.querySelector("#testo");
const bottone = document.querySelector("#invio");
bottone.addEventListener("click", NuovoMessaggio);

function TipoData(num){
    if(num < 10)
    return '0' + num;

}

function NuovoMessaggio(){
const sezione = document.querySelector(".SezCommenti");
const riquadro = document.createElement('div');

const nomeutente = document.createElement('p');
nomeutente.textContent = 'Utente: ' + user.value;

const giorno = document.createElement('p');
giorno.textContent = calendario.getFullYear() + '-'
                    + TipoData(calendario.getMonth()) + '-'
                    + TipoData(calendario.getDate());

const commento = document.createElement('p');
commento.textContent = testo.value;

riquadro.appendChild(giorno);
riquadro.appendChild(nomeutente);
riquadro.appendChild(commento);
sezione.appendChild(riquadro);
}

//******************************************************************************
//FILTRA COMMENTI
const conferma = document.querySelector("#Conferma");
conferma.addEventListener("click", Filtraggio);


function Filtraggio(){   
fetch("CaricaCommenti.php").then(FiltraRisposta).then(FiltraCommentiJson);
console.log("FETCH IN CORSO");
}

function FiltraRisposta(risposta){
    return risposta.json();
}

function FiltraCommentiJson(json){
    const filtro = document.getElementById("Filtra");
    const utente = filtro.value;
    console.log("UTENTE DA CERCARE: ", utente); 

    console.log("FETCH avvenuto con successo!!!");
    const container = document.querySelectorAll(".SezCommenti div");
    for(let elem of container){
        elem.remove();
    }

    if(json.length != 0){
        const sezione = document.querySelector(".SezCommenti");
        let conta = 0;

        for(let elem in json){
            console.log("USERNAME TROVATO: ", elem.Username);
            if(json[elem].Username == utente){
                const riquadro = document.createElement('div');
                const giorno = document.createElement('p');
                giorno.textContent = json[elem].Giorno;
                giorno.classList.add("Data-post");

                const nomeutente = document.createElement('p');
                nomeutente.textContent = 'Utente: ' + json[elem].Username;
                nomeutente.classList.add("Utente-post");

                const commento = document.createElement('p');
                commento.textContent = json[elem].Commento;
                commento.classList.add("Messaggio-post");
            
                riquadro.appendChild(giorno);
                riquadro.appendChild(nomeutente);
                riquadro.appendChild(commento);
                sezione.appendChild(riquadro); 
                conta++;
                console.log(conta);
            }
        }
        if(conta == 0){
            const riquadro = document.createElement('div');
            const avviso = document.createElement('p');
            avviso.textContent = "NESSUN MESSAGGIO NEL DATABASE";
            riquadro.appendChild(avviso);
            sezione.appendChild(riquadro); 
        }
    }
}