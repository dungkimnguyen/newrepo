      $(".loginForm").submit(function(e)
    {
        e.preventDefault();

	var postData = $(this).serialize();
	var btns = $(this).find(":button");
	var inpt = $(this).find("input[type!='hidden'], textarea, select");
	///agency/settings
	var SiteUrl = "/login";

	$(btns).prop('disabled', true);
	$(inpt).prop('disabled', true);
	$.ajax(
	{
	    url : SiteUrl,
	    type: "POST",
	    data : postData,
	    success:function(data, textStatus, jqXHR) 
	    {
	      window.location.href = data.intended;

	       //
	    
	    },
	    error: function(jqXHR, textStatus, errorThrown) 
	    {
	    		        		$(inpt).prop('disabled', false); 
	        			$(btns).prop('disabled', false);
	        		toggle_F('login_message_area');
	        		toggle_F('loginmodal');
	        		       $("#login_Modal").modal();
	    		       		//alert("These credentials do not match our records or your account has not been activated.");

	    }
	    

	});
	        			$(btns).prop('disabled', false);
	$(inpt).prop('disabled', false);    
        
});



   $(".employeeInvite").submit(function(e)
    {
        e.preventDefault();

	var postData = $(this).serialize();
	var btns = $(this).find(":button");
	var inpt = $(this).find("input[type!='hidden'], textarea, select");
	///agency/settings
	var SiteUrl = "/employeeInvite";

	$(btns).prop('disabled', true);
	$(inpt).prop('disabled', true);
	$.ajax(
	{
	    url : SiteUrl,
	    type: "POST",
	    data : postData,
	    success:function(data, textStatus, jqXHR) 
	    {

	    
	    	if(data[0].error == 1)
	        {
	       		alert(data[0].msg);

	        }
	        else
	        {
	        	$("#employeeList").html(data);

	        }
	       //
	    
	    },
	    error: function(jqXHR, textStatus, errorThrown) 
	    {
	    		       		alert("error");

	    }
	    

	});
        
    	$(btns).prop('disabled', false);
	$(inpt).prop('disabled', false);    
        
});

   $(".resendInvite").submit(function(e)
    {
        e.preventDefault();

	var postData = $(this).serialize();
	var btns = $(this).find(":button");
	var inpt = $(this).find("input[type!='hidden'], textarea, select");
	///agency/settings
	var SiteUrl = "/resendInvite";

	$(btns).prop('disabled', true);
	$(inpt).prop('disabled', true);
	$.ajax(
	{
	    url : SiteUrl,
	    type: "POST",
	    data : postData,
	    success:function(data, textStatus, jqXHR) 
	    {
	        if( data[0].success == 1)
	        {
	      	 	alert("success");
	      		console.log(data[0].data);
	
	      }
	    
	    	if(data[0].error == 1)
	        {
	       		alert(data[0].msg);

	        }

	       //
	    
	    },
	    error: function(jqXHR, textStatus, errorThrown) 
	    {
	    		       		alert("error");

	    }
	    

	});
        
	$(inpt).prop('disabled', false);    
        
});


      $(".clientInvite").submit(function(e)
    {
        e.preventDefault();

	var postData = $(this).serialize();
	var btns = $(this).find(":button");
	var inpt = $(this).find("input[type!='hidden'], textarea, select");
	///agency/settings
	var SiteUrl = "/clientInvite";

	$(btns).prop('disabled', true);
	$(inpt).prop('disabled', true);
	$.ajax(
	{
	    url : SiteUrl,
	    type: "POST",
	    data : postData,
	    success:function(data, textStatus, jqXHR) 
	    {
	
	    
	    	if(data[0].error == 1)
	        {
	       		alert(data[0].msg);

	        }
	        	             else
	        {
	        	$("#clientList").html(data);
	        		       		alert("success");

	        }
	       //
	    
	    },
	    error: function(jqXHR, textStatus, errorThrown) 
	    {
	    		       		alert("error");

	    }
	    

	});
        
    	$(btns).prop('disabled', false);
	$(inpt).prop('disabled', false);    
        
});

      $(".employeeSearch").submit(function(e)
    {
        e.preventDefault();

	var postData = $(this).serialize();
	var btns = $(this).find(":button");
	var inpt = $(this).find("input[type!='hidden'], textarea, select");
	///agency/settings
	var SiteUrl = "/dashboard/employeeSearch";

	$(btns).prop('disabled', true);
	$(inpt).prop('disabled', true);
	$.ajax(
	{
	    url : SiteUrl,
	    type: "POST",
	    data : postData,
	    success:function(data, textStatus, jqXHR) 
	    {
	        $("#employeeList").html(data);
	    
	    },
	    error: function(jqXHR, textStatus, errorThrown) 
	    {
	    		       		alert("error");

	    }
	    

	});
        
    	$(btns).prop('disabled', false);
	$(inpt).prop('disabled', false);    
        
});

      $(".offerSearch").submit(function(e)
    {
        e.preventDefault();

	var postData = $(this).serialize();
	var btns = $(this).find(":button");
	var inpt = $(this).find("input[type!='hidden'], textarea, select");
	///agency/settings
	var SiteUrl = "/dashboard/offerSearch";

	$(btns).prop('disabled', true);
	$(inpt).prop('disabled', true);
	$.ajax(
	{
	    url : SiteUrl,
	    type: "POST",
	    data : postData,
	    success:function(data, textStatus, jqXHR) 
	    {
	        $("#offerList").html(data);
	    
	    },
	    error: function(jqXHR, textStatus, errorThrown) 
	    {
	    		       		alert("error");

	    }
	    

	});
        
    	$(btns).prop('disabled', false);
	$(inpt).prop('disabled', false);    
        
});





$('.invoiceBTN').on('click', function() { 

[].forEach.call(document.querySelectorAll('.create_invoice_form'), function (el) {
  el.style.display = 'none';
});

	        var OfferID = $(this).attr("data-id");
	        	 document.getElementById("offerTab_"+OfferID).style.display = "inline-block";



});


function toggle_F(id)
{
	var el = document.getElementById(id);
	if(el.style.display == "none")
	{
		el.style.display = "inline-block";
	}
	else
	{
		el.style.display = "none";
	}

}