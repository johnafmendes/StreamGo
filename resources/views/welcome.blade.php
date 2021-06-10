<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>StreamGo</title>
        <script>
            function show() {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var table = document.getElementById("data");
                    var result = JSON.parse(this.responseText);
                    result.forEach(element => {
                        var row = table.insertRow(0);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1); 
                        cell1.innerHTML = element.name;
                        element.messages.forEach(message => {
                            cell2.innerHTML += message.message+'<br><br>';
                        });
                    });
                }
                };
                xmlhttp.open("GET", "\\api\\author", true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body class="antialiased">
        <p>
            Show Author and its messages:
            <button onclick="show()">Show</button>
        </p>
        <table id="data" border="1"></table>
    </body>
</html>
