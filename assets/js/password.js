var state = false;
function toggle(){
     if(state){
        document.getElementById('floatingPassword').setAttribute('type', 'password');
        state=false;
     }
     else{
        document.getElementById('floatingPassword').setAttribute('type', 'text');
        state=true;
     }
}


