    @extends('layouts.app')

    @section('content')
        @include('includes.customersidebar')

        <div style="padding-left: 20px;width: 80%;float: right;">
                <div class="table-responsive">
                    <table style="width: 70%;" border="2">
                        <tr>
                            <td style="width: 20%">
                                <span class="text-center"><h2 style="color: black">Terms & Conditions:</h2></span>
                            </td>
                            <td style="width: 70%;color: black" class="text-center">

      <h1>
          Albuquerque Athletic Field Reservation System </h1>

                            </td>
                        </tr>
                    </table>


                </div>
            <form class="form-horizontal" role="form" method="POST" action="{{ route('terms') }}">
        <p>
<br> <font size="3">
                     - All the customers should adhere to the rules and regulations.
            <br> <br>
                    - Customers will be responsible for the damage to the field property
            <br> <br>
                    - Fines can increase upto $500 for the damage occured and it will charged along with the field charges.
            <br> <br>
                - Time extension should be informed beforehand. Late extentions is not acceptable </font>
        </p> <br>

        <input type="checkbox" name="agreement" class="number" value="I agree" > I accept the terms and conditions<br>
        <br> <br> <br>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <input id ="btn" type="submit" disabled href="/customer">
            </form>
            <script src="{{asset('js/jquery.min.js')}}"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('input:checkbox[name=agreement]').click(function() {
                        var checkval = $('input:checkbox[name=agreement]:checked').val();
                        $('#btn').prop('disabled', !(checkval == 'I agree'));
                    });
                });
            </script>
        </div>
    @endsection


