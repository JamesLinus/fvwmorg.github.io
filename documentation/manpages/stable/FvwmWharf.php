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
if(isset($navigation_check)) return;

$rel_path = "../../..";

//--------------------------------------------------------------------
// load some global definitions
//--------------------------------------------------------------------
include_once("$rel_path/definitions.inc");

//--------------------------------------------------------------------
// Site definitions
//--------------------------------------------------------------------
$title          = "FVWM - Man page - FvwmWharf";
$heading        = "FVWM - Man page - FvwmWharf";
$link_name      = "Man page";
$link_picture   = "pictures/icons/doc_manpages";
$parent_site    = "documentation";
$child_sites    = array();
$requested_file = basename(my_get_global("PHP_SELF", "SERVER"));
$this_site      = "manpages_stable_FvwmWharf";

//--------------------------------------------------------------------
// load the layout file
//--------------------------------------------------------------------
if(!isset($site_has_been_loaded)) {
	$site_has_been_loaded = "true";
	include_once(sec_filename($layout_file));
	exit();
}
?>

<?php decoration_window_start("Manual page for FvwmWharf in stable branch (2.6.1)"); ?>

<H1>FvwmWharf</H1>
Section: Fvwm Modules (1)<BR>Updated: 16 April 2011 (2.6.1)<BR><A HREF="#index">This page contents</A>
 - <a href="<?php echo conv_link_target('./');?>">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmWharf - the AfterStep application &quot;dock&quot; module ported to
Fvwm.
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

FvwmWharf is spawned by Fvwm, so no command line invocation will work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

The FvwmWharf module is a free-floating application loader that can
execute programs, &quot;Swallow&quot; running programs, and contain &quot;Folders&quot; of
more applications, among other things.  The user can press the first
button at any time to trigger invocation of one of these functions, or
the user can press button two in order to cause the entire Wharf
to withdraw to the nearest corner in an iconified state.  FvwmWharf only
works when fvwm is used as the window manager.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>COPYRIGHTS</H2>

The FvwmWharf module is copyright 1995 and 1996 by a variety of contributors.
They are, in alphabetical order, Beat Christen, Frank Fejes, Alfredo
Kenji Kojima, Dan Weeks, and Bo Yang
<P>
The GoodStuff program, and the concept for
interfacing this module to the Window Manager, are all original work
by Robert Nation
<P>
No guarantees or warranties or anything
are provided or implied in any way whatsoever. Use this program at your
own risk. Permission to use this program for any purpose is given,
as long as the copyright is kept intact.
<P>
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>INITIALIZATION</H2>

During initialization, <I>FvwmWharf</I> gets config info from <B><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></B>'s
module configuration database (see
<I><a href="<?php echo conv_link_target('./fvwm.php');?>">fvwm</a></I>(1),

section
<B>MODULE COMMANDS</B>)

to obtain a description of button panel geometry, color, icons, and
actions.
<P>
If the FvwmWharf executable is linked to another name, ie ln -s
FvwmWharf Pier, then another module called Pier can be
started, with a completely different configuration than FvwmWharf,
simply by changing the keywords FvwmWharf... to Pier.... This way multiple
button-bars can be used.
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmWharf should be invoked in the same way as other
fvwm modules.
<P>
<A NAME="lbAH">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

