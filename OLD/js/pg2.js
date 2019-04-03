
$(document).on('ready', function () {

  	// Method to handle submission of login content
	$("#signIn").on("submit", function(event) {
	    event.preventDefault();
	    $("#errors").hide();
	    $('#loginContentWrapper').hide();
	    $('#spinnyGIF').show();
	    displayNotification('Logging you in, one moment');
	    var data = $(this).serialize();
	    attemptLogin(data);
	});

 	// Open modal for adding new transaction. 
	$("#createNewTransaction").on("click", function(event) {
	    event.preventDefault();
	    $('#darkenBackground').show();
	    $("body").css("overflow", "hidden");
	    $('#transactionForm').slideDown();
	}); 

	$("#outstanding").on("click", function(event) {
	    event.preventDefault();
	    $("#outstandingSubmit").click();
	}); 

	$("#notable").on("click", function(event) {
	    event.preventDefault();
	    $("#notableSubmit").click();
	}); 

	$("#contributing").on("click", function(event) {
	    event.preventDefault();
	    $("#contributingSubmit").click();
	}); 

	$("#noncontributing").on("click", function(event) {
	    event.preventDefault();
	    $("#nonContributingSubmit").click();
	}); 

});
