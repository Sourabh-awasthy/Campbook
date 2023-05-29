<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnterPage</title>
    <script >
                  function clickedButton()
            {

                window.location.href = 'index.php';

            }
             </script>

    <style>
    

/* CSS */
button{
  appearance: none;
  background-color: #FFFFFF;
  border-width: 0;
  box-sizing: border-box;
  color: #000000;
  cursor: pointer;
  display: inline-block;
  font-family: Clarkson,Helvetica,sans-serif;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 0;
  line-height: 1em;
  margin: 0;
  opacity: 1;
  outline: 0;
  padding: 1.5em 2.2em;
  position: relative;
  text-align: center;
  text-decoration: none;
  text-rendering: geometricprecision;
  text-transform: uppercase;
  transition: opacity 300ms cubic-bezier(.694, 0, 0.335, 1),background-color 100ms cubic-bezier(.694, 0, 0.335, 1),color 100ms cubic-bezier(.694, 0, 0.335, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  white-space: nowrap;
  border-radius: 2px;
  position:fixed;
  bottom:50px;
  right: 50px;
  background-color: yellow;
  font-weight: bolder;
  font-size:18px;
}

.button-48:before {
  animation: opacityFallbackOut .5s step-end forwards;
  backface-visibility: hidden;
  background-color: #EBEBEB;
  clip-path: polygon(-1% 0, 0 0, -25% 100%, -1% 100%);
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  transform: translateZ(0);
  transition: clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1), -webkit-clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1);
  width: 100%;
}

.button-48:hover:before {
  animation: opacityFallbackIn 0s step-start forwards;
  clip-path: polygon(0 0, 101% 0, 101% 101%, 0 101%);
}

.button-48:after {
  background-color: #FFFFFF;
}

.button-48 span {
  z-index: 1;
  position: relative;
}
@keyframes slideshow{
    0%{
        background-image: url("nasa-Q1p7bh3SHj8-unsplash.jpg");
    }
    50%{
        background-image: url("peakpx.jpg");
    }
    100%{
        background-image: url("nasa-Q1p7bh3SHj8-unsplash.jpg");
    }
}
body{
    animation-name:slideshow;
    background-repeat: no-repeat;
    background-size:cover;
    animation-duration: 8s;
    animation-iteration-count: infinite;
}
@media (max-width:600px){
    body{
        background-size:auto;
    }
}
h1{
    color: white;
    text-align:left;
    
}
h2{
    color:white;
    font-size:60px;
    position: absolute;
    top:200px;
    left:40px;

}
.quote{
    text-align:center;
}

    </style>
</head>



<body>
<div class="quote">
<h1>CAMPBOOK</h1>
<h2>Know Your College<br>Better!!</h2>

</div>


    <button class="button-48" role="button" onClick="clickedButton()"><span class="text">Get Started
        
    </span></button>
</body>
</html>