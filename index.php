<link rel="stylesheet" type="text/css" href="style8.css"/>

 <html>
 <h4><br>Please Write What You Want To Search...</br></h4>
    <head>

    	<script type="text/javascript">
    		function active(){
    		    var sb = document.getElementById('searchBox');

    		    if(sb.value == 'Search...'){
    		    sb.value = ''
    		    sb.placeholder = 'Search...'
    		}
    	}
    	function inctive(){
           var sb = document.getElementById('searchBox');

           if(sb.value == ''){             
               sb.placeholder = ''
               sb.value = 'Search...'
       }

    }
   </script>
   <style type ="text/css">

   #searchBox{
  border:1px solid #000000;
  border-right: none;
  -webkit-border-top-left-radius: 10px;
  -webkit-border-bottom-left-radius: 10px;
  -moz-border-radius-topleft: 10px;
  -moz-border-radius-bottomleft: 10px;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  font-size: 16px;
  padding: 10px;
  outline: none;
  width: 250px;
}

#searchButton {
  border: 1px solid #000000
  -webkit-border-top-right-radius: 10px;
  -webkit-border-bottom-right-radius: 10px;
  -moz-border-radius-topright: 10px;
  -moz-border-radius-bottomright: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  font-size:  16px;
  padding: 10px;
  background:  #f1d829;
  font-weight: bold;
  cursor: pointer;
  outline: none;
}
#searchButton:hover {
  background: #f6e049;
}

body {
  font-family: arial;
}
h3 {
  margin: 20px 0px 0px 0px;
  padding: 0;
}
p {
  margin: 0;
  padding: 0;
}

</style>

</head>
<body>
  <form action="process.php"method="POST" id="searchForm">
    <input type="text" name="q" id="searchBox" placeholder="" value="Search..." maxlength="25" autocomplete="off" onMouseDown="active();" onBlur="inactive();" /> <input type="submit" id="searchButton" value="Go!" />
  </form>
     
    
 </body>
</html>

