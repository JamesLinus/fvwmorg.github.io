<?php
//--------------------------------------------------------------------
//-  File          : documentation/manpages/template.php
//-  Project       : FVWM Home Page
//-  Programmer    : Uwe Pross
//--------------------------------------------------------------------

// This is an autogenerated file, use manpages2php to create it.

//--------------------------------------------------------------------
// this manpages should not appear in the navigation structure
// so we hide its contents from navgen
//--------------------------------------------------------------------
if (strlen("$navigation_check") > 0) return;


$rel_path = "../../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Man page - FvwmDebug";
$heading        = "Man page - FvwmDebug";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));

// Since manpages shall not apear in the navigation structure this
// page must identify itself with another name. It says here that
// it's name is manpages which belongs actually to the table of
// content page for all man pages. The layout file will therefore
// mark the navigation entry for the toc file as choosen althought
// it is actually not choosen.
$this_site      = "manpages";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if (strlen($site_has_been_loaded) == 0) {
	$site_has_been_loaded = "true";
	if (strlen($layout) > 0) {
		$file = "$rel_path/layout_$layout.inc";
		if (file_exists($file)) $layout_file = $file;
	}
	include(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmDebug"); ?>

<H1>FVWMDEBUG</H1>
Section: FVWM Module (1)<BR>Updated: perl v5.6.0<BR><A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmDebug - the <FONT>FVWM</FONT> module debugger
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<A NAME="ixAAC"></A>
FvwmDebug should be spawned by <I><a href="<?php echo conv_link_target('fvwm.php');?>">fvwm</a>"</I>(1) for normal functionality.
<P>

To run this module, place this command somewhere in the configuration:
<P>

<blockquote><pre>  Module FvwmDebug</pre></blockquote>
To stop this module, execute:
<P>

<blockquote><pre>  KillModule FvwmDebug</pre></blockquote>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<A NAME="ixAAD"></A>
This module dumps all fvwm event information into standard error stream for
debugging purposes.
<A NAME="lbAE">&nbsp;</A>
<H2>INVOCATION</H2>

<A NAME="ixAAE"></A>
There are several command line switches:
<P>

<B><u>FvwmDebug</u></B>
[ <B>--noargs</B> ]
[ <B>--log</B> <I>file</I> ]
[ <B>--mask</B> <I>mask</I> ]
[ <B>--xmask</B> <I>mask</I> ]
[ <B>--send-configinfo</B> ]
[ <B>--send-windowlist</B> ]
<P>

Long switches may be abbreviated to shorter switches.
<P>

<B>-n</B>|<B>--noargs</B> - do not print all event arguments, just event name.
<B>--args</B> is the default.
<P>

<B>-l</B>|<B>--log</B> <I>file</I> - specify the log file name instead of the standard
error stream. If the log file can't be open for writting, the default
standard error stream is used.
<P>

<B>-m</B>|<B>--mask</B> <I>mask</I> - set the module mask
<P>

<B>-x</B>|<B>--xmask</B> <I>mask</I> - set the module extended mask
<P>

<B>-sc</B>|<B>--send-configinfo</B> - send <B>Send_ConfigInfo</B> command to <I>fvwm</I>
on startup, this results in a lot of events received.
<P>

<B>-sw</B>|<B>--send-windowlist</B> - send <B>Send_WindowList</B> command to <I>fvwm</I>
on startup, this results in a lot of events received.
<A NAME="lbAF">&nbsp;</A>
<H2>SEE ALSO</H2>

<A NAME="ixAAF"></A>
See the <a href="<?php echo conv_link_target('FvwmGtkDebug.php');?>">FvwmGtkDebug</a> manpage.
<A NAME="lbAG">&nbsp;</A>
<H2>AUTHOR</H2>

<A NAME="ixAAG"></A>
Mikhael Goikhman &lt;<A HREF="mailto:migo@homemail.com">migo@homemail.com</A>&gt;.
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">INVOCATION</A><DD>
<DT><A HREF="#lbAF">SEE ALSO</A><DD>
<DT><A HREF="#lbAG">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
<A HREF="./">man2html</A>,
using the manual pages.<BR>
Time: 02:56:51 GMT, April 17, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 17-Apr-2003 05:56:47 -->
