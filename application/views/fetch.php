<?php
//fetch.php
$output = '';
$query = '';
if(isset($_POST["query"]))
{
  $search = mysqli_real_escape_string($connect, $_POST["query"]);
  $query = $this->db->query("Select * from produit where nom like '%".$search."%' ");
}
else
{
 $query = $this->db->query('Select * from produit');
}
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Customer Name</th>
     <th>Address</th>
     <th>City</th>
     <th>Postal Code</th>
     <th>Country</th>
    </tr>
 ';
   foreach ($query->result_array() as $row) {
  $output .= '
   <tr>
    <td>'.$row["nom"].'</td>
    <td>'.$row["prix"].'</td>
    <td>'.$row["image"].'</td>
    <td>'.$row["stock"].'</td>
    <td>'.$row["idcategorie"].'</td>
   </tr>
  ';
 }
 echo $output;

?>
