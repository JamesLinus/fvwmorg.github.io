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
$title          = "FVWM - Man page - FvwmDragWell";
$heading        = "Man page - FvwmDragWell";
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

<?php decoration_window_start("Manual page for FvwmDragWell"); ?>

<H1>FvwmDragWell</H1>
Section: User Commands  (1)<BR>Updated: 3 July 2001<BR><A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>


<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmDragWell - A XDND drag well
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

<B><u>FvwmDragWell</u></B>
<P>
FvwmDragWell is a Xdnd drag well.  The user sends the data and type to
the drag well via a fvwm2 SendToModule command.  The drag well
indicates that it received the information via a crude animation.  The
user may then drag the information from the well to other applications
that support the Xdnd standard.  The fvwm2 module FvwmWharf accepts
drops of type &quot;text/uri-list&quot;.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>INITIALIZATION</H2>

During initialization, <I>FvwmDragWell</I> gets config info from
<B>fvwm</B>'s module configuration database (see 
<I><a href="<?php echo conv_link_target('fvwm2.php');?>">fvwm2</a>"</I>(1),

section
<B>MODULE COMMANDS</B>).

If the FvwmDragWell executable is linked to another name, i.e. ln -s
FvwmDragWell OtherDragWell, then another module called OtherDragWell
can be started, with a completely different configuration than
FvwmDragWell, simply by changing the keyword FvwmDragWell to
OtherDragWell. This way multiple FvwmDragWell programs may be used.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>USE</H2>

Data is sent to the module from fvwm using the SendToModule Command.
The form of the send to module command is:
<PRE>

SendToModule modulename dragtype type-string, dragdata data

</PRE>

type-string is a quoted string that declares the type of
&quot;data&quot; and how the data will be exported.  The &quot;typestring&quot; string is
converted to an XAtom.  The user should use standard Mime type
strings, all in lower case.  Note that the module does no data
conversion.
<P>
There is one exception to the above format.  If the datatype string is
omitted, the module assumes that the user is passing a file or
directory path.  In this case, the string &quot;<A HREF="file://$hostname/">file://$hostname/</A>&quot; is
prepended to the data, and the data is exported as type
&quot;text/uri-list&quot;.
<P>
Examples:
<PRE>

SendToModule FvwmDragWell dragdata /usr/local/libexec/fvwm/2.4.0

</PRE>

<P>
On hostname saturn, the drag well will convert the data to
&quot;<A HREF="file://saturn/usr/local/libexec/fvwm/2.4.0">file://saturn/usr/local/libexec/fvwm/2.4.0</A>&quot;
and will export the data as type &quot;text/uri-list&quot;.  The long form of
this command would be
<PRE>

SendToModule FvwmDragWell dragtype text/uri-list, \
        dragdata <A HREF="file://saturn/usr/local/libexec/fvwm/2.3.8">file://saturn/usr/local/libexec/fvwm/2.3.8</A>

</PRE>

<P>
<A NAME="lbAF">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmDragWell must be invoked from fvwm2, so no command line invocation
will work.
<P>
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

FvwmDragWell reads the same .fvwmrc file as fvwm reads when it starts up,
and looks for certain configuration options:
<P>
<P>
<DL COMPACT>
<DT>*FvwmDragWell: Geometry <I>geometry</I><DD>
Completely or partially specifies the Fvwm window location and
geometry, in standard X11 notation. The default size is 48x48.
<P>
<DT>*FvwmDragWell: DragWellGeometry <I>geometry</I><DD>
Specifies the geometry of the drag box in the FvwmDragWell window, in
the standard X11 notation.  Default is 30x30+9+9
<P>
<P>
<DT>*FvwmDragWell: Colorset  <I>colorset</I><DD>
The colorset is used for the background and shading of the drag well.
See the man page of FvwmTheme for a description of colorsets.
<P>
<DT>*FvwmDragWell: Fore <I>Color</I><DD>
The foreground color.  The default foreground color is grey60.
<P>
<DT>*FvwmDragWell: Back <I>Color</I><DD>
The background color.  The default background color is black.
<P>
<DT>*FvwmDragWell: Shadow <I>Color</I><DD>
The shadow color of the button relief. The default foreground relief
color is grey20.
<P>
<DT>*FvwmDragWell: Hilite <I>Color</I><DD>
The hilight color of the button relief. The default background relief
color is grey90.
<P>
</DL>
<A NAME="lbAH">&nbsp;</A>
<H2>BUGS</H2>

<P>
<A NAME="lbAI">&nbsp;</A>
<H2>CREDITS and COPYRIGHTS</H2>

The concept for interfacing this module to the Window Manager by Robert Nation.
No guarantees or warranties or anything are provided or implied in any way
whatsoever.  Use this program at your own risk.  Permission to use this
program for any purpose is given, as long as the copyright is kept intact.
<P>
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">INITIALIZATION</A><DD>
<DT><A HREF="#lbAE">USE</A><DD>
<DT><A HREF="#lbAF">INVOCATION</A><DD>
<DT><A HREF="#lbAG">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAH">BUGS</A><DD>
<DT><A HREF="#lbAI">CREDITS and COPYRIGHTS</A><DD>
</DL>
<HR>
This document was created by
<A HREF="./">man2html</A>,
using the manual pages.<BR>
Time: 02:56:42 GMT, April 17, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 17-Apr-2003 05:56:40 -->