<DL COMPACT>
<DT>*FvwmWharfAnimate<DD>
If specified, the opening and closing of Folders will be animated,
rather than simply drawn in one frame.
<P>
<DT>*FvwmWharfAnimateMain<DD>
Designates that full-length Wharf windows will be animated.
<P>
<DT>*FvwmWharfBgColor <I>color</I><DD>
If <I>*FvwmWharfTextureType 0</I> is specified, <I>FvwmWharf</I>'s buttons
will be filled with <I>color</I>.
<P>
<DT>*FvwmWharfColorset <I>colorset</I><DD>
Tells the module to use colorset <I>colorset</I> for the background
of all buttons.  This option disables the options 'BgColor', 'TextureType'
and 'TextureColor' if specified after these and is
disabled by them if used before any of them in the configuration.
Please refer to the man page of the FvwmTheme module for details
about colorsets.
<P>
<DT>*FvwmWharfColumns <I>columns</I><DD>
Specifies the number of columns of buttons to be created. If unspecified,
the number of columns will be set to 1.
If the columns are set to a number greater than 1 then there will be
that number
of columns with enough rows to satisfy the requested number of buttons.
<P>
<DT>*FvwmWharfForceSize<DD>
If specified, will force pixmaps larger than 64x64 to the default
size.  Pixmaps smaller than 64x64 are not supported.
<P>
<DT>*FvwmWharfFullPush<DD>
If specified, the entire FvwmWharf button background will be moved down
and to the right when pushed.  Especially useful with *FvwmWharfNoBorder
textures.
<P>
<DT>*FvwmWharfGeometry <I>geometry</I><DD>
Specifies the FvwmWharf window location and/or size. If the size is
not specified, FvwmWharf will auto-size itself in a reasonable manner.
The geometry is a standard X11 window geometry specification.  This option is
pre-set in the Nextstep(tm) style section for a consistent look and
feel with NEXTSTEP(tm). Secondary FvwmWharf invocations from links
may have their own geometry.
<P>
<DT>*FvwmWharfMaxColors <I>number</I><DD>
Specifies the maximum <I>number</I> of colors to use on a gradient
fill.
<P>
<DT>*FvwmWharfNoBorder<DD>
Denotes that beveled borders should not be drawn around the FvwmWharf button.
Useful with textures that include their own bevels.
<P>
<DT>*FvwmWharfPixmap <I>pixmap</I><DD>
Sets the pixmap file to be used as <I>FvwmWharf</I>'s button.  To be used
with <I>*FvwmWharfTextureType 128</I>.
<P>
<DT>*FvwmWharfTextureColor <I>from</I> <I>to</I><DD>
When used with a <I>*FvwmWharfTextureType</I> of 1 to 5, designates the
ends of the gradient range to be used on <I>FvwmWharf</I>'s buttons.
<P>
<DT>*FvwmWharfTextureType  <I>type</I><DD>
Specifies the type of gradient fill to be used on
<I>FvwmWharf</I>'s buttons.  Valid values are:
<PRE>
0 - No texture - use <I>FvwmWharfBgColor</I> to set the desired color
1 - Gradient from upper-left to lower right
2 - Horizontal one way gradient from top to bottom
3 - Horizontal cylindrical gradient from top/bottom to center
4 - Vertical one way gradient from left to right
5 - Vertical cylindrical gradient from left/right to center
128 - User specified pixmap
</PRE>

The default is the builtin <I>FvwmWharf</I> texture pixmap.
<P>
<DT>*FvwmWharf <I>label icon command</I><DD>
Specifies a window manager built-in command or folder to activate
(folders will be discussed below), as described in the Fvwm
man page, which should be executed when a button is pressed. The label
field is an internal item that is still around from the GoodStuff module.
The icon field
specifies an X11 bitmap file, XPM color icon file, or a comma-delimited
set of pixmaps containing the
icon(s) to display on the button. FvwmWharf will search through the path
specified in the ImagePath configuration item to
find the icon file.
<P>
NOTE: Icons must have one transparent pixel or the definition of
a transparent color in order to be valid.
<P>
If <I>command</I> is an fvwm Exec command, then the button will
appear pushed in until the mouse button is released.
<P>
A single extension to the fvwm built-in command set is provided.
A command of the form:
<PRE>

*FvwmWharf junk clock.xpm Swallow &quot;Clock&quot; asclock -shape -12

</PRE>

will cause FvwmWharf to spawn an asclock process, and capture
the first window whose name or resource is &quot;Clock&quot;, and display it in
the button-bar. This is handy for applications like xclock, xbiff,
xload, asclock, and asmail.
<P>
Modules can be swallowed by specifying the word Module:
<PRE>

