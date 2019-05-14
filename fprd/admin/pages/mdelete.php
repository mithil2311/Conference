<?php
require_once('../../connection.php');

if(isset($_GET['mid']))
{
    $mid =  base64_decode(urldecode($_GET['mid']));

    $sql = "DELETE FROM mentor_tb WHERE mid = $mid";
    $res = $conn->query($sql);
    if($res)
    {
        header("Location: http://localhost/fprd/admin/pages/mentorlist.php");
    }
}
else
{
    header("Location: http://localhost/fprd/admin/pages/mentorlist.php");
}



?>