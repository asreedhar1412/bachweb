    @extends('layouts.app')

    @section('content')
        @include('includes.customersidebar')
        <script>

            $(document).ready(function() {
                $('#mybtn').click(function(e) {
                    var test1 = $('input[name=agreement]:checked').val();
                if (test1 == null) {
                    alert("Please Accept the Terms & Conditions");
                    e.preventDefault();
                }
                });
            });


        </script>
        <body background="images/webbginside.jpg">
        <div style="padding-left: 20px;width: 80%;float: right;">
            <div style="padding-right: 20px;" class="pull-right">
                <img class="pull-right" src="{{URL::asset('/images/logo.png')}}" alt="profile Pic" height="100" width="150">

            </div>
                <div>
                    <h1><b>Terms & Conditions</b></h1>
                </div>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('terms') }}">
        <p>
<br> <font size="3">
                  <i>   - All the customers should adhere to the rules and regulations.
            <br> <br>
                    - Customers will be responsible for the damage to the field property
            <br> <br>
                    - Fines can increase upto $500 for the damage occured and it will charged along with the field charges.
            <br> <br>
                - Time extension should be informed beforehand. Late extentions is not acceptable </i></font>
        </p> <br>

       <label class="checkbox-inline"> <input class="checkbox" type="checkbox" name="agreement" class="number" value="I agree" > I accept the terms and conditions</label><br>
        <br> <br> <br>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div>
                <a id="mybtn" href="{{ url('/paywithpaypal') }}"class="test btn btn-primary" style="width: 200px; height: 30px;"> Submit </a>
</div>
            </form>
        </div>
        </body>
    @endsection


