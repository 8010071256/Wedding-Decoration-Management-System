<?php
include('ReqConn.php');
$query = "SELECT Guest,chair,Tablet,Sound,menufirst,menusecond,menuthird,menufourh,menufifth FROM customerorder";
$result = mysqli_query($conn, $query);
?>
<table border ="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>Total Guest</th>
    <th>Total Chair</th>
    <th>Total Table</th>
    <th>Total Sound</th>
    <th>First Menu Item</th>
    <th>second Menu Item</th>
    <th>Third Menu Item</th>
    <th>Forth Menu Item</th>
    <th>Fifth Menu Item</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   
   <td><?php echo $data['Guest']; ?> </td>
   <td><?php echo $data['chair']; ?> </td>
   <td><?php echo $data['Tablet']; ?> </td>
   <td><?php echo $data['Sound']; ?> </td>
   <td><?php echo $data['menufirst']; ?> </td>
   <td><?php echo $data['menusecond']; ?> </td>
   <td><?php echo $data['menuthird']; ?> </td>
   <td><?php echo $data['menufourh']; ?> </td>
   <td><?php echo $data['menufifth']; ?> </td>
   
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="9">No data found</td>
    </tr>
 <?php } ?>
 </table