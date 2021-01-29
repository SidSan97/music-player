//Cria um array com o nome das músicas
let musics = ["Canal foi tão bom.mp3", "Look at me.mp3", "Ali Bomaye.mp3", "Build 7600.mp3", "Still.mp3"];

//Cria um array com nome dos artistas
let artistis = ["SABOTAGE", "XXXTENTACION", "THE GAME", "TOER", "DRE"];

//Cria um array com a capa das músicas
let poster = ["foto-albuns/Poster1.jpg", "foto-albuns/Poster2.jpg", "foto-albuns/Poster3.jpg", "foto-albuns/Poster4.jpg", "foto-albuns/Poster5.jpg"];

let listsong     = document.querySelectorAll("#song0, #song1");
let songTitle    = document.querySelector("#songTitle");
let songTitle2   = document.querySelector("#songTitle2");
let subSongTitle = document.querySelector("#subSongTitle");
let artistSongMain = document.querySelector("#artistSongMain");

let fillbar = document.querySelector("#fill");

let currentTime = document.querySelector("#currentTime");

let song = new Audio();
let currentSong = 0;

let title_page = document.getElementsByTagName("title")[0];
let iconePlay = document.querySelector("#play2 img");
let iconePlay1 = document.querySelector("#play img");
let bgImg = document.querySelector("#bg");
let bgImg2 = document.querySelector("#bg2");
let posterSong = document.querySelector("#image");

window.onload = playSong;

//Pega o volume atual e armazena
let volume_now = song.volume;

function playSong() {
  song.src = musics[currentSong];
  bgImg.src = poster[currentSong];
  bgImg2.src = poster[currentSong];
  songTitle.textContent = musics[currentSong].replace('.mp3', "");
  songTitle2.textContent = musics[currentSong].replace('.mp3', "");
  subSongTitle.textContent = artistis[currentSong];
  artistSongMain.textContent = artistis[currentSong];
  //song.play();
  window.requestAnimationFrame(draw);
  title_page.text = "Tocando agora - " + musics[currentSong];
}

function playOrPauseSong() {
  if (song.paused) {
    //Verifica se a música está tocando, caso contrário, 
    //toca a música e muda seus ícones
    song.play();
    iconePlay.src = "Pause.png";
    iconePlay1.src = "Pause1.png";
    console.log("Música tocando");
  }

  else {
    //Caso a primeira condição não seja atendida,
    //parte para o ELSE e pausa a música realizando a troca dos icones
    song.pause();
    iconePlay.src = "Play.png";
    iconePlay1.src = "Play1.png";
    console.log("Música pausada");
  }
}

song.addEventListener('timeupdate', function() {
  //Pega a posição atual da música
  let position = 	song.currentTime / song.duration;

  //Preenche a barra de progresso
  fillbar.style.width = position * 100 + '%';

  //Converte decimal para inteiro
  convertTime(Math.round(song.currentTime));

  //Verifica se a música já acabou, caso verdade chama a função nextSong()
  if(song.ended) {
    nextSong();
  }
})

function convertTime(seconds) {
  let min = Math.floor(seconds / 60);
  let sec = seconds % 60;

  min = (min < 10) ? "0" + min : min;
  sec = (sec < 10) ? "0" + sec : sec;
  currentTime.textContent = min + ":" + sec;

  totalTime(Math.round(song.duration));
}

function totalTime(seconds) {
  let min = Math.floor(seconds / 60);
  let sec = seconds % 60;

  min = (min < 10) ? "0" + min : min;
  sec = (sec < 10) ? "0" + sec : sec;
  currentTime.textContent += " / " + min + ":" + sec;
}

function nextSong() {
  console.log("Próxima música...")
//Incrementa o valor da música atual
  currentSong++;

  //Verifica se a música atual é maior do que o número de dados do array - 1
  //Caso true reposiciona para o início do array
  if (currentSong > musics.length - 1) {
    currentSong = 0;
  }

  playSong();
  iconePlay.src = "Play.png";
  iconePlay1.src = "Play1.png";
  
  //Troca imagens do fundo e do poster
  bgImg.src = poster[currentSong];
  bgImg2.src = poster[currentSong];
  posterSong.src = poster[currentSong];
}

function previousSong() {
  console.log("Música anterior...");
  //Decrementa o valor da música atual
  currentSong--;

  //Verifica se a música atual é menor do que o número de dados do array - 1
  //Caso true reposiciona para o final do array
  if (currentSong < 0) {
    currentSong = musics.length - 1;
  }

  playSong();
  iconePlay.src = "Play.png";
  iconePlay1.src = "Play1.png";

  //Troca imagens do fundo e do poster
  bgImg.src = poster[currentSong];
  bgImg2.src = poster[currentSong];
  posterSong.src = poster[currentSong];
}

//Adiciona um ouvinte da janela e verifica as teclas pressionadas
window.addEventListener('keyup', function(event){
  //Pega o valor ASCI das teclas recebidas através do evento
  let numeracao_teclado = event.which;

  console.log('Tecla número: ' + numeracao_teclado);
  
  if(numeracao_teclado === 32) {
    //Ativado ao apertar a tecla espaço
    playOrPauseSong();
  }

  else if(numeracao_teclado === 37) {
    //Ativado ao apertar a tecla da seta da esquerda
    previousSong();
  }

  else if(numeracao_teclado === 39) {
    //Ativado ao apertar a tecla da seta da direita
    nextSong();
  }

  else if(numeracao_teclado === 38) {
    //Ativado ao apertar a tecla para cima
    increaseVolume();
  }

  else if(numeracao_teclado === 40) {
    //Ativado ao apertar a tecla para baixo
    decreaseVolume();
  }

  else if(numeracao_teclado === 77) {
    //Ativado ao apertar a tecla M
    mute();
  }	
});

function decreaseVolume() {
  //Tenta diminuir o volume de 0.10
  try {
    song.volume -= 0.10;
  }

  //Caso ocorra erro emite um alerta
  catch {
    console.error('NÃO É POSSÍVEL DIMINUIR');
  }			
}

function increaseVolume() {
  //Tenta diminuir o volume de 0.10
  try {
    song.volume += 0.10;
  }

  //Caso ocorra erro emite um alerta			
  catch {
    console.error('NÃO É POSSÍVEL AUMENTAR');
  }
}

function mute() {
  //Verifica se o volume é maior que 0, caso verdade atribui o valor para 0
  if (song.volume > 0) {
      song.volume = 0;
      document.getElementById('volumeIcon').style.background = '#dc3545';
  }

  //Caso contrário o volume recebe o seu valor antes de ser mutado
  else {
    song.volume = volume_now;
    document.getElementById('volumeIcon').style.background = '#00d8c9';
  }	
}

$(document).ready(function() {
    //Sobe
  $('#play2').click(function(){
    event.preventDefault();
    $('#painel-player').css('bottom','0px');
    $('#seek-bar').css('bottom','80px');
  });
});

/*var wavesurfer = WaveSurfer.create({
  container: '#waveform',
  waveColor: 'green',
  progressColor: 'purple'
});

wavesurfer.load(musics[currentSong]);
*/





