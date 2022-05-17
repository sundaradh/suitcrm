<?php
// created: 2022-05-08 12:38:18
$dictionary["Note"]["fields"]["abc1_help_desk_notes"] = array (
  'name' => 'abc1_help_desk_notes',
  'type' => 'link',
  'relationship' => 'abc1_help_desk_notes',
  'source' => 'non-db',
  'module' => 'abc1_Help_Desk',
  'bean_name' => false,
  'vname' => 'LBL_ABC1_HELP_DESK_NOTES_FROM_ABC1_HELP_DESK_TITLE',
  'id_name' => 'abc1_help_desk_notesabc1_help_desk_ida',
);
$dictionary["Note"]["fields"]["abc1_help_desk_notes_name"] = array (
  'name' => 'abc1_help_desk_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABC1_HELP_DESK_NOTES_FROM_ABC1_HELP_DESK_TITLE',
  'save' => true,
  'id_name' => 'abc1_help_desk_notesabc1_help_desk_ida',
  'link' => 'abc1_help_desk_notes',
  'table' => 'abc1_help_desk',
  'module' => 'abc1_Help_Desk',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["abc1_help_desk_notesabc1_help_desk_ida"] = array (
  'name' => 'abc1_help_desk_notesabc1_help_desk_ida',
  'type' => 'link',
  'relationship' => 'abc1_help_desk_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ABC1_HELP_DESK_NOTES_FROM_NOTES_TITLE',
);
