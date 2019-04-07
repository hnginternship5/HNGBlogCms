const toolbar = document.querySelector('.toolbar')
const editor = document.querySelector('.editor')
editor.addEventListener('click', (e)=> {
    setTimeout(()=> {
        toolbar.style.opacity = 1
    }, 500)
})
