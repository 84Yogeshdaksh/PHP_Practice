<?php include "Connection.php"; ?>
<htmL>
<head>
    <title>Read Operation</title>
</head>
<body>
<table border="1px" cellpadding="10" cellspacing="0">
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th colspan="2">Action</th>
  </tr>
 
  <?php
    $query = "SELECT * FROM students";
    $data = mysqli_query($conn, $query);
    $result = mysqli_num_rows($data);
    if($result){
        while($row=mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $row['FIRSTNAME'];?>
                <td><?php echo $row['LASTNAME'];?>
                <td><?php echo $row['AGE'];?>
                <td><a href="UpdateData.php?id=<?php echo $row['ID']; ?>">Edit details</a></td>
                <td><a onclick = "return confirm('Are you sure,You want to delete this data')" href="DeleteData.php?id=<?php echo $row['ID']; ?>">Delete</a></td>
            <?php
        }
    }
    else{
        ?>
        <tr>
            <td>No record found</td>
        </tr>
        <br>
        <?php
    }
  ?>
</table> 
<button><a href="InsertData.php">Insert New Data</button>
</body>