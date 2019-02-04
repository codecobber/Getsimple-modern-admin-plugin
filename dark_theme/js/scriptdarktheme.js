$('tbody .pagetitle').prepend('<i class="far fa-window-maximize"></i>');


$('.main .edit-nav ').prepend('<a href="#" id="" class="showmenu" >  <i class="fas fa-bars"></i></a>')

$('.nav').before('<div class="btn-rwd-menu"> <i class="fas fa-bars fa-lg"></i> </div>');

$('.nav').addClass('responsive');

$('.btn-rwd-menu').click(function(){
	$('.nav').toggleClass('responsive');
	
})

$('.nav ').append('<li id="nav_plugins"><a class="settings" href="settings.php" ><i class="fas fa-cog"></i> Settings</a></li>');

$('#settings .snav').prepend('<li id="sb_settingsprofile"><a href="support.php" accesskey="u">Support</a></li>');

$('.showmenu').click(function(){
	$('#sidebar').toggleClass('d-none');
	$('#maincontent').toggleClass('max-width');
	$('.wrapper table').toggleClass('max-width')
})
