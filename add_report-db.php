<?php
$con = require_once ("connection.php");
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
$init_injuries=$_POST["init_injuries"];
$query="insert into basicinfo_section1 (patient_name,dob,do_Injury,lawyer_name,lawyer_address,exam_state,gap,reason1,reason2,image_upld) values( '".$p_name."','".$dob."','".$doi."','".$l_name."','".$l_addr."','".$exam_state."','".$gap."','".$reason1."','".$reason2."','".$filename."')";

$result = $con->query($query);
if($result){
        $user_id = $con->insert_id;
}

//initial injuries
foreach($init_injuries as $value){
    $query = "Insert into initial_injuries (user_id,init_injuries) VALUES ('$user_id','$value')";
    $result = $con->query($query);
    echo $con->error;
}

$p_exam=$_POST["P_Exam"];
$height=$_POST["height"];
$weight=$_POST["weight"];
$bp=$_POST["BP"];
$query2="insert into physical_exm_section2(physical_exm,height,weight,blood_pressure,user_id) values('$p_exam','$height','$weight','$bp',$user_id)";
if(isset($_POST["c_flexion_normal_init"]) and
isset($_POST["c_flexion_normal_init"]) and                         
isset($_POST["c_flexion_note_init"]) and
isset($_POST["c_extension_normal_init"]) and
isset($_POST["c_extension_note_init"]) and
isset($_POST["c_right_lateral_flexion_normal_init"]) and      
isset($_POST["c_right_lateral_flexion_note_init"]) and     
isset($_POST["c_left_lateral_flexion_normal_init"]) and  
isset($_POST["c_left_lateral_flexion_note_init"]) and     
isset($_POST["c_right_rotation_normal_init"]) and  
isset($_POST["c_rignt_rotation_note_init"]) and  
isset($_POST["c_left_rotation_normal_init"]) and         
isset($_POST["c_left_rotation_note_init"]))
{
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
}
else{
    echo "not isset!!!!!!!!!!!!!!!!!!!!!!!1";
}
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

$RadioGroup3=$_POST["RadioGroup3"];
$RadioGroup3=$_POST["RadioGroup3"];
$LW_KG=$_POST["LW_KG"];
$RW_KG=$_POST["RW_KG"];
$RightH=$_POST["RightH"];
$RightH=$_POST["RightH"];
$LW_KGF=$_POST["LW_KGF"];
$RW_KGF=$_POST["RW_KGF"];

$subluxation=$_POST["subluxation"];
$tenderness=$_POST["tenderness"];
    

$query3="insert into spinal_rom_init_cervical(user_id,Flexion,Flexion_normal,Flexion_note,Extension,Extension_normal,Extension_note,Right_lateral_flexion,	Right_lateral_flexion_normal,Right_lateral_flexion_note,Left_lateral_flexion,Left_lateral_flexion_normal,Left_lateral_flexion_note,	Right_rotation,Right_rotation_normal,Right_rotation_note,Left_rotation,Left_rotation_normal,Left_rotation_note) values('$user_id','flexion','".$c_flexion_normal_init."','".$c_flexion_note_init."','extension','".$c_extension_normal_init."','".$c_extension_note_init."','right_lateral_flexion','".$c_right_lateral_flexion_normal_init."','".$c_right_lateral_flexion_note_init."','left_lateral_flexion','".$c_left_lateral_flexion_normal_init."','".$c_left_lateral_flexion_note_init."','right_rotation','".$c_right_rotation_normal_init."','".$c_rignt_rotation_note_init."','left_rotation','".$c_left_rotation_normal_init."','".$c_left_rotation_note_init."')";

