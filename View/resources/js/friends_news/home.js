var see_photo_array_id=new Array();
var see_photo_array_name=new Array();
var current_photo_index=0;
function see_single_photo(img_obj,all_photo_names)
{
    see_photo_array_id=new Array();
    see_photo_array_name=new Array();
    current_photo_index=0;
    var photo_for_comment_display_obj=document.getElementById("photo_for_comment_display");
    photo_for_comment_display_obj.src=img_obj.src;
    //because the photo_name is unique, so we just get the photo_name to acquire the photo_id
    var photo_name_first_slash_index=img_obj.src.lastIndexOf("/");
    var photo_name=img_obj.src.substring(photo_name_first_slash_index+1);
    var photo_name_for_comment_obj=document.getElementById("photo_name_for_comment");
    photo_name_for_comment_obj.value=photo_name;
    //img's id attribute stores all the photo's ids, such as:12,43,25
    var all_photo_ids=img_obj.id;
    see_photo_array_id=all_photo_ids.split(",");
    //all_photo_names id store all photo_names such as: djssl.jpg|sjkdks.png|dghsjfd.jpg
    see_photo_array_name=all_photo_names.split("|");
//    alert(all_photo_names);
//    alert(all_photo_ids);
    //start to load all comments for this photo
    $.ajax({
        type: "POST",
        url: "../comment/load_all_comment.php",
        data: { photo_name:photo_name }
      }).done(function( msg ) {
        $("#comment-box").html(msg);
    });
}
function see_next_photo()
{
    current_photo_index+=1;
    if(current_photo_index>see_photo_array_id.length-1)
        current_photo_index=0;
    var photo_id=see_photo_array_id[current_photo_index];
    var photo_name=see_photo_array_name[current_photo_index];
    var photo_for_comment_display_obj=document.getElementById("photo_for_comment_display");
    
    var photo_name_for_comment_obj=document.getElementById("photo_name_for_comment");
    photo_name_for_comment_obj.value=photo_name;
    
    photo_for_comment_display_obj.src="../Project_Images/photos/"+photo_name;
    
    Send_Ajax_By_Photo_ID(photo_id);
}

function see_prev_photo()
{
    current_photo_index-=1;
    if(current_photo_index<0)
        current_photo_index=see_photo_array_id.length-1;
    var photo_id=see_photo_array_id[current_photo_index];
    var photo_name=see_photo_array_name[current_photo_index];
    
    var photo_for_comment_display_obj=document.getElementById("photo_for_comment_display");
    
    var photo_name_for_comment_obj=document.getElementById("photo_name_for_comment");
    photo_name_for_comment_obj.value=photo_name;
    
    photo_for_comment_display_obj.src="../Project_Images/photos/"+photo_name;
    
    Send_Ajax_By_Photo_ID(photo_id);
}
function Send_Ajax_By_Photo_ID(photo_id)
{
     $.ajax({
        type: "POST",
        url: "../comment/load_all_comment.php",
        data: { photo_id:photo_id }
      }).done(function( msg ) {
        $("#comment-box").html(msg);
    });
}
