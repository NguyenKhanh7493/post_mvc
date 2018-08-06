<script src="<?= base_url ?>/asset/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url ?>/asset/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?= base_url ?>/asset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="<?= base_url ?>/asset/js/jquery.slimscroll.js"></script>

<script src="<?=base_url?>/asset/plugins/bower_components/raphael/raphael-min.js"></script>
<script src="<?=base_url?>/asset/plugins/bower_components/morrisjs/morris.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="<?=base_url?>/asset/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- jQuery peity -->
<script src="<?=base_url?>/asset/plugins/bower_components/peity/jquery.peity.min.js"></script>
<script src="<?=base_url?>/asset/plugins/bower_components/peity/jquery.peity.init.js"></script>

<!--Wave Effects -->
<!--<script src="--><?//= base_url ?><!--/asset/js/jquery-1.7.1.min.js"></script>-->
<!--<script src="--><?//= base_url ?><!--/asset/js/bootstrap-validate.js"></script>-->
<!--<script src="--><?//= base_url ?><!--/asset/js/jquery.validate.js"></script>-->
<!--<script src="--><?//= base_url ?><!--/asset/js/jquery.validate.min.js"></script>-->
<script src="<?= base_url ?>/public/ajax.js"></script>
<script src="<?= base_url ?>/asset/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?= base_url ?>/asset/js/custom.min.js"></script>
<script src="<?=base_url?>/asset/js/dashboard1.js"></script>
<!--Style Switcher -->
<script src="<?=base_url?>/asset/plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
<script>
    $(document).ready(function(){
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove:  'Supprimer',
                error:   'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element){
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element){
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element){
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e){
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>
<script src="<?= base_url ?>/asset/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
