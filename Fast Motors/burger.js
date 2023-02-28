let bur = document.getElementById('burger-menu');
bur.addEventListener('click', function(){
    
    if(bur.classList.contains('open')){
        bur.classList.remove('open')
    } else {
        bur.classList.add('open');
    }
});