<?php
include('CustomerData.php');
$query = "SELECT fname, mname, lname, aname, mnumber, gender, startdate, time FROM customerregister";
$result = mysqli_query($conn, $query);
?>
<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name</th>
    <th>Customer Address</th>
    <th>Mobile Number</th>
    <th>Gender</th>
    <th>Decoration Date</th>
    <th>Time</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   
   <td><?php echo $data['fname']; ?> </td>
   <td><?php echo $data['mname']; ?> </td>
   <td><?php echo $data['lname']; ?> </td>
   <td><?php echo $data['aname']; ?> </td>
   <td><?php echo $data['mnumber']; ?> </td>
   <td><?php echo $data['gender']; ?> </td>
   <td><?php echo $data['startdate']; ?> </td>
   <td><?php echo $data['time']; ?> </td>
   
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
 </table