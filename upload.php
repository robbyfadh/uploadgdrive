<!DOCTYPE html>
<html>
<head>
    <title>Upload File Sister</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="upload.js"></script>
</head>
<body>
<center>
   <div>
	 <h3>Upload File to Google Drive by M Robby Fadhillah K3517040</h3>
     <input id="files" type="file" name="uploadfiles" multiple/>
     <button id="upload">Upload</button>
     <div id="progress-wrp">
        <div class="progress-bar"></div>
        <p style="font-size: 18px">Status : <div class="status">0%</div></p>
    </div>
   </div> 
   <div id="result">
   </div>
</center>
</body>
</html>