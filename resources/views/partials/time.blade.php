<div class="col-md-7 align-self-center">
    <ol class="breadcrumb">
        {​​​​​​​{​​​​​​​-- <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li> --}​​​​​​​}​​​​​​​
        <?php
        date_default_timezone_set("Asia/Calcutta");
        $date =date("d-m-Y");
        $time =date("h:i:sa");
        ?>
        <script>
            setInterval(function() {​​​​​​​
                var currentTime = new Date ( );    
                var currentHours = currentTime.getHours ( );   
                var currentMinutes = currentTime.getMinutes ( );   
                var currentSeconds = currentTime.getSeconds ( );
                currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;   
                currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;    
                var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";    
                currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;    
                currentHours = ( currentHours == 0 ) ? 12 : currentHours;    
                var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
                document.getElementById("timer").innerHTML = currentTimeString;
            }​​​​​​​, 1000);
            
        </script>
        <li class="breadcrumb-item active">{​​​​​​​{​​​​​​​ $date }​​​​​​​}​​​​​​​&nbsp; <span id="timer"></span></li>
    </ol>
</div>