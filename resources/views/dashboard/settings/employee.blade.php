@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">

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

                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="email">Email:</label>
                                <div class="col-lg-8">
                                     <input id="email" type="email" class="form-control" name="email" value="{{$user->employee->email}}" required>
                                </div>
                            </div>

                                                       <div class="form-group">
                                <label class="control-label col-sm-2 small" for="phone">Phone:</label>
                                <div class="col-lg-8">
                                      <input type="tel" class="form-control input-md reqF reset_5 phone_f" id="phone" placeholder="Phone Number" name="phone"   value="{{$user->employee->phone}}">
                                </div>
                            </div>

                                <?php $address = json_decode($user->employee->address)?>
                        <div class="form-group">
                                <label class="control-label col-sm-2 small" for="add1">Address Line 1:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4 addr_f" id="add1" placeholder="Address line 1" name="add1"   value="{{$address[0] }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="add2">Address Line 2:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reset_4" id="add2" placeholder="Address Line 2" name="add2" value="{{$address[1] }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="country">City:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4" id="country" placeholder="Country" name="country"   value="{{$address[2] }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="state">State:</label>
                                <div class="col-lg-8">

<select name="state" id="{{$address[3] }}">
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="DC">District Of Columbia</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WA">Washington</option>
    <option value="WV">West Virginia</option>
    <option value="WI">Wisconsin</option>
    <option value="WY">Wyoming</option>
</select>               


                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="zip">Zip Code:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4" id="zip" placeholder="Zip Code" name="zip"   value="{{$address[4] }}">
                                </div>
                            </div>


                <div class="ctr">
                   <button id="employeeUpdate" type="submit" class="btn btn-sm btn-info">Update</button>
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
@endsection
