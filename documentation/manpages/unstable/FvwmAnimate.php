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
$title          = "FVWM - Man page - FvwmAnimate";
$heading        = "Man page - FvwmAnimate";
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

<?php decoration_window_start("Manual page for FvwmAnimate"); ?>

<H1>FvwmAnimate</H1>
Section: FVWM Modules (1)<BR>Updated: 23 September 2002<BR><A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

<B><u>FvwmAnimate</u></B> - the Fvwm Animate module
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

Module FvwmAnimate [ModuleAlias]
<P>
<B><u>FvwmAnimate</u></B> can only be invoked by fvwm.
Command line invocation of the FvwmAnimate module will not work.
<P>
From within the .fvwm2rc file, <B><u>FvwmAnimate</u></B> is spawned as follows:
<PRE>

Module FvwmAnimate

</PRE>

or from within an fvwm pop-up menu:
<PRE>

DestroyMenu Module-Popup
AddToMenu   Module-Popup &quot;Modules&quot; Title
+ &quot;Fvwm Animate Icons&quot; Module FvwmAnimate ModuleAlias

</PRE>

<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

The <B><u>FvwmAnimate</u></B> module animates iconification and de-iconification
or on command.
There are currently 6 different animation effects.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>INVOCATION</H2>

<B><u>FvwmAnimate</u></B> must be invoked by the <B><a href="<?php echo conv_link_target('fvwm.php');?>">fvwm</a></B> window manager.
When invoked with the <I>OptionalName</I> argument, the <I>ModuleAlias</I>
is used to find configuration commands, configuration files,
and name the internally generated menus and forms instead of &quot;FvwmAnimate&quot;.
During startup, FvwmAnimate defines menus and forms for configuring and
controlling FvwmAnimate.  The default menu name is &quot;MenuFvwmAnimate&quot;
and the form name is &quot;FormFvwmAnimate&quot;.
If the optional name is used, the menu would be &quot;Menu&lt;ModuleAlias&gt;&quot;
and the form would be &quot;Form&lt;ModuleAlias&gt;&quot;.
<P>
Assuming you already had a builtin menu called &quot;Module-Popup&quot;,
you could use FvwmAnimate by configuring it like this:
<PRE>

AddToFunc &quot;StartFunction&quot; &quot;I&quot; Module FvwmAnimate
AddToMenu &quot;Module-Popup&quot; &quot;Control Animation&quot; Popup MenuFvwmAnimate

</PRE>

<P>
<A NAME="lbAF">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

Since the pop up menu &quot;MenuFvwmAnimate&quot; allows complete control of
the <B><u>FvwmAnimate</u></B> module, you don't really have to know what any
of the configuration commands are.  This section describes them anyway.
<P>
<B><u>FvwmAnimate</u></B> gets configuration info from <B><a href="<?php echo conv_link_target('fvwm.php');?>">fvwm</a></B>'s module configuration
database (see 
<I><a href="<?php echo conv_link_target('fvwm.php');?>">fvwm</a>"</I>(1),

section
<B>MODULE COMMANDS</B>).

