<h1>Home Page</h1>

<form action="/api/users.json" method="get" id="albrowndesign-api-form-get">
	<input name="GET REQUEST" type="submit" class="btn" value="GET REQUEST" />
</form>

<form action="/api/users.json" method="post" id="albrowndesign-api-form-post">
	<input name="POST REQUEST" type="submit" class="btn" value="POST REQUEST" />
</form>

<form action="/api/users.json" method="put" id="albrowndesign-api-form-put">
	<input name="PUT REQUEST" type="submit" class="btn" value="PUT REQUEST" />
</form>

<form action="/api/users.json" method="delete" id="albrowndesign-api-form-delete">
	<input name="GET REQUEST" type="submit" class="btn" value="GET REQUEST" />
</form>

<div class="apiguide"></div>

<script>

var req = {
	
	events	:	function(apiguide){
			
		var $this = this; 
		
		$('form').submit( function(e){e.preventDefault()})
		
		$('#albrowndesign-api-form-get').submit(function(){ $this.getRequest(apiguide) })
		$('#albrowndesign-api-form-post').submit(function(){ $this.postRequest(apiguide) })
		$('#albrowndesign-api-form-put').submit(function(){ $this.putRequest(apiguide) })
		$('#albrowndesign-api-form-delete').submit(function(){ $this.deleteRequest(apiguide) })
		
			
	},
	
	getRequest : function(viewItem){ 
		$.ajax({
			url: '/api/users.json',
			type: 'GET',
			success: function(data, textStatus, jqXHR) {
				console.log(data);
						  $.each(data, function(key,tweet){
								console.log(key);  
								var tweet_img, tweet_from, tweet_text, tweet_date;
								
								tweet_img = tweet.profile_image_url;
								tweet_from = tweet.from_user;
								if(!tweet.to_user){tweet_to = ''; }
								else{tweet_to = "@" + tweet.to_user; }
								tweet_text = tweet.text;
								tweet_date = tweet.created_at;
								  
								var tweetHTML = $("<li><div class='img'><img src='" + tweet_img + "' /></div>"
													 + "<div class='title'>" + tweet.from_user + "<span>" + tweet_to + "</span>" + "</div>"
													 + "<div class='content'>" + tweet.text + "</div>"
													 + "<div class='date'>" + tweet_date + "</div>" +
													 "</li>");
												 
								$('#tweets').append(tweetHTML);
			
							  });
			},
			error : function(result){
				alert('error')
			}
		})
	 },
	postRequest : function(viewItem){ 
		$.ajax({
			url: '/api/users.json',
			type: 'POST',
			success: function(data, textStatus, jqXHR) {
				$(viewItem).html(data)
				console.log(data)
			},
			error : function(result){
				alert('error')
			}
		})
	},
	deleteRequest : function(viewItem){ 
		$.ajax({
			url: '/api/users.json',
			type: 'DELETE',
			success: function(data, textStatus, jqXHR) {
				$(viewItem).html(data)
				console.log(data)
			},
			error : function(result){
				alert('error')
			}
		})
	 },
	putRequest : function(viewItem){ 
			$.ajax({
			url: '/api/users.json',
			type: 'PUT',
			success: function(data, textStatus, jqXHR) {
				$(viewItem).html(data)
				console.log(data)
			},
			error : function(result){
				alert('error')
			}
		})
	 }

}

req.events('.apiguide')


</script>