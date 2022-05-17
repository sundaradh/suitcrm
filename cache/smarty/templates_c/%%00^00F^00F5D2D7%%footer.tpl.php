<?php /* Smarty version 2.6.33, created on 2022-05-08 12:30:23
         compiled from themes/SuiteP/tpls/footer.tpl */ ?>
</div>
</div>
<!-- END of container-fluid, pageContainer divs -->
<!-- Start Footer Section -->
<?php if ($this->_tpl_vars['AUTHENTICATED']): ?>
    <!-- Start generic footer -->
    <footer>
        <div id="copyright_data" class="footer_left">
            <div id="dialog2" title="<?php echo $this->_tpl_vars['APP']['LBL_SUITE_SUPERCHARGED']; ?>
" style="display: none">
                <p><?php echo $this->_tpl_vars['APP']['LBL_SUITE_DESC1']; ?>
</p>
                <br>
                <p><?php echo $this->_tpl_vars['APP']['LBL_SUITE_DESC2']; ?>
</p>
                <br>
                <p><?php echo $this->_tpl_vars['APP']['LBL_SUITE_DESC3']; ?>
</p>
                <br>
            </div>
            <div id="dialog" title="&copy; <?php echo $this->_tpl_vars['APP']['LBL_SUITE_POWERED_BY']; ?>
" style="display: none">
                <p><?php echo $this->_tpl_vars['COPYRIGHT']; ?>
</p>
            </div>
            <div id="copyrightbuttons">
                <a id="admin_options">&copy; <?php echo $this->_tpl_vars['APP']['LBL_SUITE_SUPERCHARGED']; ?>
</a>
                <a id="powered_by">&copy; <?php echo $this->_tpl_vars['APP']['LBL_SUITE_POWERED_BY']; ?>
</a>
            </div>
        </div>
        <?php if ($this->_tpl_vars['STATISTICS']): ?>
        <div class="serverstats">
            <span class="glyphicon glyphicon-globe"></span> <?php echo $this->_tpl_vars['STATISTICS']; ?>

        </div>
        <?php endif; ?>
    	<div class="footer_right">
    		
    		<a onclick="SUGAR.util.top();" href="javascript:void(0)"><?php echo $this->_tpl_vars['APP']['LBL_SUITE_TOP']; ?>
<span class="suitepicon suitepicon-action-above"></span> </a>
    	</div>
    </footer>
    <!-- END Generic Footer -->
<?php endif; ?>
<!-- END Footer Section -->
<?php echo '
    <script>
        SUGAR_callsInProgress++;
        SUGAR._ajax_hist_loaded = true;
        if (SUGAR.ajaxUI)
            YAHOO.util.Event.onContentReady(\'ajaxUI-history-field\', SUGAR.ajaxUI.firstLoad);

        $(function(){

            // fix for campaign wizard
            if($(\'#wizard\').length) {

                // footer fix
                var bodyHeight = $(\'body\').height();
                var contentHeight = $(\'#pagecontent\').height() + $(\'#wizard\').height();
                var fieldsetHeight = $(\'#pagecontent\').height() + $(\'#wizard fieldset\').height();
                var height = bodyHeight < contentHeight ? contentHeight : bodyHeight;
                if(fieldsetHeight > height) {
                    height = fieldsetHeight;
                }
                height += 50;
                $(\'#content\').css({
                    \'min-height\': height + \'px\'
                });
            }
        });

    </script>
'; ?>

</div>
<div class="modal fade modal-generic" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="title-generic"><?php echo $this->_tpl_vars['APP']['LBL_GENERATE_PASSWORD_BUTTON_TITLE']; ?>
</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal"><?php echo $this->_tpl_vars['APP']['LBL_CANCEL']; ?>
</button>
                <button id="btn-generic" class="btn btn-danger" type="button"><?php echo $this->_tpl_vars['APP']['LBL_OK']; ?>
</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
</body>
</html>