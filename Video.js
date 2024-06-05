//API YOUTUBE
var tag = document.createElement('script');

fetch("API YouTube.php").then(Risposta).then(CaricaVideo);
console.log("FETCH YOUTUBE IN CORSO");

function Risposta(risposta){
    return risposta.json();
}

function CaricaVideo(json){
    console.log("FETCH YOUTUBE Avvenuto con successo");
    console.log(json.APIurl);
    console.log(json.videoID);

    tag.src = json.APIurl;


    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


    var player;
    
    }

function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '360',
            width: '640',
            videoId: 'HXH-vdJRQ1U',
            events: {
                'onReady': onPlayerReady,
                //'onStateChange': onPlayerStateChange
            }
        });

function onPlayerReady(event) {
    event.target.playVideo();
    }
}


/*
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";


var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '360',
        width: '640',
        videoId: 'HXH-vdJRQ1U',
        events: {
            'onReady': onPlayerReady,
            //'onStateChange': onPlayerStateChange
        }
    });
}

function onPlayerReady(event) {
  event.target.playVideo();
}
*/

/*****************************************************/
//API OROLOGIO

let spazio = document.querySelector("article img");

fetch("API Orologio.php").then(OnResponse).then(CaricaOrologio);
console.log("FETCH OROLOGIO IN CORSO");

function OnResponse(risposta){
    return risposta.json();
}

function CaricaOrologio(json){
   spazio.src = json.Link;
    console.log("FETCH OROLOGIO Avvenuto con successo");
    console.log(json.Link);
}