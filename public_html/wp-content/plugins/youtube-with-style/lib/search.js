;(function($) {
        var win = window.dialogArguments || opener || parent || top;
        var sendToEditor = win.send_to_editor;
		function getPageLink(type) {
			var startIndex = 1;

			if ("next" == type) {
			   startIndex = 1 + 12 * currentPage;	
			}
			else {
				startIndex = 1 + 12 * (currentPage - 2);
			}
			return "http://gdata.youtube.com/feeds/api/videos?q=" + encodeURIComponent(lastQuery) + "&orderby=" + lastOrderby + "&max-results=12&v=2&alt=json&start-index=" + startIndex;
		};

		function paging() {
		    if (currentPage > 1) {
		    	$("#prev_page_wrapper").show();
		    	$("#prev_page").attr("href", getPageLink("prev"));
		    }
		    else {
		    	$("#prev_page_wrapper").hide();
		    }
		    
		    $("#next_page_wrapper").show();
		    $("#next_page").attr("href", getPageLink("next"));
		};
		
		function flashHtml2(url) {
		    return '<object type="application/x-shockwave-flash" width="' + videoWidth + '" height="' + videoHeight + '"><param name="movie" value="' + player + '" /><param name="allowFullScreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="flashvars" value="playOnStart=true&MediaLink2='+url+'" /></object>';	
		}

		function flashHtml(url) {
		    return '[youtube]' + url + '[/youtube]';	
		}
		
	    function search(params) {
            params = params || {};
            params['action'] = "search_video";
            if (xhr) {
            	xhr.abort();
            }
            params['orderby'] = $("#orderby").val();
            xhr = $.post(ajaxurl, params, function(data) {

            	data = jsonParse(data);
            	
            	var entries = data.feed.entry;
            	var html = '';
            	for (var i = 0, len = entries.length; i < len; ++i) {
            		var thumb = "";
            		var largeThumb = "";
            		var flash = "";
            		var videoId = entries[i].media$group.yt$videoid.$t;
            		var flash = "http://youtube.com/v/" + videoId;
            		var toInsert = videoId;
            		var mediaThumbnail = entries[i].media$group.media$thumbnail;
                    thumb = mediaThumbnail[0].url;
                    largeThumb = mediaThumbnail[mediaThumbnail.length - 1].url;
                    html += '<li class="search-result"><img class="search-result-img" src="' + thumb + '" /><div style="text-align: center; margin-top: 0;"><a href="' + flash + '" class="view" >View video</a> | <a href="' + toInsert + '" class="insert">Insert</a></div></li>';
            	}
            	$("#search_results").html(html);
            	
	            $(".view").bind("click", function(e) {
	                e.preventDefault();
	                var $this = $(this);
	                var html = flashHtml2($(this).attr("href"));
	                $("#insert_from_video").attr("href", $this.parent().find(".insert").attr("href"));
	                $("#video_container").html(html);
	                $("#search_wrapper").hide();
	                $("#video_screen_container").show();
	            });     
	            
	            $(".insert").bind("click", function(e) {
	                e.preventDefault();
	                var html = flashHtml($(this).attr("href"));
	                sendToEditor(html);
	            });      	
          
            	var link = data.feed.link;
            	var nextUrl = "";
            	var prevUrl = "";
            	for (var i = 0, len = link.length; i < len; ++i) {
            		if ("next" == link[i].rel) {
            			nextUrl = link[i].href;
            		}
            		
            		if ("previous" == link[i].rel) {
            			prevUrl = link[i].href;
            		}            		
            	}
            	
            	paging(nextUrl, prevUrl);
            	$(".loading").hide();
            	xhr = null;
            });
        
	    };
	    $(function() {
	        $("#img_search").bind("click", function(e) {
	            e.preventDefault();
	            currentPage = 1;
                var q = $.trim($("#q").val());
                lastQuery = q;
                lastOrderby = $("#orderby").val();
                $("#form_loading").show();
                search({q: q});
	        });
	        
	        $("#q").bind("keypress", function(e) {
	            if (13 == e.keyCode) {
	            	e.preventDefault();
	            	$("#img_search").trigger("click");
	            }
	        });
	        
	        
	        $(".paging").bind("click", function(e) {
	            e.preventDefault();
	            var $this = $(this);
	            if ("next_page" == $this.attr("id")) {
	            	++currentPage;
	            	$("#next_loading").show();
	            }
	            else {
	            	--currentPage;
	            	$("#prev_loading").show();
	            }
	            var link = $this.attr("href");
	            search({uri: link});
	        });
	        
	        $(".back-search").bind("click", function(e) {
	            e.preventDefault();
	            $("#search_wrapper").show();
	            $("#large_image_container").hide();
	            $("#video_screen_container").hide();
	            $("#video_container").children().remove();
	        });
	        
	        $("#search_options").hide();
	        $("#options_link").bind("click", function(e) {
	            e.preventDefault();
	            $("#search_options").toggle();
	        });
	        
	    });   	
	    
	})(jQuery);
		
