<div class="container text-center">
  <div class="row row-cols-1 row-cols-md-3">

<?php 

$db_connect = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME) or die(mysql_error());

// Alle Sensoren ausgeben
$sql = "select * from pren_web limit 3";
$result = $db_connect->query($sql)->fetch_all(MYSQLI_ASSOC);

foreach ($result as $row){

  ?>
  <div class="col-sm-6 md-4 mb-3">
    <div class="card ">
      <div class="card-header">Versuch <?php echo $row['id']; ?></div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['id'];?></h5>
          <p class="card-text"><?php echo $row['time'];?> Sekunden</p>
          <p class="card-text"><?php echo $row['energy'];?> kW Energieverbrauch</p>
      </div>
      <div class="card-footer">
        <small class="text-body-secondary">Letztes Update <?php echo $row['datetime']; ?></small>
      </div>
    </div>
  </div>
<?php 
}
?>

  </div>
</div>