

$(document).ready(function() {
   $("#searchF").submit(function(e)
    {
        e.preventDefault();

	var postData = $(this).serialize();
	var btns = $(this).find(":button");
	var inpt = $(this).find("input[type!='hidden'], textarea, select");
	///agency/settings
	var SiteUrl = "/extendedSearch";

	$(btns).prop('disabled', true);
	$(inpt).prop('disabled', true);
	$.ajax(
	{
	    url : SiteUrl,
	    type: "POST",
	    data : postData,
	    success:function(data, textStatus, jqXHR) 
	    {
	       
	      	 	//alert("success");
	      		$("#resultsPane").html(data);
	
	    
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


	$(".dropDown").click(function(){

		// data-filter="military"  role="presentation" data-value="yes"
		var filter =  this.getAttribute("data-filter");
		var value =  this.getAttribute("data-value");

		document.getElementById(filter).value  = value ;

		document.getElementById(filter+'_show').innerHTML  = value ;
		//alert("clicked " + '#'+filter+'_show'+ ":" + value);
	});
});