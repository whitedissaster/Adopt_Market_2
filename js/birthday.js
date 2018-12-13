var offset = new Date();
/*---------------- กรณีที่ไม่มีกำหนดตัวตั้ง จะใช้วันที่ปัจจุบันเป็นตัวตั้งแทน (ไม่ต้องลบ)---------*/
var nowDate =offset.getDate();
var nowMonth =offset.getMonth();
var nowYear = offset.getFullYear()+543;
/*---------------- ----------------------------------------------------------------------------------*/
function getAge(){
	var bDate =document.getElementById('new_Date');
	var valDate =bDate.options[bDate.selectedIndex].value;
	var bMonth =document.getElementById('new_Month');
	var valMonth =bMonth.options[bMonth.selectedIndex].value;
	var bYear =document.getElementById('new_Years');
	var valYear =bYear.options[bYear.selectedIndex].value;
	if(valDate!='null' && valMonth!='null' && valYear!='null'){
		 offset.setFullYear(nowYear-valYear);
		 offset.setMonth(nowMonth-valMonth);
		offset.setDate(nowDate-valDate);
		var years =offset.getFullYear();
		var month =offset.getMonth();
		var day=offset.getDate();
		document.getElementById('txtAge').value=years+"  ปี  "+ month+" เดือน "+day+" วัน"  
         	//document.getElementById('txtAge').value=years   // แสดงแค่ ปี
	}else{
		document.getElementById('txtAge').value='';
	}
}