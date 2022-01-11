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
            <label for="bday"> Enter the Bday:</label>
            <input type="text" name="bday" id="bday">
            <label for="wage"> Enter the Wage:</label>
            <input type="text" name="wage" id="wage">    
            <input type="submit" value="Update" name="update">
        </form>
        <a href="delete.php"><button>DELETE</button></a>
        <a href="create.php"><button>INSERT</button></a>
        <a href="select.php"><button>SELECT</button></a>
        <?php
            if(isset($_POST['update'])){
                        $user=input_valid($_POST['user']);
                        $bday=input_valid($_POST['bday']);
                        $wage=input_valid( $_POST['wage']);
                        mysqli_query($con,"UPDATE crud set user = '$user', bday = '$bday' , wage = '$wage' Where user='$user'");
                    }
        ?>
</body>
</html>