   $(".offerAct").submit(function(e)
    {
        e.preventDefault();

	var postData = $(this).serialize();
	var btns = $(this).find(":button");
	var inpt = $(this).find("input[type!='hidden'], textarea, select");
	///agency/settings

	var offerID = $('#offerID').val();
	var SiteUrl = "/viewOffer/".offerID;

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
	      	 	//alert(data[0].msg);
	      	 	document.getElementById("ModalText").innerHTML = data[0].msg;
	      	 	        $("#myModal").modal();

	      		console.log(data[0].msg);
	
	      }

	      	        if( data[0].success == 2)
	        {
	      	 	//alert(data[0].msg);
	      	 	document.getElementById("declineID").value = data[0].id;
	      	 	        $("#declineModal").modal();

	
	      }
	    
	    	        if( data[0].success == 3)
	        {
	      	 		      	 	        $("#declineModal").modal('hide');;


	      	 	document.getElementById("ModalText").innerHTML = data[0].msg;
	      	 	        $("#myModal").modal();

	      		console.log(data[0].msg);
	
	      }
	    	if(data[0].error == 1)
	        {
	       		//alert("error");

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

      $(".offerPrice").submit(function(e)
    {
        e.preventDefault();

	var postData = $(this).serialize();
	var btns = $(this).find(":button");
	var inpt = $(this).find("input[type!='hidden'], textarea, select");
	///agency/settings

	var SiteUrl = "/offerPrice";

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
	      		console.log(data[0].msg);
				getTotal();
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


      $(".offerForm").submit(function(e)
    {
        e.preventDefault();

	var postData = $(this).serialize();
	var btns = $(this).find(":button");
	var inpt = $(this).find("input[type!='hidden'], textarea, select");
	///agency/settings
	var id = document.getElementById('offerForm').getAttribute('data-id')
	var SiteUrl = "/makeOffer/"+id;

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
	      		alert(data[0].msg);
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

function showAlert()
{
	alert("hey");
}

  
function getTotal()
{

  document.getElementById('extraInfo').style.display = "block";
    document.getElementById('BookNowBTN').style.display = "block";
      document.getElementById('PriceBTN').style.display = "none";


  var hours =  (parseInt(document.getElementById('dayEnd').value)+12)-parseInt(document.getElementById('dayStart').value) ;


var days = 0;
     $('#daysAWeek').find('input[type="checkbox"]:checked').each(function () {
       days+=1;
    });


weeks=0;
    var perHour =  parseInt(document.getElementById('priceInfo').getAttribute('data-perHour'));
        var diff =  parseInt(document.getElementById('priceInfo').getAttribute('data-diff'));

if( document.getElementById('weeksScheduled').value >=1)
{
	      document.getElementById('WeekTab').style.display = "block";

    document.getElementById('weekly').innerHTML =  "$"+(days*(perHour)*hours);
    weeks = document.getElementById('weeksScheduled').value;


var realDays = (days*weeks);
console.log("h_" + hours + "days_" + realDays + "weeks_" +document.getElementById('weeksScheduled').value  );

document.getElementById('subTotal').innerHTML =  "$"+((perHour*hours))*(realDays*weeks) ;
}
else
{
	weeks = 1;

var realDays = diff;
console.log("h_" + hours + "days_" + realDays + "weeks_" +document.getElementById('weeksScheduled').value  );

document.getElementById('subTotal').innerHTML =  "$"+((perHour*hours))*(realDays*weeks) ;

}

}

