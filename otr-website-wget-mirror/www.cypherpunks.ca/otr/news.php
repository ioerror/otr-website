<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Off-the-Record Messaging</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Off-the-Record Messaging, Encryption, Authentication, Deniability, Perfect forward secrecy" />
<meta name="description" content="Off-the-Record Messaging" />
<meta name="robots" content="all" />
<link rel="stylesheet" href="main.css" type="text/css" />
</head>

<body>

<div id="title">
<!-- Donate button based on http://openclipart.org/detail/110275/glossy-button-with-3d-frame.-boton-brillante-con-marco-3d-by-ehecatl1138 -->
<a href="donate.php"><img src="baseimg/donate_button.png" align="right"
style="position:absolute; right:50px; top: 8px" /></a>
<h1><a href="index.php" title="Home">Off-the-Record Messaging</a></h1>
</div>

<div id="nav">
<ul>
	<li><a href="news.php">News</a></li>
	<li><a href="index.php#downloads">Downloads</a></li>
	<li><a href="index.php#git">Source Code</a></li>
	<li><a href="index.php#lists">Mailing Lists</a></li>
	<li><a href="index.php#docs">Documentation</a></li>
	<li><a href="index.php#faqs">FAQ</a></li>
	<li><a href="press.php">Press</a></li>
	<li><a href="software.php">Software</a></li>
	<li><a href="people.php">People</a></li>
	<li><a href="donate.php">Donate</a></li>
</ul>
</div>

