<!DOCTYPE html>
<html>
<?php include 'header.php';?>
<body>
<style>
button {
	background-color: black;
}

.ready { 
	color: green;
}

.locked {
	color: red;
}
</style> 

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

<script>
	function deacivate(target_class) {
		(target_class).addClass('ready').removeClass('locked'); 
	}
	
	
	$(function(){
		$(".test_short").click(
			deacivate('test_short');
			function(){	
				alert('clicked!');
			}
		);
	});
	
</script>

<button type="button" id="test_short" class="test_short ready">test short</button>
<button type="button" class="test_long ready">test long</button>

<?php include 'footer.php';?>

</body>
</html>