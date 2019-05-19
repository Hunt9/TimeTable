<?php
    $conn=mysqli_connect('localhost','root','','timetable');

    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);

//====================== Insert Rooms ==============================

  	if(isset($_POST['insertBr'])) {
		$br=$_POST["br"];
		$room=$_POST["room"];
		$seat=$_POST["seat"];
		$sql = "INSERT INTO room (name,seats,building_id)
        VALUES ('".$room."','".$seat."','".$br."')";
		if (mysqli_query($conn, $sql)) {
     
     echo "<script type = 'text/javascript'>window.location.href = 'br.php'; </script> ";
} else {
      echo "<script type='text/javascript'>alert('Insertion Failed! (Server Error)')</script>";
     echo "<script type = 'text/javascript'>window.location.href = 'br.php'; </script> ";
}


	}


//====================== Insert Buildings ==============================

  if(isset($_POST['insertBuiliding'])) {
    $building =$_POST["building"];

    $sql = "INSERT INTO building (name)
        VALUES ('".$building."')";
    if (mysqli_query($conn, $sql)) {
     
     echo "<script type = 'text/javascript'>window.location.href = 'br.php'; </script> ";
} else {
     echo "<script type='text/javascript'>alert('Insertion Failed! (Server Error)')</script>";
     echo "<script type = 'text/javascript'>window.location.href = 'br.php'; </script> ";
}
}

//====================== Insert TimeTables ==============================

 if(isset($_POST['insertTime'])) {
    $sub=$_POST["sub"];
    $tmid=$_POST["time"];
    $dte=$_POST["dte"];
    $day=$_POST["day"];
    $rid=$_POST["rid"];
    $tid=$_POST["tid"];
    //echo $tid;
    $eve="";
    $sql = "INSERT INTO timeschedule (subject_id,time_id,date,day,room_id,teacher_id)
        VALUES ('".$sub."','".$tmid."','".$dte."','".$day."','".$rid."','".$tid."')";
    if (mysqli_query($conn, $sql)) {
     echo "<script type = 'text/javascript'>window.location.href = 'index.php'; </script> ";
} else {
     echo "<script type='text/javascript'>alert('Insertion Failed! (Server Error)')</script>";
     echo "<script type = 'text/javascript'>window.location.href = 'index.php'; </script> ";
}

}


//====================== Insert Departments ==============================

if(isset($_POST['insertDep'])) {
    $dp=$_POST["dep"];
    $sql = "INSERT INTO department (department_name)
        VALUES ('".$dp."')";
    if (mysqli_query($conn, $sql)) {
     echo "<script type = 'text/javascript'>window.location.href = 'department.php'; </script> ";
} else {
     echo "<script type='text/javascript'>alert('Insertion Failed! (Server Error)')</script>";
     echo "<script type = 'text/javascript'>window.location.href = 'department.php'; </script> ";
}

}


//====================== Insert Subjects ==============================

 if(isset($_POST['insertSub'])) {
    $did=$_POST["dep"];
    $sid=$_POST["sem"];
    $sub=$_POST["sub"];
    $sql = "INSERT INTO subject (subject_name,sem_id,department_id)
        VALUES ('".$sub."','".$sid."','".$did."')";
    if (mysqli_query($conn, $sql)) {
     echo "<script type = 'text/javascript'>window.location.href = 'subject.php'; </script> ";
} else {
     echo "<script type='text/javascript'>alert('Insertion Failed! (Server Error)')</script>";
     echo "<script type = 'text/javascript'>window.location.href = 'subject.php'; </script> ";
}

}



  if(isset($_POST['insertT'])) {
    $nme=$_POST["nme"];
    $eml=$_POST["eml"];
    $cnt=$_POST["contact"];
    $pass=$_POST["pass"];
        $rpass=$_POST["rpass"];
        $add=$_POST["add"];
                $did=$_POST["dep"];
                if($pass==$rpass)
                {
    $sql = "INSERT INTO teacher (name,eid,password,mob,address,department_id)
        VALUES ('".$nme."','".$eml."','".$pass."','".$cnt."','".$add."','".$did."')";
   if (mysqli_query($conn, $sql)) {
     echo "<script type = 'text/javascript'>window.location.href = 'teacher.php'; </script> ";
} else {
     echo "<script type='text/javascript'>alert('Insertion Failed! (Server Error)')</script>";
     echo "<script type = 'text/javascript'>window.location.href = 'teacher.php'; </script> ";
}

                }
                else
                {
                   echo "<script type='text/javascript'>alert('Password Not Matched!')</script>";
                   echo "<script type = 'text/javascript'>window.location.href = 'teacher.php'; </script> ";
                }

  }


if(isset($_POST['insertevent'])) {
    $name=$_POST["ename"];
    $discrip=$_POST["ediscrip"];
    $date=$_POST["edate"];
    $starttime=$_POST["estime"];
    $endtime=$_POST["eetime"];
    $sql = "INSERT INTO event (name,description,date,start_time,end_time)
        VALUES ('".$name."','".$discrip."','".$date."','".$starttime."','".$endtime."')";
   if (mysqli_query($conn, $sql)) {
     echo "<script type = 'text/javascript'>window.location.href = 'event.php'; </script> ";
} else {
     echo "<script type='text/javascript'>alert('Insertion Failed! (Server Error)')</script>";
     echo "<script type = 'text/javascript'>window.location.href = 'event.php'; </script> ";
}

}



mysqli_close($conn);


  ?>