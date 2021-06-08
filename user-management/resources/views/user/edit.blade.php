<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create User</title>
</head>
<body>
    <form method="post">
        <center>
            <fieldset style="width : 350px;">
                <legend><b>Registration</b></legend>
                    <table border="0">
                        <tr>
                            <td>ID</td>
                            <td>: <input type="text" name="id" value="{{$user[0]}}"></td>
                        </tr>
                        <tr>
                            <td>User Name</td>
                            <td>: <input type="text" name="uname" value="{{$user[1]}}"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: <input type="email" name="mail" value="{{$user[3]}}"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>: <input type="text" name="pass" value="{{$user[2]}}"></td>
                        </tr>
                        <tr>
                            <td>Type</td>
                            <td>: <input type="text" name="type" value="{{$user[4]}}"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                                <input type="submit" name="submit" value="Edit user">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="left">
                                <a href="/home">Home |</a>
                                <a href="/logout">Logout</a>
                            </td>
                        </tr>
                    </table>
            </fieldset>
        </center>
    </form>
</body>
</html>