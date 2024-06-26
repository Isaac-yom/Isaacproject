const modal = document.querySelectorAll('.services__modal'),
    modalButton = document.querySelectorAll('.services__button'),
    modalClose = document.querySelectorAll('.services__modal-close')

let activesModal = (modalClick) => {
    modal[modalClick].classList.add('active-modal')
}

modalButton.forEach((modalButton, i) => {
    modalButton.addEventListener('click', () => {
        activesModal(i)
    })
})


modalClose.forEach((modalClose) => {
    modalClose.addEventListener('click', () => {
        modal.forEach((modalRemove) => {
            modalRemove.classList.remove('active-modal')
        })
    })
})


const scrollUp = () =>{
    const scrollUp = document.getElementById('scroll-up')

    this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
                    :scrollUp.classList.remove('show-scroll')

}
window.addEventListener('scroll', scrollUp)



