<!--Define audio tag with source elements pointing to audio file (and fallback files)-->

<audio id="mybgplayer">
<source src="library/audio/Buong-Doi-Tay-Nhau-Ra-Son-Tung-M-TP.mp3" type="audio/mpeg">
<source src="library/audio/Lac-Troi-Son-Tung-M-TP.mp3" type="audio/mpeg">
</audio>

<!--Define corresponding audio interface. Certain CSS classes trigger changes to them-->

<div id="mybgplayerui" class="bgplayerui">
<img class="play" src="play.gif" data-pausesrc="pause.gif" /> <img class="rewind" src="restart.gif" style="position:relative; left:-4px" /> <div class="volume"></div>

</div>

<script>


var playerinstance=bgaudioplayer({
	audioid: 'mybgplayer', // id of audio element
	audiointerface: 'mybgplayerui', // id of corresponding UI div
	autoplay: false, // auto play music?
	persistTimeLine: true, // Persist player's current timeline/ volume when moving from page to page?
	volume: 0.5, // Default volume (0.0 to 1.0)
	volumelevels: 15 // # of volume bars to show in UI
})

</script>