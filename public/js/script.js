//document.getElementById('titulo').innerHTML = "Manchetona do Pedra";

//player do podcast

let podcasts = [
    {title:'Música Modal', autor: 'Benedito', src:'/media/modal01.mp3', img:'/image/escrita4.jpg'},
    {title:'dançante', autor: 'Benethowen', src:'/media/modal01.mp3', img:'/image/escrita2.jpg'}
]; 
let indexAudio = 0;
let audio = document.querySelector('audio');
let imagem = document.querySelector('.player-box img');
let nomePod = document.querySelector('.descricao h2');
let titlePod = document.querySelector('.descricao i');
let duracaoAudio = document.querySelector('.fim');

renderizarAudio(indexAudio);


duracaoAudio.textContent = segundosParaMinutos(Math.floor(audio.duration));
// Eventos
document.querySelector('.botao-play').addEventListener('click',tocaAudio);
document.querySelector('.botao-pause').addEventListener('click', pauseAudio);
audio.addEventListener('timeupdate', atualizarBarra);

document.querySelector('.anterior').addEventListener('click', () =>{
    indexAudio --;
    if(indexAudio < 0){
        indexAudio = 2;
    }
    renderizarAudio(indexAudio);
});
document.querySelector('.proxima').addEventListener('click', () =>{
    indexAudio ++;
    if(indexAudio > 2){
        indexAudio = 0;
    }
    renderizarAudio(indexAudio);
});


/*    Funções    */

function renderizarAudio(index){
    audio.setAttribute('src', podcasts[index].src);
    audio.addEventListener('loadeddata', () => {
        titlePod.textContent = podcasts[index].title;
        nomePod.textContent = podcasts[index].autor;
        imagem.src = podcasts[index].img;
        duracaoAudio.textContent = segundosParaMinutos(Math.floor(audio.duration));

    });
}
function tocaAudio(){
    audio.play();
    document.querySelector('.botao-pause').style.display = "block";
    document.querySelector('.botao-play').style.display = 'none';
}

function pauseAudio(){
    audio.pause();
    document.querySelector('.botao-play').style.display = 'block';
    document.querySelector('.botao-pause').style.display = 'none';
}

function atualizarBarra(){
    let barra = document.querySelector('progress');
    barra.style.width = Math.floor((audio.currentTime / audio.duration) * 100) + '%' ;
    let tempoDecorrido = document.querySelector('.inicio');
    tempoDecorrido.textContent = segundosParaMinutos(Math.floor(audio.currentTime));
}
function segundosParaMinutos(segundos){
    let campoMinutos = Math.floor(segundos / 60);
    let campoSegundos = segundos % 60;
    if(campoSegundos < 10){
        campoSegundos = '0' + campoSegundos;
    }
    return campoMinutos+':'+campoSegundos;
}

//Formata texto

$(document).ready(function() {
    $('#body').summernote({
        tabsize: 2,
         height: 400
    });

});



$(document).ready(function() {
    $('#description').summernote({
        tabsize: 2,
        height: 400
    });
});


// Fotos
altura, largura = '900px';
function aumentaImagem(altura, largura){
   

    document.querySelector('.foto').setAttribute('width', '900px');
    document.querySelector('.foto').setAttribute('height', '900px');
  
}
//Player 02

const audioPod = document.querySelector('#audioPod');
const playPauseBtn = document.querySelector('#play-pause');
const nextBtn = document.querySelector('#next');
const prevBtn = document.querySelector('#previous');
const songList = document.querySelector('.song-list');
const title = document.querySelector('#title');
const record = document.querySelector('.record');
const volSlider = document.querySelector('.slider');

let songArray = [];
let songHeading = '';
let songIndex = 0;
let isPlaying = false;

function loadAudio(){
    audioPod.src = songArray[songIndex];

    let songListItems = songList.getElementsByTagName('li');
    songHeading = songListItems[songIndex].getAttribute('data-name');
    title.innerText = songHeading;

    //Highlight
    for(i=0; i<songListItems.length; i++){
        songListItems[i].classList.remove('active');

    }
    songList.getElementsByTagName('li')[songIndex].classList.add('active');
}

function loadSongs(){
   let songs = songList.getElementsByTagName('li');
   for(i=0; i< songs; i++){
       songArray.push(songs[i].getAttribute('data-src'))
   };
   loadAudio(); 
}

loadSongs();

function playAudio(){
    audioPod.play();
    playPauseBtn.querySelector('i.fas').classList.remove('fa-play');
    playPauseBtn.querySelector('i.fas').classList.add('fa-pause');
    isPlaying = true;
}
function pauseAudio(){
    audioPod.play();
    playPauseBtn.querySelector('i.fas').classList.remove('fa-pause');
    playPauseBtn.querySelector('i.fas').classList.add('fa-play');
    isPlaying = false;
}
playPauseBtn.addEventListener('click', function(){
    if(isPlaying){
        pauseAudio();
    }else{
        playAudio();
    }

}, false);
