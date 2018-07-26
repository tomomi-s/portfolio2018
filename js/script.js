var articles = [
	// {
	// 	"href": "" ,
	// 	"datatype": "university",
	// 	"src": "img/works/article/8.png"
	// },
	// {
	// 	"href": "" ,
	// 	"datatype": "university",
	// 	"src": "img/works/article/15.png"
	// },
	{
		"href": "" ,
		"datatype": "prague",
		"src": "img/works/article/14.png"
	},
	{
		"href": "" ,
		"datatype": "prague",
		"src": "img/works/article/13.png"
	},
	{
		"href": "" ,
		"datatype": "prague",
		"src": "img/works/article/12.png"
	},
	{
		"href": "" ,
		"datatype": "prague",
		"src": "img/works/article/11.png"
	},
	{
		"href": "" ,
		"datatype": "prague",
		"src": "img/works/article/10.png"
	},
	{
		"href": "" ,
		"datatype": "university",
		"src": "img/works/article/9.png"
	},
	{
		"href": "" ,
		"datatype": "university",
		"src": "img/works/article/8.png"
	},
	{
		"href": "" ,
		"datatype": "university",
		"src": "img/works/article/7.png"
	},
	{
		"href": "" ,
		"datatype": "university",
		"src": "img/works/article/6.png"
	},
	{
		"href": "" ,
		"datatype": "interview",
		"src": "img/works/article/5.png"
	},
	{
		"href": "" ,
		"datatype": "university",
		"src": "img/works/article/4.png"
	},
	{
		"href": "" ,
		"datatype": "interview",
		"src": "img/works/article/3.png"
	},
	{
		"href": "interview" ,
		"datatype": "accommodation",
		"src": "img/works/article/2.png"
	},
	{
		"href": "" ,
		"datatype": "university",
		"src": "img/works/article/1.png"
	},
]


/////// typeWriter ///////
function typeWriter(text, n) {
  	if (n < (text.length)) { 	
	    $('#title').html(text.substring(0, n+1));
	    n++;
	    setTimeout(function() {
		    typeWriter(text, n);		    	  	
	    }, 100);
  	}
}

/////// slideIn animation///////
function slideInRight(){
  	$('.slideRight').addClass('work-left');
}

function slideInLeft(){
  	$('.slideLeft').addClass('work-right');
}




/////// slideshow ///////
var slideIndex = 0;
var interval = null;
function showSlides(modal_id) {


    // get elements to show in a slideshow with id of the modal and class 
    var slides = document.querySelectorAll('#' + modal_id + ' .mySlides');
    var dots = document.querySelectorAll('#' + modal_id + ' .dot');

	function update(){
		// increase an index of slides
		slideIndex++;
		//set all slides to display none
	    for (var i = 0; i < slides.length; i++) {
	       slides[i].style.display = "none";  
	    }
	    // set all dots to no class
	    for (var i = 0; i < dots.length; i++) {
	         dots[i].className = dots[i].className.replace(" active", "");
	    }
	    //start over from index 1 again
	    if (slideIndex > slides.length) {
	     	slideIndex = 1;
	    }    
	    // set a slide to display block
	    slides[slideIndex-1].style.display = "block";  
	    // set a dot to class active
	    dots[slideIndex-1].className += " active";
	    var a = 0;
	    a++;
	    console.log(slideIndex);


	}
	update();
	// Change image every 3 seconds
	interval = setInterval(update, 3000);




}


/////// modal ///////
function modal(){

	var modalBtns = [...document.querySelectorAll(".modal-btn")];
	modalBtns.forEach(function(btn){
	  btn.onclick = function() {
	    var modal = btn.getAttribute('data-modal');
	    document.getElementById(modal).style.display = "block";
	    console.log(modal);
		showSlides(modal);
	  }
	});

	var closeBtns = [...document.querySelectorAll(".close")];
	closeBtns.forEach(function(btn){
	  btn.onclick = function() {
	    var modal = btn.closest('.modal');
	    modal.style.display = "none";
	    //reset slideIndex to start from the first slide
	    slideIndex = 0;
	    //stop interval of slideshow
	    clearInterval(interval);
	  }
	});

	window.onclick = function() {
	  if (event.target.className === "modal") {
	    event.target.style.display = "none";
	    //reset slideIndex to start from the first slide
	    slideIndex = 0;
	    //stop interval of slideshow
	    clearInterval(interval);

	  }
	}
}


/////// sorting image ///////
function sortImage(){
	$(".articles-nav li").click(function(e){

      // 1. store data-type attribute
      var category = $(this).attr("data-type"); 
      console.log(category);

      // 2. hide all matched elements
      $('.article-objects').empty();

      // 3. if 'color' is not defined hide/show all elements ("show all" button), if color IS defined show elemtnts that match color variable

      //show all
      if(!category){
      	$('.article-objects').empty();
      	showArticles(articles);
      //show the articles in the category
      }else{
      	//find articles with the category
      	var a = articles.filter(function(article){
      		return article.datatype == category
      	});
      	showArticles(a);  
      }

      // classes for nav buttons
      $('.active').removeClass('active'); 
      $(this).addClass('active'); 

      e.preventDefault();

    });


}

/////// Store articles and output ///////
function showArticles(articles){
	articles.forEach(function(article){
		$('.article-objects').append(
	'<a href="' + article.href + '" data-type="' + article.datatype + '" target="blank">\
	    <div class="item">\
	        <img src="' + article.src + '">\
	        <span class="hover-color"></span>\
	    </div>\
	</a>'
	);
	});
}





   	  







