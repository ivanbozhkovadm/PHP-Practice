function validate() {
    var name = document.getElementById("name");
    var pass = document.getElementById("password");
    // var pass = document.querySelectorAll("input[type=password]")[0];


    var nameRegex = name.value.match(/[\W_]/g); 
    var passRegex = pass.value.match(/[\W_]/g);
    var passRegexUpperCase = pass.value.match(/[A-Z]+/g);
	
	console.log(nameRegex);
	console.log(passRegex);
	console.log(passRegexUpperCase);

    var isValid = true;

    if(!(!isAMatch(nameRegex) && name.value.length>=3 && name.value.length<=10) ||
        !(!isAMatch(passRegex) && isAMatch(passRegexUpperCase) && pass.value.length>=5) ){
        isValid = false;
    }

   return [isValid,[name,pass]];

}

function isAMatch(regexResult) {
    return regexResult != null;
}

function getJson(fields) {

    var json = {};
        for(var item =0; item<fields.length;item++){
            json[fields[item].id] = fields[item].value;
        }

        json = JSON.stringify(json);

    return json;
}

(function () {
    document.forms[0].addEventListener("submit",function (event) {
        event.preventDefault();

        if(validate()[0]){

            json = getJson(validate()[1]);
            document.querySelectorAll("[name=data]")[0].value = json;

            this.action = "getData.php";
            this.submit();

        }else {
            var h1 = document.createElement("h1");
            h1.innerHTML = "Wrong Username or password";
            if(document.getElementById("wrong").innerHTML == ""){
                document.getElementById("wrong").appendChild(h1);
            }
        }
    });
})();