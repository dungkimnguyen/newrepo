@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
    <div class="row">
        @if(!$user->agency)
        <div class="col-md-12">
           create agency info
<!-- javascript:createComp() 



 -->
                        <form id="agencyForm" class="form-horizontal settingsForm" data-type="agency"  method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="new" value="true">
                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="companyName">Agency Name:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF" id="name" placeholder="Agency Name" name="name" required="required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="companyName">Industry:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF" id="industry" placeholder="Industry" name="industry" required="required">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="email">Agency Email:</label>
                                <div class="col-lg-8">
                                     <input id="email" type="email" class="form-control" name="email" value="" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="phone">Phone:</label>
                                <div class="col-lg-8">
                                      <input type="tel" class="form-control input-md reqF reset_5 phone_f" id="phone" placeholder="Phone Number" name="phone" required="required" value="">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="add1">Website:</label>
                                <div class="col-lg-8">
                                    <input type="url" class="form-control" name="url"  value="" required='required'  id="siteUrl" placeholder="Link to your website url" pattern="https?://.+">
                                </div>
                            </div>

                        <div class="form-group">
                                <label class="control-label col-sm-4 small" for="add1">Address Line 1:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4 addr_f" id="add1" placeholder="Address line 1" name="add1" required="required" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="add2">Address Line 2:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reset_4" id="add2" placeholder="Address Line 2" name="add2" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="country">Country:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4" id="country" placeholder="Country" name="country" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="state">State/Province:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4" id="state" placeholder="State / Province" name="state" required="required" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="zip">Zip Code:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4" id="zip" placeholder="Zip Code" name="zip" required="required" value="">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="about">About:</label>
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
           edit agency info
                                   <form id="agencyForm" class="form-horizontal settingsForm" data-type="agency"  method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="new" value="false">
                            <input type="hidden" name="id" value="{{$agency->id}}">
                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="companyName">Agency Name:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF" id="name" placeholder="Agency Name" name="name" required="required" value="{{$agency->name}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="companyName">Industry:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF" id="industry" placeholder="Industry" name="industry" required="required" value="{{$agency->industry}}">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="email">Agency Email:</label>
                                <div class="col-lg-8">
                                     <input id="email" type="email" class="form-control" name="email" value="{{$agencyInfo->email}}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="phone">Phone:</label>
                                <div class="col-lg-8">
                                      <input type="tel" class="form-control input-md reqF reset_5 phone_f" id="phone" placeholder="Phone Number" name="phone" required="required" value="{{$agencyInfo->phone}}">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="add1">Website:</label>
                                <div class="col-lg-8">
                                    <input type="url" class="form-control" name="url" value="{{$agencyInfo->website}}" required='required'  id="siteUrl" placeholder="Link to your website url" pattern="https?://.+">
                                </div>
                            </div>
                            <?php $address = json_decode($agencyInfo->address)?>
                        <div class="form-group">
                                <label class="control-label col-sm-4 small" for="add1">Address Line 1:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4 addr_f" id="add1" placeholder="Address line 1" name="add1" required="required" value="{{$address[0] }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="add2">Address Line 2:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reset_4" id="add2" placeholder="Address Line 2" name="add2" value="{{$address[1] }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="country">Country:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4" id="country" placeholder="Country" name="country" required="required" value="{{$address[2] }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="state">State/Province:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4" id="state" placeholder="State / Province" name="state" required="required" value="{{$address[3] }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="zip">Zip Code:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control input-md reqF reset_4" id="zip" placeholder="Zip Code" name="zip" required="required" value="{{$address[4] }}">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-4 small" for="about">About:</label>
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
    </div>
</div>
@endsection
