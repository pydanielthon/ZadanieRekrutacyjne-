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
background-color: #e6eeff
;
width: 100%;
padding: 30px;
}
</style>
</head>
<body>

<div class="container">
<div class="row mx-n2 mx-sm-n3 mb-3 selectSection ">
<button type="button" data-number="1"class="column col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5 ">
<p>Element 1</p>


</button>
  
<button type="button" data-number="2"class="column col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5 ">
<p>Element 2</p>


</button>
  
<button type="button" data-number="3"class="column col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5 ">

<p>Element 3</p>

</button>
  
<button type="button" data-number="4"class="column col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5 ">

<p>Element 4</p>
</button>
</div>
<div class="contentSection row mx-n2 mx-sm-n3 mb-3">
   <p class="content" data-number="1">content1</p>
   <p class="content" data-number="2"> Content of button 2<br>New line<br>New line</p>
   <p class="content" data-number="3"> Content of button 3</p>
   <p class="content" data-number="4"> Content of button 4</p>
   <p class="content" data-number="5"> Content of button 5</p>
   <p class="content" data-number="6"> Content of button 6</p>
   <p class="content" data-number="7"> Content of button 7</p>
   <p class="content" data-number="8">Content of button 8</p>
</div>
<div class="row selectSection">
<button type="button" data-number="5"class="column col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5 ">

<p>Element 5</p>

</button>
  
<button type="button" data-number="6"class="column col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5 ">

<p>Element 6</p>

</button>
  
<button type="button" data-number="7"class="column col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5 ">
<p>Element 7</p>


</button>
<button type="button" data-number="8"class="column col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5 ">
<p>Element 8</p>


</button>

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
  let allContent = document.querySelectorAll('.content');
  for (let content of allContent) {
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


