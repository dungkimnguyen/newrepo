   $(".employeeEditForm").submit(function(e)
    {
        e.preventDefault();

	var postData = $(this).serialize();
	var btns = $(this).find(":button");
	var inpt = $(this).find("input[type!='hidden'], textarea, select");
	///agency/settings
	var SiteUrl = "/employee/edit";

	$(btns).prop('disabled', true);
	$(inpt).prop('disabled', true);
	$.ajax(
	{
	    url : SiteUrl,
	    type: "POST",
	    data : postData,
	    success:function(data, textStatus, jqXHR) 
	    {
	       
	      	 	
	      		//console.log(data[0].data);
	      		console.log("POSTED");
	      		next();
	   
	    
	    },
	    error: function(jqXHR, textStatus, errorThrown) 
	    {
	      		
	      		var arg = jqXHR;
	if(arg.responseText){
	    	if(arg.status === 400){
	            var errs = $.parseJSON(arg.responseText);
	            var errStack = '<ul>';
	            $.each( errs, function( key, value ) {
	                $.each( value, function( key2, errm ) {
	                    errStack += '<li>' + errm + '</li>';
	                });
	            });
	            errStack += '</ul>';

//error_Modal
//error_ModalText
	      	 	document.getElementById("error_ModalText").innerHTML = errStack;

$("#error_Modal").modal();
	            //console.log(errStack);
	        }
	        else if(arg.status === 401){
	            console.log("ERROR");
	        }
	        else console.log("ERROR");
			}
	    }
	    

	});
        
    	$(btns).prop('disabled', false);
	$(inpt).prop('disabled', false);    
        
});



$(document).ready(function() {



	
let $ = s => [].slice.call(document.querySelectorAll(s));

// log events as they happen:
let t = $('#tags')[0];


// hook 'em up:
$('#Titles input[type="tags"]').forEach(tagsInput);



// log events as they happen:
let x = $('#skills')[0];


// hook 'em up:
$('#Skills input[type="tags"]').forEach(tagsInput);


$('.attr input[type="checkbox"]').forEach(hey);

function hey()
{
	console.log("hi");
}



});


function submitNext()
{
	    var pos = parseInt(document.getElementById("continueBTN").getAttribute('data-pos'));
console.log("formPos"+pos);
document.getElementById('empBtn'+pos).click();
}

   function next()
{


	    var pos = parseInt(document.getElementById("continueBTN").getAttribute('data-pos'));
console.log("formPos"+pos);

    document.getElementById("emp_"+pos).style.display = "none";



       var prevball = document.getElementById("ball_"+pos).classList;
   prevball.remove("active");
   prevball.add("disabled");

    pos = (pos+1);

   var ball = document.getElementById("ball_"+pos).classList;

   ball.add("active");
   ball.remove("disabled");


        if(pos >= 1)
        {
             if(pos >= 4)
                {
                     document.getElementById("continueBTN").style.display = "none";
                     alert("success completed")
                        document.getElementById("prevBTN").style.display = "none";

                     //document.getElementById("updateBTN").style.display = "inline-block";
                }
                else
                {
                	             document.getElementById("prevBTN").style.display = "inline-block";

                }
        }

if(pos <= 3)
{
	    document.getElementById("emp_"+pos).style.display = "block";

 document.getElementById("continueBTN").setAttribute("data-pos", pos);

     var pos = document.getElementById("continueBTN").getAttribute('data-pos');
}


}

function previous()
{
        var pos = parseInt(document.getElementById("continueBTN").getAttribute('data-pos'));

    document.getElementById("emp_"+pos).style.display = "none";

       var prevball = document.getElementById("ball_"+pos).classList;
   prevball.remove("active");
   prevball.add("disabled");

    pos = (pos-1);

   var ball = document.getElementById("ball_"+pos).classList;

   ball.add("active");
   ball.remove("disabled");

        if(pos <= 0)
        {
             document.getElementById("prevBTN").style.display = "none";
        }

    document.getElementById("emp_"+pos).style.display = "block";

 document.getElementById("continueBTN").setAttribute("data-pos", pos);

     var pos = document.getElementById("continueBTN").getAttribute('data-pos');
                     document.getElementById("continueBTN").style.display = "inline-block";

}