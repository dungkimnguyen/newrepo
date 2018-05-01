
<div class="row"> 
     <form id="searchForm" action="/search" class="form-horizontal "  method="post">

<div class="col-lg-6">

     <table class=" ">
            <thead>
             

            </thead>
            <tbody>

<tr>
<td>
<div class="col-md-3">
              <input  value="" placeholder="Job Title" class="jobTitle" id="title" name="title" type="title">

</div>
 
</td>
<td>
<div class="col-md-3">
              <input  value="" placeholder="zipcode" class="zip" id="zip" name="zip" type="zip">

</div>
</td>
<td>
<div class="col-md-3">
<button type="button" onclick="myFunction()"> schedule</button>

</div>
</td>
<td>
 <div class="ctr">
   <button id="searchSubmit" type="submit" class="btn btn-sm btn-info blackText">Search</button>
    </div>
      
     </td>                  
</tr>
<tr>
<td></td><td></td>

<td>
<div class="popup">
<div class=" popuptext" id="schedule" >
  <div class="form-group col-sm-12 blackText" >
                            {{ csrf_field() }}
                         <input type="date" name="start_date" >
    <input type="date" name="end_date">

            
</div>
</div>
</td>
<td></td>
</tr>
            </tbody>
          </table>
          </div>
</form>

            </div>
