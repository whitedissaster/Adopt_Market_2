	$('.AB').change(function(){
			    var selection = $('.AB').val();
			    switch(selection){
			    	case "0":
			    		$("#AB").css("display","none");
			            break;
			    	case "1":
			    		$("#AB").css("display","block");
			            break;
			    }
			});
	//---------------------------------------------
	$(".datetime").hide();

		    $('#start_auction').change(function(){
			    var selection = $('#start_auction').val();
			    switch(selection){
			        case 'set':
			            $(".datetime").show();
			            break;
			        case 'now':
			            $(".datetime").hide();
			            break;
			    }
			});