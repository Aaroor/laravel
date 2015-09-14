/**
 * Created by Aarooran on 8/10/2015.
 */

/*function loadXMLDoc()
    {
        var xmlhttp;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
        }
        }
        xmlhttp.open("GET","http://localhost/laravel/resources/views/PHP_Files/test.php",true);
        xmlhttp.send();
    }*/

var xmlhttp;
function loadXMLDoc(url,cfunc)
{
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=cfunc;
    xmlhttp.open("GET",url,true);
    xmlhttp.send();
}
function myFunction()
{
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/test.php",function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
        }
    });
}
function myFunction1()
{
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/test1.php",function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("myDiv1").innerHTML=xmlhttp.responseText;
        }
    });
}