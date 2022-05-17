<?php
 // created: 2022-05-08 12:38:18
$layout_defs["abc1_Help_Desk"]["subpanel_setup"]['abc1_help_desk_notes'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABC1_HELP_DESK_NOTES_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'abc1_help_desk_notes',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
