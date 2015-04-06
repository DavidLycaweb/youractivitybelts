<?php 
$activitypoints = elgg_get_entities(array(
    'types' => 'object',    
    'owner_guid' => elgg_get_page_owner_guid(),
    'count' => true
));

if ($activitypoints <= 150){ 
$text = elgg_echo("youractivity:noob");
echo "
<style>
.youractivity {
background:#fff;
color:#000;
}

</style>
";
}
elseif (($activitypoints > 150) && ($activitypoints <= 1000)) {
$text = elgg_echo("youractivity:begginer");
echo "
<style>
.youractivity {
background:#e0dd00;
color:#000;
}

</style>

";
}

elseif (($activitypoints > 1000) && ($activitypoints <= 3000)) {
$text = elgg_echo("youractivity:general");
echo "
<style>
.youractivity {
background:#e00025;
color:#fff;
}

</style>
";
}
elseif (($activitypoints > 3000) && ($activitypoints <= 6000)) {
$text = elgg_echo("youractivity:expert");
echo "
<style>
.youractivity {
background:#8b5200;
color:#fff;
}

</style>
";
}

elseif ($activitypoints > 6000) {
$text = elgg_echo("youractivity:elite");
echo "
<style>
.youractivity {
background:#000;
color:#fff;
}
</style>

";
}

echo "
<style>
.youractivity {
font-weight:bold;
text-align:center;
width:100%;
border-bottom:1px solid #ccc;
margin-bottom:10px;
}
</style>
";
?>

<script>
$( document ).ready(function() {   
	$('.elgg-avatar-large').prepend('<div class="youractivity"><?php echo $text; ?></div>');		
});
</script>



    
