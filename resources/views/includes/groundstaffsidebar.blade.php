
<div class="container" style="float: left;width: 20%; border-right: 2px solid black">
    <div style="height: 70%">
        <img class="center-block" src="{{URL::asset('/images/profilepic.jpg')}}" alt="profile Pic" height="200" width="200">
    </div>
    <div>
        <h4 style="text-align: center; color: black"> Ground Staff </h4>
    </div>
    <hr style="border-top: 1px solid #151515;">
    <div>
        <li style="list-style: none;">
            <ul><a href="{{ url('/groundshome') }}"class="btn btn-primary" style="width: 200px; height: 30px;">Home</a></ul>
            <ul><a href="{{ url('/taskchecklist') }}"class="btn btn-primary" style="width: 200px; height: 30px;">Task Checklist</a></ul>
            <ul><a href="{{ url('/fieldstatuses') }}"class="btn btn-primary" style="width: 200px; height: 30px;">Field Status</a></ul>
            <ul><a href="{{ url('/reports') }}"class="btn btn-primary" style="width: 200px; height: 30px;">Upload Reports</a></ul>
        </li>
    </div>
</div>