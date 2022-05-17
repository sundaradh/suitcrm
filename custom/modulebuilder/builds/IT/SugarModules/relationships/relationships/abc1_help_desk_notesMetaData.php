<?php
// created: 2022-05-08 12:38:18
$dictionary["abc1_help_desk_notes"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'abc1_help_desk_notes' => 
    array (
      'lhs_module' => 'abc1_Help_Desk',
      'lhs_table' => 'abc1_help_desk',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'abc1_help_desk_notes_c',
      'join_key_lhs' => 'abc1_help_desk_notesabc1_help_desk_ida',
      'join_key_rhs' => 'abc1_help_desk_notesnotes_idb',
    ),
  ),
  'table' => 'abc1_help_desk_notes_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'abc1_help_desk_notesabc1_help_desk_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'abc1_help_desk_notesnotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'abc1_help_desk_notesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'abc1_help_desk_notes_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abc1_help_desk_notesabc1_help_desk_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'abc1_help_desk_notes_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'abc1_help_desk_notesnotes_idb',
      ),
    ),
  ),
);