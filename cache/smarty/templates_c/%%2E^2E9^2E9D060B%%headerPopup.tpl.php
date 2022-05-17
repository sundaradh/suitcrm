<?php /* Smarty version 2.6.33, created on 2022-05-08 12:39:45
         compiled from include/SearchForm/tpls/headerPopup.tpl */ ?>
<div id="searchDialog" class="modal fade modal-search" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo $this->_tpl_vars['APP']['LBL_FILTER_HEADER_TITLE']; ?>
</h4>
                <!-- Nav tabs -->
                <h5 class="searchTabHeader mobileOnly basic active"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_FILTER']; ?>
</h5>
                <h5 class="searchTabHeader mobileOnly advanced"><?php echo $this->_tpl_vars['APP']['LBL_ADVANCED_SEARCH']; ?>
</h5>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="searchTabHandler basic active"><a href="javascript:void(0)"
                                                                 onclick="listViewSearchIcon.toggleSearchDialog('basic'); return false;"
                                                                 aria-controls="searchList" role="tab"
                                                                 data-toggle="tab"><?php echo $this->_tpl_vars['APP']['LBL_QUICK_FILTER']; ?>
</a></li>
                    <li class="searchTabHandler advanced"><a href="javascript:void(0)"
                                                             onclick="listViewSearchIcon.toggleSearchDialog('advanced'); return false;"
                                                             aria-controls="searchList" role="tab"
                                                             data-toggle="tab"><?php echo $this->_tpl_vars['APP']['LBL_ADVANCED_SEARCH']; ?>
</a></li>
                </ul>
            </div>
            <div class="modal-body" id="searchList">