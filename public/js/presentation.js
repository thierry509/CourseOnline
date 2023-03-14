(()=>{
    let header = document.querySelector('.header-pres');
    let fixed = document.querySelector('.fixed');
    let banner = document.querySelector('.header-pres .banner').cloneNode(true);
    let price = document.querySelector('.header-pres .price').cloneNode(true);
    let label = document.querySelector('.header-pres .label').cloneNode(true);
    let buttons = document.querySelector('.header-pres a.button').cloneNode(true)
    if(screen.width >= 1000 ){   
        fixed.appendChild(banner)
        fixed.appendChild(price)
        fixed.appendChild(label);
        fixed.appendChild(buttons);
    }
    else{
        fixed.appendChild(price);
        fixed.appendChild(buttons);
    }
})()