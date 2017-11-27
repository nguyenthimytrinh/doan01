<meta charset="utf-8">
<script src="jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	function ktten()
	{
		var ten=$('#ten').val();
		var flag=true;
		if ( ten=='')
		{
			$('#tener').text('Tên không được trống!');
			$('#ten').focus();
			flag = false;
		}
		else{
		$('#tener').text('');}	
		return flag;	
	}
	function kthinh(){
	var image_name = $('#hinh').val();
  		 if(image_name == '')
 		{
 			$('#hinher').text('Chưa chọn hình!');
  			 return false;
 		 }
 	     else
 		 {
 			  var extension = $('#hinh').val().split('.').pop().toLowerCase();
 			  if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','']) == -1)
 			  {
 			  	$('#hinher').text('Không phải file hình!');
   				 return false;
  			 }
		 }
}
	function ktmk()
	{
		var mk=$('#mk').val();
		var flag=true;
		if ( mk=='')
		{
			$('#mker').text('MK không được trống!');
			$('#mk').focus();
			flag = false;
		}
		else{
		$('#mker').text('');}
		return flag;		
	}
	function ktnlmk()
	{
		var mk=$('#mk').val();
		var nlmk=$('#nlmk').val();
		var flag=true;
		if ( nlmk=='')
		{
			$('#mker').text('MK không được trống!');
			$('#mk').focus();
			flag = false;
		}
		if(nlmk!=mk)
			{
			$('#nlmker').text('MK xác nhận sai!');
			$('#nlmk').focus();
			flag = false;
		}
		else{
		$('#nlmker').text('');}
		return flag;		
	}
	function kt()
	{
		if(ktten()==false || ktmk()==false || ktnlmk()==false || kthinh()==false)
			return false;
		return true;

	}
	$(document).ready(function()
	{
		$('#sm').click(function(){
		
			if(kt()==false)
				return false;});
	});
</script>
<h1>FORM ĐĂNG KÍ THÀNH VIÊN</h1>
<form action="lab5_5_3.php" method="post" enctype="multipart/form-data" onsubmit="kt()">
	Tên đăng nhập:<input type="text" id="ten" name="ten" onChange="ktten()"><label id="tener"></label><br>
	Mật khẩu:<input type="password" name="mk" id="mk" onChange="ktmk()" ><label id="mker"></label><br>
	Nhập lại mật khẩu:<input type="password" id="nlmk" name="nlmk"> <label id="nlmker"></label><br>
	Giới tính:<input type="radio" name="gt" value="Nam" checked="checked">Nam
			 <input type="radio" name="gt" value="Nữ">Nữ<br>
	Sở thích:<input type="text" name="st" id="st"><br>
	Hình ảnh:<input type="file" id="hinh" name="hinh"><label id="hinher"></label><br>
	Tỉnh:<select name="tinh" >
		<option value="Hồ Chí Minh" selected="selected">Hồ Chí Minh</option>
		<option value="An Giang">An Giang</option>
		<option value="Long An">Long An</option>
		<option value="Tiền Giang">Tiền Giang</option>
	</select><br>
	<input type="submit" name="submit" id="sm" >
	<input type="reset" id="rs" name="reset">

</form>

<?php
	$ten=isset($_POST['ten']) ? $_POST['ten'] : false;
	$mk=isset($_POST['mk']) ? $_POST['mk'] : false;
	$nlmk=isset($_POST['nlmk']) ? $_POST['nlmk'] : false;
	$hinh=isset($_POST['hinh']) ? $_POST['hinh'] : false;
	if($ten==false)
		echo '<label style="color:red">Tên đăng nhập không được để trống'."</label><br>";
	else
		{echo "Tên đăng nhập:".$_POST['ten']."<br>";}
	if($mk==false)
		echo  '<label style="color:red">Mật khẩu không được để trống!'."</label><br>";
	else
		{echo "Mật khẩu:".md5($_POST['mk'])."<br>";}
	
	if($nlmk==false)
		echo  '<label style="color:red">Phải xác nhận lại mk'."</label><br>";	
	if($nlmk!=$mk)	
		echo  '<label style="color:red">Mật khẩu xác nhận sai'."</label><br>";
	if(isset($_POST['st']))
		{echo "Sở thích:".$_POST['st']."<br>";}
	if(isset($_POST['submit'])){
    $upload_path = dirname(__FILE__).'/hinh/';
    if(!is_null($_FILES['hinh']['name'])){ 
        $name = $_FILES['hinh']['name']; 
        $tmp_name = $_FILES['hinh']['tmp_name']; 
        $type = $_FILES['hinh']['type']; 
        if($type=='image/jpeg'
        || $type=='image/gif'
        || $type=='image/png')
        {
        	$dest = $upload_path.$name;
                if(is_uploaded_file($tmp_name)){ 
                    @move_uploaded_file($tmp_name, $dest);
                    echo "Hình ảnh"."<br><img src='hinh/".$name."' width='50' /><br>";
                    
        }}else echo '<label style="color:red">File k phải hình ảnh'."</label><br>";}}
	if(isset($_POST['gt']))
		{echo "Giới tính:".$_POST['gt']."<br>";}
	if(isset($_POST['tinh']))
		{echo "Tỉnh:".$_POST['tinh']."<br>";}	
?>