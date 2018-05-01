@extends('layouts.dashboard')

@section('content')
<div class="container" style="margin-top: 2em">
    <div class="row">
        <div class="col-md-12">

    <div class="row">
        @if(!$user->agency)



        <div class="col-md-12">
       
<!-- javascript:createComp() 



 -->
                        <form id="agencyForm" class="form-horizontal settingsForm" data-type="agency"  method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="new" value="true">
                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="companyName">Agency Name:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF" id="name" placeholder="Agency Name" name="name" required="required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="companyName">Industry:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF" id="industry" placeholder="Industry" name="industry" required="required">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="email">Agency Email:</label>
                                <div class="col-lg-8">
                                     <input id="email" type="email" class="form-control" name="email" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="phone">Phone:</label>
                                <div class="col-lg-8">
                                      <input type="tel" class="form-control input-md reqF reset_5 phone_f" id="phone" placeholder="Phone Number" name="phone" required="required" value="">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="add1">Website:</label>
                                <div class="col-lg-8">
                                    <input type="url" class="form-control" name="url"  value="" required='required'  id="siteUrl" placeholder="Link to your website url" pattern="https?://.+">
                                </div>
                            </div>

                        <div class="form-group">
                                <label class="control-label col-sm-2 small" for="add1">Address Line 1:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4 addr_f" id="add1" placeholder="Address line 1" name="add1" required="required" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="add2">Address Line 2:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reset_4" id="add2" placeholder="Address Line 2" name="add2" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="country">City:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4" id="country" placeholder="Country" name="country" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="state">State:</label>
                                <div class="col-lg-8">
<select name="state" >
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
                                    <input type="text" class="form-control input-md reqF reset_4" id="zip" placeholder="Zip Code" name="zip" required="required" value="">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="about">About:</label>
                                <div class="col-lg-8 txt3">
                                    <textarea class="reqF autoExpand" required="required" id="about" name="about" data-limit='600' placeholder="About your company..."></textarea>
                                </div>
                            </div>



                            <div class="ctr">
                               <button id="agencySubmit" type="submit" class="btn btn-sm btn-info">Create</button>
                            </div>
                        </form>


        </div>
        @else
        <div class="col-md-12 ">

                                   <form id="agencyForm" class="form-horizontal settingsForm" data-type="agency"  method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="new" value="false">
                            <input type="hidden" name="id" value="{{$agency->id}}">
                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="companyName">Agency Name:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF" id="name" placeholder="Agency Name" name="name" required="required" value="{{$agency->name}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="companyName">Industry:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF" id="industry" placeholder="Industry" name="industry" required="required" value="{{$agency->industry}}">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="email">Agency Email:</label>
                                <div class="col-lg-8">
                                     <input id="email" type="email" class="form-control" name="email" value="{{$agencyInfo->email}}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="phone">Phone:</label>
                                <div class="col-lg-8">
                                      <input type="tel" class="form-control input-md reqF reset_5 phone_f" id="phone" placeholder="Phone Number" name="phone" required="required" value="{{$agencyInfo->phone}}">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="add1">Website:</label>
                                <div class="col-lg-8">
                                    <input type="url" class="form-control" name="url" value="{{$agencyInfo->website}}" required='required'  id="siteUrl" placeholder="Link to your website url" pattern="https?://.+">
                                </div>
                            </div>
                            <?php $address = json_decode($agencyInfo->address)?>
                        <div class="form-group">
                                <label class="control-label col-sm-2 small" for="add1">Address Line 1:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4 addr_f" id="add1" placeholder="Address line 1" name="add1" required="required" value="{{$address[0] }}">
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
                                    <input type="text" class="form-control input-md reqF reset_4" id="country" placeholder="Country" name="country" required="required" value="{{$address[2] }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="state">State:</label>
                                <div class="col-lg-8">
<select name="state" id="{{$address[3]}}">
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
                                    <input type="text" class="form-control input-md reqF reset_4" id="zip" placeholder="Zip Code" name="zip" required="required" value="{{$address[4] }}">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2 small" for="about">About:</label>
                                <div class="col-lg-8 txt3">
                                    <textarea class="reqF autoExpand" required="required" id="about" name="about" data-limit='600' placeholder="About your company...">{{$agencyInfo->about}}</textarea>
                                </div>
                            </div>



                            <div class="ctr">
                               <button id="agencySubmit" type="submit" class="btn btn-sm btn-info">Create</button>
                            </div>
                        </form>
        </div>
        @endif
    </div>

    <script src="{{ asset('js/settings.js') }}"></script>

     
        </div>
    </div>
</div>
@endsection
