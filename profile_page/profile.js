$(function(){
    var config = {
        apiKey: "AIzaSyC3FpISPgUilSgSmpm-pjOUPlRp8nYwm5Q",
        authDomain: "pause-fb19e.firebaseapp.com",
        databaseURL: "https://pause-fb19e.firebaseio.com",
        projectId: "pause-fb19e",
        storageBucket: "pause-fb19e.appspot.com",
        messagingSenderId: "714359295912"
    };
    firebase.initializeApp(config);
    check_if_logged_in();
    window.user = null;

    function goto_main_page()   {
        window.location.href = "/index.html";
    }

    function check_if_logged_in()   {
        setTimeout(function(){
            if(firebase.auth().currentUser == null)    {
                goto_main_page();
            } else {
                window.user = firebase.auth().currentUser;
                $("#username").html(window.user.displayName);
                $("#user-img").attr('src', window.user.photoURL);
                if(chrome)  {
                    window.postMessage(JSON.stringify(window.user));
                }
            }
        }, 300);
    }

    $("#sign-out").click(function(){
        firebase.auth().signOut();
        goto_main_page();
    });
});
