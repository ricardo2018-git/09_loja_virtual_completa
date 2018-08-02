function fctLogin(){

	$.post('require/jp/jpLogin.php', {

		email:$('#eLogin').val(),
		senha:$('#sLogin').val()

	}, function(res){

		if(res){
			$('main form span').html(res).css({color:'red'});
		}else{
			$('main form span').html('logado com sucesso!!!');
		}

	});

}