$query4="insert into spinal_rom_init_lumbar(user_id,Flexion,Flexion_normal,Flexion_comments,Extension,Extension_normal,Extension_comments,Right_lateral_flexion,	Right_lateral_flexion_normal,Right_lateral_flexion_comments,Left_lateral_flexion,Left_lateral_flexion_normal,Left_lateral_flexion_comments,	Right_rotation,Right_rotation_normal,Right_rotation_comments,Left_rotation,Left_rotation_normal,Left_rotation_comments) values('$user_id',  'flexion','".$l_flexion_normal_init."','".$l_flexion_note_init."','extension','".$l_extension_normal_init."','".$l_extension_note_init."','right_lateral_flexion','".$l_right_lateral_flexion_normal_init."','".$l_right_lateral_flexion_note_init."','left_lateral_flexion','".$l_left_lateral_flexion_normal_init."','".$l_left_lateral_flexion_note_init."','right_rotation','".$l_right_rotation_normal_init."','".$l_rignt_rotation_note_init."','left_rotation','".$l_left_rotation_normal_init."','".$l_left_rotation_note_init."')";

$query5="insert into spinal_rom_final_cervical(user_id,Flexion,Flexion_normal,Flexion_note,Extension,Extension_normal,Extension_note,Right_lateral_flexion,	Right_lateral_flexion_normal,Right_lateral_flexion_note,Left_lateral_flexion,Left_lateral_flexion_normal,Left_lateral_flexion_note,	Right_rotation,Right_rotation_normal,Right_rotation_note,Left_rotation,Left_rotation_normal,Left_rotation_note) values('$user_id','flexion','".$c_flexion_normal_final."','".$c_flexion_note_final."','extension','".$c_extension_normal_final."','".$c_extension_note_final."','right_lateral_flexion','".$c_right_lateral_flexion_normal_final."','".$c_right_lateral_flexion_note_final."','left_lateral_flexion','".$c_left_lateral_flexion_normal_final."','".$c_left_lateral_flexion_note_final."','right_rotation','".$c_right_rotation_normal_final."','".$c_rignt_rotation_note_final."','left_rotation','".$c_left_rotation_normal_final."','".$c_left_rotation_note_final."')";

$query6="insert into spinal_rom_final_lumbar(user_id,Flexion,Flexion_normal,Flexion_comments,Extension,Extension_normal,Extension_comments,Right_lateral_flexion,	Right_lateral_flexion_normal,Right_lateral_flexion_comments,Left_lateral_flexion,Left_lateral_flexion_normal,Left_lateral_flexion_comments,	Right_rotation,Right_rotation_normal,Right_rotation_comments,Left_rotation,Left_rotation_normal,Left_rotation_comments) values('$user_id','flexion','".$l_flexion_normal_final."','".$l_flexion_note_final."','extension','".$l_extension_normal_final."','".$l_extension_note_final."','right_lateral_flexion','".$l_right_lateral_flexion_normal_final."','".$l_right_lateral_flexion_note_final."','left_lateral_flexion','".$l_left_lateral_flexion_normal_final."','".$l_left_lateral_flexion_note_final."','right_rotation','".$l_right_rotation_normal_final."','".$l_rignt_rotation_note_final."','left_rotation','".$l_left_rotation_normal_final."','".$l_left_rotation_note_final."')";

$query7="insert into orthopedic_tests_init(user_id,Valsalva,Valsalva_left,Valsalva_right,Minor_sign,Minor_sign_left,Minor_sign_right,Max_cervical_comp,Max_cervical_comp_left,Max_cervical_comp_right,JacksonL_comp,JacksonL_comp_left,JacksonL_comp_right,Foraminal_comp,Foraminal_comp_left,Foraminal_comp_right,Shoulder_dep,Shoulder_dep_left,Shoulder_dep_right,Distraction,Distraction_left,Distraction_right,Spurling,Spurling_left,Spurling_right,Bakody_sign,Bakody_sign_left,Bakody_sign_right,Soto,	Soto_left,Soto_right,Kemp,Kemp_left,Kemp_right,SLR,SLR_left,SLR_right,Ely,Ely_left,Ely_right,Hibb,Hibb_left,Hibb_right,Fabere,	Fabere_left,Fabere_right,Derifield,Derifield_left,Derifield_right,Yeoman,Yeoman_left,Yeoman_right,Nachlas,Nachlas_left,Nachlas_rigth,Seated_gilletes,Seated_gilletes_left,Seated_gilletes_right) values('$user_id','Valsalva','".$ValsalvaL."','".$ValsalvaR."','Minor','".$MinorL."','".$MinorR."','Max','".$MaxL."','".$MaxR."','Jackson','".$JacksonL."','".$JacksonR."','Foraminal','".$ForaminalL."','".$ForaminalR."','Shoulder','".$ShoulderL."','".$ShoulderR."','Distraction','".$DistractionL."','".$DistractionR."','Spurling','".$SpurlingL."','".$SpurlingR."','Bakody','".$BakodyL."','".$BakodyR."','Soto','".$SotoL."','".$SotoR."','Kemp','".$KempL."','".$KempR."','SLR','".$SLRL."','".$SLRR."','Ely','".$ElyL."','".$ElyR."','Hibb','".$HibbL."','".$HibbR."','Fabere','".$FabereL."','".$FabereR."','Derifield','".$DerifieldL."','".$DerifieldR."','Yeoman','".$YeomanL."','".$YeomanR."','Nachlas','".$NachlasL."','".$NachlasR."','Seated','".$SeatedL."','".$SeatedR."')";

