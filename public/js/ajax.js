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
function change_phone_no()
{

    var p_no=document.getElementById("ph_no").value;
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/cont_change.php?ph_no="+p_no,function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("change_con").innerHTML=xmlhttp.responseText;
        }
    });
}
function view_contant()
{
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/slider_view.php",function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("dis_slider_table").innerHTML=xmlhttp.responseText;
        }
    });
}

function view_new_arr_gents()
{
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/new_arr_gents_view.php",function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("dis_new_arr_gents_table").innerHTML=xmlhttp.responseText;
        }
    });
}
function view_new_arr_wome()
{
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/new_arr_wom_view.php",function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("dis_new_arr_wom_table").innerHTML=xmlhttp.responseText;
        }
    });
}
function view_new_arr_ki()
{
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/new_arr_ki_view.php",function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("dis_new_arr_ki_table").innerHTML=xmlhttp.responseText;
        }
    });
}
function view_gents_dress()
{
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/gents_dress_view.php",function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("gents_dress_table").innerHTML=xmlhttp.responseText;
        }
    });
}
function view_wom_dress()
{
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/wom_dress_view.php",function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("wom_dress_table").innerHTML=xmlhttp.responseText;
        }
    });
}
function view_kids_dress()
{
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/kids_dress_view.php",function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("kids_dress_table").innerHTML=xmlhttp.responseText;
        }
    });
}


function view_recent_work()
{
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/recent_view.php",function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("dis_recent_table").innerHTML=xmlhttp.responseText;
        }
    });
}
function image_change(id)
{
    var val=document.getElementById(id);
    val.style.backgroundColor= "green";
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/image_change.php?im_no="+id,function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("image_change").innerHTML=xmlhttp.responseText;
        }
    });
}
function image_new_arr_gents_change(id)
{
    var val=document.getElementById(id);
    val.style.backgroundColor= "green";
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/image_new_arr_change.php?im_no="+id,function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("image_new_arr_gents_change").innerHTML=xmlhttp.responseText;
        }
    });
}
function image_new_arr_wom_change(id)
{
    var val=document.getElementById(id);
    val.style.backgroundColor= "green";
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/image_new_arr_wom_change.php?im_no="+id,function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("image_new_arr_wom_change").innerHTML=xmlhttp.responseText;
        }
    });
}
function image_new_arr_ki_change(id)
{
    var val=document.getElementById(id);
    val.style.backgroundColor= "green";
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/image_new_arr_ki_change.php?im_no="+id,function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("image_new_arr_ki_change").innerHTML=xmlhttp.responseText;
        }
    });
}
function image_gents_dress_change(id)
{
    var val=document.getElementById(id);
    val.style.backgroundColor= "green";
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/gents_dress_change.php?im_no="+id,function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("image_gents_dress_change").innerHTML=xmlhttp.responseText;
        }
    });
}
function image_wom_dress_change(id)
{
    var val=document.getElementById(id);
    val.style.backgroundColor= "green";
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/wom_dress_change.php?im_no="+id,function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("image_wom_dress_change").innerHTML=xmlhttp.responseText;
        }
    });
}
function image_kids_dress_change(id)
{
    var val=document.getElementById(id);
    val.style.backgroundColor= "green";
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/kids_dress_change.php?im_no="+id,function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("image_kids_dress_change").innerHTML=xmlhttp.responseText;
        }
    });
}
function recent_image_change(id)
{
    var val=document.getElementById(id);
    val.style.backgroundColor= "green";
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/recent_image_change.php?im_no="+id,function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("recent_image_change").innerHTML=xmlhttp.responseText;
        }
    });
}
function image_gents_dress_change(id)
{
    var val=document.getElementById(id);
    val.style.backgroundColor= "green";
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/gents_dress_change.php?im_no="+id,function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("gents_dress_change_img").innerHTML=xmlhttp.responseText;
        }
    });
}
function testonload()
{
    loadXMLDoc("http://localhost/laravel/resources/views/PHP_Files/slide_view.php",function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("slide_view").innerHTML=xmlhttp.responseText;
        }
    });
}
function back_readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#back_pr_img')
                .attr('src', e.target.result);


        };
        reader.readAsDataURL(input.files[0]);
    }
}
function front_readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#front_pr_img')
                .attr('src', e.target.result);


        };
        reader.readAsDataURL(input.files[0]);
    }
}
function recent_work(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#recent_img')
                .attr('src', e.target.result);


        };
        reader.readAsDataURL(input.files[0]);
    }
}
function new_arrival_gents(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#new_arr_ge_img')
                .attr('src', e.target.result);


        };
        reader.readAsDataURL(input.files[0]);
    }
}
function new_arrival_wom(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#new_arr_wom_img')
                .attr('src', e.target.result);


        };
        reader.readAsDataURL(input.files[0]);
    }
}
function new_arrival_ki(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#new_arr_ki_img')
                .attr('src', e.target.result);


        };
        reader.readAsDataURL(input.files[0]);
    }
}
function gents_dress_onchange(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#gents_dress_img')
                .attr('src', e.target.result);


        };
        reader.readAsDataURL(input.files[0]);
    }
}
function wom_dress_onchange(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#wom_dress_img')
                .attr('src', e.target.result);


        };
        reader.readAsDataURL(input.files[0]);
    }
}
function kids_dress_onchange(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#kids_dress_img')
                .attr('src', e.target.result);


        };
        reader.readAsDataURL(input.files[0]);
    }
}


function clear_user_fields()
{
    alert('hi');
 /*   document.getElementsByName('u_name')[0].placeholder='Enter Admin Name..';
    document.getElementsByName('u_email')[0].placeholder='Email';
    document.getElementsByName('u_password')[0].placeholder='New Password';

    document.getElementsByName('u_repass')[0].placeholder='Re-Type Password';*/
  /*  var name=document.getElementById("ad_name");
    var mail=document.getElementById("exInputEmail2");
    var pass=document.getElementById("exInputPassword1");
    var repass=document.getElementById("exInputPassword2");*/
   /* name.placeholder="Enter Admin Name..";
    mail.placeholder="Email";
    pass.placeholder="New Password";
    repass.placeholder="Re-Type Password";*/
}