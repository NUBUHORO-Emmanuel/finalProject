<html>
<style media="screen">
  body{
    background-color: #808080;
  }
  table{
    border: 1;
    background-color: #33905b;
  }
  textarea{
   font-size: 19%;
  }
</style>
    <body>

        <center>
   <h3><i> <b>Admin Login</b></I><h3>
<table border="1"><tr>



    <th>

        <form action="login" method="POST">
@csrf
<img src="/user2.png" alt="" ><br><h4>
        User Name    <input type="text" name="username" placeholder="user name"><br><p>
        password    <input type="password" name="password" placeholder="password"><br>
            <button type="submit"><i><b> Login</b></i></button></h4>

        </form>
      </th
      </tr>
</table>

    </center>
    </body>
</html>
