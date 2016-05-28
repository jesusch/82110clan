function writeDate() {
    var time=new Date();
    var lmonth=time.getMonth() + 1;
    var date=time.getDate();
    var year=time.getFullYear();
    
    var text = date + "." + lmonth + "." + year;
    document.getElementById("date").innerHTML = text
}

function clock() {
    var digital = new Date();
    var hours = digital.getHours();
    var minutes = digital.getMinutes();
    var seconds = digital.getSeconds();
    if (minutes <= 9) minutes = "0" + minutes;
    if (seconds <= 9) seconds = "0" + seconds;
    dispTime = hours + ":" + minutes + ":" + seconds;
    document.getElementById("pendule").innerHTML = dispTime
    setTimeout("clock()", 1000);
}

window.onload = function () {
	writeDate();
	clock();
}
