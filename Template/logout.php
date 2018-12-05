
<?php
session_start();
if(session_destroy())
{
	?><script>
		localStorage.setItem('user','');
		window.location.href = "index.php";
	</script><?php
	
}
?>