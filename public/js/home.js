$(document).ready(() => {

    $(document).on('click','.load-more', () => {
        let length = $('.card').length
        $.get(`${url}/app/ajax/home.php`,{data:length},response => {
            $('.projects').html(response)
        })
    })

    $(document).on('click','.view-project',(e) => {
        let id = e.target.id
        $.get(`${url}/app/ajax/home.php`,{view:id},response => {

        })
    })



})