<?php

require 'genres.datatable.view.php';

?>
<script>
          new DataTable('#table', {
          ajax: {
              url: 'genres.api.php',
              dataSrc: ''
          },
          columns: [
              { data: 'id' },
              { data: 'ime' }
          ]
      });
</script>