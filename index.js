
function seeYou(){
    let submitBtn = document.getElementById('submit_form');
   let  code = document.getElementById('secret_code').value;
   let  secretcode = code.toLowerCase();
    if (secretcode !== "elly" && secretcode !== ""){
        document.getElementById('submit_form').disabled = true;
        document.getElementById('fu').style.display = 'block'
        document.getElementById('cu').style.display = 'none'
        
        submitBtn.style.backgroundColor = "none";
        submitBtn.style.opacity = '.4';
    }else if(secretcode === ""){
        document.getElementById('submit_form').disabled = true;
        document.getElementById('fu').style.display = 'none'
        document.getElementById('cu').style.display = 'none'

        submitBtn.style.backgroundColor = "none";
        submitBtn.style.opacity = '.4';
    }
    else{
        document.getElementById('submit_form').disabled = false;
        document.getElementById('fu').style.display = 'none'
        document.getElementById('cu').style.display = 'block'
        
            submitBtn.style.backgroundColor = "rgb(64, 108, 106)";
            submitBtn.style.opacity = '1';
    }
}   

let guestcount = 0;
function guestPage(){
    let guestButton = document.getElementById('guest_section') ;
        guestButton.style.display = 'block';
        guestButton.style.position = 'absolute';
        guestButton.style.backgroundColor = 'white';
        guestButton.style.top = '100px';
        guestButton.style.left = '10px';
    let headername = document.getElementById('event_role_header') ;
        headername.style.display = 'none';    
    guestcount++;
    orgcount = 0;
    if (guestcount == 1){
        document.getElementById('birthdayParty_SurveyForm').style.display = 'block';
        document.getElementById('organizer').style.display = 'none';
        document.getElementById('database_access_denied').style.display = 'none';
    }
    if (guestcount == 2){
        document.getElementById('birthdayParty_SurveyForm').style.display = 'none';
        document.getElementById('organizer').style.display = 'block';
        guestcount = 0;
    }
}
let orgcount = 0;
function orgPage(){
    let headername = document.getElementById('event_role_header') ;
        headername.style.display = 'none';
    guestcount = 0;
    orgcount++;
    if (orgcount == 1){
        document.getElementById('organizer_verification').style.display = 'block';
        document.getElementById('guest').style.display = 'none';
        
    }
    if (orgcount == 2){
        document.getElementById('organizer_verification').style.display = 'none';
        document.getElementById('guest').style.display = 'block';
        document.getElementById('database_access_denied').style.display = 'none';
        document.getElementById('database_list').style.display = 'none';
        orgcount = 0;
    }
}
function verifyOrganizer(){
    let buttonOrganizer = document.getElementById('organizer');
    let buttonGuest = document.getElementById('guest');
        buttonOrganizer.style.display = 'none';
        buttonGuest.style.display = 'none'
    const username = document.getElementById('organizer_username').value;
    const password = document.getElementById('organizer_password').value;
    if(username === 'org' && password === '123'){
        document.getElementById('database_list').style.display = 'block';
        document.getElementById('backToMainPage').style.display = 'block';
        document.getElementById('organizer_verification').style.display = 'none';
        document.getElementById('organizer_password').value = "";
        document.getElementById('organizer_username').value = "";
    }else{
        document.getElementById('database_access_denied').style.display = 'block';
        buttonOrganizer.style.display = 'block';
        buttonGuest.style.display = 'block';
        document.getElementById('organizer_verification').style.display = 'none';
        document.getElementById('guest').style.display = 'block';
        document.getElementById('organizer_password').value = "";
        document.getElementById('organizer_username').value = "";
    }
}
function backMainPage(){
    window.location.href = 'http://localhost/BirthdayPartyForm/index.php';
}
function bDayPartyForm(){
    window.location.href = 'http://localhost/BirthdayPartyForm/bDayParty.php';
}
//document.getElementById('guest').onclick = guestPage;
document.getElementById('organizer').onclick = orgPage;
document.getElementById('login').onclick = verifyOrganizer;


document.getElementById('back_to_main_page').addEventListener('click', backMainPage); 
document.getElementById('guest').addEventListener('click', bDayPartyForm); 