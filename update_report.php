<?php 
$con=require_once("connection.php");

$user_id=$_POST["user_id"];

$p_name=$_POST["P_NAME"];
$dob=$_POST["DOB"];
$doi=$_POST["DOI"];
$l_name=$_POST["Lawyer_NAME"];
$l_addr=$_POST["Lawyer_addr"];
$exam_state=$_POST["exam_state"];
$gap=$_POST["RadioGroup2"];
$reason1=$_POST["reason1"];
$reason2=$_POST["reason2"];
$filename=$_POST["filename"];

$query="update basicinfo_section1 set patient_name='$p_name',dob='$dob',do_Injury='$doi',lawyer_name='$l_name',lawyer_address='$l_addr',exam_state=$exam_state,gap='$gap',reason1='$reason1',reason2='$reason2',image_upld='$filename' where id='$user_id'";

$result =mysqli_query($con,$query);
$init_injuries=$_POST["init_injuries"];
$query2="DELETE FROM initial_injuries WHERE user_id='$user_id'";
foreach($init_injuries as $value){
    $query2 ="Insert into initial_injuries (user_id,init_injuries) VALUES ('$user_id','$value')";
}
$result2 = $con->query($query2);

$p_exam=$_POST["P_Exam"];
$height=$_POST["height"];
$weight=$_POST["weight"];
$bp=$_POST["BP"];
$query3="update physical_exm_section2 set physical_exm='$p_exam',height='$height',weight='$weight',blood_pressure='$bp' where user_id='$user_id'";
$result3 =mysqli_query($con,$query3);

$c_flexion_normal_init=$_POST["c_flexion_normal_init"];
$c_flexion_note_init=$_POST["c_flexion_note_init"];
$c_extension_normal_init=$_POST["c_extension_normal_init"];
$c_extension_note_init=$_POST["c_extension_note_init"];
$c_right_lateral_flexion_normal_init=$_POST["c_right_lateral_flexion_normal_init"];
$c_right_lateral_flexion_note_init=$_POST["c_right_lateral_flexion_note_init"];
$c_left_lateral_flexion_normal_init=$_POST["c_left_lateral_flexion_normal_init"];
$c_left_lateral_flexion_note_init=$_POST["c_left_lateral_flexion_note_init"];
$c_right_rotation_normal_init=$_POST["c_right_rotation_normal_init"];
$c_rignt_rotation_note_init=$_POST["c_rignt_rotation_note_init"];
$c_left_rotation_normal_init=$_POST["c_left_rotation_normal_init"];
$c_left_rotation_note_init=$_POST["c_left_rotation_note_init"];
$query4="update spinal_rom_init_cervical set Flexion_normal='".$c_flexion_normal_init."',Flexion_note='".$c_flexion_note_init."',Extension_normal='".$c_extension_normal_init."',Extension_note='".$c_extension_note_init."',	Right_lateral_flexion_normal='".$c_right_lateral_flexion_normal_init."',Right_lateral_flexion_note='".$c_right_lateral_flexion_note_init."',Left_lateral_flexion_normal='".$c_left_lateral_flexion_normal_init."',Left_lateral_flexion_note='".$c_left_lateral_flexion_note_init."',Right_rotation_normal='".$c_right_rotation_normal_init."',Right_rotation_note='".$c_rignt_rotation_note_init."',Left_rotation_normal='".$c_left_rotation_normal_init."',Left_rotation_note='".$c_left_rotation_note_init."' where user_id='$user_id'";
$result4 =mysqli_query($con,$query4);

