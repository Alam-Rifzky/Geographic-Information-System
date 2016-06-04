
$(function(){
	$("#desc").click(function(){
		$("#overlay").fadeIn();
		$("#frame").fadeIn();
	});

	$("#overlay").click(function(){
		$(this).fadeOut();
		$("#frame").fadeOut();
		$("#frame-angkot").fadeOut();
		$("#frame-tentang").fadeOut();
		$("#frame-profil").fadeOut();
	});

$("#angkot").click(function(){
		$("#overlay").fadeIn();
		$("#frame-angkot").fadeIn();
	});

$("#tentang").click(function(){
		$("#overlay").fadeIn();
		$("#frame-tentang").fadeIn();
	});

$("#profil").click(function(){
		$("#overlay").fadeIn();
		$("#frame-profil").fadeIn();
	});
});