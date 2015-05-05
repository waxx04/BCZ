jQuery(document).ready(function() {
	var windowWidth = 0;
	var contentWidth = 0;
	var mrg = 10;
	var mrg2 = 10;
	var mrg3 = 10;
	var main=$('#main');
	
	var STEx = true;
	var STReg = false;
	var STLog = false;
	
	var FF1 = false;
	var FF2 = false;
	var FF3 = false;
	var FF4 = false;
	var FF5 = false;
	var FF6 = false;
	var FF7 = false;
	
	var Uwidth = 0;
	var UPos = 0;
	
	var LUwidth = 0;
	var LUPos = 0;
	
	
	
	function calcHeight(){
		windowWidth = jQuery(window).width();
		contentWidth = 1000;
		mrg = ( jQuery(window).width() - contentWidth ) / 2;
		
		if(windowWidth > contentWidth){
			$("#main").css( { marginLeft : mrg });
			$("#signUpTab").css( { right : mrg });
			$("#innerHeader").css( { marginLeft : mrg });
			$("#innerHeader2").css( { marginLeft : mrg });
			$("#parallaxBG").css( { marginLeft : mrg });
			
			$("#underline").css( { left: mrg });
			
		}else{
			$("#main").css( { marginLeft : 0 });
			
			$("#signUpTab").css( { right : 0 });
		}
		
	}
		var x1 = $(".navB1").position();
		var x2 = $(".navB2").position();
		var x3 = $(".navB3").position();
		var x4 = $(".navB4").position();
		var x5 = $(".navB5").position();
		var x6 = $(".navB6").position();
		/*def settings*/
		
		Uwidth = mrg + 3 +$(".navB1").width() ;
		UPos =  x1.left;
		$("#underline").css( { width:  ( UPos + Uwidth ) });
			$("#liner").css( { width:   Uwidth  });
		LUwidth =Uwidth;
		LUPos =  UPos;	
		/*def settins ends*/	
		
	$(".navB1").click(function(){
		Uwidth = mrg + 3 +$(".navB1").width() ;
		UPos =  x1.left;
		LUwidth =Uwidth;
		LUPos =  UPos;	
		});		
	$(".navB2").click(function(){
		Uwidth =  mrg + 3 + $(".navB2").width() ;
		UPos = x2.left;
		LUwidth =Uwidth;
		LUPos =  UPos;	
		});	
		
	$(".navB3").click(function(){
		Uwidth = mrg + 3 +$(".navB3").width() ;
		UPos =  x3.left;
		LUwidth =Uwidth;
		LUPos =  UPos;	
		});	
	$(".navB4").click(function(){
		Uwidth =  mrg + 3 + $(".navB4").width() ;
		UPos = x4.left;
		LUwidth =Uwidth;
		LUPos =  UPos;	
		});	
		
	$(".navB5").click(function(){
		Uwidth = mrg + 3 +$(".navB5").width() ;
		UPos =  x5.left;
		LUwidth =Uwidth;
		LUPos =  UPos;	
		});	
	$(".navB6").click(function(){
		Uwidth =  mrg + 3 + $(".navB6").width() ;
		UPos = x6.left;
		LUwidth =Uwidth;
		LUPos =  UPos;		
		});	
		
		
		
	$(".navB1").mouseenter(function(){
		Uwidth =  mrg + 3 + $(".navB1").width() ;
		UPos = x1.left;
			$("#underline").css( { width:  ( UPos + Uwidth ) });
			$("#liner").css( { width:   Uwidth  });
		});		
	$(".navB1").mouseout(function(){
		Uwidth = LUwidth ;
		UPos = LUPos;
			$("#underline").css( { width:  ( UPos + Uwidth ) });
			$("#liner").css( { width:   Uwidth  });
		});		
		
	$(".navB2").mouseenter(function(){
		Uwidth =  mrg + 3 + $(".navB2").width() ;
		UPos = x2.left;
			$("#underline").css( { width:  ( UPos + Uwidth ) });
			$("#liner").css( { width:   Uwidth  });
		});		
	$(".navB2").mouseout(function(){
		Uwidth = LUwidth ;
		UPos = LUPos;
			$("#underline").css( { width:  ( UPos + Uwidth ) });
			$("#liner").css( { width:   Uwidth  });
		});		
		
	$(".navB3").mouseenter(function(){
		Uwidth =  mrg + 3 + $(".navB3").width() ;
		UPos = x3.left;
			$("#underline").css( { width:  ( UPos + Uwidth ) });
			$("#liner").css( { width:   Uwidth  });
		});		
	$(".navB3").mouseout(function(){
		Uwidth = LUwidth ;
		UPos = LUPos;
			$("#underline").css( { width:  ( UPos + Uwidth ) });
			$("#liner").css( { width:   Uwidth  });
		});		
		
		
	$(".navB4").mouseenter(function(){
		Uwidth =  mrg + 3 + $(".navB4").width() ;
		UPos = x4.left;
			$("#underline").css( { width:  ( UPos + Uwidth ) });
			$("#liner").css( { width:   Uwidth  });
		});		
	$(".navB4").mouseout(function(){
		Uwidth = LUwidth ;
		UPos = LUPos;
			$("#underline").css( { width:  ( UPos + Uwidth ) });
			$("#liner").css( { width:   Uwidth  });
		});	

		
	$(".navB5").mouseenter(function(){
		Uwidth =  mrg + 3 + $(".navB5").width() ;
		UPos = x5.left;
			$("#underline").css( { width:  ( UPos + Uwidth ) });
			$("#liner").css( { width:   Uwidth  });
		});		
	$(".navB5").mouseout(function(){
		Uwidth = LUwidth ;
		UPos = LUPos;
			$("#underline").css( { width:  ( UPos + Uwidth ) });
			$("#liner").css( { width:   Uwidth  });
		});		
		
	$(".navB6").mouseenter(function(){
		Uwidth =  mrg + 3 + $(".navB6").width() ;
		UPos = x6.left;
			$("#underline").css( { width:  ( UPos + Uwidth ) });
			$("#liner").css( { width:   Uwidth  });
		});		
	$(".navB6").mouseout(function(){
		Uwidth = LUwidth ;
		UPos = LUPos;
			$("#underline").css( { width:  ( UPos + Uwidth ) });
			$("#liner").css( { width:   Uwidth  });
		});		
		
		
	
	
	function HUnderline(){
		
	}
	
	function calcPopB(){
		windowWidth = jQuery(window).width();
		mrg2 = ( jQuery(window).width() - $("#popUpBox").width() ) / 2;
		mrg3 = ( jQuery(window).height() - $("#popUpBox").height()) / 2;
		
			$("#popUpBox").css( { left : mrg2 });
			$("#popUpBox").css( { top : mrg3 });
	}
	
	
		/*Hover*/
			$("#STReg").mouseover(function(){
				$("#STReg").css( { backgroundColor: '#10a8cd'});
				if(STEx == true){
					$("#signUpTab").css( { height: '100'});
				}
				
			});
			
			$("#STReg").mouseout(function(){
			
				$("#STReg").css( { backgroundColor: '#0d91b1'});
				
				if(STLog == true){
					$("#STReg").css( { backgroundColor: 'rgba(0,0,0,0.1)'});
					
				}
				if(STEx == true){
					$("#signUpTab").css( { height: '50'});
				}
			});

			$("#STLog").mouseover(function(){
				$("#STLog").css( { backgroundColor: '#10a8cd'});
				if(STEx == true){
					$("#signUpTab").css( { height: '100'});
				}
			});
			
			$("#STLog").mouseout(function(){
				
				$("#STLog").css( { backgroundColor: '#0d91b1'});
				
				if(STReg == true){
					$("#STLog").css( { backgroundColor: 'rgba(0,0,0,0.1)'});
				}
				
					if(STEx == true){
						$("#signUpTab").css( { height: '50'});
					}
			});
			
			
			
			
			$("#signUpTab").mouseout(function(){
				
				if(STEx == true){
					$("#STLog").css( { backgroundColor: 'rgba(0,0,0,0.0)'});
					$("#STReg").css( { backgroundColor: 'rgba(0,0,0,0.0)'});
				}
				
			});
		/*OnClick*/
		
		$("#STReg").click(function(){
			$("#SUTab").slideDown(400);
			$("#signUpTab").css( { width : '400px' , height : '450px' });
			
				$("#SUTabLog").slideUp(400);
				$("#STLog").css( { backgroundColor: 'rgba(0,0,0,0.1)'});
				$("#STReg").css( { backgroundColor: '#0d91b1'});
				$("#STReg").css( { width: '50%'});
				$("#STLog").css( { width: '50%'});
				
				STReg = true;
				STLog = false;
				STEx = false;
		});	
		
		$("#SUTBox").click(function(){
			$("#SUTab").slideDown(400);
			$("#signUpTab").css( { width : '400px' , height : '450px' });
			
				$("#SUTabLog").slideUp(400);
				$("#STLog").css( { backgroundColor: 'rgba(0,0,0,0.1)'});
				$("#STReg").css( { backgroundColor: '#0d91b1'});
				$("#STLog").css( { width: '50%'});
				$("#STReg").css( { width: '50%'});
				
				STReg = true;
				STLog = false;
				STEx = false;
		});	
		
		$("#STLog").click(function(){
			$("#SUTabLog").slideDown(400);
			$("#signUpTab").css( { width : '400px' , height : '280px' });
			
				$("#SUTab").slideUp(400);
				$("#STReg").css( { backgroundColor: 'rgba(0,0,0,0.1)'});
				$("#STLog").css( { backgroundColor: '#0d91b1'});
				
				STReg = false;
				STLog = true;
				STEx = false;
		});	
		
		
		function manSTLog(){
			$("#SUTabLog").slideDown(400);
			$("#signUpTab").css( { width : '400px' , height : '280px' });
			
				$("#SUTab").slideUp(400);
				$("#STReg").css( { backgroundColor: 'rgba(0,0,0,0.1)'});
				$("#STLog").css( { backgroundColor: '#0d91b1'});
				
				STReg = false;
				STLog = true;
				STEx = false;
		};	
		
		function CancelTab(){
				$("#SUTabLog").slideUp(400);
				$("#signUpTab").css( { width : '180px' , height : '50px' });
				
				$("#SUTab").slideUp(400);
				$("#STReg").css( { backgroundColor: 'rgba(0,0,0,0.0)'});
				$("#STLog").css( { backgroundColor: 'rgba(0,0,0,0.0)'});
				$("#STReg").css( { width: '55%'});
				$("#STLog").css( { width: '45%'});
				STEx = true;
		}
		
		$(".STBtnC1").click(function(){
			CancelTab();
		});	
		$(".STBtnC2").click(function(){
			CancelTab();
		});	
		
		
		// $(".submit").removeAttr('disabled');
		 $('.submit').attr('disabled','disabled');
		 
		 $('.submit').attr('disabled','disabled');
		 $('.FF1').keyup(function() {
				if($(this).val() != '') {
					if( !validateEmail($(this).val())) {
						//$('.submit').attr('type', 'text');
					}else{
						//$('.submit').attr('type', 'submit');
					}
					FF1 = true;
				}else{
					FF1 = false;
				}	
			formActive();
		});
		$('.FF2').keyup(function() {
				if($(this).val() != '') {
					FF2 = true;
				}else{
					FF2 = false;
				}	
			formActive();
		});
		$('.FF3').keyup(function() {
				if($(this).val() != '') {
					FF3 = true;
				}else{
					FF3 = false;
				}	
			formActive();
		});
		$('.FF4').keyup(function() {
				if($(this).val() != '') {
					FF4 = true;
				}else{
					FF4 = false;
				}	
			formActive();
		});
		$('.FF5').keyup(function() {
				if($(this).val() != '') {
					FF5 = true;
				}else{
					FF5 = false;
				}	
			formActive();
		});
		$('.FF6').keyup(function() {
				if($(this).val() != '') {
					FF6 = true;
				}else{
					FF6 = false;
				}	
			formActive();
		});
		$('.FF7').keyup(function() {
				if($(this).val() != '') {
					FF7 = true;
				}else{
					FF7 = false;
				}	
			formActive();
		});
		
		
		function formActive(){
			if(FF1 == true && FF2 == true && FF3 == true && FF4 == true && FF5 == true && FF6 == true && FF7 == true ) {
				$('.submit').removeAttr('disabled');
			}else{
				$('.submit').attr('disabled','disabled');
			}	
		}
		
		function validateEmail($email) {
		  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		  return emailReg.test( $email );
		}
		
		
		$("#PBButton").click(function(){
			$("#popUpBG").css( { display : 'none'});
		});	
		
		
		
		/*OnScroll*/
		
		 window.onscroll = function() {
			if (window.pageYOffset >= 10){
				$('#header').css({height: '50px' , backgroundColor: 'rgba(0,0,0,0.7)'});
				$('#header2').css({top: '50px' , backgroundColor: 'rgba(255,255,255,0.9)'});
				$('#headerDummy').css({height: '80px'});
				$('#icon').css({marginTop: '5px' , height: '40px' });
				$('#liner').css({backgroundColor : '#0c91b1' });
			}else{
				$('#header').css({height: '100px' , backgroundColor: 'rgba(0,0,0,0.8)'});
				$('#header2').css({top: '100px' , backgroundColor: 'rgba(12, 145, 177, 0.7)'});
				$('#headerDummy').css({height: '130px' });
				$('#icon').css({marginTop: '10px' ,  height: '80px'  });
				$('#liner').css({backgroundColor : '#c1f3ff' });
			}
			
			
			
			
			/*Parallax*/
	
				$('#parallaxBG').css({top: (0-(window.pageYOffset/6)) });
				$('#parallaxBG4').css({top: (0-(window.pageYOffset/4)) });
				$('#parallaxBG3').css({top: (0-(window.pageYOffset/1.5)) });
				
		}
		
		
	//onload
	
	calcHeight();
	calcPopB();
	
	var trigger1 = $('#trigger1').val();
	if(trigger1 == 1){
		manSTLog();
	}
	/*resize*/
	
	jQuery(window).resize(function(){
		calcHeight();
		calcPopB();
	});
	
	
	
	
});
























