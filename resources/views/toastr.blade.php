<html>
<head>
	<meta charset="UTF-8">
	<title>Toastr</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    {!! Toastr::render() !!}
    <script>
    	$(function() {
    		$('#test').click(function() {
    			toastr.warning('adsf');
    		})
    	});
    </script>
</head>
<body>
	Toastr
	<div>
		<button id="test">click</button>
	</div>
</body>
</html>