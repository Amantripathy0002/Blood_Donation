<!--footer section-->
<footer id="main-footer" class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col text-center py-4">
          <h3>Admin</h3>
          <p> copyright <span> &copy;</span><span id="year"></span></p>
          <button class="btn btn-primary" data-toggle="modal" data-target="#contactModal">Contact Us</button>
        </div>
      </div>
    </div>
    
    </footer>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    $('body').scrollspy({target:'#main-nav'});
//CkEditor
    CKEDITOR.replace( 'editor1' );
  </script>
</body>

</html>  