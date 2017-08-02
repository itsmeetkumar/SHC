$("#submit_comment").click(function() {
	/* Act on the event */
  var name =$("#name").val();
  var comment =$("#comment").val();

      $.ajax({
       	url: 'ajax.php',
       	type: 'POST',
       	//dataType: '',
       	data: {

       		"username": name,
       		"comment_text":comment

       	    },
       })
       .done(function() {
       	console.log("success");
       })
       .fail(function() {
       	console.log("error");
       })
       .always(function() {
       	console.log("complete");
       });
        




});