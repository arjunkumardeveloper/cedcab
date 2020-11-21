
function cabType() {
    var cab = document.getElementById('cab').value;
    if (cab == "cedmicro") {
        document.getElementById('luggage').style.display = 'none';
    } else {
        document.getElementById('luggage').style.display = 'flex';
    }
}
function checkNum() {
    if ((event.keyCode > 47) && (event.keyCode < 58)) {
        return true;
    } else {
        alert("Please enter numeric value only !");
        return false;
    }
}
$(document).ready(function() {
    $('#calculate').click(function() {
        // alert('hi');
        var pickup = document.getElementById('pickup').value;
        var drop = document.getElementById('drop').value;
        var cab = document.getElementById('cab').value;
        var lugg = document.getElementById('lugg').value;
        // alert(pickup, drop, cab, lugg);
        if (pickup == "") {
            alert("Pickup field is mandatory");
            return false;
        } else if (drop == "") {
            alert("Destination field is mandatory");
            return false;
        } else if (cab == "") {
            alert("CAB type is mandatory");
            return false;
        } else if (pickup == drop) {
            alert('Choose different location');
            return false;
        } else {
           // console.log(pickup, drop, cab, lugg);
           $.ajax({
                url : 'calculate.php',
                type : 'POST',
                data : {pickup : pickup, drop : drop, cab : cab, lugg : lugg},
                dataType : 'json',
                success : function(result) {
                    // alert(result);
                    // document.getElementById('price').innerHTML = "Price: "+result['price']+"/-";
                    // document.getElementById('distance').innerHTML = "Distance: "+result['distance']+" KM";
                    if (result) {
                        document.getElementById('calculate').innerHTML = "Total Fare: " + result['price'] + "/-";
                    }
                    // console.log(result['price']);
                },
                error: function(error) {
                    alert('error');
                    // console.log()
                }
           });
        }
    });
    $('input, select').focus(function() {
        document.getElementById('calculate').innerHTML = "Calculate Fare";
    });
});