In addition, <B><u>FvwmAnimate</u></B> reads the file $HOME/.FvwmAnimate,
and accepts commands from fvwm and its modules as it runs.
<P>
If <I>ModuleAlias</I> is used to  start FvwmAnimate, the optional name
is used in all commands,  messages, menus and forms generated by  FvwmAnimate
and
in the configuration file name.   Unlike other fvwm modules, there is
little reason to use the optional name.
<P>
<DL COMPACT>
<DT>*FvwmAnimate: Color <B>color</B><DD>
Tells <B><u>FvwmAnimate</u></B> what color to draw with.
The color is &quot;XOR'ed&quot; (exclusive ORed) onto the background.
Depending on the display type you are using,  the effect this
causes will vary.  Especially on 8-bit displays, it helps if the background
is a solid color.  You have to experiment with this to see how it works.
<P>
The default color is not really a color and can be entered as &quot;Black^White&quot;,
or more simply &quot;None&quot;.  This is the same as the default XOR mask used
by fvwm for move and resize frames.
<P>
Other colors can be specified using standard X color notation.  Ie. color
names like &quot;LightBlue&quot;, or RGB values like &quot;#FFFFFF&quot;.
<P>
<DT>*FvwmAnimate: Pixmap <B>pixmap</B><DD>
Tells <B><u>FvwmAnimate</u></B> to use <B>pixmap</B> to draw with. This can be useful
if <B>*FvwmAnimate: Color</B> gives poor results.
<P>
<DT>*FvwmAnimate: Delay <B>msecs</B><DD>
Tells <B><u>FvwmAnimate</u></B> how many milliseconds to sleep
between frames of animation.
<P>
<DT>*FvwmAnimate: Iterations <B>iterations</B><DD>
Tells <B><u>FvwmAnimate</u></B> how many steps to break the animation into.
<P>
<DT>*FvwmAnimate: Twist <B>twist</B><DD>
Tells <B><u>FvwmAnimate</u></B> how many revolutions to twist the iconification frame.
<P>
<DT>*FvwmAnimate: Width <B>width</B><DD>
Tells <B><u>FvwmAnimate</u></B> how wide a line to draw with.
The default width of 0 (zero) is a fast line of Width 1.
<P>
<DT>*FvwmAnimate: Effect <B>mode</B><DD>
Tells <B><u>FvwmAnimate</u></B> which animation effect to use.
Currently the effects are:
<I>Frame</I>,
<I>Lines</I>,
<I>Flip</I>,
<I>Turn</I>,
<I>Zoom3D</I>,
<I>Twist</I>
<I>Random</I>,
and
<I>None</I>.
<I>None</I> is normally set in the configuration file, in-case FvwmAnimate
is started automatically, but an individual user doesn't want it running.
<P>
<DT>*FvwmAnimate: Stop<DD>
Tells <B><u>FvwmAnimate</u></B> to stop.
<P>
<DT>*FvwmAnimate: Save<DD>
Tells <B><u>FvwmAnimate</u></B> to save the current configuration in a file
named &quot;.FvwmAnimate&quot; in the users home directory.  This same file is
read automatically by FvwmAnimate during startup.
<P>
</DL>
<A NAME="lbAG">&nbsp;</A>
<H2>COMMANDS</H2>

<B><u>FvwmAnimate</u></B> can be asked to produce an animation thru the &quot;sendtomodule&quot;
command.  The format of the command is:
<PRE>

sendtomodule FvwmAnimate animate sx sy sw sh dx dy dw dh

</PRE>

The second word must match the name <B><u>FvwmAnimate</u></B> is started with.
The word &quot;animate&quot; must be in lower case.
The next 8 fields must be numbers.  The first 4 are for the source
(or starting) location of the animation.  The last 4 are for the
destination of the animation.
The 2 pairs of 4 numbers, represent rectangles.
The first 2 numbers are the x and y location of the upper
right corner.  The next 2 numbers are the width and height.
One or more spaces can separate the fields in the command.
<P>
Modules can use the &quot;sendtomodule&quot; command to animate &quot;NoIcon&quot; windows,
or you can think up your own ways to have all kinds of fun with this
command.
<P>
<A NAME="lbAH">&nbsp;</A>
<H2>ORIGIN</H2>

<B><u>FvwmAnimate</u></B> is based on the <B>Animate</B> module from Afterstep 1.5pre6.
Porting to <B><a href="<?php echo conv_link_target('fvwm.php');?>">fvwm</a></B> and lots of other changes were done by
<I>Dan Espen</I> &lt;<A HREF="mailto:despen@telcordia.com">despen@telcordia.com</A>&gt;.
Below are the original author and acknowledgments.
<P>
<A NAME="lbAI">&nbsp;</A>
<H2>AUTHOR</H2>

<I>Alfredo Kengi Kojima</I> &lt;<A HREF="mailto:kojima@inf.ufrgs.br">kojima@inf.ufrgs.br</A>&gt;
<P>
<A NAME="lbAJ">&nbsp;</A>
<H2>ACKNOWLEDGMENTS</H2>

These people have contributed to <B><u>FvwmAnimate</u></B>:
<P>
<DL COMPACT>
<DT><I>Kaj Groner</I> &lt;<A HREF="mailto:kajg@mindspring.com">kajg@mindspring.com</A>&gt;<DD>
Twisty iconification, configuration file parsing, man page.
<P>
<DT><I>Frank Scheelen</I> &lt;<A HREF="mailto:scheelen@worldonline.nl">scheelen@worldonline.nl</A>&gt;<DD>
<P>
</DL>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">INVOCATION</A><DD>
<DT><A HREF="#lbAF">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAG">COMMANDS</A><DD>
<DT><A HREF="#lbAH">ORIGIN</A><DD>
<DT><A HREF="#lbAI">AUTHOR</A><DD>
<DT><A HREF="#lbAJ">ACKNOWLEDGMENTS</A><DD>
</DL>
<HR>
This document was created by
<A HREF="./">man2html</A>,
using the manual pages.<BR>
Time: 02:56:50 GMT, April 17, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 17-Apr-2003 05:56:47 -->
