<!doctype html>
<html>
<head>
   <meta charset="utf-8">
   <!-- optimize mobile versions -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
      <!-- The "functional" skin - choose from: "functional.css", "minimalist.css", "playful.css" -->
   <link rel="stylesheet" href="//releases.flowplayer.org/6.0.5/skin/functional.css">
   
   <!-- Minimal styling for this standalone page, can be removed -->
   <link rel="stylesheet" href="http://demos.flowplayer.org/media/css/demo.css">
   <!-- Syntax highlighting of source code, can be removed -->
   <link rel="stylesheet" href="http://demos.flowplayer.org/media/css/pygments.css">
   
   <style>
		#content {
		  width: 60%;
		}
   </style>
      <!-- Flowplayer depends on jquery 1.7.2+ for video tag based installations -->
   <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
         <!-- Flowplayer library -->
   <script src="//releases.flowplayer.org/6.0.5/flowplayer.min.js"></script>
   
   <script>
		flowplayer.conf.adaptiveRatio = true;
   </script>
</head>

<body>

<div>
	<div class="flowplayer" data-fullscreen="true" data-native_fullscreen="true" data-ratio="0.4167">
	   <video>
			<source type="video/mp4" src="<?php echo $_GET['varp']; ?>">
	   </video>
	</div>
</div> <!-- end content -->

</body>
</html>