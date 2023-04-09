
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nightingayle</title>
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="right">
            <ul class="list">
                <li>About</li>
                <li>Contact</li>
                <li id="username"><?php $username?></li>
            </ul>
            <img src="" alt="current_user" class="img">
            <img src="" alt="partner" class="img" tool="Add partner" class="partner_img">
        </div>
        <form action="update_partner.php" class="partner_form" method="post">
          <input type="text" name="partner_username" id="partner_username" placeholder="Enter partner username">
          <input type="submit" value="Save">
        </form>
    </header>
    <main>
        <div class="cards">
            <div class="card" style="width: 18rem;">
                <img src="bg.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Share your hearts through shared beats</h5>
                  <p class="card-text">Here, you can connect with your soul partner throught the language of music</p>
                  <a href="music.php" class="btn btn-primary">Sync heart</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="bg.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="bg.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
    </main>
</body>
<script src="music.js">
</script>
</html>