$l_flexion_normal_init=$_POST["l_flexion_normal_init"];
$l_flexion_note_init=$_POST["l_flexion_note_init"];
$l_extension_normal_init=$_POST["l_extension_normal_init"];
$l_extension_note_init=$_POST["l_extension_note_init"];
$l_right_lateral_flexion_normal_init=$_POST["l_right_lateral_flexion_normal_init"];
$l_right_lateral_flexion_note_init=$_POST["l_right_lateral_flexion_note_init"];
$l_left_lateral_flexion_normal_init=$_POST["l_left_lateral_flexion_normal_init"];
$l_left_lateral_flexion_note_init=$_POST["l_left_lateral_flexion_note_init"];
$l_right_rotation_normal_init=$_POST["l_right_rotation_normal_init"];
$l_rignt_rotation_note_init=$_POST["l_rignt_rotation_note_init"];
$l_left_rotation_normal_init=$_POST["l_left_rotation_normal_init"];
$l_left_rotation_note_init=$_POST["l_left_rotation_note_init"];
$query5="update spinal_rom_init_lumbar set Flexion_normal='".$l_flexion_normal_init."',Flexion_comments='".$l_flexion_note_init."',Extension_normal='".$l_extension_normal_init."',Extension_comments='".$l_extension_note_init."',	Right_lateral_flexion_normal='".$l_right_lateral_flexion_normal_init."',Right_lateral_flexion_comments='".$l_right_lateral_flexion_note_init."',Left_lateral_flexion_normal='".$l_left_lateral_flexion_normal_init."',Left_lateral_flexion_comments='".$l_left_lateral_flexion_note_init."',Right_rotation_normal='".$l_right_rotation_normal_init."',Right_rotation_comments='".$l_rignt_rotation_note_init."',Left_rotation_normal='".$l_left_rotation_normal_init."',Left_rotation_comments='".$l_left_rotation_note_init."' where user_id='$user_id'";
$result5 =mysqli_query($con,$query5);

$c_flexion_normal_final=$_POST["c_flexion_normal_final"];
$c_flexion_note_final=$_POST["c_flexion_note_final"];
$c_extension_normal_final=$_POST["c_extension_normal_final"];
$c_extension_note_final=$_POST["c_extension_note_final"];
$c_right_lateral_flexion_normal_final=$_POST["c_right_lateral_flexion_normal_final"];
$c_right_lateral_flexion_note_final=$_POST["c_right_lateral_flexion_note_final"];
$c_left_lateral_flexion_normal_final=$_POST["c_left_lateral_flexion_normal_final"];
$c_left_lateral_flexion_note_final=$_POST["c_left_lateral_flexion_note_final"];
$c_right_rotation_normal_final=$_POST["c_right_rotation_normal_final"];
$c_rignt_rotation_note_final=$_POST["c_rignt_rotation_note_final"];
$c_left_rotation_normal_final=$_POST["c_left_rotation_normal_final"];
$c_left_rotation_note_final=$_POST["c_left_rotation_note_final"];
$query6="update spinal_rom_final_cervical set Flexion_normal='".$c_flexion_normal_final."',Flexion_note='".$c_flexion_note_final."',Extension_normal='".$c_extension_normal_final."',Extension_note='".$c_extension_note_final."',	Right_lateral_flexion_normal='".$c_right_lateral_flexion_normal_final."',Right_lateral_flexion_note='".$c_right_lateral_flexion_note_final."',Left_lateral_flexion_normal='".$c_left_lateral_flexion_normal_final."',Left_lateral_flexion_note='".$c_left_lateral_flexion_note_final."',Right_rotation_normal='".$c_right_rotation_normal_final."',Right_rotation_note='".$c_rignt_rotation_note_final."',Left_rotation_normal='".$c_left_rotation_normal_final."',Left_rotation_note='".$c_left_rotation_note_final."' where user_id='$user_id'";
$result6 =mysqli_query($con,$query6);

