<div class="container text-center" id="video">
  <h2 class="text-start">Bilder und Videos</h2>
  <br>
  <div class="row row-cols-1 row-cols-md-3">

      <?php
      $dir = "./includes/testversuche/";

      // Open a directory, and read its contents
      if (is_dir($dir)){
          if ($dh = opendir($dir)){
              while (($file = readdir($dh)) !== false){

                  ?>
                  <div class="col-sm-6 md-4 mb-3">
                      <div class="card ">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $file;?></h5>
                              <p class="card-text">
                                  <?php
                                  if(str_contains($file, ".mp4")) {
                                      $url = "./includes/testversuche/" . $file
                                      print($url)
                                        ?>
                                      <video controls>
                                          <source src=<?php echo $url;?> type="video/mp4">
                                          Your browser does not support the video tag.
                                      </video>
                                      <?php
                                  } else {
                                      ?>
                                      <img src=<?php echo $url;?> alt="Testversuch">
                                          <?php
                                  }
                                  ?>
                              </p>
                          </div>
                      </div>
                  </div>
      <?php
                  echo "filename:" . $file . "<br>";
              }
              closedir($dh);
          }
      }
      ?>


  </div>
</div>