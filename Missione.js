function ApriPergamena(event)
{
  const pergamena = event.currentTarget;
  const messaggio1 = document.querySelector("#Testo");
  const messaggio2 = document.querySelector("#Messaggio");

  pergamena.src = "Icone/Pergamena 3B.png";
  pergamena.classList.add("Allarga");
  pergamena.removeEventListener("click", ApriPergamena);

  messaggio1.classList.remove("hidden");
  messaggio2.classList.add("hidden");

  AppareMedaglia();
}

function AppareMedaglia(){
  const immagine = document.createElement("img");
  const container = document.querySelector("article");

  immagine.src = "Icone/Medaglia.png";
  immagine.classList.add("Posizione");
  container.appendChild(immagine);
}

const pergamena = document.querySelector("#Pergamena");
pergamena.addEventListener("click", ApriPergamena);
