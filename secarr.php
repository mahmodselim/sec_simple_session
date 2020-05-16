<?php
// initiate  array Employee Data
$employees = array(
    array('name'=>'moahamed salem', 'age'=>29,'salary'=> 9000),
    array('name'=>'mahmoud Khaled','age'=> 25,'salary'=> 10000),
    array('name'=>'Mohammed mahmoud','age'=>35,'salary'=> 11000),
);
  
    
?>
<html>
<body>
<table border="1">
    <thead >
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Age</th>
        <th>Salary</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($employees as $index=>$row):?>
        
        <tr>
            <td><?php echo ++$index; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['salary']; ?></td>
          </tr>
    <?php endforeach;?>
   

    </tbody>
</table>
</body>
</html>