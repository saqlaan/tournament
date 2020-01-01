<?php $con=require_once("connection.php");
$userid = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM basicinfo_section1 where id='$userid'");
if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$pname = $row['patient_name'];
$dob = $row['dob'];
$dinjury = $row['do_Injury'];
$lname = $row['lawyer_name'];
$laddress = $row['lawyer_address'];
$exam_state=$row["exam_state"];
$gap=$row["gap"];
$reason1=$row["reason1"];
$reason2=$row["reason2"];
$filename=$row["image_upld"];


$result2 = mysqli_query($con,"SELECT * FROM physical_exm_section2 where user_id='$userid'");
$row2 = mysqli_fetch_assoc($result2);
$p_exam=$row2["physical_exm"];
$height=$row2["height"];
$weight=$row2["weight"];
$bp=$row2["blood_pressure"];

$result3 = mysqli_query($con,"SELECT * FROM spinal_rom_init_cervical where user_id='$userid'");
$row3 = mysqli_fetch_assoc($result3);
$c_flexion_normal_init              =$row3["Flexion_normal"];
$c_flexion_note_init                =$row3["Flexion_note"];
$c_extension_normal_init            =$row3["Extension_normal"];
$c_extension_note_init              =$row3["Extension_note"];
$c_right_lateral_flexion_normal_init=$row3["Right_lateral_flexion_normal"];
$c_right_lateral_flexion_note_init  =$row3["Right_lateral_flexion_note"];
$c_left_lateral_flexion_normal_init =$row3["Left_lateral_flexion_normal"];
$c_left_lateral_flexion_note_init   =$row3["Left_lateral_flexion_note"];
$c_right_rotation_normal_init       =$row3["Right_rotation_normal"];
$c_rignt_rotation_note_init         =$row3["Right_rotation_note"];
$c_left_rotation_normal_init        =$row3["Left_rotation_normal"];
$c_left_rotation_note_init          =$row3["Left_rotation_note"];

$result4 = mysqli_query($con,"SELECT * FROM spinal_rom_init_lumbar where user_id='$userid'");
$row4 = mysqli_fetch_assoc($result4);
$l_flexion_normal_init              =$row4["Flexion_normal"];
$l_flexion_note_init                =$row4["Flexion_comments"];
$l_extension_normal_init            =$row4["Extension_normal"];
$l_extension_note_init              =$row4["Extension_comments"];
$l_right_lateral_flexion_normal_init=$row4["Right_lateral_flexion_normal"];
$l_right_lateral_flexion_note_init  =$row4["Right_lateral_flexion_comments"];
$l_left_lateral_flexion_normal_init =$row4["Left_lateral_flexion_normal"];
$l_left_lateral_flexion_note_init   =$row4["Left_lateral_flexion_comments"];
$l_right_rotation_normal_init       =$row4["Right_rotation_normal"];
$l_rignt_rotation_note_init         =$row4["Right_rotation_comments"];
$l_left_rotation_normal_init        =$row4["Left_rotation_normal"];
$l_left_rotation_note_init          =$row4["Left_rotation_comments"];

$result5 = mysqli_query($con,"SELECT * FROM spinal_rom_final_cervical where user_id='$userid'");
$row5 = mysqli_fetch_assoc($result5);
$c_flexion_normal_final              =$row5["Flexion_normal"];
$c_flexion_note_final                =$row5["Flexion_note"];
$c_extension_normal_final            =$row5["Extension_normal"];
$c_extension_note_final              =$row5["Extension_note"];
$c_right_lateral_flexion_normal_final=$row5["Right_lateral_flexion_normal"];
$c_right_lateral_flexion_note_final  =$row5["Right_lateral_flexion_note"];
$c_left_lateral_flexion_normal_final =$row5["Left_lateral_flexion_normal"];
$c_left_lateral_flexion_note_final   =$row5["Left_lateral_flexion_note"];
$c_right_rotation_normal_final       =$row5["Right_rotation_normal"];
$c_rignt_rotation_note_final         =$row5["Right_rotation_note"];
$c_left_rotation_normal_final        =$row5["Left_rotation_normal"];
$c_left_rotation_note_final          =$row5["Left_rotation_note"];

$result6 = mysqli_query($con,"SELECT * FROM spinal_rom_final_lumbar where user_id='$userid'");
$row6 = mysqli_fetch_assoc($result6);
$l_flexion_normal_final              =$row6["Flexion_normal"];
$l_flexion_note_final                =$row6["Flexion_comments"];
$l_extension_normal_final            =$row6["Extension_normal"];
$l_extension_note_final              =$row6["Extension_comments"];
$l_right_lateral_flexion_normal_final=$row6["Right_lateral_flexion_normal"];
$l_right_lateral_flexion_note_final  =$row6["Right_lateral_flexion_comments"];
$l_left_lateral_flexion_normal_final =$row6["Left_lateral_flexion_normal"];
$l_left_lateral_flexion_note_final   =$row6["Left_lateral_flexion_comments"];
$l_right_rotation_normal_final       =$row6["Right_rotation_normal"];
$l_rignt_rotation_note_final         =$row6["Right_rotation_comments"];
$l_left_rotation_normal_final        =$row6["Left_rotation_normal"];
$l_left_rotation_note_final          =$row6["Left_rotation_comments"];

$result7 = mysqli_query($con,"SELECT * FROM orthopedic_tests_init where user_id='$userid'");
$row7 = mysqli_fetch_assoc($result7);
$ValsalvaL=     $row7["Valsalva_left"];         
$MinorL=        $row7["Minor_sign_left"];         
$MaxL=          $row7["Max_cervical_comp_left"];        
$JacksonL=      $row7["JacksonL_comp_left"];      
$ForaminalL=    $row7["Foraminal_comp_left"];                
$ShoulderL=     $row7["Shoulder_dep_left"];         
$DistractionL=  $row7["Distraction_left"];  
$SpurlingL=     $row7["Spurling_left"];
$BakodyL=       $row7["Bakody_sign_left"];
$SotoL=         $row7["Soto_left"];
$KempL=         $row7["Kemp_left"];
$SLRL=          $row7["SLR_left"];
$ElyL=          $row7["Ely_left"];
$HibbL=         $row7["Hibb_left"];
$FabereL=       $row7["Fabere_left"];
$DerifieldL=    $row7["Derifield_left"];
$YeomanL=       $row7["Yeoman_left"];
$NachlasL=      $row7["Nachlas_left"];
$SeatedL=       $row7["Seated_gilletes_left"];
$ValsalvaR=     $row7["Valsalva_right"];
$MinorR=        $row7["Minor_sign_right"];
$MaxR=          $row7["Max_cervical_comp_right"];
$JacksonR=      $row7["JacksonL_comp_right"];
$ForaminalR=    $row7["Foraminal_comp_right"];
$ShoulderR=     $row7["Shoulder_dep_right"];
$DistractionR=  $row7["Distraction_right"];
$SpurlingR=     $row7["Spurling_right"];
$BakodyR=       $row7["Bakody_sign_right"];
$SotoR=         $row7["Soto_right"];
$KempR=         $row7["Kemp_right"];
$SLRR=          $row7["SLR_right"];
$ElyR=          $row7["Ely_right"];
$HibbR=         $row7["Hibb_right"];
$FabereR=       $row7["Fabere_right"];
$DerifieldR=    $row7["Derifield_right"];
$YeomanR=       $row7["Yeoman_right"];
$NachlasR=      $row7["Nachlas_rigth"];
$SeatedR=       $row7["Seated_gilletes_right"];

$result8 = mysqli_query($con,"SELECT * FROM orthopedic_tests_final where user_id='$userid'");
$row8 = mysqli_fetch_assoc($result8);
$ValsalvaFL=     $row8["Valsalva_left"];         
$MinorFL=        $row8["Minor_sign_left"];         
$MaxFL=          $row8["Max_cervical_comp_left"];        
$JacksonFL=      $row8["Jackson_l_comp_left"];      
$ForaminalFL=    $row8["Foraminal_comp_left"];                
$ShoulderFL=     $row8["Shoulder_dep_left"];         
$DistractionFL=  $row8["Distraction_left"];  
$SpurlingFL=     $row8["Spurling_left"];
$BakodyFL=       $row8["Bakody_sign_left"];
$SotoFL=         $row8["Soto_left"];
$KempFL=         $row8["Kemp_left"];
$SLRFL=          $row8["SLR_left"];
$ElyFL=          $row8["Ely_left"];
$HibbFL=         $row8["Hibb_left"];
$FabereFL=       $row8["Fabere_left"];
$DerifieldFL=    $row8["Derifield_left"];
$YeomanFL=       $row8["Yeoman_left"];
$NachlasFL=      $row8["Nachlas_left"];
$SeatedFL=       $row8["Seated_left"];
$ValsalvaFR=     $row8["Valsalva_right"];
$MinorFR=        $row8["Minor_sign_right"];
$MaxFR=          $row8["Max_cervical_comp_right"];
$JacksonFR=      $row8["Jackson_l_comp_right"];
$ForaminalFR=    $row8["Foraminal_comp_right"];
$ShoulderFR=     $row8["Shoulder_dep_right"];
$DistractionFR=  $row8["Distraction_right"];
$SpurlingFR=     $row8["Spurling_right"];
$BakodyFR=       $row8["Bakody_sign_right"];
$SotoFR=         $row8["Soto_right"];
$KempFR=         $row8["Kemp_right"];
$SLRFR=          $row8["SLR_right"];
$ElyFR=          $row8["Ely_right"];
$HibbFR=         $row8["Hibb_right"];
$FabereFR=       $row8["Fabere_right"];
$DerifieldFR=    $row8["Derifield_right"];
$YeomanFR=       $row8["Yeoman_right"];
$NachlasFR=      $row8["Nachlas_right"];
$SeatedFR=       $row8["Seated_right"];

