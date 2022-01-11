<?php
    include "db.php";
    include "../functions/security.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="user"> Enter the username:</label>
            <input type="text" name="user" id="user">
            <input type="submit" value="select" name="select">
        </form>
        <a href="delete.php"><button>DELETE</button></a>
        <a href="update.php"><button>UPDATE</button></a>
        <a href="create.php"><button>INSERT</button></a>
        <?php
        if(isset($_POST['select'])){
                        $user=input_valid($_POST['user']);
                        $bday=input_valid($_POST['bday']);
                        $wage=input_valid( $_POST['wage']);
                        $res = mysqli_query($con,"SELECT * FROM crud WHERE user = '$user'");
                        $resf=mysqli_fetch_assoc($res);
                        echo $resf['id'] . $resf['user'] .$resf['bday']. $resf['wage'];

                    }
                    ?>

</body>
</html>