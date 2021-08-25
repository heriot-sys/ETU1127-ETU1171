<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo vendor_url("bootstrap/css/bootstrap.min.css")?>">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo fonts_url("font-awesome-4.7.0/css/font-awesome.min.css")?>" >
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo vendor_url("animate/animate.css")?>">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo vendor_url("select2/select2.min.css")?>">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo vendor_url("perfect-scrollbar/perfect-scrollbar.css")?>">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="<?php echo css_url("util.css")?>">
  	<link rel="stylesheet" type="text/css" href="<?php echo css_url("main.css")?>">
    <title></title>
    <style>
      input[type=text], select {
        width: 70%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type=submit] {
        width: 50%;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      .label-file {
          cursor: pointer;
          height: 50px;
          font-weight: bold;
      }
      .label-file:hover {
          color: #25a5c4;
      }

      // et on masque le input
      .input-file {
          display: none;
      }

      input[type=submit]:hover {
        background-color: #45a049;
      }

      div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
      }
      <?php
      $valiny = array();
      $query = $this->db->query('Select * from categorie');
      $indice = 0;
      foreach ($query->result_array() as $row) {
        $valiny[$indice]['id'] = $row['idcategorie'];
        $valiny[$indice]['nom'] = $row['nom'];
        $indice++;
      }
      $result = array();
      $req = $this->db->query('Select * from view_achat');
      $in = 0;
      foreach ($req->result_array() as $temp) {
        $result[$in]['nom'] = $temp['nom'];
        $result[$in]['quantite'] = $temp['quantite'];
        $result[$in]['prix'] = $temp['prixTotal'];
        $result[$in]['date'] = $temp['datedachat'];
        $in++;
      }
       ?>
