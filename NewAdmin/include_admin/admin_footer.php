<script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.0.0"></script>
  <script>
	$(document).ready(function(){
		$('#checkboxth').click(function(){
			if(this.checked){
				$('.checkboxtd').each(function(){
					this.checked=true;
				})
			}else{
				$('.checkboxtd').each(function(){
					this.checked=false;
				})
			}
		})
	})
</script>

</body>

</html>