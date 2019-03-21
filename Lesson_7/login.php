<?
session_start();

include "config.php";
print_r($_SESSION["user_id"]);
if($_SESSION["user_id"]!=NULL) {
    session_unset();
    session_destroy();
    echo $_SESSION["user_id"];
}
else
{
    //session_id();
    $login = strip_tags($_POST['login']);
    $pass = strip_tags($_POST['pass']);

//$test = "sfsdfdg4534".$pass;
//$str = md5($test);
    $query = "select * from users where login='$login' and password='$pass'";

    $res = mysqli_query($connect,$query);
    $data = mysqli_fetch_assoc($res);
    $id_user = $data['id'];

    if(mysqli_num_rows($res)>0){
        echo "true";
//    echo $_SESSION["user_id"];
        $_SESSION['login']=$login;
        $_SESSION['pass']=$pass;
        $_SESSION['user_id'] = $data['id'];
    }

    else
        echo "Возникла ошибка при авторизации!";
}

