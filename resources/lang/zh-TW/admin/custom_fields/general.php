<?php

return [
    'custom_fields'		        => '自訂欄位',
    'manage'                    => 'Manage',
    'field'		                => '欄位',
    'about_fieldsets_title'		=> '關於欄位集',
    'about_fieldsets_text'		=> 'Fieldsets allow you to create groups of custom fields that are frequently re-used for specific asset model types.',
    'custom_format'             => 'Custom Regex format...',
    'encrypt_field'      	        => '加密資料庫中此欄位的值',
    'encrypt_field_help'      => '警告：對欄位加密將導致此欄無法用於搜索',
    'encrypted'      	        => '已加密',
    'fieldset'      	        => '欄位集',
    'qty_fields'      	      => '欄位數',
    'fieldsets'      	        => '欄位集',
    'fieldset_name'           => '名稱',
    'field_name'              => '名稱',
    'field_values'            => '欄位值',
    'field_values_help'       => '添加可選的選項，每行一個。第一行之外的空行將被忽略。',
    'field_element'           => '表單元素',
    'field_element_short'     => '表單元素',
    'field_format'            => '格式',
    'field_custom_format'     => '自訂格式',
    'field_custom_format_help'     => '此欄位允許您使用 RegEx 運算式進行驗證。它應該以 "RegEx:" 開頭, 例如, 要驗證自訂欄位值是否包含有效的 IMEI (15 位數字), 則應使用 <code>regex:/^[0-9]{15}$/</code>。',
    'required'   		          => '必填',
    'req'   		              => '必填',
    'used_by_models'   		    => '引用型號',
    'order'   		            => '排序',
    'create_fieldset'         => '新增欄位集',
    'create_fieldset_title' => 'Create a new fieldset',
    'create_field'            => '新增欄位',
    'create_field_title' => 'Create a new custom field',
    'value_encrypted'      	        => '此欄位的值已被加密。只有管理員能夠查看原始資料。',
    'show_in_email'     => '在發送給用戶的借出通知信中包含此欄位的值？加密的欄位不能包含在電子郵件中。',
    'help_text' => 'Help Text',
    'help_text_description' => 'This is optional text that will appear below the form elements while editing an asset to provide context on the field.',
    'about_custom_fields_title' => 'About Custom Fields',
    'about_custom_fields_text' => 'Custom fields allow you to add arbitrary attributes to assets.',
    'add_field_to_fieldset' => 'Add Field to Fieldset',
    'make_optional' => 'Required - click to make optional',
    'make_required' => 'Optional - click to make required',
    'reorder' => 'Reorder',
    'db_field' => 'DB Field',
    'db_convert_warning' => 'WARNING. This field is in the custom fields table as <code> :db_column </code> but should be :expected </code>.'
];
