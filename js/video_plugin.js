videojs('player_vjs', {
    // playbackRates: [1, 1.5, 2],
    inactivityTimeout: 0 ,
    width: '540',
    height: '360'
  }, function(){
  var player = this;

  // player.ga('create', 'UA-167993425-1', 'auto'); //takbeer player analytics
  // player.ga('send', 'pageview');

  player.responsive(true);
  player.on("pause", function () {
    $(".vjs-big-play-button").css("display", "block");
  });
  player.on("play", function () {
    $(".vjs-big-play-button").css("display", "none");
  });


  player.brand({
    image: "dist/logo6.png", //image to use
    title: "Powered by iqplay.tv",
    width: "100px",
    destination: "#", //destination when clicked
    destinationTarget: "_blank"
  });
  // player.src({type:'application/x-mpegURL', src:'https://ap02.iqplay.tv:8082/iqb8002/t5kb86/playlist.m3u8'});
});