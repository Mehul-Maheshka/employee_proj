<html>
  <head>
    <title>Display</title>
    <style>
      body
      {
        background: #D071f9;
      }
      table{
        background-color: white;
      }
      .update, .delete{
        background-color: green;
        color: white;
        border: 0;
        outline: none;
        border-radius: 5px;
        height:23px;
        width:80px;
        font-weight: bold;
        cursor: pointer;
      }
      .delete{
        background-color: red;
      }
    </style>
  </head>
</html>

<?php
include("connection.php");

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);//mysqli_num_rows,iss fn se no of rows pata kar sakte hai & display kara sakte hai



 
// echo $total;

if($total != 0)
{
  ?>
  <h2 align="center"><mark>Displaying All Record</mark></h2>
  <center><table border="1" cellspacing="7" width="100%">
    <tr>
      <th width="5%">ID</th>
      <th width="8%">First Name</th>
      <th width="8%">Last Name</th>
      <th width="10%">Gender</th>
      <th width="20%">Email</th>
      <th width="10%">Phone</th>
      <th width="24%">Address</th>
      <th width="15%">Operations</th>
      
    </tr>
    <?php
    // mysqli_fetch_assoc - ye fn data ko array ke format mai leke aata hai
  while($result = mysqli_fetch_assoc($data))
  {
    echo "<tr>
            <td>".$result['id']."</td>
            <td>".$result['fname']."</td>
            <td>".$result['lname']."</td>
            <td>".$result['gender']."</td>
            <td>".$result['email']."</td>
            <td>".$result['phone']."</td>
            <td>".$result['address']."</td>

            <td><a href='update_design.php?id=$result[id]'><input type='submit' value='Update' class='update'></a>

            <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()'></a></td>

            
            
          </tr>
          ";
  }
}
else{
  echo "No records found";
}

?>
</table>
</center>

<script>
  function checkdelete()
  {
    return confirm('Are you sure you want to delete this record ?');
  }
</script>




<!-- <?php
include("connection.php");

// $query = "SELECT * FROM form";
// $data = mysqli_query($conn, $query);

// $total = mysqli_num_rows($data);

// if($total != 0)
// {
//     while ($result = mysqli_fetch_assoc($data)) {
//         echo $result['fname'] . "<br>";
//         echo $result['lname'] . "<br>";
//         echo $result['gender'] . "<br>";
        
//     }
// }
// else{
//     echo "No records found";
// }

?> -->
