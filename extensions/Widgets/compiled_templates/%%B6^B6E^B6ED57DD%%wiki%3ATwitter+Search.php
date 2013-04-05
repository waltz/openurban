<?php /* Smarty version 2.6.18-dev, created on 2013-03-24 18:51:29
         compiled from wiki:Twitter+Search */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'wiki:Twitter Search', 1, false),array('modifier', 'escape', 'wiki:Twitter Search', 6, false),array('modifier', 'default', 'wiki:Twitter Search', 10, false),array('modifier', 'validate', 'wiki:Twitter Search', 10, false),)), $this); ?>
<?php echo smarty_function_counter(array('name' => 'twittercounter','assign' => 'twitblogincluded'), $this);?>
<?php if ($this->_tpl_vars['twitblogincluded'] == 1): ?><script src="http://widgets.twimg.com/j/2/widget.js"></script><?php endif; ?>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: '<?php echo ((is_array($_tmp=$this->_tpl_vars['query'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
',
  interval: 6000,
  title: '<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
',
  subject: '<?php echo ((is_array($_tmp=$this->_tpl_vars['caption'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
',
  width: <?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['width'])) ? $this->_run_mod_handler('default', true, $_tmp, 250) : smarty_modifier_default($_tmp, 250)))) ? $this->_run_mod_handler('validate', true, $_tmp, 'int') : smarty_modifier_validate($_tmp, 'int')); ?>
,
  height: <?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['height'])) ? $this->_run_mod_handler('default', true, $_tmp, 300) : smarty_modifier_default($_tmp, 300)))) ? $this->_run_mod_handler('validate', true, $_tmp, 'int') : smarty_modifier_validate($_tmp, 'int')); ?>
,
  theme: {
    shell: {
      background: '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['shell']['background'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')))) ? $this->_run_mod_handler('default', true, $_tmp, '#8ec1da') : smarty_modifier_default($_tmp, '#8ec1da')); ?>
',
      color: '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['shell']['color'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')))) ? $this->_run_mod_handler('default', true, $_tmp, '#ffffff') : smarty_modifier_default($_tmp, '#ffffff')); ?>
'
    },
    tweets: {
      background: '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tweets']['background'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')))) ? $this->_run_mod_handler('default', true, $_tmp, '#ffffff') : smarty_modifier_default($_tmp, '#ffffff')); ?>
',
      color: '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tweets']['color'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')))) ? $this->_run_mod_handler('default', true, $_tmp, '#444444') : smarty_modifier_default($_tmp, '#444444')); ?>
',
      links: '<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tweets']['links'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')))) ? $this->_run_mod_handler('default', true, $_tmp, '#1985b5') : smarty_modifier_default($_tmp, '#1985b5')); ?>
'
    }
  },
  features: {
    scrollbar: false,
    loop: true,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    behavior: 'default'
  }
}).render().start();
</script>