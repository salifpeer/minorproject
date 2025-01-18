<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script type="text/javascript">
	 function Captcha(){
	    x=Math.floor(Math.random()*10);
	    y=Math.floor(Math.random()*10);
	      document.getElementById("mainCaptcha").innerText = x + " " + "+" + " "+ y + " "+ "=";
	}
	 function ValidCaptcha(){
	 	  var string1 =x+y;
          var string2 = document.getElementById('txtInput').value;
          if (string1 == string2){
            return true;
          }
          else{      
             document.getElementById('cap').style.visibility='visible';  
            return false;
          }
      }

</script>

<style type="text/css">
    #cap {
    visibility: hidden;
    margin-top: 6px;
    background-color: #f2dede;
    color: #a94442;
    padding: 5px 0px;
    text-align: center;
    
  }
  #mainCaptcha{
    font-size: 17px;
    background-color: black;
    padding: 10px;
    border-radius: 5px;
    width: 100px;
    text-align: center;
  }
  #wrapper-cap{
    /*padding-top: 20px;*/
    margin-left: 20%;
  }
  #txtInput{
    width: 40%;
    height: 40px;
     margin-top: 30px;
  }
</style>