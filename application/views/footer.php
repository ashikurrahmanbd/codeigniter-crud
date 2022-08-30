<footer class="footer">
        <div class="site-container">
            <p>Copyright &copy; 2023</p>
        </div>
        
    </footer>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>


    <script type="text/javascript">
        $('input.typeahead').typeahead({
            source:  function (query, process) {
            return $.get('/ajaxpro', { query: query }, function (data) {
                    console.log(data);
                    data = $.parseJSON(data);
                    return process(data);
                });
            }
        });
    </script>

    <script type="text/javascript">
        jQuery(document).ready(function(){
          
           $('#sname').autocomplete({
                source: function(request, response){
                    $.ajax({
                        url: '<?php echo base_url().'index.php' ?>/AjaxController/userdata',
                        type: 'post',
                        dataType: "json",
                        data: {
                            search: request.term
                        },
                        success: function(data){
                            response(data)
                        }
                    })
                },
                select: function(values, ui){
                    $('#sname').val(ui.item.label);
                    return false;
                }
           });
 
        });
    </script>
    
</body>
</html>