<div class="container text-center" id="video">
  <h2 class="text-start">Bilder und Videos</h2>
  <br>
  <div class="row row-cols-1 row-cols-md-3">

      <div class="col-sm-6 md-4 mb-3">
          <div class="card ">
              <div class="card-body">
                  <h5 class="card-title">Videos</h5>
                  <a target="_blank" href="https://www.youtube.com/playlist?list=PLqY8vSuL5Inuxv5Muq0VT3_vF9mVPTKL_">
                      <button type="button" class="btn">Zu den Videos</button>
                  </a>
              </div>
          </div>
      </div>
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
                              <h5 class="card-title"><?php
                                  $title = explode(".",$file);
                                  echo $title[0];
                                  ?></h5>
                                  <?php
                                  $url = "/includes/testversuche/".$file;
                                  ?>
                                  <img src=<?php echo $url;?> alt="Testversuch" class="card-img-top">
                          </div>
                      </div>
                  </div>
                  <?php
              }
              ?>
      <?php
              }
              closedir($dh);
      }
      ?>


  </div>
</div>