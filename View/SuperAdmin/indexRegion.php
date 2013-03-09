<script type="text/javascript">
    $(document).ready(function() {
        var descriptor = {
            //filterForm: $('.form'),
            url: "region/get",
            tableClasses: "table table-striped",
            limit: 25,
            pagerId: 'listePager',
            export_csv: false,
            loadOnInit: true,
            countTarget: '#count',
            loaderImgDiv: $('#ajaxLoaderImg')
        };
        
        $("#region_list").evolugrid(descriptor);
     });
</script>


<div class="row-fluid">
    <div class="span2" style="width:auto;float:right;">
        <button class="add_btn btn" type="button">Ajouter</button>
    </div>
</div>

<div id="region_list" class="listView"></div>
<div id="ajaxLoaderImg" style='display:none'>
    <img src="/images/ajax-loader.gif">
</div>