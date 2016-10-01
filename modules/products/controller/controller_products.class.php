<?php


//include  with absolute route
include ($_SERVER['DOCUMENT_ROOT'] . "/products_v3/modules/products/utils/functions_products.inc.php");
include ($_SERVER['DOCUMENT_ROOT'] . "/products_v3/utils/upload.php");


session_start();

	if ((isset($_POST['discharge_products_json']))) {
		
	
	  	discharge_products();
	}

	function discharge_products() {
	  	$jsondata = array();
	  	$productsJSON = json_decode($_POST["discharge_products_json"], true);

	    $jsondata["success"] = true;
		$jsondata["name"] = $productsJSON['name'];
		$jsondata["redirect2"] = "asignando correctamente!!";
			
	    echo json_encode($jsondata);
	    exit;

	}



//////////////////////////
if (isset($_GET["delete"]) && $_GET["delete"] == true) {
	$result = remove_files();
	echo json_encode($result);
	exit;
}


////////////////////////////
if ((isset($_GET["upload"])) && ($_GET["upload"] == true)) {
		$result_avatar = upload_files();
		echo json_encode($result_avatar);
		exit();
}























/*
//include 'modules/products/utils/functions_products.inc.php';

//console.log("controler");
	
	if ((isset($_POST['discharge_products_json']))) {
		
	
	  	discharge_products();
	}

	function discharge_products() {
	  	$jsondata = array();
	  	$productsJSON = json_decode($_POST["discharge_products_json"], true);

	    $jsondata["success"] = true;
		$jsondata["name"] = $productsJSON['name'];
		$jsondata["redirect2"] = "asignando correctamente!!";
	    echo json_encode($jsondata);
	    exit;

	}


//////////////////////////////////////////////////////////

if ($_POST) {



    $result = validate_products();
    
   
    if ($result['resultado']) {
        $arrArgument = array(
            'name' => ucfirst($result['datos']['name']),
            'code' => ($result['datos']['code']),
            'origin' => $result['datos']['origin'],
            'provider' => $result['datos']['provider'],
            'email' => $result['datos']['email'],
            'price' => $result['datos']['price'],
            'description' => ucfirst($result['datos']['description']),
            'material' => $result['datos']['material'],
            'type' => ($result['datos']['type']), //strtoupper > para convertir string a mayusculas
            'shape' => ($result['datos']['shape']),
            'brand' => ($result['datos']['brand']),
            'stock' => $result['datos']['stock'],
            'date_reception' => $result['datos']['date_reception'],
            'departure_date' => $result['datos']['departure_date'],
            
        );

        $mensaje = "User has been successfully registered";

        //redirigir a otra p�gina con los datos de $arrArgument y $mensaje
        $_SESSION['products'] = $arrArgument;
        $_SESSION['msje'] = $mensaje;

        $callback = "index.php?module=products&view=results_products";
        redirect($callback);
    } else {
        
        $error = $result['error'];
    }
    
}
include 'modules/products/view/create_products.php';

*/