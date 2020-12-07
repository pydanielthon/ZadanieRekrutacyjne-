<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
* {
  box-sizing: border-box;
}
.content:not(:first-child) {
    display: none;
}
.container{
  width: 100%;
}
.column {
  float: left;
  width: 25%;
  height: 250px;
  padding: 20px;
  background-color: #1a66ff;
  color:white;
  text-align: center;
  display:inline-block;
  border-style: solid;
  border-color: white;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width: 992px) {
  .column {
    width: 50%;
  }
}
@media screen and (max-width: 566px) {
  .column {
    width: 100%;
  }
}
.content{
background-color: #e6eeff;
width:100%;
padding: 30px;
}

.content-mobile{
background-color: #e6eeff;
width:100%;
padding: 30px;
}

.content-tablet{
background-color: #e6eeff;
width:100%;
padding: 30px;
}
@media (min-width: 1024px){
.content-mobile {display: none !important;}
.content-tablet {display: none !important;}

}

@media only screen and (min-device-width: 569px) and (max-width: 979px) {
  .content{display: none !important;}
  .content-mobile {display: none !important;}
  .content-tablet {display: none ;}
}

@media only screen and (max-width: 569px) {
  .content{display: none !important;}
  .content-tablet {display: none !important;}
  .content-mobile {display: none ;}



}

</style>
</head>
<body>

<div class="container">
<div class="row mx-n2 mx-sm-n3 mb-3 selectSection ">
<button type="button" data-number="1"class="column col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5 ">
<p>Element 1</p>


</button>   
<div class="content-mobile" data-number="1">content1</div>

<button type="button" data-number="2"class="column col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5 ">
<p>Element 2</p>
</button>

<div class="content-tablet" data-number="1">content1</div>
<div class="content-tablet" data-number="2">content2</div>
<div class="content-mobile" data-number="2">content2</div>

<button type="button" data-number="3"class="column col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5 ">

<p>Element 3</p>

</button>
<div class="content-mobile" data-number="3">
<ul>
<li> raz</li>
<li> dwa</li>
</ul>

</div>

<button type="button" data-number="4"class="column col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5 ">

<p>Element 4</p>
</button>
<div class="content-tablet" data-number="3"><ul>
<li> raz</li>
<li> dwa</li>
</ul>
</div>
<div class="content-tablet" data-number="4">content4</div>
<div class="content-mobile" data-number="4">content4</div>

<div class="content" data-number="1">content1</div>
<div class="content" data-number="2">content2</div>
<div class="content" data-number="3"><ul>
<li> raz</li>
<li> dwa</li>
</ul></div>
<div class="content" data-number="4">content4</div>
</div>
<div class="contentSection row mx-n2 mx-sm-n3 mb-3">
</div>
<div class="row selectSection">
<button type="button" data-number="5"class="column col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5 ">
<p>Element 5</p>
</button>
<div class="content-mobile" data-number="5"> content5</div>

<button type="button" data-number="6"class="column col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5 ">
<p>Element 6</p>
</button>
<div class="content-tablet" data-number="5">content5</div>
<div class="content-tablet" data-number="6">content6</div>
<div class="content-mobile" data-number="6"> content6</div>

<button type="button" data-number="7"class="column col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5 ">
<p>Element 7</p>
</button>
<div class="content-mobile" data-number="7"> content7</div>

<button type="button" data-number="8"class="column col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5 ">
<p>Element 8</p>
</button>

<div class="content-mobile" data-number="8"> content8</div>
<div class="content-tablet" data-number="7">content7</div>
<div class="content-tablet" data-number="8">content8</div>
<div class="content" data-number="5"> content5</div>
<div class="content" data-number="6"> content6</div>
<div class="content" data-number="7"> content7</div>
<div class="content" data-number="8"> content8</div>

     
</div>
</body>
<script>
let Buttons = document.querySelectorAll(".selectSection button");
for (let button of Buttons) {
 button.addEventListener('click', (e) => {
  const et = e.target;
  const active = document.querySelector(".active");
  if (active) {
    active.classList.remove("active");
   }
  et.classList.add("active");
  let desktop = document.querySelectorAll('.content');
  for (let content of desktop) {
    if(content.getAttribute('data-number') === button.getAttribute('data-number')) {
      content.style.display = "block";
     }
     else {
        content.style.display = "none";
      }
    }

  let mobile = document.querySelectorAll('.content-mobile');
  for (let content of mobile) {
    if(content.getAttribute('data-number') === button.getAttribute('data-number')) {
      content.style.display = "block";
     }
     else {
        content.style.display = "none";
      }
    }
  
  let tablet = document.querySelectorAll('.content-tablet');
  for (let content of tablet) {
    if(content.getAttribute('data-number') === button.getAttribute('data-number')) {
      content.style.display = "block";
     }
     else {
        content.style.display = "none";
      }
    }
 });
}
</script>
</html>

