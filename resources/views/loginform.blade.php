<html>
    <body>
        <form action="login" method="POST">
            @csrf
            <input type="text" name="username" placeholder="username"><br>
            <input type="password" name="password" placeholder="password"><br>
            <button type="submit">login</button>
        </form>
    </body>
</html>