$l_flexion_normal_final=$_POST["l_flexion_normal_final"];
$l_flexion_note_final=$_POST["l_flexion_note_final"];
$l_extension_normal_final=$_POST["l_extension_normal_final"];
$l_extension_note_final=$_POST["l_extension_note_final"];
$l_right_lateral_flexion_normal_final=$_POST["l_right_lateral_flexion_normal_final"];
$l_right_lateral_flexion_note_final=$_POST["l_right_lateral_flexion_note_final"];
$l_left_lateral_flexion_normal_final=$_POST["l_left_lateral_flexion_normal_final"];
$l_left_lateral_flexion_note_final=$_POST["l_left_lateral_flexion_note_final"];
$l_right_rotation_normal_final=$_POST["l_right_rotation_normal_final"];
$l_rignt_rotation_note_final=$_POST["l_rignt_rotation_note_final"];
$l_left_rotation_normal_final=$_POST["l_left_rotation_normal_final"];
$l_left_rotation_note_final=$_POST["l_left_rotation_note_final"];
$query7="update spinal_rom_final_lumbar set Flexion_normal='".$l_flexion_normal_final."',Flexion_comments='".$l_flexion_note_final."',Extension_normal='".$l_extension_normal_final."',Extension_comments='".$l_extension_note_final."',	Right_lateral_flexion_normal='".$l_right_lateral_flexion_normal_final."',Right_lateral_flexion_comments='".$l_right_lateral_flexion_note_final."',Left_lateral_flexion_normal='".$l_left_lateral_flexion_normal_final."',Left_lateral_flexion_comments='".$l_left_lateral_flexion_note_final."',Right_rotation_normal='".$l_right_rotation_normal_final."',Right_rotation_comments='".$l_rignt_rotation_note_final."',Left_rotation_normal='".$l_left_rotation_normal_final."',Left_rotation_comments='".$l_left_rotation_note_final."' where user_id='$user_id'";
$result7 =mysqli_query($con,$query7);

$ValsalvaL=$_POST["ValsalvaL"];         
$MinorL=$_POST["MinorL"];         
$MaxL=$_POST["MaxL"];        
$JacksonL=$_POST["JacksonL"];      
$ForaminalL=$_POST["ForaminalL"];                
$ShoulderL=$_POST["ShoulderL"];         
$DistractionL=$_POST["DistractionL"];  
$SpurlingL=$_POST["SpurlingL"];
$BakodyL=$_POST["BakodyL"];
$SotoL=$_POST["SotoL"];
$KempL=$_POST["KempL"];
$SLRL=$_POST["SLRL"];
$ElyL=$_POST["ElyL"];
$HibbL=$_POST["HibbL"];
$FabereL=$_POST["FabereL"];
$DerifieldL=$_POST["DerifieldL"];
$YeomanL=$_POST["YeomanL"];
$NachlasL=$_POST["NachlasL"];
$SeatedL=$_POST["SeatedL"];
$ValsalvaR=$_POST["ValsalvaR"];
$MinorR=$_POST["MinorR"];
$MaxR=$_POST["MaxR"];
$JacksonR=$_POST["JacksonR"];
$ForaminalR=$_POST["ForaminalR"];
$ShoulderR=$_POST["ShoulderR"];
$DistractionR=$_POST["DistractionR"];
$SpurlingR=$_POST["SpurlingR"];
$BakodyR=$_POST["BakodyR"];
$SotoR=$_POST["SotoR"];
$KempR=$_POST["KempR"];
$SLRR=$_POST["SLRR"];
$ElyR=$_POST["ElyR"];
$HibbR=$_POST["HibbR"];
$FabereR=$_POST["FabereR"];
$DerifieldR=$_POST["DerifieldR"];
$YeomanR=$_POST["YeomanR"];
$NachlasR=$_POST["NachlasR"];
$SeatedR=$_POST["SeatedR"];
$query8="update  orthopedic_tests_init set Valsalva_left='$ValsalvaL' ,Valsalva_right='$ValsalvaR' ,Minor_sign_left='$MinorL' ,Minor_sign_right='$MinorR' ,Max_cervical_comp_left='$MaxL' ,Max_cervical_comp_right='$MaxR' ,JacksonL_comp_left='$JacksonL' ,JacksonL_comp_right='$JacksonR' ,Foraminal_comp_left='$ForaminalL' ,Foraminal_comp_right='$ForaminalR' ,Shoulder_dep_left='$ShoulderL' ,Shoulder_dep_right='$ShoulderR' ,Distraction_left='$DistractionL' ,Distraction_right='$DistractionR' ,Spurling_left='$SpurlingL' ,Spurling_right='$SpurlingR' ,Bakody_sign_left='$BakodyL' ,Bakody_sign_right='$BakodyR',	Soto_left='$SotoL' ,Soto_right='$SotoR' ,Kemp_left='$KempL',Kemp_right='$KempR' ,SLR_left='$SLRL' ,SLR_right='$SLRR',Ely_left='$ElyL' ,Ely_right='$ElyR' ,Hibb_left='$HibbL' ,Hibb_right='$HibbR' ,	Fabere_left='$FabereL' ,Fabere_right='$FabereR' ,Derifield_left='$DerifieldL' ,Derifield_right='$DerifieldR' ,Yeoman_left='$YeomanL' ,Yeoman_right='$YeomanR' ,Nachlas_left='$NachlasL' ,Nachlas_rigth='$NachlasR' ,Seated_gilletes_left='$SeatedL' ,Seated_gilletes_right='$SeatedR' where user_id='$user_id'";
$result8 =mysqli_query($con,$query8);

