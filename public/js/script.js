

$("#show-menu").on("click",function(){
	$("#mySidenav").toggleClass("open-nav close-nav");
});
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
//Edit post

function editPost(postID){
	$("#myModalLabel").text("Chỉnh sửa bài viết");
	$("#formPost").attr('action','?c=admin&a=saveEditPost&id='+postID);
	$.ajax({
		url: "index.php?c=post&a=allInfoPost&id="+postID,
		method: "POST",
		success: function(data){
			console.log(data.category_id);
			//Get title
			$("#title-post").val(data.title);
			//Get content because we using CKeditor template so we set value like that.
			CKEDITOR.instances["editor1"].setData(data.content);
			//Get id of category 
			$("#select-category").val(data.category_id);
			return true;
		},

		dataType: "json"
	});

}

//Add post

function addPost(){
	$("#myModalLabel").text("Tạo bài viết mới");
	$("#formPost").attr('action','?c=admin&a=savePost');
	$("#title-post").val("");
	$("#select-category").val("");
	CKEDITOR.instances["editor1"].setData("");
}

//Delete post

function deletePost(postID){
	var answer = confirm("Bạn thật sự muốn xóa bài viết này?");
	if (answer) {
		$.ajax({
			url: "index.php?c=admin&a=deletePost&id="+postID,
			method: "POST",
			dataType: "json"
		});
	}
	location.reload();
}

//Add category

function addCategory(){
	$("#labelFormCategory").text("Thêm danh mục");
	$("#formCategory").attr('action','?c=admin&a=saveCategory');
}

//Edit category

function editCategory(categoryID){
	$("#labelFormCategory").text("Chỉnh sửa danh mục");
	$("#formCategory").attr('action','?c=admin&a=saveEditCategory&id='+categoryID);
	$.ajax({
		url: "index.php?c=category&a=allInfoCategory&category_id="+categoryID,
		method: "POST",
		success: function(data){
			console.log(data.title);
			$("#titleOfCategory").val(data.title);
			$("#description").val(data.description);

			return true;
		},

		dataType: "json"
	});

}


//Delete post

function deleteCategory(categoryID){
	var answer = confirm("Bạn thật sự muốn xóa danh mục này?");
	if (answer) {
		$.ajax({
			url: "index.php?c=admin&a=deleteCategory&id="+categoryID,
			method: "POST",
			dataType: "json"
		});
	}
	location.reload();
}


//Add user

function addUser(){
	$("#labelFormUser").text("Thêm người dùng");
	$("#formUser").attr('action','?c=admin&a=saveUser');
}

//Edit User

function editUser(userID){
	$("#labelFormUser").text("Sửa thông tin cá nhân");
	$("#formUser").attr('action','?c=admin&a=saveEditUser&id='+categoryID);
	$.ajax({
		url: "index.php?c=category&a=allInfoCategory&category_id="+categoryID,
		method: "POST",
		success: function(data){
			console.log(data.title);
			$("#titleOfCategory").val(data.title);
			$("#description").val(data.description);

			return true;
		},

		dataType: "json"
	});

}


// Make menu content
function makeListContent(){
	var toc = "<div class='index-table'>";
    var level = 0;

    document.getElementById("contents").innerHTML =
        document.getElementById("contents").innerHTML.replace(
            /<h([\d])>([^<]+)<\/h([\d])>/gi,
            function (str, openLevel, titleText, closeLevel) {
                if (openLevel != closeLevel) {
                    return str;
                }

                if (openLevel > level) {
                    toc += (new Array(openLevel - level + 1)).join("<ul>");
                } else if (openLevel < level) {
                    toc += (new Array(level - openLevel + 1)).join("</ul>");
                }

                level = parseInt(openLevel);

                var anchor = titleText.replace(/ /g, "_");
                toc += "<li><a href=\"#" + anchor + "\">" + titleText
                    + "</a></li>";

                return "<h" + openLevel + "><a name=\"" + anchor + "\">"
                    + titleText + "</a></h" + closeLevel + ">";
            }
        );
    if (level) {
        toc += (new Array(level + 1)).join("</ul>");
    }
    toc+="</div>";
    document.getElementById("post-toc").innerHTML += toc;
}

//Toc list trigger

$("#toc-list").on("click",function(){
	$("#post-toc").toggleClass("open-toc");
});