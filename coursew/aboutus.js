const readMoreButton = document.querySelector('.aboutus-more');
const text = document.querySelector('.aboutus-text');

readMoreButton.addEventListener('click',(e)=>{

text.classList.toggle('show-more');

if(readMoreButton.innerText === 'READ MORE'){
    readMoreButton.innerText = 'READ LESS';
}
else if(readMoreButton.innerText === 'READ LESS')
{
    readMoreButton.innerText = 'READ MORE';
}
})



