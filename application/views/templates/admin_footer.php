<script>
  $.validate();
  $(function() {
  	
  $('.nav li a[href^="/' + location.pathname.split("/")[1] + '"]').parent().addClass('active');
});

</script>
    </div>
</body>
</html>