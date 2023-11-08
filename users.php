<?php
session_start();
if(!$_SESSION['validate']==true){
    header('location:index.php');
    session_destroy();
}else if(isset($_POST['logout_button'])){
    header('location:index.php');
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./table.css">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="submit" value="Logout" name="logout_button"> 
        <label for=""><?php echo $_SESSION['name']; ?></label>
    </form>
   <hr>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require('./conection.php');
            $p=crud::Selectdata();
            if (isset($_GET['id'])) {
                $id=$_GET['id'];
                $e=crud::delete($id);
            }
            if (count( $p)>0) {
                for ($i=0; $i < count( $p); $i++) { 
                   echo '<tr>';
                   foreach ( $p[$i] as $key => $value) {
                    if ($key!='id') {
                        echo '<td>'.$value.'</td>';
                    }
                    }
                    ?>

                    <td><a type="submit" href="users.php?id=<?php echo $p[$i]['id'] ?>"><img src="./trash.svg" alt="" srcset=""></a></td>
                    <td><a href="upDate.php?id_up=<?php echo $p[$i]['id'] ?>"><img src="./edit.svg" alt="" srcset=""></a></td>
                    <?php
                    echo '</tr>';
                }
            }


    ?>
        </tbody>
    </table>
</body>
</html>