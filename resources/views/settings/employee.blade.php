@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
    <div class="row">
        @if(!$user->employee)
        <div class="col-md-12 ">
          The Agency has yet to update your info please check in Later.
           
        </div>
        @else
        <div class="col-md-8 ">
           edit employee info or view offers<br>
             <form id="emplyeeForm" class="form-horizontal settingsForm" data-type="employee"  method="post">
                {{ csrf_field() }}
                @if(!isset($schedule))
                new
                    <input type="hidden" name="new" value="true">
                  <div class="form-group">
                    <label class="control-label col-sm-4 small" for="companyName">Sunday:</label>
                    <div class="col-lg-8">
                          <input type="checkbox" name="sunday_morning" value="true" > Morning
                          <input type="checkbox" name="sunday_evening" value="true"> Evening
                          <input type="checkbox" name="sunday_night" value="true"> Night
                    </div>
                </div>

              <div class="form-group">
                    <label class="control-label col-sm-4 small" for="companyName">Monday:</label>
                    <div class="col-lg-8">
                          <input type="checkbox" name="monday_morning" value="true" > Morning
                          <input type="checkbox" name="monday_evening" value="true"> Evening
                          <input type="checkbox" name="monday_night" value="true"> Night
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4 small" for="companyName">Tuesday:</label>
                    <div class="col-lg-8">
                          <input type="checkbox" name="tuesday_morning" value="true" > Morning
                          <input type="checkbox" name="tuesday_evening" value="true"> Evening
                          <input type="checkbox" name="tuesday_night" value="true"> Night
                    </div>
                </div>

              <div class="form-group">
                    <label class="control-label col-sm-4 small" for="companyName">Wednesday:</label>
                    <div class="col-lg-8">
                          <input type="checkbox" name="wednesday_morning" value="true" > Morning
                          <input type="checkbox" name="wednesday_evening" value="true"> Evening
                          <input type="checkbox" name="wednesday_night" value="true"> Night
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-4 small" for="companyName">Thursday:</label>
                    <div class="col-lg-8">
                          <input type="checkbox" name="thursday_morning" value="true" > Morning
                          <input type="checkbox" name="thursday_evening" value="true"> Evening
                          <input type="checkbox" name="thursday_night" value="true"> Night
                    </div>
                </div>

              <div class="form-group">
                    <label class="control-label col-sm-4 small" for="companyName">Friday:</label>
                    <div class="col-lg-8">
                          <input type="checkbox" name="friday_morning" value="true" > Morning
                          <input type="checkbox" name="friday_evening" value="true"> Evening
                          <input type="checkbox" name="friday_night" value="true"> Night
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4 small" for="companyName">Saturday:</label>
                    <div class="col-lg-8">
                          <input type="checkbox" name="saturday_morning" value="true" > Morning
                          <input type="checkbox" name="saturday_evening" value="true"> Evening
                          <input type="checkbox" name="saturday_night" value="true"> Night
                    </div>
                </div>


                @else
              
                 <div class="form-group">
                    <label class="control-label col-sm-4 small" for="companyName">Sunday:</label>
                    <div class="col-lg-8">
                          <input type="checkbox" name="sunday_morning" value="true" @if($schedule[0][0][1] == "true") checked @endif > Morning
                          <input type="checkbox" name="sunday_evening" value="true" @if($schedule[0][1][1] == "true") checked @endif > Evening
                          <input type="checkbox" name="sunday_night" value="true" @if($schedule[0][2][1] == "true") checked @endif > Night
                    </div>
                </div>

              <div class="form-group">
                    <label class="control-label col-sm-4 small" for="companyName">Monday:</label>
                    <div class="col-lg-8">
                          <input type="checkbox" name="monday_morning" value="true"  @if($schedule[1][0][1] == "true") checked @endif > Morning
                          <input type="checkbox" name="monday_evening" value="true" @if($schedule[1][1][1] == "true") checked @endif > Evening
                          <input type="checkbox" name="monday_night" value="true" @if($schedule[1][2][1] == "true") checked @endif > Night
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4 small" for="companyName">Tuesday:</label>
                    <div class="col-lg-8">
                          <input type="checkbox" name="tuesday_morning" value="true"  @if($schedule[2][0][1] == "true") checked @endif > Morning
                          <input type="checkbox" name="tuesday_evening" value="true" @if($schedule[2][1][1] == "true") checked @endif > Evening
                          <input type="checkbox" name="tuesday_night" value="true" @if($schedule[2][2][1] == "true") checked @endif > Night
                    </div>
                </div>

              <div class="form-group">
                    <label class="control-label col-sm-4 small" for="companyName">Wednesday:</label>
                    <div class="col-lg-8">
                          <input type="checkbox" name="wednesday_morning" value="true"  @if($schedule[3][0][1] == "true") checked @endif > Morning
                          <input type="checkbox" name="wednesday_evening" value="true" @if($schedule[3][1][1] == "true") checked @endif > Evening
                          <input type="checkbox" name="wednesday_night" value="true" @if($schedule[3][2][1] == "true") checked @endif > Night
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-4 small" for="companyName">Thursday:</label>
                    <div class="col-lg-8">
                          <input type="checkbox" name="thursday_morning" value="true" @if($schedule[4][0][1] == "true") checked @endif  > Morning
                          <input type="checkbox" name="thursday_evening" value="true" @if($schedule[4][1][1]== "true") checked @endif > Evening
                          <input type="checkbox" name="thursday_night" value="true" @if($schedule[4][2][1] == "true") checked @endif > Night
                    </div>
                </div>

              <div class="form-group">
                    <label class="control-label col-sm-4 small" for="companyName">Friday:</label>
                    <div class="col-lg-8">
                          <input type="checkbox" name="friday_morning" value="true" @if($schedule[5][0][1]== "true") checked @endif  > Morning
                          <input type="checkbox" name="friday_evening" value="true" @if($schedule[5][1][1]== "true") checked @endif > Evening
                          <input type="checkbox" name="friday_night" value="true" @if($schedule[5][2][1] == "true") checked @endif > Night
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4 small" for="companyName">Saturday:</label>
                    <div class="col-lg-8">
                          <input type="checkbox" name="saturday_morning" value="true"  @if($schedule[6][0][1] == "true") checked @endif > Morning
                          <input type="checkbox" name="saturday_evening" value="true" @if($schedule[6][1][1] == "true") checked @endif > Evening
                          <input type="checkbox" name="saturday_night" value="true" @if($schedule[6][2][1] == "true") checked @endif > Night
                    </div>
                </div>

    
                @endif
               

                <div class="ctr">
                   <button id="agencySubmit" type="submit" class="btn btn-sm btn-info">Create</button>
                </div>
            </form>
        </div>

        @foreach($user->employee->offers as $offer)
        <a href="/viewOffer/{{$offer-> id}}">View Offer {{$offer-> id}}</a><br>
        @endforeach

        @endif
    </div>

    <script src="{{ asset('js/settings.js') }}"></script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
