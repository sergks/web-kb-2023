const btns = document.querySelectorAll('.products .product-item .btn-warning')

btns.forEach((item) => {
    item.addEventListener('click', () => {
        item.classList.toggle('btn-warning')
        item.classList.toggle('btn-success')
    })
})