const title=document.querySelector('.title')
const earth=document.querySelector('.earth')
const ing=document.querySelector('.ing')
const man=document.querySelector('.man')

document.addEventListener('scroll', function(){
    let value = window.scrollY;
    //console.log(value);
    title.style.marginTop = value*1.1 + 'px';

    earth.style.marginTop= value*1.5 +'px'
    ing.style.marginLeft = -value + 'px'
    man.style.marginLeft = value + 'px'
})