$ValsalvaFL=$_POST["ValsalvaFL"];
$MinorFL=$_POST["MinorFL"];
$MaxFL=$_POST["MaxFL"];
$JacksonFL=$_POST["JacksonFL"];
$ForaminalFL=$_POST["ForaminalFL"];
$ShoulderFL=$_POST["ShoulderFL"];
$DistractionFL=$_POST["DistractionFL"];
$SpurlingFL=$_POST["SpurlingFL"];
$BakodyFL=$_POST["BakodyFL"];
$SotoFL=$_POST["SotoFL"];
$KempFL=$_POST["KempFL"];
$SLRFL=$_POST["SLRFL"];
$ElyFL=$_POST["ElyFL"];
$HibbFL=$_POST["HibbFL"];
$FabereFL=$_POST["FabereFL"];
$DerifieldFL=$_POST["DerifieldFL"];
$YeomanFL=$_POST["YeomanFL"];
$NachlasFL=$_POST["NachlasFL"];
$SeatedFL=$_POST["SeatedFL"];
$ValsalvaFR=$_POST["ValsalvaFR"];
$MinorFR=$_POST["MinorFR"];
$MaxFR=$_POST["MaxFR"];
$JacksonFR=$_POST["JacksonFR"];
$ForaminalFR=$_POST["ForaminalFR"];
$ShoulderFR=$_POST["ShoulderFR"];
$DistractionFR=$_POST["DistractionFR"];
$SpurlingFR=$_POST["SpurlingFR"];
$BakodyFR=$_POST["BakodyFR"];
$SotoFR=$_POST["SotoFR"];
$KempFR=$_POST["KempFR"];
$SLRFR=$_POST["SLRFR"];
$ElyFR=$_POST["ElyFR"];
$HibbFR=$_POST["HibbFR"];
$FabereFR=$_POST["FabereFR"];
$DerifieldFR=$_POST["DerifieldFR"];
$YeomanFR=$_POST["YeomanFR"];
$NachlasFR=$_POST["NachlasFR"];
$SeatedFR=$_POST["SeatedFR"];
$query9="update  orthopedic_tests_final set Valsalva_left='$ValsalvaFL' ,Valsalva_right='$ValsalvaFR' ,Minor_sign_left='$MinorFL' ,Minor_sign_right='$MinorFR' ,Max_cervical_comp_left='$MaxFL' ,Max_cervical_comp_right='$MaxFR' ,Jackson_l_comp_left='$JacksonFL' ,Jackson_l_comp_right='$JacksonFR' ,Foraminal_comp_left='$ForaminalL' ,Foraminal_comp_right='$ForaminalR' ,Shoulder_dep_left='$ShoulderFL' ,Shoulder_dep_right='$ShoulderFR' ,Distraction_left='$DistractionFL' ,Distraction_right='$DistractionFR' ,Spurling_left='$SpurlingFL' ,Spurling_right='$SpurlingFR' ,Bakody_sign_left='$BakodyFL' ,Bakody_sign_right='$BakodyFR',Soto_left='$SotoFL' ,Soto_right='$SotoFR' ,Kemp_left='$KempFL',Kemp_right='$KempFR' ,SLR_left='$SLRFL' ,SLR_right='$SLRFR',Ely_left='$ElyFL' ,Ely_right='$ElyFR' ,Hibb_left='$HibbFL' ,Hibb_right='$HibbFR' ,Fabere_left='$FabereFL' ,Fabere_right='$FabereFR' ,Derifield_left='$DerifieldFL' ,Derifield_right='$DerifieldFR' ,Yeoman_left='$YeomanFL' ,Yeoman_right='$YeomanFR' ,Nachlas_left='$NachlasFL' ,Nachlas_right='$NachlasFR' ,Seated_left='$SeatedFL' ,Seated_right='$SeatedFR' where user_id='$user_id'";
$result9 =mysqli_query($con,$query9);

