$('body').on('click','#inscription',function(){
	$('.login-content').slideUp('fast');
	$('.login-content').load(BASE_URL + 'auth/load_page/inscription')
	$('.login-content').slideDown('slow');
})

$('body').on('click','#connecter',function(){
	window.location.href = BASE_URL
})