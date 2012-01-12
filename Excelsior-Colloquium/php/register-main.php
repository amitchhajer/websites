<html>
<head> 
<link rel="stylesheet" type="text/css" href="style.css" /> 
<title>Select Event</title> 
<style> 
#main-content {
    height: 70em;
width: 800px;
margin: auto;
margin-top: 5%;
}
 
#main-content a {
	color: #36c;
	background: transparent;
	font-weight: bolder;
}
 
#main-content .subnav {
    width: 200px;
    padding: 0 20px;
    float:left;
}
 
.subnav ul {
	margin-bottom: 5%;
}
 
#main-content li span {
	margin-left: 12%;
    font-size: 1.3em;
}
 
#main-content li {
    padding: 5px 0;
}
 
#cultural-events, #technical-events {
	list-style-type: none;
}
 
</style> 
 
<!--[if lte IE 7]>
<style>
#main-content {
margin-left: 15%;
}
</style>
<![endif]--> 
 
 
</head> 

<body>
<div id="main-content">

<form action="into.php" method="post">
<p align="center"> 
<h3 align="center"> REGISTRATION FORM</h3></p>
<p>Information to fill the Form</p>
<p>1. Only team leader name has to be filled.</p>
<p>2. All choices are compulsory</p>
<p>3. Any doubt? Contact the event manager for the same.</p>
<br>
<br>
<br>
<p>First Name:
  <input type="text" name="fname" />
  <br>
  <br>
  Last Name: <input type="text" name="lname" />
  <br>
  <br>
  Institute :<input type="text" name="iname" />
  <br>
  <br>
  Email Add.: <input type="text" name="email"/>
</p>
<p>
  <label>Year:
    <select name="year" id="select">
      <option value="1-UG">1st Year UG</option>
      <option value="2-UG">2nd Year UG</option>
      <option value="3-UG">3rd Year UG</option>
      <option value="4-UG">4th Year UG</option>
      <option value="1-PG">1st Year PG</option>
      <option value="2-PG">2nd Year PG</option>
    </select>
  </label>
  </p>
<p>
  <label>Competetion:
    <select name="competetion" id="select2">
      <option value="impetus">Impetus</option>
      <option value="concepts">Concepts</option>
      <option value="opus">Opus</option>
      <option value="shastra">Shastra</option>
      <option value="nipun">Nipun</option>
      <option value="prahelika">Prahelika</option>
      <option value="pradanya">Pradanya</option>
      <option value="pratibha">Pratibha</option>
      <option value="mugdha">Mugdha</option>
      <option value="medha">Medha</option>
      </select>
  </label>
  </p>
<p>
  <label>Team Members:
    <select name="members" id="select3">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      </select>
  </label>
  </p>
<p>
  <label>Contact Number:
    <input type="text" name="contact" id="textfield">
  </label>
  <br>
</p>
<by>

<input type="submit" />
</form>
</div> 

</body>
</html>
