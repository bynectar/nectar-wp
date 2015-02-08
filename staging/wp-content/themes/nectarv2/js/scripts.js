// BEGIN CORE POP SCRIPT

// Vertically centers pop-up box
function nectarPopBoxPosition() {
	var windowH = $(window).height();
	var boxH = $('.nectarPopBoxActive').height();
	var topMargin = windowH/2 - boxH/2;
	$('.nectarPopBoxActive').css('marginTop', topMargin);
};

// Gets element by suppled ID and fades in. Supply with ID of intended instance of '.nectarPopBox'
// Also adds '.nectarPopOverlay', '.nectarPopClose' and '.nectarPopWrap'
function nectarPop (id) {
	$('body').prepend('<div class="nectarPopOverlay" onClick="nectarPopClose();"></div>')
	$(id)
		.wrap('<div class="nectarPopWrap">')
		.prepend('<a href="javascript: void(0)" class="nectarPopClose" onClick="nectarPopClose()"></a>');
	$('.nectarPopOverlay').fadeIn();
	$('.nectarPopWrap').fadeIn();
	$(id).fadeIn();
	//Find children named ".nectarPopBox" and centers vertically
	var box = $(id).children('.nectarPopBox').attr('id');
	$(id).addClass('nectarPopBoxActive');
	nectarPopBoxPosition();
};

// Finds active box and fades out, fades out and removes all added elements from nectarPop()
function nectarPopClose() {
	$('.nectarPopBoxActive').fadeOut(100);
	$('.nectarPopWrap').fadeOut(100, function(){
		$('.nectarPopBoxActive').unwrap();
		$('.nectarPopBox iframe').remove();
		if ($('.nectarPopBoxActive').length > 0) {
			$('.nectarPopBoxActive').removeClass('nectarPopBoxActive');
		};
	});
	$('.nectarPopOverlay').fadeOut(500, function(){
		$(this).remove();
	});
	$('.nectarPopClose').fadeOut(100, function(){
		$(this).remove();
	});
};

// Watches for resizing of window and re-centers active box
$(document).ready( function () {
	window.onresize = function() {
		if ($('.nectarPopBoxActive').length > 0) {
			nectarPopBoxPosition();
		};
	};
	$('#promoBar').slideDown();
});

// END CORE POP SCRIPT

// POP UP SCRIPTS

// SET COOKIE BY NAME
function setCookie(c_name,value,exdays){
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : ";domain=.bynectar.com; path=/; expires=" + exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;
}

// GET COOKIE BY NAME AND RETURN VALUE
function getCookie(c_name){

	var c_value = document.cookie;
	var c_start = c_value.indexOf(" " + c_name + "=");
	
	if (c_start == -1) {
		c_start = c_value.indexOf(c_name + "=");
	}
	
	if (c_start == -1) {
		c_value = null;
	} else {
		c_start = c_value.indexOf("=", c_start) + 1;
		var c_end = c_value.indexOf(";", c_start);
		if (c_end == -1) {
			c_end = c_value.length;
		}
		c_value = unescape(c_value.substring(c_start,c_end));
	}
	
	return c_value;
	
}

// CHECK NUMBER OF CAMPAIGN OPTIONS AND SELECT ONE CAMPAIGN RANDOMLY
function selectCampaign(campaigns) {
	// CHECK NUMBER OF CAMPAIGNS
	Object.size = function(obj) {
	    var size = 0, key;
	    for (key in obj) {
	        if (obj.hasOwnProperty(key)) size++;
	    }
	    return size;
	};
	var campaignCount = Object.size(campaigns);
	
	// SELECT RANDOM CAMPAIGN
	var selector = Math.floor((Math.random()*campaignCount)+0);
	var activeCampaignInfo = {
		activeCampaign: campaigns[selector],
		selectedCampaign: selector
	};
	//console.log(activeCampaignInfo.activeCampaign);
	
	return activeCampaignInfo;
}

// SET POPUP CONTENT
function setPopUpContent(campaign){
	if (campaign.content) {
		$("#popUpContent").html(campaign.content);
	}
}

// RESET OR CHECK COOKIES FOR DIAGNOSTIC REASONS
function signUpReset() {
	console.log(getCookie('popUpCount'));
	setCookie("popUpCount","",30);
	console.log(getCookie('popUpCount'));
	console.log(getCookie('popUpCampaign'));
	setCookie("popUpCampaign","",30);
	console.log(getCookie('popUpCampaign'));
}
function signUpCheck() {
	console.log(getCookie('popUpCount'));
	console.log(getCookie('popUpCampaign'));
}

// INITIATE POPUP
function popUpCheck(campaigns) {

	// GET OR SET CURRENT PAGE COUNT 
	var pageCount = getCookie("popUpCount");
	setCookie("cookieCheck",1,1);
	var cookieCheck = getCookie("cookieCheck");
	if ( cookieCheck != 1 ) {
		return false;
	} else if ( pageCount != null ) {
		pageCount++;
		setCookie("popUpCount",pageCount,30);
		//console.log('increment: '+pageCount);
	} else {
		pageCount = 1;
		setCookie("popUpCount",pageCount,30);
		//console.log('initiate: '+pageCount);
	}
	
	// GET OR SET ACTIVE CAMPAIGN
	var selectedCampaign = getCookie("popUpCampaign");
	if ( selectedCampaign == null || selectedCampaign == "" ) {
		// SET CAMPAIGN
		activeCampaignInfo = selectCampaign(campaigns);
		selectedCampaign = activeCampaignInfo.selectedCampaign;
		activeCampaign = activeCampaignInfo.activeCampaign;
		setCookie("popUpCampaign",selectedCampaign,30); // RECORD ASSIGNED CAMPAIGN IN COOKIE
	} else {
		// GET CAMPAIGN
		activeCampaign = campaigns[selectedCampaign];
		setCookie("popUpCampaign",selectedCampaign,30);
	};
	if(activeCampaign.timing1){var pageDepth1 = activeCampaign.timing1;} else {var pageDepth1 = "pageDepth1off";};
	if(activeCampaign.timing2){var pageDepth2 = activeCampaign.timing2;} else {var pageDepth2 = "pageDepth2off";};
	if(activeCampaign.timing3){var pageDepth3 = activeCampaign.timing3;} else {var pageDepth3 = "pageDepth3off";};
	if(activeCampaign.timing4){var pageDepth4 = activeCampaign.timing4;} else {var pageDepth4 = "pageDepth4off";};
	
	// TOGGLE TESTING MODE (FIRES SLIDEOUT ON EVERY PAGE LOAD)
	var testing = false;
	
	// SLIDE OUT CHECK CONDITIONALS
	if (testing == true) {
		//for testing purposes fire every page load;
		setPopUpContent(activeCampaign);
		return true;
		
	} else if (pageCount==="off") {
		// ALLOW FOR DEACTIVATION AFTER CONVERSION
		return false;
		
	} else if (pageCount==pageDepth1 || pageCount==pageDepth2 || pageCount==pageDepth3 || pageCount==pageDepth4) {
		// TARGET PAGE DEPTH MET, RESET COOKIE AND RETURN TRUE
		setPopUpContent(activeCampaign);
		return true;
			
	} else {
		// ANY OTHER PAGE COUNT VALUE
		return false;
	}
	
}

// INITIATE POPUP
function popUp(campaigns, id){
	if ( popUpCheck(campaigns) && campaigns != null ) {
		nectarPop(id);
		console.log('pop up initiated');
		console.log("true");
	} else {
		console.log("false");
	}
}