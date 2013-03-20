<script type="text/javascript">
    $(document).ready(function() {
        var descriptor = {
            //filterForm: $('.form'),
            url: "ville/get",
            tableClasses: "table table-striped",
            limit: 25,
            pagerId: 'listePager',
            export_csv: false,
            loadOnInit: true,
            countTarget: '#count',
            loaderImgDiv: $('#ajaxLoaderImg')
        };
        
        $(".add_btn").click(function(){
            window.document.location.href = "ville/edit";
        });
        $("#ville_list").evolugrid(descriptor);
     });
</script>


<div class="row-fluid">
    <div class="span2" style="width:auto;float:right;">
        <button class="add_btn btn" type="button">Ajouter</button>
    </div>
</div>

<div id="ville_list" class="listView"></div>
<div id="ajaxLoaderImg" style='display:none'>
    <center><img src="/images/ajax-loader.gif"></center>
</div>