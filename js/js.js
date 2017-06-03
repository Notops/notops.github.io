const subMenu = "sub-menu";
const contacts = "contacts-submenu";

function openMenu(a) {
    var element = document.getElementById(a);
    if (element.style.display == "none")
    {
        $(element).slideDown('slow');
    } 
    else{  
        $(element).slideUp('slow');
    }
};

$(document).ready(function($){
    
    $("#form").submit(function() {
		$.ajax({
			type: "POST",
			url: "./mail.php",
			data: $(this).serialize()
		}).done(function() {
//			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
//			$("#form").trigger("reset");
		});
		return false;
	});
    
})