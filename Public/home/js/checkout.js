$(function(){
	//初始化方法
	area.init('a');
	//修改的时候默认被选中效果
	area.selected('黑龙江','哈尔滨','道里区');

	$('#defaultForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                message: '错误的名字类型',
                validators: {
                    notEmpty: {
                        message: '姓名不能为空'
                    },
                }
            },
            number: {
                message: '错误的电话号码格式',
                validators: {
                    notEmpty: {
                        message: '请填写手机号码'
                    },
                    stringLength: {
                        min: 11,
                        max: 11,
                        message: '错误的手机号码格式'
                    },
                    regexp: {
                        regexp: /^[0-9_\.]+$/,
                        message: '手机号码必须为数字'
                    },
                }
            },
            address: {
                message: '错误的地址类型',
                validators: {
                    notEmpty: {
                        message: '地址不能为空'
                    },
                }
            },
            postcode: {
                message: '错误的邮政编码格式',
                validators: {
                    notEmpty: {
                        message: '请填写邮政编码'
                    },
                    stringLength: {
                        min: 6,
                        max: 6,
                        message: '错误的邮政编码格式'
                    },
                    regexp: {
                        regexp: /^[0-9_\.]+$/,
                        message: '邮政编码必须为数字'
                    },
                }
            },
        }
    });
});

function queding(obj,id) {
    $.ajax({
        url:'index.php?m=Home&c=Checkout&a=checkin',
        type:'post',
        data:{uid:id},
        success:function(data){
            if(data==0){
                alert('请输入地址信息');
            }else{
                location.href="index.php?m=Home&c=Pay&a=index&id="+data+"";
            }
        }
    })
}