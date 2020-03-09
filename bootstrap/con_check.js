// JavaScript Document
//专门用于检测用户信息输入是否完整

function Check_content() {
	//alert("Hello World");
	//检查id，姓名检查
	if ($.trim($('#name').val()).length == 0) {
		alert("请输入名字哦");
		$('#name').focus();
		return false;
	}
	//密码强度检测
	var pass_str = $("#password").val();
	//alert(pass_str);
	var pwdRegex = new RegExp('(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9]).{8,30}');
	if (!pwdRegex.test(pass_str)) {
		alert("密码复杂度太低（必须包含字母、数字、特殊字符），请修改后重试！");
		return false;
	}
	//手机号
	if ($.trim($('#phone1').val()).length == 0) {
		alert('手机号码没有输入');
		$('#phone1').focus();
		return false;
	} else {
		if (isPhoneNo($('#phone1').val()) == false) {
			alert('手机号码不正确');
			$('#phone1').focus();
			return false;
		}
	}
	//推荐人手机
	if (($.trim($('#phone2').val()).length != 0) && (isPhoneNo($('#phone2').val()) == false)) {
		alert('推荐人号码不正确，如果没有可以不填');
		$('#phone2').focus();
		return false;
	}
	//检查年级
	if ($.trim($('#grade').val()).length == 0) {
		alert("请下拉选择年级");
		$('#grade').focus();
		return false;
	}

	//一定要勾选
	if ($('#checkbox').prop('checked') == false) {
		alert("请先勾选阅读协议");
		return false;
	}
	return true;
}
//验证手机号功能
function isPhoneNo(phone) {
	var pattern = /^1[34578]\d{9}$/;
	return pattern.test(phone);
}

function check_band() {
	if ($.trim($('#username').val()).length == 0) {
		alert("请输入用户名");
		$('#username').focus();
		return false;
	}
	//检查年级
	if ($.trim($('#password').val()).length == 0) {
		alert("请输入密码");
		$('#password').focus();
		return false;
	}
	return true;
}

function check_up() {
	//手机号
	if ($.trim($('#phone1').val()).length == 0) {
		alert('手机号码没有输入');
		$('#phone1').focus();
		return false;
	} else {
		if (isPhoneNo($('#phone1').val()) == false) {
			alert('手机号码不正确');
			$('#phone1').focus();
			return false;
		}
	}
	//检查年级
	if ($.trim($('#grade').val()).length == 0) {
		alert("请下拉选择年级");
		$('#grade').focus();
		return false;
	}
	return true;
}
