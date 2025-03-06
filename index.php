 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP0 HRT</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to bottom, #55CDFC, #F7A8B8, #FFF, #F7A8B8, #55CDFC);
            font-family: Arial, sans-serif;
            text-align: center;
        }
        #timeElapsed, h1, h2 {
            font-size: 2em;
            color: #000000; /* Black color */
            text-shadow: 2px 2px 4px #FFFFFF; /* Light shadow for contrast */
        }
        h1 {
            font-size: 2.5em;
        }
    </style>
    <script>
        function updateTime() {
            var startDate = new Date('2023-06-29T15:00:00Z'); // Start date and time set to 3 PM UTC
            var currentDate = new Date();
            var diff = currentDate - startDate;

            var years = Math.floor(diff / (1000 * 60 * 60 * 24 * 365));
            diff -= years * 1000 * 60 * 60 * 24 * 365;
            var days = Math.floor(diff / (1000 * 60 * 60 * 24));
            diff -= days * 1000 * 60 * 60 * 24;
            var hours = Math.floor(diff / (1000 * 60 * 60));
            diff -= hours * 1000 * 60 * 60;
            var minutes = Math.floor(diff / (1000 * 60));
            diff -= minutes * 1000 * 60;
            var seconds = Math.floor(diff / 1000);

            document.getElementById('timeElapsed').innerHTML = 
                years + " years, " + 
                days + " days, " + 
                hours + " hours, " + 
                minutes + " minutes, " + 
                seconds + " seconds";
        }

        setInterval(updateTime, 1000);
    </script>
</head>
<body onload="updateTime()">
    <div>
        <h1>HRT started on June 29, 2023, 3PM ⚕️💊👩 (HRT):</h1>
        <p id="timeElapsed"></p>
    </div>
</body>
</html>