$result9 = mysqli_query($con,"SELECT * FROM muscle_testing_init where user_id='$userid'");
$row9 = mysqli_fetch_assoc($result9);
$deltoidL=              $row9["Deltoid_left"];
$bicepsL=               $row9["Biceps_left"];
$wrist_extensorsL=      $row9["Wrist_extensors_left"];
$wrist_flexorsL=        $row9["Wrist_flexors_left"];
$finger_flexorsL=       $row9["Finger_flexors_left"];
$finger_interosseiL=    $row9["Finger_interossei_left"];
$hip_flexorsL=          $row9["Hip_flexors_left"];
$knee_extensorsL=       $row9["Knee_extensors_left"];
$foot_eversionL=        $row9["Foot_eversion_left"];
$foot_inversionL=       $row9["Foot_inversion_left"];
$dorsiflex_great_toeL=  $row9["Dorsiflex_great_toe_left"];
$deltoidR=              $row9["Deltoid_right"];
$bicepsR=               $row9["Biceps_right"];
$wrist_extensorsR=      $row9["Wrist_extensors_right"];
$wrist_flexorsR=        $row9["Wrist_flexors_right"];
$finger_flexorsR=       $row9["Finger_flexors_right"];
$finger_interosseiR=    $row9["Finger_interossei_right"];
$hip_flexorsR=          $row9["Hip_flexors_right"];
$knee_extensorsR=       $row9["Knee_extensors_right"];
$foot_eversionR=        $row9["Foot_eversion_right"];
$foot_inversionR=       $row9["Foot_inversion_right"];
$dorsiflex_great_toeR=  $row9["Dorsiflex_great_toe_right"];

$result10 = mysqli_query($con,"SELECT * FROM muscle_testing_final where user_id='$userid'");
$row10 = mysqli_fetch_assoc($result10);
$deltoidFL=              $row10["Deltoid_left"];
$bicepsFL=               $row10["Biceps_left"];
$wrist_extensorsFL=      $row10["Wrist_extensors_left"];
$wrist_flexorsFL=        $row10["Wrist_flexors_left"];
$finger_flexorsFL=       $row10["Finger_flexors_left"];
$finger_interosseiFL=    $row10["Finger_interossei_left"];
$hip_flexorsFL=          $row10["Hip_flexors_left"];
$knee_extensorsFL=       $row10["Knee_extensors_left"];
$foot_eversionFL=        $row10["Foot_eversion_left"];
$foot_inversionFL=       $row10["Foot_inversion_left"];
$dorsiflex_great_toeFL=  $row10["Dorsiflex_great_toe_left"];
$deltoidFR=              $row10["Deltoid_right"];
$bicepsFR=               $row10["Biceps_right"];
$wrist_extensorsFR=      $row10["Wrist_extensors_right"];
$wrist_flexorsFR=        $row10["Wrist_flexors_right"];
$finger_flexorsFR=       $row10["Finger_flexors_right"];
$finger_interosseiFR=    $row10["Finger_interossei_right"];
$hip_flexorsFR=          $row10["Hip_flexors_right"];
$knee_extensorsFR=       $row10["Knee_extensors_right"];
$foot_eversionFR=        $row10["Foot_eversion_right"];
$foot_inversionFR=       $row10["Foot_inversion_right"];
$dorsiflex_great_toeFR=  $row10["Dorsiflex_great_toe_right"];

$result11 = mysqli_query($con,"SELECT * FROM dyanometer_grip_test_init where user_id='$userid'");
$row11 = mysqli_fetch_assoc($result11);
$RadioGroup3=$row11["right_h"];
$LW_KG=      $row11["right_h_weight"];
$RW_KG=      $row11["left_h_weight"];

$result12 = mysqli_query($con,"SELECT * FROM dyanometer_grip_test_final where user_id='$userid'");
$row12 = mysqli_fetch_assoc($result12);
$RightH=$row12["right_h"];
$LW_KGF=      $row12["right_h_weight"];
$RW_KGF=      $row12["left_h_weight"];


function checkSelectedValue($value){
    global $con;
    global $userid;
    $query = "SELECT * FROM initial_injuries where user_id='$userid'";
    $result = $con->query($query);
    while($row = $result->fetch_assoc()){
        if($row['init_injuries'] == $value){
            echo 'selected';
        }
    }
}

function checkSelectedValue1($value){
    global $con;
    global $userid;
    $query = "SELECT * FROM subluxation where user_id='$userid'";
    $result = $con->query($query);
    while($row = $result->fetch_assoc()){
        if($row['subluxation'] == $value){
            echo 'selected';
        }
    }
}