$query8="insert into orthopedic_tests_final(user_id,Valsalva,Valsalva_left,Valsalva_right,Minor_sign,Minor_sign_left,	Minor_sign_right,Max_cervical_comp,Max_cervical_comp_left,Max_cervical_comp_right,Jackson_l_comp,Jackson_l_comp_left,	Jackson_l_comp_right,Foraminal_comp,Foraminal_comp_left,Foraminal_comp_right,Shoulder_dep,Shoulder_dep_left,Shoulder_dep_right,	Distraction,Distraction_left,Distraction_right,Spurling,Spurling_left,Spurling_right,Bakody_sign,Bakody_sign_left,Bakody_sign_right,	Soto,Soto_left,Soto_right,Kemp,Kemp_left,Kemp_right,SLR,SLR_left,SLR_right,Ely,Ely_left,Ely_right,Hibb,Hibb_left,Hibb_right,Fabere,	Fabere_left,Fabere_right,	Derifield,	Derifield_left,	Derifield_right,	Yeoman,	Yeoman_left,	Yeoman_right,	Nachlas,	Nachlas_left,	Nachlas_right,	Seated,	Seated_left,	Seated_right) values('$user_id','Valsalva','".$ValsalvaFL."','".$ValsalvaFR."','Minor','".$MinorFL."','".$MinorFR."','Max','".$MaxFL."','".$MaxFR."','Jackson','".$JacksonFL."','".$JacksonFR."','Foraminal','".$ForaminalFL."','".$ForaminalFR."','Shoulder','".$ShoulderFL."','".$ShoulderFR."','Distraction','".$DistractionFL."','".$DistractionFR."','Spurling','".$SpurlingFL."','".$SpurlingFR."','Bakody','".$BakodyFL."','".$BakodyFR."','Soto','".$SotoFL."','".$SotoFR."','Kemp','".$KempFL."','".$KempFR."','SLR','".$SLRFL."','".$SLRFR."','Ely','".$ElyFL."','".$ElyFR."','Hibb','".$HibbFL."','".$HibbFR."','Fabere','".$FabereFL."','".$FabereFR."','Derifield','".$DerifieldFL."','".$DerifieldFR."','Yeoman','".$YeomanFL."','".$YeomanFR."','Nachlas','".$NachlasFL."','".$NachlasFR."','Seated','".$SeatedFL."','".$SeatedFR."')";

$query9="insert into muscle_testing_init(user_id,Deltoid,Deltoid_left,Deltoid_right,Biceps,Biceps_left,Biceps_right,Wrist_extensors,Wrist_extensors_left,	Wrist_extensors_right,Wrist_flexors,Wrist_flexors_left,Wrist_flexors_right,Finger_flexors,Finger_flexors_left,Finger_flexors_right,	Finger_interossei,Finger_interossei_left,Finger_interossei_right,Hip_flexors,Hip_flexors_left,Hip_flexors_right,Knee_extensors,Knee_extensors_left,Knee_extensors_right,Foot_eversion,Foot_eversion_left,Foot_eversion_right,Foot_inversion,Foot_inversion_left,	Foot_inversion_right,Dorsiflex_great_toe,Dorsiflex_great_toe_left,Dorsiflex_great_toe_right) values('$user_id','deltoid','".$deltoidL."','".$deltoidR."','biceps','".$bicepsL."','".$bicepsR."','wrist_extensors','".$wrist_extensorsL."','".$wrist_extensorsR."','wrist_flexors','".$wrist_flexorsL."','".$wrist_flexorsR."','finger_flexors','".$finger_flexorsL."','".$finger_flexorsR."','finger_interossei','".$finger_interosseiL."','".$finger_interosseiR."','hip_flexors','".$hip_flexorsL."','".$hip_flexorsR."','knee_extensors','".$knee_extensorsL."','".$knee_extensorsR."','foot_eversion','".$foot_eversionL."','".$foot_eversionR."','foot_inversion','".$foot_inversionL."','".$foot_inversionR."','dorsiflex_great_toe','".$dorsiflex_great_toeL."','".$dorsiflex_great_toeR."')";

