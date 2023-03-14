document.addEventListener('click', (e)=>{
    const {target} = e
    if(!target.matches('.nav a')){
        return;
    }
    e.preventDefault();
    urlRoute();
});

const urlRoutes ={
    404 : {
        template : '404.html',
        title:"Not found",
        description : ''
    },
    '/' : {
        template : 'public/view/home.html',
        title: 'home',
        description : ''
    },
    '/home' : {
        template : 'public/view/home.html',
        title: 'home',
        description : ''
    }
}
let urlRoute = (event)=>{
    event = event || window.event;
    event.preventDefault();
    window.history.pushState({}, "", event.target.href);
    // console.log(event.target.href);
    urlLocationHander();
}
let urlLocationHander = async ()=>{
    const location = window.location.pathname;
    // console.log(location)
    if(location.length == 0){
        location = '/';
    }

    const route = urlRoutes[location] || urlRoutes[404]
    const html = await fetch(route.template).then((response)=>
    response.text());
    console.log(html);
    document.querySelector('.section').innerHTML = html;
}
window.onpopstate = urlLocationHander;
window.route = urlRoute;
urlLocationHander();