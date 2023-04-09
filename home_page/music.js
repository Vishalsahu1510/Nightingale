const musicContainer = document.getElementById("music-container");
const playBtn = document.getElementById("play");
const prevBtn = document.getElementById("prev");
const nextBtn = document.getElementById("next");
const audio = document.getElementById("audio");
const progress = document.getElementById("progress");
const progressContainer = document.getElementById("progress-container");
const title = document.getElementById("title");
const cover = document.getElementById("cover");
var username = document.getElementById("username");
// Songs Titles
let music_btn = document.querySelector(".music_btn");
let music_name = document.querySelector("#musicName");
let music_type = document.querySelector("#musicType");
let audio1 = document.querySelector(".audio");
let header = document.querySelector(".header");
var music_name_value;
var music_type_value;
var songs;

let partner_form= document.querySelector(".partner_form");
let partner_img= document.querySelector(".partner_img");

function audioplay() {
    audio.play();
}
// fetch the music from audio
let setinter = setInterval(Interval, 1000);
function Interval() {
    var flag = false;
    console.log(username.innerText);
    let xml = new XMLHttpRequest();
    xml.open("GET", `load.php?username=${username.innerText}`, true);
    xml.onreadystatechange = function () {
        if (xml.readyState == 4 && xml.status == 200) {
            if (xml.responseText != "error") {
                let url = xml.responseText;
                audio.src = url;
                if (url.includes("mp3")) {
                    console.log(xml.responseText);
                    document.body.innerHTML += ` <div class="alert_card">
                            <h3>title</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, debitis.</p>
                            <button onclick="audioplay()" class="btn">OK</button>
                          </div>`;
                    let btn = document.querySelector(".btn");
                    let alert_card = document.querySelector(".alert_card");
                    btn.addEventListener("click",function () {
                        alert_card.style.display= "none";
                    })
                    flag = true;
                }
                if (flag) {
                    clearInterval(setinter);
                }
            }
        }
    }
    xml.send();
}

music_btn.addEventListener("click", function () {
    music_name_value = music_name.value;
    music_type_value = music_type.value;
    console.log(username.innerText);


    const xhr = new XMLHttpRequest();
    xhr.addEventListener("readystatechange", function () {
        if (this.readyState === this.DONE) {
            songs = JSON.parse(this.responseText)["data"];

            if (music_type_value == "with partner") {
                console.log("i am working");
                let xml = new XMLHttpRequest();
                xml.open("GET", `save.php?username=${username.innerText}&audio_url=${songs[0]["preview"]}`, true);
                xml.onreadystatechange = function () {
                    if (xml.readyState == 4 && xml.status == 200) {
                        console.log(xml.responseText);
                    }
                }
                xml.send();

            }
            // Api fetch data

            // for both play song


            // KeepTrack of song
            let songIndex = 0;
            // Initially load song details into DOM
            loadSong(songs[songIndex]);
            // Update song details
            function loadSong(song) {
                title.innerText = song["title_short"];
                audio.src = song["preview"];
                cover.src = `${song["artist"]["picture_big"]}`;
            }
            // Play Song
            function playSong() {
                musicContainer.classList.add("play");
                playBtn.querySelector("i.fa").classList.remove("fa-play");
                playBtn.querySelector("i.fa").classList.add("fa-pause");
                audio.play();
            }
            // Pause Song
            function pauseSong() {
                musicContainer.classList.remove("play");
                playBtn.querySelector("i.fa").classList.add("fa-play");
                playBtn.querySelector("i.fa").classList.remove("fa-pause");
                audio.pause();
            }
            // Previous Song
            function prevSong() {
                songIndex--;
                if (songIndex < 0) {
                    songIndex = songs.length - 1;
                }
                loadSong(songs[songIndex]);
                playSong();
            }
            // Next Song
            function nextSong() {
                songIndex++;
                if (songIndex > songs.length - 1) {
                    songIndex = 0;
                }
                loadSong(songs[songIndex]);
                playSong();
            }
            // Update Progress bar
            function updateProgress(e) {
                const { duration, currentTime } = e.srcElement;
                const progressPerCent = (currentTime / duration) * 100;
                progress.style.width = `${progressPerCent}%`;
            }
            // Set Progress
            function setProgress(e) {
                const width = this.clientWidth;
                const clickX = e.offsetX;
                const duration = audio.duration;
                audio.currentTime = (clickX / width) * duration;
            }
            // Event Listeners
            playBtn.addEventListener("click", () => {
                const isPlaying = musicContainer.classList.contains("play");
                if (isPlaying) {
                    pauseSong();
                } else {
                    playSong();
                }
            });
            // Change Song
            prevBtn.addEventListener("click", prevSong);
            nextBtn.addEventListener("click", nextSong);
            // Time/Song Update
            audio.addEventListener("timeupdate", updateProgress);
            // Click On progress Bar
            progressContainer.addEventListener("click", setProgress);
            // Song End
            audio.addEventListener("ended", nextSong);

        }
    });
    xhr.open("GET", `https://deezerdevs-deezer.p.rapidapi.com/search?q=${music_name_value}`);
    xhr.setRequestHeader("X-RapidAPI-Key", "af38a0ad5cmshfc96b66913981fcp1df035jsnfb643a00a13f");
    xhr.setRequestHeader("X-RapidAPI-Host", "deezerdevs-deezer.p.rapidapi.com");

    xhr.send();
})