$deltoidL=$_POST["deltoidL"];
$bicepsL=$_POST["bicepsL"];
$wrist_extensorsL=$_POST["wrist_extensorsL"];
$wrist_flexorsL=$_POST["wrist_flexorsL"];
$finger_flexorsL=$_POST["finger_flexorsL"];
$finger_interosseiL=$_POST["finger_interosseiL"];
$hip_flexorsL=$_POST["hip_flexorsL"];
$knee_extensorsL=$_POST["knee_extensorsL"];
$foot_eversionL=$_POST["foot_eversionL"];
$foot_inversionL=$_POST["foot_inversionL"];
$dorsiflex_great_toeL=$_POST["dorsiflex_great_toeL"];
$deltoidR=$_POST["deltoidR"];
$bicepsR=$_POST["bicepsR"];
$wrist_extensorsR=$_POST["wrist_extensorsR"];
$wrist_flexorsR=$_POST["wrist_flexorsR"];
$finger_flexorsR=$_POST["finger_flexorsR"];
$finger_interosseiR=$_POST["finger_interosseiR"];
$hip_flexorsR=$_POST["hip_flexorsR"];
$knee_extensorsR=$_POST["knee_extensorsR"];
$foot_eversionR=$_POST["foot_eversionR"];
$foot_inversionR=$_POST["foot_inversionR"];
$dorsiflex_great_toeR=$_POST["dorsiflex_great_toeR"];
$deltoidFL=$_POST["deltoidFL"];
$bicepsFL=$_POST["bicepsFL"];
$wrist_extensorsFL=$_POST["wrist_extensorsFL"];
$wrist_flexorsFL=$_POST["wrist_flexorsFL"];
$finger_flexorsFL=$_POST["finger_flexorsFL"];
$finger_interosseiFL=$_POST["finger_interosseiFL"];
$hip_flexorsFL=$_POST["hip_flexorsFL"];
$knee_extensorsFL=$_POST["knee_extensorsFL"];
$foot_eversionFL=$_POST["foot_eversionFL"];
$foot_inversionFL=$_POST["foot_inversionFL"];
$dorsiflex_great_toeFL=$_POST["dorsiflex_great_toeFL"];
$deltoidFR=$_POST["deltoidFR"];
$bicepsFR=$_POST["bicepsFR"];
$wrist_extensorsFR=$_POST["wrist_extensorsFR"];
$wrist_flexorsFR=$_POST["wrist_flexorsFR"];
$finger_flexorsFR=$_POST["finger_flexorsFR"];
$finger_interosseiFR=$_POST["finger_interosseiFR"];
$hip_flexorsFR=$_POST["hip_flexorsFR"];
$knee_extensorsFR=$_POST["knee_extensorsFR"];
$foot_eversionFR=$_POST["foot_eversionFR"];
$foot_inversionFR=$_POST["foot_inversionFR"];
$dorsiflex_great_toeFR=$_POST["dorsiflex_great_toeFR"];
$query10="update muscle_testing_init set Deltoid_left='$deltoidL',Deltoid_right='$deltoidR',Biceps_left='$bicepsL',Biceps_right='$bicepsR',Wrist_extensors_left='$wrist_extensorsL',	Wrist_extensors_right='$wrist_extensorsR',Wrist_flexors_left='$wrist_flexorsL',Wrist_flexors_right='$wrist_flexorsR',Finger_flexors_left='$finger_flexorsL',Finger_flexors_right='$finger_flexorsR',	Finger_interossei_left='$finger_interosseiL',Finger_interossei_right='$finger_interosseiR',Hip_flexors_left='$hip_flexorsL',Hip_flexors_right='$hip_flexorsR',Knee_extensors_left='$knee_extensorsL',Knee_extensors_right='$knee_extensorsR',Foot_eversion_left='$foot_eversionL',Foot_eversion_right='$foot_eversionR',Foot_inversion_left='$foot_inversionL',	Foot_inversion_right='$foot_inversionR',Dorsiflex_great_toe_left='$dorsiflex_great_toeL',Dorsiflex_great_toe_right='$dorsiflex_great_toeR' where user_id='$user_id'";
$result10 =mysqli_query($con,$query10);

