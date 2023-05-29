$(".btn1").hover(function(){
    
    $(".hoveron1").show();
},function(){
    $(".hoveron1").hide();
});

$(".btn2").hover(function(){
    $(".hoveron2").show();
},function(){
    $(".hoveron2").hide();
});

$(".btn3").hover(function(){
    $(".hoveron3").show();
},function(){
    $(".hoveron3").hide();
});

$(".btn4").hover(function(){
    $(".hoveron4").show();
},function(){
    $(".hoveron4").hide();
});

function freelance(){
    window.open("freelance.php")
}

function buy(){
    window.open("buy.php")
}

function discussion(){
    window.open("discussion.php")
}

function trips(){
    window.open("trips.php")
}

const showButton = document.getElementById('showDialog');
const favDialog = document.getElementById('favDialog');
const outputBox = document.querySelector('output');
const selectEl = favDialog.querySelector('select');
const confirmBtn = favDialog.querySelector('#confirmBtn');

// "Show the dialog" button opens the <dialog> modally
showButton.addEventListener('click', () => {
    favDialog.showModal();
});
// "Favorite animal" input sets the value of the submit button
selectEl.addEventListener('change', (e) => {
  confirmBtn.value = selectEl.value;
});
// "Confirm" button of form triggers "close" on dialog because of [method="dialog"]
favDialog.addEventListener('close', () => {
  outputBox.value = `ReturnValue: ${favDialog.returnValue}.`;
});