$query10="insert into muscle_testing_final(user_id,Deltoid,Deltoid_left,Deltoid_right,Biceps,Biceps_left,Biceps_right,Wrist_extensors,Wrist_extensors_left,	Wrist_extensors_right,Wrist_flexors,Wrist_flexors_left,Wrist_flexors_right,Finger_flexors,Finger_flexors_left,Finger_flexors_right,	Finger_interossei,Finger_interossei_left,Finger_interossei_right,Hip_flexors,Hip_flexors_left,Hip_flexors_right,Knee_extensors,Knee_extensors_left,Knee_extensors_right,Foot_eversion,Foot_eversion_left,Foot_eversion_right,Foot_inversion,Foot_inversion_left,	Foot_inversion_right,Dorsiflex_great_toe,Dorsiflex_great_toe_left,Dorsiflex_great_toe_right) values('$user_id','deltoid','".$deltoidFL."','".$deltoidFR."','biceps','".$bicepsFL."','".$bicepsFR."','wrist_extensors','".$wrist_extensorsFL."','".$wrist_extensorsFR."','wrist_flexors','".$wrist_flexorsFL."','".$wrist_flexorsFR."','finger_flexors','".$finger_flexorsFL."','".$finger_flexorsFR."','finger_interossei','".$finger_interosseiFL."','".$finger_interosseiFR."','hip_flexors','".$hip_flexorsFL."','".$hip_flexorsFR."','knee_extensors','".$knee_extensorsFL."','".$knee_extensorsFR."','foot_eversion','".$foot_eversionFL."','".$foot_eversionFR."','foot_inversion','".$foot_inversionFL."','".$foot_inversionFR."','dorsiflex_great_toe','".$dorsiflex_great_toeFL."','".$dorsiflex_great_toeFR."')";
$query11="insert into dyanometer_grip_test_init(user_id,right_h,right_h_weight,left_h_weight) values('$user_id','".$RadioGroup3."','".$LW_KG."','".$RW_KG."')";
$query12="insert into dyanometer_grip_test_final(user_id,right_h,right_h_weight,left_h_weight) values('$user_id','".$RightH."','".$LW_KGF."','".$RW_KGF."')";
foreach($subluxation as $value){
    $query13="insert into subluxation(user_id,subluxation) values('$user_id','$value')";
}
foreach($tenderness as $value){
    $query14="insert into tenderness(user_id,tenderness) values('$user_id','$value')";
}

$result =mysqli_query($con,$query);
$result2=mysqli_query($con,$query2);
$result3=mysqli_query($con,$query3);
$result4=mysqli_query($con,$query4);
$result5=mysqli_query($con,$query5);
$result6=mysqli_query($con,$query6);
$result7=mysqli_query($con,$query7);
$result8=mysqli_query($con,$query8);
$result9=mysqli_query($con,$query9);
$result10=mysqli_query($con,$query10);
$result11=mysqli_query($con,$query11);
$result12=mysqli_query($con,$query12);
$result13=mysqli_query($con,$query13);
$result14=mysqli_query($con,$query14);

if($result and $result2 and $result3 and $result4 and $result5 and $result6  and
$result7 and $result8 and $result9 and $result10 and $result11 and $result12 and $result13 and $result14){
    header("location:index.html");
}
else{
	echo "Error".mysqli_error($con);
}

?>