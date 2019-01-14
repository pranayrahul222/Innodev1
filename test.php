<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="row-fluid">
  <div class="span6">
  <h4>Bootstrap Paragraph Pager</h4>
        <div id="pageStuff" class="nav nav-tabs nav-stacked">
          <p>Paragraph1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
          Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
          dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
          Aliquam in felis sit amet augue.<a href="/">Item2</a></p>
          <p>Paragraph2 Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
		  totam rem aperiam, quia cor magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
		  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
		  Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?. 
          Aliquam in felis sit amet augue.<a href="/">Item4</a></p>
          <p>Paragraph3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
          Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
          dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
          Aliquam in felis sit amet augue.<a href="/">Item3</a></p>
          <p>Paragraph4 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
          Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
          dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
          Aliquam in felis sit amet augue.<a href="/">Item213</a></p>
          <p>Paragraph5 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
          Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
          dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
          Aliquam in felis sit amet augue.<a href="/">Item</a></p>
          <p>Paragraph6 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
          Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
          dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
          Aliquam in felis sit amet augue.<a href="/">Item222</a></p>
          <p>Paragraph7 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
          Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
          dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
          Aliquam in felis sit amet augue.<a href="/">Item2</a></p>
          <p>Paragraph8 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
          Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
          dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
          Aliquam in felis sit amet augue.<a href="/">Item2</a></p>
        </div>
    </div>
  	<div class="span6">
   		<div class="pagination">
     		<ul class="pager"></ul>
  		</div> 
	</div> 
</div>
</div>
</body>
</html>
<script> 
var listElement = $('#pageStuff');
var perPage = 2; 
var numItems = listElement.children().size();
var numPages = Math.ceil(numItems/perPage);

$('.pager').data("curr",0);

var curr = 0;
while(numPages > curr){
  $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo('.pager');
  curr++;
}

$('.pager .page_link:first').addClass('active');

listElement.children().css('display', 'none');
listElement.children().slice(0, perPage).css('display', 'block');

$('.pager li a').click(function(){
  var clickedPage = $(this).html().valueOf() - 1;
  goTo(clickedPage,perPage);
});

function previous(){
  var goToPage = parseInt($('.pager').data("curr")) - 1;
  if($('.active').prev('.page_link').length==true){
    goTo(goToPage);
  }
}

function next(){
  goToPage = parseInt($('.pager').data("curr")) + 1;
  if($('.active_page').next('.page_link').length==true){
    goTo(goToPage);
  }
}

function goTo(page){
  var startAt = page * perPage,
    endOn = startAt + perPage;
  
  listElement.children().css('display','none').slice(startAt, endOn).css('display','block');
  $('.pager').attr("curr",page);
}
</script>