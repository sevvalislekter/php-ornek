<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
             if(isset($_POST["kontrol"])){
                $vize=$_POST["vize"];
                $final=$_POST["final"];
                $sonuc=$vize*0.4+$final*0.6;
                if($sonuc>=60 && $final>=60){
                    echo ("GEÇTİ".$sonuc);
                }else{
                    echo("GEÇMEDİ".$sonuc);
                }
             }
        ?>
        <hr>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <div class="form-grup">
                <label for="vize">Vize notu:</label>
                <input type="text" class="form-control" name="vize">
            </div>
            <div class="form-grup">
                <label for="final">Final notu:</label>
                <input type="text" class="form-control" name="final">
            </div>
            <button type="submit" name="kontrol" class="btn">Kontrol Et</button>
        </form>
    </div>
</body>
</html>