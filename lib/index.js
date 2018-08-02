 $("#login-button").click(function(event){
		 event.preventDefault();
	 
	 $('form').fadeOut(500);
	 $('.wrapper').addClass('form-success');
});


 $(document).on("click","#linkeffects",function(){
     var form = $(this).closest("form");
     //console.log(form);
     form.submit();
   });