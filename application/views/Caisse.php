<?php
    $req = "Select * from caisse where idcaisse=".$idcaisse;
    $query = $this->db->query($req); 
    foreach ($query->result_array() as $row) {
            $nomCaisse=$row['nom'];
    }

?>
<div class="container">

<div class="row">

<div class="col-lg-2">

<div class="row ">

</div>
<!-- /.row -->

</div>
<!-- /.col-lg-9 -->

  <div class="col-lg-10">
    <br> 
        <div class="form-group">
            <label for="caisse"><h3><?php echo  $nomCaisse ?></h3></label>
        </div>
        
  </div>
  <!-- /.col-lg-3 -->


</div>
<!-- /.row -->

</div>
<!-- /.container -->