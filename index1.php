<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}

.login{  
        width: 300px;  
        overflow: hidden;  
        margin: auto;  
        margin: 50 0 0 40;  
        padding-top: 60px;
        padding-right: 100px;
        padding-bottom: 60px;
        padding-left: 100px;  
        background: white;  
        border-radius: 15px ;  
 }
 body  
{  
    margin: 0;  
    padding: 0;
    background-image:url("home.jpg");

    background-color: Orange;
    font-family: 'normal';
    font-size:20px;  
}  
h2{  
    text-align: center;  
    color: Orange;
    font-style: italic;
    font-size:40px;

    padding: 10px;  
} 
} 

</style>


<title>TRANSACTION</title>
</head>
<body>

<h2>Transaction</h2><br>
<div class="login">

<form id="login" method="post" action="process.php">
<label>From</label>
<input type="text" name="Afrom" />
<br />
<label>To</label>
<input type="text" name="Ato" />
<br />
<label>Amount</label>
<input type="number" name="amount" />
<br />

<input type="submit" value="SUBMIT">
<br />
<br />
<a href="Home.html" >  Back to Home</a>
</form>
</div>




</body>
</html>
 