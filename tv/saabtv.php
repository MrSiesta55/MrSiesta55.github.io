<html>
<head>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126212049-8"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<link href="../css/zndex.css" rel="stylesheet">
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126212049-8');
</script>
<style>
    .saab {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 500px;
    margin-top: 10%;
  }
</style>

</head>
<body>

<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="../index.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a id="nav1" class="btn" href="../tv.php">Tv Somalia</a>
                <a id="nav2" class="btn" href="../riwa.html">Riwayad</a>
              </div>
            </div>
          </nav>
    </header>

<script src="https://www.google-analytics.com/analytics.js"></script>
<link href="https://vjs.zencdn.net/7.8.2/video-js.css" rel="stylesheet">
<script src='https://vjs.zencdn.net/7.8.2/video.js'></script>
<script src='../js/plugin.js'></script>

<div class="saab">
	<video id='player_vjs' class='video-js vjs-big-play-centered' controls preload="auto" autoplay="true">
		<source id="player_src" src='https://ap02.iqplay.tv:8082/iqb8002/s03btv/playlist.m3u8' type='application/x-mpegURL'>
	</video>
</div>

<script src='../js/video_plugin.js'></script>

</body>
</html>