<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Laravel</title>
</head>

<body>
  
    @isset($gps)
    
    @endisset


    @isset($facing)
    @php
    $facingDegree=0;
    switch($facing)
    {
    case "NORTH":
    $facingDegree=270;
    break;
    case "EAST":
    $facingDegree=0;
    break;
    case "SOUTH":
    $facingDegree=90;
    break;
    case "WEST":
    $facingDegree=180;
    break;
    }
    @endphp
    @endisset
    <div class="container">
        <div class="row">
        <form method="post" action="/">
        @csrf
        <input type="text" id="command" name="command">
        <input type="submit" value="Send">
        <button type="button" onclick="updateCommand('PLACE 1,2,EAST')">Place</button>
        <button type="button" onclick="updateCommand('TURN_LEFT')">Left</button>
        <button type="button" onclick="updateCommand('TURN_RIGHT')">Right</button>
        <button type="button" onclick="updateCommand('FORWARD')">Forward</button>
        <button type="button" onclick="updateCommand('GPS_REPORT')">GPS</button>
    </form>
    @isset($gps)
    <h3>{{$gps}}</h3>
    @endisset
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="app">
                    <div class="game-container">
                        <div class="cells">
                            @for($i=6;$i>=0;$i--) <div class="cells-row">
                                @for($j=0;$j<7;$j++) <div class="cell cell-4" id="{{'x'.$j.'y'.$i}}">
                                    @isset($bikeLocation)
                                    @if($j==$bikeLocation['x'] && $i== $bikeLocation['y'])
                                    <img style="vertical-align: middle;width: 50px;height:50px; transform: rotate({{$facingDegree}}deg);" src="asset/arrow.png" />
                                    @endif
                                    @endisset
                            </div>
                            @endfor
                        </div>
                        @endfor
                    </div>
                </div>
               
            </div>
        </div>

    </div>

</body>
<script>
    function updateCommand(commandStr) {
        document.getElementById("command").value = commandStr;
    }
</script>

</html>