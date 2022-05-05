<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Alumni</title>
</head>

<body>
    <?php
    include('index.php');
    ?>
    
        <div style="margin: 2rem;" class="alum-container">
            <form action="alumniadd1.php" method="post">
                <label for="email">Alumni's Email ID</label>
                <input type="email" name="alumniemail" id="" placeholder="Enter Email ID"><br>

                <?php
                $change =  passFunc(10, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
                function passFunc($len, $set = "")
                {
                    $gen = "";
                    for ($i = 0; $i < $len; $i++) {
                        $set = str_shuffle($set);
                        $gen .= $set[0];
                    }
                    return $gen;
                }
                ?>

                <label>Password</label>
                <input type="text" name="password" id="pass" required="true" readonly="readonly" />
                <input type="button" value="Generate" onclick="document.getElementById('pass').value = '<?php echo $change ?>'">
                <br>
                <button style="border-color: red;" class="btn" name="submit">Submit</button>
              

            </form>
        </div>
  


</body>

</html>