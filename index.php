<html !DOCTYPE html5>
    <head>
        <meta charset="utf-8"/>
        
    </head>
        <body>
            <pre align="center">
            <b>PHP INFORMATION</b>
            <label><strong>IP REMOTE:</strong> <? echo $_SERVER["REMOTE_ADDR"]; ?></label>
            <label><strong>IP FORWARD:</strong> <? echo $_SERVER["HTTP_X_FORWARDED_FOR"]; ?></label>
            <label><strong>USER AGENT:</strong> <? echo $_SERVER["HTTP_USER_AGENT"]; ?></label>
            <label><strong>LANGUAGE:</strong> <? echo $_SERVER["HTTP_ACCEPT_LANGUAGE"]; ?></label>
            </br>
            <b>JS INFORMATION</b>
            <label id="java"></label>
            <label id="screen"></label>
            <label id="memory"></label>
            <label id="battery"></label>
            <label id="connection"></label>
            <label id="cookieEnabled"></label>
            <label id="localStorage"></label>
            <label id="history"></label>
            
            </pre>
            <script type="text/javascript">
            var userScreen = document.getElementById("screen");
            userScreen.innerHTML = "<strong>Screen: </strong>"+window.screen.width+"x"+window.screen.height;

            var userMemory = document.getElementById("memory");
            userMemory.innerHTML += "<strong>Memory: </strong>"+navigator.deviceMemory;

            var userBattery = document.getElementById("battery");
            userBattery.innerHTML += "<strong>Battery: </strong>"+navigator.battery;

            var userConnection = document.getElementById("connection");
            userConnection.innerHTML += "<strong>Connection: </strong>"+navigator.connection;

            var userJava = document.getElementById("java");
            userJava.innerHTML += "<strong>Java: </strong>"+window.navigator.javaEnabled();
            
            var userCookieEnabled = document.getElementById("cookieEnabled");
            userCookieEnabled.innerHTML += "<strong>CookieEnabled: </strong>"+navigator.cookieEnabled;

            var userlocalStorage = document.getElementById("localStorage");
            userlocalStorage.innerHTML += "<strong>localStorage: </strong>"+window.localStorage.length;

            var userHistory = document.getElementById("history");
            userHistory.innerHTML += "<strong>History: </strong>"+window.history.length;

  </script>
        </body>
</html>
