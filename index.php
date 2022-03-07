<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="">

     <h1>By 10's</h1>

    </div>
        <?php
            $num=60;
                for($i=10; $i < $num; $i+=10) { 
                ?>
                <div class="">
                    <h1><?php echo $i ?></h1>
                    </div>
                
                <?php
            }
        ?>
    <h1>BY 20's</h1>
    <?php
            $num=100;
                for($i=20; $i < $num; $i+=20) { 
                ?>
                <div class="">
                    <h1><?php echo $i ?></h1>
                    </div>
                
                <?php
            }
        ?>

<h1>BY 50's</h1>
    <?php
            $num=500;
                for($i=50; $i < $num; $i+=50) { 
                ?>
                <div class="">
                    <h1></h1><?php echo $i ?></h4>
                    </div>
                
                <?php
            }
        ?>

            <?php
                $input =3;

                if ($input >=5) {
                    ?>
                    <div class="">
                        <h1>10 20 30 40 50</h1>
                    </div>
                    <?php
                }
                else  {
                    ?>
                    <div class="">
                        <h1>odd</h1>
                    </div>
                    <?php
                }
      
             
            ?>
</body>
</html>
