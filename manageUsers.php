<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css"> 
    <title>manage user</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.html">Ahmed</a></p>
        </div>

        <div class="nav-links">
            <div class="dropdown">
                <a class="dropdown-text" href="#">Ahmed</a>
                <div class="dropdown-content">
                    <a href="home.html">Profile</a>
                    <a href="includes/logout.inc.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>AHMED </td>
                <td>dahalanahmed@gmail.com</td>
                <td>ahmed123456789</td>
                <td>User</td>
                <td>2023-5-16</td>
            </tr>
            <tr>
                <td>2</td>
                <td>ISMAiL ALI</td>
                <td>ISMAILALI@hotmail.com</td>
                <td>12345sad48</td>
                <td>Admin</td>
                <td>2012-3-12</td>
            </tr>
        </tbody>
    </table>
    <style>
        table {
    border-collapse: collapse;
    width: 100%;
}

table th,
table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

 
table th:first-child,
table td:first-child {
    border-right: 2px solid #000;
    font-weight: bold;
}


table th {
    background-color: #f2f2f2;
}

table tr:first-child {
    border-top: 2px solid #ddd;
}
    </style>
</body>
</html>
