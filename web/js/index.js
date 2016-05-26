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
    pendule.innerHTML = dispTime;
    setTimeout("clock()", 1000);
}

function MM_swapImgRestore() {
	  var i,x,a = document.MM_sr; 
	  for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) 
		  x.src=x.oSrc;
}

function MM_preloadImages() {
	var d=document; 
	if(d.images) {
		if(!d.MM_p) 
			d.MM_p=new Array();
	  var i,j=d.MM_p.length,a=MM_preloadImages.arguments; 
	  
	  for(i=0; i<a.length; i++)
		  if (a[i].indexOf("#")!=0) { 
			  d.MM_p[j] = new Image; 
			  d.MM_p[j++].src=a[i];
		  }
	}
}

function MM_findObj(n, d) { // v4.0
	var p,i,x;
	if(!d) 
		d=document; 
	if((p=n.indexOf("?"))>0&&parent.frames.length) {
		d=parent.frames[n.substring(p+1)].document; 
		n=n.substring(0,p);
	}
	if(!(x=d[n])&&d.all) 
		x=d.all[n]; 
	
	for (i=0;!x&&i<d.forms.length;i++) 
		x=d.forms[i][n];
	
	for(i=0;!x&&d.layers&&i<d.layers.length;i++) 
		x=MM_findObj(n,d.layers[i].document);
	
	if(!x && document.getElementById) 
		x=document.getElementById(n); 
	
	return x;
}

function swap(x) {
	x.src = "fooo.png";
	document.getElementById("news").src="img/navnews00.gif";
}

function MM_swapImage() { // v3.0
	
	var i,j=0,x,a=MM_swapImage.arguments; 
	
	document.MM_sr=new Ar</d; 
	
	for(i=0;i<(a.length-2);i+=3)
		if ((x=MM_findObj(a[i]))!=null) {
			
			document.MM_sr[j++]=x; 
			
			if(!x.oSrc) 
				x.oSrc=x.src;
			
			x.src=a[i+2];
		}
}

window.onload = function () {
	writeDate();
	clock();
	MM_preloadImages('img/navmembers01.gif','img/navaboutus01.gif','img/navfightus01.gif','img/navwars01.gif','img/navevents01.gif','img/navchat01.gif','img/navfiles01.gif','img/navserver01.gif','img/navlinks01.gif','img/navforum01.gif','img/navintern01.gif','img/navnews00.gif','img/navnews01.gif','img/navmembers00.gif','img/navcontact00.gif','img/navmacht00.gif') 
}
