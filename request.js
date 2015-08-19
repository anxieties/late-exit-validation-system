/**
 * Created by Malyn on 8/4/2015.
 */

function ajaxFunction(){
    var ajaxRequest;  // The variable that makes Ajax possible!

    try{
        // Opera 8.0+, Firefox, Safari
        ajaxRequest = new XMLHttpRequest();
    }catch (e){
        // Internet Explorer Browsers
        try{
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
        }catch (e) {
            try{
                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            }catch (e){
                // Something went wrong
                alert("Your browser broke!");
                return false;
            }
        }
    }

    // Now get the value from user and pass it to
    // server script.
    var id_number = document.getElementById('ID_number').value;
    var url= "get-student.php?ID_number=" + id_number;
    var res = encodeURI(url);
    ajaxRequest.open("GET", res, true);
    ajaxRequest.send(null);

    // Create a function that will receive data
    // sent from the server and will update
    // div section in the same page.
    ajaxRequest.onreadystatechange = function() {
        if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
            var ajaxDisplay = document.getElementById('result-box');
            ajaxDisplay.innerHTML = ajaxRequest.responseText;
        }
    }
}

