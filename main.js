$(document).ready(function(){

     var clientId = "894701708294-soq9jmv3lsncetn57bn00ab3i67a32gu.apps.googleusercontent.com";
     var redirect_uri = "http://localhost/sister/upload.php";
     var scope = "https://www.googleapis.com/auth/drive";
     var url = "";
     $("#login").click(function(){

        signIn(clientId,redirect_uri,scope,url);

     });

     function signIn(clientId,redirect_uri,scope,url){

        url = "https://accounts.google.com/o/oauth2/v2/auth?redirect_uri="+redirect_uri
        +"&prompt=consent&response_type=code&client_id="+clientId+"&scope="+scope
        +"&access_type=offline";

        window.location = url;

     }

});