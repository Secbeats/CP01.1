<div class="" style="margin-top: 2%;">
    <center>
        <br/>
@if(session()->has('success'))
    <div class="alert alert-success register-form" role="alert" style="padding:15px;">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger register-form" role="alert" style="padding:15px;">
        {{ session()->get('error') }}
    </div>
@endif
</center>
</div>
