// JavaScript Document
var index=2;
function hinh(i)
{
	index=i;
	document.getElementById("hang_dienthoai").src="images/brand"+i+".png";
}

function truoc()
{
	index--;
	if(index<2)
		index=5;
	document.getElementById("hang_dienthoai").src="images/brand"+index+".png";
}
function tieptheo()
{
	index++;
	if(index>5)
		index=2;
	document.getElementById("hang_dienthoai").src="images/brand"+index+".png";
}