   $(".settingsForm").submit(function(e)
    {
        e.preventDefault();

	var postData = $(this).serialize();
	var btns = $(this).find(":button");
	var inpt = $(this).find("input[type!='hidden'], textarea, select");
	///agency/settings
	var SiteUrl = "/"+$(this).attr("data-type")+"/settings";

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
	       		alert("error");

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

 $("#imageUpload").submit(function(e)
    {
        e.preventDefault();
        var postData =  new FormData(this);
       var btns = $(this).find(":button");
	$(btns).prop('disabled', true);
        $.ajax(
        {
            url : '/profileImage',
            type: "POST",
            data : postData,
			enctype: 'multipart/form-data',
			processData: false,
            contentType: false,
            success:function(data, textStatus, jqXHR) 
            {
	        if( data[0].success == 1)
	        {
	      	 	alert("success");
	
	      }
	    
	    	if(data[0].error == 1)
	        {
	       		alert("error");

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

$("#selecter").change(function(){
        document.getElementById('imgSubmit').click();
 });

function showAlert()
{
	alert("hey");
}