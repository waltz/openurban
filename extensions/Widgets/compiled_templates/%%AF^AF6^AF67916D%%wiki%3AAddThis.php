<?php /* Smarty version 2.6.18-dev, created on 2013-03-24 18:51:29
         compiled from wiki:AddThis */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'wiki:AddThis', 2, false),)), $this); ?>
</noinclude><!-- AddThis Button BEGIN -->
<div style="cursor: pointer" onClick="return addthis_open(this, '', '<?php echo ((is_array($_tmp=$this->_tpl_vars['page_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['page_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
')" onmouseout="addthis_close()"><img src="http://s9.addthis.com/button1-share.gif" width="125" height="16" border="0" alt="" /></div>
<!-- AddThis Button END -->

<!-- AddThis Rollover BEGIN -->
<script type="text/javascript">
addthis_pub     = '<?php echo ((is_array($_tmp=$this->_tpl_vars['account_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
';
addthis_logo    = '<?php echo ((is_array($_tmp=$this->_tpl_vars['logo_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
';
addthis_logo_color = '<?php echo ((is_array($_tmp=$this->_tpl_vars['logo_color'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
';
addthis_logo_background = '<?php echo ((is_array($_tmp=$this->_tpl_vars['logo_background'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
';
addthis_brand   = '<?php echo ((is_array($_tmp=$this->_tpl_vars['brand'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
';
addthis_options = '<?php echo ((is_array($_tmp=$this->_tpl_vars['options'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
';
addthis_offset_top = '<?php echo ((is_array($_tmp=$this->_tpl_vars['offset_top'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
';
addthis_offset_left = '<?php echo ((is_array($_tmp=$this->_tpl_vars['offset_left'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
';
</script><script type="text/javascript" src="http://s7.addthis.com/js/152/addthis_widget.js"></script>
<!-- AddThis Rollover END -->