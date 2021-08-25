<?php
    $req = "Select * from caisse where idcaisse=".$idcaisse;
    $query = $this->db->query($req); 
    foreach ($query->result_array() as $row) {
            $nomCaisse=$row['nom'];
    }
    $reqGetListeProduit = "Select * from produit";
    $query2 = $this->db->query($reqGetListeProduit);
    $listeCategorieProduit = array();
    $indice = 0;
    foreach($query2->result_array() as $row2){
      // $listeCategorieProduit[$indice] = $row2['idcategorie'];
      // $reqCategorie[$indice] = "Select nom from categorie join produit on produit.idcategorie=categorie.idcategorie where idcategorie=".$listeCategorieProduit[$indice];
      $indice++;
    }
    // for($i=0;$i<$indice;$i++){
    //   $query3 = $this->db->query($reqCategorie[$i]);
    // }
    
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
        <div>
          <table>
            <tr>
              <th>IdProduit</th>
              <th>Nom</th>
              <!-- <th>Categorie</th> -->
              <th>Prix</th>
              <th>Image</th>
            </tr>
            <?php foreach($query2->result_array() as $row2){ ?>
            <tr>
              <td><?php echo $row2['idproduit'] ?></td>
              <td><?php echo $row2['nom'] ?></td>
              <!-- <td></td> -->
              <td><?php echo $row2['prix'] ?> Ariary</td>
              <td><img src="<?php echo images_url($row2['image']) ?>" alt="" style="width:175px;"></td>
            </tr>
            <?php } ?>
          </table>
        </div>
  </div>
  <!-- /.col-lg-3 -->


</div>
<!-- /.row -->

</div>
<!-- /.container -->