$query11="update muscle_testing_final set Deltoid_left='$deltoidFL',Deltoid_right='$deltoidFR',Biceps_left='$bicepsFL',Biceps_right='$bicepsFR',Wrist_extensors_left='$wrist_extensorsFL',	Wrist_extensors_right='$wrist_extensorsFR',Wrist_flexors_left='$wrist_flexorsFL',Wrist_flexors_right='$wrist_flexorsFR',Finger_flexors_left='$finger_flexorsFL',Finger_flexors_right='$finger_flexorsFR',	Finger_interossei_left='$finger_interosseiFL',Finger_interossei_right='$finger_interosseiFR',Hip_flexors_left='$hip_flexorsFL',Hip_flexors_right='$hip_flexorsFR',Knee_extensors_left='$knee_extensorsFL',Knee_extensors_right='$knee_extensorsFR',Foot_eversion_left='$foot_eversionFL',Foot_eversion_right='$foot_eversionFR',Foot_inversion_left='$foot_inversionFL',	Foot_inversion_right='$foot_inversionFR',Dorsiflex_great_toe_left='$dorsiflex_great_toeFL',Dorsiflex_great_toe_right='$dorsiflex_great_toeFR' where user_id='$user_id'";
$result11 =mysqli_query($con,$query11);

$RadioGroup3=$_POST["RadioGroup3"];
$LW_KG=$_POST["LW_KG"];
$RW_KG=$_POST["RW_KG"];
$query12="update dyanometer_grip_test_init set right_h='$RadioGroup3',right_h_weight='$LW_KG',left_h_weight='$RW_KG' where user_id='$user_id'";
$result12 =mysqli_query($con,$query12);

$RightH=$_POST["RightH"];
$LW_KGF=$_POST["LW_KGF"];
$RW_KGF=$_POST["RW_KGF"];
$query13="update dyanometer_grip_test_final set right_h='$RightH',right_h_weight='$LW_KGF',left_h_weight='$RW_KGF' where user_id='$user_id'";
$result13 =mysqli_query($con,$query13);

$subluxation=$_POST["subluxation"];
$tenderness=$_POST["tenderness"];
$query14="DELETE FROM subluxation WHERE user_id='$user_id'";
foreach($subluxation as $value){
    $query14="insert into subluxation(user_id,subluxation) values('$user_id','$value')";
}
$result14 =mysqli_query($con,$query14);
$query15="DELETE FROM tenderness WHERE user_id='$user_id'";
foreach($tenderness as $value){
    $query15="insert into tenderness(user_id,tenderness) values('$user_id','$value')";
}
$result15 =mysqli_query($con,$query14);

if($result and $result2 and $result3 and $result4 and $result5 and $result6 and $result7 and $result8 and $result9 and $result10 and $result11 and $result12 and $result13 and $result14 and $result15){
    header("location:view_report.php?id=".$user_id);   
}else{
    echo "Error".mysqli_error($con);
    //header("location:view_report.php?error=update");
}
?>