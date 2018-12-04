<div class="categories-section main-grid-border" id="mobilew3layouts">
    <div class="container" style="margin-top:20px;">
        <div class="category-list">
            <div id="parentVerticalTab">
                <div class="agileits-tab_nav">
                    @if(Auth::user()->role == 'donator')
                    <ul class="resp-tabs-list hor_1">
                        <a style="text-decoration: none;" href="{{ url('/donator/account-credit') }}"><li><i class="icon fa fa-mobile" aria-hidden="true"></i>Donate Fund</li></a>
                        <a style="text-decoration: none;" href="{{ url('/donator/transaction-history') }}"><li><i class="icon fa fa-lightbulb-o" aria-hidden="true"></i>Transaction History</li></a>
                        <a style="text-decoration: none;" href="{{ url('/donator/my-donees') }}"><li><i class="icon fa fa-phone" aria-hidden="true"></i>My Donee's</li></a>
                        <a style="text-decoration: none;" href="{{ url('/donator/donation-requests') }}"><li><i class="icon fa fa-connectdevelop" aria-hidden="true"></i>Donation Requests</li></a>
                        <a style="text-decoration: none;" href="{{ url('/donator/my-profile') }}"><li><i class="icon fa fa-flask" aria-hidden="true"></i>My Profile</li></a>
                        <a style="text-decoration: none;" href="{{ url('/how-it-works') }}"><li><i class="icon fa fa-tint" aria-hidden="true"></i>How It Works</li></a>
                        <a style="text-decoration: none;" href="{{ url('/terms') }}"><li><i class="icon fa fa-subway" aria-hidden="true"></i>Terms and Conditions</li></a>
                    </ul>
                    @endif
                        @if(Auth::user()->role == 'donee')
                            <ul class="resp-tabs-list hor_1">
                                <a style="text-decoration: none;" href="{{ url('/donee/request-donation') }}"><li><i class="icon fa fa-mobile" aria-hidden="true"></i>Make Donation Request</li></a>
                                <a style="text-decoration: none;" href="{{ url('/donee/transaction-history') }}"><li><i class="icon fa fa-lightbulb-o" aria-hidden="true"></i>Transaction History</li></a>
                                <a style="text-decoration: none;" href="{{ url('/donee/donators') }}"><li><i class="icon fa fa-phone" aria-hidden="true"></i>Donator's List</li></a>
                                <a style="text-decoration: none;" href="{{ url('/donee/donation-requests') }}"><li><i class="icon fa fa-connectdevelop" aria-hidden="true"></i>My Donation Requests</li></a>
                                <a style="text-decoration: none;" href="{{ url('/donee/my-profile') }}"><li><i class="icon fa fa-flask" aria-hidden="true"></i>My Profile</li></a>
                                <a style="text-decoration: none;" href="{{ url('/how-it-works') }}"><li><i class="icon fa fa-tint" aria-hidden="true"></i>How It Works</li></a>
                                <a style="text-decoration: none;" href="{{ url('/terms') }}"><li><i class="icon fa fa-subway" aria-hidden="true"></i>Terms and Conditions</li></a>
                            </ul>
                        @endif
                        @if(Auth::user()->role == 'admin')
                            <ul class="resp-tabs-list hor_1">
                                <a style="text-decoration: none;" href="{{ url('/admin/donators') }}"><li><i class="icon fa fa-mobile" aria-hidden="true"></i>Donators</li></a>
                                <a style="text-decoration: none;" href="{{ url('/admin/donees') }}"><li><i class="icon fa fa-lightbulb-o" aria-hidden="true"></i>Donees</li></a>
                                <a style="text-decoration: none;" href="{{ url('/admin/total-donation') }}"><li><i class="icon fa fa-phone" aria-hidden="true"></i>Total Donation</li></a>
                                <a style="text-decoration: none;" href="{{ url('/admin/approve-donation') }}"><li><i class="icon fa fa-connectdevelop" aria-hidden="true"></i>Approve Donation</li></a>
                                <a style="text-decoration: none;" href="{{ url('/admin/withdrawal') }}"><li><i class="icon fa fa-connectdevelop" aria-hidden="true"></i>Withdrawal Fund</li></a>
                            </ul>
                        @endif
                </div>
                <div class="resp-tabs-container hor_1">
