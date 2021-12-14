<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
  <style>
    h1 {
      
      font-weight: lighter;
      
      text-align: center;
      padding: 30px 0;
      font-size: 40px;

    }
  </style>

</head>

<body>
  <form>
    <h1>Personnaliser un produit pour un client</h1>
    <hr>
    <br>
    <div class="form-group row justify-content-center">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Liste des clients</label>
      <div class="col-sm-4">
        <select name="select-client" class="form-select" onchange="add_product_in_select_from_clientID('<?= $getProductParameterPath ?>',this.value)" id="select-client" name="client">
          <option value="" ?>-- Séléctionner un client --</option>
          <?php
          foreach ($clients as $client) {
          ?>
            <option class="" value=<?php echo $client->ID ?>><?php echo "$client->user_nicename ($client->user_email) " ?></option>
          <?php
          }
          ?>
        </select>
      </div>
    </div>
    <div class="form-group row justify-content-center">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Liste des articles</label>
      <div class="col-sm-4">
        <select class="form-select " name="select-article" id="select-article" onchange="add_parameters_from_products('<?= $getProductParameterPath ?>', document.getElementById('select-client').value, this.value)">
          <option value="" hidden>-- Liste des articles --</option>
        </select>
      </div>
    </div>
    <div class="form-group row justify-content-center">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Nom à afficher</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="commercial-name" value="">
      </div>
    </div>
    <div class="form-group row justify-content-center">
      <label for="text" class="col-sm-2 col-form-label">Prix maximum</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="max-price" value="" required>
      </div>
    </div>
    <div class="form-group row justify-content-center">
      <label for="text" class="col-sm-2 col-form-label">Prix minimum</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="min-price" value="" required>
      </div>
    </div>
    <div class="form-group row justify-content-center">
      <label for="text" class="col-sm-2 col-form-label">Quantité pour atteindre le prix maximum</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="min-price-qty" id="max-price-qty" value="" required>
      </div>
    </div>
    <div class="form-group row justify-content-center">
      <label for="text" class="col-sm-2 col-form-label">Quantité pour atteindre le prix minimum</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="min-price-qty" id="min-price-qty" value="" required>
      </div>
    </div>
    <div class="mx-auto" style="width:200px;">
      <div class="col-sm-10">
        <button onclick="postCustomProductParameter('form-modify-products')" type="button" class="btn btn-primary">Ajouter</button>
      </div>
    </div>
  </form>

</body>

</html>