/**
	** ajax de base
	$.ajax({
		url: BASE_URL + 'auth/inscription',
		type: 'post',
		data: {

		},
		success: function(response){

		},
		error: function(response){

		}
	})
*/

$('body').on('click','#retour_connexion',function(){
	$('.login-content').slideUp('fast');
	$('.login-content').load(BASE_URL + 'auth/load_page/connexion')
	$('.login-content').slideDown('slow');
})