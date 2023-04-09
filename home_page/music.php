<?php
session_start();
$username= $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="music.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <title>Music Player</title>
</head>

<body>
    <div class="header">
            <div class="field">
                <label for="musicName">Select Music Name:</label>
                <select name="musicName" id="musicName">
                    <option value="Thukra ke mera pyar">Thukra ke mera pyar</option>
                    <option value="Ae Zindagi Gale Laga Le">Ae Zindagi Gale Laga Le</option>
                    <option value="Yun Hi Chala Chal">Yun Hi Chala Chal</option>
                    <option value="Ajj Din Chadheya">Ajj Din Chadheya</option>
                    <option value="Kuch Kuch Hota Ha">Kuch Kuch Hota Hai</option>
                    <option value="Dil Chahta Hai">Dil Chahta Hai</option>
                </select>
            </div>
            <p id="username"><?php echo $username?></p>
            <div class="field">
                <label for="musicType">Select Type:</label>
                <select name="musicName" id="musicType">
                    <option value="single">Single</option>
                    <option value="with partner">With Partner</option>
                </select>
            </div>
            <input type="submit" value="Play Music" class="music_btn">
    </div>
    <h1>Music Player</h1>
    <div class="music-container" id="music-container">
        <div class="music-info">
            <h4 class="title" id="title"></h4>
            <div class="progress-container" id="progress-container">
                <div class="progress" id="progress"></div>
            </div>
        </div>
        <audio rel="audio" src="" id="audio"></audio>
        <div class="img-container">
            <img src="bg.jpg" alt="music-cover" id="cover" />
        </div>
        <div class="navigation">
            <button id="prev" class="action-btn">
                <i class="fa fa-backward" aria-hidden="true"></i>
            </button>
            <button id="play" class="action-btn action-btn-big">
                <i class="fa fa-play" aria-hidden="true"></i>
            </button>
            <button id="next" class="action-btn">
                <i class="fa fa-forward" aria-hidden="true"></i>
            </button>
        </div>
    </div>
    
    <script src="music.js"></script>
</body>

</html>