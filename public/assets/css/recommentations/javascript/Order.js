var data = new Array();
  function savedata() {
  var name =  document.getElementById('name_Cus').value;
  // alert("name");

  var phone = document.getElementById("phone_Cus").value;

  var adress = document.getElementById("Adress_Cus").value;

  var idfood = document.getElementById("Id_Food").value;

  var choosefood = document.getElementById("choose_food").value;

  var quanlityfood = document.getElementById("quanlity_food").value;

  var date = document.getElementById("myDate").value;

  data.push({namee:name, phonee:phone, Adresss:adress, Id_Pro:idfood, c_f:choosefood, quanlity:quanlityfood, dateorder:date});

  document.write(data[0].namee);
  document.getElementById("display").innerHTML = name;
}
