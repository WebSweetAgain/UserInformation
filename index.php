<html !DOCTYPE html5>
    <head>
        <meta charset="utf-8"/>
        <!--
        Устанавливам кодировку utf-8 чтобы нормально отображалась кириллица.
        !-->
        
    </head>
        <body>
            <pre align="center">
            <b>PHP INFORMATION</b>
            <!--
            Получаем IP пользователя
            !-->
            <label><strong>IP REMOTE:</strong> <? echo $_SERVER["REMOTE_ADDR"]; ?></label>
            <!--
            Получаем IP пользователя или IP прокси серверов
            !-->
            <label><strong>IP FORWARD:</strong> <? echo $_SERVER["HTTP_X_FORWARDED_FOR"]; ?></label>
            <!--
            Получаем User-Agent который наш браузер передаёт при подключении к любому сайту с информацией о самом браузере и платформе.
            !-->
            <label><strong>USER AGENT:</strong> <? echo $_SERVER["HTTP_USER_AGENT"]; ?></label>
            <!--
            Получаем Language предположительно выбраным пользователем при посещение сайтов ru/eu/fr и т.д.
            !-->
            <label><strong>LANGUAGE:</strong> <? echo $_SERVER["HTTP_ACCEPT_LANGUAGE"]; ?></label>
            </br>
            <b>JS INFORMATION</b>
            <!--
            Получаем включен Java у пользователя или нет
            !-->
            <label id="java"></label>
            <!--
            Получаем размер окна/экрана с которого посетили сайт.
            !-->
            <label id="screen"></label>
            <!--
            Получаем информацию о оперативной памяти у пользователя который посетил сайт.
            !-->
            <label id="memory"></label>
            <!--
            Получаем информацию о статусе батареи пользователя который посетил сайт.
            !-->
            <label id="battery"></label>
            <!--
            Получаем информацию о статусе сети пользователя который посетил сайт.
            !-->
            <label id="connection"></label>
            <!--
            Получаем информацию о поддержки Cookie браузером пользователя который посетил сайт.
            !-->
            <label id="cookieEnabled"></label>
            <!--
            Получаем информацию о количестве хранимой данных в Storage браузера пользователя который посетил сайт.
            !-->
            <label id="localStorage"></label>
            <!--
            Получаем информацию о количестве страниц сделанных до этой страницы пользователем который посетил сайт.
            !-->
            <label id="history"></label>
            
            </pre>
            <script type="text/javascript">
            //Выводим информацию о размерах экрана
            var userScreen = document.getElementById("screen");
            userScreen.innerHTML = "<strong>Screen: </strong>"+window.screen.width+"x"+window.screen.height;
            
            //Выводим информацию о оперативной памяти
            var userMemory = document.getElementById("memory");
            userMemory.innerHTML += "<strong>Memory: </strong>"+navigator.deviceMemory;
            
            //Выводим информацию о батареи
            var userBattery = document.getElementById("battery");
            userBattery.innerHTML += "<strong>Battery: </strong>"+navigator.battery;
            
            //Выводим информацию о сети
            var userConnection = document.getElementById("connection");
            userConnection.innerHTML += "<strong>Connection: </strong>"+navigator.connection;
            
            //Выводим информацию о поддержке Java в браузере
            var userJava = document.getElementById("java");
            userJava.innerHTML += "<strong>Java: </strong>"+window.navigator.javaEnabled();
            
            //Выводим информацию о поддержке Cookie в браузере
            var userCookieEnabled = document.getElementById("cookieEnabled");
            userCookieEnabled.innerHTML += "<strong>CookieEnabled: </strong>"+navigator.cookieEnabled;
            
            //Выводим информацию о количестве хранимых данных в Storage браузера
            var userlocalStorage = document.getElementById("localStorage");
            userlocalStorage.innerHTML += "<strong>localStorage: </strong>"+window.localStorage.length;
            
            //Выводим информацию о количестве страниц
            var userHistory = document.getElementById("history");
            userHistory.innerHTML += "<strong>History: </strong>"+window.history.length;
                
            //By S1m3ntr1ya

  </script>
        </body>
</html>
