function customAlert(){
    this.render = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH+"px";
        dialogbox.style.left = (winW/2) - (550 * .5)+"px";
        dialogbox.style.top = "100px";
        dialogbox.style.display = "block";
        document.getElementById('dialogboxhead').innerHTML = "Alert...";
        document.getElementById('dialogboxbody').innerHTML = dialog;
        document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Alert.ok()"id="button">OK</button>';
    }
    this.ok = function(){
        document.getElementById('dialogbox').style.display = "none";
        document.getElementById('dialogoverlay').style.display = "none";
    }
}
var Alert = new customAlert();

      function validate(){
            var aaaa=document.getElementById("fname").value;
            var ffff=document.getElementById("lname").value;
            var bbbb=document.getElementById("email2").value;
            var dddd=document.getElementById("email3").value;
            var eeee=document.getElementById("email4").value;

            if(aaaa==null || aaaa=="" || bbbb==null || bbbb=="" || dddd==null || dddd=="" || eeee==null || eeee=="" || ffff==null || ffff==""){
                Alert.render("Please, do not keep null values!");
                return false;
            }
            var atpos=bbbb.indexOf("@");
            var dotpos=bbbb.lastIndexOf(".");
            if(atpos<1 || dotpos<atpos+2 || dotpos+2>=bbbb.length || atpos<0 || dotpos<0){
                Alert.render("Not a valid e-mail address!");
                return false;
            }
            if(dddd!=eeee){
                Alert.render("Password do not match. Try again!");
                return false;
            }}
function emailValidation() {
        var x=document.forms["myForm"]["emailaddress"].value;
        var p =document.getElementById("pass").value;
        var atpos=0; var dotpos=0;
        var atpos=x.indexOf("@");
        var dotpos=x.lastIndexOf(".");
        if(x==null || x=="" || p==null || p==""){
            Alert.render("Please, do not keep null values!");
            return false;
        }
        if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length || atpos<0 || dotpos<0){
            Alert.render("Not a valid e-mail address!");
            return false;
        }}
        function emailValidationTwo(){
            var x=document.forms["myForm"]["emailaddress"].value; var atpos=0; var dotpos=0;
            var atpos=x.indexOf("@");
            var dotpos=x.lastIndexOf(".");
            if(x==null || x==""){
                Alert.render("Please, do not keep null values!");
                return false;
            }
            if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length || atpos<0 || dotpos<0){
                Alert.render("Not a valid e-mail address!");
                return false;
            }
        }
            function pwSame(){
            var password=document.getElementById("code1").value;
            var password2=document.getElementById("code2").value;
            var code=document.getElementById("code").value;

            if(password==null || password2==null || password=="" || password2==""){
                Alert.render("Please, do not keep null values!");
                return false;
            }
            if(password!=password2){
                Alert.render("Password do not match. Try again!");
                return false;
            }
            if(code==null || code==""){
                Alert.render("Please, enter the validation code sent via the e-mail.");
                return false;
            }
        }
function borrow(){
    Alert.render("You borrowed a book.");
    return true;
}
function reserve(){
    Alert.render("You reserved a book.");
    return true;
}