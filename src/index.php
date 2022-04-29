<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>array advance</title>
</head>

<body>
  <?php
  $products = array(
    "Electronics" => array(
      "Television" => array(
        array(
          "id" => "PR001",
          "name" => "MAX-001",
          "brand" => "Samsung"
        ),
        array(
          "id" => "PR002",
          "name" => "BIG-301",
          "brand" => "Bravia"
        ),
        array(
          "id" => "PR003",
          "name" => "APL-02",
          "brand" => "Apple"
        )
      ),
      "Mobile" => array(
        array(
          "id" => "PR004",
          "name" => "GT-1980",
          "brand" => "Samsung"
        ),
        array(
          "id" => "PR005",
          "name" => "IG-5467",
          "brand" => "Motorola"
        ),
        array(
          "id" => "PR006",
          "name" => "IP-8930",
          "brand" => "Apple"
        )
      )
    ),
    "Jewelry" => array(
      "Earrings" => array(
        array(
          "id" => "PR007",
          "name" => "ER-001",
          "brand" => "Chopard"
        ),
        array(
          "id" => "PR008",
          "name" => "ER-002",
          "brand" => "Mikimoto"
        ),
        array(
          "id" => "PR009",
          "name" => "ER-003",
          "brand" => "Bvlgari"
        )
      ),
      "Necklaces" => array(
        array(
          "id" => "PR010",
          "name" => "NK-001",
          "brand" => "Piaget"
        ),
        array(
          "id" => "PR011",
          "name" => "NK-002",
          "brand" => "Graff"
        ),
        array(
          "id" => "PR012",
          "name" => "NK-003",
          "brand" => "Tiffany"
        )
      )
    )
  )
  ?>
  <?php
  echo " <table border='5px' width='500px'><tr><th>Categories</th><th>Sub-Categories</th><th>ID</th><th>Name</th><th>Brand</th>";
  foreach ($products as $cat => $value) {
    foreach ($value as $sub => $value1) {
      foreach ($value1 as $key2 => $value2) {
        echo "<tr>";
        echo "<td>$cat</td>";
        echo "<td>$sub</td>";
        foreach ($value2 as $key3 => $details) {
          echo "<td>$details</td>";
        }
        echo "</tr>";
      }
    }
  }
  echo "</table>";
  ?>
  <br><br><br>
  <br>
  <?php
  $mobile = array(
    "mobile" => array(
      array(
        "id" => "PR004",
        "name" => "Gt-1980",
        "brand" => "Samsung"
      ),
      array(
        "id" => "PR005",
        "name" => "IG-5467",
        "brand" => "Motorola"
      ),
      array(
        "id" => "PR006",
        "name" => "IP-3930",
        "brand" => "APple"
      ),
    )
  );
  echo "<table border='2px' width='50%'><tr><th>Sub-Category</th><th>ID</th><th>Name</th><th>Brand</th>";
  foreach ($mobile as $key => $value) {
    foreach ($value as $key1 => $value1) {
      echo "<tr>";
      echo "<td>$key</td>";
      // echo "<td>$key1</td>";
      foreach ($value1 as $key => $value2) {
        echo "<td>$value2</td>";
      }
      echo "<tr>";
    }
  }
  echo "</table>";
  ?>
  <?php
  foreach ($products as $key => $value) {
    foreach ($value as $key1 => $value1) {
      foreach ($value1 as $key2 => $value2) {
        if ($value2["brand"] == "Samsung") {
          echo "<p> Product ID: $value2[id] <br> Product Name: $value2[name] <br>Product Brand: $value2[brand] <br> Subcategory:$key1 <br> Category: $key</p>";
        }
      }
    }
  }
  ?>
   <h5>Product ID PR003 updated with ID PR002</h5>
  <?php
  foreach ($products as $key => $value) {
    foreach ($value as $key1 => $value1) {
      foreach ($value1 as $key2 => $value2) {
        if ($value2 == "PR003") {
          unset($value2);
        } else if ($value2['id'] == "PR002") {
          $value2['name'] = "BIG-555";
          echo "<div><p> Product ID: $value2[id]<br>
            Product NAme: $value2[name] <br> Product Brand: $value2[brand] <br> Subcategory:$key1 <br> category:$key</p></div>";
        }
      }
    }
  }?>
</body>

</html>
