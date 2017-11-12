function liczby(value)
{
    document.getElementById("screen").value += value;
}
function Wyczysc()
{
    document.getElementById("screen").value = "";
}
function Licz()
{
    var str = document.getElementById("screen").value;
    document.getElementById("screen").value = eval(str);
}
function Wysuwanie()
{
	$("#Calc").animate({'top': $("#Calc").css("top")=='-600px'?'0px':'-600px'},'slow');
}
function ZmianaKoloru(objekt,color)
{
	objekt.css("background-color",color);
}
$(document).ready(function(){

  $("#Wysun").click(function(){
    Wysuwanie();
	});
  $(".CalcButton").mouseover(function(){
	  ZmianaKoloru($(this),'#FF6347');
	});
	$(".CalcButton").mouseout(function(){
	  ZmianaKoloru($(this),'#FFA500');
	});
	$(".CalcButton").mousedown(function(){
	  ZmianaKoloru($(this),'#800000');
	});
	$(".CalcButton").mouseup(function(){
	  ZmianaKoloru($(this),'#CD5C5C');
	});
});