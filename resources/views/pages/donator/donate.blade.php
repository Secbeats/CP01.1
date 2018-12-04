@extends('layouts.app')
@section('content')
<div>
    <div class="tabs-box">
        <img src="{{ asset('/assets/images/mobile.png') }}" class="w3ls-mobile" alt="" data-pin-nopin="true">
        <div class="clearfix"> </div>
        <div class="tab-grids">
            <div id="tab1" class="tab-grid">
                <div class="login-form">
                    <form action="{{ url('/donator/account-credit') }}" method="post" id="signup">
                        @csrf
                        <div class="form-group">
                            <label for="gender" class="col-sm-3 control-label">
                                Payment Medium</label>
                            <div class="col-sm-9">
                                <label class="radio-inline"><input type="radio" name="medium" value="bkash" checked> Bkash</label>
                                <label class="radio-inline"><input type="radio" name="medium" value="rocket"> Rocket</label>
                            </div>
                        </div>
                        <div class="clearfix"></div><br/>
                        <ol>
                            <li>
                                <h4>Enter your mobile number</h4>
                                <input type="text" id="tel" name="mobile_no"  placeholder="Enter Mobile Number" required="required" />
                            </li>
                            <li>
                                <h4>Enter your pin</h4>
                                <input type="password" id="tel" name="pin_no" placeholder="Enter Pin Number" required="required" />
                            </li>
                            <li>
                                <div class="mobile-right ">
                                    <h4>How Much To Donate?</h4>
                                    <div class="mobile-rchge">
                                        <input type="text" placeholder="Enter amount" name="amount" required="required"  />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="user_role" value="donator">
                                <input type="hidden" name="type" value="credit">
                                <input type="hidden" name="status" value="requested">
                                <input type="hidden" name="reference" value="{{ Auth::user()->id }}">
                                <button type="submit" class="submit">Add Fund</button>
                                <button type="reset" class="submit">Cancel</button>
                            </li>
                        </ol>
                    </form>
                </div>
            </div>
            <div id="tab2" class="tab-grid">
                <div class="login-form">
                    <form action="pay.html" method="post" id="signup">
                        <ol>
                            <li>
                                <h4>Enter your mobile number</h4>
                                <input type="tel" id="tel" name="tel" pattern="\d{10}" placeholder="Enter Mobile Number" required="required" />
                            </li>
                            <li>
                                <h4>Enter your pin</h4>
                                <input type="password" id="tel" name="tel" pattern="\d{10}" placeholder="Enter Pin Number" required="required" />
                            </li>
                            <li>
                                <div class="mobile-right ">
                                    <h4>How Much To Donate?</h4>
                                    <div class="mobile-rchge">
                                        <input type="text" placeholder="Enter amount" name="amount" required="required"  />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li>
                                <input type="submit" class="submit" value="Add Fund" />
                            </li>
                        </ol>
                    </form>

                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- script -->
    <script>
        $(document).ready(function() {
            $("#tab2").hide();
            $("#tab3").hide();
            $("#tab4").hide();
            $(".tabs-menu a").click(function(event){
                event.preventDefault();
                var tab=$(this).attr("href");
                $(".tab-grid").not(tab).css("display","none");
                $(tab).fadeIn("slow");
            });
        });
    </script>
</div>
@endsection