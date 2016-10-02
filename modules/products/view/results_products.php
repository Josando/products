
   <!-- <script type="text/javascript" src="modules/products/view/js/list_products.js" ></script>-->
		<div id="main">

            <h2>ADD PRODUCT</h2>
            <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
       
       
      
       
            <?php
            
            $products = $_SESSION['products'];
            $msage = $_SESSION['msje'];
            

            foreach ($products as $indice => $valor) {
                if ($indice == 'material') {
                    echo "<br><b>Material:</b><br>";
                    $materials = $products['material'];
                    foreach ($materials as $indice => $valor) {
                        echo "<b>---> $indice</b>: $valor<br>";
                    }
                } else {
                    echo "<br><b>$indice</b>: $valor";
                }
            }
            echo "<br>" . "<b style='color:green'>" . $msage;
            ?>
        </div>
    
