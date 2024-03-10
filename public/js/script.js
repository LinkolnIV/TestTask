let like = document.querySelectorAll('.like');
like.forEach(function(item){
    item.addEventListener('click',(button)=>{
        let pictureId = button.target.attributes['data-value']['value'];
        console.log(button.target.attributes['data-value']['value']);
        $.ajax({
                url:'/like',
                type:'POST',
                data:{
                    "pictureId":pictureId
                    }
            });
    });
});

let dislike = document.querySelectorAll('.dislike');
dislike.forEach(function(item){
    item.addEventListener('click',(button)=>{
        let pictureId = button.target.attributes['data-value']['value'];
        console.log(button.target.attributes['data-value']['value']);
        $.ajax({
                url:'/dislike',
                type:'POST',
                data:{
                    "pictureId":pictureId
                    }
            });
    });
});

let comment = document.querySelectorAll('.comment-submit');
comment.forEach(function(item){
    item.addEventListener('click',(button)=>{
        button.preventDefault();
        let textarea = button.target.form[0].value;
        let pictureId = button.target.form[1].value;
        $.ajax({
                url:'/comments-add',
                type:'POST',
                data:{
                    "pictureId":pictureId,
                    "comment":textarea
                }
            });
    });
});


let removeAlbum = document.querySelector('.remove-album');
removeAlbum.addEventListener('click',(el)=>{
    el.preventDefault();
    let value =  el.target.attributes['data-value']['value']
    $.ajax({
        url:'/albums-remove',
        type:'POST',
        data: {
            "album":value
        }
    })
})




