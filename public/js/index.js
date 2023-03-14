(()=>{
    let menu = document.querySelector('.nav .menu');
    let menuBar = document.querySelector('.nav-menu');
        menu.firstElementChild.addEventListener('click', (e)=>{
            menu.lastElementChild.classList.remove('hide');
            menu.firstElementChild.classList.add('hide');
            menuBar.classList.toggle('active');
        })
        menu.lastElementChild.addEventListener('click', (e)=>{
            menu.lastElementChild.classList.add('hide');
            menu.firstElementChild.classList.remove('hide');
            menuBar.classList.toggle('active');
        })
        
})()
