$(function() {
	var controllers = "/application/controllers/"

	$("#share_memory, #embed_video").bind("paste", function(e){
	    var share_video = e.originalEvent.clipboardData.getData('text');

	    var data = {
		        share_video: share_video,
		        action: 'paste_video'
		    };

	    if (share_video != '') {
	    	$.ajax({
		        type: "POST",
		        url: controllers+'guestbook.php',
		        dataType: 'json',
		        data: data,
		        beforeSend: function() {
					$(".loading").removeClass('hide').html('<i class="fa fa-spinner fa-spin fa-3x primary" aria-hidden="true"></i>');
					$('.video_preview, .gesture-preview').addClass('hide');
					$('#video_preview, #gesture_preview').attr('src', '');
	        		$('#video_preview_title, #video_preview_description, #share-message').html('');
		        },
		        success: function(response) {
		        	if (response.success && response.message.link != '') {
		        		$('.video_preview').removeClass('hide');
		        		$('#video_preview').attr('src', response.message.link);
		        		$('#video_preview_title').html(response.message.title);
		        		$('#video_preview_description').html(response.message.description);
		        	}

		        	$(".loading").addClass('hide').html('');
		        }
		    });
	    }
	});

	/*$('#share_memory').keyup(function() {
		var share_memory = $(this).val();

		if (share_memory != '') {
			$('.gesture-preview').removeClass('hide');
			$('#share-message').html(share_memory);
		}
	});*/

	$('.timeline').on('click', '*[data-remove-comment]', function(e) {
		var id = $(this).attr('data-remove-comment');

		swal({
	            title: 'Are you sure?',
	            text: 'Your comment will be remove.',
	            type: 'warning',
	            showCancelButton: true,
	            confirmButtonText: 'Yes, delete it!',
	            cancelButtonText: 'Nevermind!',
	            confirmButtonClass: "btn btn-success",
	            cancelButtonClass: "btn btn-danger",
	            buttonsStyling: false
	        }).then(function() {
	        	$('#comment'+id).remove();
	          swal({
	            title: 'Deleted!',
	            text: 'Your comment is deleted.',
	            type: 'success',
	            confirmButtonClass: "btn btn-success",
	            buttonsStyling: false
	            })
	        }, function(dismiss) {
	          // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
	          if (dismiss === 'cancel') {
	            swal({
	              title: 'Cancelled',
	              text: 'Your comment is still here :)',
	              type: 'error',
	              confirmButtonClass: "btn btn-info",
	              buttonsStyling: false
	            })
	          }
	        })
	});

	$('.timeline').on('click', '*[data-comment]', function(e) {
		var id = $(this).attr('data-comment');

		$('.comment'+id).removeClass('hide');
	});

	$('#candle-slider').on('click', '*[data-candle]', function(e) {
		var id = $(this).attr('data-candle');
		var src = $(this).attr('src');

		if (id != '' && src != '') {
			$('.video_preview').addClass('hide');
			$('#video_preview').attr('src', '');
    		$('#video_preview_title').html('');
    		$('#video_preview_description').html('');

    		$('.gesture-preview').removeClass('hide');
    		$('#gesture_preview').attr('src', src);
		}
	});

	$('#gesture-slider').on('click', '*[data-gesture]', function(e) {
		var id = $(this).attr('data-candle');
		var src = $(this).attr('src');

		if (id != '' && src != '') {
			$('.video_preview').addClass('hide');
			$('#video_preview').attr('src', '');
    		$('#video_preview_title').html('');
    		$('#video_preview_description').html('');

    		$('.gesture-preview').removeClass('hide');
    		$('#gesture_preview').attr('src', src);
		}
	});
});