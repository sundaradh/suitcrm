<?php /* Smarty version 2.6.33, created on 2022-05-08 12:39:45
         compiled from include/SearchForm/tpls/footerPopup.tpl */ ?>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php echo '
<script>

    var listViewSearchIcon = {

        searchInfo: '; ?>
<?php echo $this->_tpl_vars['searchInfoJson']; ?>
<?php echo ',

        selectedSavedSearch: '; ?>
'<?php echo $this->_tpl_vars['savedSearchData']['selected']; ?>
'<?php echo ',

        infoInit: function () {

            $(function () {
                // load qtip
                if (typeof $.qtip == \'undefined\') {
                    $.getScript(\'include/javascript/qtip/jquery.qtip.min.js\');
                    $("<link/>", {
                        rel: "stylesheet",
                        type: "text/css",
                        href: "include/javascript/qtip/jquery.qtip.min.css"
                    }).appendTo("head");
                }

                // add qtip to search filter icon
                var qtipLoadInterval = setInterval(function () {
                    if (typeof $.qtip != \'undefined\') {
                        clearInterval(qtipLoadInterval);

                        var qtipNeeded = false;
                        var qtipContent = \'<table>\';
                        for (var key in listViewSearchIcon.searchInfo) {
                            qtipContent += \'<tr>\';
                            qtipContent += \'<td><b>\' + key + \'</b>&nbsp;</td>\';
                            qtipContent += \'<td>\' + listViewSearchIcon.searchInfo[key] + \'</td>\';
                            qtipContent += \'</tr>\';
                            qtipNeeded = true;
                        }
                        qtipContent += \'</table>\';

                        if (qtipNeeded) {
                            $(\'.searchAppliedAlertLink\').qtip({
                                content: qtipContent
                            });
                            $(\'.searchAppliedAlertLink\').removeClass(\'hidden\');
                        }
                    }
                }, 100);

                var switchSearchTabLatestActiveInterval = setInterval(function () {
                    listViewSearchIcon.switchSearchTabLatestActive();
                }, 100);

            });

        },

        onOpen: function () {
        },

        // private
        latestSearchDialogType: \''; ?>
<?php echo $this->_tpl_vars['viewTab']; ?>
<?php echo '\',

        // private
        setLatestSearchDialogType: function (dialogType) {
            $(\'input[name="selectedSearchTab"]\').val(dialogType);
            this.latestSearchDialogType = dialogType;
        },

        // public
        getLatestSearchDialogType: function () {
            return this.latestSearchDialogType;
        },

        toggleSearchDialog: function (dialogType) {
            if (dialogType == \'latest\') {
                if (this.selectedSavedSearch != \'\') {
                    dialogType = \'advanced\';
                }
                else {
                    dialogType = this.getLatestSearchDialogType();
                }
            }
            this.setLatestSearchDialogType(dialogType);
            SUGAR.searchForm.searchFormSelect(\''; ?>
<?php echo $this->_tpl_vars['module']; ?>
<?php echo '|\' + dialogType + \'_search\', \''; ?>
<?php echo $this->_tpl_vars['module']; ?>
<?php echo '|\' + (dialogType == \'advanced\' ? \'basic\' : \'advanced\') + \'_search\');
        },

        switchSearchTabLatestActive: function () {
            $(\'.searchTabHandler\').removeClass(\'active\');
            $(\'.searchTabHandler.\' + this.getLatestSearchDialogType()).addClass(\'active\');

            $(\'.searchTabHeader\').removeClass(\'active\');
            $(\'.searchTabHeader.\' + this.getLatestSearchDialogType()).addClass(\'active\');
        }

    };

    listViewSearchIcon.infoInit();


</script>
'; ?>
