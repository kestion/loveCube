<div id="produit">

	<div id="content">

		<div id="boite1">
			<img src="images/boiteblanche.png" alt="Love Cube : Pureté"  />
		</div>
	
		<div id="boite2">
			<img src="images/boitejaune.png" alt="Love Cube : Gourmande" />
		</div>

	</div>	

	<div id="center">

		<div id="description1" ></div>

		<div id="description2" ></div>

		<div id="description3" ></div>

		<div id="description4" ></div>

	</div>

	<div id="content">	

		<div id="boite3">
			<img src="images/boitenoire.png" alt="Love Cube : Sulfureuse" />
		</div>

		<div id="boite4">
			<img src="images/boiterose.png" alt="Love Cube : Romance"  />
		</div>

	</div>

	<script>
		$("#boite1").hover(function() {
				$("#description2").hide("slow", function () {
				$("#description1").fadeIn("2000")})
			});
					
			$("#boite1").hover(function() {
				$("#description3").hide("slow", function () {
				$("#description1").fadeIn("2000")});
			});
					
			$("#boite1").hover(function() {
				$("#description4").hide("slow", function () {
				$("#description1").fadeIn("2000")});
			});
					
			$("#boite2").hover(function() {
				$("#description1").hide("slow", function () {
				$("#description2").fadeIn("2000")});
			});
					
			$("#boite2").hover(function() {
				$("#description3").hide("slow", function () {
				$("#description2").fadeIn("2000")});
			});
					
			$("#boite2").hover(function() {
				$("#description4").hide("slow", function () {
				$("#description2").fadeIn("2000")});
			});
					
			$("#boite3").hover(function() {
				$("#description2").hide("slow", function () {
				$("#description3").fadeIn("2000")});
			});
					
			$("#boite3").hover(function() {
				$("#description1").hide("slow", function () {
				$("#description3").fadeIn("2000")});
			});
					
			$("#boite3").hover(function() {
				$("#description4").hide("slow", function () {
				$("#description3").fadeIn("2000")});
			});
				
			$("#boite4").hover(function() {
				$("#description2").hide("slow", function () {
				$("#description4").fadeIn("2000")});
			});
					
			$("#boite4").hover(function() {
				$("#description3").hide("slow", function () {
				$("#description4").fadeIn("2000")});
			});
					
			$("#boite4").hover(function() {
				$("#description1").hide("slow", function () {
				$("#description4").fadeIn("2000")});
			});
		
	</script>
		
</div>