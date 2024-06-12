<?php
include('ReqConn.php');
$query = "SELECT Cname,Clastname,state,message FROM customercontact";
$result = mysqli_query($conn, $query);
?>
<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>Customer Name</th>
    <th>Customer Last Name</th>
    <th>Customer State</th>
    <th>Customer Message</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   
   <td><?php echo $data['Cname']; ?> </td>
   <td><?php echo $data['Clastname']; ?> </td>
   <td><?php echo $data['state']; ?> </td>
   <td><?php echo $data['message']; ?> </td>   
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="9">No data found</td>
    </tr>
 <?php } ?>
 </table