<?php 
include 'config.php';
$output='';
if(isset($_POST['query']){
    $search=$_POST['query'];
    $stmt=$con->prepare("SELECT * FROM teacherlist WHERE FullName LIKE CONCAT('%',?,'%') OR Email LIKE CONCAT('%',?,'%')");
    stmt->bind_param("ss",$search,$search);
}
else{
    $stmt=$con->prepare("SELECT * FROM teacherlist");
}
$stmt->execute();
$result->num_rows>0){
    $output="
    <thead>
    <tr>
        <th>ID</th>
        <th>FullName</th>
        <th>Email</th>
        <th>Faculty</th>
        <th>Address</th>
        <th>Contact</th>
        
    </tr>
</thead>
<tbody>";
while($row=$result->fetch_assoc()){
    $output .="<tr>
    <td>".$row['ID']."</td>
    <td>".$row['FullName']."</td>
    <td>".$row['Email']."</td>
    <td>".$row['Faculty']."</td>
    <td>".$row['Address']."</td>
    <td>".$row['Contact']."</td>

    <tr>";
}
$output . ="</tbody>";
echo $output;
}
else{
    echo "<h3>Np REcords Found!</h3>";
}
?>