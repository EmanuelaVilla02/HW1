const Frasi = [
    "Joe e Grace durante il making-of del video promozionale per il libro, 07-02-24",
    "Foto scattata durante la prima presentazione del libro in una scuola media (scuola Salvatore Quasimodo, Catania), 09-02-24",
    "Presentazione ufficiale del libro nella chiesa di sant'Orsola in piazza Scammacca (Catania), 26-02-24"
];


function Didascalia(event){
    const elem = event.currentTarget;
    let num = elem.dataset.id;

    let testo = document.querySelector("#Didascalia div");
    testo.classList.remove("hidden");
    testo.textContent= Frasi[num-1];
}


const listafoto = document.querySelectorAll("#Galleria img");
for(const foto of listafoto){
    foto.addEventListener("mouseover", Didascalia);
}