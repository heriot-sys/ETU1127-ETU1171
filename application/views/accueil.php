<?php
    $query = $this->db->query('Select * from caisse'); 
    $listeCaisse = array();
    $indice = 0;
    foreach ($query->result_array() as $row) {
            $listeCaisse[$indice] = $row['nom'];
            $indice++;
    }
    $i = 0;
    foreach ($query->result_array() as $row) {
        $listeIdCaisse[$i] = $row['idcaisse'];
        $i++;
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
    <form action="<?php echo site_url('Accueil/choix') ?>" method="POST">   
        <div class="form-group">
            <label for="caisse"><h3>Choisir une caisse</h3></label>
        </div>
        <?php for($i=0;$i<count($listeCaisse);$i++) { ?>
          <div class="btn-group btn-group-justified" role="group" aria-label="...">
          <a href="Caisse.php?num=<?php echo $listeIdCaisse[$i] ?>" class="btn btn-outline-info btn-lg" title="<?php echo $listeCaisse[$i] ?>" role="button"><?php echo $listeCaisse[$i] ?></a>
          </div> 
        <?php } ?>
        
    </form>     

  </div>
  <!-- /.col-lg-3 -->


</div>
<!-- /.row -->

</div>
<!-- /.container -->