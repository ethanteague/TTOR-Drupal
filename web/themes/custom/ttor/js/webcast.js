/**
 * @file
 * Webcast utilities.
 *
 */
(function ($, Drupal, drupalSettings) {
  $(".recess-block").hide();

  var isActive = drupalSettings.ttor_sca.isActive;
  var posterImage = drupalSettings.ttor_sca.videojsPoster;

  if (isActive) {
    // Show video
    $(".video-box").show();
    $(".webcastString").hide();
    // Get active streams
    // Create Player
    var video_source = "";
    videojs.log.level("error");
    $.getJSON(
      "https://0w13nkotj6.execute-api.us-east-2.amazonaws.com/default/getmeetings?active=true",
      function (data) {
        var stream = $.grep(data, function (e) {
          return e.user === "supreme.vtc01";
        })[0];
        if (stream) {
          video_source =
            "https://publicstream.ttor.gov/hls/" +
            stream.user +
            "-" +
            stream.meeting_id +
            ".m3u8";
          changeVideoSource(video_source);
        } else {
          $(".video-box").hide();
          $(".recess-block").show();
          $(".webcastString").hide();
          // Check if stream is available, pull stream info in, if not available check again X seconds later
          checkStream(function (result) {
            video_source =
              "https://publicstream.ttor.gov/hls/" +
              result.user +
              "-" +
              result.meeting_id +
              ".m3u8";

            $(".video-box").show();
            $(".recess-block").hide();
            $(".webcastString").hide();
          });
        }
      }
    );
  }

  function checkStream(cb) {
    return setTimeout(function () {
      if (!isActive) {
        $('.video-box').hide();
        $('.recess-block').hide();
        $('.webcastString').show();
        return 0;
      }
      var sup_stream = '';
      var stream = $.getJSON("https://0w13nkotj6.execute-api.us-east-2.amazonaws.com/default/getmeetings?active=true", function (data) {
        sup_stream = $.grep(data, function (e) {
          return e.user === 'supreme.vtc01';
        })[0];
        if (!sup_stream) {
          return checkStream(cb);
        } else {
          changeVideoSource('https://publicstream.ttor.gov/hls/' + sup_stream.user + '-' + sup_stream.meeting_id + '.m3u8');
          return cb(sup_stream);
        }
      });
    }, 30 * 1000);
  }

  function changeVideoSource(src){
    var checkForDuration = false;
    if (src && src != undefined && src != ''){
      video_source = src;
      try {
        var oldPlayer = document.getElementById('ttor-video_html5_api');
        videojs(oldPlayer).dispose();
      }
      catch {
        //pass
      }
      $('.video-box').html(' <video id="ttor-video" class="video-js vjs-theme-ttor vjs-16-9" controls preload="auto" width="640"  \
        height="360" poster="'+ posterImage +'" data-setup="{}" autoplay="true"> \
        <source src="' + src +'" type="application/x-mpegURL" />\
        <p class="vjs-no-js"> \
          To view this video please enable JavaScript, and consider upgrading to a \
          web browser that \
          <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a> \
        </p> \
      ');
      var newPlayer = document.getElementById('ttor-video');

      videojs.log.level('error');
      var player = videojs( newPlayer, {'src':{'autoplay':true,'src':src,'type':'application/x-mpegURL'}, 'controlBar': { 'fullscreenToggle': true, 'playToggle': true, 'pictureInPictureToggle': false }}, function onPlayerReady () {

        // Event play -- Import caption resources.
        this.on("play", function () {
          $('#caption-trigger').show();
          $("#sb_ScriptedUL").load(location.href + " #sb_ScriptedUL", function () {
            $('#caption-trigger').click(function () {
              if ($('#caption-block').css('display') == 'none') {
                $('#caption-block').show();
                $('#caption-trigger').html("Turn off Webcast with open captionining");
              } else if ($('#caption-block').css('display') == 'block') {
                $('#caption-block').hide();
                $('#caption-trigger').html("View Webcast with open captionining");
              }
            });
          });
        });

        this.tech().one('retryplaylist', function (e) {
        if (isActive) {
          $('.video-box').hide();
          $('.recess-block').show();
          $('.webcastString').hide();
          var stream = checkStream(function(result) {
            video_source = 'https://publicstream.ttor.gov/hls/' + result.user + '-' + result.meeting_id + '.m3u8';
            $('.video-box').show();
            $('.recess-block').hide();
            $('.webcastString').hide();
          });
        } else {
          $('.video-box').hide();
          $('.recess-block').hide();
          $(".webcastString").show();
          return 0;
        }
    });
      });

    } else {
      $('.video-box').hide();
      $('.recess-block').show();
      $('.webcastString').hide();
      var stream = checkStream(function(result) {
        video_source = 'https://publicstream.ttor.gov/hls/' + result.user + '-' + result.meeting_id + '.m3u8';
        $('.video-box').show();
        $('.recess-block').hide();
        $('.webcastString').hide();
      });
    }

  }

  function checkActiveStatus(cb) {
    return setTimeout(function () {
      jQuery.ajax({
        url: "/ttor_rest_api/webcast?_format=json",
        method: "GET",
        headers: {
          "Content-Type": "application/json",
        },
        success: function (response) {
          isActive = response["active"];
          if (isActive) {
            return checkActiveStatus(cb);
          } else {
            return cb(isActive);
          }
        },
      });
    }, 30 * 1000);
  }

  checkActiveStatus(function (result) {
    if (!result) {
      $(".video-box").hide();
      $("#webcast-cc-block").show();
      $(".recess-block").hide();
      $(".webcastString").show();

      var videoPlayer = document.getElementById("ttor-video_html5_api");
      videoPlayer ? videojs(videoPlayer).dispose() : null;
      return 0;
    }
  });
})(jQuery, Drupal, drupalSettings);
