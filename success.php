       <?php
       error_reporting(E_ALL);

        session_start();
        error_reporting(0);
	mysql_connect('localhost','root','') or die (mysql_error ());

	mysql_select_db("student") or die(mysql_error());
        if(isset($_POST['submit']))
    {       
        $vtu=$_POST['vtuid'];
        $_SESSION['vtu']=$vtu;
        $vtu=  strtoupper($vtu);
        
        
        $sem=$_POST['sem'];
        
   	$sname=$_POST['sname'];
        $_SESSION['sname']=$sname;        
        $sname=  strtoupper($sname);
        
        $dob=$_POST['dob'];
        $_SESSION['dob']=$dob;
        
        $pob=$_POST['placeofbirth'];
        $_SESSION['pob']=$pob;
        $pob=  strtoupper($pob);
        
        $reg=$_POST['reg'];
        $_SESSION['reg']=$reg;
        $reg=  strtoupper($reg);
        
        $dept=$_POST['dept'];
        $_SESSION['dept']=$dept;
        $dept=  strtoupper($dept);
        
        $year=$_POST['yr'];
        $_SESSION['yr']=$year;
        
        $mtongue=$_POST['mtongue'];
        $_SESSION['mtongue']=$mtongue;
        $mtongue=  strtoupper($mtongue);
        
        $section=$_POST['section'];
        $_SESSION['section']=$section;
        $section=  strtoupper($section);
        
        $fqual=$_POST['fqual'];
        $_SESSION['fqual']=$fqual;
        $fqual=  strtoupper($fqual);
        
        $mqual=$_POST['mqual'];
        $_SESSION['mqual']=$mqual;
        $mqual=  strtoupper($mqual);
        
        $batch=$_POST['batch'];
        $_SESSION['batch']=$batch;
        
        $fname=$_POST['fname'];
        $_SESSION['fname']=$fname;
        $fname=  strtoupper($fname);
        
        $foccup=$_POST['foccup'];
        $_SESSION['foccup']=$foccup;
        $foccup=  strtoupper($foccup);
        
        $mname=$_POST['mname'];
        $_SESSION['mname']=$mname;
        $mname=  strtoupper($mname);
        
        $moccup=$_POST['moccup'];
        $_SESSION['moccup']=$moccup;
        $moccup=  strtoupper($moccup);
        
        $smob=$_POST['smob'];
        $_SESSION['smob']=$smob;
        
        $smail=$_POST['smail'];
        $_SESSION['smail']=$smail;
        $smail=  strtoupper($smail);
        
        $fmob=$_POST['fmob'];
        $_SESSION['fmob']=$fmob;
        
        $mmob=$_POST['mmob'];
        $_SESSION['mmob']=$mmob;
        
        $hos_day=$_POST['hos_day'];
        $_SESSION['hos_day']=$hos_day;
        
        $cflat=$_POST['cflat'];
        $_SESSION['cflat']=$cflat;
        $cflat= strtoupper($cflat);
        
        $cvts=$_POST['cvts'];
        $_SESSION['cvts']=$cvts;
        $cvts=  strtoupper($cvts);
        
        $ccity=$_POST['ccity'];
        $_SESSION['ccity']=$ccity;
        $ccity=  strtoupper($ccity);
        
        $cdistrict=$_POST['cdistrict'];
        $_SESSION['cdistrict']=$cdistrict;
        $cdistrict=  strtoupper($cdistrict);
        
        $cstate=$_POST['cstate'];
        $_SESSION['cstate']=$cstate;
        $cstate=  strtoupper($cstate);
        
        $cpin=$_POST['cpin'];
        $_SESSION['cpin']=$cpin;
        $cpin=  strtoupper($cpin);
        
        $pflat=$_POST['pflat'];
        $_SESSION['pflat']=$pflat;
        $pflat=  strtoupper($pflat);
        
        $pvts=$_POST['pvts'];
        $_SESSION['pvts']=$pvts;
        $pvts=  strtoupper($pvts);
        
        $pcity=$_POST['pcity'];
        $_SESSION['pcity']=$pcity;
        $pcity=  strtoupper($pcity);        
        
        $pdistrict=$_POST['pdistrict'];
        $_SESSION['pdistrict']=$pdistrict;
        $pdistrict=  strtoupper($pdistrict);
        
        $pstate=$_POST['pstate'];
        $_SESSION['pstate']=$pstate;
        $cstate=  strtoupper($cstate);
        
        $ppin=$_POST['ppin'];
        $_SESSION['ppin']=$ppin;
        $ppin=  strtoupper($ppin);
        
        $mbrd=$_POST['mbrd'];
        $_SESSION['mbrd']=$mbrd;
        $mbrd=  strtoupper($mbrd);
        
        $mmrk=$_POST['mmrk'];
        $_SESSION['mmrk']=$mmrk;
        $mmrk=  strtoupper($mmrk);
        
        $ibrd=$_POST['ibrd'];
        $_SESSION['ibrd']=$ibrd;
        $ibrd=  strtoupper($ibrd);        
        
        $imrk=$_POST['imrk'];
        $_SESSION['imrk']=$imrk;
        $imrk=  strtoupper($imrk);
        
        $suc=$_POST['suc'];
        $_SESSION['suc']=$suc;
        $suc=  strtoupper($suc);
        
        $bloodgroup=$_POST['bloodgroup'];
        $_SESSION['bloodgroup']=$bloodgroup;
        $bloodgroup=  strtoupper($bloodgroup);
        
        $medhealth=$_POST['medhealth'];
        $_SESSION['medhealth']=$medhealth;
        $medhealth=  strtoupper($medhealth);
        
        $medallergy=$_POST['medallergy'];
        $_SESSION['medallergy']=$medallergy;
        $medallergy=  strtoupper($medallergy);
        
        $medialler=$_POST['medialler'];
        $_SESSION['medialler']=$medialler;
        $medialler=  strtoupper($medialler);
        
        $mentorid=$_SESSION['musername'];
        $mentorid=  strtoupper($mentorid);
        $mentorid=  strtoupper($mentorid);
        
        $date=date("Y/m/d");
        $_SESSION['date']=$date;
        date_default_timezone_set('Asia/Kolkata');
        $time=date("h:i:sa");
        $_SESSION['time']=$time;
//$querya="INSERT INTO myinfo(vtuid,mentorid,register,batch,department,year,semester,section) VALUES('$vtu','$mentorid','$reg','$batch','$dept','$year','$sem','$section')";
$querya = "INSERT INTO myinfo (vtuid,mentorid,register,batch,department,year,semester,section,studentname,placeofbirth,mothertongue,studentmob,email,dob,fathername,foccupation,fathermob,fqual,mothername,moccupation,mothermob,mqual,accomodation,cflatno,cvillagetown,ccity,cdistrict,cstate,cpincode,pflatno,pvillagetown,pcity,pdistrict,pstate,ppincode,bloodgroup,allergy,issue,alergytomediciene,mathsboard,mathscgpa,intermediateboard,intermediatepercent,achievements,dateofregister,timeofregister) VALUES ('$vtu','$mentorid','$reg','$batch','$dept','$year','$sem','$section','$sname','$pob','$mtongue','$smob','$smail','$dob','$fname','$foccup','$fmob','$fqual','$mname','$moccup','$mmob','$mqual','$hos_day','$cflat','$cvts','$ccity','$cdistrict','$cstate','$cpin','$pflat','$pvts','$pcity','$pdistrict','$pstate','$ppin','$bloodgroup','$medallergy','$medhealth','$medialler','$mbrd','$mmrk','$ibrd','$imrk','$suc','$date','$time')";
$quer=  mysql_query($querya) or die(mysql_error());

            $semmarks="INSERT INTO marks_s5 (vtuid,studentname) VALUES ('$vtu','$sname')";
          $qs=  mysql_query($semmarks) or die(mysql_error());
        /*if($sem='1st')
        {
          $semmarks="INSERT INTO marks_s1 (vtuid) VALUES ('$vtu')"; 
          $qs=  mysql_query($semmarks) or die(mysql_error());

        }
        elseif ($sem='2nd')
                {
            $semmarks="INSERT INTO marks_s2 (vtuid) VALUES ('$vtu')";
          $qs=  mysql_query($semmarks) or die(mysql_error());  
        
        }
        elseif ($sem='3rd') 
                {
            $semmarks="INSERT INTO marks_s3 (vtuid) VALUES ('$vtu')";
          $qs=  mysql_query($semmarks) or die(mysql_error());  
        
                }
        elseif ($sem='4th')
                {
            $semmarks="INSERT INTO marks_s4 (vtuid) VALUES ('$vtu')";
          $qs=  mysql_query($semmarks) or die(mysql_error());  
        
                }
        elseif ($sem='5th')
                {
            $semmarks="INSERT INTO marks_s5 (vtuid) VALUES ('$vtu')";
          $qs=  mysql_query($semmarks) or die(mysql_error());  
        
                }
        elseif ($sem='6th')
                {
            $semmarks="INSERT INTO marks_s6 (vtuid) VALUES ('$vtu')";
          $qs=  mysql_query($semmarks) or die(mysql_error());  
        
                }
        elseif ($sem='7th')
                {
            $semmarks="INSERT INTO marks_s7 (vtuid) VALUES ('$vtu')";
          $qs=  mysql_query($semmarks) or die(mysql_error());  
        
                }
        elseif ($sem='8th') 
                {
            $semmarks="INSERT INTO marks_s8 (vtuid) VALUES ('$vtu')";
          $qs=  mysql_query($semmarks) or die(mysql_error());  
        
                }*/
header('location:profile.php');


}
 
       ?>
                     
                     
