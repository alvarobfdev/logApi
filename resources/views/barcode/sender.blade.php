<html>
    <head>
        <script>

            function sendForm() {
                document.getElementById("form").submit();
            }

            setTimeout(function() { document.getElementById('code').focus(); document.getElementById("code").attachEvent("onchange", sendForm);}, 10);





        </script>
    </head>
    <body onload="window.scrollTo(0, 0); document.form1.elements[0].focus(); return false;">
    <form method="post" id="form" name="form">
        <input id="code" type="text" name="code" onchange="sendForm()">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
    </body>
</html>

