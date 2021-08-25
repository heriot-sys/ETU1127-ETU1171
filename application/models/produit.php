<?php
  /**
   *
   */
  class Film
  {

    public function getAllproduct(argument)
    {
      $valiny = array();
      $query = $this->db->query('Select * from produit');
      $indice = 0;
      foreach ($query->result_array() as $row) {
        $valiny[$indice] = copyInfo($row);
        $indice++;
      }
      return valiny;
    }
    public function copyInfo($row)
    {
      $valiny = array();
      $valiny ['nom'] = $row['nom'];
      $valiny ['image'] = $row['image'];
      $valiny ['categorie'] = $row['categorie'];
      $valiny ['prix'] = $row['prix'];
      $valiny ['stock'] = $row['stock'];
      return valiny;
    }
    public function insert($nom,$categorie,$prix,$stock,$image)
    {
      $requete = "insert into prouit(nom,idcategorie,prix,stock,image) values('%s','%s','%s','%s','%s')";
      $requete = sprintf($requete,$this->db->escape($nom),$this->db->escape($categorie),$this->db->escape($prix),$this->db->escape($stock),$this->db->escape($image));
      $this->db->query($requete);
    }
    public function update($id,$nom,$categorie,$prix,$stock,$image)
    {
      $requete = "update produit set nom='%s',idcategorie='%s',prix='%s',stock='%s',image='%s' where idproduit='%s'";
      $requete = sprintf($requete,$this->db->escape($nom),$this->db->escape($categorie),$this->db->escape($prix),$this->db->escape($stock),$this->db->escape($image),$this->db->escape($id));
      $this->db->query($requete);
    }
    public function delete ($id)
    {
      $requete = "delete from table where idproduit='%s'";
      $requete = sprintf($requete,$this->db->escape($id));
      $this->db->query($requete);
    }
    public function misAjourPromotion($id,$price)
    {
      $requete = "update produit set ispromotion=true where idproduit='%s'";
      $requete = sprintf($requete,$this->db->escape($id));
      $this->db->query($requete);

      $maj = "insert into promotion(idproduit,prix) values('%s','%s')";
      $maj = sprintf($maj,$this->db->escape($id),$this->db->escape($price));
      $this->db->query($maj);
    }
    public function getProduitCategory($id)
    {
      $valiny = array();
      $query = $this->db->query('Select * from produit where idcategorie='.$id);
      $indice = 0;
      foreach ($query->result_array() as $row) {
        $valiny[$indice] = copyInfo($row);
        $indice++;
      }
      return valiny;
    }
    public function search($nom,$categorie) {
      $valiny = array();
      $query = $this->db->query('Select * from produit where nom like '%.$nom.%' and idcategorie='.$categorie);
      $indice = 0;
      foreach ($query->result_array() as $row) {
        $valiny[$indice] = copyInfo($row);
        $indice++;
      }
      return valiny;
    }

  }

 ?>