<div id="news" style="padding: 15px;">
<h2><a name="news">News</a></h2>
	<p class="date">9 Sept 2012</p>
	<dl>
	<dt>pidgin-otr 4.0.0-1 for Windows released</dt>
	<dd><p>Daniel Atallah noted that Data Execution Prevention (DEP) and Address Space Layout Randomization (ASLR) were not enabled in the Windows release of pidgin-otr 4.0.0-0.  We have corrected the oversight, and <a href="http://www.cypherpunks.ca/otr/binaries/windows/pidgin-otr-4.0.0-1.exe">4.0.0-1 is now available</a>.</p>
	<p>DEP and ASLR offer additional protection to programs in the event that they already have a security flaw that allows an attacker to take control of a program.  They aim to limit the attacker to crashing your program, rather than being able to do anything more nefarious.  We of course <em>hope</em> there is no such existing flaw in pidgin-otr, but better safe than sorry. :-) </p>
	</dd></dl></p>

	<p class="date">4 Sept 2012</p>
	<dl>
	<dt>pidgin-otr 4.0.0 and libotr 4.0.0 released</dt>
	<dd><p>The long-awaited version 4.0.0 of pidgin-otr and libotr are finally here!</p>
	The main new features in 4.0.0:
	<ul>
	<li>Support v3 of the OTR protocol</li>
	<li>The plugin now supports multiple OTR conversations with the same
  buddy who is logged in at multiple locations. In this case, a new
  OTR menu will appear, which allows you to select which session an
  outgoing message is intended for. Note that concurrent SMP
  authentications with the same buddy who is logged in multiple times
  is not yet supported (starting a second authentication will end the
  first).</li>
	<li>During a private conversation with a buddy, an incoming unencrypted
  message will now trigger the regular incoming message notifications.
  In Pidgin this includes showing the message in the top-right
  notification area, if it is normally configured to do so.</li>
	<li>When a private conversation begins, the plugin will indicate whether
  Pidgin is configured to log the conversation.</li>
	<li>By default, OTR conversations will not be logged by Pidgin.</li>
	<li>New translations.</li>
	<li>libotr API changes:<ul>
	<li>instance tags, to support multiple simultaneous logins</li>
	<li>support for asynchronous private key generation</li>
	<li>the ability to provide an "extra" symmetric key to applications
    (with forward secrecy)</li>
	<li>applications can supply a format conversion callback if they do
    not natively use XHTML-style UTF8 markup</li>
	<li>error messages formerly provided by libotr are now handled using
    callbacks to the application, for better i18n support</li>
	<li>otrl_message_sending now handles message fragmentation internally</li></ul></li>
	</dd></dl></p>

	<p class="date">14 August 2012</p>
	<dl>
	<dt>libotr version 3.2.1 released</dt>
	<dd><p>Versions 3.2.0 and earlier of libotr contain a small heap
	write overrun (thanks to Justin Ferguson for the report), and a
	large heap read overrun (thanks to Ben Hawkes for the report).</p>

	<p>Windows pidgin-otr users should upgrade to <a href="http://www.cypherpunks.ca/otr/binaries/windows/pidgin-otr-3.2.1-2.exe">pidgin-otr version 3.2.1-2</a> immediately, which has been linked to the corrected libotr 3.2.1.</p>
	<p>Users of libotr packages in Linux and *BSD distributions should see updated packages shortly.</p>
	</dd>
	</dl>
	</p>

	<p class="date">16 May 2012</p>
	<dl>
	<dt><b>Security update:</b> pidgin-otr version 3.2.1</dt>
	<dd><p>Versions 3.2.0 and earlier of the pidgin-otr plugin contain a format
	string security flaw.  This flaw could potentially be exploited by
	a remote attacker to cause arbitrary code to be executed on the user's
	machine.</p>

	<p>The flaw is in pidgin-otr, not in libotr.  Other applications that use
	libotr are not affected.</p>

	<p>CVE-2012-2369 has been assigned to this issue.</p>
	<p>Please upgrade to <a href="http://www.cypherpunks.ca/otr/binaries/windows/pidgin-otr-3.2.1-1.exe">pidgin-otr version 3.2.1</a> immediately.</p>
	<p>Users of pidgin-otr packages in Linux and *BSD distributions should see updated packages shortly.</p>
	</dd>
	</dl>
	</p>

	<p class="date">3 Oct 2009</p>
	<dl>
	<dt>java-otr 0.1.0 (finally!) released</dt>
	<dd>This is for developers of Java applications that want to add support for OTR.  End users do not require this package.  <a href="java-otr-0.1.0.tar.gz">Download it here.</a></dd>
	</dl>

	<p class="date">15 Jun 2008</p>
	<dl>
	<dt>pidgin-otr-3.2.0 and libotr-3.2.0 released.  Changes from 3.1.0:</dt>
	<dd><ul>
	<li>The functionality of the OTR button has now moved to a menu.  There's
	  an "OTR" menu, as well as an icon showing the current OTR state of
	    each active conversation in the window.</li>
	<li>New OTR icons from &lt;cyrus_xiii@yahoo.com&gt;</li>
	<li>OTR icons show up inline in the conversation window when the OTR
	      status changes.</li>
	<li>Buddy authentication has been revamped, based on the user study
	    published in SOUPS 2008.  The default is now to choose a
	    question and an answer only you and the buddy should know.
	    The question is displayed to the buddy, who is prompted for
	    the answer.  The "shared secret" and "fingerprint"
	    authentication methods are still available.</li>
	<li>Translations for Arabic, German, Russian, Hungarian</li>
	</ul></dd>
	</dl>

	<p class="date">1 Aug 2007</p>
	<dl>
	<dt>pidgin-otr-3.1.0 and libotr-3.1.0 released.  Changes from 3.0.0:</dt>
	<dd><ul>
	<li>Translations for English, Dutch, Spanish, French, Slovak</li>
	<li>Added option to not log OTR conversations</li>
	<li>Large messages are now fragmented transparently instead of failing</li>
	<li>Removed "view secure session id" and "verify fingerprint"
	options from OTR button menu.  Added "<a
	href="help/authenticate.php">authenticate buddy</a>" option in
	its place.  This new option allows you to authenticate your
	buddies by entering some secret that only the two of you know,
	rather than by using a long user-unfriendly sequence of hex
	characters.  [The old "verify fingerprint" dialog is still
	available via an "Advanced..." button from the new "authenticate
	buddy" dialog.]</li>
	</ul></dd>
	</dl>

	<p class="date">8 Jun 2007</p>
	<dl>
	<dt>Version 0.5.2.0 of the third-party <a href="http://addons.miranda-im.org/details.php?action=viewfile&amp;id=2644">OTR plugin for the Miranda IM client</a> is out.</dt>
	<dd><br /></dd>
	</dl>

	<p class="date">7 Jun 2007</p>
	<dl>
	<dt>The <a href="http://freshmeat.net/projects/micq/?branch_id=6390&amp;release_id=255096">0.5.4 release</a> of the <a href="http://micq.org/">mICQ command-line ICQ client</a> now supports OTR!</dt>
	<dd><br /></dd>
	</dl>

	<p class="date">6 May 2007</p>
	<dl>
	<dt>We now have <a href="binaries/windows/pidgin-otr-3.0.0.exe">an installer for the Pidgin 2.0.0 plugin</a>.</dt>
	<dd><br /></dd>
	</dl>

	<p class="date">11 Feb 2007</p>
	<dl>
	<dt>We now have <a href="binaries/windows/gaim2b6-otr-3.0.1.6.exe">an installer for the plugin for gaim 2 beta 6</a>.</dt>
	<dd><br /></dd>
	</dl>

	<p class="date">20 Nov 2006</p>
	<dl>
	<dt>We now have <a href="binaries/windows/gaim2b5-otr-3.0.1.exe">an installer for the plugin for gaim 2 beta 5</a>.</dt>
	<dd><br /></dd>
	</dl>

	<p class="date">27 Oct 2006</p>
        <dl>
        <dt>Thanks to Ekrem Erdem for the redesign of the OTR site!</dt>
        <dd><br /></dd>
        </dl>

	<p class="date">5 Nov 2005</p>
	<dl>
	<dt>otrproxy-0.3.1 released.  Changes from 0.3.0:</dt>
		<dd>
			<ul>
			<li>Support for OTR protocol version 2; will still interoperate with
			version 1 clients (though with a warning to the user).</li>
			<li>Handle non-ASCII charsets properly.</li>
			</ul>
		</dd>
	</dl>
	
	<p class="date">5 Nov 2005</p>
	<dl>
	<dt><b>gaim-otr-3.0.0 and libotr-3.0.0 released.  Changes from 2.0.2:</b></dt>
		<dd>
			<ul>
				<li>Support for OTR protocol version 2; will still interoperate with
				version 1 clients (though with a warning to the user).</li>
				<li>The OTR button now has a right-click context menu with some useful options.</li>
				<li>The OTR button now has icons in addition to text to indicate what state
				a conversation is in.</li>
				<li>Most popups have been changed to inline messages in the conversation window.</li>
				</ul>
		</dd>
	</dl>
	
	<p class="date">5 Nov 2005</p>
	<dl>
	<dt></dt>
		<dd>
			The <a href="http://lists.cypherpunks.ca/pipermail/otr-users/2005-July/000316.html">identity-binding flaw</a> pointed out earlier has been fixed in
			<a href="http://www.cypherpunks.ca/otr/Protocol-v2-3.0.0.html">version 2 of the OTR Protocol</a>.
			<br />&nbsp;<br />
		</dd>
	</dl>
	
	<p class="date">24 Jul 2005</p>
	<dl>
	<dt></dt>
		<dd>
			Flaw in OTR protocol discovered: Well, this is the benefit of open protocols and open source.  :-)
			<p>Researchers from the Universita di Cantania (Italy) and IBM have looked
			at the OTR protocol, and <a href="http://lists.cypherpunks.ca/pipermail/otr-users/2005-July/000316.html">pointed out a flaw, 
			but there's a simple workaround for now</a>.</p>
		</dd>
	</dl>
		
	<p class="date">15 Jul 2005</p>
	<dl>
	<dt>Notice to Tiger iChat users: </dt>
		<dd>
			OS X version 10.4.2 seems to fix bug #4120243, so iChat can once again
			be used with otrproxy (via the HTTP proxy).
		</dd>
	</dl>
	
	<p class="date">16 Jun 2005</p>
	<dl>
	<dt></dt>
		<dd>
			Paul has created Fedora Core 4 rpms of libotr and gaim-otr, for
			<br />&nbsp;<br />
		</dd>
	</dl>
	
	<p class="date">16 May 2005</p>
	<dl>
	<dt>Notice to Tiger iChat users:</dt>
		<dd>
			It has come to our attention (mid-May 2005) that the Tiger
			version of iChat continues to have the bug that existed in Panther
			(#3930228) which prevents it from connecting to a localhost SOCKS or
			HTTPS proxy.  In addition, there is a new bug in Tiger (#4120243) which
			<a href="http://discussions.info.apple.com/webx?13@367.qsNaabcKVYH.632707@.68adb401/0">prevents
			iChat from using an HTTP proxy at all</a>.  As a result, the Tiger
			version of iChat is completely unable to use a localhost proxy, and so
			will no longer work with otrproxy.  This is very unfortunate, and the
			only workaround at the moment is to stick to Panther, or to use a
			different IM client.  If you choose the latter, note that <a href="http://www.adiumx.com/">Adium X</a> now supports OTR natively;
			there is no need to use otrproxy with it.
	</dd>
	</dl>
	
	<p class="date">4 May 2005</p>
	<dl>
	<dt></dt>
		<dd>
			We have checked yesterday's releases into <a href="http://sourceforge.net/cvs/?group_id=128860">CVS</a> at
			<a href="http://sourceforge.net/projects/otr/">SourceForge</a>.  We'll
			use that as our master repository from now on.  Feel free to start using
			the <a href="http://sourceforge.net/tracker/?group_id=128860&amp;atid=713088">bug</a>
			/ <a href="http://sourceforge.net/tracker/?group_id=128860&amp;atid=713090">patch</a>
			/ <a href="http://sourceforge.net/tracker/?group_id=128860&amp;atid=713091">feature
			request</a> trackers there, too.
		</dd>
	</dl>
	
	<p class="date">3 May 2005</p>
	<dl>	
	<dt><b>otrproxy-0.3.0 released</b></dt>
		<dd>Changes from 0.2.0:
			<ul>
			<li>Worked around a bug in Trillian that sometimes prevented it from
			connecting to the AIM/ICQ network through otrproxy.</li>
			<li>New per-buddy configuration available by double-clicking a buddy's
			name in the main OTR window.</li>
			<li>Popups on Win32 now actually show up in front of other windows.</li>
			</ul>
		</dd>
	</dl>
	
	<p class="date">3 May 2005</p>
	<dl>		
	<dt><b>gaim-otr-2.0.2 and libotr-2.0.2 released</b></dt>
		<dd>
			Changes from 2.0.1:
			<ul>
			<li>Fix to co-exist more nicely with other encrypting gaim plugins.</li>
			<li>gaim-otr is now autoconfiscated, thanks to Greg Troxel.</li>
			</ul>
		</dd>
	</dl>
		
	<p class="date">3 May 2005</p>
	<dl>		
	<dt><b>Adium X 0.80 is out</b></dt>
		<dd>
			<a href="http://www.adiumx.com/">Adium X</a> 0.80 is out, with native support for OTR!
		</dd>
	</dl>	
	
	<p class="date">3 May 2005</p>
	<dl>	
	<dt><b>OTR is now in Debian unstable</b></dt>
		<dd>
			Enjoy the magic of apt-get!
		</dd>
	</dl>
		
	<p class="date">24 Feb 2005</p>
	<dl>
	<dt><b>otrproxy-0.2.0 released</b></dt>
		<dd>
			Changes from 0.1.x:
			<ul>
			<li>There's now a GUI!  See the README for more details.</li>
			</ul>
		</dd>
	</dl>
		
	<p class="date">23 Feb 2005</p>
	<dl>
	<dt><b>gaim-otr 2.0.1 released</b></dt>
		<dd>
			Changes from 2.0.0:
			<ul>
			<li>Removed people without fingerprints from the Known Fingerprints list.</li>
			<li>The column heads in the Known Fingerprints list cause sorting to happen in the expected way.</li>
			</ul>
		</dd>
	</dl>

	<p class="date">22 Feb 2005</p>
	<dl>
	<dt><b>Nikita made a 0.1.2 version of otrproxy for OSX</b></dt>
		<dd>
			Changes from 0.1.1:
			<ul>
			<li>AIM screen names should be compared case- and space- insensitively.</li>
			</ul>
		</dd>
	</dl>
	
	<p class="date">16 Feb 2005</p>
	<dl>
	<dt><b>Version 2.0.1 of libotr released</b></dt>
		<dd>
			Changes from 2.0.0:
			<ul>
			<li>Don't send encrypted messages to a buddy who has disconnected his private connection with us.</li>
			<li>Don't show the user the "the last message was resent" notice if the message has never actually been sent before.</li>
			<li>Fix a crash bug that happened when messages were retransmitted under certain circumstances.</li>
			</ul>
		</dd>
	</dl>
		
	<p class="date">8 Feb 2005</p>
	<dl>
	<dt><b>Version 2.0.0 of libotr released</b></dt>
		<dd>
			Changes from 1.0.4:
			<ul>
			<li>Machine-readable records can now be attached to Data Messages inside the private channel.</li>
			<li>New OtrlUserState datatype encapsulates private keys and known fingerprints, instead of having a single global list.</li>
			<li>Added libotr.m4 for helping to autoconfiscate packages that use libotr.</li>
			<li>Resend the last message if it caused a re-keying.</li>
			<li>New OtrlPolicy datatype allows you to specify a per-connection OTR policy: never use OTR, OTR only if manually requested, 
			automatically start OTR if possible, refuse to <em>not</em> use OTR.</li>
			</ul>
		</dd>
	</dl>
	
	<p class="date">8 Feb 2005</p>
	<dl>
	<dt><b>Version 2.0.0 of gaim-otr released</b></dt>
		<dd>
			Changes from 1.0.3:
			<ul>
			<li>Clicking the OTR button produces a notice in the conversation window that it's doing something.</li>
			<li>Added default and per-buddy policy selection: never use OTR, OTR only
			if manually requested, automatically start OTR if possible, refuse to <em>not</em> use OTR.</li>
			<li>The OTR: button disappears if a particular buddy is set to never use OTR.</li>
			<li>Resend the last message if it caused a re-keying.</li>
			<li>OTR control messages are no longer displayed as if they were received as IM messages.</li>
			<li>New multi-page UI</li>
			<li>Send a control message to your buddy if you terminate a private conversation with him.</li>
			<li>Updated gaim-otr to match libotr 2.0.0 API.</li>
			<li>Separated gtk-specific code from general gaim code, with help from  Evan Schoenberg.</li>
			</ul>
		</dd>
	</dl>		

	<p class="date">2 Feb 2005</p>
	<dl>	
	<dt><b>Version 1.99.0 of libotr and gaim-otr released</b></dt>
		<dd>
			This is a preview release for 2.0.0.
		</dd>
	</dl>

	<p class="date">22 Jan 2005</p>
	<dl>	
	<dt><b>Version 1.0.4 of libotr released</b></dt>
		<dd>
			Changes:
			<ul>
			<li>Initial autoconfiscation, thanks to Greg Troxel.</li>
			<li>Log, but otherwise ignore, unrecognized OTR messages.</li>
			</ul>
		</dd>
	</dl>

	<p class="date">19 Jan 2005</p>
	<dl>	
	<dt><b>Version 0.1.1 of otrproxy released</b></dt>
		<dd>
			Changes:
			<ul>
			<li>The memory bug that caused crashes with the HTTP proxy has (hopefully)  been found and fixed.</li>
			<li>Added an OSX package</li>
			</ul>
		</dd>
	</dl>

	<p class="date">18 Jan 2005</p>
	<dl>	
	<dt><b>Version 1.0.3 of libotr released</b></dt>
		<dd>
			Changes:
			<ul>
			<li>The library has been separated from gaim-otr, so that other programs  can use it without having to install gaim-otr.</li>
			<li>We may as well try to use the "tag" method of checking for OTR, even  
			when we don't already know a fingerprint for the correspondent.</li>
			<li>Refactored the logic parts of gaim-otr into libotr, so they can be  shared by other libotr-enabled apps.</li>
			</ul>
		</dd>
	</dl>
		
	<p class="date">18 Jan 2005</p>
	<dl>	
	<dt><b>Version 1.0.3 of gaim-otr released</b></dt>
		<dd>
			Changes:
			<ul>
			<li>The library has been separated from gaim-otr, so that other programs  can use it without having to install gaim-otr.</li>
			<li>Generate private keys automatically, if needed.  Show a Please Wait  dialog while this is happening.</li>
			</ul>
		</dd>
	</dl>
		
	<p class="date">18 Jan 2005</p>
	<dl>	
	<dt><b>Version 0.1.0 of otrproxy released</b></dt>	
		<dd>
		This is the first release.
		</dd>
	</dl>

	<p class="date">21 Dec 2004</p>
	<dl>
	<dt><b>Version 1.0.2 released</b></dt>
		<dd>
			Changes:
			<ul>
			<li>If a Man-in-the-Middle steals both Alice's and Bob's DSA private keys,  he can perform a birthday attack to try to get 
			his session id with  each end to match.  Since the session id was only 64 bits long, his  work was only 2^32, which is not enough.  
			We now make the session id  the whole SHA-1 hash, instead of truncating it, to protect against  even this unlikely scenario.</li>
			<li>Made otr_sesskeys output the calculated public key as well, for added  ease of forging messages when you don't know any 
			plaintext.</li>
			</ul>
		</dd>
	</dl>

	<p class="date">18 Dec 2004</p>
	<dl>
	<dt><b>OTR was accepted to the CodeCon 2005</b></dt>
		<dd>
			Off-the-Record Messaging was accepted to the <a href="http://www.codecon.org/2005/">CodeCon 2005</a> conference.
		</dd>
	</dl>	

	<p class="date">16 Dec 2004</p>
	<dl>
	<dt></dt>
		<dd>
			Mentioned on <a href="http://it.slashdot.org/article.pl?sid=04/12/16/1946216">Slashdot</a>.
			<br />&nbsp;<br />
		</dd>
	</dl>
</div>


<div id="footer">
	<div style="float:right; text-align:right">
	<a href="http://validator.w3.org/check?uri=referer"><img
	    src="http://www.w3.org/Icons/valid-xhtml10-blue"
	    alt="Valid XHTML 1.0 Transitional" height="31" width="88" 
	    border="0" /></a><br />
	<span style="font-size:smaller">Website design by Ekrem Erdem</span>
	</div>
	<address>
	<a href="http://www.cs.uwaterloo.ca/~iang/">Ian Goldberg</a> and <a href="people.php">the OTR Development Team</a> [<a href="gpgkey.asc">GPG release signing key</a>]
	</address>
</div>
</body>
</html>
