$(document).ready(() => {

    const cv = $('#cv')
    const profilePhoto = $('#profilePhoto')

    cv.on('click',() => {
        let id = 1
        $.get(`${url}/app/ajax/about.php`,{profile:id},response => {

        })
    })

    profilePhoto.on('click',() => {
        let id = 2
        $.get(`${url}/app/ajax/about.php`,{profile:id},response => {

        })
    })
})