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
            <input type="submit" value="Delete" name="delete">
        </form>
        <a href="create.php"><button>INSERT</button></a>
        <a href="update.php"><button>UPDATE</button></a>
        <a href="select.php"><button>SELECT</button></a>

        <?php
    if(isset($_POST['delete'])){
                $user=input_valid($_POST['user']);
                mysqli_query($con,"DELETE FROM crud WHERE user = '$user'");
            }
        ?>
</body>
</html>