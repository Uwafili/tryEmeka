<?php
require_once('config.php');
if (!isset($_SESSION['user'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="prime.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php require_once('navbar.php') ?>


    <div class="ps">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />


<div class="container">
<div class="col-md-12 col-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Task Details</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <tbody><tr>
              <th class="text-center">
                <div class="custom-checkbox custom-checkbox-table custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                  <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                </div>
              </th>
              <th>Task Name</th>
              <th>POINT</th>
             
              <th>Action</th>
            </tr>
            <tr>
              <td class="p-0 text-center">
                <div class="custom-checkbox custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                  <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                </div>
              </td>
              <td>FOLLOW US ON TWITTER</td>
              <td class="align-middle">
                20%
              </td>
            
              <td>
                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
              </td>
            </tr>
          
          </tbody></table>
        </div>
      </div>
    </div>
  </div>
</div>


        
            <main>
            <div id="header">
                <h1>Ranking</h1>
                <button class="share">
                <i class="ph ph-share-network"></i>
                </button>
            </div>
            <div id="leaderboard">
                <div class="ribbon"></div>
                <table>
                <tr class="gn">
                    <td class="number">1</td>
                    <td class="name">Lee Taeyong</td>
                    <td class="points">
                    258.244 <img class="gold-medal" src="https://github.com/malunaridev/Challenges-iCodeThis/blob/master/4-leaderboard/assets/gold-medal.png?raw=true" alt="gold medal"/>
                    </td>
                </tr>
                <tr>
                    <td class="number">2</td>
                    <td class="name">Mark Lee</td>
                    <td class="points">258.242</td>
                </tr>
                <tr>
                    <td class="number">3</td>
                    <td class="name">Xiao Dejun</td>
                    <td class="points">258.223</td>
                </tr>
                <tr>
                    <td class="number">4</td>
                    <td class="name">Qian Kun</td>
                    <td class="points">258.212</td>
                </tr>
                <tr>
                    <td class="number">5</td>
                    <td class="name">Johnny Suh</td>
                    <td class="points">258.208</td>
                </tr>
                </table>
                <div id="buttons">
                <button class="exit">Exit</button>
                <button class="continue">Continue</button>
                </div>
            </div>
            </main>

    </div>
</body>
</html>