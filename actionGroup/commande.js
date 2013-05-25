$(document).ready(function() {
    $("#myForm").bind('submit', function(){
	var bReturn = true;

        $("#nom").parent("div").css({borderLeft: ''});
        $('label[for="nom"]').css({color: ''});
        if ( jQuery.trim($("#nom").val()).length==0 ) {
            $("#nom").parent("div").css({borderLeft: '2px solid #FF7519'});
            $('label[for="nom"]').css({color: '#FF7519'});
            bReturn = false;
        }
		
		$("#prenom").parent("div").css({borderLeft: ''});
        $('label[for="prenom"]').css({color: ''});
        if ( jQuery.trim($("#prenom").val()).length==0 ) {
            $("#prenom").parent("div").css({borderLeft: '2px solid #FF7519'});
            $('label[for="prenom"]').css({color: '#FF7519'});
            bReturn = false;
        }
		
		$("#mail").parent("div").css({borderLeft: ''});
        $('label[for="mail"]').css({color: ''});
        if ( jQuery.trim($("#mail").val()).length==0 ) {
            $("#mail").parent("div").css({borderLeft: '2px solid #FF7519'});
            $('label[for="mail"]').css({color: '#FF7519'});
            bReturn = false;
        }
		
		$("#verif_mail").parent("div").css({borderLeft: ''});
        $('label[for="verif_mail"]').css({color: ''});
        if ( jQuery.trim($("#verif_mail").val()).length==0 || jQuery.trim($("#verif_mail").val()) != jQuery.trim($("#mail").val())) {
            $("#verif_mail").parent("div").css({borderLeft: '2px solid #FF7519'});
            $('label[for="verif_mail"]').css({color: '#FF7519'});
            bReturn = false;
        }
		
		$("#adresse").parent("div").css({borderLeft: ''});
        $('label[for="adresse"]').css({color: ''});
	    if ( jQuery.trim($("#adresse").val()).length==0 ) {
	        $("#adresse").parent("div").css({borderLeft: '2px solid #FF7519'});
            $('label[for="adresse"]').css({color: '#FF7519'});
            bReturn = false;
        }
				
		$("#codePostal").parent("div").css({borderLeft: ''});
        $('label[for="codePostal"]').css({color: ''});
	    if ( jQuery.trim($("#codePostal").val()).length < 5  || jQuery.trim($("#codePostal").val()).length > 5) {
	        $("#codePostal").parent("div").css({borderLeft: '2px solid #FF7519'});
            $('label[for="codePostal"]').css({color: '#FF7519'});
            bReturn = false;
        }
		
       $("#telephone").parent("div").css({borderLeft: ''});
        $('label[for="telephone"]').css({color: ''});
        if ( jQuery.trim($("#telephone").val()).length < 10  || jQuery.trim($("#telephone").val()).length > 10) {
	        $("#telephone").parent("div").css({borderLeft: '2px solid #FF7519'});
            $('label[for="telephone"]').css({color: '#FF7519'});
            bReturn = false;
        }
        return bReturn;
    });
});