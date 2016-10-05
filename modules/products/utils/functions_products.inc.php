<?php

function validate_products($productsJSON) {//Le entraran los valores decodificados  del json
    $error = array();
    $valido = true;
    $filtro = array(//De momento solo pruebo el nombre
        'name' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
          'options' => array('regexp' => '/^[A-Z]{2,30}$/')
        ),
        'code' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^[0-9a-zA-Z]{6,32}$/')
        ),
        'origin' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^[0-9a-zA-Z]{2,20}$/')
        ),
        'provider' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^[0-9a-zA-Z]{2,20}$/')
        ),
        'price' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^[0-9]{2,10}$/')
        ),
        'description' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$/')
        ),
        'date_reception' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^(0[1-9]|[12][0-9]|3[01])[- \/.](0[1-9]|1[012])[- \/.](19|20)\d\d$/')
        ),
         'departure_date' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '/^(0[1-9]|[12][0-9]|3[01])[- \/.](0[1-9]|1[012])[- \/.](19|20)\d\d$/')
        ),
        'email' => array(
            'filter' => FILTER_CALLBACK,
            'options' => 'valida_email'
        ),
    );


    $resultado = filter_var_array($productsJSON, $filtro);//$value ya no vienen por $_POST



    //no filter
    $resultado['type'] = $_POST['type'];
    $resultado['shape'] = $_POST['shape'];
    $resultado['brand'] = $_POST['brand'];
    $resultado['stock'] = $_POST['stock'];
    $resultado['material'] = $_POST['material'];


    if ($resultado['date_reception'] && $resultado['departure_date']) {
        //compare date of birth with title_date
        $dates = valida_dates($_POST['date_reception'], $_POST['departure_date']);


        if (!$dates) {
            $error['date_reception'] = 'Date reception must be before or equal that the departure date.';
            $error['departure_date'] = 'Date reception must be after or equal that the date reception.';
            $valido = false;
        }
    }


    if ($_POST['type'] === 'Select type') {
        $error['type'] = "You haven't select type.";
        $valido = false;
    }


    if ($_POST['shape'] === 'Select Shape') {
        $error['shape'] = "You haven't select shape.";
        $valido = false;
    }


    if ($_POST['brand'] === 'Select brand') {
        $error['brand'] = "You haven't select brand.";
        $valido = false;
    }


    if (count($_POST['material']) <= 1) {
        $error['material'] = "Select 2 or more.";
        $valido =  false;
    }




   if ($resultado != null && $resultado) {


        if (!$resultado['name']) {
           $error['name'] = 'Name must be 2 to 30 letters';
           $valido = false;
        }

        if (!$resultado['code']) {
            $error['code'] = 'Code must be 6 to 30 letters';
            $valido = false;
        }

        if (!$resultado['origin']) {
            $error['origin'] = 'Origin must be 2 to 30 letters';
            $valido = false;
        }

        if (!$resultado['email']) {
            $error['email'] = 'Error format email (example@example.com)';
            $valido = false;
        }


        if (!$resultado['provider']) {
            $error['provider'] = 'Code must be 6 to 30 letters';
            $valido = false;
        }


        if (!$resultado['price']) {
            $error['price'] = 'Price must be 2 to 10 numbers';
            $valido = false;
        }

         if (!$resultado['description']) {
            $error['description'] = 'Description must be 2 to 30 characters';
            $valido = false;
        }


        if (!$resultado['date_reception']) {
            if ($_POST['date_reception'] == "") {
                $error['date_reception'] = "This camp can't empty";
                $valido = false;
            } else {
                $error['date_reception'] = 'Error format date (mm/dd/yyyy)';
                $valido = false;
            }
        }

        if (!$resultado['departure_date']) {
            if ($_POST['departure_date'] == "") {
                $error['departure_date'] = "This camp can't empty";
                $valido = false;
            } else {
                $error['departure_date'] = 'Error format date (mm/dd/yyyy)';
                $valido = false;
            }
        }

        
    } else {

        $valido = false;
};

    //return $return = array('resultado' => $valido, 'error' => $error, 'datos' => $resultado);
   //return $return = array('resultado' => true, 'datos' => "jorge");
   return $return = array('resultado' => $valido, 'error' => $error, 'datos' => $resultado);
}

function valida_dates($in_date, $out_date) {

    $in_date = date("m/d/Y", strtotime($in_date));
    $out_date = date("m/d/Y", strtotime($out_date));

    list($mes_one, $dia_one, $anio_one) = split('/', $in_date);
    list($mes_two, $dia_two, $anio_two) = split('/', $out_date);

    $dateOne = new DateTime($anio_one . "-" . $mes_one . "-" . $dia_one);
    $dateTwo = new DateTime($anio_two . "-" . $mes_two . "-" . $dia_two);


    if ($dateOne <= $dateTwo && $dateTwo >= $dateOne ) {


        return true;
    }
    return false;


}


//validate email
function valida_email($email) {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (filter_var($email, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/^.{5,50}$/')))) {
            return $email;
        }
    }
    return false;
}
