const d = document;

const navbar = () =>{
    const $nav = d.querySelector('.navegador'),
            $btn = d.querySelector('.hamburger');


    d.addEventListener('DOMContentLoaded', () =>{
        d.addEventListener('click', e =>{

            if(e.target.matches('.hamburger *')){
                $btn.classList.toggle('is-active')
                $nav.classList.toggle('navegador-active');
            }
        })
    })
}

navbar();