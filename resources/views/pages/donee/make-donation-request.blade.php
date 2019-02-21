@extends('layouts.app')
@section('content')
    <div class="inner_page_agile">

    </div>
    <!--//banner -->
    <!-- short-->
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">
            <ul class="short_ls">
                <li>
                    <a href="{{ url('/') }}">Dashboard</a>
                    <span>| |</span>
                </li>
                <li>Get Donation</li>
            </ul>
        </div>
    </div>
    <!-- //short-->
    <div class="register-form-main">
        <div class="container">
            <div class="title-div">
                <h3 class="tittle">
                    <span>G</span>et
                    <span>D</span>onation
                </h3>
                <div class="tittle-style">
                </div>
                @include('includes.messages')
                @if(isset($errors))
                    @foreach($errors as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="register-form">
                <form method="post" action="{{ url('/donee/request-donation') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="fields-grid">
                        <label class="anim">
                            <span>You Can Make Only One Donation Request.Your Request Will be Verified Before Approval.<br/><p style="color:red">***** Please Be Careful Before Making A Request *****</p></span><br/>
                        </label>
                        <div class="styled-input">
                            <input type="text" name="name" placeholder="Patients Name" required>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="purpose" placeholder="Patients Purpose of Donation" required>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="address" placeholder="Patients Address" required>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="contact" placeholder="Patients Contact No" required>
                        </div>
                        <div class="styled-input">
                            <input type="text" name="hospital" placeholder="Patients Hospital Name" required>
                        </div>
                        <div class="styled-input">
                            <input id="contact" name="amount" type="text" placeholder="Enter Amount Needed" required>
                        </div>
                        <label class="anim">
                            <span>First Picture Should Be Patients Current Picture.</span><br/>
                            <span>Upload Patients Scanned Documents(Multiple Files Can Be Selected.Format : .jpg/.jpeg/.png)</span>
                        </label>
                        <div class="styled-input">
                            <input id="contact" name="file[]" type="file" multiple required>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"></div>
                    <input type="hidden" name="donee_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="status" value="requested">
                    <input type="submit" value="Get Donated">
                </form>
            </div>
        </div>
    </div>
@endsection