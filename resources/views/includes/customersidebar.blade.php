
<div class="container" style="float: left;width: 20%;border-right: 2px solid black">
    <div style="height: 70%">
        <img class="center-block" src="{{URL::asset('/images/profilepic.jpg')}}" alt="profile Pic" height="200" width="200">
    </div>
    <div>
        <h4 style="text-align: center; color: black"> Customer </h4>
    </div>
    <hr style="border-top: 1px solid #151515;">
    <div>
        <li style="list-style: none;">
            <ul><a href="{{ url('/customer') }}"class="btn btn-primary" style="width: 200px; height: 30px;">Home</a></ul>
            <ul><a class="btn btn-primary" style="width: 200px; height: 30px;">List of the Fields</a></ul>
            <ul><a href="{{ url('/availabilityoffields') }}" class="btn btn-primary" style="width: 200px; height: 30px;">Availability of Fields</a></ul>
            <ul><a class="btn btn-primary" style="width: 200px; height: 30px;">Make a payment</a></ul>
            <ul><a class="btn btn-primary" style="width: 200px; height: 30px;">Terms & Conditions</a></ul>
            <ul><a class="btn btn-primary" style="width: 200px; height: 30px;">Feedback</a></ul>
        </li>
    </div>
</div>