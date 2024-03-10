const image = document.getElementById('picturecrop');
if(image != null){
    const cropper = new Cropper(image, {
        crop(event) {
            picturecropWidth = document.getElementsByName('picturecropWidth').item(0);
            picturecropWidth.value = event.detail.width;
            picturecropHeight = document.getElementsByName('picturecropHeight').item(0);
            picturecropHeight.value = event.detail.height;
            picturecropX = document.getElementsByName('picturecropX').item(0);
            picturecropX.value = event.detail.x;
            picturecropY = document.getElementsByName('picturecropY').item(0);
            picturecropY.value = event.detail.y;
        },
    });

  let pictureEdit = document.querySelector('.picture-edit');
    pictureEdit.addEventListener('click',(el)=>{
        el.preventDefault();
        name = document.getElementsByName('name').item(0).value;
        sort = document.getElementsByName('sort').item(0).value;
        pictureId = document.getElementsByName('pictureId').item(0).value;
        description = document.getElementsByName('description').item(0).value;
        picturecropWidth = document.getElementsByName('picturecropWidth').item(0).value;
        picturecropHeight = document.getElementsByName('picturecropHeight').item(0).value;
        picturecropX = document.getElementsByName('picturecropX').item(0).value;
        picturecropY = document.getElementsByName('picturecropY').item(0).value;
        picturePath = document.getElementsByName('picturePath').item(0).value;

        $.ajax({
            url:'/pictures-edit-action',
            type:'POST',
            data:{
                "picturePath":picturePath,
                "pictureId":pictureId,
                "name":name,
                "sort":sort,
                "description":description,
                "picturecropWidth":picturecropWidth,
                "picturecropHeight":picturecropHeight,
                "picturecropX":picturecropX,
                "picturecropY":picturecropY
            }
        })
    })
}