function message(){
    // load variables
    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var msg = document.getElementById('msg');
    var subject = document.getElementById('subject');
    const success = document.getElementById('success');
    const danger = document.getElementById('danger');
    
    
    

    // user may only send a message after timeout delay and message is done displaying
    send.style.pointerEvents = 'none';
    send.style.cursor = 'not-allowed';
    // display appropriate message
    if(name.value === '' || email.value === '' || msg.value === ''){
        danger.style.display = 'block';
    }
    // if we have successful submission 1) send the email 2) remove text from form 3) display success message
    else{
        // this will post user input to php file
        var info = [];
        info.push(name.value);
        info.push(email.value);
        if (subject.value) {
            info.push(subject.value);
        }
        else{
            //no subject is provided
        }
        info.push(msg.value);
        $.ajax({
            url: "form-handler.php",
            method: "post",
            data: { info: JSON.stringify( info ) },
            success: function(res) {
                console.log(res);
            }
        })
        //console.log("successful");
        name.value = '';
        email.value = '';
        msg.value = '';
        subject.value = '';
        success.style.display = 'block';
    }
    //var button = document.getElementById("send").onsubmit();

    setTimeout(() => {
        danger.style.display = 'none';
        success.style.display = 'none';
        send.style.pointerEvents = 'auto';
        send.style.cursor = 'pointer';
    }, 4000);

}