</style>
  </head>
  <body>
    <h1>Liste des transaction</h1>
        <div class="wrap-table100">
          <div class="table100 ver1 m-b-110">
            <div class="table100-head">
              <table>
                <thead>
                  <tr class="row100 head">
                    <th class="cell100 column1">Numero de caisse</th>
                    <th class="cell100 column2">Quantite de produit</th>
                    <th class="cell100 column3">Prix total</th>
                    <th class="cell100 column4">Date d'achatt</th>
                  </tr>
                </thead>
              </table>
            </div>

            <div class="table100-body js-pscroll">
              <table>
                <tbody>
                  <?php for($i=0;$i<count($result);$i++){ ?>
                  <tr class="row100 body">
                    <td class="cell100 column1"><?php echo $result[$i]['nom'] ?></td>
                    <td class="cell100 column2"><?php echo $result[$i]['quantite'] ?></td>
                    <td class="cell100 column3"><?php echo $result[$i]['prix'] ?></td>
                    <td class="cell100 column4"><?php echo $result[$i]['date'] ?></td>
                  </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
    <br>
    <center><h1 style="color : blue; font-size : 50px;">Gestion de produit</h1></center>
    <div>
      <form action="<?php echo site_url('gestion/insert')?>" method="get">
        <p style="color : green; font-size : 40px;">Insertion de produit</p>
        <label for="fname">Nom du produit</label>
        <input type="text" id="nom" name="nom" placeholder="Nom du produit.."><br>

        <label for="country">Categorie</label>
        <select id="country" name="cate">
          <?php for($i=0;$i<count($valiny);$i++) {?>
            <option value="<?php echo $valiny[$i]['id']; ?>"><?php echo $valiny[$i]['nom']; ?></option>
            <?php } ?>
        </select>
        <br>

        <label for="file" class="label-file">Choisir une image</label>
        <input id="file" class="input-file" name="img" type="file"><br>

        <label for="lname">Prix du produit</label>
        <input type="text" id="lname" name="prix" placeholder="Prix du produit.."><br>

        <label for="lname">Nombre de produit en stock</label>
        <input type="text" id="lname" name="nombre" placeholder="Stock.."><br>

        <input type="submit" style="background-color: #4CAF50;" value="Submit">
      </form>
    </div><br>
    <div>
      <form action="<?php echo site_url('gestion/chercher')?>" method="get">
        <p style="color : orange; font-size : 40px;">Recherche de produit</p>
        <label for="fname">Entrer le nom du produit</label>
        <input type="text" id="nom" name="nom" placeholder="Nom du produit.."><br>
        <label for="country">Categorie</label>
        <select id="country" name="cate">
          <?php for($i=0;$i<count($valiny);$i++) {?>
            <option value="<?php echo $valiny[$i]['id']; ?>"><?php echo $valiny[$i]['nom']; ?></option>
            <?php } ?>
        </select>
        <br>
        <input type="submit" style="background-color: orange;" value="chercher">
      </form>
    </div>
    <?php if(isset($liste)) { ?>
      <div class="limiter">
    		<div class="container-table100">
    			<div class="wrap-table100">
    				<div class="table100 ver1 m-b-110">
    					<div class="table100-head">
    						<table>
    							<thead>
    								<tr class="row100 head">
    									<th class="cell100 column1">Class name</th>
    									<th class="cell100 column2">Type</th>
    									<th class="cell100 column3">Hours</th>
    									<th class="cell100 column4">Trainer</th>
    									<th class="cell100 column5">Spots</th>
    								</tr>
    							</thead>
    						</table>
    					</div>

    					<div class="table100-body js-pscroll">
    						<table>
    							<tbody>
    								<tr class="row100 body">
    									<td class="cell100 column1">Like a butterfly</td>
    									<td class="cell100 column2">Boxing</td>
    									<td class="cell100 column3">9:00 AM - 11:00 AM</td>
    									<td class="cell100 column4">Aaron Chapman</td>
    									<td class="cell100 column5">10</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Mind & Body</td>
    									<td class="cell100 column2">Yoga</td>
    									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
    									<td class="cell100 column4">Adam Stewart</td>
    									<td class="cell100 column5">15</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Crit Cardio</td>
    									<td class="cell100 column2">Gym</td>
    									<td class="cell100 column3">9:00 AM - 10:00 AM</td>
    									<td class="cell100 column4">Aaron Chapman</td>
    									<td class="cell100 column5">10</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Wheel Pose Full Posture</td>
    									<td class="cell100 column2">Yoga</td>
    									<td class="cell100 column3">7:00 AM - 8:30 AM</td>
    									<td class="cell100 column4">Donna Wilson</td>
    									<td class="cell100 column5">15</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Playful Dancer's Flow</td>
    									<td class="cell100 column2">Yoga</td>
    									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
    									<td class="cell100 column4">Donna Wilson</td>
    									<td class="cell100 column5">10</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Zumba Dance</td>
    									<td class="cell100 column2">Dance</td>
    									<td class="cell100 column3">5:00 PM - 7:00 PM</td>
    									<td class="cell100 column4">Donna Wilson</td>
    									<td class="cell100 column5">20</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Cardio Blast</td>
    									<td class="cell100 column2">Gym</td>
    									<td class="cell100 column3">5:00 PM - 7:00 PM</td>
    									<td class="cell100 column4">Randy Porter</td>
    									<td class="cell100 column5">10</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Pilates Reformer</td>
    									<td class="cell100 column2">Gym</td>
    									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
    									<td class="cell100 column4">Randy Porter</td>
    									<td class="cell100 column5">10</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Supple Spine and Shoulders</td>
    									<td class="cell100 column2">Yoga</td>
    									<td class="cell100 column3">6:30 AM - 8:00 AM</td>
    									<td class="cell100 column4">Randy Porter</td>
    									<td class="cell100 column5">15</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Yoga for Divas</td>
    									<td class="cell100 column2">Yoga</td>
    									<td class="cell100 column3">9:00 AM - 11:00 AM</td>
    									<td class="cell100 column4">Donna Wilson</td>
    									<td class="cell100 column5">20</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Virtual Cycle</td>
    									<td class="cell100 column2">Gym</td>
    									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
    									<td class="cell100 column4">Randy Porter</td>
    									<td class="cell100 column5">20</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Like a butterfly</td>
    									<td class="cell100 column2">Boxing</td>
    									<td class="cell100 column3">9:00 AM - 11:00 AM</td>
    									<td class="cell100 column4">Aaron Chapman</td>
    									<td class="cell100 column5">10</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Mind & Body</td>
    									<td class="cell100 column2">Yoga</td>
    									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
    									<td class="cell100 column4">Adam Stewart</td>
    									<td class="cell100 column5">15</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Crit Cardio</td>
    									<td class="cell100 column2">Gym</td>
    									<td class="cell100 column3">9:00 AM - 10:00 AM</td>
    									<td class="cell100 column4">Aaron Chapman</td>
    									<td class="cell100 column5">10</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Wheel Pose Full Posture</td>
    									<td class="cell100 column2">Yoga</td>
    									<td class="cell100 column3">7:00 AM - 8:30 AM</td>
    									<td class="cell100 column4">Donna Wilson</td>
    									<td class="cell100 column5">15</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Playful Dancer's Flow</td>
    									<td class="cell100 column2">Yoga</td>
    									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
    									<td class="cell100 column4">Donna Wilson</td>
    									<td class="cell100 column5">10</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Zumba Dance</td>
    									<td class="cell100 column2">Dance</td>
    									<td class="cell100 column3">5:00 PM - 7:00 PM</td>
    									<td class="cell100 column4">Donna Wilson</td>
    									<td class="cell100 column5">20</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Cardio Blast</td>
    									<td class="cell100 column2">Gym</td>
    									<td class="cell100 column3">5:00 PM - 7:00 PM</td>
    									<td class="cell100 column4">Randy Porter</td>
    									<td class="cell100 column5">10</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Pilates Reformer</td>
    									<td class="cell100 column2">Gym</td>
    									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
    									<td class="cell100 column4">Randy Porter</td>
    									<td class="cell100 column5">10</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Supple Spine and Shoulders</td>
    									<td class="cell100 column2">Yoga</td>
    									<td class="cell100 column3">6:30 AM - 8:00 AM</td>
    									<td class="cell100 column4">Randy Porter</td>
    									<td class="cell100 column5">15</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Yoga for Divas</td>
    									<td class="cell100 column2">Yoga</td>
    									<td class="cell100 column3">9:00 AM - 11:00 AM</td>
    									<td class="cell100 column4">Donna Wilson</td>
    									<td class="cell100 column5">20</td>
    								</tr>

    								<tr class="row100 body">
    									<td class="cell100 column1">Virtual Cycle</td>
    									<td class="cell100 column2">Gym</td>
    									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
    									<td class="cell100 column4">Randy Porter</td>
    									<td class="cell100 column5">20</td>
    								</tr>
    							</tbody>
    						</table>
    					</div>
    				</div>

    			</div>
    		</div>
    	</div>
      <?php } ?>
    <!--<script>
      $(document).ready(function(){
        var nom = $('search_text').val();
        $.ajax({
          type: "post",
          url: "<?php //echo site_url('Welcome/search'); ?>",
          data: {valeur : nom},
          success: function(response)
          {
            $('#response').html(response);
          }
        })
      });
    </script>-->
    <!--===============================================================================================-->
    	<script src="<?php echo vendor_url("jquery/jquery-3.2.1.min.js")?>"></script>
    <!--===============================================================================================-->
    	<script src="<?php echo vendor_url("bootstrap/js/popper.js")?>"></script>
    	<script src="<?php echo vendor_url("bootstrap/js/bootstrap.min.js")?>"></script>
    <!--===============================================================================================-->
    	<script src="<?php echo vendor_url("select2/select2.min.js")?>"></script>
    <!--===============================================================================================-->
    	<script src="<?php echo vendor_url("perfect-scrollbar/perfect-scrollbar.min.js")?>"></script>
    	<script>
    		$('.js-pscroll').each(function(){
    			var ps = new PerfectScrollbar(this);

    			$(window).on('resize', function(){
    				ps.update();
    			})
    		});


    	</script>
    <!--===============================================================================================-->
    	<script src="<?php echo js_url("main.js")?>"></script>
  </body>
</html>
