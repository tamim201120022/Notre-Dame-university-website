<?php
    session_start();
    require 'dbcon.php';

//notice delete start
    if(isset($_POST['delete_notice']))
    {
        $notice_id= mysqli_real_escape_string($con, $_POST['delete_notice']);

        $query="DELETE FROM notice_board WHERE notice_id='$notice_id' ";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['message']="Notice deleted Successfully";
            header("Location: admin-allnoticeshow.php");
            exit(0);
        }
        else{
            $_SESSION['message']="Notice not deleted Successfully";
            header("Location: admin-allnoticeshow.php");
            exit(0);
        }
    }
//notice delete ends


//Notice Add notice start
    if(isset($_POST['publish_notice']))
    {
        $ndate = mysqli_real_escape_string ($con, $_POST['ndate']);
        $ndetails = mysqli_real_escape_string ($con, $_POST['ndetails']);
        $nimg = mysqli_real_escape_string ($con, $_POST['nimg']);

        $query= "INSERT INTO notice_board (notice_date, details, notice_img) 
        VALUES ('$ndate','$ndetails','$nimg')";

        $query_run=mysqli_query($con, $query);

        if($query_run){
            $_SESSION['message']="Notice Created Successfully";
            header("Location: admin-allnoticeshow.php");
            exit(0);
        }
        else{
            $_SESSION['message']="Notice not Created Successfully";
            header("Location: admin-allnoticeshow.php");
            exit(0);
        }
    }
//Notice Add notice ends


//Notice Update notice start
    if(isset($_POST['Update_notice']))
    {
        $nid = mysqli_real_escape_string ($con, $_POST['notice_id']);
        $ndate = mysqli_real_escape_string ($con, $_POST['ndate']);
        $ndetails = mysqli_real_escape_string ($con, $_POST['ndetails']);
        $nimg = mysqli_real_escape_string ($con, $_POST['nimg']);

        $query= "UPDATE notice_board SET  notice_date= '$ndate', details= '$ndetails', notice_img= '$nimg' 
        WHERE notice_id='$nid' ";

        $query_run= mysqli_query($con, $query);

        if($query_run)
        {
            $_SESSION['message']="Notice Updated Successfully";
            header("Location: admin-allnoticeshow.php");
            exit(0);
        }
        else
        {
            $_SESSION['message']="Notice not Updated Successfully";
            header("Location: admin-allnoticeshow.php");
            exit(0);
        }

    }
//Notice Update notice end


//News update start
    if(isset($_POST['Update_news']))
    {
        $lid = mysqli_real_escape_string ($con, $_POST['latest_id']);
        $limg = mysqli_real_escape_string ($con, $_POST['limg']);
        $ldate = mysqli_real_escape_string ($con, $_POST['ldate']);
        $ldesc = mysqli_real_escape_string ($con, $_POST['ldesc']);
        $lfdesc = mysqli_real_escape_string ($con, $_POST['lfdesc']);

        $query= "UPDATE latest_news_board SET  	latest_image= '$limg', latest_date= '$ldate', 
        latest_desc= '$ldesc', latest_full_desc= '$lfdesc' WHERE latest_id ='$lid' ";

        $query_run= mysqli_query($con, $query);

        if($query_run)
        {
            $_SESSION['message']="News Updated Successfully";
            header("Location: admin-alllatestnewsshow.php");
            exit(0);
        }
        else
        {
            $_SESSION['message']="News not Updated Successfully";
            header("Location: admin-alllatestshow.php");
            exit(0);
        }

    }
//News update ends


//news delete start
if(isset($_POST['delete_latest']))
{
    $latest_id= mysqli_real_escape_string($con, $_POST['delete_latest']);

    $query="DELETE FROM latest_news_board WHERE latest_id='$latest_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message']="News deleted Successfully";
        header("Location: admin-alllatestnewsshow.php");
        exit(0);
    }
    else{
        $_SESSION['message']="News not deleted Successfully";
        header("Location: admin-alllatestnewsshow.php");
        exit(0);
    }
}
//news delete ends


//News Add notice start
if(isset($_POST['add_notice']))
{
    $limg = mysqli_real_escape_string ($con, $_POST['limg']);
    $ldate = mysqli_real_escape_string ($con, $_POST['ldate']);
    $ldesc = mysqli_real_escape_string ($con, $_POST['ldesc']);
    $lfdesc = mysqli_real_escape_string ($con, $_POST['lfdesc']);
    
    $query= "INSERT INTO latest_news_board (latest_image, latest_date, 	latest_desc, latest_full_desc) 
    VALUES ('$limg','$ldate','$ldesc', '$lfdesc')";

    $query_run=mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message']="Notice Created Successfully";
        header("Location: admin-allnoticeshow.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Notice not Created Successfully";
        header("Location: admin-allnoticeshow.php");
        exit(0);
    }
}
//News Add notice ends

?>
