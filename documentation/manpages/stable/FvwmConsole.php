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
$title          = "FVWM - Man page - FvwmConsole";
$heading        = "Man page - FvwmConsole";
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

<?php decoration_window_start("Manual page for FvwmConsole"); ?>

<H1>FvwmConsole</H1>
Section: User Commands  (1)<BR>Updated: 3 July 2001<BR><A HREF="#index">This page contents</A>
 - <a href="./">Return to main index</A><HR>


<P>
<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

FvwmConsole - an FVWM command input interface
<P>
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

FvwmConsole is spawned by fvwm, so no command line invocation will work.
<P>
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

FvwmConsole allows the user to type fvwm configuration commands
interactively, and have them executed immediately.  This tool is
particularly useful for testing new configuration ideas, or for
implementing temporary changes to your environment.
<P>
<A NAME="lbAE">&nbsp;</A>
<H2>INVOCATION</H2>

FvwmConsole must be spawned as a module by fvwm.  FvwmConsole takes all
<I><A HREF=".//1+xterm">xterm</A></I>(1) options.
<P>

FvwmConsole can be invoked by inserting the line 'Module FvwmConsole' in
the .fvwm2rc file.  This can be placed on a line by itself, if
FvwmConsole is to be spawned during fvwm's initialization, or can be
bound to a menu or mouse button or keystroke to invoke it later.  Fvwm
will search directory specified in the ModulePath configuration option
to attempt to locate FvwmConsole.
<P>
<A NAME="lbAF">&nbsp;</A>
<H2>CONFIGURATION OPTIONS</H2>

FvwmConsole uses <I><A HREF=".//1+xterm">xterm</A></I>(1).  All resources set for xterm are
inherited unless overridden by command line options.
<P>
<DL COMPACT><DT><DD>
Module FvwmConsole -g 40x10 -fg black -bg green3
</DL>

<P>
A different terminal emulator can be specified with the -terminal
option.  However, only terminal programs that understand the options
-name, -title and -e can be used.
<P>
<DL COMPACT><DT><DD>
Module FvwmConsole -terminal rxvt
</DL>

<P>
Previous versions of FvwmConsole supported a -e option to choose a
different front-end.  Although this option is still provided for
backwards compatibility its use is discouraged unless you know
exactly what you are doing.
<P>
<DL COMPACT><DT><DD>
Module FvwmConsole -e FvwmConsoleC.pl
</DL>

<P>
(see <I><a href="<?php echo conv_link_target('FvwmConsoleC.pl.php');?>">FvwmConsoleC.pl</a>"</I>(1)).
<P>

Also X resources can be set in your ~/.Xdefaults file:
<P>
<DL COMPACT><DT><DD>
FvwmConsole*VT100*geometry: 40x4
<BR>

FvwmConsole*font: 7x14
</DL>

<P>
<P>
<A NAME="lbAG">&nbsp;</A>
<H2>COMMAND EDITING</H2>

<P>
There are a few options.  If the GNU readline library is available, it
can be used.
<P>

If Perl5 is installed, FvwmConsoleC.pl can be used as a command editor.
This can be accomplished by either copying FvwmConsoleC.pl
to fvwmlib directory as FvwmConsoleC or
invoking FvwmConsole with -e option.
For example:
<P>
<DL COMPACT><DT><DD>
Module FvwmConsole -e FvwmConsoleC.pl
</DL>

<P>
If neither one is installed, a simple input reading function which
doesn't have editing capabilities is used.

GNU readline and FvwmConsoleC.pl have some frequent used commands
in common as default.
These commands are similar to emacs.
For more details, refer GNU readline man and info pages, and
FvwmConsoleC.pl man page.
<P>
<DL COMPACT><DT><DD>

<DL COMPACT>
<DT>Cntl-A<DD>
- beginning of line
<DT>Cntl-B<DD>
- previous char
<DT>Cntl-D<DD>
- delete char
<DT>Cntl-E<DD>
- end of line
<DT>Cntl-F<DD>
- next char
<DT>Cntl-H<DD>
- backspace
<DT>Cntl-K<DD>
- erase to the end of line
<DT>Cntl-N<DD>
- next line
<DT>Cntl-P<DD>
- previous line
<DT>Cntl-R<DD>
- search reverse
<DT>Cntl-U<DD>
- delete line
<DT>Meta-B<DD>
- previous word
<DT>Meta-F<DD>
- next word
<DT>Esc &lt;<DD>
- beginning of history
<DT>Esc &gt;<DD>
- end of history
</DL>
</DL>


<P>
<A NAME="lbAH">&nbsp;</A>
<H2>EXITING</H2>

<P>
FvwmConsole can be stopped by entering the EOF character (usually CTRL-D).
<P>

<B>Note!</B> Do not use the &quot;quit&quot; command, as this is an fvwm builtin:
typing &quot;quit&quot; at the FvwmConsole command line will cause fvwm to exit.
<P>
<A NAME="lbAI">&nbsp;</A>
<H2>COPYRIGHTS</H2>

Copyright 1996, Toshi Isogai. No guarantees or warranties are provided.
Use this program at your own risk. Permission to use this program for
any purpose is given, as long as the copyright is kept intact.
<P>
<A NAME="lbAJ">&nbsp;</A>
<H2>SEE ALSO</H2>

<I><A HREF=".//1+xterm">xterm</A></I>(1), <I><a href="<?php echo conv_link_target('FvwmConsoleC.pl.php');?>">FvwmConsoleC.pl</a>"</I>(1), GNU Readline library
<P>
<A NAME="lbAK">&nbsp;</A>
<H2>AUTHOR</H2>

Toshi Isogai
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">INVOCATION</A><DD>
<DT><A HREF="#lbAF">CONFIGURATION OPTIONS</A><DD>
<DT><A HREF="#lbAG">COMMAND EDITING</A><DD>
<DT><A HREF="#lbAH">EXITING</A><DD>
<DT><A HREF="#lbAI">COPYRIGHTS</A><DD>
<DT><A HREF="#lbAJ">SEE ALSO</A><DD>
<DT><A HREF="#lbAK">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
<A HREF="./">man2html</A>,
using the manual pages.<BR>
Time: 02:56:42 GMT, April 17, 2003


<?php decoration_window_end(); ?>

<!-- Automatically generated by manpages2php on 17-Apr-2003 05:56:40 -->
