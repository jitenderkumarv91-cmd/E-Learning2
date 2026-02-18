<DOCTYPE html>
    <html>
        <head>
            <title></title>
            <style>
                td{
                    border:1px solid black;
                }
            </style>
        </head>
        <body>
            <table style="border: 2px solid black">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Uname</th>
                        <th>Password</th>
                        <th>Opetion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "connected.php";
                        $sql = "select * from login_pase";
                        $res = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_assoc($res)){
                            $I=$row['id'];
                            $Uname=$row['username'];
                            $Password=$row['password'];
                            echo            
                            '<tr>
                                <td>'.$I.'</td>
                                <td>'.$Uname.'</td>
                                <td>'.$Password.'</td>
                                <td>
                                <a href="update.php?updateid='.$I.'">Update</a>&nbsp
                                <a href="delete.php?deleteid='.$I.'">Delete</a>
                                
                                </td>
                            </tr>';
                        }
                    ?>
                </tbody>
            </table>
        </body>
    </html>