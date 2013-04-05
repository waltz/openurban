<?php /* Smarty version 2.6.18-dev, created on 2013-02-14 20:31:35
         compiled from wiki:Iframe */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'validate', 'wiki:Iframe', 1, false),array('modifier', 'default', 'wiki:Iframe', 1, false),array('modifier', 'escape', 'wiki:Iframe', 1, false),)), $this); ?>
<iframe src="<?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('validate', true, $_tmp, 'url') : smarty_modifier_validate($_tmp, 'url')); ?>
" frameborder="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['border'])) ? $this->_run_mod_handler('validate', true, $_tmp, 'int') : smarty_modifier_validate($_tmp, 'int')))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
" width="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['width'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('default', true, $_tmp, 400) : smarty_modifier_default($_tmp, 400)); ?>
" height="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['height'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('default', true, $_tmp, 300) : smarty_modifier_default($_tmp, 300)); ?>
"></iframe>