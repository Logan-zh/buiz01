<div class="di"
    style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
    </marquee>
    <div style="height:32px; display:block;">
    <?php include 'front/marquee.php'; ?>
    </div>
    <!--正中央-->
    <form>
        <p class="t botli">管理員登入區</p>
        <p class="cent">帳號 ： <input name="acc" id='acc' type="text"></p>
        <p class="cent">密碼 ： <input name="pw" id='pw' type="password"></p>
        <p class="cent"><input value="送出" type="button" onclick='sub()'><input type="reset" value="清除"></p>
    </form>
</div>
<script>
function sub(){
	let acc=$('#acc').val()
	let pw=$('#pw').val()
	$.post('api/login.php',{acc,pw},res=>{
		if(res==1){
			alert('歡迎登入')
			location.href='admin.php'
		}else{
			alert('帳號或密碼錯誤')
		}
	})
}
</script>