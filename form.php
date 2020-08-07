<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>lanchonete coma bem - cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="stuff/style.css">
</head>

<body>
    <!-- <div id="container"> -->
        <div id="qualquer">
        <div class="form-group">
            <div class="row">
                <img src="https://www.uairango.com/imagens/img_estabelecimentos/50d000bf03c707bd062e107a40708c9f.png"
                    alt="logo-lanchonete">
            </div>
            <div class="row">
                <form action="index.php" method="POST">
                    <h2>faz o cadastro aí</h2>
                    <input placeholder="Nome" type="text" name="user"><br><br>
                    <input placeholder="Senha" type="password" name="password"><br><br>
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
        

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js" integrity="sha512-WIklPM6qPCIp6d3fSSr90j+1unQHUOoWDS4sdTiR8gxUTnyZ8S2Mr8e10sKKJ/bhJgpAa/qG068RDkg6fIlNFA==" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
        <script type="text/javascript">
            function setup() {
              createCanvas(400, 400);
            }

            //variaveis
            var pos = {
              x: 90,
              y: 15,
              velx: 5,
              vely: 5
            };
            function draw() {
              background(0);
              rect(pos.x, pos.y, 50);
              pos.x += pos.velx;
              pos.y += pos.vely;
              
              if (pos.x > 350 || pos.x < 0) {
                pos.x += pos.velx *= -1;
                
              }
              else if (pos.y > 350 || pos.y < 0) {
                pos.y += pos.vely *= -1;
              }
              
            }
        </script>
    <!-- <img src="download.jpg" width="200"> -->
</body>

</html>