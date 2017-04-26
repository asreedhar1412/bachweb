
<div class="container" style="float: left;width: 20%; border-right: 2px solid black">
   <div style="height: 70%">
       <img class="center-block" src="{{URL::asset('/images/profilepic.jpg')}}" alt="profile Pic" height="200" width="200">
   </div>
    <div>
        <h4 style="text-align: center; color: black"> Administrator </h4>
    </div>
    <hr style="border-top: 1px solid #151515;">

    <div>
        <li style="list-style: none;">
            <ul><a href="{{ url('/home') }}" class="btn btn-primary" style="width: 200px; height: 30px;">Home</a></ul>
            <ul><a href="{{ url('/addremovefields') }}" class="btn btn-primary" style="width: 200px; height: 30px;">Add / Remove Fields</a></ul>
            <!--<ul><a href="" class="btn btn-primary" style="width: 200px; height: 30px;">View Customer Details</a></ul>-->
            <ul><a href="{{ url('/listoffields') }}" class="btn btn-primary" style="width: 200px; height: 30px;">List of the Fields</a></ul>
            <ul><a href="{{ url('/reports') }}" class="btn btn-primary" style="width: 200px; height: 30px;">View Reports</a></ul>
        </li>
    </div>
</div>
