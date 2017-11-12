
czyznak="1";
kropka="0";
function Zero(){
	document.getElementById("ekranWyswietlajacy").value = document.getElementById("ekranWyswietlajacy").value + "0";
	czyznak="0";
};
function Jeden(){
	document.getElementById("ekranWyswietlajacy").value = document.getElementById("ekranWyswietlajacy").value + "1";
	czyznak="0";
};
function Dwa(){
	document.getElementById("ekranWyswietlajacy").value = document.getElementById("ekranWyswietlajacy").value + "2";
	czyznak="0";
};
function Trzy(){
	document.getElementById("ekranWyswietlajacy").value = document.getElementById("ekranWyswietlajacy").value + "3";
	czyznak="0";
};
function Cztery(){
	document.getElementById("ekranWyswietlajacy").value = document.getElementById("ekranWyswietlajacy").value + "4";
	czyznak="0";
};
function Piec(){
	document.getElementById("ekranWyswietlajacy").value = document.getElementById("ekranWyswietlajacy").value + "5";
	czyznak="0";
};
function Szesc(){
	document.getElementById("ekranWyswietlajacy").value = document.getElementById("ekranWyswietlajacy").value + "6";
	czyznak="0";
};
function Siedem(){
	document.getElementById("ekranWyswietlajacy").value = document.getElementById("ekranWyswietlajacy").value + "7";
	czyznak="0";
};
function Osiem(){
	document.getElementById("ekranWyswietlajacy").value = document.getElementById("ekranWyswietlajacy").value + "8";
	czyznak="0";
};
function Dziewiec(){
	document.getElementById("ekranWyswietlajacy").value = document.getElementById("ekranWyswietlajacy").value + "9";
	czyznak="0";
};
function Pomnoz(){
	if(czyznak=="0")
	{
	document.getElementById("ekranWyswietlajacy").value = document.getElementById("ekranWyswietlajacy").value + "*";
	czyznak="1";
	kropka="0";
	}
};
function Podziel(){
	if(czyznak=="0")
	{
	document.getElementById("ekranWyswietlajacy").value = document.getElementById("ekranWyswietlajacy").value + "/";
	czyznak="1";
	kropka="0";
	}
};
function	Dodaj(){
	if(czyznak=="0")
	{
	document.getElementById("ekranWyswietlajacy").value = document.getElementById("ekranWyswietlajacy").value + "+";
	czyznak="1";
	kropka="0";
	}
};
function Odejmij(){
	if(czyznak=="0")
	{
	document.getElementById("ekranWyswietlajacy").value = document.getElementById("ekranWyswietlajacy").value + "-";
	czyznak="1";
	kropka="0";
	}
};
function Przecinek(){
	if(kropka=="0")
	{
	document.getElementById("ekranWyswietlajacy").value = document.getElementById("ekranWyswietlajacy").value + ".";
	kropka=1;
	}
};

function RownaSie(){
	document.getElementById("ekranWyswietlajacy").value = eval(document.getElementById("ekranWyswietlajacy").value);
};
function Wyczysc(){
	document.getElementById("ekranWyswietlajacy").value = "";
	kropka="0";
	czyznak="1";
};


function Wysuwanie()
{
	$("#kalkulatorzysko").animate({'left': $("#kalkulatorzysko").css("left")=='-600px'?'0px':'-600px'},'slow');
}

function ZmianaKoloru(objekt,color)
{
	objekt.css("background-color",color);
}

$(document).ready(function(){

  
  $(".guzik").mouseover(function(){
	  ZmianaKoloru($(this),'#008000');
	});
	$(".guzik").mouseout(function(){
	  ZmianaKoloru($(this),'#FF00FF');
	});
	$(".guzik").mousedown(function(){
	  ZmianaKoloru($(this),'#808080');
	});
	$(".guzik").mouseup(function(){
	  ZmianaKoloru($(this),'#0000FF');
	});
});