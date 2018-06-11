<html>
<head></head>
<body style="background: white; color: black">
        <h1>Your bet has been placed</h1>
        <p class="lead">
            <h4>Your teams</h4>
            <ul>
            @foreach($tn as $team)
                <li>{{$team->teamname}}</li>
            @endforeach
            </ul>
        </p>
        <h5>Total : {{$total}}</h5>

</body>
</html>