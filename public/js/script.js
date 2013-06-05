$(document).ready(function(){
var DyplomObj = {
    email : '',
    pass : '',
    pass2 : '' ,
    formReg : '#formReg',
    formLog : '#formLog',
    emailField : '#email',
    passField : '#pass',
    pass2Field : '#pass2',
    emailTip : "Введіть реальну email-адресу",
    passTip : "Введіть пароль не менше 6 символів",
    pass2Tip : "Підтвердіть пароль",
    init : function(){
        this.email = $("#email").val();
        this.pass = $("#pass").val();
        this.pass2 = $("#pass2").val();
    },
    initLogin : function(){
        this.email = $("#email").val();//change this values!!!
        this.pass = $("#pass").val();
    },
    chekEmail : function(email){
    var patt = /\w+[\w-\.]*\@\w+((-\w+)|(\w*))\.[a-z]{2,3}$|^([0-9a-zA-Z'\.]{3,40})\*|([0-9a-zA-Z'\.]+)@([0-9a-zA-Z']+)\.([0-9a-zA-Z']+)$|([0-9a-zA-Z'\.]+)@([0-9a-zA-Z']+)\*+$|^$/;
    if(email.match(patt)){
        return true;
    }else{
        return false;
    };
    },
    chekPass : function(pass,pass2){
    //pass2 = (pass2 === 'null' || pass2 === 'undefined' || pass2 ==='') ? pass : pass2;//for login, not only for registration
    if(pass === pass2 && pass.length >= 6){
        console.log("pass = pass2");
        return true;
    }else{
        console.log(that.pass + " - "+ that.pass2);
        return false;
    }
    },
    chekEmpty : function(field){
    return field === '' || field === 'undefined' ? false : true;
    },
    chekRegister : function(){
    that = this;
        $(that.formReg).submit(function(e){
            that.init();
            if(!that.chekEmpty(that.pass) || !that.chekEmpty(that.pass2) || !that.chekEmpty(that.email) || !that.chekPass(that.pass,that.pass2) || !that.chekEmail(that.email)){
                alert("Заповніть усі поля коректними даними!");
                e.preventDefault();
            }else{
            console.log("yes");
            }
        });
    },
    checkLogin : function(){
    that = this;
    $(that.formLog).submit(function(e){//change this value!!!
        that.initLogin();
        if(!that.chekEmpty(that.pass) || !that.chekEmpty(that.email) || !that.chekEmail(that.email) || !that.chekPass(that.pass,that.pass)){
            alert("Заповніть усі поля коректними даними!");
            e.preventDefault();
        }else{
            console.log("Welcome");
        }
    });
    },
    addTip : function(){
    $("body").append("<div class='alert alert-info'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Warning!</strong> Best check yo self, you're not looking too good.</div>");
    $(".alert").css({"position":"fixed",
                    "top":"30px",
                    "left":"50%",
                    "display":"none",
                    "padding":"10px"});
    },
    fieldBlur : function(field){
    that = this;
    $(field).blur(function(){
        $(".alert").hide(500);
    });
    },
    fieldFocus : function(field,value){
    that = this;
    $(field).focus(function(){
        $(".alert").text(value);
        $(".alert").show(500);
    });
    }        
};
$(DyplomObj.addTip());
$(DyplomObj.formReg).bind(DyplomObj.chekRegister());
$(DyplomObj.formLog).bind(DyplomObj.checkLogin());
$(DyplomObj.emailField).Focus = DyplomObj.fieldFocus(DyplomObj.emailField,DyplomObj.emailTip);
$(DyplomObj.emailField).Blur = DyplomObj.fieldBlur(DyplomObj.emailField);
$(DyplomObj.passField).Focus = DyplomObj.fieldFocus(DyplomObj.passField,DyplomObj.passTip);
$(DyplomObj.passField).Blur = DyplomObj.fieldBlur(DyplomObj.passField);
$(DyplomObj.pass2Field).Focus = DyplomObj.fieldFocus(DyplomObj.pass2Field,DyplomObj.pass2Tip);
$(DyplomObj.pass2Field).Blur = DyplomObj.fieldBlur(DyplomObj.pass2Field);
});//end of ready function
