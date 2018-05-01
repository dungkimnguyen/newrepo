@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel loginBG">
                <h4 class="panel-heading tblack">Reset Token</h4>
                <div class="panel-body tblack">


                <div id="emailEntry" style="display: block">
                    <form class="emailEntry form-horizontal" method="post">
                            {{ csrf_field() }}


                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                            </div>
                        </div>

                            <div class="ctr">
                               <button  type="submit" class="btn btn-sm btn-info lbtn formSubmit">Submit</button>
                        </div>
                    </form>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>



@endsection
<script type="text/javascript">
    

$(document).ready(function() { 
    

   $(".emailEntry").submit(function(e)
    {
        var btns = $(this).find(":button");
        $(btns).prop('disabled', true);
        e.preventDefault();
        var postData = $(this).serialize();
        $.ajax(
        {
            url : '/resetToken',
            type: "POST",
            data : postData,
            success:function(data, textStatus, jqXHR) 
            {
              $(btns).prop('disabled', false);
                if( data[0].success == 1)
                {
                    alert("email sent");
                }
            
              if(data[0].error == 1)
                {
                    alert("error " + data[0].msg);
                }
               //
            
            },
            error: function(jqXHR, textStatus, errorThrown) 
            {
              $('.btn').prop('disabled', false);
              alert("fail");
            }
            
            
        });
        return false;
    });
});

</script>