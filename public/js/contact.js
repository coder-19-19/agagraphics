$(document).ready(() => {
    const form = $('#contactForm')

    form.on('submit',e => {
        let data = form.serialize()
        $.get(`${url}/app/ajax/contact.php`, data,response => {
            if(response){
                $('.note').fadeIn()
                $('.note').html(response)
                setTimeout(() => {
                    $('.note').fadeOut()
                },2000)
            }

        })

        e.preventDefault()
    })
})