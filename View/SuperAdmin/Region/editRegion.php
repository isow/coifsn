<script type="text/javascript">
    /*$(document).ready(function() {
        $('.add_btn').click(function(){
         alert('hey');   
        });
     });*/
</script>

<div class="row-fluid">
    <div class="span2" style="width:auto;float:right;">
        <button class="add_btn btn" type="button">Retour à la liste des Régions</button>
    </div>
</div>

<div id="region_form" class="listView">
    <?php echo $this->regionForm->toHtml(); ?>
</div>