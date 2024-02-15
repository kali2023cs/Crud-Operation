<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
        <div class="container my-5">

            <button class="btn btn-primary"><a href="user.php" class="text-light" style="text-decoration:none;">Add User</a></button>

            <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">e-mail</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>

  
  <tbody>
  <?php
        $sql="select * from `crud`";
        $result=mysqli_query($con,$sql);

            if($result)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    $id=$row['id'];
                    $name=$row['name'];
                    $email=$row['email'];
                    $mobile=$row['mobile'];
                    $password=$row['password'];

                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$password.'</td>
                    <td>
                    <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light" style="text-decoration:none;">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light" style="text-decoration:none;">Delete</a></button>
                    </td>
                  </tr>';
                }
            }

  ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->

        
  </tbody>
</table>

        </div>

</body>
</html>