var LiveChate = {
    radius: 10,
    onLoad: function () {
    },


    loginGetData : function (){
        var loginForm = $('#login_form');
        loginForm.find('input');
        console.log(loginForm.find('input'));
    }


};



$(document).ready(function () {
    LiveChate.onLoad();
    $("#login_form").submit(function(e){
        e.preventDefault();
        LiveChate.loginGetData();
      });
});