function checkSelectedValue2($value){
    global $con;
    global $userid;
    $query = "SELECT * FROM tenderness where user_id='$userid'";
    $result = $con->query($query);
    while($row = $result->fetch_assoc()){
        if($row['tenderness'] == $value){
            echo 'selected';
        }
    }
}
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <!--Header for drop down multi selection-->




    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Add Report</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <!-- <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all"> -->
    <link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
    <!--Dropdown-->

    <link href="https://code.jquery.com/jquery-2.2.4.min.js">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">

    <script>
        $('.dropdown-menu label').click(function(e) {
	e.stopPropagation();
});
	</script>


    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap" style="max-width: 840px">
                    <div class="login-content">
                        <div class="login-logo">
                            <label>REPORT</label>
                        </div>
                        <div class="login-form">
                            <form action="update_report.php" method="post">
                                <input type="test" name="user_id" hidden value="<?php echo $userid; ?>">
                                <div class="form-group">
                                    <label>Patient Name</label>
                                    <input class="au-input au-input--full" type="text" name="P_NAME" placeholder="Patient Name" value="<?php echo $pname; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input class="au-input au-input--full" type="date" name="DOB" placeholder="Date of Birth" value="<?php echo $dob ;?>">
                                </div>
                                <div class="form-group">
                                    <label>Date of Injury</label>
                                    <input class="au-input au-input--full" type="date" name="DOI" placeholder="Date of Injury" value="<?php echo $dinjury ;?>">
                                </div>
                                <div class="form-group">
                                    <label>Lawyer Name</label>
                                    <input class="au-input au-input--full" type="text" name="Lawyer_NAME" placeholder="Lawyer Name" value="<?php echo $lname ;?>">
                                </div>
                                <div class="form-group">
                                    <label>Lawyer Address</label>
                                    <input class="au-input au-input--full" type="text" name="Lawyer_addr" placeholder="Lawyer Address" value="<?php echo $laddress ;?>">
                                </div>
                                <div class="form-group">

                                    <p>

                                        <label>
                                            <input type="radio" name="exam_state" <?php if($exam_state==1){echo "checked"; }?> value="1" id="RadioGroup1_0">
                                            Initial Exam

                                            <input type="radio" name="exam_state" <?php if($exam_state==0){echo "checked"; }?> value="0" id="RadioGroup1_1">
                                            Re Exam</label>

                                    </p>
                                </div>

                                <div class="form-group">

                                    <p>
                                        <label>Gap in care?</label>
                                        <label>
                                            <input type="radio" name="RadioGroup2" <?php if($gap==1){echo "checked"; }?> value="1" id="RadioGroup2_0">
                                            Yes

                                            <input type="radio" name="RadioGroup2" <?php if($gap==0){echo "checked"; }?> value="0" id="RadioGroup2_1">
                                            No</label>

                                    </p>
                                </div>
                                <div class="form-group">

                                    <p>
                                        <label>Yes? Reason for Initial gap</label>

                                        <label>
                                            <input name="reason1" hidden value="<?php echo $reason1 ;?>">
                                            <textarea class="form-control" value=""><?php echo $reason1 ;?></textarea>
                                        </label>

                                    </p>
                                </div>
                                <div class="form-group">

                                    <p>
                                        <label>Yes? Reason for gap during the care</label>

                                        <label>
                                            <input name="reason2" hidden value="<?php echo $reason2 ;?>">
                                            <textarea class="form-control" value=""><?php echo $reason2 ;?></textarea>
                                        </label>

                                    </p>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="filename" accept="image/gif, image/jpeg, image/png">
                                </div>

                                <!--Multiple drop down-->



                                <label>Initial Injuries: </label>
                                <div class="row" style="width: 350px">
                                    <div class="col-md-12">
                                        <select required name="init_injuries[]" type="text" multiple role="multiselect" max="39">
                                            <option value="0" <?php checkSelectedValue(0);?>>Head Contusion</option>
                                            <option value="1" <?php checkSelectedValue(1);?>>Neck Injury</option>
                                            <option value="2" <?php checkSelectedValue(2);?>>Thoracic spine injury </option>
                                            <option value="3" <?php checkSelectedValue(3);?>>Lumbar spine injury </option>
                                            <option value="4" <?php checkSelectedValue(4);?>>Chest injury </option>
                                            <option value="5" <?php checkSelectedValue(5);?>> Cardiovascular effects </option>
                                            <option value="6" <?php checkSelectedValue(6);?>>Rib Injury </option>
                                            <option value="7" <?php checkSelectedValue(7);?>>Right Elbow injury</option>
                                            <option value="8" <?php checkSelectedValue(8);?>>Left Elbow Injury </option>
                                            <option value="9" <?php checkSelectedValue(9);?>>Right wrist injury </option>
                                            <option value="10" <?php checkSelectedValue(10);?> >Left Wrist injury </option>
                                            <option value="11" <?php checkSelectedValue(11);?> >Left hand/finger injury </option>
                                            <option value="12" <?php checkSelectedValue(12);?> >Right hand/finger injury </option>
                                            <option value="13" <?php checkSelectedValue(13);?> >1Abdominal injury </option>
                                            <option value="14" <?php checkSelectedValue(14);?> > Visceral injury </option>
                                            <option value="15" <?php checkSelectedValue(15);?> >Pelvic Injury/Sacral/Hip/Coccyx injury </option>
                                            <option value="16" <?php checkSelectedValue(16);?> >Right ankle Injury </option>
                                            <option value="17" <?php checkSelectedValue(17);?> >Left ankle Injury </option>
                                            <option value="18" <?php checkSelectedValue(18);?> >Left foot Injury </option>
                                            <option value="19" <?php checkSelectedValue(19);?> >Right foot Injury </option>
                                            <option value="20" <?php checkSelectedValue(20);?> >TMJ Elbow Injury </option>
                                            <option value="21" <?php checkSelectedValue(21);?> >Right Eye Injury </option>
                                            <option value="22" <?php checkSelectedValue(22);?> >Left Eye Injury </option>
                                            <option value="23" <?php checkSelectedValue(23);?> >Right shoulder Injury </option>
                                            <option value="24" <?php checkSelectedValue(24);?> >Left shoulder Injury </option>
                                            <option value="25" <?php checkSelectedValue(25);?> >Right lower extremity Injury </option>
                                            <option value="26" <?php checkSelectedValue(26);?> >Left lower extremity Injury </option>
                                            <option value="27" <?php checkSelectedValue(27);?> >Right knee Injury </option>
                                            <option value="28" <?php checkSelectedValue(28);?> >Left knee Injury </option>
                                            <option value="29" <?php checkSelectedValue(29);?> >Facet joint Injury </option>
                                            <option value="30" <?php checkSelectedValue(30);?> >Ligament Injury </option>
                                            <option value="31" <?php checkSelectedValue(31);?> >Headaches </option>
                                            <option value="32" <?php checkSelectedValue(32);?> >Sleep Difficulty </option>
                                            <option value="33" <?php checkSelectedValue(33);?> >Decreased range of motion </option>
                                            <option value="34" <?php checkSelectedValue(34);?> >Spasms</option>
                                            <option value="35" <?php checkSelectedValue(35);?> >Stiffness </option>
                                            <option value="36" <?php checkSelectedValue(36);?> >Joint Problems </option>
                                            <option value="37" <?php checkSelectedValue(37);?> >Memory problems </option>
                                            <option value="38" <?php checkSelectedValue(38);?> >Personality Changes</option>
                                            <option value="39" <?php checkSelectedValue(39);?> >Others </option>
                                        </select>
                                    </div>
                                </div>

                                <br>

                                <div class="form-group">
                                    <label>Physical Examination:</label>
                                    <input class="au-input au-input--full" type="text" name="P_Exam" placeholder="Physical Examination" value="<?php echo $p_exam;?>">
                                </div>

                                <div class="form-group">
                                    <label>Height</label>
                                    <input value="<?php echo $height ;?>" class="au-input au-input--full" type="text" name="height" placeholder="Height">
                                </div>
                                <div class="form-group">
                                    <label>Weight</label>
                                    <input value="<?php echo $weight ;?>" class="au-input au-input--full" type="text" name="weight" placeholder="Weight">
                                </div>
                                <div class="form-group">
                                    <label>Blood Pressure</label>
                                    <input value="<?php echo $bp ;?>" class="au-input au-input--full" type="text" name="BP" placeholder="Blood Pressure">
                                </div>
                            
                                <div class="container_fluid">
                                    <div class="form-group">

                                        <label>Spinal ROM (Initial) </label>
                                        <br>
                                        <div class="row" style=" border:solid; border-color: darkgray">
                                            <div class="col-sm-4 box">
                                                Cervical
                                            </div>

                                            <div class="col-sm-4 box">
                                                Normal (degree)</div>
                                            <div class="col-sm-4 box">
                                                Notes
                                            </div>
                                        </div>
                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Flexion
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" name="c_flexion_normal_init" class="form-control" value="<?php echo $c_flexion_normal_init ;?>">
                                                <p style="display: inline">/50</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="c_flexion_note_init" value="<?php echo $c_flexion_note_init ;?>">
                                            </div>
                                        </div>

                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Extension
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="c_extension_normal_init" value="<?php echo $c_extension_normal_init ;?>">
                                                <p style="display: inline">/60</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="c_extension_note_init" value="<?php echo $c_extension_note_init              ;?>">
                                            </div>
                                        </div>
                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Right Lateral Flexion
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="c_right_lateral_flexion_normal_init" value="<?php echo $c_right_lateral_flexion_normal_init ;?>">
                                                <p style="display: inline">/45</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="c_right_lateral_flexion_note_init" value="<?php echo $c_right_lateral_flexion_note_init ;?>">
                                            </div>
                                        </div>

                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Left Lateral Flexion
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="c_left_lateral_flexion_normal_init" value="<?php echo $c_left_lateral_flexion_normal_init;?>">
                                                <p style="display: inline">/45</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="c_left_lateral_flexion_note_init" value="<?php echo $c_left_lateral_flexion_note_init ;?>">
                                            </div>
                                        </div>

                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Right Rotation
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="c_right_rotation_normal_init" value="<?php echo $c_right_rotation_normal_init ;?>">
                                                <p style="display: inline">/80</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="c_rignt_rotation_note_init" value="<?php echo $c_rignt_rotation_note_init ;?>">
                                            </div>
                                        </div>
                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Left Rotation
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="c_left_rotation_normal_init" value="<?php echo $c_left_rotation_normal_init ;?>">
                                                <p style="display: inline">/80</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="c_left_rotation_note_init" value="<?php echo $c_left_rotation_note_init;?>">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <div class="row" style=" border:solid; border-color: darkgray">
                                            <div class="col-sm-4 box">
                                                Lumbar
                                            </div>

                                            <div class="col-sm-4 box">
                                                Normal (degree)</div>
                                            <div class="col-sm-4 box">
                                                Comments
                                            </div>
                                        </div>
                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Flexion
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" name="l_flexion_normal_init" class="form-control" value="<?php echo $l_flexion_normal_init ;?>">
                                                <p style="display: inline">/50</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="l_flexion_note_init" value="<?php echo $l_flexion_note_init ;?>">
                                            </div>
                                        </div>

                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Extension
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="l_extension_normal_init" value="<?php echo $l_extension_normal_init ;?>">
                                                <p style="display: inline">/60</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="l_extension_note_init" value="<?php echo $l_extension_note_init ;?>">
                                            </div>
                                        </div>
                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Right Lateral Flexion
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="l_right_lateral_flexion_normal_init" value="<?php echo $l_right_lateral_flexion_normal_init ;?>">
                                                <p style="display: inline">/45</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="l_right_lateral_flexion_note_init" value="<?php echo $l_right_lateral_flexion_note_init ;?>">
                                            </div>
                                        </div>

                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Left Lateral Flexion
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="l_left_lateral_flexion_normal_init" value="<?php echo $l_left_lateral_flexion_normal_init ;?>">
                                                <p style="display: inline">/45</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="l_left_lateral_flexion_note_init" value="<?php echo $l_left_lateral_flexion_note_init ;?>">
                                            </div>
                                        </div>

                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Right Rotation
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="l_right_rotation_normal_init" value="<?php echo $l_right_rotation_normal_init ;?>">
                                                <p style="display: inline">/80</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="l_rignt_rotation_note_init" value="<?php echo $l_rignt_rotation_note_init ;?>">
                                            </div>
                                        </div>
                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Left Rotation
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="l_left_rotation_normal_init" value="<?php echo $l_left_rotation_normal_init ;?>">
                                                <p style="display: inline">/80</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="l_left_rotation_note_init" value="<?php echo $l_left_rotation_note_init ;?>">
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <br>
                                    <div class="form-group">

                                        <label>Spinal ROM (Final) </label>
                                        <br>
                                        <div class="row" style=" border:solid; border-color: darkgray">
                                            <div class="col-sm-4 box">
                                                Cervical
                                            </div>

                                            <div class="col-sm-4 box">
                                                Normal (degree)</div>
                                            <div class="col-sm-4 box">
                                                Notes
                                            </div>
                                        </div>
                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Flexion
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" name="c_flexion_normal_final" class="form-control" value="<?php echo $c_flexion_normal_final ;?>">
                                                <p style="display: inline">/50</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="c_flexion_note_final" value="<?php echo $c_flexion_note_final ;?>">
                                            </div>
                                        </div>

                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Extension
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="c_extension_normal_final" value="<?php echo $c_extension_normal_final ;?>">
                                                <p style="display: inline">/60</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="c_extension_note_final" value="<?php echo $c_extension_note_final ;?>">
                                            </div>
                                        </div>
                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Right Lateral Flexion
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="c_right_lateral_flexion_normal_final" value="<?php echo $c_right_lateral_flexion_normal_final ;?>">
                                                <p style="display: inline">/45</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="c_right_lateral_flexion_note_final" value="<?php echo $c_right_lateral_flexion_note_final ;?>">
                                            </div>
                                        </div>

                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Left Lateral Flexion
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="c_left_lateral_flexion_normal_final" value="<?php echo $c_left_lateral_flexion_normal_final ;?>">
                                                <p style="display: inline">/45</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="c_left_lateral_flexion_note_final" value="<?php echo $c_left_lateral_flexion_note_final ;?>">
                                            </div>
                                        </div>

                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Right Rotation
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="c_right_rotation_normal_final" value="<?php echo $c_right_rotation_normal_final ;?>">
                                                <p style="display: inline">/80</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="c_rignt_rotation_note_final" value="<?php echo $c_rignt_rotation_note_final ;?>">
                                            </div>
                                        </div>
                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Left Rotation
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="c_left_rotation_normal_final" value="<?php echo $c_left_rotation_normal_final ;?>">
                                                <p style="display: inline">/80</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="c_left_rotation_note_final" value="<?php echo $c_left_rotation_note_final ;?>">
                                            </div>
                                        </div>



                                    </div>

                                    <div class="form-group">

                                        <div class="row" style=" border:solid; border-color: darkgray">
                                            <div class="col-sm-4 box">
                                                Lumbar
                                            </div>

                                            <div class="col-sm-4 box">
                                                Normal (degree)</div>
                                            <div class="col-sm-4 box">
                                                Comments
                                            </div>
                                        </div>
                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Flexion
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" name="l_flexion_normal_final" class="form-control" value="<?php echo $l_flexion_normal_final ;?>">
                                                <p style="display: inline">/50</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="l_flexion_note_final" value="<?php echo $l_flexion_note_final ;?>">
                                            </div>
                                        </div>

                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Extension
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="l_extension_normal_final" value="<?php echo $l_extension_normal_final ;?>">
                                                <p style="display: inline">/60</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="l_extension_note_final" value="<?php echo $l_extension_note_final ;?>">
                                            </div>
                                        </div>
                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Right Lateral Flexion
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="l_right_lateral_flexion_normal_final" value="<?php echo $l_right_lateral_flexion_normal_final ;?>">
                                                <p style="display: inline">/45</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="l_right_lateral_flexion_note_final" value="<?php echo $l_right_lateral_flexion_note_final ;?>">
                                            </div>
                                        </div>

                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Left Lateral Flexion
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="l_left_lateral_flexion_normal_final" value="<?php echo $l_left_lateral_flexion_normal_final ;?>">
                                                <p style="display: inline">/45</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="l_left_lateral_flexion_note_final" value="<?php echo $l_left_lateral_flexion_note_final ;?>">
                                            </div>
                                        </div>

                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Right Rotation
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="l_right_rotation_normal_final" value="<?php echo $l_right_rotation_normal_final ;?>">
                                                <p style="display: inline">/80</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="l_rignt_rotation_note_final" value="<?php echo $l_rignt_rotation_note_final ;?>">
                                            </div>
                                        </div>
                                        <div class="row" style=" border:solid;border-width: 1px 1px; border-color: gainsboro">
                                            <div class="col-sm-4 box">
                                                Left Rotation
                                            </div>

                                            <div class="col-sm-4 box">

                                                <input style="width: 50px; display: inline" type="number" class="form-control" name="l_left_rotation_normal_final" value="<?php echo $l_left_rotation_normal_final ;?>">
                                                <p style="display: inline">/80</p>
                                            </div>
                                            <div class="col-sm-4 box">
                                                <input type="text" class="form-control" name="l_left_rotation_note_final" value="<?php echo $l_left_rotation_note_final ;?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <br>

                                <div class="form-group">

                                    <label>Orthopedic Tests: (Initial) </label>

                                    <div class="row" style="margin-left: 2px; margin-right: 2px; border:solid; border-color:darkgrey">
                                        <div class="col-md-4">Test</div>
                                        <div class="col-md-4">Left</div>
                                        <div class="col-md-4">Right</div>
                                    </div>
                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4">Valsalva’s</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="ValsalvaL" value="1" id="ValsalvaL0" <?php if($ValsalvaL==1){echo "checked"; }?>>
                                            Positive

                                            <input type="radio" name="ValsalvaL" value="0" id="ValsalvaL1" <?php if($ValsalvaL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="ValsalvaR" value="1" id="ValsalvaR0" <?php if($ValsalvaR==1){echo "checked"; }?>>
                                            Positive

                                            <input type="radio" name="ValsalvaR" value="0" id="ValsalvaR1" <?php if($ValsalvaR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4">Minor’s Sign</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="MinorL" value="1" id="MinorL0" <?php if($MinorL==1){echo "checked"; }?>>
                                            Positive

                                            <input type="radio" name="MinorL" value="0" id="MinorL1" <?php if($MinorL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="MinorR" value="1" id="MinorR0" <?php if($MinorR==1){echo "checked"; }?>>
                                            Positive

                                            <input type="radio" name="MinorR" value="0" id="MinorR1" <?php if($MinorR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4">Max Cervical Comp</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="MaxL" value="1" id="MaxL0" <?php if($MaxL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="MaxL" value="0" id="MaxL1" <?php if($MaxL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="MaxR" value="1" id="MaxR0" <?php if($MaxR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="MaxR" value="0" id="MaxR1" <?php if($MaxR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4">Jackson’s L. Comp.</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="JacksonL" value="1" id="JacksonL0" <?php if($JacksonL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="JacksonL" value="0" id="JacksonL1" <?php if($JacksonL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="JacksonR" value="1" id="JacksonR0" <?php if($JacksonR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="JacksonR" value="0" id="JacksonR1" <?php if($JacksonR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4">Foraminal Comp.</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="ForaminalL" value="1" id="ForaminalL0" <?php if($ForaminalL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="ForaminalL" value="0" id="ForaminalL1" <?php if($ForaminalL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="ForaminalR" value="1" id="ForaminalR0" <?php if($ForaminalR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="ForaminalR" value="0" id="ForaminalR1" <?php if($ForaminalR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Shoulder Dep.</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="ShoulderL" value="1" id="ShoulderL0" <?php if($ShoulderL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="ShoulderL" value="0" id="ShoulderL1" <?php if($ShoulderL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="ShoulderR" value="1" id="ShoulderR0" <?php if($ShoulderR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="ShoulderR" value="0" id="ShoulderR1" <?php if($ShoulderR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Distraction</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="DistractionL" value="1" id="DistractionL0" <?php if($DistractionL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="DistractionL" value="0" id="DistractionL1" <?php if($DistractionL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="DistractionR" value="1" id="DistractionR0" <?php if($DistractionR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="DistractionR" value="0" id="DistractionR1" <?php if($DistractionR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Spurling</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="SpurlingL" value="1" id="SpurlingL0" <?php if($SpurlingL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="SpurlingL" value="0" id="SpurlingL1" <?php if($SpurlingL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="SpurlingR" value="1" id="SpurlingR0" <?php if($SpurlingR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="SpurlingR" value="0" id="SpurlingR1" <?php if($SpurlingR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Bakody’s sign </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="BakodyL" value="1" id="BakodyL0" <?php if($BakodyL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="BakodyL" value="0" id="BakodyL1" <?php if($BakodyL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="BakodyR" value="1" id="BakodyR0" <?php if($BakodyR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="BakodyR" value="0" id="BakodyR1" <?php if($BakodyR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Soto </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="SotoL" value="1" id="SotoL0" <?php if($SotoL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="SotoL" value="0" id="SotoL1" <?php if($SotoL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="SotoR" value="1" id="SotoR0" <?php if($SotoR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="SotoR" value="0" id="SotoR1" <?php if($SotoR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Kemp’s</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="KempL" value="1" id="KempL0" <?php if($KempL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="KempL" value="0" id="KempL1" <?php if($KempL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="KempR" value="1" id="KempR0" <?php if($KempR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="KempR" value="0" id="KempR1" <?php if($KempR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4">SLR </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="SLRL" value="1" id="SLRL0" <?php if($SLRL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="SLRL" value="0" id="SLRL1" <?php if($SLRL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="SLRR" value="1" id="SLRR0" <?php if($SLRR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="SLRR" value="0" id="SLRR1" <?php if($SLRR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Ely’s</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="ElyL" value="1" id="ElyL0" <?php if($ElyL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="ElyL" value="0" id="ElyL1" <?php if($ElyL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="ElyR" value="1" id="ElyR0" <?php if($ElyR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="ElyR" value="0" id="ElyR1" <?php if($ElyR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Hibb’s</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="HibbL" value="1" id="HibbL0" <?php if($HibbL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="HibbL" value="0" id="HibbL1" <?php if($HibbL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="HibbR" value="1" id="HibbR0" <?php if($HibbR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="HibbR" value="0" id="HibbR1" <?php if($HibbR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Fabere</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="FabereL" value="1" id="FabereL0" <?php if($FabereL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="FabereL" value="0" id="FabereL1" <?php if($FabereL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="FabereR" value="1" id="FabereR0" <?php if($FabereR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="FabereR" value="0" id="FabereR1" <?php if($FabereR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Derifield</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="DerifieldL" value="1" id="DerifieldL0" <?php if($DerifieldL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="DerifieldL" value="0" id="DerifieldL1" <?php if($DerifieldL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="DerifieldR" value="1" id="DerifieldR0" <?php if($DerifieldR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="DerifieldR" value="0" id="DerifieldR1" <?php if($DerifieldR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4">Yeoman’s</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="YeomanL" value="1" id="YeomanL0" <?php if($YeomanL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="YeomanL" value="0" id="YeomanL1" <?php if($YeomanL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="YeomanR" value="1" id="YeomanR0" <?php if($YeomanR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="YeomanR" value="0" id="YeomanR1" <?php if($YeomanR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Nachlas </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="NachlasL" value="1" id="NachlasL0" <?php if($NachlasL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="NachlasL" value="0" id="NachlasL1" <?php if($NachlasL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="NachlasR" value="1" id="NachlasR0" <?php if($NachlasR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="NachlasR" value="0" id="NachlasR1" <?php if($NachlasR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Seated Gilletes </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="SeatedL" value="1" id="SeatedL0" <?php if($SeatedL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="SeatedL" value="0" id="SeatedL1" <?php if($SeatedL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="SeatedR" value="1" id="SeatedR0" <?php if($SeatedR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="SeatedR" value="0" id="SeatedR1" <?php if($SeatedR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">

                                    <label>Orthopedic Tests: (Final) </label>

                                    <div class="row" style="margin-left: 2px; margin-right: 2px; border:solid; border-color:darkgrey">
                                        <div class="col-md-4">Test</div>
                                        <div class="col-md-4">Left</div>
                                        <div class="col-md-4">Right</div>
                                    </div>
                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4">Valsalva’s</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="ValsalvaFL" value="1" id="ValsalvaFL0" <?php if($ValsalvaFL==1){echo "checked"; }?>>
                                            Positive

                                            <input type="radio" name="ValsalvaFL" value="0" id="ValsalvaFL1" <?php if($ValsalvaFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="ValsalvaFR" value="1" id="ValsalvaFR0" <?php if($ValsalvaFR==1){echo "checked"; }?>>
                                            Positive

                                            <input type="radio" name="ValsalvaFR" value="0" id="ValsalvaFR1" <?php if($ValsalvaFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4">Minor’s Sign</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="MinorFL" value="1" id="MinorFL0" <?php if($MinorFL==1){echo "checked"; }?>>
                                            Positive

                                            <input type="radio" name="MinorFL" value="0" id="MinorFL1" <?php if($MinorFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="MinorFR" value="1" id="MinorFR0" <?php if($MinorFR==1){echo "checked"; }?>>
                                            Positive

                                            <input type="radio" name="MinorFR" value="0" id="MinorFR1" <?php if($MinorFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4">Max Cervical Comp</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="MaxFL" value="1" id="MaxFL0" <?php if($MaxFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="MaxFL" value="0" id="MaxFL1" <?php if($MaxFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="MaxFR" value="1" id="MaxFR0" <?php if($MaxFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="MaxFR" value="0" id="MaxFR1" <?php if($MaxFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4">Jackson’s L. Comp.</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="JacksonFL" value="1" id="JacksonFL0" <?php if($JacksonFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="JacksonFL" value="0" id="JacksonFL1" <?php if($JacksonFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="JacksonFR" value="1" id="JacksonFR0" <?php if($JacksonFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="JacksonFR" value="0" id="JacksonFR1" <?php if($JacksonFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4">Foraminal Comp.</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="ForaminalFL" value="1" id="ForaminalFL0" <?php if($ForaminalFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="ForaminalFL" value="0" id="ForaminalFL1" <?php if($ForaminalFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="ForaminalFR" value="1" id="ForaminalFR0" <?php if($ForaminalFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="ForaminalFR" value="0" id="ForaminalFR1" <?php if($ForaminalFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Shoulder Dep.</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="ShoulderFL" value="1" id="ShoulderFL0" <?php if($ShoulderFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="ShoulderFL" value="0" id="ShoulderFL1" <?php if($ShoulderFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="ShoulderFR" value="1" id="ShoulderFR0"  <?php if($ShoulderFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="ShoulderFR" value="0" id="ShoulderFR1" <?php if($ShoulderFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Distraction</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="DistractionFL" value="1" id="DistractionFL0" <?php if($DistractionFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="DistractionFL" value="0" id="DistractionFL1" <?php if($DistractionFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="DistractionFR" value="1" id="DistractionFR0" <?php if($DistractionFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="DistractionFR" value="0" id="DistractionFR1" <?php if($DistractionFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Spurling</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="SpurlingFL" value="1" id="SpurlingFL0" <?php if($SpurlingFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="SpurlingFL" value="0" id="SpurlingFL1" <?php if($SpurlingFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="SpurlingFR" value="1" id="SpurlingFR0" <?php if($SpurlingFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="SpurlingFR" value="0" id="SpurlingFR1" <?php if($SpurlingFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Bakody’s sign </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="BakodyFL" value="1" id="BakodyFL0" <?php if($BakodyFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="BakodyFL" value="0" id="BakodyFL1" <?php if($BakodyFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="BakodyFR" value="1" id="BakodyFR0" <?php if($BakodyFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="BakodyFR" value="0" id="BakodyFR1" <?php if($BakodyFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Soto </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="SotoFL" value="1" id="SotoFL0" <?php if($SotoFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="SotoFL" value="0" id="SotoFL1" <?php if($SotoFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="SotoFR" value="1" id="SotoFR0" <?php if($SotoFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="SotoFR" value="0" id="SotoFR1" <?php if($SotoFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Kemp’s</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="KempFL" value="1" id="KempFL0" <?php if($KempFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="KempFL" value="0" id="KempFL1" <?php if($KempFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="KempFR" value="1" id="KempFR0" <?php if($KempFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="KempFR" value="0" id="KempFR1" <?php if($KempFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4">SLR </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="SLRFL" value="1" id="SLRFL0" <?php if($SLRFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="SLRFL" value="0" id="SLRFL1" <?php if($SLRFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="SLRFR" value="1" id="SLRFR0" <?php if($SLRFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="SLRFR" value="0" id="SLRFR1"  <?php if($SLRFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Ely’s</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="ElyFL" value="1" id="ElyFL0" <?php if($ElyFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="ElyFL" value="0" id="ElyFL1"  <?php if($ElyFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="ElyFR" value="1" id="ElyFR0" <?php if($ElyFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="ElyFR" value="0" id="ElyFR1" <?php if($ElyFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Hibb’s</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="HibbFL" value="1" id="HibbFL0"  <?php if($HibbFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="HibbFL" value="0" id="HibbFL1" <?php if($HibbFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="HibbFR" value="1" id="HibbFR0" <?php if($HibbFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="HibbFR" value="0" id="HibbFR1" <?php if($HibbFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Fabere</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="FabereFL" value="1" id="FabereFL0" <?php if($FabereFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="FabereFL" value="0" id="FabereFL1" <?php if($FabereFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="FabereFR" value="1" id="FabereFR0" <?php if($FabereFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="FabereFR" value="0" id="FabereFR1" <?php if($FabereFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Derifield</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="DerifieldFL" value="1" id="DerifieldFL0" <?php if($DerifieldFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="DerifieldFL" value="0" id="DerifieldFL1" <?php if($DerifieldFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="DerifieldFR" value="1" id="DerifieldFR0" <?php if($DerifieldFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="DerifieldFR" value="0" id="DerifieldFR1" <?php if($DerifieldFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4">Yeoman’s</div>
                                        <div class="col-md-4">

                                            <input type="radio" name="YeomanFL" value="1" id="YeomanFL0" <?php if($YeomanFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="YeomanFL" value="0" id="YeomanFL1" <?php if($YeomanFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="YeomanFR" value="1" id="YeomanFR0" <?php if($YeomanFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="YeomanFR" value="0" id="YeomanFR1" <?php if($YeomanFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Nachlas </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="NachlasFL" value="1" id="NachlasFL0" <?php if($NachlasFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="NachlasFL" value="0" id="NachlasFL1" <?php if($NachlasFL==0){echo "checked"; }?>>
                                            Negative

                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="NachlasFR" value="1" id="NachlasFR0" <?php if($NachlasFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="NachlasFR" value="0" id="NachlasFR1" <?php if($NachlasFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px; margin-right: 2px;border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-md-4"> Seated Gilletes </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="SeatedFL" value="1" id="SeatedFL0" <?php if($SeatedFL==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="SeatedFL" value="0" id="SeatedFL1" <?php if($SeatedFL==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                        <div class="col-md-4">

                                            <input type="radio" name="SeatedFR" value="1" id="SeatedFR0" <?php if($SeatedFR==1){echo "checked"; }?>>
                                            Positive
                                            <input type="radio" name="SeatedFR" value="0" id="SeatedFR1" <?php if($SeatedFR==0){echo "checked"; }?>>
                                            Negative
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label>Muscle Testing (Initial) </label>
                                    <br>
                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid; border-color: darkgray">
                                        <div class="col-sm-4 box">
                                            Muscle
                                        </div>

                                        <div class="col-sm-4 box">
                                            Left</div>
                                        <div class="col-sm-4 box">
                                            Right
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Deltoid (C5)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="deltoidL" value="<?php echo $deltoidL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="deltoidR" value="<?php echo $deltoidR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Biceps (C5,C6)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="bicepsL" value="<?php echo $bicepsL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="bicepsR" value="<?php echo $bicepsR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Wrist Extensors (C6)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="wrist_extensorsL"  value="<?php echo $wrist_extensorsL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="wrist_extensorsR" value="<?php echo $wrist_extensorsR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Wrist Flexors (C7)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="wrist_flexorsL" value="<?php echo $wrist_flexorsL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="wrist_flexorsR" value="<?php echo $wrist_flexorsR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Finger Flexors (C8)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="finger_flexorsL" value="<?php echo $finger_flexorsL ;?>"> 
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="finger_flexorsR" value="<?php echo $finger_flexorsR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Finger Interossei (C8-T1)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="finger_interosseiL" value="<?php echo $finger_interosseiL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="finger_interosseiR" value="<?php echo $finger_interosseiR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Hip Flexors (L1-3)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="hip_flexorsL" value="<?php echo $hip_flexorsL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="hip_flexorsR" value="<?php echo $hip_flexorsR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Knee Extensors (L2-L4)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="knee_extensorsL" value="<?php echo $knee_extensorsL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="knee_extensorsR" value="<?php echo $knee_extensorsR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Foot Eversion (S1)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="foot_eversionL" value="<?php echo $foot_eversionL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="foot_eversionR" value="<?php echo $foot_eversionR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Foot Inversion (L4)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="foot_inversionL" value="<?php echo $foot_inversionL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="foot_inversionR" value="<?php echo $foot_inversionR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Dorsiflex Great Toe (L5)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="dorsiflex_great_toeL" value="<?php echo $dorsiflex_great_toeL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="dorsiflex_great_toeR" value="<?php echo $dorsiflex_great_toeR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">

                                    <label>Muscle Testing (Final) </label>
                                    <br>
                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid; border-color: darkgray">
                                        <div class="col-sm-4 box">
                                            Muscle
                                        </div>

                                        <div class="col-sm-4 box">
                                            Left</div>
                                        <div class="col-sm-4 box">
                                            Right
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Deltoid (C5)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="deltoidFL" value="<?php echo $deltoidFL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="deltoidFR" value="<?php echo $deltoidFR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Biceps (C5,C6)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="bicepsFL" value="<?php echo $bicepsFL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="bicepsFR" value="<?php echo $bicepsFR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Wrist Extensors (C6)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="wrist_extensorsFL" value="<?php echo $wrist_extensorsFL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="wrist_extensorsFR" value="<?php echo $wrist_extensorsFR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Wrist Flexors (C7)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="wrist_flexorsFL" value="<?php echo $wrist_flexorsFL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="wrist_flexorsFR" value="<?php echo $wrist_flexorsFR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Finger Flexors (C8)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="finger_flexorsFL" value="<?php echo $finger_flexorsFL ;?>"> 
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="finger_flexorsFR" value="<?php echo $finger_flexorsFR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Finger Interossei (C8-T1)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="finger_interosseiFL" value="<?php echo $finger_interosseiFL ;?>"
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="finger_interosseiFR" value="<?php echo $finger_interosseiFL ;?>"
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Hip Flexors (L1-3)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="hip_flexorsFL" value="<?php echo $hip_flexorsFL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="hip_flexorsFR" value="<?php echo $hip_flexorsFR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Knee Extensors (L2-L4)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="knee_extensorsFL" value="<?php echo $knee_extensorsFL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="knee_extensorsFR" value="<?php echo $knee_extensorsFR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Foot Eversion (S1)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="foot_eversionFL" value="<?php echo $foot_eversionFL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="foot_eversionFR" value="<?php echo $foot_eversionFR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Foot Inversion (L4)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="foot_inversionFL" value="<?php echo $foot_inversionFL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="foot_inversionFR" value="<?php echo $foot_inversionFR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-left: 2px;margin-right: 2px; border:solid;border-width: 1px 1px; border-color: gainsboro">
                                        <div class="col-sm-4 box">
                                            Dorsiflex Great Toe (L5)
                                        </div>

                                        <div class="col-sm-4 box">

                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="dorsiflex_great_toeFL" value="<?php echo $dorsiflex_great_toeFL ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                        <div class="col-sm-4 box">
                                            <input style="width: 50px; display: inline" type="number" class="form-control" name="dorsiflex_great_toeFR" value="<?php echo $dorsiflex_great_toeFR ;?>">
                                            <p style="display: inline">/5</p>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <p>
                                    Grade Explanations:</p>

                                <p> 5 - Normal - Complete range of motion against gravity with full resistance.</p>
                                <p> 4 - Good - Complete range of motion against gravity with some resistance.</p>
                                <p> 3 - Fair - Complete range of motion against gravity.</p>
                                <p> 2 - Poor - Complete range of motion with gravity eliminated.</p>
                                <p> 1 - Trace - Evidence of slight contractility. No joint motion.</p>
                                <p> 0 - Zero - No evidence of contractility.

                                </p>
                                <br>
                                <label>Dyanometer Grip Test (Initial)</label>
                                <div class="form-group">

                                    <p>

                                        <p>Is Patient left handed/ Right Handed</p>

                                        <input type="radio" name="RadioGroup3" value="1" id="RadioGroup3_0" <?php if($RadioGroup3==1){echo "checked"; }?>>
                                        Right Handed

                                        <input type="radio" name="RadioGroup3" value="0" id="RadioGroup3_1" <?php if($RadioGroup3==0){echo "checked"; }?>>
                                        Left Handed
                                        <label>Left Hand</label>
                                        <input class="au-input au-input--full" type="text" name="LW_KG" placeholder="in kgs" value="<?php echo $LW_KG ;?>">

                                        <label>Right Hand</label>
                                        <input class="au-input au-input--full" type="text" name="RW_KG" placeholder="in kgs" value="<?php echo $RW_KG ;?>">


                                    </p>
                                </div>
                                <br>
                                <label>Dyanometer Grip Test (Final)</label>
                                <div class="form-group">
                                    <p>

                                        <p>Is Patient left handed/ Right Handed</p>
                                        <input type="radio" name="RightH" value="1" id="RightH0" <?php if($RightH==1){echo "checked"; }?>>
                                        Right Handed
                                        <input type="radio" name="RightH" value="0" id="LeftH1" <?php if($RightH==0){echo "checked"; }?>>
                                        Left Handed
                                        <label>Left Hand</label>
                                        <input class="au-input au-input--full" type="text" name="LW_KGF" placeholder="in kgs" value="<?php echo $LW_KGF ;?>">

                                        <label>Right Hand</label>
                                        <input class="au-input au-input--full" type="text" name="RW_KGF" placeholder="in kgs" value="<?php echo $RW_KGF ;?>">
                                    </p>
                                </div>
                                <label>Subluxation in : </label>
                                <div class="row" style="width: 350px">
                                    <div class="col-md-12">
                                        <select type="text" class="multiselect" multiple="multiple" role="multiselect" name="subluxation[]" max="39">
                                            <option value="0" <?php checkSelectedValue1(0);?>>cervical spine</option>
                                            <option value="1" <?php checkSelectedValue1(1);?>>thoracic spine</option>
                                            <option value="2" <?php checkSelectedValue1(2);?>>lumbar spine </option>
                                            <option value="3" <?php checkSelectedValue1(3);?>>pelvis </option>

                                        </select>
                                    </div>
                                </div>

                                <br>
                                <label>Tenderness: The patient had tenderness upon palpation in: </label>
                                <div class="row" style="width: 350px">
                                    <div class="col-md-12">
                                        <select type="text" class="multiselect" multiple role="multiselect" name="tenderness[]" max="39">
                                            <option value="0" <?php checkSelectedValue2(0);?>>Upper cervical spine </option>
                                            <option value="1" <?php checkSelectedValue2(1);?>>Lower cervical spine </option>
                                            <option value="2" <?php checkSelectedValue2(2);?>>Upper thoracic spine </option>
                                            <option value="3" <?php checkSelectedValue2(3);?>>Mid thoracic spine </option>
                                            <option value="4" <?php checkSelectedValue2(4);?>>Lower thoracic spine </option>
                                            <option value="5" <?php checkSelectedValue2(5);?>>Lumbar spine </option>
                                            <option value="6" <?php checkSelectedValue2(6);?>>Right Sacroiliac Joint </option>
                                            <option value="7" <?php checkSelectedValue2(7);?>>Left Sacroiliac Joint </option>
                                            <option value="8" <?php checkSelectedValue2(8);?>>Right ribs </option>
                                            <option value="9" <?php checkSelectedValue2(9);?>>Left Ribs </option>
                                            <option value="10" <?php checkSelectedValue2(10);?>>Right Shoulder </option>
                                            <option value="11" <?php checkSelectedValue2(11);?>>Left Shoulder </option>
                                            <option value="12" <?php checkSelectedValue2(12);?>>Front chest </option>
                                            <option value="13" <?php checkSelectedValue2(13);?>>Right knee </option>
                                            <option value="14" <?php checkSelectedValue2(14);?>>Left knee </option>
                                            <option value="15" <?php checkSelectedValue2(15);?>>Right thigh </option>
                                            <option value="16" <?php checkSelectedValue2(16);?>>Left thigh </option>
                                            <option value="17" <?php checkSelectedValue2(17);?>>Right lower leg </option>
                                            <option value="18" <?php checkSelectedValue2(18);?>>Left lower leg </option>
                                            <option value="19" <?php checkSelectedValue2(19);?>>Right ankle </option>
                                            <option value="20" <?php checkSelectedValue2(20);?>>Lower ankle </option>
                                            <option value="21" <?php checkSelectedValue2(21);?>>Right foot </option>
                                            <option value="11" <?php checkSelectedValue2(22);?>>Left foot </option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <button class="au-btn au-btn--block au-btn--green m-b-20 edit-btn" name="submit_btn">EDIT</button>
                                <button class="au-btn au-btn--block au-btn--green m-b-20 submit-btn" name="submit_btn hide" type="submit">UPDATE</button>
                <a style="width:100%;" href="delete_report.php?id=<?php echo $userid ?>" ><button  class="au-btn au-btn--block au-btn--green m-b-20 delete-btn" name="delete_btn hide">DELETE</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <!-- <script src="vendor/jquery-3.2.1.min.js"></script> -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script>
        $('input,textarea').attr('disabled','disabled');
        $('.submit-btn').hide();
        $('.edit-btn').click(function(e){
            e.preventDefault();
            $('input').removeAttr('disabled');
            $('textarea').removeAttr('disabled');
            $('select').removeAttr('disabled');
            $('.edit-btn').hide();
            $('.submit-btn').show();
            $('.delete-btn').hide();
        });
//        $('input,select').attr('disabled','disabled');
        function editFun(){
            $('input,select,textarea').removeAttr('disabled');
//            $.('submit_btn').test="UPDATE";
        }
    </script>
    <script>
        /**
         * bootstrap-multiselect.js
         * https://github.com/davidstutz/bootstrap-multiselect
         *
         * Copyright 2012, 2013 David Stutz
         * 
         * Dual licensed under the BSD-3-Clause and the Apache License, Version 2.0.
         */
            
            
        ! function($) {

            "use strict"; // jshint ;_;

            if (typeof ko != 'undefined' && ko.bindingHandlers && !ko.bindingHandlers.multiselect) {
                ko.bindingHandlers.multiselect = {
                    init: function(element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {},
                    update: function(element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {
                        var ms = $(element).data('multiselect');
                        if (!ms) {
                            $(element).multiselect(ko.utils.unwrapObservable(valueAccessor()));
                        } else if (allBindingsAccessor().options && allBindingsAccessor().options().length !== ms.originalOptions.length) {
                            ms.updateOriginalOptions();
                            $(element).multiselect('rebuild');
                        }
                    }
                };
            }

            function Multiselect(select, options) {

                this.options = this.mergeOptions(options);
                this.$select = $(select);

                // Initialization.
                // We have to clone to create a new reference.
                this.originalOptions = this.$select.clone()[0].options;
                this.query = '';
                this.searchTimeout = null;

                this.options.multiple = this.$select.attr('multiple') == "multiple";
                this.options.onChange = $.proxy(this.options.onChange, this);

                // Build select all if enabled.
                this.buildContainer();
                this.buildButton();
                this.buildSelectAll();
                this.buildDropdown();
                this.buildDropdownOptions();
                this.buildFilter();
                this.updateButtonText();

                this.$select.hide().after(this.$container);
            };

            Multiselect.prototype = {

                // Default options.
                defaults: {
                    // Default text function will either print 'None selected' in case no
                    // option is selected, or a list of the selected options up to a length of 3 selected options.
                    // If more than 3 options are selected, the number of selected options is printed.
                    buttonText: function(options, select) {
                        if (options.length == 0) {
                            return this.nonSelectedText + ' <b class="caret"></b>';
                        } else {

                            if (options.length > 5) {
                                return options.length + ' ' + this.nSelectedText + ' <b class="caret"></b>';
                            } else {
                                var selected = '';
                                options.each(function() {
                                    var label = ($(this).attr('label') !== undefined) ? $(this).attr('label') : $(this).html();

                                    //Hack by Victor Valencia R.
                                    if ($(select).hasClass('multiselect-icon')) {
                                        var icon = $(this).data('icon');
                                        label = '<span class="glyphicon ' + icon + '"></span> ' + label;
                                    }

                                    selected += label + ', ';
                                });
                                return selected.substr(0, selected.length - 2) + ' <b class="caret"></b>';
                            }
                        }
                    },
                    // Like the buttonText option to update the title of the button.
                    buttonTitle: function(options, select) {
                        if (options.length == 0) {
                            return this.nonSelectedText;
                        } else {
                            var selected = '';
                            options.each(function() {
                                selected += $(this).text() + ', ';
                            });
                            return selected.substr(0, selected.length - 2);
                        }
                    },
                    // Is triggered on change of the selected options.
                    onChange: function(option, checked) {

                    },
                    buttonClass: 'btn',
                    dropRight: false,
                    selectedClass: 'active',
                    buttonWidth: 'auto',
                    buttonContainer: '<div class="btn-group custom-btn" />',
                    // Maximum height of the dropdown menu.
                    // If maximum height is exceeded a scrollbar will be displayed.
                    maxHeight: false,
                    includeSelectAllOption: false,
                    selectAllText: ' Select all',
                    selectAllValue: 'multiselect-all',
                    enableFiltering: false,
                    enableCaseInsensitiveFiltering: false,
                    filterPlaceholder: 'Search',
                    // possible options: 'text', 'value', 'both'
                    filterBehavior: 'text',
                    preventInputChangeEvent: false,
                    nonSelectedText: 'None selected',
                    nSelectedText: 'selected'
                },

                // Templates.
                templates: {
                    button: '<button type="button" class="multiselect dropdown-toggle form-control" data-toggle="dropdown"></button>',
                    ul: '<ul class="multiselect-container dropdown-menu custom-multi"></ul>',
                    filter: '<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span><input class="form-control multiselect-search" type="text"></div>',
                    li: '<li><a href="javascript:void(0);"><label></label></a></li>',
                    liGroup: '<li><label class="multiselect-group"></label></li>'
                },

                constructor: Multiselect,

                buildContainer: function() {
                    this.$container = $(this.options.buttonContainer);
                },

                buildButton: function() {
                    // Build button.
                    this.$button = $(this.templates.button).addClass(this.options.buttonClass);

                    // Adopt active state.
                    if (this.$select.prop('disabled')) {
                        this.disable();
                    } else {
                        this.enable();
                    }

                    // Manually add button width if set.
                    if (this.options.buttonWidth) {
                        this.$button.css({
                            'width': this.options.buttonWidth
                        });
                    }

                    // Keep the tab index from the select.
                    var tabindex = this.$select.attr('tabindex');
                    if (tabindex) {
                        this.$button.attr('tabindex', tabindex);
                    }

                    this.$container.prepend(this.$button)
                },

                // Build dropdown container ul.
                buildDropdown: function() {

                    // Build ul.
                    this.$ul = $(this.templates.ul);

                    if (this.options.dropRight) {
                        this.$ul.addClass('pull-right');
                    }

                    // Set max height of dropdown menu to activate auto scrollbar.
                    if (this.options.maxHeight) {
                        // TODO: Add a class for this option to move the css declarations.
                        this.$ul.css({
                            'max-height': this.options.maxHeight + 'px',
                            'overflow-y': 'auto',
                            'overflow-x': 'hidden'
                        });
                    }

                    this.$container.append(this.$ul)
                },

                // Build the dropdown and bind event handling.
                buildDropdownOptions: function() {

                    this.$select.children().each($.proxy(function(index, element) {
                        // Support optgroups and options without a group simultaneously.
                        var tag = $(element).prop('tagName').toLowerCase();
                        if (tag == 'optgroup') {
                            this.createOptgroup(element);
                        } else if (tag == 'option') {
                            this.createOptionValue(element);
                        }
                        // Other illegal tags will be ignored.
                    }, this));

                    // Bind the change event on the dropdown elements.
                    $('li input', this.$ul).on('change', $.proxy(function(event) {
                        var checked = $(event.target).prop('checked') || false;
                        var isSelectAllOption = $(event.target).val() == this.options.selectAllValue;

                        // Apply or unapply the configured selected class.
                        if (this.options.selectedClass) {
                            if (checked) {
                                $(event.target).parents('li').addClass(this.options.selectedClass);
                            } else {
                                $(event.target).parents('li').removeClass(this.options.selectedClass);
                            }
                        }

                        // Get the corresponding option.
                        var value = $(event.target).val();
                        var $option = this.getOptionByValue(value);

                        var $optionsNotThis = $('option', this.$select).not($option);
                        var $checkboxesNotThis = $('input', this.$container).not($(event.target));

                        // Toggle all options if the select all option was changed.
                        if (isSelectAllOption) {
                            $checkboxesNotThis.filter(function() {
                                return $(this).is(':checked') != checked;
                            }).trigger('click');
                        }

                        if (checked) {
                            $option.prop('selected', true);

                            if (this.options.multiple) {
                                // Simply select additional option.
                                $option.prop('selected', true);
                            } else {
                                // Unselect all other options and corresponding checkboxes.
                                if (this.options.selectedClass) {
                                    $($checkboxesNotThis).parents('li').removeClass(this.options.selectedClass);
                                }

                                $($checkboxesNotThis).prop('checked', false);
                                $optionsNotThis.prop('selected', false);

                                // It's a single selection, so close.
                                this.$button.click();
                            }

                            if (this.options.selectedClass == "active") {
                                $optionsNotThis.parents("a").css("outline", "");
                            }
                        } else {
                            // Unselect option.
                            $option.prop('selected', false);
                        }

                        this.updateButtonText();
                        this.$select.change();
                        this.options.onChange($option, checked);

                        if (this.options.preventInputChangeEvent) {
                            return false;
                        }
                    }, this));

                    $('li a', this.$ul).on('touchstart click', function(event) {
                        event.stopPropagation();
                        $(event.target).blur();
                    });

                    // Keyboard support.
                    this.$container.on('keydown', $.proxy(function(event) {
                        if ($('input[type="text"]', this.$container).is(':focus')) {
                            return;
                        }
                        if ((event.keyCode == 9 || event.keyCode == 27) && this.$container.hasClass('open')) {
                            // Close on tab or escape.
                            this.$button.click();
                        } else {
                            var $items = $(this.$container).find("li:not(.divider):visible a");

                            if (!$items.length) {
                                return;
                            }

                            var index = $items.index($items.filter(':focus'));

                            // Navigation up.
                            if (event.keyCode == 38 && index > 0) {
                                index--;
                            }
                            // Navigate down.
                            else if (event.keyCode == 40 && index < $items.length - 1) {
                                index++;
                            } else if (!~index) {
                                index = 0;
                            }

                            var $current = $items.eq(index);
                            $current.focus();

                            if (event.keyCode == 32 || event.keyCode == 13) {
                                var $checkbox = $current.find('input');

                                $checkbox.prop("checked", !$checkbox.prop("checked"));
                                $checkbox.change();
                            }

                            event.stopPropagation();
                            event.preventDefault();
                        }
                    }, this));
                },

                // Will build an dropdown element for the given option.
                createOptionValue: function(element) {
                    if ($(element).is(':selected')) {
                        $(element).prop('selected', true);
                    }

                    // Support the label attribute on options.
                    var label = $(element).attr('label') || $(element).html();
                    var value = $(element).val();

                    //Hack by Victor Valencia R.            
                    if ($(element).parent().hasClass('multiselect-icon') || $(element).parent().parent().hasClass('multiselect-icon')) {
                        var icon = $(element).data('icon');
                        label = '<span class="glyphicon ' + icon + '"></span> ' + label;
                    }

                    var inputType = this.options.multiple ? "checkbox" : "radio";

                    var $li = $(this.templates.li);
                    $('label', $li).addClass(inputType);
                    $('label', $li).append('<input type="' + inputType + '" />');

                    //Hack by Victor Valencia R.
                    if (($(element).parent().hasClass('multiselect-icon') || $(element).parent().parent().hasClass('multiselect-icon')) && inputType == 'radio') {
                        $('label', $li).css('padding-left', '0px');
                        $('label', $li).find('input').css('display', 'none');
                    }

                    var selected = $(element).prop('selected') || false;
                    var $checkbox = $('input', $li);
                    $checkbox.val(value);

                    if (value == this.options.selectAllValue) {
                        $checkbox.parent().parent().addClass('multiselect-all');
                    }

                    $('label', $li).append(" " + label);

                    this.$ul.append($li);

                    if ($(element).is(':disabled')) {
                        $checkbox.attr('disabled', 'disabled').prop('disabled', true).parents('li').addClass('disabled');
                    }

                    $checkbox.prop('checked', selected);

                    if (selected && this.options.selectedClass) {
                        $checkbox.parents('li').addClass(this.options.selectedClass);
                    }
                },

                // Create optgroup.
                createOptgroup: function(group) {
                    var groupName = $(group).prop('label');

                    // Add a header for the group.
                    var $li = $(this.templates.liGroup);
                    $('label', $li).text(groupName);

                    //Hack by Victor Valencia R.
                    $li.addClass('text-primary');

                    this.$ul.append($li);

                    // Add the options of the group.
                    $('option', group).each($.proxy(function(index, element) {
                        this.createOptionValue(element);
                    }, this));
                },

                // Add the select all option to the select.
                buildSelectAll: function() {
                    var alreadyHasSelectAll = this.$select[0][0] ? this.$select[0][0].value == this.options.selectAllValue : false;
                    // If options.includeSelectAllOption === true, add the include all checkbox.
                    if (this.options.includeSelectAllOption && this.options.multiple && !alreadyHasSelectAll) {
                        this.$select.prepend('<option value="' + this.options.selectAllValue + '">' + this.options.selectAllText + '</option>');
                    }
                },

                // Build and bind filter.
                buildFilter: function() {

                    // Build filter if filtering OR case insensitive filtering is enabled and the number of options exceeds (or equals) enableFilterLength.
                    if (this.options.enableFiltering || this.options.enableCaseInsensitiveFiltering) {
                        var enableFilterLength = Math.max(this.options.enableFiltering, this.options.enableCaseInsensitiveFiltering);
                        if (this.$select.find('option').length >= enableFilterLength) {

                            this.$filter = $(this.templates.filter);
                            $('input', this.$filter).attr('placeholder', this.options.filterPlaceholder);
                            this.$ul.prepend(this.$filter);

                            this.$filter.val(this.query).on('click', function(event) {
                                event.stopPropagation();
                            }).on('keydown', $.proxy(function(event) {
                                // This is useful to catch "keydown" events after the browser has updated the control.
                                clearTimeout(this.searchTimeout);

                                this.searchTimeout = this.asyncFunction($.proxy(function() {

                                    if (this.query != event.target.value) {
                                        this.query = event.target.value;

                                        $.each($('li', this.$ul), $.proxy(function(index, element) {
                                            var value = $('input', element).val();
                                            if (value != this.options.selectAllValue) {
                                                var text = $('label', element).text();
                                                var value = $('input', element).val();
                                                if (value && text && value != this.options.selectAllValue) {
                                                    // by default lets assume that element is not
                                                    // interesting for this search
                                                    var showElement = false;

                                                    var filterCandidate = '';
                                                    if ((this.options.filterBehavior == 'text' || this.options.filterBehavior == 'both')) {
                                                        filterCandidate = text;
                                                    }
                                                    if ((this.options.filterBehavior == 'value' || this.options.filterBehavior == 'both')) {
                                                        filterCandidate = value;
                                                    }

                                                    if (this.options.enableCaseInsensitiveFiltering && filterCandidate.toLowerCase().indexOf(this.query.toLowerCase()) > -1) {
                                                        showElement = true;
                                                    } else if (filterCandidate.indexOf(this.query) > -1) {
                                                        showElement = true;
                                                    }

                                                    if (showElement) {
                                                        $(element).show();
                                                    } else {
                                                        $(element).hide();
                                                    }
                                                }
                                            }
                                        }, this));
                                    }
                                }, this), 300, this);
                            }, this));
                        }
                    }
                },

                // Destroy - unbind - the plugin.
                destroy: function() {
                    this.$container.remove();
                    this.$select.show();
                },

                // Refreshs the checked options based on the current state of the select.
                refresh: function() {
                    $('option', this.$select).each($.proxy(function(index, element) {
                        var $input = $('li input', this.$ul).filter(function() {
                            return $(this).val() == $(element).val();
                        });

                        if ($(element).is(':selected')) {
                            $input.prop('checked', true);

                            if (this.options.selectedClass) {
                                $input.parents('li').addClass(this.options.selectedClass);
                            }
                        } else {
                            $input.prop('checked', false);

                            if (this.options.selectedClass) {
                                $input.parents('li').removeClass(this.options.selectedClass);
                            }
                        }

                        if ($(element).is(":disabled")) {
                            $input.attr('disabled', 'disabled').prop('disabled', true).parents('li').addClass('disabled');
                        } else {
                            $input.prop('disabled', false).parents('li').removeClass('disabled');
                        }
                    }, this));

                    this.updateButtonText();
                },

                // Select an option by its value or multiple options using an array of values.
                select: function(selectValues) {
                    if (selectValues && !$.isArray(selectValues)) {
                        selectValues = [selectValues];
                    }

                    for (var i = 0; i < selectValues.length; i++) {

                        var value = selectValues[i];

                        var $option = this.getOptionByValue(value);
                        var $checkbox = this.getInputByValue(value);

                        if (this.options.selectedClass) {
                            $checkbox.parents('li').addClass(this.options.selectedClass);
                        }

                        $checkbox.prop('checked', true);
                        $option.prop('selected', true);
                        this.options.onChange($option, true);
                    }

                    this.updateButtonText();
                },

                // Deselect an option by its value or using an array of values.
                deselect: function(deselectValues) {
                    if (deselectValues && !$.isArray(deselectValues)) {
                        deselectValues = [deselectValues];
                    }

                    for (var i = 0; i < deselectValues.length; i++) {

                        var value = deselectValues[i];

                        var $option = this.getOptionByValue(value);
                        var $checkbox = this.getInputByValue(value);

                        if (this.options.selectedClass) {
                            $checkbox.parents('li').removeClass(this.options.selectedClass);
                        }

                        $checkbox.prop('checked', false);
                        $option.prop('selected', false);
                        this.options.onChange($option, false);
                    }

                    this.updateButtonText();
                },

                // Rebuild the whole dropdown menu.
                rebuild: function() {
                    this.$ul.html('');

                    // Remove select all option in select.
                    $('option[value="' + this.options.selectAllValue + '"]', this.$select).remove();

                    // Important to distinguish between radios and checkboxes.
                    this.options.multiple = this.$select.attr('multiple') == "multiple";

                    this.buildSelectAll();
                    this.buildDropdownOptions();
                    this.updateButtonText();
                    this.buildFilter();
                },

                // Build select using the given data as options.
                dataprovider: function(dataprovider) {
                    var optionDOM = "";
                    dataprovider.forEach(function(option) {
                        optionDOM += '<option value="' + option.value + '">' + option.label + '</option>';
                    });

                    this.$select.html(optionDOM);
                    this.rebuild();
                },

                // Enable button.
                enable: function() {
                    this.$select.prop('disabled', false);
                    this.$button.prop('disabled', false)
                        .removeClass('disabled');
                },

                // Disable button.
                disable: function() {
                    this.$select.prop('disabled', true);
                    this.$button.prop('disabled', true)
                        .addClass('disabled');
                },

                // Set options.
                setOptions: function(options) {
                    this.options = this.mergeOptions(options);
                },

                // Get options by merging defaults and given options.
                mergeOptions: function(options) {
                    return $.extend({}, this.defaults, options);
                },

                // Update button text and button title.
                updateButtonText: function() {
                    var options = this.getSelected();

                    // First update the displayed button text.
                    $('button', this.$container).html(this.options.buttonText(options, this.$select));

                    // Now update the title attribute of the button.
                    $('button', this.$container).attr('title', this.options.buttonTitle(options, this.$select));

                },

                // Get all selected options.
                getSelected: function() {
                    return $('option[value!="' + this.options.selectAllValue + '"]:selected', this.$select).filter(function() {
                        return $(this).prop('selected');
                    });
                },

                // Get the corresponding option by ts value.
                getOptionByValue: function(value) {
                    return $('option', this.$select).filter(function() {
                        return $(this).val() == value;
                    });
                },

                // Get an input in the dropdown by its value.
                getInputByValue: function(value) {
                    return $('li input', this.$ul).filter(function() {
                        return $(this).val() == value;
                    });
                },

                updateOriginalOptions: function() {
                    this.originalOptions = this.$select.clone()[0].options;
                },

                asyncFunction: function(callback, timeout, self) {
                    var args = Array.prototype.slice.call(arguments, 3);
                    return setTimeout(function() {
                        callback.apply(self || window, args);
                    }, timeout);
                }
            };

            $.fn.multiselect = function(option, parameter) {
                return this.each(function() {
                    var data = $(this).data('multiselect'),
                        options = typeof option == 'object' && option;

                    // Initialize the multiselect.
                    if (!data) {
                        $(this).data('multiselect', (data = new Multiselect(this, options)));
                    }

                    // Call multiselect method.
                    if (typeof option == 'string') {
                        data[option](parameter);
                    }
                });
            };

            $.fn.multiselect.Constructor = Multiselect;

            // Automatically init selects by their data-role.
            $(function() {
                $("select[role='multiselect']").multiselect();
            });

        }(window.jQuery);

    </script>
</body>

</html>
<!-- end document-->
