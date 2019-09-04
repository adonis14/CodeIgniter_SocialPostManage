$(document).ready(function(){
    $('.slimScrollDiv').slimScroll({
        height: '300px',
        alwaysVisible: true
    });
    var d = new Date();
    var year = d.getFullYear();
    d.setFullYear(year);
    $("#post_date_picker").datepicker({
    });
    $("#post_date_picker input").change(function(){
        window.location.href = "/postmanage?date=" + $(this).val();
    })
    $(".postedit_btn").click(function(){
        var postid = $(this).data('postid');
        $("#edit_post_id").val(postid);
        $.ajax({
            url : "/postmanage/getpostbyid",
            type : 'post',
            data: {postid : postid},
            success : function(response) {
                if(response != "false"){
                    $("#medit_link").val(response.post_link);
                    $("#medit_like_cnt").val(response.post_like_cnt);
                    $("#medit_comment_cnt").val(response.post_comment_cnt);
                    $("#medit_cat").val(response.post_cat_id);
                    $("#medit_admincom").val(response.post_admincomment);
                    $("#medit_othercom").val(response.post_othercomment);    
                }
                
            }
        });
        $("#editModal").modal("show");
    });
    $(".postdel_btn").click(function(){
        var postid = $(this).data('postid');
        $("#delete_post_id").val(postid);
        
        $("#deleteModal").modal("show");
    });
	$("#addNewPostForm").submit(function(e){
        
		e.preventDefault();
        $.ajax({
            url : "/postmanage/addnewpost",
            type : 'post',
            data: $(this).serialize(),
            success : function(response) {
                if (response.state == "error") {
                    var shortCutFunction = "error";
                    var msg = response.msg;
                    var title = "Error !";
                    toastr[shortCutFunction](msg, title);
                    $('#toast-container').addClass('animated shake');
                } else {
                    window.location.reload();
                }
            }
        });
	});
    $("#editPostForm").submit(function(e){
        e.preventDefault();
        $.ajax({
            url : "/postmanage/editpost",
            type : 'post',
            data: $(this).serialize(),
            success : function(response) {
                if (response.state == "error") {
                    var shortCutFunction = "error";
                    var msg = response.msg;
                    var title = "Error !";
                    toastr[shortCutFunction](msg, title);
                    $('#toast-container').addClass('animated shake');

                } else {
                    
                    window.location.reload();
                }
            }
        });
        
    })
    $("#deletePostForm").submit(function(e){
        
        e.preventDefault();
        $.ajax({
            url : "/postmanage/deletepost",
            type : 'post',
            data: $(this).serialize(),
            success : function(response) {
                if (response.state == "error") {
                    var shortCutFunction = "error";
                    var msg = response.msg;
                    var title = "Error !";
                    toastr[shortCutFunction](msg, title);
                    $('#toast-container').addClass('animated shake');
                } else {
                    window.location.reload();
                }
            }
        });
    })
})