
const BtnAddComment = document.querySelector('#btnAddComment');
const CommentContent = document.querySelector('#commentContent');
const Comments = document.querySelector('#comments');
BtnAddComment.addEventListener('click', (e)=>{
    e.preventDefault();
    $.ajax({
        url: '/addComment',
        type: 'post',
        data: { "content": CommentContent.value},
        success: function(response) {
            if(response == ""){
                Comments.innerHTML += "<div>" + CommentContent.value + "</div>";
                CommentContent.value = "";
            }
        }
    });
})