*FvwmWharf pager nil Swallow &quot;Desktop&quot; Module FvwmPager 0 0

</PRE>

NOTE: if you use xclock for this application, you will want
to specify xclock -padding 0.
<P>
<I>Swallow</I>

option tries to force an application to be 48 by 48 pixels.
A special option
<I>MaxSwallow</I>

can be used to leave an application at its own size (but less then 64x64).
MaxSwallow is invoked the same way Swallow is. If you want an application
to fill all the button place, you should start it with a proper geometry flag,
like &quot;xload -g 64x64&quot; or, if you want to leave a 3d-look: &quot;xload -g 60x60&quot;.
<P>
Note, not all applications are good for swallowing, some can't be
resized at all, some can't be resized exactly to 48x48 or 64x64,
you are responsible for choosing suitable applications to be swallowed.
<P>
To create folder &quot;slide-outs&quot; in
<B><u>FvwmWharf</u></B>

the following format must be used:
<PRE>

*FvwmWharf files Folders.xpm Folder
*FvwmWharf xftp 3DRings.xpm     Exec xftp
*FvwmWharf xdir FolderDeposit.xpm Exec xdir
*FvwmWharf moxfm FilingCabinet.xpm Exec moxfm
*FvwmWharf ~Folders

</PRE>

The first line of this set tells FvwmWharf that this button definition
will be a folder.  All of the button definitions between the
<I>Folder</I>

and the line with the definition of
<I>*FvwmWharf ~Folders</I>

will appear on the &quot;files&quot; folder when it is exposed.  To expose the &quot;files&quot;
folder simply click on the FvwmWharf button with the Folders.xpm icon
showing.  A button bar will appear perpendicular to your FvwmWharf bar
and toward the center of the screen.  On this smaller bar will be the
three icons that were configured between the
<I>Folder</I>

and
<I>~Folder</I>

parts of the FvwmWharf configuration.  As many folder buttons may be configured as
is room on your screen.  The only items that may not be configured within
folders are Swallowed applications and more folders.
<P>
</DL>
<A NAME="lbAI">&nbsp;</A>
<H2>DRAG AND DROP</H2>

<I>FvwmWharf</I> supports the OffiX Drag and Drop standard.  In order to
have Drag and Drop enabled on a particular button, the following syntax
must be adhered to:
<PRE>

*FvwmWharf nil nil DropExec &quot;<I>program</I>&quot; <I>program</I> %s
*FvwmWharf <I>program</I> <I>iconname</I> Exec &quot;<I>program</I>&quot; <I>program</I>

</PRE>

<P>
The button will call <I>program</I> when pushed.  If a file is dragged
onto into it, <I>program</I> will be called with %s being replaced by
the dropped filename.
<P>
<A NAME="lbAJ">&nbsp;</A>
<H2>AUTHORS</H2>

<PRE>
Beat Christen (<A HREF="mailto:bchriste@iiic.ethz.ch">bchriste@iiic.ethz.ch</A>)
Frank Fejes (<A HREF="mailto:frank@ssax.com">frank@ssax.com</A>)
Alfredo Kengi Kojima (<A HREF="mailto:kojima@inf.ufrgs.br">kojima@inf.ufrgs.br</A>)
Dan Weeks (<A HREF="mailto:dan@mango.sfasu.edu">dan@mango.sfasu.edu</A>)
Bo Yang (<A HREF="mailto:eric@coeus.ucsd.edu">eric@coeus.ucsd.edu</A>)
</PRE>

<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">COPYRIGHTS</A><DD>
<DT><A HREF="#lbAF">INITIALIZATION</A><DD>
<DT><A HREF="#lbAG">INVOCATION</A><DD>
<DT><A HREF="#lbAH">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAI">DRAG AND DROP</A><DD>
<DT><A HREF="#lbAJ">AUTHORS</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 21:49:18 GMT, April 16, 2011


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 16-Apr-2011 -->
