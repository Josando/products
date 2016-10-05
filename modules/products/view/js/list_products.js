////////////////////////////////////////////////////////////////
function load_products_ajax() {
    $.ajax({
        type: 'GET',
        url: "modules/products/controller/controller_products.class.php?load=true",
        //dataType: 'json',
        async: false
    }).success(function (data) {
        var json = JSON.parse(data);
        console.log("Hola");

         console.log(json.products.name);
        //alert(json.user.usuario);

        list_products(json);

    }).fail(function (xhr) {
        alert(xhr.responseText);
    });
}

////////////////////////////////////////////////////////////////

function load_users_get_v1() {
    $.get("modules/products/controller/controller_products.class.php?load=true", function (data, status) {
        var json = JSON.parse(data);
        //$( "#content" ).html( json.msje );
        //alert("Data: " + json.user.usuario + "\nStatus: " + status);

        list_products(json);
    });
}

////////////////////////////////////////////////////////////////
function load_users_get_v2() {
    var jqxhr = $.get("modules/products/controller/controller_products.class.php?load=true", function (data) {
        var json = JSON.parse(data);
        console.log(json);
        list_products(json);
        //alert( "success" );
    }).done(function () {
        //alert( "second success" );
    }).fail(function () {
        //alert( "error" );
    }).always(function () {
        //alert( "finished" );
    });

    jqxhr.always(function () {
        //alert( "second finished" );
    });
}

$(document).ready(function () {
    //load_products_ajax();
    //load_users_get_v1();
    load_users_get_v2();
});

function list_products(data) {

    console.log(data);
    //alert(data.user.avatar);
    var content = document.getElementById("content");
    var div_products = document.createElement("div");
    var parrafo = document.createElement("p");

    var msje = document.createElement("div");
    msje.innerHTML = "msje = ";
    msje.innerHTML += data.msje;
    console.log(data.msje);

    var name = document.createElement("div");
   name.innerHTML = "name = ";
   name.innerHTML += data.products.name;
/*
    var last_name = document.createElement("div");
    last_name.innerHTML = "last_name = ";
    last_name.innerHTML += data.user.last_name;

    var date_birthday = document.createElement("div");
    date_birthday.innerHTML = "date_birthday = ";
    date_birthday.innerHTML += data.user.birth_date;

    var title_date = document.createElement("div");
    title_date.innerHTML = "title_date = ";
    title_date.innerHTML += data.user.title_date;

    var address = document.createElement("div");
    address.innerHTML = "address = ";
    address.innerHTML += data.user.address;

    var user = document.createElement("div");
    user.innerHTML = "user = ";
    user.innerHTML += data.user.user;

    var pass = document.createElement("div");
    pass.innerHTML = "pass = ";
    pass.innerHTML += data.user.pass;

    var email = document.createElement("div");
    email.innerHTML = "email = ";
    email.innerHTML += data.user.email;

    var en_lvl = document.createElement("div");
    en_lvl.innerHTML = "en_lvl = ";
    en_lvl.innerHTML += data.user.en_lvl;

    var interests = document.createElement("div");
    material.innerHTML = "interests = ";
    for(var i =0;i < data.products.material.length;i++){
    material.innerHTML += " - "+data.products.material[i];
    }
*/
    //arreglar ruta IMATGE!!!!!

    var cad = data.products.avatar;
    console.log(cad);
    //var cad = cad.toLowerCase();
    var img = document.createElement("div");
    var html = '<img src="' + cad + '" height="75" width="75"> ';
    img.innerHTML = html;
    alert(html);

    div_products.appendChild(parrafo);
    parrafo.appendChild(msje);
    parrafo.appendChild(name);
    //parrafo.appendChild(last_name);
  //  parrafo.appendChild(date_birthday);
  //  parrafo.appendChild(title_date);
  //  parrafo.appendChild(address);
  //  parrafo.appendChild(en_lvl);
//parrafo.appendChild(user);
  //  parrafo.appendChild(pass);
//    parrafo.appendChild(email);
//    parrafo.appendChild(interests);
   content.appendChild(div_products);
   content.appendChild(img);
}
