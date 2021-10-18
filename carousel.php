<?php 
if(!defined('CONSTANT')){
  die();
}
?>
<style>
 
 .top {
    background-image: url(../images/book-863418_1920.jpg);
  width: auto;
  height: 100vh;
  background-position:center;
  background-size:cover;
  display: flex;
  margin-left: 33px;
  margin-right: 33px;
  justify-content: center;
  align-items: center;
  background-repeat: none; 
  background-attachment: fixed;
  transition: 5s;
 
  animation: animation;
  animation-direction: alternate-reverse;
  animation-duration: 25s;
  animation-fill-mode: forwards;
  animation-iteration-count: infinite;
  animation-play-state: running;
  animation-timing-function: ease-in-out;
  
}
@keyframes animation{
0%{
    background-image: url(images/photo_2021-06-25_09-21-22.jpg);
}25%{
    background-image: url(images/photo_2021-06-25_09-21-04.jpg);
}50%{
    background-image: url(images/pexels-maria-orlova-4947406.jpg);
}75%{
    background-image: url(images/book-1822474_1280.jpg);

}100%{
    background-image: url(images/book-863418_1920.jpg);
}
}

.bar {
    background-color: black;
    text-align: center;
    font-size: 1.5rem;
}
.bar p {
    color:whitesmoke;
}
.newscontainer{
    margin: auto;
    width: 70%;
    padding:10px;
}

</style>
<div class="top">

</div>

<div class="bar"> 
        <p>Read, Learn, Inspire... 
  </div>