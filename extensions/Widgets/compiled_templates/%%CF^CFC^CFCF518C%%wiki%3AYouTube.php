<?php /* Smarty version 2.6.18-dev, created on 2010-09-01 18:57:10
         compiled from wiki:YouTube */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'wiki:YouTube', 1, false),)), $this); ?>
<object width="425" height="355"><param name="movie" value="http://www.youtube.com/v/<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'urlpathinfo') : smarty_modifier_escape($_tmp, 'urlpathinfo')); ?>
"></param><param name="wmode" value="transparent"></param><embed src="http://www.youtube.com/v/<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'urlpathinfo') : smarty_modifier_escape($_tmp, 'urlpathinfo')); ?>
" type="application/x-shockwave-flash" wmode="transparent" width="425" height="355"></embed></object>