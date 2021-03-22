<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">P-IV</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <?php
        $fileList = glob('pages/*');
        foreach($fileList as $index=>$file){
            $file = str_replace("pages/", "", $file);
            echo "
                <li class='nav-item'>
                    <a class='nav-link' href='$file'>Ejercicio ".($index+1)."</a>
                </li>
            ";
        }
    ?>
    </ul>
  </div>
</nav>