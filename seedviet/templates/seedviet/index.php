<?php
/**
 * @package                Joomla.Site
 * @subpackage	Templates.beez_20
 * @copyright        Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license                GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

$app				= JFactory::getApplication();
$doc				= JFactory::getDocument();

$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/reset.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/text.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/layout.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/general.css', $type = 'text/css', $media = 'screen,projection');
// $doc->addStyleSheet($this->baseurl.'/templates/'.$this->template.'/css/print.css', $type = 'text/css', $media = 'print');

// $doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/md_stylechanger.js', 'text/javascript');
// $doc->addScript($this->baseurl.'/templates/'.$this->template.'/javascript/hide.js', 'text/javascript');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<jdoc:include type="head" />

<!--[if lte IE 6]>

<![endif]-->

<!--[if IE 7]>
<![endif]-->

</head>

<body>
	<div class="container">
	
		<div id="header" class="relative">
			<div id="main-menu" class="absolute">
				<jdoc:include type="modules" name="main-menu" />
			</div>
		</div>
		
		<div class="grid-wraper round-conners-10">
			
			<div id="component-content">
				<jdoc:include type="message" />
				<div class="grid-left fltlft">
					<div class="menu-categories bg-content round-conners-5 relative">
						<span class="txt-category fltrgt"></span>
						<div class="clr"></div>
						<jdoc:include type="modules" name="left-menu" />
						<div id="left-menu-flower-1" class="absolute"></div>
					</div>
					
					<div class="left-module bg-content round-conners-5 relative">
						<a href="<?php echo JRoute::_('index.php?option=com_phocagallery&view=category&Itemid=136', false); ?>" class="txt-album fltrgt"></a>
						<div class="clr"></div>
						<jdoc:include type="modules" name="left-album" />
						<a href="<?php echo JRoute::_('index.php?option=com_youtubegallery&Itemid=135', false); ?>" class="video-store"></a>
						<div id="left-menu-flower-2" class="absolute"></div>
					</div>
					
					<div class="left-module bg-content round-conners-5">
						<a href="<?php echo JRoute::_('index.php?option=com_phocagallery&view=category&Itemid=137', false); ?>" class="txt-baby-exam fltrgt"></a>
						<div class="clr"></div>
						<jdoc:include type="modules" name="left-baby-exam" />
						
					</div>
				</div>
				<div class="grid-right fltrgt">
					<div class="content bg-content round-conners-10">
						<jdoc:include type="component" />
					</div>
				</div>
				<div class="clr"></div>
			</div>
			
		</div>
	</div>
		
		<div id="footer" class="relative">
			<div class="footer-content">
				<p>Trường mầm non chất lượng cao SeedViet</p>
				<p>Địa chỉ: Thanh Liệt, Thanh Trì, Hà Nội</p>
				<p>Điện thoại: 0918.685.085</p>
			</div>
			<div class="img-left-bottom absolute"></div>
			<div class="img-right-bottom absolute"></div>
		</div>
	<jdoc:include type="modules" name="debug" />
</body>
</html>
