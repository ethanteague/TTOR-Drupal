/**
 * @file
 * Webcast utilities.
 *
 */
(function ($, Drupal, drupalSettings) {

	function getParameters() {
		var url = window.location.href;
		var paramaterString = url.substring(url.indexOf("?") + 1, url.length)
		var params = paramaterString.split("&");
		var paramsForFilter = {}
		for (var key in params) {
			var args = params[key].split("=");

			paramsForFilter[args[0]] = args[1]
		}
		return paramsForFilter;
	}
	var searchParams = new getParameters(window.location.search);
	var page_title = "";
	var video_src = "";
	if (searchParams['title']) {
		page_title = decodeURIComponent(searchParams['title']);
		$("#virtualcourt_page_title").html(page_title);
	}
	if (searchParams['video_src']) {
		video_src = searchParams['video_src'];
	}
	try {
		videojs('ttor-video', { controlBar: { fullscreenToggle: true } }).ready(function () {
			var myPlayer = this;
			myPlayer.src({ type: 'application/x-mpegURL', src: 'https://publicstream.ttor.gov/hls/' + video_src });
		});
	}
	catch(err) {
		//We're on the channels listing page instead of the stream page
	}


  var vicinageStreams = {
				'Administrative Office of the Courts': [],
				'Atlantic/Cape May': [],
				'Bergen': [],
				'Burlington': [],
				'Camden': [],
				'Cumberland/Gloucester/Salem': [],
				'Essex': [],
				'Somerset/Hunterdon/Warren': [],
				'Hudson': [],
				'Mercer': [],
				'Middlesex': [],
				'Monmouth': [],
				'Morris/Sussex': [],
				'Ocean': [],
				'Passaic': [],
				// 'Tax Court': [],
				'Union': [],
			};
			$.getJSON("https://0w13nkotj6.execute-api.us-east-2.amazonaws.com/default/getmeetings?active=true", function (data) {
				for (var location in data) {
					data[location].url = data[location].user + '-' + data[location].meeting_id + '.m3u8';
					if (data[location].group_name != undefined) {
						var vicinage = mapAcct(data[location].group_name.toLowerCase());
					} else {
						var vicinage = null;
					}
					if (vicinage != null) vicinageStreams[vicinage].push(data[location])
				}

			}).fail(function () {
				var html = '<p>Streams are not available at this time, please check back later.';
				$("#live-stream-block").html(html);
			}).then(function () {
			  var html = '<table id ="stream-table" class="table table-striped table-hover"><thead><tr><th scope="col">Location</th><th scope="col">Stream</th></tr></thead><tbody>';
				var locationCount = 0;
        var haveStreams = false;
				for (var vicinage in vicinageStreams) {
					haveStreams = true;
					for (var streams in vicinageStreams[vicinage]) {
            html += '<tr><td>' + vicinage + '</td>';
						html += '<td> <a href="https://ttor.gov/public/channels/stream?video_src=' + vicinageStreams[vicinage][streams].url + '&title=' + encodeURIComponent(vicinageStreams[vicinage][streams].title) + '&id=' + vicinageStreams[vicinage][streams].id + '" target="_blank">' + vicinageStreams[vicinage][streams].title + '</a></td></tr>';
					}
				}
        if(haveStreams == true) {
				  $("#live-stream-block").html(html);
        }
        else {
          var html = '<p>Streams are not available at this time, please check back later.';
          $("#live-stream-block").html(html);
        }

			}).then(function () {
        var table = $('#stream-table').DataTable({
            "dom": '<"toolbar"><"clearfix"><"ftool">',
		       "lengthMenu": -1,
           initComplete: function () {
            this.api().columns(0).every(function() {
                var column = this;

                var selectHtml = $('<div class="form-row align-items-center"><div class="col-auto"><label id="location-selection" for="locations">Location:</label><select id="sections" aria-labelloedby="lcation-selection" class="form-control mb-2" style="min-width:220px;"><option value="">All</option></select></div>').appendTo($("div.ftool").empty());
                var select = selectHtml.find('select');
                column.data().unique().sort().each(function(d, j) {
                    select.append('<option value="' + d + '">' + d + '</option>')

                });
                $('#sections').on('change', function() {
                    var val = $(this).val();
                    column.search(val, true, false).draw();
                });

                column.data().unique().sort().each(function(d, j) { $("#section").append('<option value="' + d + '">' + d + '</option>'); });
            });
        }
        });
			});
			function mapAcct(location) {

				var vicinage = '';
				switch (location) {
					case 'judicial education':
					case 'isp':
					case 'tax':
					case 'aoc':
						vicinage = 'Administrative Office of the Courts'
						break;
					case 'atlantic':
					case 'cape may':
						vicinage = 'Atlantic/Cape May'
						break;
					case 'bergen':
						vicinage = 'Bergen'
						break;
					case 'burlington':
						vicinage = 'Burlington'
						break;
					case 'camden':
						vicinage = 'Camden'
						break;
					case 'cumberland':
					case 'gloucester':
					case 'salem':
						vicinage = 'Cumberland/Gloucester/Salem'
						break;
					case 'essex':
						vicinage = 'Essex'
						break;
					case 'somerset':
					case 'hunterdon':
					case 'warren':
						vicinage = 'Somerset/Hunterdon/Warren'
						break;
					case 'hudson':
						vicinage = 'Hudson'
						break;
					case 'mercer':
						vicinage = 'Mercer'
						break;
					case 'middlesex':
						vicinage = 'Middlesex'
						break;
					case 'monmouth':
						vicinage = 'Monmouth'
						break;
					case 'morris':
					case 'sussex':
						vicinage = 'Morris/Sussex'
						break;
					case 'ocean':
						vicinage = 'Ocean'
						break;
					case 'passaic':
						vicinage = 'Passaic'
						break;
						// case 'tax':
						// vicinage = 'Tax Court'
						// break;
					case 'union':
						vicinage = 'Union'
						break;
					default:
						return null;
						break;
				}
				return vicinage;
			}

})(jQuery, Drupal, drupalSettings);
